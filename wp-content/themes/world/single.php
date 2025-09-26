<?php get_header(); ?>

<section class="sectionDetail">
  <div class="detail-form">
    <label for="detailTitle">Title</label>
    <input type="text" id="detail-title" name="detail_title" value="<?php the_title();?>" />
    <label for="detail-description">Description</label>
    <?php the_content();?>
  </div>
</section>
<button class="back-button">
  <a href="<?php echo home_url('/') ?>">back</a>
</button>

<?php get_footer(); ?>