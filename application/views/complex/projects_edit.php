<section class="panel">
    <div class="tabs-custom">
        <ul class="nav nav-tabs">
            <li>
                <a href="<?= base_url('complex/index') ?>"><i class="fas fa-list-ul"></i> <?= translate('all_complex') ?></a>
            </li>
            <li class="active">
                <a href="#edit" data-toggle="tab"><i class="far fa-edit"></i> <?= translate('projects_edit') ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="edit">
                <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" for="complex_id"><?= translate('complex') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <select class="form-control" name="complex_id" id="complex_id">
                            <option disabled><?= translate('please_select_one_item') ?></option>
                            <?php foreach ($complex as $comp) { ?>
                                <option value="<?= $comp['id'] ?>" <?php ($comp['id']==$project['complex_id']) ? 'selected' : '' ?>><?= $comp['name'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="error"><?= form_error('status') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="otaq_sayi"><?= translate('room_count') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" value="<?= $project['otaq_sayi'] ?>" name="otaq_sayi" class="form-control" id="otaq_sayi">
                        <span class="error"><?= form_error('otaq_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="umumi_sahe"><?= translate('general_area') ?> (m<sup>2</sup>) <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" value="<?= $project['umumi_sahe'] ?>" name="umumi_sahe" class="form-control" id="umumi_sahe">
                        <span class="error"><?= form_error('umumi_sahe') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="qiymet"><?= translate('price') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number" value="<?= $project['qiymet'] ?>" name="qiymet" class="form-control" id="qiymet">
                        <span class="error"><?= form_error('qiymet') ?></span>
                    </div>
                </div>

                <div class="form-group form-inline mt-md">
                    <label class="col-md-3 control-label">Repair <span class="required" aria-required="true">*</span></label>
                    <div class="col-md-4">
                        <label>
                            <input type="radio" <?= ($project['temiri']==1) ? 'checked' : '' ?> name="temiri" value="1">
                            Təmirli
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label>
                            <input type="radio" name="temiri" <?= ($project['temiri']==0) ? 'checked' : '' ?> value="0">
                            Təmirsiz
                        </label>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="eyvan_sayi"><?= translate('balcony') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number"  value="<?= $project['eyvan_sayi'] ?>" name="eyvan_sayi" class="form-control" id="eyvan_sayi">
                        <span class="error"><?= form_error('eyvan_sayi') ?></span>
                    </div>
                </div>

                <div class="form-group mt-md">
                    <label class="col-md-3 control-label" id="sanitar_qovsag"><?= translate('sanitary_junction') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="number"  value="<?= $project['sanitar_qovsag'] ?>" name="sanitar_qovsag" class="form-control" id="sanitar_qovsag">
                        <span class="error"><?= form_error('sanitar_qovsag') ?></span>
                    </div>
                </div>


                <div class="form-group mt-md for-image">
                    <label class="col-md-3 control-label"><?= translate('photo') ?> <span class="required">*</span></label>
                    <div class="col-md-6">
                        <input type="file" class="dropify" id="dropify" name="img" data-default-file="<?= base_url().'/uploads/images/projects/'.$project['photo'] ?>">
                        <span class="error"><?= form_error('img') ?></span>
                    </div>
                </div>

                <footer class="panel-footer mt-lg">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-block" name="submit" value="edit-project">
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