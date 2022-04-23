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
               <h4>Hesabım</h4>
               <ul>
                  <li class="account-link__announcement">
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
                  <li class="account-link__statistics active">
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
         <div class="account-right statistic-right">
            <div class="account-right--top">
               <h4>Statistika</h4>
               <div class="datetime datetime-left" data-bind="daterangepicker: date">
                  <svg class="icon icon-calendar">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-calendar"></use>
                  </svg>
                  <span class="datetime-text"></span>
                  <svg class="icon icon-down">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-down"></use>
                  </svg>
               </div>
            </div>
            <input type="hidden" id="date">
            <div class="chart-statistics"></div>
         </div>
      </div>
   </div>
</main>