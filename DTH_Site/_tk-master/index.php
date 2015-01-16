<?php
/*
* @package _tk
*/
get_header(); ?>

<div class="container">

  <!--------------------ROW 1------------------------>
<div class="row">
<?php

//Argument array
$args = array(
  'tag' => 'sex'
);

//Query
$query1 = new WP_Query( $args ); ?>

<!--Loop-->
<!--------------------ROW 1, COLUMN 1------------------------>
<div class="col-lg-12 col-md-12">
  <?php
while ( $query1->have_posts() ) {
  $query1->the_post();
    get_template_part( 'content', get_post_format() );
}
?>
</div><!--end column-->
</div><!--end row-->

<!--------------------RESTORE DATA------------------------>
<?php wp_reset_postdata();?>
<!--------------------RESTORE DATA------------------------>


<!--------------------ROW 2------------------------>

<div class="row">

<?php

/*~~Argument Array 2~~*/
$args2 = array(
  'cat' => 5,
  'cat' => -3
  );


/*~~Query 2 (without global var)~~*/
$query2 = new WP_Query( $args2 );?>

<!--Loop 2-->
<!--------------------ROW 2, COLUMN 1------------------------>
<div class="col-lg-6 col-md-6">
  <?php
while ( $query2->have_posts() ) {
  $query2->the_post();
  get_template_part( 'content', get_post_format() );
}

// Restore original Post Data
wp_reset_postdata();

 ?>
</div><!--end column-->

<?php
/*THIRD SET OF POSTS*/

/*~~Argument Array 3~~*/
$args2 = array(
  'cat' => 5,
  'cat' => -3
);


/*~~Query 2 (without global var)~~*/
$query2 = new WP_Query( $args2 );?>

<!--Loop 3-->
<!--------------------ROW 2, COLUMN 2------------------------>
<div class="col-lg-6 col-md-6">
  <?php
  while ( $query2->have_posts() ) {
    $query2->the_post();
    get_template_part( 'content', get_post_format() );
  }

  // Restore original Post Data
  wp_reset_postdata();

  ?>
</div><!--end column-->


</div><!--end row-->



<!--------------------ROW 3------------------------>
<div class="row">
  <!--------------------ROW 3, COLUMN 1------------------------>
  <div class="col-lg-6 col-md-6">
    <?php
    while ( $query2->have_posts() ) {
      $query2->the_post();
      get_template_part( 'content', get_post_format() );
    }

    // Restore original Post Data
    wp_reset_postdata();

    ?>
  </div><!--end column-->
  <!--------------------ROW 3, COLUMN 2------------------------>
  <div class="col-lg-3 col-md-3">
    <?php
    while ( $query2->have_posts() ) {
      $query2->the_post();
      get_template_part( 'content', get_post_format() );
    }

    // Restore original Post Data
    wp_reset_postdata();

    ?>
  </div><!--end column-->
  <!--------------------ROW 3, COLUMN 3------------------------>
  <div class="col-lg-3 col-md-3">
    <?php
    while ( $query2->have_posts() ) {
      $query2->the_post();
      get_template_part( 'content', get_post_format() );
    }

    // Restore original Post Data
    wp_reset_postdata();

    ?>
  </div><!--end column-->

</div><!--end row-->


<!--------------------ROW 4------------------------>
<div class="row">
  <!--------------------ROW 4, COLUMN 1------------------------>
  <div class="col-lg-3 col-md-3">
    <?php
    while ( $query2->have_posts() ) {
      $query2->the_post();
      get_template_part( 'content', get_post_format() );
    }

    // Restore original Post Data
    wp_reset_postdata();

    ?>
  </div><!--end column-->
  <!--------------------ROW 4, COLUMN 2------------------------>
  <div class="col-lg-3 col-md-3">
    <?php
    while ( $query2->have_posts() ) {
      $query2->the_post();
      get_template_part( 'content', get_post_format() );
    }

    // Restore original Post Data
    wp_reset_postdata();

    ?>
  </div><!--end column-->
  <!--------------------ROW 4, COLUMN 3------------------------>
  <div class="col-lg-6 col-md-6">
    <?php
    while ( $query2->have_posts() ) {
      $query2->the_post();
      get_template_part( 'content', get_post_format() );
    }

    // Restore original Post Data
    wp_reset_postdata();

    ?>
  </div><!--end column-->


</div><!--end row-->




</div><!--END CONTAINER-->


<?php get_sidebar(); ?>
<?php get_footer(); ?>



<!--Restore original Post Data
* NB: Because we are using new WP_Query we aren't stomping on the
* original $wp_query and it does not need to be reset with
* wp_reset_query(). We just need to set the post data back up with
* wp_reset_postdata().
*/
-->
