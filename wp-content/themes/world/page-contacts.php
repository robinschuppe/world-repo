<?php get_header(); ?>

<section class="sectionContacts">
  <div class="contactsContainer">
    <h1 class="contactsTitle">Contact Us</h1>
    <form class="contacts-form" method="POST" action="">
      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          class="form-input"
          placeholder="aaa@gmail.com"
          required>
      </div>

      <div class="form-group">
        <label for="subject" class="form-label">Subject</label>
        <input
          type="text"
          id="subject"
          name="subject"
          class="form-input"
          placeholder="subject..."
          required>
      </div>

      <div class="form-group">
        <label for="content" class="form-label">Contents</label>
        <textarea
          id="content"
          name="content"
          class="form-textarea"
          placeholder="contents..."
          rows="6"
          required></textarea>
      </div>
      <div class="btn-group">
        <button type="submit" class="contact-submit-btn">Submit</button>
      </div>
    </form>
  </div>
</section>
<section>
  <button class="back-button">
  <a href="<?php echo home_url('/') ?>">back</a>
</button>
</section>
<?php get_footer(); ?>