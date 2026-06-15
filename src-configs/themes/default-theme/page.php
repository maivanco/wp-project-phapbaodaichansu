<?php
get_header(); ?>

<?php 
while(have_posts()):
  the_post();
  while (have_rows('homestayplus_sections')): the_row();
      load_partial('sections/' . get_row_layout());
	endwhile;
 
endwhile;
?>

 
<?php
get_footer();
