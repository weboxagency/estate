<aside id="sidebar-left" class="sidebar-left">
	<div class="sidebar-header">
		<div class="sidebar-title">
			<?= translate('dashboard') ?>
		</div>
	</div>

	<div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <!-- dashboard -->
                    <?php if (is_superadmin_loggedin()) { ?>
                    <li class="nav-parent <?php if ($main_menu == 'dashboard') echo 'nav-active nav-expanded';?>">
                        <a>
                            <i class="icons icon-grid"></i><span><?=translate('dashboard')?></span>
                        </a>
                        <ul class="nav nav-children">
                        <?php $school_id = $this->input->get('school_id'); ?>
                            <li class="<?php if ($main_menu == 'dashboard' && empty($school_id)) echo 'nav-active';?>">
                                <a href="<?=base_url('dashboard')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i> <?=translate('all_branches')?></span>
                                </a>
                            </li>
                            <?php
                                $branches = $this->db->get('branch')->result();
                                foreach($branches as $row){
                            ?>
                                <li class="<?php if ($school_id == $row->id) echo 'nav-active';?>">
                                    <a href="<?=base_url('dashboard/index?school_id='.$row->id)?>">
                                        <span><i class="fas fa-caret-right" aria-hidden="true"></i> <?=html_escape($row->name)?></span>
                                    </a>
                                </li>
                        <?php } ?>
                        </ul>
                    </li>
                    <?php } else { ?>
                            <li class="<?php if ($main_menu == 'dashboard') echo 'nav-active'; ?>">
                                <a href="<?=base_url('dashboard')?>">
                                    <i class="icons icon-grid"></i><span><?=translate('dashboard')?></span>
                                </a>
                            </li>
                    <?php } ?>
                    <?php if (is_superadmin_loggedin()) : ?>
                    <!-- branch -->
                    <li class="<?php if ($main_menu == 'branch') echo 'nav-active';?>">
                        <a href="<?=base_url('branch')?>">
                            <i class="icons icon-directions"></i><span><?=translate('branch')?></span>
                        </a>
                    </li>
                    <?php endif; ?>




























                    <!-- ESTATE MENUS START -->

                    <?php if (is_superadmin_loggedin()) : ?>
                    <!-- users -->
                    <li class="<?php if ($main_menu == 'ads') echo 'nav-active';?>">
                        <a href="<?=base_url('ads/index')?>">
                            <i class="icons icon-list"></i><span><?=translate('ads')?></span>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (is_superadmin_loggedin()) : ?>
                    <!-- users -->
                    <li class="<?php if ($main_menu == 'complaints') echo 'nav-active';?>">
                        <a href="<?=base_url('complaints/index')?>">
                            <i class="fa fa-comment"></i><span><?=translate('complaints')?></span>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    if (get_permission('cities', 'is_view') ||
                        get_permission('regions', 'is_view') ||
                        get_permission('districts', 'is_view') ||
                        get_permission('metros', 'is_view') ||
                        get_permission('targets', 'is_view'))  {
                        ?>
                    <!-- Patient Details -->
                    <li class="nav-parent <?php if ($main_menu == 'locations') echo 'nav-expanded nav-active'; ?>">
                        <a><i class="fas fa-globe"></i><span><?php echo translate('locations'); ?></span></a>
                        <ul class="nav nav-children">
                        <?php if(get_permission('cities', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'locations/cities') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('locations/cities'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('cities'); ?></span>
                                </a>
                            </li>
                       <?php } ?>
                       <?php if(get_permission('regions', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'locations/regions') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('locations/regions'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('regions'); ?></span>
                                </a>
                            </li>
                       <?php } ?>
                       <?php if(get_permission('districts', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'locations/districts') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('locations/districts'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('districts'); ?></span>
                                </a>
                            </li>
                       <?php } ?>
                       <?php if(get_permission('metros', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'locations/metros') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('locations/metros'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('metros'); ?></span>
                                </a>
                            </li>
                       <?php } ?>
                       <?php if(get_permission('targets', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'locations/targets') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('locations/targets'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('targets'); ?></span>
                                </a>
                            </li>
                       <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if (is_superadmin_loggedin()) : ?>
                    <!-- users -->
                    <li class="<?php if ($main_menu == 'users') echo 'nav-active';?>">
                        <a href="<?=base_url('users/index')?>">
                            <i class="icons icon-user-follow"></i><span><?=translate('users')?></span>
                        </a>
                    </li>
                    <?php endif; ?>



                    <!-- ESTATE MENUS END -->


































































                    
                    <?php
                    if (get_permission('frontend_setting', 'is_view') ||
                        get_permission('frontend_menu', 'is_view') ||
                        get_permission('frontend_section', 'is_view') ||
                        get_permission('manage_page', 'is_view') ||
                        get_permission('frontend_slider', 'is_view') ||
                        get_permission('frontend_features', 'is_view') ||
                        get_permission('frontend_testimonial', 'is_view') ||
                        get_permission('frontend_services', 'is_view') ||
                        get_permission('frontend_faq', 'is_view')) {
                        ?>
                    <!-- Patient Details -->
                    <li class="nav-parent <?php if ($main_menu == 'frontend') echo 'nav-expanded nav-active'; ?>">
                        <a><i class="fas fa-globe"></i><span><?php echo translate('frontend'); ?></span></a>
                        <ul class="nav nav-children">
                        <?php if(get_permission('frontend_setting', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/setting') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/setting'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('setting'); ?></span>
                                </a>
                            </li>
                       <?php } if(get_permission('frontend_menu', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/menu' || $sub_page == 'frontend/menu_edit') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/menu'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('menu'); ?></span>
                                </a>
                            </li>
                        <?php } if(get_permission('frontend_section', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/section_home' ||
                                            $sub_page == 'frontend/section_doctors' ||
                                                $sub_page == 'frontend/section_appointment' ||
                                                    $sub_page == 'frontend/section_faq' ||
                                                        $sub_page == 'frontend/section_contact' ||
                                                            $sub_page == 'frontend/section_about' ||
                                                                $sub_page == 'frontend/section_services') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/section/index'); ?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('page') . " " . translate('section'); ?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('manage_page', 'is_view')){ ?>
                                    <li class="<?php if ($sub_page == 'frontend/content' || $sub_page == 'frontend/content_edit') echo 'nav-active'; ?>">
                                        <a href="<?php echo base_url('frontend/content'); ?>">
                                            <span><i class="fas fa-caret-right" aria-hidden="true"></i><?php echo translate('manage') . " " . translate('page'); ?></span>
                                        </a>
                                    </li>
                            <?php } if(get_permission('frontend_slider', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/slider' || $sub_page == 'frontend/slider_edit') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/slider'); ?>">
                                    <span><i class="fas fa-caret-right"></i><?php echo translate('slider'); ?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('frontend_features', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/features' || $sub_page == 'frontend/features_edit') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/features'); ?>">
                                    <span><i class="fas fa-caret-right"></i><?php echo translate('features'); ?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('frontend_testimonial', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/testimonial' || $sub_page == 'frontend/testimonial_edit') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/testimonial'); ?>">
                                    <span><i class="fas fa-caret-right"></i><?php echo translate('testimonial'); ?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('frontend_services', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/services' || $sub_page == 'frontend/services_edit') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/services'); ?>">
                                    <span><i class="fas fa-caret-right"></i><?php echo translate('service'); ?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('frontend_faq', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/faq' || $sub_page == 'frontend/faq_edit') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/faq'); ?>">
                                    <span><i class="fas fa-caret-right"></i><?php echo translate('faq'); ?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('frontend_gallery_type', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/gallery_category') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/gallery/category'); ?>">
                                    <span><i class="fas fa-caret-right"></i><?php echo translate('gallery') . " " . translate('category'); ?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('frontend_gallery', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'frontend/gallery' || $sub_page == 'frontend/gallery_edit' || $sub_page == 'frontend/gallery_album') echo 'nav-active'; ?>">
                                <a href="<?php echo base_url('frontend/gallery'); ?>">
                                    <span><i class="fas fa-caret-right"></i><?php echo translate('gallery'); ?></span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                   
                    <?php
                    if(get_permission('sendsmsmail', 'is_add') ||
                    get_permission('sendsmsmail_template', 'is_view') ||
                    get_permission('sendsmsmail_reports', 'is_view')) {
                    ?>
                    <!-- SMS -->
                    <li class="nav-parent <?php if ($main_menu == 'sendsmsmail') echo 'nav-expanded nav-active';?>">
                        <a>
                            <i class="icons icon-bell"></i><span><?=translate('bulk_sms_and_email')?></span>
                        </a>
                        <ul class="nav nav-children">
                            <?php if (get_permission('sendsmsmail', 'is_add')) {  ?>
                            <li class="<?php if ($sub_page == 'sendsmsmail/sms' || $sub_page == 'sendsmsmail/email') echo 'nav-active';?>">
                                <a href="<?=base_url('sendsmsmail/sms')?>">
                                    <span><i class="fas fa-caret-right"></i><?=translate('send')?> Sms / Email</span>
                                </a>
                            </li>
                            <li class="<?php if ($sub_page == 'sendsmsmail/campaign_reports') echo 'nav-active';?>">
                                <a href="<?=base_url('sendsmsmail/campaign_reports')?>">
                                    <span><i class="fas fa-caret-right"></i>Sms / Email <?=translate('report')?></span>
                                </a>
                            </li>
                            <?php } if (get_permission('sendsmsmail_template', 'is_view')) {  ?>
                            <li class="<?php if ($sub_page == 'sendsmsmail/template_sms' || $sub_page == 'sendsmsmail/template_edit_sms') echo 'nav-active';?>">
                                <a href="<?=base_url('sendsmsmail/template/sms')?>">
                                    <span><i class="fas fa-caret-right"></i> <?=translate('sms') . " " . translate('template')?></span>
                                </a>
                            </li>
                            <li class="<?php if ($sub_page == 'sendsmsmail/template_email' || $sub_page == 'sendsmsmail/template_edit_email') echo 'nav-active';?>">
                                <a href="<?=base_url('sendsmsmail/template/email')?>">
                                    <span><i class="fas fa-caret-right"></i> <?=translate('email') . " " . translate('template')?></span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                    
                  
                    <!-- message -->
                    <li class="<?php if ($main_menu == 'message') echo 'nav-active';?>">
                        <a href="<?=base_url('communication/mailbox/inbox')?>">
                            <i class="icons icon-envelope-open"></i><span><?=translate('message')?></span>
                        </a>
                    </li>
                    <?php
                    $schoolSettings = false;
                    if (get_permission('school_settings', 'is_view') ||
                    get_permission('live_class_config', 'is_view') ||
                    get_permission('payment_settings', 'is_view') ||
                    get_permission('sms_settings', 'is_view') ||
                    get_permission('email_settings', 'is_view') ||
                    get_permission('accounting_links', 'is_view')) {
                        $schoolSettings = true;
                    }
                    if (get_permission('global_settings', 'is_view') ||
                    ($schoolSettings == true) ||
                    get_permission('translations', 'is_view') ||
                    get_permission('cron_job', 'is_view') ||
                    get_permission('system_update', 'is_add') ||
                    get_permission('custom_field', 'is_view') ||
                    get_permission('backup', 'is_view') ||
                    get_permission('user_agreement', 'is_view') ||
                    get_permission('ads_configuration', 'is_view')
                    ) {
                    ?>
                    <!-- setting -->
                    <li class="nav-parent <?php if ($main_menu == 'settings' || $main_menu == 'school_m') echo 'nav-expanded nav-active';?>">
                        <a>
                            <i class="icons icon-briefcase"></i><span><?=translate('settings')?></span>
                        </a>
                        <ul class="nav nav-children">
                            <?php if(get_permission('ads_banners', 'is_view')){ ?>
                            <li class="<?php if($sub_page == 'settings/ads_configuration') echo 'nav-active';?>">
                                <a href="<?=base_url('settings/ads_configuration')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('ads_configuration')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('ads_banners', 'is_view')){ ?>
                            <li class="<?php if($sub_page == 'settings/about_ads_configuration') echo 'nav-active';?>">
                                <a href="<?=base_url('settings/about_ads_configuration')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('about_ads_configuration')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('ads_banners', 'is_view')){ ?>
                            <li class="<?php if($sub_page == 'settings/ads_banners') echo 'nav-active';?>">
                                <a href="<?=base_url('settings/ads_banners')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('ads_banners')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('global_settings', 'is_view')){ ?>
                            <li class="<?php if($sub_page == 'settings/universal') echo 'nav-active';?>">
                                <a href="<?=base_url('settings/universal')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('global_settings')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('user_agreement', 'is_view')){ ?>
                            <li class="<?php if($sub_page == 'settings/user_agreement') echo 'nav-active';?>">
                                <a href="<?=base_url('settings/user_agreement')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('user_agreement')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('ads_rules', 'is_view')){ ?>
                            <li class="<?php if($sub_page == 'settings/ads_rules') echo 'nav-active';?>">
                                <a href="<?=base_url('settings/ads_rules')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('ads_rules')?></span>
                                </a>
                            </li>
                            <?php } if($schoolSettings == true){ ?>
                            <li class="<?php if($main_menu == 'school_m') echo 'nav-active';?>">
                                <a href="<?=base_url('school_settings')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('school_settings')?></span>
                                </a>
                            </li>
                            <?php } if (is_superadmin_loggedin()) { ?>
                            <li class="<?php if ($sub_page == 'role/index' || $sub_page == 'role/permission') echo 'nav-active';?>">
                                <a href="<?=base_url('role')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('role_permission')?></span>
                                </a>
                            </li>
                            <?php } if (is_superadmin_loggedin()) { ?>
                            <li class="<?php if ($sub_page == 'sessions/index') echo 'nav-active';?>">
                                <a href="<?=base_url('sessions')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('session_settings')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('translations', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'language/index') echo 'nav-active';?>">
                                <a href="<?=base_url('translations')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('translations')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('cron_job', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'cron_api/index') echo 'nav-active';?>">
                                <a href="<?=base_url('cron_api')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('cron_job')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('custom_field', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'custom_field/index') echo 'nav-active';?>">
                                <a href="<?=base_url('custom_field')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('custom_field')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('backup', 'is_view')){ ?>
                            <li class="<?php if ($sub_page == 'database_backup/index') echo 'nav-active';?>">
                                <a href="<?=base_url('backup')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('database_backup')?></span>
                                </a>
                            </li>
                            <?php } if(get_permission('system_update', 'is_add')){ ?>
                            <li class="<?php if ($sub_page == 'system_update/index') echo 'nav-active';?>">
                                <a href="<?=base_url('system_update')?>">
                                    <span><i class="fas fa-caret-right" aria-hidden="true"></i><?=translate('system_update')?></span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
		<script>
			// maintain scroll position
			if (typeof localStorage !== 'undefined') {
				if (localStorage.getItem('sidebar-left-position') !== null) {
					var initialPosition = localStorage.getItem('sidebar-left-position'),
						sidebarLeft = document.querySelector('#sidebar-left .nano-content');
					sidebarLeft.scrollTop = initialPosition;
				}
			}
		</script>
	</div>
</aside>
<!-- end sidebar -->