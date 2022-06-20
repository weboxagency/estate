<section class="panel">
	<div class="tabs-custom">

		<div class="tab-content">
			<div class="tab-pane active" id="edit">
				<?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>

                    <div class="form-group mt-md">
                        <label class="col-md-3 control-label"><?=translate('page')?> <span class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control"  value="<?= $banner['page'] ?>" name="page">
                            <span class="error"><?=form_error('page') ?></span>
                        </div>
                    </div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('external_link')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="url" class="form-control"  value="<?= $banner['external_link'] ?>" name="external_link">
							<span class="error"><?=form_error('external_link') ?></span>
						</div>
					</div>

                    <div class="form-group mt-md">
                        <label class="col-md-3 control-label" for="side"><?=translate('side')?> <span class="required">*</span></label>
                        <div class="col-md-6">
                            <select class="form-control" name="side" id="side">
                                <option disabled selected><?= translate('please_select_one_item') ?></option>
                                <option value="left" <?= ($banner['side']=='left') ? 'selected' : '' ?>><?= translate('left') ?></option>
                                <option value="right" <?= ($banner['side']=='right') ? 'selected' : '' ?>><?= translate('right') ?></option>
                                <option value="center" <?= ($banner['side']=='center') ? 'selected' : '' ?>><?= translate('center') ?></option>
                                <option value="top" <?= ($banner['side']=='top') ? 'selected' : '' ?>><?= translate('top') ?></option>
                            </select>
                            <span class="error"><?=form_error('side') ?></span>
                        </div>
                    </div>

                    <div class="form-group mt-md">
                        <label class="col-md-3 control-label" for="type"><?=translate('type')?> <span class="required">*</span></label>
                        <div class="col-md-6">
                            <select class="form-control type" name="type" id="type">
                                <option disabled selected><?= translate('please_select_one_item') ?></option>
                                <option value="image" <?= ($banner['type']=='image') ? 'selected' : '' ?>><?= translate('image') ?></option>
                                <option value="iframe" <?= ($banner['type']=='iframe') ? 'selected' : '' ?>><?= translate('iframe') ?></option>
                            </select>
                            <span class="error"><?=form_error('type') ?></span>
                        </div>
                    </div>

                    <div class="form-group mt-md for-image">
                        <label class="col-md-3 control-label"><?=translate('banner_image')?> <span class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="file" class="dropify" id="dropify" name="img">
                            <span class="error"><?=form_error('file') ?></span>
                        </div>
                    </div>

                    <div class="form-group mt-md for-iframe">
                        <label class="col-md-3 control-label"><?=translate('iframe')?> <span class="required">*</span></label>
                        <div class="col-md-6">
                            <textarea name="img" id="img" class="form-control" cols="30" rows="10"></textarea>
                            <span class="error"><?=form_error('img') ?></span>
                        </div>
                    </div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
								<option disabled><?= translate('please_select_one_item') ?></option>
								<option value="0"><?= translate('deactive') ?></option>
								<option value="1"><?= translate('active') ?></option>
							</select>
							<span class="error"><?=form_error('status') ?></span>
						</div>
					</div>
					
					
					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" class="btn btn-default btn-block" name="submit" value="edit">
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

<script>
	$( document ).ready(function() {
        var type = $(".type").val();
        if (type=="image")
        {
            $('.for-image').show();
            $('.for-iframe').hide();
        }
        else
        {
            $('.for-image').hide();
            $('.for-iframe').show();
        }
    });
</script>
<script>
    $('.for-image').hide();
    $('.for-iframe').hide();
    $('.type').change(function () {
        var type = $(this).val();
        if (type=="image")
        {
            $('.for-image').show();
            $('.for-iframe').hide();
        }
        else
        {
            $('.for-image').hide();
            $('.for-iframe').show();
        }
    })
</script>