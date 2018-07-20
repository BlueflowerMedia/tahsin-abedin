<?php get_header(); ?>

<section id="section-contact-forms">
 <div class="contact-container flex-row">
       <div class="contact-info flex1">
         <h4>Liked my work?</h4>
         <h2>WANT TO WORK WITH ME?</h2>
         <p><i class="fas fa-mobile-alt" style="color:#fff;padding:10px"></i>(647) 706-9137</p>
         <p><i class="far fa-envelope" style="color:#fff;padding:10px"></i>tahsin.abedin@gmail.com</p>
       </div>
       <div class="forms flex1">
         <?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]') ?>
       </div>
 </div>
</section>

<div class="page-footer">
  <p>Created by <?php Echo "<a href=https://www.blueflowermedia.com/>Blueflower Media</a>" ?> </p>
</div>

<?php get_footer(); ?>
