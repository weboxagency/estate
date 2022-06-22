<main class="account-bg">
   <div class="container page-container account-container">
      <div class="account account-personal">
         <?php include_once("right_menu.php"); ?>
         <div class="account-right balance-dropdown--right balance-right">
            <h4>Balansım</h4>
            <div class="profile-items">
               <div class="profile-items--item">
                  <div class="profile-item__right">
                     <span>Pul balansı</span>
                     <p>0 AZN</p>
                  </div>
                  <div class="center">
                     <span>Ödənişli elanlar</span>
                     <p>0</p>
                  </div>
                  <div class="profile-item__right">
                     <span>Pulsuz elanlar</span>
                     <p>2</p>
                  </div>
               </div>
            </div>
            <h4 style="display: none;">Balansı artır</h4>
            <div class="profile-items">
               <div class="profile-items--item">
                  <form action="<?= base_url() ?>user/balance/upgrade" method="post" x-edit-form x-target-with-data="afterUpgradeBalance">
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label for="amount" class="mb-0">Məbləği daxil edin *</label>
                           <div class="form-item__labeled">
                              <input onkeypress="return isNumberKey(event)" class="form-item__element" name="amount" placeholder="Məbləğ">
                              <span class="amountspan">AZN</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label for="payment_type" class="mb-0">
                           Ödəniş üsulu
                           </label>
                           <div class="form-item--radio d-flex formitem--radio">
                              <div class="pretty p-icon p-plain p-smooth pretty-announcement-type">
                                 <input type="radio" name="payment_type" value="online" checked>
                                 <div class="state p-primary-o">
                                    <label>
                                       <div class="svg-container">
                                          <svg class="icon-credit-card">
                                             <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-credit-card"></use>
                                          </svg>
                                       </div>
                                       <span> Bank Kartı</span>
                                    </label>
                                    <i class="icon fas fa-check"></i>
                                 </div>
                              </div>
                              <div class="pretty p-icon p-plain p-smooth pretty-announcement-type">
                                 <input type="radio" name="payment_type" value="machine">
                                 <div class="state p-primary-o">
                                    <label>
                                       <div class="svg-container">
                                          <svg class="icon-portmanat">
                                             <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-portmanat"></use>
                                          </svg>
                                       </div>
                                       <span>Pulpal (terminallarda ödəniş)</span>
                                    </label>
                                    <i class="icon fas fa-check"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label class="mb-0"></label>
                           <button class="link-button link-button--primary">Balansı artır</button>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label class="mb-0"></label>
                           <p class="mt-0">“Balansı artır“ düyməsini sıxmaqla siz <a target="_blank" href="<?= base_url() ?>user/istifadeci-razilasmasi">İstifadəçi razılaşmasını</a> qəbul etdiyinizi təsdiqləmiş olursunuz.</p>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>