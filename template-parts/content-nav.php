<nav class="side-menu">
        <ul>
          <li class="hidden active">
            <a class="page-scroll" href="#page-top"></a>
         </ul>

          <?php 
      
      wp_nav_menu(
        array(
          'menu' => 'right',
          'link_before' => '<span class="menu-title">',
          'link_after' => '</span><span class="dot"></span>'
        )
      );

      ?>

       </nav>
    
