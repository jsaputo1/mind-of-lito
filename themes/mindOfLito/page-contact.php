  <section class="contact">
    <?php dynamic_sidebar ('contact')?>
    <form>
      <div class="name-email">
        <textarea name="name" name="firstname" placeholder="Name"></textarea>
        <textarea name="email" placeholder="Email"></textarea>
      </div>
      <textarea name="subject" placeholder="Subject" id="subject"></textarea>
      <textarea name="message" placeholder="Message" id="message"></textarea>
      <div class="form-button">
        <input type="submit" value="Send" id="contact-button" />
      </div>  
    </form>
</section>