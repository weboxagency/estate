<main class="account-bg">
   <div class="container page-container account-container">
      <div class="account account-personal">
         <div class="account-left">
            <div class="account-welcome">
               <span>A</span>
               <div class="account-welcome--desc">
                  <h6><?= translate('welcome') ?>,</h6>
                  <h5>Ağakərim</h5>
               </div>
            </div>
            <div class="account-desc">
               <h4><?= translate('my_account') ?></h4>
               <ul>
                  <li class="account-link__announcement active">
                     <a href="<?= base_url() ?>user/account">
                        <svg class="icon icon-villa">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-villa"></use>
                        </svg>
                        <?= translate('my_ads') ?>
                     </a>
                  </li>
                  <li class="account-link__balance">
                     <a href="<?= base_url() ?>user/balance">
                        <svg class="icon icon-wallet">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-wallet"></use>
                        </svg>
                        <?= translate('balance') ?>
                     </a>
                  </li>
                  <li class="account-link__profile">
                     <a href="<?= base_url() ?>user/profile">
                        <svg class="icon icon-user">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-user"></use>
                        </svg>
                        <?= translate('profile') ?>
                     </a>
                  </li>
                  <li class="account-link__statistics">
                     <a href="<?= base_url() ?>user/statistics">
                        <svg class="icon icon-statistic">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-statistic"></use>
                        </svg>
                        <?= translate('statistics') ?>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="find-home">
               <a href="<?= base_url() ?>user/my-homes"><span>Mənə ev tap</span></a>
               <div class="pretty p-switch p-fill newclass">
                  <input x-activate-url="<?= base_url() ?>assets/az/activate-find-me-home-function" type="checkbox" />
                  <div class="state"><label></label></div>
               </div>
               <div class="find-home--desc">
                  <p>Sizin istəklərinizə uyğun ev tövsiyyələri edilir.</p>
               </div>
            </div>
         </div>
         <div class="account-right">
            <h5><strong>Elanlarım</strong></h5>
            <div class="announcement-list" id="announcement-list">
               <div class="announcement-list--item">
                  <a class="cursor-default" href="javascript:;">
                     <h6 class="active">Təsdiq gözləyən<span>(<b x-announcement-count>0</b>)</span></h6>
                  </a>
               </div>
               <div class="announcement-list--item">
                  <a class="cursor-default" href="javascript:;">
                     <h6>Aktiv elanlarım<span>(<b x-announcement-count>0</b>)</span></h6>
                  </a>
               </div>
               <div class="announcement-list--item">
                  <a class="cursor-default" href="javascript:;">
                     <h6>Vaxtı bitmiş<span>(<b x-announcement-count>0</b>)</span></h6>
                  </a>
               </div>
               <div class="announcement-list--item">
                  <a class="cursor-default" href="javascript:;">
                     <h6>Qəbul edilməmiş<span>(<b x-announcement-count>0</b>)</span></h6>
                  </a>
               </div>
            </div>
            <div class="announcement-group">
               <div class="announcement-group__body"></div>
               <div class="modal modal--small" id="delete-announcement"></div>
               <div class="modal modal--small" id="restore-announcement"></div>
            </div>
         </div>
      </div>
   </div>
</main>