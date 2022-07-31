<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=base_url('complex/index')?>"><i class="fas fa-list-ul"></i> <?=translate('all_complex')?></a>
			</li>
			<li class="active">
				<a href="#edit" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('complex_edit')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="edit">
				<?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
				
				<div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" value="<?= $complex['name'] ?>" class="form-control" name="name" />
                        <span class="error"><?= form_error('name') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('phone_number') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" value="<?= $complex['phone1'] ?>" class="form-control" name="phone1" />
                        <span class="error"><?= form_error('phone1') ?></span>
                    </div>
                </div>
                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('additional_phone_number') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="<?= $complex['phone2'] ?>" name="phone2" />
                        <span class="error"><?= form_error('phone2') ?></span>
                    </div>
                </div>
                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('additional_phone_number_2') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="<?= $complex['phone3'] ?>" name="phone3" />
                        <span class="error"><?= form_error('phone3') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('email') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" value="<?= $complex['email'] ?>" name="email" />
                        <span class="error"><?= form_error('email') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md address">
                    <label class="col-md-3 control-label"><?= translate('address') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="address" placeholder="address" value="<?= $complex['address'] ?>" />
                        <span class="error"><?= form_error('address') ?></span>
                        <input type="hidden" name="latitude" id="latitude" value="<?= $complex['latitude'] ?>">
                        <input type="hidden" name="longitude" id="longitude" value="<?= $complex['longitude'] ?>">
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
                        <input type="url" class="form-control" value="<?= $complex['domain'] ?>" name="domain" value="<?= set_value('domain') ?>" />
                        <span class="error"><?= form_error('domain') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('company_name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="<?= $complex['company_name'] ?>" name="company_name" value="<?= set_value('company_name') ?>" />
                        <span class="error"><?= form_error('company_name') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="metro_name"><?= translate('metro_name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="metro_name" id="metro_name">
                            <option disabled><?= translate('please_select_one_item') ?></option>
                            <?php foreach ($metros as $metro) { ?>
                                <option value="<?= $metro['metro_name'] ?>" <?php ($metro['metro_name']==$complex['metro_name']) ? 'selected' : '' ?>><?= $metro['metro_name'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="error"><?= form_error('status') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="region_name"><?= translate('region_name') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="region_name" id="region_name">
                            <option disabled><?= translate('please_select_one_item') ?></option>
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
                        <input type="file" class="dropify" id="dropify" name="avatar_photo" data-default-file="<?= base_url().'uploads/images/complex/avatar/'.$complex['avatar_photo'] ?>">
                        <span class="error"><?= form_error('avatar_photo') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md for-image">
                    <label class="col-md-3 control-label"><?= translate('photos') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="file" class="dropify" id="dropify" multiple name="photos[]">
                        <span class="error"><?= form_error('photos') ?></span>
                        <?php 
                            $images = json_decode($complex['photos']);
                            $ustunlukler = json_decode($complex['ustunlukler']);
                                foreach ($images as $image)
                                {
                        ?>
                               <img src="<?= base_url().'/uploads/images/complex/avatar/'.$image  ?>" height="70" alt="">
                        <?php } ?>
                        
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('end_date') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="end_date" value="<?= $complex['end_date'] ?>" />
                        <span class="error"><?= form_error('end_date') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('korpus_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="korpus_sayi" value="<?= $complex['korpus_sayi'] ?>" />
                        <span class="error"><?= form_error('korpus_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('mertebe_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="mertebe_sayi" value="<?= $complex['mertebe_sayi'] ?>" />
                        <span class="error"><?= form_error('mertebe_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('menzil_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="menzil_sayi" value="<?= $complex['menzil_sayi'] ?>" />
                        <span class="error"><?= form_error('menzil_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('blok_sayi') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="blok_sayi" value="<?= $complex['blok_sayi'] ?>" />
                        <span class="error"><?= form_error('blok_sayi') ?></span>
                    </div>
                </div>


                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('details') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <textarea name="details" class="form-control summernote" id="summernote"><?= $complex['details'] ?></textarea>
                        <span class="error"><?= form_error('details') ?></span>
                    </div>
                </div>

                <div class="ustunlukler">
                    <div class="form-group mt-md ">
                        <label class="col-md-3 control-label"><?= translate('ustunlukler') ?> <span class="required">*</span></label>
                        <?php foreach($ustunlukler as $ustunluk) { ?>
                        <div class="col-md-6 ">
                            <input type="text" class="form-control" name="ustunlukler[]" value="<?= $ustunluk ?>" />
                            <span class="error"><?= form_error('ustunlukler') ?></span>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-sm btn-success new-ustunlukler">
                                + <?= translate('new') ?>
                            </button>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label"><?= translate('video_url') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="url" class="form-control" name="video_url" value="<?= $complex['video_url'] ?>" />
                        <span class="error"><?= form_error('video_url') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="status"><?= translate('status') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="status" id="status">
                            <option disabled><?= translate('please_select_one_item') ?></option>
                            <option value="0" <?= ($complex['status']==1 ? 'selected' : '') ?>><?= translate('deactive') ?></option>
                            <option value="1" <?= ($complex['status']==0 ? 'selected' : '') ?>><?= translate('active') ?></option>
                        </select>
                        <span class="error"><?= form_error('status') ?></span>
                    </div>
                </div>


                <footer class="panel-footer mt-lg">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-block" name="submit" value="edit">
                                <i class="fas fa-plus-circle"></i> <?= translate('save') ?>
                            </button>
                        </div>
                    </div>
                </footer>
				<?php echo form_close();?>
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