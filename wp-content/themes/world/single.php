<?php get_header(); ?>

<div class="singleContainer">
  <section class="sectionDetail">
    <div class="detailTitles">
      <p class="singleLabel">Title</p>
      <input type="text" name="detailTitle" value="<?php the_title();?>" />
    </div>
    <div class="detailDescription">
      <p class="singleLabel">Description</p>
      <div class="detailContent">
        <?php the_content();?>
      </div>
    </div>
  </section>
  <button class="backButton">
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



