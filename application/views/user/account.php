<main class="account-bg">
   <div class="container page-container account-container">
      <div class="account account-personal">
        <?php include_once("right_menu.php"); ?>
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