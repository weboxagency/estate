<main class="account-bg">
   <div class="container page-container account-container">
      <div class="account account-personal">
        <?php include_once("right_menu.php"); ?>
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