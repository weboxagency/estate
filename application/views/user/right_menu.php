<div class="account-left">
            <div class="account-welcome">
               <span id="nfl"><?= mb_substr($user_info['name'], 0, 1); ?></span>
               <div class="account-welcome--desc">
                  <h6><?= translate('welcome') ?>,</h6>
                  <h5 class="ad"><?= $user_info['name']; ?></h5>
               </div>
            </div>
            <div class="account-desc">
               <h4>Hesabım</h4>
              <ul>
                  <li class="account-link__announcement <?= ($main_menu=='account') ? 'active' : '' ?>">
                     <a href="<?= base_url() ?>elanlarim">
                        <svg class="icon icon-villa">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-villa"></use>
                        </svg>
                        <?= translate('my_ads') ?>
                     </a>
                  </li>
                  <li class="account-link__balance <?= ($main_menu=='balance') ? 'active' : '' ?>">
                     <a href="<?= base_url() ?>balansim">
                        <svg class="icon icon-wallet">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-wallet"></use>
                        </svg>
                        <?= translate('balance') ?>
                     </a>
                  </li>
                  <li class="account-link__profile <?= ($main_menu=='profile') ? 'active' : '' ?>">
                     <a href="<?= base_url() ?>hesabim">
                        <svg class="icon icon-user">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-user"></use>
                        </svg>
                        <?= translate('profile') ?>
                     </a>
                  </li>
                  <li class="account-link__statistics <?= ($main_menu=='statistics') ? 'active' : '' ?>">
                     <a href="<?= base_url() ?>statistika">
                        <svg class="icon icon-office">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-office"></use>
                        </svg>
                        <?= translate('statistics') ?>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="find-home">
               <a href="#"><span><?= translate('activate_agency_profile') ?></span></a>
               <div class="pretty p-switch p-fill newclass">
                  <input x-activate-url="<?= base_url() ?>activate-agency-profile" type="checkbox" />
                  <div class="state"><label></label></div>
               </div>
               <div class="find-home--desc">
                  <p><?= translate('change_your_account_to_agency_account') ?></p>
               </div>
            </div>
         </div>