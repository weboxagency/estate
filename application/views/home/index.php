<?php 
// session_destroy();
// dd($_SESSION); 
?>
<main class="main">
<section class="main-header">
   <div class="main-header__content container  ">
      <h1>Mənzil sahibi olmaq Estate.az ilə daha rahat!</h1>
      <form x-search-form class="search" action="https://evelani.az/az/axtar/satis" method="get">
         <input type="hidden" name="sort" value="">
         <input type="hidden" name="region">
         <input type="hidden" name="district">
         <input type="hidden" name="metro">
         <input type="hidden" name="placemark">
         <input type="hidden" name="page" value="1">
         <div class="search-first">
            <select class="search-select p-0" type-select name="type">
                <?php foreach ($ads_type as $value): ?>
               <option value="<?= $value['id'] ?>"><?= $value['type_name'] ?></option>
                <?php endforeach; ?>
            </select>
            <div class="home-search">
               <div class="caption">
                  <span>Satış</span>
                  <svg class="icon icon-down">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-down"></use>
                  </svg>
               </div>
               <div class="list">
                 <?php foreach ($ads_type as $value): ?>
                  <div class="item" data-value="<?= $value['id'] ?>"><?= $value['type_name'] ?></div>
                  <?php endforeach; ?>
               </div>
            </div>
            <div class="searchmap-content">
               
               <input onkeypress="return isNumberKey(event)" id="numberTxt" class="search-input" type="number" placeholder="<?= translate('ads_number') ?>" name="number">
               <svg class="icon icon-search">
                <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons_search.svg#icon-search"></use>
                </svg>
            </div>
         </div>
         <div class="searchmap-input">
            <div class="link-button link-button--secondary" data-toggle="modal" data-target="#locationSearch">
               <svg class="icon icon-pin">
                 <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons_place.svg#icon-pin"></use>
                </svg>
               <?= translate('place') ?><span id="check-location"></span>
            </div>
            <div class="link-button link-button--secondary advancedSearch" data-toggle="modal" data-target="#advancedSearch"><?= translate('search_for_details') ?></div>
            <div class="modal modal--small" id="advancedSearch">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h6 class="modal-title"><?= translate('search_for_details') ?></h6>
                        <div class="modal-close" data-dismiss="modal">
                           <svg class="icon icon-close">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                           </svg>
                        </div>
                     </div>
                     <div class="modal-body">
                        <div class="form-row">
                           <div class="form-item form-item--small">
                              <div class="dropdown dropdown-select" id="propertyType">
                                 <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span><?= translate('estate_types') ?><strong></strong></span>
                                    <svg class="icon icon-down">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-down"></use>
                                    </svg>
                                 </div>
                                 <div class="dropdown-menu">
                                    <div class="dropdown-menu__group">
                                       <?php foreach ($estate_types as $value): ?>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="<?= $value['id'] ?>" x-type-1 x-type-2 x-type-3>
                                          <input <?= ($value['id']<3) ? 'checked' : 'disabled="disabled"' ?> type="checkbox" name="property_type[<?= $value['id'] ?>]" />
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span><?= $value['estate_type_name'] ?></span>
                                          </div>
                                       </div>
                                       <?php endforeach; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-item form-item--small" x-input x-type-1 x-type-2 x-type-3 x-property-1 x-property-2 x-property-3 x-property-5 x-property-6 x-property-7>
                              <div class="dropdown dropdown-select" id="roomCount">
                                 <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Otaq sayı</span>
                                    <svg class="icon icon-down">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-down"></use>
                                    </svg>
                                 </div>
                                 <div class="dropdown-menu">
                                    <div class="dropdown-menu__group">
                                       <div class="pretty pretty-checkbox dropdown-menu--pretty p-icon p-round p-jelly">
                                          <input checked type="checkbox" name="room[0]" />
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>İstənilən otaq sayı</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dropdown-menu__group">
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked type="checkbox" name="room[1]" />
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>1 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked type="checkbox" name="room[2]" />
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>2 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked type="checkbox" name="room[3]" />
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>3 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked type="checkbox" name="room[4]" />
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>4 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked type="checkbox" name="room[5]" />
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>5 otaq və daha çox</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--large">
                              <label for=""><?= translate('price') ?>, AZN</label>
                              <div class="input-block">
                                 <input data-type="currency" inputmode="numeric" name="price_min" placeholder="min">
                                 <input data-type="currency" inputmode="numeric" name="price_max" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--large">
                              <label for=""><span x-area-name-span>Sahə</span>, <span x-area-span>m²</span></label>
                              <div class="input-block">
                                 <input type="number" step=".01" onkeypress="return isNumberKey(event)" name="area_min" placeholder="min">
                                 <input type="number" step=".01" onkeypress="return isNumberKey(event)" name="area_max" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-type-2 x-type-3 x-property-3 x-property-5>
                           <div class="form-item form-item--large">
                              <label for="">Torpaq sahəsi, sot</label>
                              <div class="input-block">
                                 <input onkeypress="return isNumberKey(event)" name="land_area_min" type="number" step=".01" placeholder="min">
                                 <input onkeypress="return isNumberKey(event)" name="land_area_max" type="number" step=".01" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-type-2 x-type-3 x-property-1 x-property-2>
                           <div class="form-item form-item--large">
                              <label for="">Mərtəbə</label>
                              <div class="input-block">
                                 <input onkeypress="return isNumberKey(event)" name="floor_min" type="number" placeholder="min">
                                 <input onkeypress="return isNumberKey(event)" name="floor_max" type="number" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-property-1 x-property-2 x-property-3 x-property-5 x-property-6 x-property-8 x-property-9 x-property-10>
                           <div class="form-item form-item--large">
                              <label for="">Elan tipi</label>
                              <div class="checkbox-row">
                                 <div class="checkboxrow pretty pretty-checkbox p-icon p-curve p-jelly">
                                    <input name="deed" type="checkbox" />
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Çıxarış var</span>
                                    </div>
                                 </div>
                                 <div class="checkboxrow pretty pretty-checkbox p-icon p-curve p-jelly">
                                    <input name="mortgage" type="checkbox" />
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>İpoteka var</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input x-type-1 x-property-1 x-property-2 x-property-3 x-property-5 x-property-6 x-property-9 x-property-10>
                           <div class="form-item  form-item--large">
                              <label for="repair">
                              Təmir
                              </label>
                              <div class="checkbox-row">
                                 <div class="checkboxrow pretty check-pretty pretty-checkbox p-icon p-curve p-jelly">
                                    <input type="checkbox" name="repair[1]" id="checkfile1">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Təmirli</span>
                                    </div>
                                 </div>
                                 <div class="checkboxrow pretty pretty-checkbox p-icon p-curve p-jelly">
                                    <input type="checkbox" name="repair[0]" id="checkfile2">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Təmirsiz</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button class="link-button link-button--tertiary" type="reset"><?= translate('reset') ?></button>
                        <button class="link-button link-button--primary" type="submit"><?= translate('confirm') ?></button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal modal--medium" id="locationSearch">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <select class="form-control select2-modal" name="city">
                           <?php foreach ($cities as $value): ?>
                           <option value="<?= $value['id'] ?>"><?= $value['city_name']; ?></option>
                           <?php endforeach; ?>
                        </select>
                        <div class="modal-close" data-dismiss="modal">
                           <svg class="icon icon-close">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                           </svg>
                        </div>
                        <div class="filter-tertiary d-none d-md-flex">
                           <a class="link-button link-button--tertiary" id="regions-tab"><?= translate('districts_and_settlements') ?></a>
                           <a class="link-button" id="metro-tab"><?= translate('metro_stations') ?></a>
                           <a class="link-button" id="target-tab"><?= translate('targets') ?></a>
                        </div>
                        <div class="filter-tertiary d-md-none">
                           <a class="link-button link-button--tertiary regions-tab-mobile" id="regions-tab"><?= translate('districts') ?></a>
                           <a class="link-button metro-tab-mobile" id="metro-tab"><?= translate('metro') ?></a>
                           <a class="link-button target-tab-mobile" id="target-tab"><?= translate('targets') ?></a>
                        </div>
                        <div class="map-title d-none d-sm-flex">
                           <svg class="icon-mapshowicon">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-mapshowicon"></use>
                           </svg>
                           <a x-search-in-map href="javascript:" class="link-button"><?= translate('search_the_map') ?></a>
                        </div>
                     </div>
                     <div class="modal-body regions-tab">
                        <div class="form-item form-item--large">
                           <svg class="icon icon-search">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-search"></use>
                           </svg>
                           <input oninput="updateRegion(this.value)" class="form-item__element location-input" type="search" placeholder="<?= translate('enter_the_names_of_districts_and_settlements') ?>">
                           <ul class="region-list" id="region-list">
                              <li class="region" x-city="1">
                                 <?php foreach ($district as $value): ?>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-<?= $value['id'] ?>">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span"><?= $value['district_name'] ?></span>
                                    </div>
                                 </div>
                                 <?php endforeach; ?>
                              </li>
                           </ul>
                        </div>
                        <div class="modal-body__content">
                           <div class="region-container">
                              <?php foreach ($regions as $value): ?>
                              <div class="region" x-city="<?= $value['parent_city'] ?>">
                                 <p class="region-title region-<?= $value['id'] ?>">
                                    <span class="region-part__title"><?= $value['region_name'] ?></span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                    </svg>
                                 </p>
                                 <?php foreach ($district as $dis_value): ?>
                                    <?php if ($value['id'] === $dis_value['parent_region']) { ?>
                                         <p class="region-part district-<?= $dis_value['id'] ?>">
                                            <span class="region-part__title"><?= $dis_value['district_name'] ?></span>
                                            <svg class="icon icon-close">
                                               <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                            </svg>
                                         </p>
                                    <?php } ?>
                              <?php endforeach; ?>
                              </div>
                              <?php endforeach; ?>
                           </div>
                        </div>
                     </div>
                     <div class="modal-body metro-tab d-none">
                        <div class="form-item form-item--large">
                           <svg class="icon icon-search">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-search"></use>
                           </svg>
                           <input oninput="updateMetro(this.value)" class="form-item__element location-input" type="search" placeholder="<?= translate('search_metro_station') ?>">
                           <ul class="region-list" id="metro-list">
                              <li class="region">
                                <?php foreach ($metros as $value): ?>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-<?= $value['id'] ?>">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span"><?= $value['metro_name'] ?></span>
                                    </div>
                                 </div>
                                <?php endforeach; ?>
                              </li>
                           </ul>
                        </div>
                        <div class="modal-body__content mt-0 d-none d-sm-block">
                           <div class="metro">
                              <div class="green"></div>
                              <div class="green-addition"></div>
                              <div class="red"></div>
                              <div class="red-addition"></div>
                              <div class="purple">
                                 <div class="purple-line"></div>
                                 <div class="purple-dot"></div>
                              </div>
                              <div class="purple-line-second" style="width: 57px;height: 10px;background-color: #7f1f6b;position:absolute;left:121px;top:142px;transform:rotate(45deg);"></div>
                              <div class="green-light">
                                 <div class="green-light-dot"></div>
                                 <div class="green-light-line"></div>
                              </div>
                               <?php foreach ($metros as $value): ?>
                              <div class="station station-<?= $value['id'] ?>">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title"><?= $value['metro_name'] ?></p>
                              </div>
                              <?php endforeach; ?>
                           </div>
                        </div>
                        <div class="modal-body__content d-sm-none">
                           <div class="region-container">
                              <div class="metro-region">
                                 <div class="region">
                                    <?php foreach ($metros as $value): ?>
                                    <p class="region-part station-<?= $value['id'] ?>">
                                       <span class="region-part__title station-part__title"><?= $value['metro_name'] ?></span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                       </svg>
                                    </p>
                                    <?php endforeach; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-body target-tab d-none">
                        <div class="form-item form-item--large">
                           <svg class="icon icon-search">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-search"></use>
                           </svg>
                           <input oninput="updateTarget(this.value)" class="form-item__element location-input" type="search" placeholder="<?= translate('enter_the_name_of_target') ?>">
                           <ul class="region-list" id="target-list">
                              <li class="region">
                                <?php foreach ($targets as $value): ?>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-<?= $value['id'] ?>">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span"><?= $value['target_name'] ?></span>
                                    </div>
                                 </div>
                                 <?php endforeach; ?>
                              </li>
                           </ul>
                        </div>
                        <div class="modal-body__content">
                           <div class="region-container">
                            <?php if (!empty($targets)): ?>
                                    <?php $current_letter = ''; ?>
                                    <?php foreach ($targets as $item) : ?>
                                    <div class="region">
                                        <?php $first_letter = mb_substr($item['target_name'], 0, 1, "UTF-8"); ?>
                                            <?php if ($first_letter != $current_letter) : ?>
                                                <p class="region-title">
                                                    <span class="region-part__title"><?= $first_letter; ?></span>
                                                    <svg class="icon icon-close">
                                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                                    </svg>
                                                 </p>
                                                <?php $current_letter = $first_letter; ?>
                                            <?php endif; ?>
                                            <p class="region-part target-2">
                                                <span class="region-part__title"><?= $item['target_name'] ?></span>
                                                <svg class="icon icon-close">
                                                   <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                                                </svg>
                                            </p>
                                    </div>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="selected-regions">
                           <label for=""><?= translate('selected') ?>:</label>
                           <div class="selected-regions__content">
                              <li class="lslide"></li>
                           </div>
                        </div>
                        <button class="link-button link-button--tertiary" type="reset" id="resetLocations"><?= translate('reset') ?></button>
                        <button class="link-button link-button--primary" type="button" data-dismiss="modal"><?= translate('confirm') ?></button>
                     </div>
                  </div>
               </div>
            </div>
            <button class="link-button link-button--primary"><?= translate('search') ?></button>
         </div>
      </form>
   </div>
