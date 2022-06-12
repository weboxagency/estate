<main class="account-bg">
   <div class="container page-container account-container">
      <div class="account account-personal">
         <div class="account-left">
            <div class="account-welcome">
               <span id="nfl"><?= mb_substr($user_info['name'], 0, 1); ?></span>
               <div class="account-welcome--desc">
                  <h6><?= translate('welcome') ?>,</h6>
                  <h5 class="ad"><?= $user_info['name']; ?></h5>
               </div>
            </div>
            <div class="account-desc">
               <h4><?= translate('my_account') ?></h4>
              <ul>
                  <li class="account-link__announcement active">
                     <a href="<?= base_url() ?>elanlarim">
                        <svg class="icon icon-villa">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-villa"></use>
                        </svg>
                        <?= translate('my_ads') ?>
                     </a>
                  </li>
                  <li class="account-link__balance">
                     <a href="<?= base_url() ?>balansim">
                        <svg class="icon icon-wallet">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-wallet"></use>
                        </svg>
                        <?= translate('balance') ?>
                     </a>
                  </li>
                  <li class="account-link__profile">
                     <a href="<?= base_url() ?>hesabim">
                        <svg class="icon icon-user">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-user"></use>
                        </svg>
                        <?= translate('profile') ?>
                     </a>
                  </li>
                  <li class="account-link__statistics">
                     <a href="<?= base_url() ?>statistika">
                        <svg class="icon icon-statistic">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-statistic"></use>
                        </svg>
                        <?= translate('statistics') ?>
                     </a>
                  </li>
               </ul>
            </div>
               <div class="find-home">
                  <a href="https://evelani.az/az/my-homes"><span>Mənə ev tap</span></a>
                  <div class="pretty p-switch p-fill newclass">
                     <input x-activate-url="https://evelani.az/az/activate-find-me-home-function" type="checkbox" />
                     <div class="state"><label></label></div>
                  </div>
                  <div class="find-home--desc">
                     <p>Sizin istəklərinizə uyğun ev tövsiyyələri edilir.</p>
                  </div>
               </div>
         </div>
         <div class="account-right profil-right">
            <h4>Profil</h4>
            <div class="profile-items">
               <div class="profile-items--item">
                  <div class="profile-item__left">
                     <span><?= translate('name') ?></span>
                     <p x-name><?= $user_info['name'] ?></p>
                  </div>
                  <div class="profile-item__right">
                     <a href="#" class="link-edit" data-toggle="modal" data-toggle="modal" data-target="#edit-name">
                        <svg class="icon icon-edit">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-edit"></use>
                        </svg>
                        <?= translate('edit') ?>
                     </a>
                     <div class="modal modal--small editmodal" id="edit-name">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h6 class="modal-title"><?= translate('name') ?></h6>
                                 <div class="modal-close" data-dismiss="modal">
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </div>
                              </div>
                              <div class="modal-body">
                                 <form method="post" action="<?= base_url() ?>user/profile_edit" x-edit-form x-target-with-data="afterEditName">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input type="hidden" name="form" value="1">
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <label for="name"><strong><?= translate('new_name') ?></strong></label>
                                          <input x-name-input name="name" class="form-item__element" value="<?= $user_info['name'] ?>">
                                       </div>
                                    </div>
                                    <div x-validations></div>
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <button type="submit" class="link-button link-button--primary"><?= translate('edit') ?></button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a x-after-edit-name data-toggle="modal" data-target="#edit-name-success" class="hidden"></a>
                     <div class="modal modal--small editmodal" id="edit-name-success">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <h6 class="modal-title mt-5 text-center"><?= translate('the_name_was_successfully_changed') ?></h6>
                                 <button class="link-button link-button--primary mx-auto mt-5 px-4" data-dismiss="modal"><?= translate('close') ?></button>
                                 <div class="modal-close" data-dismiss="modal">
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="profile-items">
               <div class="profile-items--item">
                  <div class="profile-item__left">
                     <span><?= translate('email') ?></span>
                     <p x-email><?= $user_info['email'] ?></p>
                  </div>
                  <div class="profile-item__right">
                     <a href="#" class="link-edit" data-toggle="modal" data-toggle="modal" data-target="#edit-email">
                        <svg class="icon icon-edit">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-edit"></use>
                        </svg>
                        <?= translate('edit') ?>
                     </a>
                     <div class="modal modal--small editmodal" id="edit-email">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h6 class="modal-title"><?= translate('email') ?></h6>
                                 <div class="modal-close" data-dismiss="modal">
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </div>
                              </div>
                              <div class="modal-body">
                                 <form method="post" action="<?= base_url() ?>user/profile_edit" x-edit-form x-target="afterEditEmail_1">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input type="hidden" name="form" value="2">
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <label for="email"><strong><?= translate('new_email') ?></strong></label>
                                          <input x-email-input name="email" class="form-item__element" value="<?= $user_info['email'] ?>">
                                       </div>
                                    </div>
                                    <div x-validations></div>
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <button type="submit" class="link-button link-button--primary"><?= translate('edit') ?></button>
                                       </div>
                                    </div>
                                 </form>
                                 <form method="post" action="<?= base_url() ?>user/profile_edit" x-edit-form x-target-with-data="afterEditEmail_2" style="display: none;">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input type="hidden" name="form" value="5">
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <label for="code"><strong>Elektron poçt ünvanına kod göndərilmişdir</strong></label>
                                          <input x-code-input name="code" class="form-item__element" placeholder="Elektron poçt ünvanına kod göndərilmişdir">
                                       </div>
                                    </div>
                                    <div x-validations></div>
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <button type="submit" class="link-button link-button--primary"><?= translate('edit') ?></button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a x-after-edit-email data-toggle="modal" data-target="#edit-email-success" class="hidden"></a>
                     <div class="modal modal--small editmodal" id="edit-email-success">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <h6 class="modal-title mt-5 text-center">Elektron poçt uğurla dəyişdirildi</h6>
                                 <button class="link-button link-button--primary mx-auto mt-5 px-4" data-dismiss="modal">Bağla</button>
                                 <div class="modal-close" data-dismiss="modal">
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="profile-items">
               <div class="profile-items--item">
                  <div class="profile-item__left">
                     <span>Mobil nömrə  <img src="https://upload.wikimedia.org/wikipedia/az/b/be/Bakcell_red_logo.png" width="60"></span>
                     <p x-mobile> <?= $user_info['mobileBeautified'] ?></p>
                  </div>
                  <div class="profile-item__right">
                     <a href="#" class="link-edit" data-toggle="modal" data-toggle="modal" data-target="#edit-mobile">
                        <svg class="icon icon-edit">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-edit"></use>
                        </svg>
                        <?= translate('edit') ?>
                     </a>
                     <div class="modal modal--small editmodal" id="edit-mobile">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h6 class="modal-title">Mobil nömrə</h6>
                                 <div class="modal-close" data-dismiss="modal">
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </div>
                              </div>
                              <div class="modal-body">
                                 <form method="post" action="<?= base_url() ?>user/profile_edit" x-edit-form x-target-with-data="afterEditMobile">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input type="hidden" name="form" value="3">
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <label for="mobile"><strong>Yeni mobile nömrəniz</strong></label>
                                          <div class="form-item--compound">
                                             <div class="form-item__constant" id="validationTooltipUsernamePrepend">+994</div>
                                             <input x-mobile-input class="form-item__element" value="<?= $user_info['mobile_format_second'] ?>" name="mobile" aria-describedby="basic-addon1">
                                          </div>
                                       </div>
                                    </div>
                                    <div x-validations></div>
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <button type="submit" class="link-button link-button--primary"><?= translate('edit') ?></button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a x-after-edit-mobile data-toggle="modal" data-target="#edit-mobile-success" class="hidden"></a>
                     <div class="modal modal--small editmodal" id="edit-mobile-success">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <h6 class="modal-title mt-5 text-center">Telefon uğurla dəyişdirildi</h6>
                                 <button class="link-button link-button--primary mx-auto mt-5 px-4" data-dismiss="modal">Bağla</button>
                                 <div class="modal-close" data-dismiss="modal">
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="profile-items">
               <div class="profile-items--item">
                  <div class="profile-item__left">
                     <span>Şifrə</span>
                  </div>
                  <div class="profile-item__right">
                     <a href="#" class="link-edit" data-toggle="modal" data-target="#edit-password">
                        <svg class="icon icon-edit">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-edit"></use>
                        </svg>
                        <?= translate('edit') ?>
                     </a>
                     <div class="modal modal--small editmodal" id="edit-password">
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
                                 <form method="post" action="<?= base_url() ?>user/profile_edit" x-edit-form x-target="afterEditPassword">
                                    <input type="hidden" name="form" value="4">
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <label for="oldPassword"><strong>Köhnə şifrə</strong></label>
                                          <div class="form-item__password">
                                             <input type="password" name="oldPassword" class="form-item__element" placeholder="∗∗∗∗∗∗">
                                             <svg class="icon icon-eye">
                                                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                                             </svg>
                                             <svg class="icon icon-eye-close d-none">
                                                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <label for="newPassword"><strong>Yeni şifrə</strong></label>
                                          <div class="form-item__password">
                                             <input type="password" name="newPassword" class="form-item__element" placeholder="∗∗∗∗∗∗">
                                             <svg class="icon icon-eye">
                                                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                                             </svg>
                                             <svg class="icon icon-eye-close d-none">
                                                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <label for="newPasswordRepeat"><strong>Yeni şifrə təkrarı</strong></label>
                                          <div class="form-item__password">
                                             <input type="password" name="newPasswordRepeat" class="form-item__element" placeholder="∗∗∗∗∗∗">
                                             <svg class="icon icon-eye">
                                                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye"></use>
                                             </svg>
                                             <svg class="icon icon-eye-close d-none">
                                                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-eye-close"></use>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                    <div x-validations></div>
                                    <div class="form-row">
                                       <div class="form-item form-item--large">
                                          <button type="submit" class="link-button link-button--primary">Şifrəni dəyiş</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a x-after-edit-password data-toggle="modal" data-target="#edit-password-success" class="hidden"></a>
                     <div class="modal modal--small editmodal" id="edit-password-success">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <h6 class="modal-title mt-5 text-center">Şifrə uğurla dəyişdirildi</h6>
                                 <button class="link-button link-button--primary mx-auto mt-5 px-4" data-dismiss="modal">Bağla</button>
                                 <div class="modal-close" data-dismiss="modal">
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
