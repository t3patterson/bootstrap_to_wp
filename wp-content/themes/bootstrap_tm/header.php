<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <!-- <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form> -->
      
      <style>
        .sub-menu {
          display: block;

        }
        .sub-menu li a {
            color: rgba(119, 119, 119, 1);
            font-size: 14px;
            line-height: 33px;
            padding-bottom: 5px;
            padding-left: 25px;
            padding-right: 15px;
            padding-top: 5px;
            text-align: left;
            text-decoration: none;
          }

          .sub-menu li:hover a {
            color: rgba(255,255,255,1) ;
          }

      @media screen and (min-width: 768px) {
        
        .sub-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            min-width: 160px;
            padding: 5px 0;
            font-size: 14px;
            text-align: left;
            list-style: none;
            background-color: rgba(34, 34, 34, 1);
            border: 1px solid rgba(0,0,0,.15);
            -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
            box-shadow: 0 6px 12px rgba(0,0,0,.175);
          }


          .menu-item:hover .sub-menu {
            display: block;
          }

          .sub-menu:hover{
            display: block;
          }

        
      }

      </style>

      <?php 
        $args=[
          'menu' => 'header-menu',
          'menu_class' => 'nav navbar-nav',
          'container' => 'false'
        ];

        wp_nav_menu($args)
      ?>
    </div><!--/.navbar-collapse -->
  </div>
</nav>