<section class="panel">
   <div class="tabs-custom">
      <ul class="nav nav-tabs">
         <li class="<?=(empty($validation_error) ? 'active' : '') ?>">
            <a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?=translate('all_users')?></a>
         </li>
         <li class="<?=(!empty($validation_error) ? 'active' : '') ?>">
            <a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('add_user')?></a>
         </li>
      </ul>
      <div class="tab-content">
         <div id="list" class="tab-pane <?=(empty($validation_error) ? 'active' : '')?>">
            <div class="mb-md">
               <table class="table table-bordered table-hover table-condensed mb-none table-export">
                  <thead>
                     <tr>
                        <th width="50"><?=translate('id')?></th>
                        <th><?=translate('user_name_surname')?></th>
                        <th><?= translate('user_email') ?></th>
                        <th><?= translate('user_mobile') ?></th>
                        <th><?= translate('user_balance') ?></th>
                        <th><?=translate('status')?></th>
                        <th class="no-sort"><?=translate('action')?></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $count = 1;
                        foreach($users as $row):
                     ?>
                     <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['balance'];?></td>
                        <td>
                           <div class="material-switch ml-xs">
                              <input class="users-switch" id="switch_<?=$row['id']?>" data-id="<?=$row['id']?>" name="users_switch<?=$row['id']?>" 
                              type="checkbox" <?php echo ($row['status'] == 1 ? 'checked' : ''); ?> />
                              <label for="switch_<?=$row['id'] ?>" class="label-primary"></label>
                           </div>
                        </td>
                        <td class="min-w-c">
                           <!--update link-->
                           <a href="<?=base_url('users/user_edit/'.$row['id'])?>" class="btn btn-default btn-circle icon">
                              <i class="fas fa-pen-nib"></i>
                           </a>
                           <!-- delete link -->
                           <?php echo btn_delete('users/user_delete/' . $row['id']);?>
                        </td>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="create">
            <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
            
               <div class="form-group mt-md">
                  <label class="col-md-3 control-label"><?=translate('name')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="text" class="form-control" name="name" placeholder="<?= translate('enter_name_surname') ?>" value="<?=set_value('name')?>" />
                     <span class="error"><?=form_error('name') ?></span>
                  </div>
               </div>

               <div class="form-group mt-md">
                  <label class="col-md-3 control-label"><?=translate('email')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="email" class="form-control" placeholder="<?= translate('enter_email') ?>" name="email" value="<?=set_value('email')?>" />
                     <span class="error"><?=form_error('email') ?></span>
                  </div>
               </div>

               <div class="form-group mt-md">
                  <label class="col-md-3 control-label"><?=translate('phone')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="text" class="form-control" placeholder="<?= translate('enter_phone_number') ?>" name="mobile" value="<?=set_value('phone')?>" />
                     <span class="error"><?=form_error('phone') ?></span>
                  </div>
               </div>

               <div class="form-group mt-md">
                  <label class="col-md-3 control-label"><?=translate('balance')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="number" class="form-control" placeholder="<?= translate('AZN') ?>" name="balance" value="<?=set_value('balance')?>" />
                     <span class="error"><?=form_error('balance') ?></span>
                  </div>
               </div>

               <div class="form-group mt-md">
                  <label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>

                  <div class="col-md-6">
                     <select class="form-control" name="status" id="status">
                        <option disabled selected><?= translate('please_select_one_item') ?></option>
                        <option value="0"><?= translate('deactive') ?></option>
                        <option value="1"><?= translate('active') ?></option>
                     </select>
                     <span class="error"><?=form_error('status') ?></span>
                  </div>
               </div>
               
               
               <footer class="panel-footer mt-lg">
                  <div class="row">
                     <div class="col-md-2 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-block" name="submit" value="save">
                           <i class="fas fa-plus-circle"></i> <?=translate('save')?>
                        </button>
                     </div>
                  </div>   
               </footer>
            <?php echo form_close();?>
         </div>
      </div>
   </div>
</section>