</section>
<div class="main-all">
<div class="banner-home"></div>
<div id="main-body" class="main-body page-container container">
<div class="announcement-group">
<div class="announcement-group__header">
   <h2 class="announcement-title"><?= translate('vip_ads') ?></h2>
   <a class="link-button link-button--tertiary" href="az/vip.html"><?= translate('see_them_all') ?></a>
</div>
<div class="announcement-group__body">
     <div class="announcement announcement--short announcement-template">
       <div class="announcement-image">
            <div id="announcement-premium_3" class="announcement-slider announcement-slider--premium carousel slide" data-interval="false" data-pause="true">
               <ol class="carousel-indicators">
                   <li data-target="#announcement-premium_3" data-slide-to="0" class="active"></li>
                   <li data-target="#announcement-premium_3" data-slide-to="1"></li>
                   <li data-target="#announcement-premium_3" data-slide-to="2"></li>
               </ol>
               <div class="kiraye">Əmlak sahibi</div>
               <!-- <div class="satish">Satış</div> -->
               <div class="faiz" data-toggle="tooltip" title="<?= translate('mortgage') ?>">&nbsp;</div>
               <div class="kupcha" data-toggle="tooltip" title="Kupçalı">&nbsp;</div>
               <div class="carousel-inner">
                   <a target="_blank" href="<?= base_url() ?>home/detail" class="carousel-item active">
                       <img src="uploads/announcement/32974/a14fea5c798bb49d148ba0f14cdb3d81_avatar568e.jpg?v=1641284164" alt="<%- rc.title %>">
                   </a>
                   <a target="_blank" href="<?= base_url() ?>home/detail" class="carousel-item">
                       <img src="uploads/announcement/32974/a14fea5c798bb49d148ba0f14cdb3d81_avatar568e.jpg?v=1641284164" alt="<%- rc.title %>">
                   </a>
                   <a target="_blank" href="<?= base_url() ?>home/detail" class="carousel-item">
                       <img src="uploads/announcement/32974/a14fea5c798bb49d148ba0f14cdb3d81_avatar568e.jpg?v=1641284164" alt="<%- rc.title %>">
                   </a>
               </div>
            </div>
            <div class="announcement-icons">
               <div class="shape">
                  <svg class="icon icon-premium-icon">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-premium-icon"></use>
                  </svg>
               </div>
               <div class="shape">
                  <svg class="icon icon-vipp">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-vipp"></use>
                  </svg>
               </div>
               <div class="shape">
                  <form action="<?= base_url() ?>home/wishlist" method="post" x-edit-form="32978" x-target-with-data="afterWishlist">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                     <input type="hidden" name="id" value="32978">
                        <button type="submit">
                           <svg class="icon icon-heart-outline">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart-outline"></use>
                           </svg>
                        </button>
                  </form>
               </div>   
            </div>
       </div>
      <a class="announcement-description template-announcement" target="_blank" href="<?= base_url() ?>home/detail">
            <p class="announcement-price py-0"><span class="pricemain">180000</span>AZN</p>
            <p class="announcement-location">Mərdəkan q.</p>
            <p class="announcement-size announcement-headline">5 otaqlı - 250 m²</p>
            <p class="announcement-deadline"><span>4 Yanvar 2022</span></p>
         </a>
   </div>
   </div>
