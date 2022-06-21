<header class="header">
      <div class="header-primary">
        <div class="header-primary__container container">
          
          <!-- LANGUAGE DROPDOWN -->
          <div class="dropdown">
            <div class="header-language dropdown-toggle" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php 
              if ($this->session->has_userdata('set_lang')) 
              {
                $set_lang = $this->session->userdata('set_lang');
              } 
              else 
              {
                $set_lang = get_global_setting('translation');
              }
               ?>
              <span class="header-lang"><?= get_lang_info($set_lang,"name"); ?></span>
              <span class="responsive-lang"><img class="ln-img" width="20px" src="<?php echo $this->home_model->getLangImage(get_lang_info($set_lang,"id"));?>"></span>
              <svg class="icon icon-down">
                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-down"></use>
              </svg>
            </div>
            <div class="dropdown-menu dropdown-menu--left" aria-labelledby="languageDropdown">
            <?php
            $languages = $this->db->select('id,lang_field,name')->where('status', 1)->get('language_list')->result();
            foreach($languages as $lang) :
            ?>
                <a class="dropdown-item " href="<?php echo base_url('home/set_language/' . html_escape($lang->lang_field));?>">
                <span><img class="ln-img" src="<?php echo $this->home_model->getLangImage($lang->id);?>" alt="<?php echo $lang->lang_field;?>"> <?php echo ucfirst(html_escape($lang->name));?> </span>&nbsp; <?php echo ($set_lang == $lang->lang_field ? ' <i class="fas fa-check"></i>' : ''); ?>
                </a>
              </li>
            <?php endforeach;?>
            </div>
          </div>
          <!-- LANGUAGE END -->

          <nav class="d-none d-xl-flex">
            <a href="<?= base_url() ?>istifadeci-razilasmasi" data-toggle="tooltip" title="<?= translate('by_registering_you_are_deemed_to_have_accepted_all_the_rules') ?>">
              <?= translate('user_agreement') ?>
            </a>
            <a href="<?= base_url() ?>sitemap"><?= translate('site_map') ?></a>
          </nav>
          <a class="nav-item--secondary nav-item__contact d-none d-md-flex" href="tel:info@estate.az">
            <svg class="icon icon-phone mr-1">
            <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-phone-material"></use>
            </svg>
            info@estate.az
          </a>
          <a class="nav-item--secondary nav-item__favorites  d-sm-flex" href="<?= base_url() ?>secilmisler" x-favorites>
            <?php if (!isset($_SESSION['wish_sess'])) { ?>
               <svg class="icon icon-heart-outline">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart-outline"></use>
               </svg>
            <?php }else{ ?>
               <?php 
               $heart = (check_wishlist($_SESSION['wish_sess'])) ? '' : '-outline';
                ?>
               <svg class="icon icon-heart<?=$heart; ?>">
               <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart<?=$heart; ?>"></use>
            </svg>
            <?php } ?>
            <?= translate('wishlist') ?> 
          </a>
          <?php if (!is_user_loggedin()) { ?>
          <a class="nav-item--secondary nav-item__login" data-toggle="modal" data-target="#login">
             <svg class="icon icon-user">
              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-user"></use>
              </svg> 
            <?= translate('login') ?> 
          </a>
          <?php } ?>
          <?php if (is_user_loggedin()) { ?>
          <div class="dropdown-hover notification" x-notification-color>
          <!-- User Dashboard -->
             <a class="nav-item--secondary">
                <svg class="icon icon-bell">
                   <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-bell"></use>
                </svg>
                <?= translate('notifications') ?>
             </a>
             <div class="dropdown-hover__menu">
                <div class="dropdown-menu__group dropdown-menu__header" x-notification-area style="display: none;">
                   <span class="notification-count"><?= translate('notifications') ?> (<span x-notification-count>0</span>)</span>
                   <form action="#" x-edit-form x-target="clearNotifications">
                      <button>
                      <span class="notification-clear">Təmizlə</span>
                      </button>
                   </form>
                </div>
                <div class="dropdown-menu__group dropdown-menu__header" x-no-notification-area>
                   <span class="notification-count">Bildiriş yoxdur</span>
                </div>
                <div x-notifications></div>
             </div>
          </div>
          <div class="dropdown show dropdown-profile">
             <div class="dropdown">
                <div class="dropdown-toggle" id="navDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <svg class="icon icon-down">
                      <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-down"></use>
                   </svg>
                   <span class="profile_name"><?= $user_info['name']; ?></span>
                </div>
                <div class="dropdown-menu dropdown-menu--right login-dropdown" aria-labelledby="navDropdown">
                   <ul>
                      <li>
                         <a href="<?= base_url() ?>user/profile">
                            <svg class="icon icon-user">
                               <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-user"></use>
                            </svg>
                            Profil
                         </a>
                      </li>
                      <li>
                         <a href="<?= base_url() ?>user/logout">
                            <svg class="icon icon-logout">
                               <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-logout"></use>
                            </svg>
                            <?= translate('logout') ?>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          <!-- User Dashboard END-->
          </div>
          <?php } ?>

          <!-- REGISTER -->
          <div class="modal modal--small" id="register">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title"><?= translate('register') ?></h6>
                  <div class="modal-close" data-dismiss="modal">
                    <svg class="icon icon-close">
                      <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                    </svg>
                  </div>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url() ?>user/register" x-edit-form method="post" x-target-with-data="afterRegister">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <fieldset>
                      <div class="form-row">
                        <div class="form-item form-item--large">
                          <label for="announcement_owner"><?= translate('relevant_person') ?></label>
                          <input class="form-item__element" name="announcement_owner" placeholder="<?= translate('relevant_person') ?>">
                        </div>
                        <div class="form-item form-item--large">
                          <label for="email"><?= translate('email') ?></label>
                          <input class="form-item__element" name="email" placeholder="<?= translate('email') ?>">
                        </div>
                        <div class="form-item form-item--large">
                          <label for="mobile"><?= translate('phone_number') ?></label>
                          <input onkeypress="return isNumberKey(event)" type="number" maxlength="10" class="form-item__element" name="mobile" placeholder="<?= translate('phone_number') ?>" value="0">
                        </div>
                        <div class="form-item form-item--small">
                          <label for="password"><?= translate('password') ?></label>
                          <div class="form-item__password">
                            <input class="form-item__element" name="password" type="password" placeholder="∗∗∗∗∗∗">
                            <svg class="icon icon-eye">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                            </svg>
                            <svg class="icon icon-eye-close d-none">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="form-item form-item--small">
                          <label for="password"><?= translate('repeat_password') ?></label>
                          <div class="form-item__password">
                            <input class="form-item__element" name="repassword" type="password" placeholder="∗∗∗∗∗∗">
                            <svg class="icon icon-eye">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                            </svg>
                            <svg class="icon icon-eye-close d-none">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="form-item form-item--large">
                          <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                            <input type="checkbox" name="user_agreement" />
                            <div class="state p-amcham">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>
                                <a href="#" target="_blank">İstifadəçi qaydalarını</a> oxudum və qəbul edirəm </span>
                            </div>
                          </div>
                        </div>
                        <div x-validations></div>
                        <div class="form-item form-item--large">
                          <button type="submit" class="link-button link-button--primary"><?= translate('register') ?></button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
                <div class="modal-footer">
                  <p><?= translate('do_you_already_have_an_account') ?>? <a data-dismiss="modal" data-toggle="modal" data-target="#login"><?= translate('login') ?></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- REGISTER END -->

          <!-- LOGIN START -->
          <div class="modal modal--small" id="login">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title">Estate.az-a xoş gəlmisiniz</h6>
                  <div class="modal-close" data-dismiss="modal">
                    <svg class="icon icon-close">
                      <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                    </svg>
                  </div>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url() ?>user/signin" x-edit-form method="post" x-target-with-data="afterLogin">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <div class="form-row">
                      <div class="form-item form-item--large">
                        <label>Elektron poçt</label>
                        <input class="form-item__element" placeholder="Elektron poçt" name="email">
                      </div>
                      <div class="form-item form-item--large">
                        <label>Şifrə</label>
                        <div class="form-item__password">
                          <input class="form-item__element" type="password" name="password" placeholder="∗∗∗∗∗∗">
                          <svg class="icon icon-eye">
                            <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                          </svg>
                          <svg class="icon icon-eye-close d-none">
                            <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                          </svg>
                        </div>
                      </div>
                      <div x-validations></div>
                      <div class="form-item form-item--large">
                        <button type="submit" class="link-button link-button--primary">Daxil ol</button>
                      </div>
                    </div>
                  </form>
                  <div class="form-item form-item--large">
                    <a data-toggle="modal" data-target="#forgotPassword" data-dismiss="modal">Şifrənizi unutmusunuz?</a>
                  </div>
                </div>
                <div class="modal-footer">
                  <p>Hesabınız yoxdur? <a data-dismiss="modal" data-toggle="modal" data-target="#register">Qeydiyyatdan keç</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- LOGIN END -->

          <!-- FORGOT PASSWORD START -->
          <div class="modal modal--small" id="forgotPassword">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title">Şifrənizi yeniləyin</h6>
                  <div class="modal-close" data-dismiss="modal">
                    <svg class="icon icon-close">
                      <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                    </svg>
                  </div>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url() ?>user/lose_password" x-edit-form method="post" x-target-with-data="afterForgotPassword">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <fieldset>
                      <div class="form-row">
                        <div class="form-item form-item--large">
                          <label for="email">Elektron poçt</label>
                          <input class="form-item__element" name="email" placeholder="Elektron poçt">
                        </div>
                        <div x-validations></div>
                        <div class="form-item form-item--large">
                          <button type="submit" class="link-button link-button--primary">Yeniləmə linki göndərin</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
                <div class="modal-footer">
                  <p>
                    <a data-toggle="modal" data-target="#login" data-dismiss="modal" class="turn-back" href="#">
                      <span class="log-in">Daxil ol</span>-a geri dön </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- FORGOT PASSWORD END -->
          <?php if ((isset($_GET['reset'])) AND ($_GET['reset']==1) AND (sess_reset_tkn())){ ?>
          <a style="display: none;" data-toggle="modal" data-target="#reset-password" data-dismiss="modal"></a>
          <div class="modal modal--small" id="reset-password">
             <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                      <h6 class="modal-title">Şifrənizi yeniləyin</h6>
                      <div class="modal-close" data-dismiss="modal">
                         <svg class="icon icon-close">
                            <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                         </svg>
                      </div>
                   </div>
                   <div class="modal-body">
                      <form action="<?= base_url() ?>user/reset_password" x-edit-form method="post" x-target="afterResetPassword">
                         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                         <div class="form-row">
                            <div class="form-item form-item--large">
                               <label for="password">Yeni şifrə</label>
                               <div class="form-item__password">
                                  <input class="form-item__element" type="password" name="password" placeholder="∗∗∗∗∗∗">
                                  <svg class="icon icon-eye">
                                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                                  </svg>
                                  <svg class="icon icon-eye-close d-none">
                                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                                  </svg>
                               </div>
                            </div>
                            <div class="form-item form-item--large">
                               <label for="passwordRepeat">Yeni şifrə təkrar</label>
                               <div class="form-item__password">
                                  <input class="form-item__element" type="password" name="passwordRepeat" placeholder="∗∗∗∗∗∗">
                                  <svg class="icon icon-eye">
                                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                                  </svg>
                                  <svg class="icon icon-eye-close d-none">
                                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                                  </svg>
                               </div>
                            </div>
                            <div x-validations></div>
                            <div class="form-item form-item--large">
                               <button type="submit" class="link-button link-button--primary">Şifrənizi yeniləyin</button>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
          </div>
          <?php } ?>
           <?php if ((isset($_GET['finish'])) AND ($_GET['finish']==1)){ ?>
          <!-- SUCCESS VERIFIED START -->
          <div class="modal modal--small modal-message" id="finish-register">
             <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                      <div class="modal-close" data-dismiss="modal">
                         <svg class="icon icon-close">
                            <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                         </svg>
                      </div>
                   </div>
                   <div class="modal-body">
                      <svg class="icon icon-success-circle">
                         <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-success-circle"></use>
                      </svg>
                      <h6><?= translate('your_registration_has_been_successfully_completed') ?>!</h6>
                      <button class="link-button link-button--primary" data-dismiss="modal"><?= translate('close') ?></button>
                   </div>
                </div>
             </div>
          </div>
          <!-- SUCCESS VERIFIED END -->
          <?php } ?>
        </div>
          

        <!-- SECOND HEADER START -->
        <div class="header-secondary" id="headerSecondary">
          <div class="header-secondary__container container">
            <a class="logo" href="<?= base_url(); ?>">
              <img src="<?php echo base_url('uploads/frontend/images/' . $cms_setting['logo']); ?>" style="height: 110px;">
            </a>
            <div class="justify">
              <nav class="nav d-none d-xl-flex">
                <div class="dropdown-nav dropdown-hover">
                  <a class="nav-item--secondary"><?= translate('sale') ?></a>
                  <div class="dropdown-nav__menu dropdown-hover__menu">
                    <div class="dropdown-menu__group">
                      <a href="<?= base_url() ?>assets/az/axtar/satis/yeni-tikili">
                        <svg class="icon icon-yeni-tikili">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-yeni-tikili"></use>
                        </svg> Yeni tikili </a>
                      <a href="<?= base_url() ?>assets/az/axtar/satis/kohne-tikili">
                        <svg class="icon icon-kohne-tikili">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-kohne-tikili"></use>
                        </svg> Köhnə tikili </a>
                      <a href="<?= base_url() ?>assets/az/axtar/satis/heyet-evi-bag">
                        <svg class="icon icon-bag">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-bag"></use>
                        </svg> Həyət evi / Bağ </a>
                      <a href="<?= base_url() ?>assets/az/axtar/satis/villa">
                        <svg class="icon icon-villa">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-villa"></use>
                        </svg> Villa </a>
                      <a href="<?= base_url() ?>assets/az/axtar/satis/ofis">
                        <svg class="icon icon-office">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-office"></use>
                        </svg> Ofis </a>
                      <a href="<?= base_url() ?>assets/az/axtar/satis/torpaq">
                        <svg class="icon icon-torpag">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-torpag"></use>
                        </svg> Torpaq </a>
                      <a href="<?= base_url() ?>assets/az/axtar/satis/obyekt">
                        <svg class="icon icon-obyekt">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-obyekt"></use>
                        </svg> Obyekt </a>
                      <a href="<?= base_url() ?>assets/az/axtar/satis/qaraj">
                        <svg class="icon icon-obyekt">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-obyekt"></use>
                        </svg> Qaraj </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-nav dropdown-hover">
                  <a class="nav-item--secondary"><?= translate('rent') ?></a>
                  <div class="dropdown-nav__menu dropdown-hover__menu">
                    <div class="dropdown-menu__group">
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/yeni-tikili">
                        <svg class="icon icon-yeni-tikili">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-yeni-tikili"></use>
                        </svg> Yeni tikili </a>
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/kohne-tikili">
                        <svg class="icon icon-kohne-tikili">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-kohne-tikili"></use>
                        </svg> Köhnə tikili </a>
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/heyet-evi-bag">
                        <svg class="icon icon-bag">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-bag"></use>
                        </svg> Həyət evi / Bağ </a>
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/villa">
                        <svg class="icon icon-villa">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-villa"></use>
                        </svg> Villa </a>
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/ofis">
                        <svg class="icon icon-office">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-office"></use>
                        </svg> Ofis </a>
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/torpaq">
                        <svg class="icon icon-torpag">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-torpag"></use>
                        </svg> Torpaq </a>
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/obyekt">
                        <svg class="icon icon-obyekt">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-obyekt"></use>
                        </svg> Obyekt </a>
                      <a href="<?= base_url() ?>assets/az/axtar/kiraye/qaraj">
                        <svg class="icon icon-obyekt">
                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-obyekt"></use>
                        </svg> Qaraj </a>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
            <a href="<?= base_url() ?>add_listing" class="link-button link-button--primary link-setup d-none d-sm-flex">
              <span>
                <svg class="icon icon-plus-circle">
                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-plus-circle"></use>
                </svg>
              </span> <?= translate('add_listing')?> 
            </a>
            <a href="#" class="burger d-xl-none" data-toggle="collapse" data-target="#burger-menu" aria-controls="burger-menu" aria-expanded="false">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
        <!-- SECOND HEADER END -->

        <!-- BURGER MENU START -->
        <div class="burger-menu collapse d-xl-none" id="burger-menu">
          <ul class="burger-menu__container">
            <li class="container">
              <a href="#" class="burger-menu__link">Satış <i class="far fa-chevron-down"></i>
              </a>
              <ul>
                <li>
                  <a href="az/axtar/satis/yeni-tikili.html">Yeni tikili</a>
                  <a href="az/axtar/satis/kohne-tikili.html">Köhnə tikili</a>
                  <a href="az/axtar/satis/heyet-evi-bag.html">Həyət evi / Bağ</a>
                  <a href="az/axtar/satis/villa.html">Villa</a>
                  <a href="az/axtar/satis/ofis.html">Ofis</a>
                  <a href="az/axtar/satis/torpaq.html">Torpaq</a>
                  <a href="az/axtar/satis/obyekt.html">Obyekt</a>
                  <a href="az/axtar/satis/qaraj.html">Qaraj</a>
                </li>
              </ul>
              <a href="#" class="burger-menu__link">Kirayə <i class="far fa-chevron-down"></i>
              </a>
              <ul>
                <li>
                  <a href="az/axtar/kiraye/yeni-tikili.html">Yeni tikili</a>
                  <a href="az/axtar/kiraye/kohne-tikili.html">Köhnə tikili</a>
                  <a href="az/axtar/kiraye/heyet-evi-bag.html">Həyət evi / Bağ</a>
                  <a href="az/axtar/kiraye/villa.html">Villa</a>
                  <a href="az/axtar/kiraye/ofis.html">Ofis</a>
                  <a href="az/axtar/kiraye/torpaq.html">Torpaq</a>
                  <a href="az/axtar/kiraye/obyekt.html">Obyekt</a>
                  <a href="az/axtar/kiraye/qaraj.html">Qaraj</a>
                </li>
              </ul>
              <a href="#" class="burger-menu__link">Kirayə günlük <i class="far fa-chevron-down"></i>
              </a>
              <ul>
                <li>
                  <a href="az/axtar/kiraye-gunluk/yeni-tikili.html">Yeni tikili</a>
                  <a href="az/axtar/kiraye-gunluk/kohne-tikili.html">Köhnə tikili</a>
                  <a href="az/axtar/kiraye-gunluk/heyet-evi-bag.html">Həyət evi / Bağ</a>
                  <a href="az/axtar/kiraye-gunluk/villa.html">Villa</a>
                  <a href="az/axtar/kiraye-gunluk/ofis.html">Ofis</a>
                </li>
              </ul>
              <a href="az/agentlikler.html" class="burger-menu__link">Agentliklər</a>
              <a href="az/yasayis-kompleksleri.html" class="burger-menu__link">Yaşayış kompleksləri</a>
              <a href="az/insaat-sirketleri.html" class="burger-menu__link">İnşaat şirkətləri</a>
              <a href="az/biznez-merkezleri.html" class="burger-menu__link">Biznes mərkəzləri</a>
              <a href="az/bloq.html" class="burger-menu__link burger-menu--bloq ">Xəbərlər</a>
              <a href="az/ipoteka.html">İpoteka</a>
              <ul>
                <li>
                  <a href="az/balansi-artirmaq.html">Balansı artır</a>
                  <a href="az/reklam-yerlesdirmek.html">Reklam yerləşdir</a>
                  <a href="az/ipoteka.html">İpoteka</a>
                </li>
              </ul>
              <ul class="contact-numbers">
                <li>
                  <a href="tel:info@estate.az">
                    <span class="__cf_email__" data-cfemail="a5cccbc3cae5c0d3c0c9c4cbcc8bc4df">[email&#160;protected]</span>
                  </a>
                  <a href="tel:info@evelani.az">
                    <span class="__cf_email__" data-cfemail="5c35323a331c392a39303d3235723d26">[email&#160;protected]</span>
                  </a>
                  <a href="cdn-cgi/l/email-protection.html#8fe6e1e9e0cfeaf9eae3eee1e6a1eef5">
                    <span class="__cf_email__" data-cfemail="1970777f76597c6f7c75787770377863">[email&#160;protected]</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- BURGER MENU END -->
      </div>
    </header>