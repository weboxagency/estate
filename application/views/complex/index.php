<section class="panel">
    <div class="tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#complex" data-toggle="tab"><i class="fas fa-list-ul"></i> <?= translate('all_complex') ?></a>
            </li>
            <li class="<?=($this->session->flashdata('active') == 2 ? 'active' : '');?>">
                <a href="#projects" data-toggle="tab"><i class="fas fa-list-ul"></i> <?= translate('all_projects') ?></a>
            </li>
            <li class="<?=($this->session->flashdata('active') == 3 ? 'active' : '');?>">
                <a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?= translate('add_complex') ?></a>
            </li>
            <li class="<?=($this->session->flashdata('active') == 4 ? 'active' : '');?>">
                <a href="#create-project" data-toggle="tab"><i class="far fa-edit"></i> <?= translate('add_project') ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="complex" class="tab-pane active">
                <div class="mb-md">
                    <table class="table table-bordered table-hover table-condensed mb-none table-export">
                        <thead>
                            <tr>
                                <th width="50"><?= translate('id') ?></th>
                                <th><?= translate('name') ?></th>
                                <th><?= translate('phone_number') ?></th>
                                <th><?= translate('email') ?></th>
                                <th><?= translate('address') ?></th>
                                <th><?= translate('status') ?></th>
                                <th class="no-sort"><?= translate('action') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($complex as $row) :
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['phone1']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td>
                                        <div class="material-switch ml-xs">
                                            <input class="complex-switch" id="switch_<?= $row['id'] ?>" data-id="<?= $row['id'] ?>" name="complex_switch<?= $row['id'] ?>" type="checkbox" <?php echo ($row['status'] == 1 ? 'checked' : ''); ?> />
                                            <label for="switch_<?= $row['id'] ?>" class="label-primary"></label>
                                        </div>
                                    </td>
                                    <td class="min-w-c">
                                        <!--update link-->
                                        <a href="<?= base_url('complex/complex_edit/' . $row['id']) ?>" class="btn btn-default btn-circle icon">
                                            <i class="fas fa-pen-nib"></i>
                                        </a>
                                        <!-- delete link -->
                                        <?php echo btn_delete('complex/complex_delete/' . $row['id']); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="projects" class="tab-pane <?=($this->session->flashdata('active') == 2 ? 'active' : '');?>">
                <div class="mb-md">
                    <table class="table table-bordered table-hover table-condensed mb-none table-export">
                        <thead>
                            <tr>
                                <th width="50"><?= translate('id'); ?></th>
                                <th><?= translate('complex'); ?></th>
                                <th><?= translate('room_count'); ?></th>
                                <th><?= translate('general_area'); ?></th>
                                <th><?= translate('price'); ?></th>
                                <th><?= translate('repair'); ?></th>
                                <th class="no-sort"><?= translate('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($projects as $row) :
                            ?>
                                <tr>
                                    <td><?= $count++; ?></td>
                                    <td><?= complex_name($row['complex_id']); ?></td>
                                    <td><?= $row['otaq_sayi']; ?></td>
                                    <td><?= $row['umumi_sahe'] . ' m<sup>2</sup>'; ?></td>
                                    <td><?= $row['qiymet']; ?></td>
                                    <td>
                                        <?php if ($row['temiri'] == 1) { ?>
                                            <button class="btn btn-sm btn-outline-primary">
                                                Təmirli
                                            </button>
                                        <?php } else { ?>
                                            <button class="btn btn-sm btn-outline-danger">
                                                Təmirsiz
                                            </button>
                                        <?php } ?>
                                    </td>
                                    
                                    <td class="min-w-c">
                                        <!--update link-->
                                        <a href="<?= base_url('complex/projects_edit/' . $row['id']); ?>" class="btn btn-default btn-circle icon">
                                            <i class="fas fa-pen-nib"></i>
                                        </a>
                                        <!-- delete link -->
                                        <?= btn_delete('complex/project_delete/' . $row['id']); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane <?=($this->session->flashdata('active') == 3 ? 'active' : '');?>" id="create">
                <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" />
                        <span class="error"><?= form_error('name') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('phone_number') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="phone1" />
                        <span class="error"><?= form_error('phone1') ?></span>
                    </div>
                </div>
                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('additional_phone_number') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="phone2" />
                        <span class="error"><?= form_error('phone2') ?></span>
                    </div>
                </div>
                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('additional_phone_number_2') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="phone3" />
                        <span class="error"><?= form_error('phone3') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('email') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" />
                        <span class="error"><?= form_error('email') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md address">
                    <label class="col-md-3 control-label"><?= translate('address') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="address" placeholder="address" value="<?= set_value('address') ?>" />
                        <span class="error"><?= form_error('address') ?></span>
                        <input type="hidden" name="latitude" id="latitude" value="">
                        <input type="hidden" name="longitude" id="longitude" value="">
                        <p class="form-message form-message--info align-items-center">
                            <i class="fa fa-map-marker"></i>
                            <span>
                                <a href="#" class="googleMapImg" data-toggle="modal" data-target="#modalMap">Xəritədə göstər</a>
                            </span>
                        </p>

                        <div class="modal fade bd-example-modal-lg" id="modalMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-close" data-dismiss="modal">
                                            <span>
                                                <i class="fa fa-times"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <input id="pac-input" class="controls pac-target-input" type="text" placeholder="Ünvan" />
                                        <div class="map-complex" id="gmap"></div>
                                        <a id="savelocation" href="#" class="link-button link-button--primary link-setup d-none d-sm-flex" data-dismiss="modal">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-md description">
                    <label class="col-md-3 control-label"><?= translate('selected_location') ?></label>
                    <div class="col-md-6">
                        <img id="map-id" src="">
                    </div>
                </div>



                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('domain') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="url" class="form-control" name="domain" value="<?= set_value('domain') ?>" />
                        <span class="error"><?= form_error('domain') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('company_name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="company_name" value="<?= set_value('company_name') ?>" />
                        <span class="error"><?= form_error('company_name') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="metro_name"><?= translate('metro_name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="metro_name" id="metro_name">
                            <option disabled selected><?= translate('please_select_one_item') ?></option>
                            <?php foreach ($metros as $metro) { ?>
                                <option value="<?= $metro['metro_name'] ?>"><?= $metro['metro_name'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="error"><?= form_error('status') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="region_name"><?= translate('region_name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="region_name" id="region_name">
                            <option disabled selected><?= translate('please_select_one_item') ?></option>
                            <?php foreach ($regions as $region) { ?>
                                <option value="<?= $region['region_name'] ?>"><?= $region['region_name'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="error"><?= form_error('status') ?></span>
                    </div>
                </div>


                <div class="form-group mt-md for-image">
                    <label class="col-md-3 control-label"><?= translate('avatar_photo') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="file" class="dropify" id="dropify" name="img">
                        <span class="error"><?= form_error('img') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md for-image">
                    <label class="col-md-3 control-label"><?= translate('photos') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="file" class="dropify" id="dropify" multiple name="complex_photo[]">
                        <span class="error"><?= form_error('photos') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('end_date') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="end_date" value="<?= set_value('end_date') ?>" />
                        <span class="error"><?= form_error('end_date') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('korpus_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="korpus_sayi" value="<?= set_value('korpus_sayi') ?>" />
                        <span class="error"><?= form_error('korpus_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('mertebe_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="mertebe_sayi" value="<?= set_value('mertebe_sayi') ?>" />
                        <span class="error"><?= form_error('mertebe_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('menzil_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="menzil_sayi" value="<?= set_value('menzil_sayi') ?>" />
                        <span class="error"><?= form_error('menzil_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('blok_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="blok_sayi" value="<?= set_value('blok_sayi') ?>" />
                        <span class="error"><?= form_error('blok_sayi') ?></span>
                    </div>
                </div>


                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('details') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <textarea name="details" class="form-control summernote" id="summernote"></textarea>
                        <span class="error"><?= form_error('details') ?></span>
                    </div>
                </div>

                <div class="ustunlukler">
                    <div class="form-group mt-md ">
                        <label class="col-md-3 control-label"><?= translate('ustunlukler') ?> <span class="required">*</span></label>
                        <div class="col-md-6 ">
                            <input type="text" class="form-control" name="ustunlukler[]" value="<?= set_value('ustunlukler') ?>" />
                            <span class="error"><?= form_error('ustunlukler') ?></span>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-success new-ustunlukler">
                                + <?= translate('new') ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('video_url') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="url" class="form-control" name="video_url" value="<?= set_value('video_url') ?>" />
                        <span class="error"><?= form_error('video_url') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="status"><?= translate('status') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="status" id="status">
                            <option disabled selected><?= translate('please_select_one_item') ?></option>
                            <option value="0"><?= translate('deactive') ?></option>
                            <option value="1"><?= translate('active') ?></option>
                        </select>
                        <span class="error"><?= form_error('status') ?></span>
                    </div>
                </div>


                <footer class="panel-footer mt-lg">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-block" name="submit" value="save">
                                <i class="fas fa-plus-circle"></i> <?= translate('save') ?>
                            </button>
                        </div>
                    </div>
                </footer>
                <?php echo form_close(); ?>
            </div>
            
            <div class="tab-pane <?=($this->session->flashdata('active') == 4 ? 'active' : '');?>" id="create-project">
                <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="complex_id"><?= translate('complex') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="complex_id" id="complex_id">
                            <option disabled selected><?= translate('please_select_one_item') ?></option>
                            <?php foreach ($complex as $comp) { ?>
                                <option value="<?= $comp['id'] ?>"><?= $comp['name'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="error"><?= form_error('status') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="otaq_sayi"><?= translate('room_count') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" name="otaq_sayi" class="form-control" id="otaq_sayi">
                        <span class="error"><?= form_error('otaq_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="umumi_sahe"><?= translate('general_area') ?> (m<sup>2</sup>) <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" name="umumi_sahe" class="form-control" id="umumi_sahe">
                        <span class="error"><?= form_error('umumi_sahe') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="qiymet"><?= translate('price') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" name="qiymet" class="form-control" id="qiymet">
                        <span class="error"><?= form_error('qiymet') ?></span>
                    </div>
                </div>

                <div class="form-group form-inline mt-md">
                    <label class="col-md-3 control-label">Repair <span class="required" aria-required="true">*</span></label>
                    <div class="col-md-4">
                        <label>
                            <input type="radio" name="temiri" value="1">
                            Təmirli
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label>
                            <input type="radio" name="temiri" value="0">
                            Təmirsiz
                        </label>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="eyvan_sayi"><?= translate('balcony') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" name="eyvan_sayi" class="form-control" id="eyvan_sayi">
                        <span class="error"><?= form_error('eyvan_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="sanitar_qovsag"><?= translate('sanitary_junction') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" name="sanitar_qovsag" class="form-control" id="sanitar_qovsag">
                        <span class="error"><?= form_error('sanitar_qovsag') ?></span>
                    </div>
                </div>



                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('details') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <textarea name="otaq_tesviri" class="form-control summernote" id="summernote"></textarea>
                        <span class="error"><?= form_error('details') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md for-image">
                    <label class="col-md-3 control-label"><?= translate('photo') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="file" class="dropify" id="dropify" name="img">
                        <span class="error"><?= form_error('img') ?></span>
                    </div>
                </div>

                <footer class="panel-footer mt-lg">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-block" name="submit" value="save-project">
                                <i class="fas fa-plus-circle"></i> <?= translate('save') ?>
                            </button>
                        </div>
                    </div>
                </footer>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcVxlZlT3nO44ljCnR2f89GqzxkuCQftY&libraries=places&callback=initMap&language=az"></script>
<script>
    $('body').on("click", ".new-ustunlukler", function(e) {
        e.preventDefault();
        $('.ustunlukler').append('<div class="form-group mt-md remove-this-section"><label class="col-md-3 control-label"><?= translate('ustunlukler') ?> <span class="required">*</span></label> <div class="col-md-6 "> <input type="text" class="form-control" name="ustunlukler[]" value="<?= set_value('ustunlukler') ?>" /> <span class="error"><?= form_error('ustunlukler') ?></span> </div> <div class="col-md-2"> <button class="btn btn-sm btn-danger remove-ustunlukler"> <span><i class="fa fa-times"></i></span> <?= translate('new') ?> </button> </div> </div>');

    });

    $('body').on("click", ".remove-ustunlukler", function(e) {
        e.preventDefault();
        $(this).closest('.remove-this-section').remove();
    })
</script>