</div>

<!-- Yeni Elanlar -->

<div class="announcement-group">
   <div class="announcement-group__header">
      <h5 class="announcement-title"><?= translate('new_ads') ?></h5>
      <a class="link-button link-button--tertiary" href="az/axtar.html"><?= translate('see_them_all') ?></a>
   </div>
   <div class="announcement-group__body">
      <div class="announcement announcement--short announcement-template" x-announcement-owner="438">
         <div class="announcement-image">
            <div id="announcement-32974" class="announcement-slider carousel slide" data-interval="false" data-pause="true">
               <ol class="carousel-indicators">
                  <li data-target="#announcement-32974" data-slide-to="0" class="active"></li>
                  <li data-target="#announcement-32974" data-slide-to="1"></li>
                  <li data-target="#announcement-32974" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <a class="carousel-item  active " target=_blank href=az/elan/satis-heyet-evi-bag-5-otaqli-baki-xezer-r-merdekan-q-9621752.html>
                  <img src="uploads/announcement/32974/a14fea5c798bb49d148ba0f14cdb3d81_avatar568e.jpg?v=1641284164" alt="Satılır, həyət evi / bağ, 5 otaqlı, 250 m², Mərdəkan q.">
                  </a>
                  <a class="carousel-item " target=_blank href=az/elan/satis-heyet-evi-bag-5-otaqli-baki-xezer-r-merdekan-q-9621752.html>
                  <img src="uploads/announcement/32974/0ce423b15e55a0bb9430c87c93c7274b_avatar568e.jpg?v=1641284164" alt="Satılır, həyət evi / bağ, 5 otaqlı, 250 m², Mərdəkan q.">
                  </a>
                  <a class="carousel-item " target=_blank href=az/elan/satis-heyet-evi-bag-5-otaqli-baki-xezer-r-merdekan-q-9621752.html>
                  <img src="uploads/announcement/32974/772973809b8628c51abc7db9fe12803f_avatar568e.jpg?v=1641284164" alt="Satılır, həyət evi / bağ, 5 otaqlı, 250 m², Mərdəkan q.">
                  </a>
               </div>
            </div>
            <div class="announcement-icons">
               <div class="shape">
                  <form action="<?= base_url() ?>home/wishlist" method="post" x-edit-form="32974" x-target-with-data="afterWishlist">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                     <input type="hidden" name="id" value="32974">
                     <button type="submit">
                        <svg class="icon icon-heart-outline">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart-outline"></use>
                        </svg>
                     </button>
                  </form>
               </div>
            </div>
         </div>
         <a class="announcement-description template-announcement" target=_blank href=az/elan/satis-heyet-evi-bag-5-otaqli-baki-xezer-r-merdekan-q-9621752.html>
            <p class="announcement-price py-0"><span class="pricemain">180000</span>AZN</p>
            <p class="announcement-location">Mərdəkan q.</p>
            <p class="announcement-size announcement-headline">5 otaqlı - 250 m²</p>
            <p class="announcement-deadline"><span>4 Yanvar 2022</span></p>
         </a>
      </div>
   </div>
