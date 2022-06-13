<main class="main">
   <section class="map">
   <div class="main-header__content map-content">
      <form class="search">
         <div class="searchmap-input">
            <a href="<?= base_url() ?>elanlar/new">
               <div class="link-button link-button--secondary">Bütün yeni elanlar</div>
            </a>
            <a href="<?= base_url() ?>elanlar/new?type=sale">
               <div class="link-button link-button--secondary">Satış</div>
            </a>
            <a href="<?= base_url() ?>elanlar/new?type=monthly_rent">
               <div class="link-button link-button--secondary">Kirayə</div>
            </a>
            <a href="<?= base_url() ?>elanlar/new?type=daily_rent">
               <div class="link-button link-button--secondary">Kirayə günlük</div>
            </a>
         </div>
      </form>
   </div>
</section>
<section class="main-body page-container container">
   <div class="announcement-group">
   <div class="announcement-group__header">
      <h5 class="announcement-title"><?= translate('new_ads') ?> <?= (isset($title)) ? $title : '' ?></h5>
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