<?php get_header(); ?>

<div class="single-container">
  <section class="sectionDetail">
    <div class="detail-title">
      <p class="single-label">Title</p>
      <input type="text" id="detail-title" name="detailTitle" value="<?php the_title();?>" />
    </div>
    <div class="detail-description">
      <p class="single-label">Description</p>
      <div class="detail-content">
        <?php the_content();?>
      </div>
    </div>
  </section>
  <button class="back-button">
    <a href="<?php echo home_url('/') ?>">back</a>
  </button>
</div>

<?php get_footer(); ?>












<!-- <?php get_header(); ?>
<div class="single-container">
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
</div>

<?php get_footer(); ?> -->