</div>

<!-- Yeni Elanlarin sonu -->
<div class="banner-center "><img src="https://tapsat.az/oc-content/plugins/slider/images/617460dccb2a0.jpg" width="100%"></div>
<br>

<!-- AGENTLİKLƏR -->


<div class="announcement-group">
   <div class="announcement-group__header">
      <h4 class="announcement-title"><?= translate('agency') ?></h4>
      <a class="link-button link-button--tertiary" href="az/agentlikler.html"><?= translate('see_them_all') ?></a>
   </div>
   <div class="announcement-group__body">
      <a class="announcement announcement--medium" href="az/agentlik/70.html">
         <div class="announcement-image">
            <img src="uploads/agency/70/31f20593bdbdd83018aad322410ec2f1_avatarb23d.jpg?v=1616596290" alt="CASPRO daşınmaz əmlak agentliyi">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">CASPRO daşınmaz əmlak agentliyi</p>
            </div>
            <p class="announcement-count my-1">27 təklif</p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Nobel pr. 15 (Azure Biznes Mərkəzi 22-ci mərtəbə)</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-phone">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-phone"></use>
               </svg>
               <span>(055) 488-66-00</span>
            </p>
         </div>
      </a>
      <a class="announcement announcement--medium" href="az/agentlik/72.html">
         <div class="announcement-image">
            <img src="uploads/agency/72/6094d4c7a831e1e08dbf858b8771cf94_avatar9db8.jpg?v=1617022425" alt="Nərimanov Əmlak daşınmaz əmlak agentliyi">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">Nərimanov Əmlak daşınmaz əmlak agentliyi</p>
            </div>
            <p class="announcement-count my-1">385 təklif</p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Nərimanov rayon, Təbriz küçəsi 105/35</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-phone">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-phone"></use>
               </svg>
               <span>(050) 209-36-48</span>
            </p>
         </div>
      </a>
      <a class="announcement announcement--medium" href="az/agentlik/92.html">
         <div class="announcement-image">
            <img src="uploads/agency/92/e12a6b7c9506dae5e6b4a8aeee36629f_avatar30c5.jpg?v=1624348514" alt="Zamin Əmlak 28 May">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">Zamin Əmlak 28 May</p>
            </div>
            <p class="announcement-count my-1">12 təklif</p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Nəsimi rayonu, Mikayıl Rəfili 39c</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-phone">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-phone"></use>
               </svg>
               <span>(055) 222-39-98</span>
            </p>
         </div>
      </a>
      <a class="announcement announcement--medium" href="az/agentlik/94.html">
         <div class="announcement-image">
            <img src="uploads/agency/94/661a1b34bb8f806cf03fb4be3a1e899d_avatar2ea8.jpg?v=1624449043" alt="Garant Əmlak daşınmaz əmlak agentliyi">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">Garant Əmlak daşınmaz əmlak agentliyi</p>
            </div>
            <p class="announcement-count my-1">521 təklif</p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Yasamal rayon, Hüseyn Cavid prospekti 209k</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-phone">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-phone"></use>
               </svg>
               <span>(070) 879-77-36</span>
            </p>
         </div>
      </a>
   </div>
