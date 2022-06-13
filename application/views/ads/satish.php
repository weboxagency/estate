<main class="main">
	<section class="map">
	   <div class="main-header__content container map-content page-container">
	     <form x-search-form class="search" action="<?= base_url() ?>axtar" method="get">
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
	<section class="main-body page-container container">
   <div class="announcement-group">
   <div class="announcement-group__header">
      <h5 class="announcement-title"><?= translate('property_for_sale') ?></h5>
   </div>
   <div class="announcement-group__body">
      <?php foreach ($new_ads_list as $value) { ?>
      <div class="announcement announcement--short announcement-template" x-announcement-owner="438">
         <div class="announcement-image">
            <div id="announcement-<?= $value['id'] ?>" class="announcement-slider carousel slide" data-interval="false" data-pause="true">
               <ol class="carousel-indicators">
                  <?php foreach (ads_photos($value['photos']) as $key => $pht) { ?>
                  <li data-target="#announcement-<?= $value['id'] ?>" data-slide-to="<?= $key ?>" <?= ($key==0) ? 'class="active"' : '' ?> ></li>
                  <?php } ?>
               </ol>
               <?php if ($value['user_type']==1) { ?>
               <div class="emlak_sahibi">Əmlak sahibi</div>
               <?php }else{ ?>
               <div class="vasiteci">Vasitəçi</div>
               <?php } ?>

               <?php if ($value['deed']==1) { ?>
               <div class="kupcha" data-toggle="tooltip" title="Kupçalı">&nbsp;</div>
               <?php } ?>
                <?php if ($value['mortgage']==1) { ?>
               <div class="faiz" data-toggle="tooltip" title="<?= translate('mortgage') ?>">&nbsp;</div>
               <?php } ?>
               <div class="carousel-inner">
                  <?php foreach (ads_photos($value['photos']) as $key => $shekil) { ?>
                  <a class="carousel-item <?= ($key==0) ? 'active' : '' ?> " target=_blank href="<?= base_url().'elan/'.$value['url_slug'] ?>">
                  <img src="<?= $shekil['avatar'] ?>" alt="<?= $value['ads_title'] ?>">
                  </a>
                  <?php } ?>
               </div>
            </div>
            <div class="announcement-icons">
               <div class="shape">
                  <form action="<?= base_url() ?>wishlist" method="post" x-edit-form="<?= $value['id'] ?>" x-target-with-data="afterWishlist">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                     <input type="hidden" name="id" value="<?= $value['id'] ?>">
                     <button type="submit">
                        <?php if (!isset($_SESSION['wish_sess'])) { ?>
                           <svg class="icon icon-heart-outline">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart-outline"></use>
                           </svg>
                        <?php }else{ ?>
                           <?php 
                           $heart = (!empty(session_wishlist($_SESSION['wish_sess'],$value['id'])) AND session_wishlist($_SESSION['wish_sess'],$value['id'])['data_id']===$value['id']) ? '' : '-outline';
                            ?>
                           <svg class="icon icon-heart<?=$heart; ?>">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart<?=$heart; ?>"></use>
                        </svg>
                        <?php } ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
         <a class="announcement-description template-announcement" target=_blank href="<?= base_url().'elan/'.$value['url_slug'] ?>">
            <p class="announcement-price py-0"><span class="pricemain">
               <?php 
               if ($value['announcement_type']==1) 
               {
                  $price = $value['price'].'</span>AZN';
               }
               elseif($value['announcement_type']==2)
               {
                  $price = $value['price'].'</span>AZN/ay';
               }
               else
               {
                  $price = $value['price'].'</span>AZN/gün';
               } 
               ?>
               <?= $price; ?>
            </p>
            <p class="announcement-location">
               <?php if ($value['metro_id']!=0) 
               {
                  $loca = $metros[$value['metro_id']]['metro_name'].' m.';
               } 
               elseif ($value['district_id']!=0) 
               {
                  $loca = $district[$value['district_id']]['district_name'].' q.';
               }
               elseif ($value['region_id']!=0)
               {
                  $loca = $regions[$value['region_id']]['region_name'].' r.';
               }
               else
               {
                  $loca = $cities[$value['city_id']]['city_name'];
               }

               ?>
               <?= $loca; ?>   
            </p>
            <?php 
            if ($value['property_type']==8) 
            {
               $an_headline = $value['area'].' sot';
            } 
            elseif ($value['property_type']==9 OR $value['property_type']==10) 
            {
               $an_headline = $value['area'].' m²';
            }
            else 
            {
               $an_headline = $value['room'].' otaqlı - '. $value['area'].' m²';
            }

            if ($value['floor']!=0) 
            {
               $ot = ' - '.$value['floor'].'/'.$value['max_floor'];
            }
            else
            {
               $ot = '';
            }
            ?>
            <p class="announcement-size announcement-headline"><?= $an_headline.' '.$ot ?></p>
            <p class="announcement-deadline"><span><?= $cities[$value['city_id']]['city_name'] ?>, <?= date_aze("j F Y",$value['created_at']); ?></span></p>
         </a>
      </div>
      <?php } ?>
   </div>
</div>
</section>
</main>