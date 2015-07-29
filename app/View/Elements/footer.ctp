<footer id="footer">
    <section class="container footer-in">
	  <div class="one-third column">
      </div>
      <!-- LATASET NEWS end- -->

      <div class="one-third column">
		<br class="clear">
      </div>
      <!-- TAG & Partner end -->
	  
	  <div class="one-third column contact-inf">
        <h5 class="subtitle">Contáctanos</h5>
        <?php echo $this->element('Usermgmt.ajax_validation', array('formId' => 'contactForm', 'submitButtonId' => 'contactSubmitBtn')); ?>
     	  <?php echo $this->Form->create('UserContact', array('inputDefaults' => array('label' => false, 'div' => false), 'url'=>array('controller' => 'user_contacts', 'action' => 'contactUs', 'plugin'=>'usermgmt'), 'id'=>'contactForm', 'class' => 'frmContact')); ?>
  		  <?php 
          echo $this->Form->input('name', array('placeholder'=>__('Nombre'), 'title'=>__('Nombre'))); 
          echo $this->Form->input('email', array('placeholder'=>__('Correo'), 'title'=>__('Correo'))); 
          echo $this->Form->input('phone', array('placeholder'=>__('Teléfono'), 'title'=>__('Teléfono'))); 
          echo $this->Form->textarea('requirement', array('placeholder'=>__('Mensaje'), 'title'=>__('Mensaje'))); 
        ?>
  			<button type="button" class="btnSend" id="contactSubmitBtn">ENVIAR MENSAJE</button>
  			<div class="spanMessage"></div>
		    <?php echo $this->Form->end(); ?>
      </div>
      <!-- Contact info end -->
    </section>
    <!-- end-footer-in -->
    <section class="footbot">
	<div class="container">
      <div class="footer-navi">© <?= date("Y"); ?> <a href="#">You & I</a> Todos los derechos reservados.</div>
      <div class="socailfollow">
		        	<a href="https://www.facebook.com/youandi.eventsdreamaker" target="_blank" class="facebook"><i class="icomoon-facebook"></i></a>
		        	<a href="https://www.twitter.com/Eventsdreamaker" target="_blank" class="twitter"><i class="icomoon-twitter"></i></a>
		        	<!-- <a href="#" class="pinterest"><i class="icomoon-pinterest-2"></i></a> -->
        </div>
	  </div>
	  <!-- footer-navigation /end -->
    </section>
    <!-- end-footbot -->
  </footer>
<!-- end-footer -->
<span id="scroll-top"><a class="scrollup"><i class="icomoon-arrow-up"></i></a></span>