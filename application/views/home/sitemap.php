<main class="sitemap">
   <div class="page-container container defaultpage-about">
      <div class="default-page-about">
         <h2><?= translate('site_map') ?></h2>
         <h5><a href="<?= base_url() ?>"><?= translate('home') ?></a></h5>
         <h3><?= translate('cities') ?></h3>
         <div class="row">
            <?php foreach ($cities as $value): ?>
            <div class="col-sm-3"><a href="#"><?= $value['city_name'] ?></a></div>
            <?php endforeach; ?>
         </div>
         <h3><?= translate('regions') ?></h3>
         <div class="row">
            <?php foreach ($regions as $value): ?>
            <div class="col-sm-3"><a href="#"><?= $value['region_name'] ?></a></div>
            <?php endforeach; ?>
         </div>
         <h3><?= translate('metros') ?></h3>
         <div class="row">
            <?php foreach ($metros as $value): ?>
            <div class="col-sm-3"><a href="#"><?= $value['metro_name'] ?></a></div>
            <?php endforeach; ?>
         </div>
         <h3><?= translate('districts') ?></h3>
         <div class="row">
            <?php foreach ($district as $value): ?>
            <div class="col-sm-3"><a href="#"><?= $value['district_name'] ?></a></div>
            <?php endforeach; ?>
         </div>
         <h3><?= translate('targets') ?></h3>
         <div class="row">
            <?php foreach ($targets as $value): ?>
            <div class="col-sm-3"><a href="#"><?= $value['target_name'] ?></a></div>
            <?php endforeach; ?>
         </div>
      </div>
   </div>
</main>