<!DOCTYPE html>
<html lang="az">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('uploads/frontend/images/' . $cms_setting['fav_icon']); ?>">
    <meta name="yandex-verification" content="50ff69c45bae97d7" />
    <meta name="msvalidate.01" content="5F0AD8E00E5343818DEB4475F2DA3D0C" />
    <title><?php echo $page_data['page_title'] . " - " . $cms_setting['application_title']; ?></title>
    <meta name="description" content="En yeni ev elanlari, 360 evler, kiraye ofisler, yeni tikililer, biznes merkezleri, yasayis kompleksleri, insaat sirketleri, ev algi satqisi, torpaq, obyekt.">
    <meta property="og:title" content="Estate.az - En yeni dasinmaz emlak elanlari bir unvanda">
    <meta property="og:description" content="En yeni ev elanlari, 360 evler, kiraye ofisler, yeni tikililer, biznes merkezleri, yasayis kompleksleri, insaat sirketleri, ev algi satqisi, torpaq, obyekt.">
    <meta property="og:url" content="az">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Estate.az">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url('uploads/frontend/images/' . $cms_setting['logo']); ?>">
    <meta name="theme-color" content="#000">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/fonts.googleapis.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/reset.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/fonts.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/lightgallery.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/metisMenu.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/right-slider.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/apeal.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/all.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/wave.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/checkbox.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/lightslider.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/app.min.php') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/semantic.min.css') ?>">
    <style type="text/css">
      @media only screen and (max-width: 1500px) {
          .lotriver-top-banner {
              display: none;
          }
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">

    	var base_url = "<?php echo base_url(); ?>";
    	var csrfData = <?php echo json_encode(csrf_jquery_token()); ?>;
    	$(function($) {
    		$.ajaxSetup({
    			data: csrfData
    		});
    	});
    </script>
  </head>
  <div class="lotriver-top-banner" id="js-lotriver-top-banner">
      <div style="visibility:hidden;height:0px;left:-1000px;position:absolute;">
        <iframe id="ar_container_1" width="1" height="1" marginwidth="0" marginheight="0" scrolling="no" frameborder="0"></iframe>
      </div>
    <div id="ad_ph_1" style="display: block; width: 100%; height: 120px;">
      <div style="display:block;width:100%;height:100%;margin:0 auto;line-height:100%;text-align:center;">
        <a href="https://ad.adriver.ru/cgi-bin/click.cgi?sid=220686&amp;ad=724514&amp;bid=7391282&amp;bt=43&amp;bn=1&amp;pz=0&amp;nid=0&amp;ref=<?= base_url() ?>" onclick="ar_clickCoord.calc(event, this, document.getElementById('ad_ph_1')); return ar_sendPix('');" target="_blank"><img id="ar_cr_1460892" src="https://servers2.adriver.ru/images/0007391/0007391282/0/yasamdesc.png" border="0" alt="AdRiver" style="display:inline;height:100%;max-width:1903px">
        </a>
      </div>
    </div>
  </div>
  <body class="scroll" id="body">
    <div id="loading" class="loading  no-blur" style="display: none;">
      <svg class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
    </div>
		<?php $this->load->view('home/layout/header'); ?>
		<?php echo $main_contents; ?>
    <?php if(@end($this->uri->segment_array())=='add_listing'){ ?>
		<?php $this->load->view('home/layout/footer2'); ?>
  <?php }else{ ?>
    <?php $this->load->view('home/layout/footer'); ?>
  <?php } ?>
	</body>
</html>





