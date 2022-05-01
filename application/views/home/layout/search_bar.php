<section class="map">
   <div class="main-header__content container map-content page-container">
      <form x-search-form="" class="search" action="https://evelani.az/az/axtar/kiraye/yeni-tikili" method="get">
         <input type="hidden" name="sort" value="">
         <input type="hidden" name="region">
         <input type="hidden" name="district">
         <input type="hidden" name="metro">
         <input type="hidden" name="placemark">
         <input type="hidden" name="page" value="1">
         <div class="search-first">
            <select class="search-select p-0" type-select="" name="type">
               <option value="1">Satış</option>
               <option selected="" value="2">Kirayə</option>
               <option value="3">Kirayə günlük</option>
            </select>
            <div class="home-search">
               <div class="caption">
                  <span>Kirayə</span>
                  <svg class="icon icon-down">
                     <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-down"></use>
                  </svg>
               </div>
               <div class="list">
                  <div class="item" data-value="1">Satış</div>
                  <div class="item selected" data-value="2">Kirayə</div>
                  <div class="item" data-value="3">Kirayə günlük</div>
               </div>
            </div>
            <div class="searchmap-content">
               <input onkeypress="return isNumberKey(event)" id="numberTxt" class="search-input" type="number" placeholder="Elanın nömrəsi" name="number">
               <svg class="icon icon-search">
                  <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-search"></use>
               </svg>
            </div>
         </div>
         <div class="searchmap-input">
            <div class="link-button link-button--secondary" data-toggle="modal" data-target="#locationSearch">
               <svg class="icon icon-pin">
                  <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-pin"></use>
               </svg>
               Yer<span id="check-location"></span>
            </div>
            <div class="link-button link-button--secondary advancedSearch" data-toggle="modal" data-target="#advancedSearch">Ətraflı axtar</div>
            <div class="modal modal--small" id="advancedSearch">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h6 class="modal-title">Ətraflı axtar</h6>
                        <div class="modal-close" data-dismiss="modal">
                           <svg class="icon icon-close">
                              <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                           </svg>
                        </div>
                     </div>
                     <div class="modal-body">
                        <div class="form-row">
                           <div class="form-item form-item--small">
                              <div class="dropdown dropdown-select" id="propertyType">
                                 <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Əmlakın növü<strong></strong></span>
                                    <svg class="icon icon-down">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-down"></use>
                                    </svg>
                                 </div>
                                 <div class="dropdown-menu">
                                    <div class="dropdown-menu__group">
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="1" x-type-1="" x-type-2="" x-type-3="">
                                          <input checked="" type="checkbox" name="property_type[1]">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Yeni tikili</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="2" x-type-1="" x-type-2="" x-type-3="">
                                          <input type="checkbox" name="property_type[2]">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Köhnə tikili</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="3" x-type-1="" x-type-2="" x-type-3="">
                                          <input type="checkbox" name="property_type[3]" disabled="disabled">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Həyət evi / Bağ</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="5" x-type-1="" x-type-2="" x-type-3="">
                                          <input type="checkbox" name="property_type[5]" disabled="disabled">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Villa</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="6" x-type-1="" x-type-2="" x-type-3="">
                                          <input type="checkbox" name="property_type[6]" disabled="disabled">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Ofis</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="8" x-type-1="" x-type-2="">
                                          <input type="checkbox" name="property_type[8]" disabled="disabled">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Torpaq</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="9" x-type-1="" x-type-2="">
                                          <input type="checkbox" name="property_type[9]" disabled="disabled">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Obyekt</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly" x-property_type="10" x-type-1="" x-type-2="">
                                          <input type="checkbox" name="property_type[10]" disabled="disabled">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>Qaraj</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-item form-item--small" x-input="" x-type-1="" x-type-2="" x-type-3="" x-property-1="" x-property-2="" x-property-3="" x-property-5="" x-property-6="" x-property-7="" style="">
                              <div class="dropdown dropdown-select" id="roomCount">
                                 <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Otaq sayı</span>
                                    <svg class="icon icon-down">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-down"></use>
                                    </svg>
                                 </div>
                                 <div class="dropdown-menu">
                                    <div class="dropdown-menu__group">
                                       <div class="pretty pretty-checkbox dropdown-menu--pretty p-icon p-round p-jelly">
                                          <input checked="" type="checkbox" name="room[0]">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>İstənilən otaq sayı</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dropdown-menu__group">
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked="" type="checkbox" name="room[1]">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>1 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked="" type="checkbox" name="room[2]">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>2 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked="" type="checkbox" name="room[3]">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>3 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked="" type="checkbox" name="room[4]">
                                          <div class="state p-primary">
                                             <i class="icon fa fa-check"></i>
                                             <label></label>
                                             <span>4 otaqlı</span>
                                          </div>
                                       </div>
                                       <div class="pretty pretty-checkbox p-icon p-curve p-jelly">
                                          <input checked="" type="checkbox" name="room[5]">
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
                              <label for="">Qiymət, AZN</label>
                              <div class="input-block">
                                 <input data-type="currency" inputmode="numeric" name="price_min" placeholder="min">
                                 <input data-type="currency" inputmode="numeric" name="price_max" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--large">
                              <label for=""><span x-area-name-span="">Sahə</span>, <span x-area-span="">m²</span></label>
                              <div class="input-block">
                                 <input type="number" step=".01" onkeypress="return isNumberKey(event)" name="area_min" placeholder="min">
                                 <input type="number" step=".01" onkeypress="return isNumberKey(event)" name="area_max" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input="" x-type-1="" x-type-2="" x-type-3="" x-property-3="" x-property-5="" style="display: none;">
                           <div class="form-item form-item--large">
                              <label for="">Torpaq sahəsi, sot</label>
                              <div class="input-block">
                                 <input onkeypress="return isNumberKey(event)" name="land_area_min" type="number" step=".01" placeholder="min">
                                 <input onkeypress="return isNumberKey(event)" name="land_area_max" type="number" step=".01" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input="" x-type-1="" x-type-2="" x-type-3="" x-property-1="" x-property-2="" style="">
                           <div class="form-item form-item--large">
                              <label for="">Mərtəbə</label>
                              <div class="input-block">
                                 <input onkeypress="return isNumberKey(event)" name="floor_min" type="number" placeholder="min">
                                 <input onkeypress="return isNumberKey(event)" name="floor_max" type="number" placeholder="maks">
                              </div>
                           </div>
                        </div>
                        <div class="form-row" x-input="" x-type-1="" x-property-1="" x-property-2="" x-property-3="" x-property-5="" x-property-6="" x-property-8="" x-property-9="" x-property-10="" style="display: none;">
                           <div class="form-item form-item--large">
                              <label for="">Elan tipi</label>
                              <div class="checkbox-row">
                                 <div class="checkboxrow pretty pretty-checkbox p-icon p-curve p-jelly">
                                    <input name="deed" type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span>Çıxarış var</span>
                                    </div>
                                 </div>
                                 <div class="checkboxrow pretty pretty-checkbox p-icon p-curve p-jelly">
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
                        <div class="form-row" x-input="" x-type-1="" x-property-1="" x-property-2="" x-property-3="" x-property-5="" x-property-6="" x-property-9="" x-property-10="" style="display: none;">
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
                        <button class="link-button link-button--tertiary" type="reset">Sıfırla</button>
                        <button class="link-button link-button--primary" type="submit">Təsdiqlə</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal modal--medium" id="locationSearch">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <select class="form-control select2-modal" name="city">
                           <option value="1">Bakı</option>
                           <option value="2">Xırdalan</option>
                           <option value="3">Sumqayıt</option>
                           <option value="4">Ağcabədi</option>
                           <option value="5">Ağdam</option>
                           <option value="6">Ağdaş</option>
                           <option value="7">Ağstafa</option>
                           <option value="8">Ağsu</option>
                           <option value="9">Astara</option>
                           <option value="10">Balakən</option>
                           <option value="11">Beyləqan</option>
                           <option value="12">Bərdə</option>
                           <option value="13">Biləsuvar</option>
                           <option value="16">Cəlilabad</option>
                           <option value="17">Daşkəsən</option>
                           <option value="18">Fizuli</option>
                           <option value="19">Gədəbəy</option>
                           <option value="20">Gəncə</option>
                           <option value="21">Goranboy</option>
                           <option value="22">Göyçay</option>
                           <option value="23">Göygöl</option>
                           <option value="24">Göytəpə</option>
                           <option value="25">Hacıqabul</option>
                           <option value="26">İmişli</option>
                           <option value="27">İsmayıllı</option>
                           <option value="28">Kürdəmir</option>
                           <option value="29">Lerik</option>
                           <option value="30">Lənkəran</option>
                           <option value="31">Masallı</option>
                           <option value="32">Mingəçevir</option>
                           <option value="33">Naxçıvan</option>
                           <option value="34">Naftalan</option>
                           <option value="35">Neftçala</option>
                           <option value="36">Oğuz</option>
                           <option value="37">Qax</option>
                           <option value="38">Qazax</option>
                           <option value="39">Qəbələ</option>
                           <option value="40">Quba</option>
                           <option value="41">Qusar</option>
                           <option value="42">Saatlı</option>
                           <option value="43">Sabirabad</option>
                           <option value="44">Şabran</option>
                           <option value="45">Salyan</option>
                           <option value="46">Şamaxı</option>
                           <option value="47">Şəki</option>
                           <option value="48">Şəmkir</option>
                           <option value="49">Şirvan</option>
                           <option value="50">Siyəzən</option>
                           <option value="51">Tərtər</option>
                           <option value="52">Tovuz</option>
                           <option value="53">Ucar</option>
                           <option value="54">Xaçmaz</option>
                           <option value="55">Xızı</option>
                           <option value="56">Xudat</option>
                           <option value="57">Yevlax</option>
                           <option value="58">Zaqatala</option>
                           <option value="59">Zərdab</option>
                        </select>
                        <div class="modal-close" data-dismiss="modal">
                           <svg class="icon icon-close">
                              <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                           </svg>
                        </div>
                        <div class="filter-tertiary d-none d-md-flex">
                           <a class="link-button link-button--tertiary" id="regions-tab">Rayon və qəsəbələr</a>
                           <a class="link-button" id="metro-tab">Metrostansiyalar</a>
                           <a class="link-button" id="target-tab">Nişangahlar</a>
                        </div>
                        <div class="filter-tertiary d-md-none">
                           <a class="link-button link-button--tertiary regions-tab-mobile" id="regions-tab">Rayonlar</a>
                           <a class="link-button metro-tab-mobile" id="metro-tab">Metro</a>
                           <a class="link-button target-tab-mobile" id="target-tab">Nişangahlar</a>
                        </div>
                        <div class="map-title d-none d-sm-flex">
                           <svg class="icon-mapshowicon">
                              <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-mapshowicon"></use>
                           </svg>
                           <a x-search-in-map="" href="javascript:" class="link-button">Xəritədə axtar</a>
                        </div>
                     </div>
                     <div class="modal-body regions-tab">
                        <div class="form-item form-item--large">
                           <svg class="icon icon-search">
                              <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-search"></use>
                           </svg>
                           <input oninput="updateRegion(this.value)" class="form-item__element location-input" type="search" placeholder="Rayon və qəsəbə adlarını daxil edin">
                           <ul class="region-list" id="region-list" style="display: none;">
                              <li class="region" x-city="1" style="">
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-1">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Həzi Aslanov</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-2">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Əhmədli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-3">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">NZS</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-4">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Köhnə Günəşli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-5">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Ceyranbatan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-6">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Digah</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-7">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Fatmayi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-8">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Görədil</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-9">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Hökməli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-10">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Köhnə Corat</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-11">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Masazır</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-12">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Mehdiabad</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-13">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Müşviqabad</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-14">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Novxanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-15">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Pirəkəşkül</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-16">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Qobu</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-17">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Saray</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-18">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yeni Corat</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-54">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Şimal Dres</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-19">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">28 may</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-20">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">6-cı mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-21">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">7-ci mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-22">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">8-ci mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-23">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">9-cu mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-24">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Biləcəri</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-25">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Binəqədi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-26">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">M. Rəsulzadə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-27">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Sulutəpə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-28">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Xocasən</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-29">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Xutor</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-30">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Dərnəgül</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-31">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Çiçək</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-32">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Böyükşor</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-33">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Montin</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-34">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">1-ci mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-35">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">2-ci mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-36">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">3-cü mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-37">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">4-cü mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-38">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">5-ci mikrorayon</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-39">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Kubinka</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-40">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">8-ci kilometr</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-41">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Keşlə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-42">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Çilov</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-43">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Pirallahı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-44">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Bibi-Heybət</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-45">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Ələt</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-46">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Lökbatan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-47">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Puta</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-48">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Qızıldaş</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-49">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Qobustan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-50">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Sahil</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-51">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Səngəçal</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-52">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Şıxov</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-53">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Şubani</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-55">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Baş Ələt</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-56">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Ceyildağ</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-57">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Heybət</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-58">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Korgöz</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-59">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Kotal</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-60">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Pirsaat</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-61">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Qaradağ</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-62">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Qarakosa</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-63">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Şonqar</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-64">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Ümid</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-65">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yeni Ələt</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-66">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Bakıxanov</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-67">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Balaxanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-68">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Bilgəh</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-69">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Kürdəxanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-70">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Maştağa</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-71">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Məmmədli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-72">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Nardaran</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-73">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Pirşağı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-74">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Ramana</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-75">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Sabunçu</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-76">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Savalan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-77">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yeni Balaxanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-78">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yeni Ramana</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-79">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Zabrat</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-80">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">20-ci sahə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-81">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Badamdar</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-82">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Bayıl</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-83">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Bahar</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-84">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Bülbülə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-85">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Dədə Qorqud</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-87">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Əmircan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-88">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Günəşli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-89">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Hövsan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-90">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Zığ</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-91">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Massiv A</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-92">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Massiv B</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-93">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Massiv D</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-94">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Massiv G</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-95">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Massiv V</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-96">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Qaraçuxur</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-97">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Şərq</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-98">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Suraxanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-99">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yeni Günəşli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-100">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yeni Suraxanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-101">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Binə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-102">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Buzovna</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-103">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Dübəndi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-104">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Gürgən</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-105">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Mərdəkan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-106">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Qala</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-107">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Şağan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-108">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Şüvəlan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-109">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Türkan</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-110">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Zirə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-111">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Zağulba</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-112">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yasamal</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-113">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Yeni Yasamal</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="district-114">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="region-span">Alatava</span>
                                    </div>
                                 </div>
                              </li>
                              <li class="region" x-city="2" style="display: none;"></li>
                              <li class="region" x-city="3" style="display: none;">
                              </li>
                              <li class="region" x-city="4" style="display: none;"></li>
                              <li class="region" x-city="5" style="display: none;"></li>
                              <li class="region" x-city="6" style="display: none;"></li>
                              <li class="region" x-city="7" style="display: none;"></li>
                              <li class="region" x-city="8" style="display: none;"></li>
                              <li class="region" x-city="9" style="display: none;"></li>
                              <li class="region" x-city="10" style="display: none;"></li>
                              <li class="region" x-city="11" style="display: none;"></li>
                              <li class="region" x-city="12" style="display: none;"></li>
                              <li class="region" x-city="13" style="display: none;"></li>
                              <li class="region" x-city="16" style="display: none;"></li>
                              <li class="region" x-city="17" style="display: none;"></li>
                              <li class="region" x-city="18" style="display: none;"></li>
                              <li class="region" x-city="19" style="display: none;"></li>
                              <li class="region" x-city="20" style="display: none;"></li>
                              <li class="region" x-city="21" style="display: none;"></li>
                              <li class="region" x-city="22" style="display: none;"></li>
                              <li class="region" x-city="23" style="display: none;"></li>
                              <li class="region" x-city="24" style="display: none;"></li>
                              <li class="region" x-city="25" style="display: none;"></li>
                              <li class="region" x-city="26" style="display: none;"></li>
                              <li class="region" x-city="27" style="display: none;"></li>
                              <li class="region" x-city="28" style="display: none;"></li>
                              <li class="region" x-city="29" style="display: none;"></li>
                              <li class="region" x-city="30" style="display: none;"></li>
                              <li class="region" x-city="31" style="display: none;"></li>
                              <li class="region" x-city="32" style="display: none;"></li>
                              <li class="region" x-city="33" style="display: none;"></li>
                              <li class="region" x-city="34" style="display: none;"></li>
                              <li class="region" x-city="35" style="display: none;"></li>
                              <li class="region" x-city="36" style="display: none;"></li>
                              <li class="region" x-city="37" style="display: none;"></li>
                              <li class="region" x-city="38" style="display: none;"></li>
                              <li class="region" x-city="39" style="display: none;"></li>
                              <li class="region" x-city="40" style="display: none;"></li>
                              <li class="region" x-city="41" style="display: none;"></li>
                              <li class="region" x-city="42" style="display: none;"></li>
                              <li class="region" x-city="43" style="display: none;"></li>
                              <li class="region" x-city="44" style="display: none;"></li>
                              <li class="region" x-city="45" style="display: none;"></li>
                              <li class="region" x-city="46" style="display: none;"></li>
                              <li class="region" x-city="47" style="display: none;"></li>
                              <li class="region" x-city="48" style="display: none;"></li>
                              <li class="region" x-city="49" style="display: none;"></li>
                              <li class="region" x-city="50" style="display: none;"></li>
                              <li class="region" x-city="51" style="display: none;"></li>
                              <li class="region" x-city="52" style="display: none;"></li>
                              <li class="region" x-city="53" style="display: none;"></li>
                              <li class="region" x-city="54" style="display: none;"></li>
                              <li class="region" x-city="55" style="display: none;"></li>
                              <li class="region" x-city="56" style="display: none;"></li>
                              <li class="region" x-city="57" style="display: none;"></li>
                              <li class="region" x-city="58" style="display: none;"></li>
                              <li class="region" x-city="59" style="display: none;"></li>
                           </ul>
                        </div>
                        <div class="modal-body__content">
                           <div class="region-container">
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-2">
                                    <span class="region-part__title">Xətai r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-1">
                                    <span class="region-part__title">Həzi Aslanov</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-2">
                                    <span class="region-part__title">Əhmədli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-3">
                                    <span class="region-part__title">NZS</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-4">
                                    <span class="region-part__title">Köhnə Günəşli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-3">
                                    <span class="region-part__title">Abşeron r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-5">
                                    <span class="region-part__title">Ceyranbatan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-6">
                                    <span class="region-part__title">Digah</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-7">
                                    <span class="region-part__title">Fatmayi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-8">
                                    <span class="region-part__title">Görədil</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-9">
                                    <span class="region-part__title">Hökməli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-10">
                                    <span class="region-part__title">Köhnə Corat</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-11">
                                    <span class="region-part__title">Masazır</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-12">
                                    <span class="region-part__title">Mehdiabad</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-13">
                                    <span class="region-part__title">Müşviqabad</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-14">
                                    <span class="region-part__title">Novxanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-15">
                                    <span class="region-part__title">Pirəkəşkül</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-16">
                                    <span class="region-part__title">Qobu</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-17">
                                    <span class="region-part__title">Saray</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-18">
                                    <span class="region-part__title">Yeni Corat</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-54">
                                    <span class="region-part__title">Şimal Dres</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-4">
                                    <span class="region-part__title">Binəqədi r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-19">
                                    <span class="region-part__title">28 may</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-20">
                                    <span class="region-part__title">6-cı mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-21">
                                    <span class="region-part__title">7-ci mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-22">
                                    <span class="region-part__title">8-ci mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-23">
                                    <span class="region-part__title">9-cu mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-24">
                                    <span class="region-part__title">Biləcəri</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-25">
                                    <span class="region-part__title">Binəqədi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-26">
                                    <span class="region-part__title">M. Rəsulzadə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-27">
                                    <span class="region-part__title">Sulutəpə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-28">
                                    <span class="region-part__title">Xocasən</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-29">
                                    <span class="region-part__title">Xutor</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-30">
                                    <span class="region-part__title">Dərnəgül</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-31">
                                    <span class="region-part__title">Çiçək</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-5">
                                    <span class="region-part__title">Nərimanov r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-32">
                                    <span class="region-part__title">Böyükşor</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-33">
                                    <span class="region-part__title">Montin</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-6">
                                    <span class="region-part__title">Nəsimi r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-34">
                                    <span class="region-part__title">1-ci mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-35">
                                    <span class="region-part__title">2-ci mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-36">
                                    <span class="region-part__title">3-cü mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-37">
                                    <span class="region-part__title">4-cü mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-38">
                                    <span class="region-part__title">5-ci mikrorayon</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-39">
                                    <span class="region-part__title">Kubinka</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-7">
                                    <span class="region-part__title">Nizami r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-40">
                                    <span class="region-part__title">8-ci kilometr</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-41">
                                    <span class="region-part__title">Keşlə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-8">
                                    <span class="region-part__title">Pirallahı r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-42">
                                    <span class="region-part__title">Çilov</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-43">
                                    <span class="region-part__title">Pirallahı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-9">
                                    <span class="region-part__title">Qaradağ r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-44">
                                    <span class="region-part__title">Bibi-Heybət</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-45">
                                    <span class="region-part__title">Ələt</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-46">
                                    <span class="region-part__title">Lökbatan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-47">
                                    <span class="region-part__title">Puta</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-48">
                                    <span class="region-part__title">Qızıldaş</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-49">
                                    <span class="region-part__title">Qobustan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-50">
                                    <span class="region-part__title">Sahil</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-51">
                                    <span class="region-part__title">Səngəçal</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-52">
                                    <span class="region-part__title">Şıxov</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-53">
                                    <span class="region-part__title">Şubani</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-55">
                                    <span class="region-part__title">Baş Ələt</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-56">
                                    <span class="region-part__title">Ceyildağ</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-57">
                                    <span class="region-part__title">Heybət</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-58">
                                    <span class="region-part__title">Korgöz</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-59">
                                    <span class="region-part__title">Kotal</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-60">
                                    <span class="region-part__title">Pirsaat</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-61">
                                    <span class="region-part__title">Qaradağ</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-62">
                                    <span class="region-part__title">Qarakosa</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-63">
                                    <span class="region-part__title">Şonqar</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-64">
                                    <span class="region-part__title">Ümid</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-65">
                                    <span class="region-part__title">Yeni Ələt</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-10">
                                    <span class="region-part__title">Sabunçu r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-66">
                                    <span class="region-part__title">Bakıxanov</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-67">
                                    <span class="region-part__title">Balaxanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-68">
                                    <span class="region-part__title">Bilgəh</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-69">
                                    <span class="region-part__title">Kürdəxanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-70">
                                    <span class="region-part__title">Maştağa</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-71">
                                    <span class="region-part__title">Məmmədli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-72">
                                    <span class="region-part__title">Nardaran</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-73">
                                    <span class="region-part__title">Pirşağı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-74">
                                    <span class="region-part__title">Ramana</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-75">
                                    <span class="region-part__title">Sabunçu</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-76">
                                    <span class="region-part__title">Savalan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-77">
                                    <span class="region-part__title">Yeni Balaxanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-78">
                                    <span class="region-part__title">Yeni Ramana</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-79">
                                    <span class="region-part__title">Zabrat</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-12">
                                    <span class="region-part__title">Səbail r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-80">
                                    <span class="region-part__title">20-ci sahə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-81">
                                    <span class="region-part__title">Badamdar</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-82">
                                    <span class="region-part__title">Bayıl</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-13">
                                    <span class="region-part__title">Suraxanı r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-83">
                                    <span class="region-part__title">Bahar</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-84">
                                    <span class="region-part__title">Bülbülə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-85">
                                    <span class="region-part__title">Dədə Qorqud</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-87">
                                    <span class="region-part__title">Əmircan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-88">
                                    <span class="region-part__title">Günəşli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-89">
                                    <span class="region-part__title">Hövsan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-90">
                                    <span class="region-part__title">Zığ</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-91">
                                    <span class="region-part__title">Massiv A</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-92">
                                    <span class="region-part__title">Massiv B</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-93">
                                    <span class="region-part__title">Massiv D</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-94">
                                    <span class="region-part__title">Massiv G</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-95">
                                    <span class="region-part__title">Massiv V</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-96">
                                    <span class="region-part__title">Qaraçuxur</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-97">
                                    <span class="region-part__title">Şərq</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-98">
                                    <span class="region-part__title">Suraxanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-99">
                                    <span class="region-part__title">Yeni Günəşli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-100">
                                    <span class="region-part__title">Yeni Suraxanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-14">
                                    <span class="region-part__title">Xəzər r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-101">
                                    <span class="region-part__title">Binə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-102">
                                    <span class="region-part__title">Buzovna</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-103">
                                    <span class="region-part__title">Dübəndi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-104">
                                    <span class="region-part__title">Gürgən</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-105">
                                    <span class="region-part__title">Mərdəkan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-106">
                                    <span class="region-part__title">Qala</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-107">
                                    <span class="region-part__title">Şağan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-108">
                                    <span class="region-part__title">Şüvəlan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-109">
                                    <span class="region-part__title">Türkan</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-110">
                                    <span class="region-part__title">Zirə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-111">
                                    <span class="region-part__title">Zağulba</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="1" style="">
                                 <p class="region-title region-15">
                                    <span class="region-part__title">Yasamal r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-112">
                                    <span class="region-part__title">Yasamal</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-113">
                                    <span class="region-part__title">Yeni Yasamal</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part district-114">
                                    <span class="region-part__title">Alatava</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-24">
                                    <span class="region-part__title">1-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-25">
                                    <span class="region-part__title">2-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-27">
                                    <span class="region-part__title">3-cü mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-28">
                                    <span class="region-part__title">4-cü mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-29">
                                    <span class="region-part__title">5-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-30">
                                    <span class="region-part__title">6-cı mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-31">
                                    <span class="region-part__title">7-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-32">
                                    <span class="region-part__title">8-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-33">
                                    <span class="region-part__title">9-cu mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-34">
                                    <span class="region-part__title">10-cu mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-35">
                                    <span class="region-part__title">11-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-36">
                                    <span class="region-part__title">12-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-37">
                                    <span class="region-part__title">13-cü mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-38">
                                    <span class="region-part__title">16-cı mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-39">
                                    <span class="region-part__title">17-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-40">
                                    <span class="region-part__title">18-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-41">
                                    <span class="region-part__title">20-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-42">
                                    <span class="region-part__title">21-ci mikrorayon r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-43">
                                    <span class="region-part__title">1-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-44">
                                    <span class="region-part__title">2-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-45">
                                    <span class="region-part__title">3-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-46">
                                    <span class="region-part__title">4-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-47">
                                    <span class="region-part__title">5-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-48">
                                    <span class="region-part__title">7-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-49">
                                    <span class="region-part__title">8-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-50">
                                    <span class="region-part__title">9-cu məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-51">
                                    <span class="region-part__title">12-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-52">
                                    <span class="region-part__title">13-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-53">
                                    <span class="region-part__title">14-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-54">
                                    <span class="region-part__title">15-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-55">
                                    <span class="region-part__title">16-cı məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-56">
                                    <span class="region-part__title">17-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-57">
                                    <span class="region-part__title">18-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-58">
                                    <span class="region-part__title">19-cu məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-59">
                                    <span class="region-part__title">20-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-60">
                                    <span class="region-part__title">21-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-61">
                                    <span class="region-part__title">22-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-62">
                                    <span class="region-part__title">23-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-63">
                                    <span class="region-part__title">24-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-64">
                                    <span class="region-part__title">25-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-65">
                                    <span class="region-part__title">26-cı məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-66">
                                    <span class="region-part__title">30-cu məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-67">
                                    <span class="region-part__title">34-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-68">
                                    <span class="region-part__title">36-cı məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-69">
                                    <span class="region-part__title">40-cı məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-70">
                                    <span class="region-part__title">41-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-71">
                                    <span class="region-part__title">42-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-72">
                                    <span class="region-part__title">43-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-73">
                                    <span class="region-part__title">44-cü məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-75">
                                    <span class="region-part__title">45-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-76">
                                    <span class="region-part__title">46-cı məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-77">
                                    <span class="region-part__title">47-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-78">
                                    <span class="region-part__title">48-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-79">
                                    <span class="region-part__title">49-cu məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-80">
                                    <span class="region-part__title">51-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-81">
                                    <span class="region-part__title">52-ci məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-82">
                                    <span class="region-part__title">76-cı məhəllə r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-83">
                                    <span class="region-part__title">Sumqayıt şəhər r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-84">
                                    <span class="region-part__title">Stansiya Sumqayıt r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-85">
                                    <span class="region-part__title">İnşaatçılar qəsəbəsi r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-86">
                                    <span class="region-part__title">Kotec qəsəbəsi r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-87">
                                    <span class="region-part__title">Qurd dərəsi r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-88">
                                    <span class="region-part__title">BTZ bağları r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-89">
                                    <span class="region-part__title">Xəzər bağları r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-90">
                                    <span class="region-part__title">Corat bağları r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="3" style="display: none;">
                                 <p class="region-title region-91">
                                    <span class="region-part__title">Hacı Zeynəlabdin r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-16">
                                    <span class="region-part__title">Babək r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-17">
                                    <span class="region-part__title">Culfa r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-18">
                                    <span class="region-part__title">Ordubad r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-19">
                                    <span class="region-part__title">Şahbuz r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-20">
                                    <span class="region-part__title">Şərur r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-21">
                                    <span class="region-part__title">Sədərək r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-22">
                                    <span class="region-part__title">Qıvraq r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region" x-city="33" style="display: none;">
                                 <p class="region-title region-23">
                                    <span class="region-part__title">Naxçıvan r.</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-body metro-tab d-none">
                        <div class="form-item form-item--large">
                           <svg class="icon icon-search">
                              <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-search"></use>
                           </svg>
                           <input oninput="updateMetro(this.value)" class="form-item__element location-input" type="search" placeholder="Stansiya axtar">
                           <ul class="region-list" id="metro-list" style="display: none;">
                              <li class="region">
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-1">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">20 yanvar</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-2">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">28 may</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-3">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Avtovağzal</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-4">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Azadlıq prospekti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-5">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Bakmil</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-6">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Dərnəgül</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-7">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Elmlər Akademiyası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-8">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Gənclik</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-9">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Həzi Aslanov</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-10">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">İçəri Şəhər</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-11">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">İnşaatçılar</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-12">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Koroğlu</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-13">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Memar Əcəmi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-14">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Neftçilər</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-15">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Nizami</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-16">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Nəriman Nərimanov</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-17">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Nəsimi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-18">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Qara Qarayev</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-19">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Şah İsmayıl Xətai</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-20">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Sahil</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-21">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Ulduz</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-22">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Xalqlar Dostluğu</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-23">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">Əhmədli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="station-24">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="metro-span">8 Noyabr</span>
                                    </div>
                                 </div>
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
                              <div class="station station-1">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">20 yanvar</p>
                              </div>
                              <div class="station station-2">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">28 may</p>
                              </div>
                              <div class="station station-3">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Avtovağzal</p>
                              </div>
                              <div class="station station-4">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Azadlıq prospekti</p>
                              </div>
                              <div class="station station-5">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Bakmil</p>
                              </div>
                              <div class="station station-6">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Dərnəgül</p>
                              </div>
                              <div class="station station-7">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Elmlər Akademiyası</p>
                              </div>
                              <div class="station station-8">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Gənclik</p>
                              </div>
                              <div class="station station-9">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Həzi Aslanov</p>
                              </div>
                              <div class="station station-10">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">İçəri Şəhər</p>
                              </div>
                              <div class="station station-11">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">İnşaatçılar</p>
                              </div>
                              <div class="station station-12">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Koroğlu</p>
                              </div>
                              <div class="station station-13">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Memar Əcəmi</p>
                              </div>
                              <div class="station station-14">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Neftçilər</p>
                              </div>
                              <div class="station station-15">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Nizami</p>
                              </div>
                              <div class="station station-16">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Nəriman Nərimanov</p>
                              </div>
                              <div class="station station-17">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Nəsimi</p>
                              </div>
                              <div class="station station-18">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Qara Qarayev</p>
                              </div>
                              <div class="station station-19">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Şah İsmayıl Xətai</p>
                              </div>
                              <div class="station station-20">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Sahil</p>
                              </div>
                              <div class="station station-21">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Ulduz</p>
                              </div>
                              <div class="station station-22">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Xalqlar Dostluğu</p>
                              </div>
                              <div class="station station-23">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">Əhmədli</p>
                              </div>
                              <div class="station station-24">
                                 <div class="station-point">
                                    <svg class="icon icon-success-circle">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-success-circle"></use>
                                    </svg>
                                 </div>
                                 <p class="station-title">8 Noyabr</p>
                              </div>
                           </div>
                        </div>
                        <div class="modal-body__content d-sm-none">
                           <div class="region-container">
                              <div class="metro-region">
                                 <div class="region">
                                    <p class="region-part station-1">
                                       <span class="region-part__title station-part__title">20 yanvar</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-2">
                                       <span class="region-part__title station-part__title">28 may</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-3">
                                       <span class="region-part__title station-part__title">Avtovağzal</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-4">
                                       <span class="region-part__title station-part__title">Azadlıq prospekti</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-5">
                                       <span class="region-part__title station-part__title">Bakmil</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-6">
                                       <span class="region-part__title station-part__title">Dərnəgül</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-7">
                                       <span class="region-part__title station-part__title">Elmlər Akademiyası</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-8">
                                       <span class="region-part__title station-part__title">Gənclik</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-9">
                                       <span class="region-part__title station-part__title">Həzi Aslanov</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-10">
                                       <span class="region-part__title station-part__title">İçəri Şəhər</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-11">
                                       <span class="region-part__title station-part__title">İnşaatçılar</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-12">
                                       <span class="region-part__title station-part__title">Koroğlu</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-13">
                                       <span class="region-part__title station-part__title">Memar Əcəmi</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-14">
                                       <span class="region-part__title station-part__title">Neftçilər</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-15">
                                       <span class="region-part__title station-part__title">Nizami</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-16">
                                       <span class="region-part__title station-part__title">Nəriman Nərimanov</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-17">
                                       <span class="region-part__title station-part__title">Nəsimi</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-18">
                                       <span class="region-part__title station-part__title">Qara Qarayev</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-19">
                                       <span class="region-part__title station-part__title">Şah İsmayıl Xətai</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-20">
                                       <span class="region-part__title station-part__title">Sahil</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-21">
                                       <span class="region-part__title station-part__title">Ulduz</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-22">
                                       <span class="region-part__title station-part__title">Xalqlar Dostluğu</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-23">
                                       <span class="region-part__title station-part__title">Əhmədli</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                    <p class="region-part station-24">
                                       <span class="region-part__title station-part__title">8 Noyabr</span>
                                       <svg class="icon icon-close">
                                          <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                       </svg>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-body target-tab d-none">
                        <div class="form-item form-item--large">
                           <svg class="icon icon-search">
                              <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-search"></use>
                           </svg>
                           <input oninput="updateTarget(this.value)" class="form-item__element location-input" type="search" placeholder="Nişangah adlarını daxil edin">
                           <ul class="region-list" id="target-list" style="display: none;">
                              <li class="region">
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-2">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">28 Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-3">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">5 nömrəli xəstəxana</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-4">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">A.S.Puşkin parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-5">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">AAAF park</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-6">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ABŞ səfirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-99">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Abşeron Gənclər Şəhərciyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-7">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Abşeron Marriott otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-8">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Abu Arena</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-9">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ADA universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-10">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">AF Biznes Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-11">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Afrodita şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-12">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ağ Saray restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-13">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ağ Şəhər</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-14">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">AĞA biznes mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-15">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Al Saray restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-16">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ali Məhkəmə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-17">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Altes plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-18">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">AMAY ticarət mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-19">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ambassador otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-20">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Amor şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-21">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Anadolu restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-22">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Aqat şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-23">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Arash estetik klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-25">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ASAN xidmət - 1</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-26">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ASAN xidmət - 2</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-27">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ASAN xidmət - 3</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-28">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ASAN xidmət - 4</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-29">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ASAN xidmət - 5</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-24">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ASAN xidmət Sumqayıt</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-30">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Asiman şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-264">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ASK arena</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-31">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Atatürk parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-32">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ATU onkoloji klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-33">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Aura şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-34">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Avesta biznes mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-36">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Avrasiya klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-37">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Avropa otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-38">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Axundov bağı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-39">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ay İşığı şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-40">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Aygün City Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-41">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ayla şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-42">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ayna Sultanova heykəli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-43">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Aynalı plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-44">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Aysun şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-45">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Azad Qadın heykəli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-46">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Azadlıq meydanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-49">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Azər Türk Med hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-47">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Azərbaycan Dillər Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-50">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Azneft meydanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-51">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">AzTV telekanalı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-52">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Babək plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-53">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Badi-Səba şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-54">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Badu-Kubə şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-55">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Avrasiya Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-56">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Bərpa Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-58">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Dövlət Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-59">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Flebologiya mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-64">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-236">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Mühəndislik Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-60">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Musiqi Akademiyası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-219">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Oksford Məktəbi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-61">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bakı Sağlamlıq Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-62">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Baku City hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-63">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Baku Klinika</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-65">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ballı şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-66">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Banu Çiçək şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-67">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bayıl park</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-68">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Beşmərtəbə</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-69">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Binə ticarət mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-70">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Biolab tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-71">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bioloji təbabət klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-72">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Botanika bağı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-73">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bridge plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-74">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Brilyant şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-75">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Bül-bülə şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-76">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">C.Naxçıvanski adına Hərbi Lisey</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-78">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Caspian plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-79">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Caspian Shopping Center</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-80">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Cavanşir körpüsü</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-82">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ceyranbatan su anbarı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-81">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Cəfər Cabbarlı heykəli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-77">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Çanaqqala restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-83">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Çin səfirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-84">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Çinar plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-85">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Çıraq palace restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-86">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Çıraq plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-87">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dağüstü park</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-88">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dalğa plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-89">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Daxili İşlər Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-90">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dədə Qorqud parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-91">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dəmirçi Plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-92">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dəniz Vağzalı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-93">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dənizkənarı Milli park</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-94">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Diaqnoz tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-95">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dobremed hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-96">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dövlət İdarəçilik Akademiyası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-298">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dövlət İmahan Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-97">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dövlət Statistika Komitəsi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-98">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dövlət Təhlükəsizliyi Xidməti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-100">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Dünyagöz hospitalı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-103">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ekologiya və Təbii Sərvətlər Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-104">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Elçin şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-105">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Elit ticarət mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-106">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Elmed tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-107">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Elşən şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-102">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Eqoist otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-110">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Euro Lab klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-111">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Evromed tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-101">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ədliyyə Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-303">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Əliağa Vahid heykəli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-109">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ərzurum şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-112">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Fəridə şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-113">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Fəvvarələr meydanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-114">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Fidan şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-115">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Firuzə restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-116">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Flame Towers</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-117">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Four Seasons otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-118">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Fövqəladə Hallar Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-119">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Fransız səfirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-120">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Funda hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-121">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Gəlin Qaya restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-122">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Gənclər və İdman Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-123">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Gənclik Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-124">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Gənclik şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-125">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Gilavar şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-126">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Golden Ring şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-127">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Günəş şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-132">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">H.Əliyev adına İdman Kompleksi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-130">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Hayat klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-128">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">HB Güvən klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-133">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Heydər Əliyev Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-129">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Heydər Əliyev Sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-134">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Hilton otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-135">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Hökümət Evi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-136">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Hollivud şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-137">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Hüseyn Cavid parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-138">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Hyatt Regency otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-139">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İçəri Şəhər</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-140">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İctimai telekanal</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-141">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İmperial şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-142">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İnam tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-144">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İnci şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-146">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İqtisad Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-174">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İqtisadiyyat Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-147">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İran səfirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-149">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İtaliya səfirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-150">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">İzmir parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-145">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Intourist otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-148">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">ISR plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-151">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Kaktus restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-152">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Karnaval hall restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-154">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Keşlə bazarı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-153">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Kəmalə Nərmin şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-155">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Koala parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-156">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Kolizey şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-157">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Kooperasiya Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-158">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Koroğlu parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-159">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Korrupsiya idarəsi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-160">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Kosmos restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-161">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Kral şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-162">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Kukla Teatrı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-163">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Lake Palace otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-164">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Landmark biznes mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-165">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Leyla plaza restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-166">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Leyla şadlıq evi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-167">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Leyla Şıxlinskaya klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-168">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Lider telekanal</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-169">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">LOR hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-170">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Lotos ticarət mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-172">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">M. Hüseynzadə parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-171">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">M.Ə.Sabir parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-173">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mala Praqa restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-175">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Malokan bağı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-176">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Medera hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-177">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mega palace restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-178">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Megafun əyləncə mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-180">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Memarlıq və İnşaat Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-185">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Metropark Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-143">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mədəniyyət və İncəsənət Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-179">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mələk şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-186">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mərkəzi Bank</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-57">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mərkəzi Dəmiryol xəstəxanası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-181">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mərkəzi Gömrük hospitalı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-131">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mərkəzi Hərbi Hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-182">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mərkəzi klinika</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-194">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mərkəzi univermaq</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-183">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Məşədi Dadaş məscidi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-184">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mətin şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-35">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Milli Aviasiya Akademiyası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-187">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Milli Konservatoriya</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-188">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Milli Məclis</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-189">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Modern hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-190">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mona Liza restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-191">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Montin bazarı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-192">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Movida Plaza şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-193">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Mübarək şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-195">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Musabəyov parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-197">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nargilə kafesi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-199">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nazlı şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-200">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Neapol dairəsi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-201">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Neapol şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-203">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Neft Akademiyası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-323">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Neftçi baza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-204">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Neftçilər xəstəxanası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-205">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Neolit Hall şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-206">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Neptun şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-211">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">New Med hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-202">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nəbz klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-198">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nərgiz Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-208">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nəriman Nərimanov heykəli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-207">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nəriman Nərimanov parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-209">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nəsimi bazarı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-210">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nəsimi heykəli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-196">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nəsrəddin Tusi adına klinika</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-212">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Niel şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-213">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nizami heykəli</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-214">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nizami kinoteatr</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-215">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Nizami Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-216">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Oazis restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-217">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Odlar Yurdu Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-218">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Oğuzxan şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-220">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Oksigen klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-221">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Olimpik otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-222">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Olimpik Star</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-223">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Park Azure</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-224">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Park Bulvar Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-225">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Park İnn otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-227">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Pedaqoji Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-228">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Pirosmani restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-229">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Pitomnik restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-230">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Planet şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-231">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Pluton şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-232">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Port Baku Mall</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-233">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Praqa şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-234">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Prezident parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-235">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qafqaz Resort otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-237">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qələbə dairəsi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-238">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qərb Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-239">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qış parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-240">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qız Qalası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-241">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qızıl Buta şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-242">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qızıl Qaya şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-243">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qızıl Tac restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-244">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qlobus plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-245">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qubernator parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-246">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Qurtuluş 93 Yaşayış Kompleksi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-248">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">RAS plaza restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-249">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Real hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-250">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Real şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-251">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Respublika Müalicəvi Diaqnostika Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-252">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Rəssamlıq Akademiyası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-253">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Rich plaza</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-254">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Riviera otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-255">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Romance palace restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-256">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Roz Marina restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-257">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Rusiya səfirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-258">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şahənşah şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-260">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şam bağı restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-265">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şəhidlər Xiyabanı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-267">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şəki restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-268">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şəlalə parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-271">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şərq bazarı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-288">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şuşa restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-289">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Şüvəlan Park ticarət mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-259">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sahil bağı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-261">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sapfir şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-262">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sea Breeze</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-272">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sevən Ürəklər şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-273">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sevgi parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-274">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sevil Qazıyeva parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-263">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sədərək Ticarət Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-266">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Səhiyyə Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-269">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Səməd Vurğun parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-270">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sərhədçi İdman Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-275">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Simfoniya Hall şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-276">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sirk</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-277">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Siyaqut şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-278">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sofiya şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-108">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sosial Müdafiəsi Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-279">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Space telekanalı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-280">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Spero hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-281">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Spring otel</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-282">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Starlab tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-283">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Stimul hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-284">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Su İdman Sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-285">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Su Səsi restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-286">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Su Sonası şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-287">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Sultan şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-294">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Texniki Universitet</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-290">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Təbrik şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-291">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Təfəkkür Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-292">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Təhsil Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-293">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Tərlan restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-295">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Təzə bazar</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-296">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Tibb Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-297">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Tofiq Bəhrəmov stadionu</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-299">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Turan klinikası</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-301">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Türk səfirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-300">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Türk-Amerikan tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-302">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Ukrayna dairəsi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-304">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Venera şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-305">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Vergilər Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-306">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Versal şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-307">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Vita Med hospital</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-308">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">World Business Center</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-309">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Xalça Muzeyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-310">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Xan saray restoranı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-312">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Xaqani Ticarət Mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-311">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Xarici İşlər Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-313">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Xəzər Universiteti</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-314">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Xəzinə şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-315">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Yaşam tibb mərkəzi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-316">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Yasamal bazarı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-317">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Yasamal parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-318">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Yaşıl bazar</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-319">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Yeganə şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-247">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Yüksək Texnologiyalar Nazirliyi</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-226">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Zabitlər parkı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-320">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Zərifə Əliyeva adına park</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-321">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Zirvə şadlıq sarayı</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-322">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Zoopark</span>
                                    </div>
                                 </div>
                                 <div class="pretty pretty-checkbox p-icon p-curve p-jelly" id="target-48">
                                    <input type="checkbox">
                                    <div class="state p-primary">
                                       <i class="icon fa fa-check"></i>
                                       <label></label>
                                       <span class="target-span">Тurizm və Menecment Universiteti</span>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="modal-body__content">
                           <div class="region-container">
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">2</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-2">
                                    <span class="region-part__title">28 Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">5</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-3">
                                    <span class="region-part__title">5 nömrəli xəstəxana</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">A</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-4">
                                    <span class="region-part__title">A.S.Puşkin parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-5">
                                    <span class="region-part__title">AAAF park</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-6">
                                    <span class="region-part__title">ABŞ səfirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-99">
                                    <span class="region-part__title">Abşeron Gənclər Şəhərciyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-7">
                                    <span class="region-part__title">Abşeron Marriott otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-8">
                                    <span class="region-part__title">Abu Arena</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-9">
                                    <span class="region-part__title">ADA universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-10">
                                    <span class="region-part__title">AF Biznes Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-11">
                                    <span class="region-part__title">Afrodita şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-12">
                                    <span class="region-part__title">Ağ Saray restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-13">
                                    <span class="region-part__title">Ağ Şəhər</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-14">
                                    <span class="region-part__title">AĞA biznes mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-15">
                                    <span class="region-part__title">Al Saray restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-16">
                                    <span class="region-part__title">Ali Məhkəmə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-17">
                                    <span class="region-part__title">Altes plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-18">
                                    <span class="region-part__title">AMAY ticarət mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-19">
                                    <span class="region-part__title">Ambassador otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-20">
                                    <span class="region-part__title">Amor şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-21">
                                    <span class="region-part__title">Anadolu restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-22">
                                    <span class="region-part__title">Aqat şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-23">
                                    <span class="region-part__title">Arash estetik klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-25">
                                    <span class="region-part__title">ASAN xidmət - 1</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-26">
                                    <span class="region-part__title">ASAN xidmət - 2</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-27">
                                    <span class="region-part__title">ASAN xidmət - 3</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-28">
                                    <span class="region-part__title">ASAN xidmət - 4</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-29">
                                    <span class="region-part__title">ASAN xidmət - 5</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-24">
                                    <span class="region-part__title">ASAN xidmət Sumqayıt</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-30">
                                    <span class="region-part__title">Asiman şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-264">
                                    <span class="region-part__title">ASK arena</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-31">
                                    <span class="region-part__title">Atatürk parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-32">
                                    <span class="region-part__title">ATU onkoloji klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-33">
                                    <span class="region-part__title">Aura şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-34">
                                    <span class="region-part__title">Avesta biznes mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-36">
                                    <span class="region-part__title">Avrasiya klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-37">
                                    <span class="region-part__title">Avropa otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-38">
                                    <span class="region-part__title">Axundov bağı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-39">
                                    <span class="region-part__title">Ay İşığı şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-40">
                                    <span class="region-part__title">Aygün City Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-41">
                                    <span class="region-part__title">Ayla şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-42">
                                    <span class="region-part__title">Ayna Sultanova heykəli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-43">
                                    <span class="region-part__title">Aynalı plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-44">
                                    <span class="region-part__title">Aysun şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-45">
                                    <span class="region-part__title">Azad Qadın heykəli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-46">
                                    <span class="region-part__title">Azadlıq meydanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-49">
                                    <span class="region-part__title">Azər Türk Med hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-47">
                                    <span class="region-part__title">Azərbaycan Dillər Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-50">
                                    <span class="region-part__title">Azneft meydanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-51">
                                    <span class="region-part__title">AzTV telekanalı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">B</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-52">
                                    <span class="region-part__title">Babək plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-53">
                                    <span class="region-part__title">Badi-Səba şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-54">
                                    <span class="region-part__title">Badu-Kubə şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-55">
                                    <span class="region-part__title">Bakı Avrasiya Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-56">
                                    <span class="region-part__title">Bakı Bərpa Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-58">
                                    <span class="region-part__title">Bakı Dövlət Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-59">
                                    <span class="region-part__title">Bakı Flebologiya mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-64">
                                    <span class="region-part__title">Bakı Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-236">
                                    <span class="region-part__title">Bakı Mühəndislik Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-60">
                                    <span class="region-part__title">Bakı Musiqi Akademiyası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-219">
                                    <span class="region-part__title">Bakı Oksford Məktəbi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-61">
                                    <span class="region-part__title">Bakı Sağlamlıq Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-62">
                                    <span class="region-part__title">Baku City hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-63">
                                    <span class="region-part__title">Baku Klinika</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-65">
                                    <span class="region-part__title">Ballı şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-66">
                                    <span class="region-part__title">Banu Çiçək şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-67">
                                    <span class="region-part__title">Bayıl park</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-68">
                                    <span class="region-part__title">Beşmərtəbə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-69">
                                    <span class="region-part__title">Binə ticarət mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-70">
                                    <span class="region-part__title">Biolab tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-71">
                                    <span class="region-part__title">Bioloji təbabət klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-72">
                                    <span class="region-part__title">Botanika bağı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-73">
                                    <span class="region-part__title">Bridge plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-74">
                                    <span class="region-part__title">Brilyant şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-75">
                                    <span class="region-part__title">Bül-bülə şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">C</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-76">
                                    <span class="region-part__title">C.Naxçıvanski adına Hərbi Lisey</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-78">
                                    <span class="region-part__title">Caspian plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-79">
                                    <span class="region-part__title">Caspian Shopping Center</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-80">
                                    <span class="region-part__title">Cavanşir körpüsü</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-82">
                                    <span class="region-part__title">Ceyranbatan su anbarı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-81">
                                    <span class="region-part__title">Cəfər Cabbarlı heykəli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">Ç</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-77">
                                    <span class="region-part__title">Çanaqqala restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-83">
                                    <span class="region-part__title">Çin səfirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-84">
                                    <span class="region-part__title">Çinar plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-85">
                                    <span class="region-part__title">Çıraq palace restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-86">
                                    <span class="region-part__title">Çıraq plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">D</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-87">
                                    <span class="region-part__title">Dağüstü park</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-88">
                                    <span class="region-part__title">Dalğa plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-89">
                                    <span class="region-part__title">Daxili İşlər Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-90">
                                    <span class="region-part__title">Dədə Qorqud parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-91">
                                    <span class="region-part__title">Dəmirçi Plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-92">
                                    <span class="region-part__title">Dəniz Vağzalı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-93">
                                    <span class="region-part__title">Dənizkənarı Milli park</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-94">
                                    <span class="region-part__title">Diaqnoz tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-95">
                                    <span class="region-part__title">Dobremed hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-96">
                                    <span class="region-part__title">Dövlət İdarəçilik Akademiyası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-298">
                                    <span class="region-part__title">Dövlət İmahan Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-97">
                                    <span class="region-part__title">Dövlət Statistika Komitəsi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-98">
                                    <span class="region-part__title">Dövlət Təhlükəsizliyi Xidməti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-100">
                                    <span class="region-part__title">Dünyagöz hospitalı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">E</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-103">
                                    <span class="region-part__title">Ekologiya və Təbii Sərvətlər Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-104">
                                    <span class="region-part__title">Elçin şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-105">
                                    <span class="region-part__title">Elit ticarət mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-106">
                                    <span class="region-part__title">Elmed tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-107">
                                    <span class="region-part__title">Elşən şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-102">
                                    <span class="region-part__title">Eqoist otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-110">
                                    <span class="region-part__title">Euro Lab klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-111">
                                    <span class="region-part__title">Evromed tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">Ə</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-101">
                                    <span class="region-part__title">Ədliyyə Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-303">
                                    <span class="region-part__title">Əliağa Vahid heykəli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-109">
                                    <span class="region-part__title">Ərzurum şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">F</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-112">
                                    <span class="region-part__title">Fəridə şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-113">
                                    <span class="region-part__title">Fəvvarələr meydanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-114">
                                    <span class="region-part__title">Fidan şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-115">
                                    <span class="region-part__title">Firuzə restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-116">
                                    <span class="region-part__title">Flame Towers</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-117">
                                    <span class="region-part__title">Four Seasons otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-118">
                                    <span class="region-part__title">Fövqəladə Hallar Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-119">
                                    <span class="region-part__title">Fransız səfirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-120">
                                    <span class="region-part__title">Funda hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">G</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-121">
                                    <span class="region-part__title">Gəlin Qaya restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-122">
                                    <span class="region-part__title">Gənclər və İdman Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-123">
                                    <span class="region-part__title">Gənclik Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-124">
                                    <span class="region-part__title">Gənclik şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-125">
                                    <span class="region-part__title">Gilavar şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-126">
                                    <span class="region-part__title">Golden Ring şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-127">
                                    <span class="region-part__title">Günəş şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">H</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-132">
                                    <span class="region-part__title">H.Əliyev adına İdman Kompleksi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-130">
                                    <span class="region-part__title">Hayat klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-128">
                                    <span class="region-part__title">HB Güvən klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-133">
                                    <span class="region-part__title">Heydər Əliyev Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-129">
                                    <span class="region-part__title">Heydər Əliyev Sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-134">
                                    <span class="region-part__title">Hilton otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-135">
                                    <span class="region-part__title">Hökümət Evi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-136">
                                    <span class="region-part__title">Hollivud şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-137">
                                    <span class="region-part__title">Hüseyn Cavid parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-138">
                                    <span class="region-part__title">Hyatt Regency otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">İ</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-139">
                                    <span class="region-part__title">İçəri Şəhər</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-140">
                                    <span class="region-part__title">İctimai telekanal</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-141">
                                    <span class="region-part__title">İmperial şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-142">
                                    <span class="region-part__title">İnam tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-144">
                                    <span class="region-part__title">İnci şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-146">
                                    <span class="region-part__title">İqtisad Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-174">
                                    <span class="region-part__title">İqtisadiyyat Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-147">
                                    <span class="region-part__title">İran səfirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-149">
                                    <span class="region-part__title">İtaliya səfirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-150">
                                    <span class="region-part__title">İzmir parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">I</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-145">
                                    <span class="region-part__title">Intourist otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-148">
                                    <span class="region-part__title">ISR plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">K</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-151">
                                    <span class="region-part__title">Kaktus restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-152">
                                    <span class="region-part__title">Karnaval hall restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-154">
                                    <span class="region-part__title">Keşlə bazarı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-153">
                                    <span class="region-part__title">Kəmalə Nərmin şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-155">
                                    <span class="region-part__title">Koala parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-156">
                                    <span class="region-part__title">Kolizey şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-157">
                                    <span class="region-part__title">Kooperasiya Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-158">
                                    <span class="region-part__title">Koroğlu parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-159">
                                    <span class="region-part__title">Korrupsiya idarəsi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-160">
                                    <span class="region-part__title">Kosmos restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-161">
                                    <span class="region-part__title">Kral şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-162">
                                    <span class="region-part__title">Kukla Teatrı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">L</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-163">
                                    <span class="region-part__title">Lake Palace otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-164">
                                    <span class="region-part__title">Landmark biznes mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-165">
                                    <span class="region-part__title">Leyla plaza restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-166">
                                    <span class="region-part__title">Leyla şadlıq evi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-167">
                                    <span class="region-part__title">Leyla Şıxlinskaya klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-168">
                                    <span class="region-part__title">Lider telekanal</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-169">
                                    <span class="region-part__title">LOR hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-170">
                                    <span class="region-part__title">Lotos ticarət mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">M</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-172">
                                    <span class="region-part__title">M. Hüseynzadə parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-171">
                                    <span class="region-part__title">M.Ə.Sabir parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-173">
                                    <span class="region-part__title">Mala Praqa restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-175">
                                    <span class="region-part__title">Malokan bağı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-176">
                                    <span class="region-part__title">Medera hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-177">
                                    <span class="region-part__title">Mega palace restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-178">
                                    <span class="region-part__title">Megafun əyləncə mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-180">
                                    <span class="region-part__title">Memarlıq və İnşaat Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-185">
                                    <span class="region-part__title">Metropark Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-143">
                                    <span class="region-part__title">Mədəniyyət və İncəsənət Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-179">
                                    <span class="region-part__title">Mələk şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-186">
                                    <span class="region-part__title">Mərkəzi Bank</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-57">
                                    <span class="region-part__title">Mərkəzi Dəmiryol xəstəxanası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-181">
                                    <span class="region-part__title">Mərkəzi Gömrük hospitalı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-131">
                                    <span class="region-part__title">Mərkəzi Hərbi Hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-182">
                                    <span class="region-part__title">Mərkəzi klinika</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-194">
                                    <span class="region-part__title">Mərkəzi univermaq</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-183">
                                    <span class="region-part__title">Məşədi Dadaş məscidi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-184">
                                    <span class="region-part__title">Mətin şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-35">
                                    <span class="region-part__title">Milli Aviasiya Akademiyası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-187">
                                    <span class="region-part__title">Milli Konservatoriya</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-188">
                                    <span class="region-part__title">Milli Məclis</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-189">
                                    <span class="region-part__title">Modern hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-190">
                                    <span class="region-part__title">Mona Liza restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-191">
                                    <span class="region-part__title">Montin bazarı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-192">
                                    <span class="region-part__title">Movida Plaza şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-193">
                                    <span class="region-part__title">Mübarək şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-195">
                                    <span class="region-part__title">Musabəyov parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">N</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-197">
                                    <span class="region-part__title">Nargilə kafesi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-199">
                                    <span class="region-part__title">Nazlı şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-200">
                                    <span class="region-part__title">Neapol dairəsi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-201">
                                    <span class="region-part__title">Neapol şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-203">
                                    <span class="region-part__title">Neft Akademiyası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-323">
                                    <span class="region-part__title">Neftçi baza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-204">
                                    <span class="region-part__title">Neftçilər xəstəxanası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-205">
                                    <span class="region-part__title">Neolit Hall şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-206">
                                    <span class="region-part__title">Neptun şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-211">
                                    <span class="region-part__title">New Med hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-202">
                                    <span class="region-part__title">Nəbz klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-198">
                                    <span class="region-part__title">Nərgiz Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-208">
                                    <span class="region-part__title">Nəriman Nərimanov heykəli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-207">
                                    <span class="region-part__title">Nəriman Nərimanov parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-209">
                                    <span class="region-part__title">Nəsimi bazarı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-210">
                                    <span class="region-part__title">Nəsimi heykəli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-196">
                                    <span class="region-part__title">Nəsrəddin Tusi adına klinika</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-212">
                                    <span class="region-part__title">Niel şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-213">
                                    <span class="region-part__title">Nizami heykəli</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-214">
                                    <span class="region-part__title">Nizami kinoteatr</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-215">
                                    <span class="region-part__title">Nizami Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">O</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-216">
                                    <span class="region-part__title">Oazis restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-217">
                                    <span class="region-part__title">Odlar Yurdu Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-218">
                                    <span class="region-part__title">Oğuzxan şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-220">
                                    <span class="region-part__title">Oksigen klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-221">
                                    <span class="region-part__title">Olimpik otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-222">
                                    <span class="region-part__title">Olimpik Star</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">P</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-223">
                                    <span class="region-part__title">Park Azure</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-224">
                                    <span class="region-part__title">Park Bulvar Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-225">
                                    <span class="region-part__title">Park İnn otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-227">
                                    <span class="region-part__title">Pedaqoji Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-228">
                                    <span class="region-part__title">Pirosmani restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-229">
                                    <span class="region-part__title">Pitomnik restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-230">
                                    <span class="region-part__title">Planet şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-231">
                                    <span class="region-part__title">Pluton şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-232">
                                    <span class="region-part__title">Port Baku Mall</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-233">
                                    <span class="region-part__title">Praqa şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-234">
                                    <span class="region-part__title">Prezident parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">Q</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-235">
                                    <span class="region-part__title">Qafqaz Resort otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-237">
                                    <span class="region-part__title">Qələbə dairəsi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-238">
                                    <span class="region-part__title">Qərb Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-239">
                                    <span class="region-part__title">Qış parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-240">
                                    <span class="region-part__title">Qız Qalası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-241">
                                    <span class="region-part__title">Qızıl Buta şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-242">
                                    <span class="region-part__title">Qızıl Qaya şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-243">
                                    <span class="region-part__title">Qızıl Tac restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-244">
                                    <span class="region-part__title">Qlobus plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-245">
                                    <span class="region-part__title">Qubernator parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-246">
                                    <span class="region-part__title">Qurtuluş 93 Yaşayış Kompleksi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">R</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-248">
                                    <span class="region-part__title">RAS plaza restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-249">
                                    <span class="region-part__title">Real hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-250">
                                    <span class="region-part__title">Real şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-251">
                                    <span class="region-part__title">Respublika Müalicəvi Diaqnostika Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-252">
                                    <span class="region-part__title">Rəssamlıq Akademiyası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-253">
                                    <span class="region-part__title">Rich plaza</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-254">
                                    <span class="region-part__title">Riviera otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-255">
                                    <span class="region-part__title">Romance palace restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-256">
                                    <span class="region-part__title">Roz Marina restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-257">
                                    <span class="region-part__title">Rusiya səfirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">Ş</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-258">
                                    <span class="region-part__title">Şahənşah şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-260">
                                    <span class="region-part__title">Şam bağı restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-265">
                                    <span class="region-part__title">Şəhidlər Xiyabanı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-267">
                                    <span class="region-part__title">Şəki restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-268">
                                    <span class="region-part__title">Şəlalə parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-271">
                                    <span class="region-part__title">Şərq bazarı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-288">
                                    <span class="region-part__title">Şuşa restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-289">
                                    <span class="region-part__title">Şüvəlan Park ticarət mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">S</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-259">
                                    <span class="region-part__title">Sahil bağı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-261">
                                    <span class="region-part__title">Sapfir şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-262">
                                    <span class="region-part__title">Sea Breeze</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-272">
                                    <span class="region-part__title">Sevən Ürəklər şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-273">
                                    <span class="region-part__title">Sevgi parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-274">
                                    <span class="region-part__title">Sevil Qazıyeva parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-263">
                                    <span class="region-part__title">Sədərək Ticarət Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-266">
                                    <span class="region-part__title">Səhiyyə Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-269">
                                    <span class="region-part__title">Səməd Vurğun parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-270">
                                    <span class="region-part__title">Sərhədçi İdman Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-275">
                                    <span class="region-part__title">Simfoniya Hall şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-276">
                                    <span class="region-part__title">Sirk</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-277">
                                    <span class="region-part__title">Siyaqut şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-278">
                                    <span class="region-part__title">Sofiya şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-108">
                                    <span class="region-part__title">Sosial Müdafiəsi Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-279">
                                    <span class="region-part__title">Space telekanalı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-280">
                                    <span class="region-part__title">Spero hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-281">
                                    <span class="region-part__title">Spring otel</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-282">
                                    <span class="region-part__title">Starlab tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-283">
                                    <span class="region-part__title">Stimul hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-284">
                                    <span class="region-part__title">Su İdman Sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-285">
                                    <span class="region-part__title">Su Səsi restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-286">
                                    <span class="region-part__title">Su Sonası şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-287">
                                    <span class="region-part__title">Sultan şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">T</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-294">
                                    <span class="region-part__title">Texniki Universitet</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-290">
                                    <span class="region-part__title">Təbrik şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-291">
                                    <span class="region-part__title">Təfəkkür Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-292">
                                    <span class="region-part__title">Təhsil Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-293">
                                    <span class="region-part__title">Tərlan restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-295">
                                    <span class="region-part__title">Təzə bazar</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-296">
                                    <span class="region-part__title">Tibb Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-297">
                                    <span class="region-part__title">Tofiq Bəhrəmov stadionu</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-299">
                                    <span class="region-part__title">Turan klinikası</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-301">
                                    <span class="region-part__title">Türk səfirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-300">
                                    <span class="region-part__title">Türk-Amerikan tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">U</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-302">
                                    <span class="region-part__title">Ukrayna dairəsi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">V</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-304">
                                    <span class="region-part__title">Venera şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-305">
                                    <span class="region-part__title">Vergilər Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-306">
                                    <span class="region-part__title">Versal şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-307">
                                    <span class="region-part__title">Vita Med hospital</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">W</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-308">
                                    <span class="region-part__title">World Business Center</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">X</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-309">
                                    <span class="region-part__title">Xalça Muzeyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-310">
                                    <span class="region-part__title">Xan saray restoranı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-312">
                                    <span class="region-part__title">Xaqani Ticarət Mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-311">
                                    <span class="region-part__title">Xarici İşlər Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-313">
                                    <span class="region-part__title">Xəzər Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-314">
                                    <span class="region-part__title">Xəzinə şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">Y</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-315">
                                    <span class="region-part__title">Yaşam tibb mərkəzi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-316">
                                    <span class="region-part__title">Yasamal bazarı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-317">
                                    <span class="region-part__title">Yasamal parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-318">
                                    <span class="region-part__title">Yaşıl bazar</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-319">
                                    <span class="region-part__title">Yeganə şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-247">
                                    <span class="region-part__title">Yüksək Texnologiyalar Nazirliyi</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">Z</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-226">
                                    <span class="region-part__title">Zabitlər parkı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-320">
                                    <span class="region-part__title">Zərifə Əliyeva adına park</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-321">
                                    <span class="region-part__title">Zirvə şadlıq sarayı</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-322">
                                    <span class="region-part__title">Zoopark</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                              <div class="region">
                                 <p class="region-title">
                                    <span class="region-part__title">Т</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                                 <p class="region-part target-48">
                                    <span class="region-part__title">Тurizm və Menecment Universiteti</span>
                                    <svg class="icon icon-close">
                                       <use xlink:href="https://evelani.az/site/img/icons/icons.svg?v=2022-04-30 01:21:27#icon-close"></use>
                                    </svg>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="selected-regions">
                           <label for="">Seçilənlər:</label>
                           <div class="selected-regions__content">
                              <li class="lslide"></li>
                           </div>
                        </div>
                        <button class="link-button link-button--tertiary" type="reset" id="resetLocations">Sıfırla</button>
                        <button class="link-button link-button--primary" type="button" data-dismiss="modal">Təsdiqlə</button>
                     </div>
                  </div>
               </div>
            </div>
            <button class="link-button link-button--primary">Axtar</button>
         </div>
      </form>
   </div>
</section>