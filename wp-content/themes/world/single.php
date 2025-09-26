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
    <button class="backButton">
    <a href="<?php echo home_url('/') ?>"><span></span>Back</a>
  </button>
  </section>
  <!-- <section>
    <button class="backButton">
    <a href="<?php echo home_url('/') ?>"><span></span>Back</a>
  </button>
  </section> -->
</div>

<?php get_footer(); ?>
 



