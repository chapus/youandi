<?php

?>
<section id="headline">
    <div class="container">
      <h3>Servicios</h3>
    </div>
</section>

<section class="container">
<!-- Start Page Content -->

    <hr class="vertical-space2">
    <div class="ten columns"> <small>Lo que sabemos</small>
      <h2>You & I es una compañía que ofrece un servicio exclusivo de organización integral de bodas, eventos sociales y corporativos.</p>
    </div>
    <div class="five columns omega offset-by-one">
	<!-- Start-Callouts -->
    <article class="callout"> <?= $this->Html->link('Contáctanos', '/contacto', array('class' => 'callurl') ); ?>

      <p>Dejanos organizar tu evento</p>
    </article>
	<!-- /end-Callouts -->
    </div>
    
    <?php
    $images = array(
    'floral.jpg' => 'Decoración floral', 
    'asesoria.jpg' => 'Asesoría de Imagen', 
    'banquete.jpg' => 'Banquetes', 
    'concepto.jpg' => 'Concepto y diseño', 
    'fitness.jpg' => 'Fitness', 
    'iluminacion.jpg' => 'Diseño de iluminación', 
    'maquillista.jpg' => 'Maquillistas profesionales', 
    'mobiliario.jpg' => 'Renta de mobiliario y mantelería', 
    'musica.jpg' => 'Grupos musicales y DJ\'s'
    );
    ?>
    <hr class="vertical-space1">
	<div class="sixteen columns">
      <div class="flexslider">
        <ul class="slides">
        <?php
        foreach($images as $key => $value):
        ?>
          <li> 
          <img src="<?php echo $this->Image->resize('img/servicios', $key, 1100, 378, false) ?>">
          <article class="slide-caption">
              <h3><?= $value; ?></h3>
              <p>You and I</p>
            </article>
          </li>
        <?php
        endforeach;
        ?>
        </ul>
      </div>
    </div>
    
	<hr class="vertical-space2">
    <div class="sixteen columns">
      <div class="title">
        <h4>Algunos de los servicios que te ofrecemos son:</h4>
      </div>
    </div>
    <div class="sixteen columns">

<hr class="vertical-space1">
		<div class="one_half">
			<div class="icon-box5">
				<i class="icomoon-bubble-heart"></i>
				<h4>Concepto y diseño del evento.</h4>
				<p>Te decimos lo que está de vanguardia</p>
			</div>
		</div>
		<div class="one_half column-last">
			<div class="icon-box5">
				<i class="icomoon-flower"></i>
				<h4>Decoración floral.</h4>
				<p>Estilo, es nuestra marca</p>
			</div>
		</div>
		<div class="one_half">
			<div class="icon-box5">
				<i class="icomoon-bed-2"></i>
				<h4>Renta de mobiliario y mantelería.</h4>
				<p>Tenemos los mejores proveedores</p>
			</div>
		</div>
		<div class="one_half column-last">
			<div class="icon-box5">
				<i class="icomoon-factory"></i>
				<h4>Banquetes con los mejores proveedores de la industria.</h4>
				<p>Degustarás sabores exquisitos</p>
			</div>
		</div>
		<div class="one_half">
			<div class="icon-box5">
				<i class="icomoon-spotlight"></i>
				<h4>Diseño de iluminación adaptada a tu evento.</h4>
				<p>Vestimos de luces tu evento</p>
			</div>
		</div>
		<div class="one_half column-last">
			<div class="icon-box5">
				<i class="icomoon-stack-music"></i>
				<h4>Grupos Musicales y DJ´S. </h4>
				<p>Te transportaremos a una experiencia única</p>
			</div>
		</div>
		<div class="one_half">
			<div class="icon-box5">
				<i class="icomoon-palette"></i>
				<h4>Maquillistas profesionales</h4>
				<p>Lucirás impecable</p>
			</div>
		</div>
		<div class="one_half column-last">
			<div class="icon-box5">
				<i class="icomoon-scissors"></i>
				<h4>Asesoría de imagen </h4>
				<p>Proyectamos tu esencia</p>
			</div>
		</div>
		<div class="one_half">
			<div class="icon-box5">
				<i class="icomoon-rulers"></i>
				<h4>Fitness </h4>
				<p>Contamos con un servicio integral de acuerdo a tus necesidades</p>
			</div>
		</div>
	</div>
	<!-- /end- Icon Boxes -->
    <hr class="vertical-space3">
</section>