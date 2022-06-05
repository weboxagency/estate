<main id="add_listing">
   <div class="addHome pb-0">
      <div class="container page-container pb-0">
         <div class="addHome-header">
            <h1><span>Yeni elan</span> yerləşdir</h1>
            <h2>
               Hesabınız yoxdur?
               <a href="#" data-toggle="modal" data-target="#register"><?= translate('register') ?></a>
            </h2>
         </div>
         <div class="addHome-body">
            <div class="addHome-body--left">
               <div class="step step-first" x-blur-1>
                  <h3 class="step-title"><?= translate('contact_information') ?></h3>
                  <form x-edit-form method="post" action="<?= base_url() ?>add_listing/check_info" x-target="removeBlur">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                     <input type="hidden" name="site" value="1">
                     <input type="hidden" name="check" value="1">
                     <input type="hidden" name="id" value="">
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label for="announcement_owner">
                           Əlaqədar şəxs
                           <i class="fas fa-star-of-life"></i>
                           </label>
                           <input type="text" class="form-item__element" placeholder="Əlaqədar şəxs" name="announcement_owner" value="">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label for="user_type">
                           <?= translate('announcement_owner') ?>
                           <i class="fas fa-star-of-life"></i>
                           </label>
                           <div class="form-item--radio d-flex formitem--radio">
                              <div class="pretty p-icon p-plain p-smooth pretty-announcement-type">
                                 <input type="radio" name="user_type" value="1" checked>
                                 <div class="state p-primary-o">
                                    <label>
                                       <div class="svg-container">
                                          <svg class="icon-lock">
                                             <use xlink:href="assets/site/img/icons/icons.svg#icon-lock"></use>
                                          </svg>
                                       </div>
                                       <span>Mülkiyyətçi</span>
                                    </label>
                                    <i class="icon fas fa-check"></i>
                                 </div>
                              </div>
                              <div class="pretty p-icon p-plain p-smooth pretty-announcement-type">
                                 <input type="radio" name="user_type" value="0">
                                 <div class="state p-primary-o">
                                    <label>
                                       <div class="svg-container">
                                          <svg class="icon-user">
                                             <use xlink:href="assets/site/img/icons/icons.svg#icon-user"></use>
                                          </svg>
                                       </div>
                                       <span>Vasitəçi</span>
                                    </label>
                                    <i class="icon fas fa-check"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label for="mobile">
                           Mobil nömrə
                           <i class="fas fa-star-of-life"></i>
                           </label>
                           <div class="inputPhone">
                              <div class="form-item--compound">
                                 <div class="form-item__constant" id="validationTooltipUsernamePrepend">+994</div>
                                 <input onkeypress="return isNumberKey(event)" type="number" class="form-item__element" name="mobile" placeholder="Mobil nömrə" value="">
                              </div>
                              <div class="pretty pretty-whatsapp p-toggle" data-toggle="tooltip" title="Əgər aktiv etsəniz, elanda whatsapp işlətdiyiniz qeyd olunacaqdır">
                                 <input type="checkbox" name="whatsapp">
                                 <div class="state p-on">
                                    <svg class="icon icon-whatsapp">
                                       <use xlink:href="assets/site/img/icons/icons.svg#icon-whatsapp"></use>
                                    </svg>
                                 </div>
                                 <div class="state p-off">
                                    <svg class="icon icon-whatsapp">
                                       <use xlink:href="assets/site/img/icons/icons.svg#icon-whatsapp"></use>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-item form-item--flex form-item--large">
                           <label for="email">
                           Elektron poçt
                           <i class="fas fa-star-of-life"></i>
                           </label>
                           <input class="form-item__element" placeholder="Elektron poçt" type="text" name="email" value="">
                        </div>
                     </div>
                     <div x-validations></div>
                     <div class="form-row">
                        <div class="form-item mx-auto ml-md-0">
                           <button class="link-button link-button--primary" type="submit"><?= translate('continue') ?></button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="step step-second step--blur" x-blur-2>
                  <h4 class="step-title">Elan məlumatları</h4>
                  <form x-edit-form method="post" action="<?= base_url() ?>add_listing/check_info" x-target-with-data="afterAnnouncementSuccess">
                    
                     <input type="hidden" name="site" value="1">
                     <input type="hidden" name="id" value="">
                     <input type="hidden" name="announcement_owner">
                     <input type="hidden" name="email">
                     <input type="hidden" name="mobile">
                     <input type="hidden" name="user_type">
                     <input type="hidden" name="whatsapp">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                     <fieldset>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large">
                              <label for="announcement_type">
                              <?= translate('announcement_type') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <select id="exampleFormControlSelect12" name="announcement_type" class="ui fluid dropdown">
                                 <option value="0" selected><?= translate('not_selected') ?></option>
                                 <?php foreach ($ads_type as $value): ?>
                                 <option value="<?= $value['id'] ?>"><?= $value['type_name'] ?></option>
                                 <?php endforeach; ?>
                                 
                              </select>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large">
                              <label for="property_type">
                              Əmlakın növü
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <select id="exampleFormControlSelect13" name="property_type" class="ui fluid dropdown">
                                 <option selected value="0"><?= translate('not_selected') ?></option>
                                 <option value="1" x-property x-type-1 x-type-2 x-type-3>Yeni tikili</option>
                                 <option value="2" x-property x-type-1 x-type-2 x-type-3>Köhnə tikili</option>
                                 <option value="3" x-property x-type-1 x-type-2 x-type-3>Həyət evi / Bağ</option>
                                 <option value="5" x-property x-type-1 x-type-2 x-type-3>Villa</option>
                                 <option value="6" x-property x-type-1 x-type-2 x-type-3>Ofis</option>
                                 <option value="8" x-property x-type-1 x-type-2>Torpaq</option>
                                 <option value="9" x-property x-type-1 x-type-2>Obyekt</option>
                                 <option value="10" x-property x-type-1 x-type-2>Qaraj</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-property-1 x-property-2 x-property-3 x-property-5 x-property-6 x-property-8 x-property-9 x-property-10>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="deed">
                              Çıxarış
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="d-flex">
                                 <div class="pretty p-icon p-round p-jelly">
                                    <input type="radio" name="deed" id="checkfile1" value="1" checked>
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Var</span>
                                    </div>
                                 </div>
                                 <div class="pretty p-icon p-round p-jelly">
                                    <input type="radio" name="deed" id="checkfile2" value="0">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Yoxdur</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-type-2 x-type-3 x-property-1 x-property-2 x-property-3 x-property-5 x-property-6 x-property-7>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="room">
                              <?= translate('room') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <input type="number" onkeypress="return isNumberKey(event)" class="form-item__element" id="area" placeholder="<?= translate('room') ?>" name="room" value="">
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-type-2 x-type-3 x-property-1 x-property-2>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="floor">
                              Mərtəbə
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <input type="number" onkeypress="return isNumberKey(event)" class="form-item__element" name="floor" id="area" placeholder="Mərtəbə" value="">
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-type-2 x-type-3 x-property-1 x-property-2>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="max_floor">
                              Mərtəbə sayı
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <input type="number" onkeypress="return isNumberKey(event)" class="form-item__element" name="max_floor" id="area" placeholder="Mərtəbə sayı" value="">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large">
                              <label for="price">
                              <?= translate('price') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="form-item__labeled">
                                 <input data-type="currency" inputmode="numeric" class="form-item__element" name="price" placeholder="<?= translate('price') ?>" value="">
                                 <span>AZN</span>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly mt-2" x-input x-type-1 x-property-1 x-property-2 x-property-3 x-property-5 x-property-6 x-property-8 x-property-9 x-property-10>
                                    <input name="mortgage" type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>İpoteka var</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large">
                              <label for="area">
                              <?= translate('area') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="form-item__labeled">
                                 <input type="number" step=".01" onkeypress="return isNumberKey(event)" class="form-item__element" name="area" placeholder="<?= translate('area') ?>" value="">
                                 <span x-area-span></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-property-1 x-property-2 x-property-3 x-property-5 x-property-6 x-property-9 x-property-10>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="repair">
                              Təmir
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="d-flex">
                                 <div class="pretty p-icon p-round p-jelly">
                                    <input type="radio" name="repair" id="checkfile1" value="1" checked>
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Təmirli</span>
                                    </div>
                                 </div>
                                 <div class="pretty p-icon p-round p-jelly">
                                    <input type="radio" name="repair" id="checkfile2" value="0">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Təmirsiz</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-type-2 x-type-3 x-property-3 x-property-5>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="land_area">
                              Torpaq sahəsi
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="form-item__labeled">
                                 <input type="number" step=".01" onkeypress="return isNumberKey(event)" class="form-item__element" name="land_area" placeholder="Torpaq sahəsi" value="">
                                 <span>sot</span>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large">
                              <label for="city">
                              <?= translate('city') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <select name="city" id="exampleFormControlSelect14" class="ui fluid dropdown">
                                 <option value="0" selected><?= translate('not_selected') ?></option>
                                 <?php foreach ($cities as $value): ?>
                                 <option value="<?= $value['id'] ?>"><?= $value['city_name'] ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-row" x-region-div>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="region">
                              <?= translate('region') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <select name="region" id="exampleFormControlSelect15" class="ui fluid dropdown">
                                  <?php foreach ($regions as $value): ?>
                                 <option value="<?= $value['id'] ?>"  x-city="<?= $value['parent_city'] ?>"><?= $value['region_name'] ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-row" x-district-div>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="district"><?= translate('district') ?></label>
                              <select class="ui fluid dropdown" name="district" id="exampleFormControlSelect17">
                                 <option value="0" selected><?= translate('not_selected') ?></option>
                                 <?php foreach ($district as $value): ?>
                                 <option value="<?= $value['id'] ?>"  x-region="<?= $value['parent_region'] ?>"><?= $value['district_name'] ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-row" x-metro-div>
                           <div class="form-item form-item--flex form-item--large">
                              <label for="metro"><?= translate('metro') ?></label>
                              <select class="ui fluid dropdown" name="metro" id="exampleFormControlSelect16">
                                 <option value="0" selected><?= translate('not_selected') ?></option>
                                 <?php foreach ($metros as $value): ?>
                                 <option value="<?= $value['id'] ?>"><?= $value['metro_name'] ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large">
                              <label for="address">
                              <?= translate('address') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="form-item__labeled">
                                 <input type="text" class="form-item__element" name="address" placeholder="Ünvan" id="location" value="">
                                 <input type="hidden" name="latitude" id="latitude" value="">
                                 <input type="hidden" name="longitude" id="longitude" value="">
                                 <p class="form-message form-message--info align-items-center">
                                    <svg class="icon icon-pin">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
                                    </svg>
                                    <span>
                                       <a href="#" class="googleMapImg" data-toggle="modal" data-target="#modalMap"><?= translate('show_map') ?></a>
                                    </span>
                                 </p>
                                 <div class="modal fade" id="modalMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header" style="border-bottom: unset;">
                                             <div class="modal-close" data-dismiss="modal">
                                                <svg class="icon icon-close">
                                                   <use xlink:href="assets/site/img/icons/icons9860.svg?v=2022-04-19%2000:11:16#icon-close"></use>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="modal-body">
                                             <input id="pac-input" class="controls" type="text" placeholder="Ünvan" />
                                             <div class="map-complex" id="gmap"></div>
                                             <a id="savelocation" href="#" class="link-button link-button--primary link-setup d-none d-sm-flex" data-dismiss="modal"><?= translate('save') ?></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large form-item--textarea">
                              <label for="property_description">
                              </label>
                              <div class="form-item__labeled">
                                 <img id="map-id" src="">
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large form-item--textarea">
                              <label for="property_description">
                              Əmlakın təsviri
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="form-item__labeled">
                                 <textarea rows="5" name="property_description" placeholder="Əmlakınızı təsvir edin"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large" style="align-items: unset;">
                              <label for="images">
                              <?= translate('photos') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="form-item__labeled">
                                 <div id="addform" class="form-item__file" x-upload-photo>
                                    
                                    <label for="">
                                       <svg class="icon icon-map">
                                          <use xlink:href="assets/site/img/icons/icons.svg#icon-map"></use>
                                       </svg>
                                       <p><?= translate('add') ?></p>
                                    </label>
                                 </div>
                                 <div x-images class="form-gallery"></div>
                                 <div>
                                    <p class="form-message form-message--small mt-0">
                                       <span>Şəkillərin minimal sayı — <strong>4 ədəd</strong></span>
                                    </p>
                                    <p class="form-message form-message--small">
                                       <span>Binanın <strong>birinci mərtəbədən</strong> başlamaqla tam şəklinin olması mütləqdir</span>
                                    </p>
                                    <p class="form-message form-message--small">
                                       <span>Şəkillərin optimal ölçüləri — <strong>1200 x 900 pikseldir</strong></span>
                                    </p>
                                    <p class="form-message mt-5"><span>Elan yerləşdirərək, Siz <a target="_blank" href="istifadeci-razilasmasi.html">Estate.az-ın İstifadəçi razılaşması</a> ilə razı olduğunuzu təsdiq edirsiniz.</span></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div x-validations></div>
                        <div class="form-row">
                           <div class="form-item mx-auto ml-md-0">
                              <button class="link-button link-button--primary" x-edit-announcement-button type="submit">Elan Yerləşdir</button>
                           </div>
                        </div>
                     </fieldset>
                  </form>
                  <input multiple type="file" x-select-images accept="image/*" />
               </div>
            </div>
            <div class="addHome-body--right">
               <div class="card-rules">
                  <h3>Qaydalar</h3>
                  <div class="rules-list rules-5">
                     <?= $ads_rules['content']; ?>
                  </div>
                  <a class="link-button link-button--tertiary">Bütün qaydalar</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <a x-after-announcement-success data-toggle="modal" data-target="#announcement-success" class="hidden"></a>
   <div class="modal fade modal--small modal-message" id="announcement-success" tabindex="-1" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               <svg class="icon icon-message-sent">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-message-sent"></use>
               </svg>
               <h6>Elanınız yoxlamaya göndərildi</h6>
               <p>Elektron poçt ünvanınıza məlumat göndərildi</p>
               <p x-success-message></p>
               <a href="<?= base_url() ?>" class="remove-listener">
               <button class="link-button link-button--primary">Bağla</button>
               </a>
            </div>
         </div>
      </div>
   </div>
</main>