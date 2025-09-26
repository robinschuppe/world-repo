<?php get_header(); ?>

<div class="contactsContainer">
  <section class="sectionContacts">
    <h1 class="contactsTitle">Contacts</h1>
    <form class="contactsForm" method="POST" action="">
      <div class="formGroup">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          class="form-input"
          placeholder="aaa@gmail.com"
          required>
      </div>
      <div class="formGroup">
        <label for="subject">Subject</label>
        <input
          type="text"
          id="subject"
          name="subject"
          class="form-input"
          placeholder="subject..."
          required>
      </div>

      <div class="formGroup">
        <label for="content" >Contents</label>
        <textarea
          id="content"
          name="content"
          class="form-textarea"
          placeholder="contents..."
          rows="6"
          cols="10"
          required></textarea>
      </div>
      <div class="btnGroup">
        <button type="submit">Submit</button>
      </div>
    </form>
  </section>
</div>

<?php get_footer(); ?>