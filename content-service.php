<?php
/**
 * @package ambercouch
 * @since ambercouch 1.0
 */
?>



<li id="service-<?php the_id(); ?>" class="item service slug-<?php echo $post->post_name; ?>">
  <div class="service__content" data-icon="<?php echo (get_field('icon')) ? get_field('icon') : ''; ?>">
    <?php
    if (has_post_thumbnail()) {
      if ($exc == true) {
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?> </a>
        <?php
      } else {
        the_post_thumbnail('thumbnail');
      }
    }
    ?>
    <h3 class="service__title"><?php the_title(); ?></h3>
    <?php if (get_field('sub_title')): ?>
      <h4 class="service__sub-title"><?php the_field('sub_title'); ?></h4>
    <?php endif; ?>
    <?php if (get_field('more_info')): ?>
      <small class="service__more"><a href="<?php the_permalink(); ?>"><span>Find out more &raquo;</span></a></small>
      <?php endif; ?>
  </div><!-- .content -->
</li>

