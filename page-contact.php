<?php get_header(); ?>

<section id="section-contact-forms">
 <div class="container flex-row">
       <div class="contact-info flex1">
         <h4>Liked my work?</h4>
         <h2>WANT TO WORK WITH ME?</h2>
         <p>
           <a href=""><i class="fas fa-mobile-alt" style="color:#fff;padding:10px;margin-top:100px;"></i></a>
           (647) 706-9137
         </p>
         <p>
           <a href=""><i class="far fa-envelope" style="color:#fff;padding:10px;"></i></a>
           tahsin.abedin@gmail.com
         </p>
       </div>
       <div class="forms flex1">
         <?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]') ?>
       </div>
 </div>
</section>
<?php get_footer(); ?>
