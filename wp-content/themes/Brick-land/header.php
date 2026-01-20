<!DOCTYPE html>
<html class="no-js" <?php echo language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body>


  <!-- Preloader Start -->
  <!-- <div class="preloader">
    <div class="loader">
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="brick"></div>
      <div class="loading">Loading..</div>
    </div>
  </div> -->
  <!-- Preloader End -->

  <!-- Back to Top Button -->
  <a id="back_to_top"><i class="fa-solid fa-arrow-up"></i></a>
  <!-- Back to Top Button -->


  <?php echo get_template_part('template/header/header-1');
