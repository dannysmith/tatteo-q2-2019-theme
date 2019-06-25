<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php if (have_posts()) : ?>

      <header class="page-header archive">
        <?php $queried_object = get_queried_object(); ?>
        <h1 class="page-title archive"><?php echo $queried_object->name ?></h1>
        <?php
        $archive_image = get_template_directory_uri() . '/img/2.png';
        if ($queried_object->name === 'artist') {
          $archive_image = get_template_directory_uri() . '/img/3.png';
          echo '<img class="archive-hero-image" src="' . $archive_image . '">';
        } elseif ($queried_object->name === 'studio') {
          $archive_image = get_template_directory_uri() . '/img/4.png';;
          echo '<img class="archive-hero-image" src="' . $archive_image . '">';
        } elseif ($queried_object->name === 'guest_spot') {
          $archive_image = get_template_directory_uri() . '/img/5.png';
          echo '<img class="archive-hero-image" src="' . $archive_image . '">';
        } elseif ($queried_object->name === 'event') {
          $archive_image = get_template_directory_uri() . '/img/6.png';
          echo '<img class="archive-hero-image" src="' . $archive_image . '">';
        } else {
          return;
        }
        ?>


      </header><!-- .page-header -->

      <?php
      /* Start the Loop */
      while (have_posts()) : the_post();


        get_template_part('template-parts/content', 'search');

      endwhile;


    else : get_template_part('template-parts/content', 'none');

    endif;
    ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
