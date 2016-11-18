<header class="navbar navbar-default navbar-fixed-top small-header" role="navigation">
  <?php
  wp_nav_menu(array(
    'menu'            => 'Top Menu',
    'container'       => '',
    'menu_class'      => 'navbar-right hidden-xs'
  ));?>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""></a>
    </div>
    <div class="collapse navbar-collapse">


      <?php
      $walker = new main_nav_walker;
      wp_nav_menu(array(
        'menu'            => 'Main Menu',
        'container'       => '',
        'menu_class'      => 'nav navbar-nav',
        'walker'          => $walker
      ));?>

      <?php
        wp_nav_menu(array(
          'menu'            => 'Top Menu',
          'container'       => '',
          'menu_class'      => 'nav navbar-nav visible-xs'
        ));?>

      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Academics</a></li>
        <li><a href="#about">Admission</a></li>
        <li><a href="#support">Facilities</a></li>
        <li><a href="#contact">Calendar</a></li>
        <li><a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Company Profile</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Board of Governors</a></li>
            <li><a href="#">CSR</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </li>
      </ul> -->

    </div><!--/.nav-collapse -->
  </div>
</header> <!-- /navbar navbar-default navbar-fixed-top -->