</div>

<!-- AGENTLİKLƏR SON  -->


<!-- YAŞAYIŞ KOMPLEKSLƏRİ -->


<div class="announcement-group">
   <div class="announcement-group__header">
      <h4 class="announcement-title">Yaşayış kompleksləri</h4>
      <a class="link-button link-button--tertiary" href="<?= base_url() ?>home/detail"><?= translate('see_them_all') ?></a>
   </div>
   <div class="announcement-group__body">
      <a target="_blank" class="announcement announcement--long" href="<?= base_url() ?>home/detail">
         <div class="announcement-image">
            <img src="uploads/complex/27/bbdc9f1ed072a90a30c08920dbe7ac8c_avatar7fb5.jpg?v=1619006980" alt="&quot;Hünər Park&quot;">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">&quot;Hünər Park&quot;</p>
            </div>
            <p class="announcement-item--icon mt-1">
               <svg class="icon icon-build">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-build"></use>
               </svg>
               <span>Hünər Group</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Ağ Şəhər</span>
            </p>
            <p class="announcement-item--icon announcement-metro ">
               <svg class="icon icon-metro">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-metro"></use>
               </svg>
               <span>Şah İsmayıl Xətai</span>
            </p>
            <p class="announcement-item--icon announcement-deadline">
               <svg class="icon icon-key">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-key"></use>
               </svg>
               <span>2021</span>
            </p>
         </div>
      </a>
      <a target="_blank" class="announcement announcement--long" href="az/yasayis-kompleksi/23.html">
         <div class="announcement-image">
            <img src="uploads/complex/23/4ff53ed1da6189b7b120750afdbb5838_avatar2b2e.jpg?v=1611309110" alt="&quot;Park Hill Terrace&quot;">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">&quot;Park Hill Terrace&quot;</p>
            </div>
            <p class="announcement-item--icon mt-1">
               <svg class="icon icon-build">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-build"></use>
               </svg>
               <span>Park Hill Properties</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Xətai r</span>
            </p>
            <p class="announcement-item--icon announcement-metro ">
               <svg class="icon icon-metro">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-metro"></use>
               </svg>
               <span>Şah İsmayıl Xətai</span>
            </p>
            <p class="announcement-item--icon announcement-deadline">
               <svg class="icon icon-key">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-key"></use>
               </svg>
               <span>2022</span>
            </p>
         </div>
      </a>
      <a target="_blank" class="announcement announcement--long" href="az/yasayis-kompleksi/25.html">
         <div class="announcement-image">
            <img src="uploads/complex/25/a598a739e2ad094fd762f54b6a1549bb_avatare0d4.jpg?v=1610960406" alt="&quot;Park Hill Residence&quot;">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">&quot;Park Hill Residence&quot;</p>
            </div>
            <p class="announcement-item--icon mt-1">
               <svg class="icon icon-build">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-build"></use>
               </svg>
               <span>Park Hill Properties</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Ağ Şəhər</span>
            </p>
            <p class="announcement-item--icon announcement-metro ">
               <svg class="icon icon-metro">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-metro"></use>
               </svg>
               <span>Şah İsmayıl Xətai</span>
            </p>
            <p class="announcement-item--icon announcement-deadline">
               <svg class="icon icon-key">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-key"></use>
               </svg>
               <span>Təhvil verilib</span>
            </p>
         </div>
      </a>
      <a target="_blank" class="announcement announcement--long" href="az/yasayis-kompleksi/26.html">
         <div class="announcement-image">
            <img src="uploads/complex/26/bf9d7f7839e19b81d6a7d0231d083115_avatar3f82.jpg?v=1618131045" alt="&quot;London Evləri&quot;">
         </div>
         <div class="announcement-description">
            <div class="announcement-title-block">
               <p class="announcement-title">&quot;London Evləri&quot;</p>
            </div>
            <p class="announcement-item--icon mt-1">
               <svg class="icon icon-build">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-build"></use>
               </svg>
               <span>Marin Group</span>
            </p>
            <p class="announcement-item--icon">
               <svg class="icon icon-pin">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
               </svg>
               <span>Nəsimi rayon</span>
            </p>
            <p class="announcement-item--icon announcement-metro ">
               <svg class="icon icon-metro">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-metro"></use>
               </svg>
               <span>Gənclik</span>
            </p>
            <p class="announcement-item--icon announcement-deadline">
               <svg class="icon icon-key">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-key"></use>
               </svg>
               <span>2023</span>
            </p>
         </div>
      </a>
   </div>
</div>


<!-- YAŞAYIŞ KOMPLEKSLƏRİ SON -->




</div>
</div>
</main>