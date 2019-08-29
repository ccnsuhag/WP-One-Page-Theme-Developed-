<?php 

/**
 * Template Name:One page template
 */

?>
<?php get_header();?>

      
      <?php 

while(have_posts()){
  the_post();
  the_content();
}
?>

     <?php get_footer();?>

     <!-- $secondary_query=new WP_Query(array(
  'post_type' => array('page')
));

echo '<ul>';

while($secondary_query->have_posts()):
  $secondary_query->the_post();

  echo '<li>'. get_the_title() .'</li>';

  endwhile; 

  echo '</ul>'; -->
