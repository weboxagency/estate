<main>
<!--    <section class="announcement-agency agency">
<div class="page-container container">
<div class="agency-body">
<div class="agency-body__content">
<img src="https://Estate.az/uploads/agency/106/c3e7741ce290f0fc66362ced63faa938.jpeg?v=1627300451" alt="Avalon daşınmaz əmlak agentliyi">
<div class="agency-description agency-main">
<h1>Avalon daşınmaz əmlak agentliyi</h1>
<p></p><p>"AVALON REC" Azərbaycan və Türkiyə əmlak bazarlarında daşınmaz əmlakın alqı, satqı, idarə olunması, kirayə və konsaltinq xidmətləri sahəsində ixtisaslaşıb, eyni zamanda da bizim həm Azərbaycanın paytaxtı Bakı şəhərində, həm də Türkiyənin Antalya şəhərində filiallarımız fəaliyyət göstərir.</p><p></p>
<div class="agency-overview">
<p>
<svg class="icon icon-yeni-tikili">
<use xlink:href="https://Estate.az/site/img/icons/icons.svg?v=2022-06-04 13:39:28#icon-yeni-tikili"></use>
 </svg>
<strong>365</strong> təklif
</p>
<p>
<svg class="icon icon-eye">
<use xlink:href="https://Estate.az/site/img/icons/icons.svg?v=2022-06-04 13:39:28#icon-eye"></use>
</svg>
<strong>351</strong> baxış
</p>
</div>
</div>
<div class="agency-contact agency-main">
<div class="agency-contact__item agency-location">
<div class="agency-contact__icon">
<svg class="icon icon-pin">
<use xlink:href="https://Estate.az/site/img/icons/icons.svg?v=2022-06-04 13:39:28#icon-pin"></use>
</svg>
</div>
<p>
<span>Yasamal rayonu, Şəfaet Mehdiyev 96</span>
</p>
</div>
<div class="agency-contact__item">
<div class="agency-contact__icon">
<svg class="icon icon-phone">
<use xlink:href="https://Estate.az/site/img/icons/icons.svg?v=2022-06-04 13:39:28#icon-phone"></use>
</svg>
</div>
<p>
<a href="tel:(050) 331-03-00">
<span>(050) 331-03-00</span>
</a>
<a href="tel:(055) 331-03-00">
<span>(055) 331-03-00</span>
</a>
<a href="tel:(050) 277-50-10">
<span>(050) 277-50-10</span>
</a>
</p>
</div>
<div class="agency-contact__item">
<div class="agency-contact__icon">
<svg class="icon icon-mail">
<use xlink:href="https://Estate.az/site/img/icons/icons.svg?v=2022-06-04 13:39:28#icon-mail"></use>
</svg>
</div>
<p>
<a href="mailto:avalon@avalon.az">
<span>avalon@avalon.az</span>
</a>
</p>
</div>
</div>
</div>
</div>
</div>
</section> -->
   <div class="announcement-main announcement-section">
      <section class="page-container container pb-0">
         <div class="announcement-inner">
            <div class="announcement-inner__top">
               <div class="announcement-inner__left">
                  <h1><?= $ads_detail['ads_title'] ?></h1>
                  <div class="announcement-inner__filter announcement-filter filter-tertiary">
                     <div class="link-buttons">
                        <a class="link-button link-button--tertiary" id="announcement-gallery-normal"><?= translate('photos') ?></a>
                        <a class="link-button" id="announcement-map"><?= translate('map') ?></a>
                     </div>
                  </div>
                  <div class="announcement-body__item announcement-gallery announcement-gallery-normal">
                     <ul class=" gallery-porfolio gallery-porfolio-normal gallery list-unstyled cS-hidden">
                        <?php foreach (ads_photos($ads_detail['photos']) as $key => $shekil) { ?>
                        <li data-thumb="<?= $shekil['avatar'] ?>" alt="<?= $ads_detail['ads_title'] ?>" data-src="<?= $shekil['path'] ?>">
                           <img id="galleryfull" data-src="<?= $shekil['path'] ?>" alt="<?= $ads_detail['ads_title'] ?>" />
                        </li>
                        <?php } ?>
                     </ul>
                  </div>
                  <div class="announcement-body__item announcement-map map" id="map"></div>
                  <div class="announcement-inner__right announcement-section-respons">
                     <div class="announcement-allprice">
                        <h2 class="announcement-price--main">
                           <span id="pricemain"><?= $ads_detail['price'] ?></span>
                           <span class="color">AZN</span>
                        </h2>
                        <h2 class="announcement-price">
                           <?php if (!empty($ads_detail['area'])) { ?>
                           <span id="announcementprice"><?= $ads_detail['average_price'] ?></span>
                           <span class="color">AZN/m²</span>
                           <?php }else{ ?>
                           <span id="announcementprice"><?= $ads_detail['average_price'] ?></span>
                           <span class="color">AZN/sot</span>
                           <?php } ?>
                        </h2>
                     </div>
                     <p class="d-md-none d-lg-flex">
                        MT Əmlak
                        <span>Vasitəçi</span>
                     </p>
                     <div class="link-button link-button--primary showPhonebuttonlink " id="announcement_phone">
                        <div class="showPhonebutton">
                           <div class="link-button__icon">
                              <svg class="icon icon-phone-material">
                                 <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-phone-material"></use>
                              </svg>
                           </div>
                           <span class="announcement-phone__label">Nömrəni göstər</span>
                           <?php if ($ads_detail['has_whatsapp']==1) {  ?>
                           <a target="_blank" href="https://api.whatsapp.com/send?phone=994<?=$ads_detail['mobile'] ?>">
                              <div class="state p-on">
                                 <svg class="icon icon-whatsapp">
                                    <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-whatsapp"></use>
                                 </svg>
                              </div>
                           </a>
                           <?php } ?>
                           <span class="announcement-phone" style="display: none;">
                           <a href="tel:<?= formatPhoneNumber("",'0'.$ads_detail['mobile'])['national'] ?>" class="announcement-phone--href"><?= formatPhoneNumber("",'0'.$ads_detail['mobile'])['national'] ?></a>
                           </span>
                        </div>
                        <?php if ($ads_detail['has_whatsapp']==1) {  ?>
                        <span class="announcement-phone whatsapptext">Satıcıya elanı Estate.az saytında tapdığınızı bildirin</span>
                        <?php } ?>
                     </div>
                     <div class="announcement-infos">
                        <div class="announcement-infos--item">
                           <p>Elanın nömrəsi</p>
                           <a href="#">#<?= $ads_detail['ads_number'] ?></a>
                        </div>
                        <div class="announcement-infos--item">
                           <p>Baxış sayı</p>
                           <a href="#"><span><?= $ads_detail['show_count'] ?></span> nəfər</a>
                        </div>
                        <div class="announcement-infos--item">
                           <p>Yeniləndi</p>
                           <a href="#"><?= date_aze("j F Y",$ads_detail['created_at']); ?></a>
                        </div>
                     </div>
                     <div class="announcement-edit">
                        <div class="announcement-edit--item">
                           <a href="#" data-toggle="modal" data-target="#email-complaint">
                              <svg class="icon icon-flag">
                                 <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-flag"></use>
                              </svg>
                              <p class="d-none d-md-block">Elanı şikayət et</p>
                              <p class="d-md-none">Elanı şikayət et</p>
                           </a>
                        </div>
                        <div class="announcement-edit--item">
                           <a href="#" data-toggle="modal" data-target="#edit-announcement">
                              <svg class="icon icon-edit-solid">
                                 <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-edit-solid"></use>
                              </svg>
                              <p class="d-none d-md-block">Elana düzəliş et</p>
                              <p class="d-md-none">Elana düzəliş et</p>
                           </a>
                        </div>
                        <div class="announcement-edit--item">
                           <a href="#" data-toggle="modal" data-target="#delete-announcement">
                              <svg class="icon icon-close">
                                 <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                              </svg>
                              <p class="d-none d-md-block">Elanı sil</p>
                              <p class="d-md-none">Elanı sil</p>
                           </a>
                        </div>
                        <div class="announcement-edit--item">
                           <div class="favorites">
                              <form action="<?= base_url() ?>wishlist" method="post" x-edit-form="<?= $ads_detail['id'] ?>" x-target-with-data="afterWishlist">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                 <input type="hidden" name="id" value="<?= $ads_detail['id'] ?>">
                                 <button type="submit">
                                     <?php if (!isset($_SESSION['wish_sess'])) { ?>

                                       <svg class="icon icon-heart-outline">
                                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart-outline"></use>
                                       </svg>

                                    <?php }   else{ ?>
                                       <?php 
                                       $heart = (!empty(session_wishlist($_SESSION['wish_sess'],$ads_detail['id'])) AND session_wishlist($_SESSION['wish_sess'],$ads_detail['id'])['data_id']===$ads_detail['id']) ? '' : '-outline';
                                        ?>
                                       <svg class="icon icon-heart<?=$heart; ?>">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart<?=$heart; ?>"></use>
                                    </svg>
                                    <?php } ?>
                                    <p class="d-none d-md-block" x-wishlist-text>Seçilmişlərə əlavə et</p>
                                    <p class="d-md-none" x-wishlist-text-m>Seçilmişlərə əlavə et</p>
                                 </button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="announcement-details announcement-links">
                     <a href="#" data-toggle="modal" data-target="#pull-forward-announcement">
                        <svg class="icon icon-circle-up">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-circle-up"></use>
                        </svg>
                        İrəli çək
                     </a>
                     <a href="#" data-toggle="modal" data-target="#make-announcement-vip">
                        <svg class="icon icon-vipp">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-vipp"></use>
                        </svg>
                        VIP Et
                     </a>
                     <a href="#" data-toggle="modal" data-target="#make-announcement-premium">
                        <svg class="icon icon-vip">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-vip"></use>
                        </svg>
                        Premium et
                     </a>
                  </div>
                  <div class="announcement-details announcement-address">
                     <span>Ünvan</span>
                     <p><?= $ads_detail['address'] ?></p>
                     <a>
                        <svg class="icon icon-pin">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
                        </svg>
                        <span class="show-map"> <?= translate('show_map') ?></span>
                        <span class="notshow-map" style="display: none"><?= translate('hide_map') ?></span>
                     </a>
                  </div>
                  <div class="announcement-details announcement-info announcement-details--all">
                     <div class="announcement-info--item">
                        <span>Əmlakın növü</span>
                        <div class="announcement-info--right">
                           <div class="announcement-info__top">
                              <p class="announcement-info__item"><?= estateTypeName($ads_detail['property_type'])['estate_type_name'] ?></p>
                           </div>
                        </div>
                     </div>
                     <div class="announcement-info--item">
                        <span>Çıxarış</span>
                        <div class="announcement-info--right">
                           <div class="announcement-info__top">
                              <p class="announcement-info__item"><?= ($ads_detail['deed']==1) ? 'Var' : 'Yoxdur' ?></p>
                           </div>
                        </div>
                     </div>
                     <?php if ($ads_detail['floor']!=0) { ?>
                     <div class="announcement-info--item">
                        <span>Mərtəbə</span>
                        <div class="announcement-info--right">
                           <div class="announcement-info__top">
                              <p class="announcement-info__item"><?= $ads_detail['floor'] ?> / <?= $ads_detail['max_floor'] ?> </p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                     <div class="announcement-info--item">
                        <span>Sahə</span>
                        <div class="announcement-info--right">
                           <div class="announcement-info__top">
                              <p class="announcement-info__item"><?= (!empty($ads_detail['area'])) ? $ads_detail['area'].' m²' : $ads_detail['land_area'].' sot'; ?> </p>
                           </div>
                        </div>
                     </div>
                     <div class="announcement-info--item">
                        <span>Təmir</span>
                        <div class="announcement-info--right">
                           <div class="announcement-info__top">
                              <p class="announcement-info__item"><?= ($ads_detail['repair']==1) ? 'Təmirli' : 'Təmirsiz' ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="announcement-details announcement-info">
                     <span><?= translate('short_information') ?></span>
                     <div class="announcement-info--right">
                        <div class="announcement-info__top">
                           <p class="announcement-info__paragraph"><?= $ads_detail['property_description']; ?></p>
                           <a class="arrow-button">
                           <i class="fas fa-chevron-down"></i>
                           <?= translate('show_all_information') ?>
                           </a>
                        </div>
                     </div>
                  </div>
                <!--   <div class="announcement-details announcement-otherlinks">
                     <ul class="locations">
                        <li>
                           <a target="_blank" href="https://Estate.az/az/axtar/satis/elanlar/neftciler">Neftçilər m.</a>
                        </li>
                        <li>
                           <a target="_blank" href="https://Estate.az/az/axtar/satis/elanlar/nizami">Nizami r.</a>
                        </li>
                     </ul>
                  </div> -->
                  <div class="announcement-details announcement-info align-items-center justify-content-between">
                     <span class="mb-0">Paylaş</span>
                     <div class="announcement-info--right">
                        <div class="announcement-info__top">
                           <div class="links">
                              <a href="https://www.facebook.com/sharer.php?u=https://Estate.az/az/elan/satis-kohne-tikili-3-otaqli-baki-nizami-r-neftciler-m-1528812" target="_blank" class="links-social links-facebook">
                                 <svg class="icon icon-facebook">
                                    <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-facebook"></use>
                                 </svg>
                              </a>
                              <a href="https://twitter.com/share?text=Sat%C4%B1l%C4%B1r%2C+k%C3%B6hn%C9%99+tikili%2C+3+otaql%C4%B1%2C+41+m%C2%B2%2C+Neft%C3%A7il%C9%99r+m.&url=https://Estate.az/az/elan/satis-kohne-tikili-3-otaqli-baki-nizami-r-neftciler-m-1528812" target="_blank" class="links-social links-twitter">
                                 <svg class="icon icon-twitter">
                                    <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-twitter"></use>
                                 </svg>
                              </a>
                              <a href="https://www.linkedin.com/company/Estate-az/" class="links-social links-linkedin">
                                 <svg class="icon icon-linkedin">
                                    <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-linkedin"></use>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="announcement-inner__right">
                  <div class="announcement-allprice">
                     <h2 class="announcement-price--main <?php if($ads_detail['announcement_type']!=1){ ?> amouttag <?php } ?>" <?php if($ads_detail['announcement_type']!=1){ ?> style="height: 72px;" <?php } ?>>
                        <span id="pricetitle-first">
                        <?= $ads_detail['price'] ?>
                        </span>
                        <span class="color">
                           <?php if($ads_detail['announcement_type']==1){ ?>
                              AZN
                           <?php }elseif($ads_detail['announcement_type']==2){ ?>
                              AZN/ay
                           <?php }else{ ?>
                              AZN/gün
                           <?php } ?>
                        </span>
                     </h2>
                     <?php if($ads_detail['announcement_type']==1): ?>
                     <h2 class="announcement-price">
                        <?php if (!empty($ads_detail['area']) ) { ?>
                           <span id="pricetitle" class="price-main pricetitle pricemain-title num-broken"><?= $ads_detail['average_price'] ?></span>
                           <span class="price-cost">AZN/<?= ($ads_detail['property_type']==8) ? 'sot' : 'm²' ?></span>
                           <?php }else{ ?>
                           <span id="pricetitle" class="price-main pricetitle pricemain-title num-broken"><?= $ads_detail['average_price'] ?></span>
                           <span class="price-cost">AZN/sot</span>
                           <?php } ?>
                        
                     </h2>
                  <?php endif; ?>
                  </div>

                  <p class="d-md-none d-lg-flex">
                     <?= str_replace('', ',', $ads_detail['name']); ?>
                     <?php if ($ads_detail['user_type']==0) { ?>
                     <span>Vasitəçi</span>
                     <?php }else{  ?>
                     <span>Əmlak sahibi</span>
                     <?php } ?>
                  </p>

                  <div class="link-button link-button--primary showPhonebuttonlink" id="announcement_phone">
                     <div class="showPhonebutton justify-content-center">
                        <div class="link-button__icon">
                           <svg class="icon icon-phone-material">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-phone-material"></use>
                           </svg>
                        </div>
                        <span class="announcement-phone__label mr-auto"><?= translate('show_number') ?></span>
                        <?php if ($ads_detail['has_whatsapp']==1) {  ?>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=994<?=$ads_detail['mobile'] ?>" class="mr-1">
                           <div class="state p-on">
                              <svg class="icon icon-whatsapp">
                                 <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-whatsapp"></use>
                              </svg>
                           </div>
                        </a>
                        <?php } ?>
                        <span class="announcement-phone" style="display: none;">
                        <a href="tel:<?= formatPhoneNumber("",'0'.$ads_detail['mobile'])['national'] ?>" class="announcement-phone--href"><?= formatPhoneNumber("",'0'.$ads_detail['mobile'])['national'] ?></a>
                        </span>
                     </div>
                     <span class="announcement-phone whatsapptext text-center">Satıcıya elanı Estate.az saytında tapdığınızı bildirin</span>
                  </div>
                  <div class="announcement-infos">
                     <div class="announcement-infos--item">
                        <p>Elanın nömrəsi</p>
                        <a href="#">#<?= $ads_detail['ads_number'] ?></a>
                     </div>
                     <div class="announcement-infos--item">
                        <p>Baxış sayı</p>
                        <a href="#"><span><?= $ads_detail['show_count'] ?></span> nəfər</a>
                     </div>
                     <div class="announcement-infos--item">
                        <p>Yeniləndi</p>
                        <a href="#"><?= date_aze("j F Y",$ads_detail['created_at']); ?></a>
                     </div>
                  </div>
                  <div class="announcement-edit">
                     <div class="announcement-edit--item">
                        <a href="#" data-toggle="modal" data-target="#email-complaint">
                           <svg class="icon icon-flag">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?#icon-flag"></use>
                           </svg>
                           <p>Elanı şikayət et</p>
                        </a>
                     </div>
                     <div class="announcement-edit--item">
                        <a href="#" data-toggle="modal" data-target="#edit-announcement">
                           <svg class="icon icon-edit-solid">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?#icon-edit-solid"></use>
                           </svg>
                           <p>Elana düzəliş et</p>
                        </a>
                     </div>
                     <div class="announcement-edit--item">
                        <a href="#" data-toggle="modal" data-target="#delete-announcement">
                           <svg class="icon icon-close">
                              <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-close"></use>
                           </svg>
                           <p>Elanı sil</p>
                        </a>
                     </div>
                     <div class="announcement-edit--item">
                        <div class="favorites">
                           <form action="<?= base_url() ?>wishlist" method="post" x-edit-form="<?= $ads_detail['id'] ?>" x-target-with-data="afterWishlist">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                              <input type="hidden" name="id" value="<?=$ads_detail['id'] ?>">
                              <button type="submit">
                                <?php if (!isset($_SESSION['wish_sess'])) { ?>

                                       <svg class="icon icon-heart-outline">
                                          <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart-outline"></use>
                                       </svg>
                                       <p x-wishlist-text>Seçilmişlərə əlavə et</p>
                                    <?php }   else{ ?>
                                       <?php 
                                       $heart = (!empty(session_wishlist($_SESSION['wish_sess'],$ads_detail['id'])) AND session_wishlist($_SESSION['wish_sess'],$ads_detail['id'])['data_id']===$ads_detail['id']) ? '' : '-outline';
                                        ?>
                                       <svg class="icon icon-heart<?=$heart; ?>">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart<?=$heart; ?>"></use>
                                    </svg>
                                     <p x-wishlist-text>Seçilmişlərdən çıxart</p>
                                    <?php } ?>
                                 
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php if (!empty($benzer_elanlar)): ?>
            <div class="announcement-inner__bottom pb-1">
               <div class="announcement-group__header mb-1">
                  <h3 class="announcement-title"><?= translate('similar_ads') ?></h3>
               </div>
               <div class="announcement-group__body">
                  <?php foreach ($benzer_elanlar as $value): ?>
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
                  <?php endforeach; ?>
               </div>
            </div>
         <?php endif; ?>
         </div>
      </section>
   </div>
    <?php if (!empty($benzer_elanlar)): ?>
   <?php echo insertPagination($url, $sayfa, $toplam_sayfa,true); ?>
   <?php endif; ?>
   <div class="modal modal--small" id="email-complaint">
      <input type="hidden" name="id" value="<?= $ads_detail['id'] ?>">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">Elanı şikayət et</h6>
               <div class="modal-close" data-dismiss="modal">
                  <svg class="icon icon-close">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                  </svg>
               </div>
            </div>
            <div class="modal-body">
               <form action="<?= base_url() ?>complain" method="post" x-edit-form x-target="afterComplain">
                  <input type="hidden" name="id" value="<?= $ads_detail['ads_number'] ?>">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <label for="category">Kateqoriya</label>
                        <select class="ui fluid dropdown" name="category">
                           <option value="2">Saxta elan</option>
                           <option value="3">Əmlak artıq satılıb</option>
                           <option value="4">Məlumat düzgün qeyd edilməyib</option>
                           <option value="5">Düzgün olmayan şəkil</option>
                           <option value="6">Təkrar elan</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large form-item--textarea">
                        <label for="extra_info">Əlavə məlumat</label>
                        <div class="form-item__labeled">
                           <textarea style="resize:none" rows="5" name="extra_info"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <button class="link-button link-button--primary">Şikayəti göndər</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="modal modal--small" id="edit-announcement">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">Elana düzəliş et</h6>
               <div class="modal-close" data-dismiss="modal">
                  <svg class="icon icon-close">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-close"></use>
                  </svg>
               </div>
            </div>
            <div class="modal-body">
               <form action="https://Estate.az/az/announcement/permit" method="post" x-edit-form x-target-with-data="afterPermit">
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <label for="pin">PIN şifrəni daxil edin</label>
                        <input type="password" name="pin" placeholder="∗∗∗∗∗∗" class="form-item__element">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <button class="link-button link-button--primary">Düzəliş et</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div class="modal modal--small" id="delete-announcement">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">Elanı sil</h6>
               <div class="modal-close" data-dismiss="modal">
                  <svg class="icon icon-close">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-close"></use>
                  </svg>
               </div>
            </div>
            <div class="modal-body">
               <form action="https://Estate.az/az/announcement/delete" method="post" x-edit-form x-target="afterDelete">
                  <input type="hidden" name="site" value="1">
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <label for="pin">PIN şifrəni daxil edin</label>
                        <input type="hidden" name="id" value="32954">
                        <input type="password" name="pin" placeholder="∗∗∗∗∗∗" class="form-item__element">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <button class="link-button link-button--primary">Sil</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="modal modal--small modal-actions" id="pull-forward-announcement">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">
                  <svg class="icon icon-circle-up">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-circle-up"></use>
                  </svg>
                  Elanı irəli çək
               </h6>
               <div class="modal-close" data-dismiss="modal">
                  <svg class="icon icon-close">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-close"></use>
                  </svg>
               </div>
            </div>
            <div class="modal-body">
               <p>Elanınız yeni elanlar bölməsində və axtarış nəticələrində irəli çəkiləcəkdir</p>
               <form action="https://Estate.az/az/announcement/pull-forward" method="post" x-edit-form x-target-with-data="afterPayment">
                  <input type="hidden" name="id" value="32954">
                  <div class="form-row__title">
                     <h6 for="type">Ödəniş üsulu</h6>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="type" value="online" checked>
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>VISA/Master Card</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="type" value="machine">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>Pulpal (terminallarda ödəniş)</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row__title">
                     <h6>Müddət</h6>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input checked type="radio" name="period" value="">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>2 AZN/1 dəfə</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <button class="link-button link-button--primary">İrəli çək</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="modal modal--small modal-actions" id="make-announcement-vip">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">
                  <svg class="icon icon-vipp">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-vipp"></use>
                  </svg>
                  Elanı <strong>VIP</strong> Et
               </h6>
               <div class="modal-close" data-dismiss="modal">
                  <svg class="icon icon-close">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-close"></use>
                  </svg>
               </div>
            </div>
            <div class="modal-body">
               <p>Elanınız saytda ana səhifədə və axtarış nəticələrində VIP bölməsində göstəriləcəkdir</p>
               <form action="https://Estate.az/az/announcement/make-vip" method="post" x-edit-form x-target-with-data="afterPayment">
                  <input type="hidden" name="id" value="32954">
                  <div class="form-row__title">
                     <h6 for="type">Ödəniş üsulu</h6>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="type" value="online" checked>
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>VISA/Master Card</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="type" value="machine">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>Pulpal (terminallarda ödəniş)</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row__title">
                     <h6>Müddət</h6>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input checked type="radio" name="period" value="5" x-price="10">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>5 Gün / 10 AZN</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="period" value="15" x-price="20">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>15 Gün / 20 AZN</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="period" value="30" x-price="30">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>30 Gün / 30 AZN</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <button class="link-button link-button--primary">VIP Et</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="modal modal--small modal-actions" id="make-announcement-premium">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">
                  <svg class="icon icon-vip">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-vip"></use>
                  </svg>
                  Elanı <strong>Premium</strong> Et
               </h6>
               <div class="modal-close" data-dismiss="modal">
                  <svg class="icon icon-close">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-22 05:08:38#icon-close"></use>
                  </svg>
               </div>
            </div>
            <div class="modal-body">
               <p>Elanınız saytda ana səhifədə xüsusi bölmədə yerləşəcəkdir</p>
               <form action="https://Estate.az/az/announcement/make-premium" method="post" x-edit-form x-target-with-data="afterPayment">
                  <input type="hidden" name="id" value="32954">
                  <div class="form-row__title">
                     <h6 for="type">Ödəniş üsulu</h6>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="type" value="online" checked>
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>VISA/Master Card</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="type" value="machine">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>Pulpal (terminallarda ödəniş)</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row__title">
                     <h6>Müddət</h6>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="period" value="1" x-price="5">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>1 Gün / 5 AZN</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input checked type="radio" name="period" value="5" x-price="20">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>5 Gün / 20 AZN</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="period" value="15" x-price="40">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>15 Gün / 40 AZN</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-item form-item--large">
                        <div class="pretty p-icon p-round p-jelly">
                           <input type="radio" name="period" value="30" x-price="60">
                           <div class="state p-primary">
                              <i class="icon fa fa-check"></i>
                              <label></label>
                              <span>30 Gün / 60 AZN</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-item form-item--large">
                        <button class="link-button link-button--primary">Premium et</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</main>
