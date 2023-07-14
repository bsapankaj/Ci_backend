<?php

?>

<body>
      <!-- Aside Start-->
      <aside class="left-panel">
         <!-- brand -->
         <div class="logo">
            <a href="Dashboard" class="logo-expanded">
            <img src="<?= base_url() ?>/template/img/single-logo.png" alt="logo">
            <span class="nav-label">Admin</span>
            </a>
         </div>
         <!-- / brand -->
         <!-- Navbar Start -->
         <nav class="navigation">
            <ul class="list-unstyled">
               <li class="has-submenu"><a href="product"><i class="fa-solid fa-store icn"></i> <span class="nav-label">product</span></a>
               </li>
               <li class="has-submenu"><a href="category"><i class="fa fa-list-alt icn"></i> <span class="nav-label">category</span></a>
               </li>
            </ul>
         </nav>
      </aside>
      <!-- Aside Ends-->
      <!--Main Content Start -->
      <section class="content">
         <!-- Header -->
         <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- Right navbar -->
            <ul class="list-inline navbar-right top-menu top-right-menu">
               <!-- user login dropdown start-->
               <li class="dropdown text-center">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="username"><b>Welocme</b>, Admin </span> <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                     <li><a href="logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                  </ul>
               </li>
               <!-- user login dropdown end -->       
            </ul>
            <!-- End right navbar -->
         </header>
         <!-- Header Ends -->
         <!-- Page Content Start -->