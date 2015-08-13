<?php
	//echo $this->here;
?>
<section id="headline" class="dibujo">
    <div class="container">
      <?= $this->Html->image("nosotros/dibujo.png", array("class" => "responsive dibujo3")); ?><h3>Nosotros</h3>
    </div>
</section>

<section class="container">
    <hr class="vertical-space2">
    <article class="ten columns" style="background-color: rgba(0,0,0,0.25);">
		<div class="sub-content">
			<h6 class="h-sub-content" style="padding: 5px;">¿Quiénes Somos?</h6>
		</div>
      <p style="padding: 10px;">Somos una compañía que brinda un servicio integral de conceptualización, diseño y coordinación de tu boda y evento social o corporativo.</p>
    </article>
	<!-- end Who We Are -->
    <div class="five columns omega offset-by-one fondo">
      <section id="valores">
    		<div class="sub-content">
    			<h6 class="h-sub-content">Valores</h6>
    		</div>
          <ul>
              <li class="arrow">Honestidad</li>
              <li class="arrow">Profesionalismo</li>
              <li class="arrow">Humildad</li>
              <li class="arrow">Ética</li>
          </ul>
      </section>
    </div>
	<!-- end Our Skills -->
	<hr class="vertical-space2">
<div class="sixteen columns">
    <div class="one_half fondo">
        <section id="tooltips">
            <h4 class="subtitle">Misión</h4>
            <hr class="vertical-space1">
            <div class="tooltips well" style="background-color: rgba(0,0,0,0.25);">
            <p class="muted">Brindar un servicio de excelente calidad, de buen gusto y honesto, logrando la entera satisfacción de nuestros clientes; transportándolos a su mejor experiencia de evento.</p>
            </div>
        </section>
    </div>
    
    <div class="one_half column-last fondo">
        <section id="tooltips">
            <h4 class="subtitle">Visión</h4>
            <hr class="vertical-space1">
            <div class="tooltips well" style="background-color: rgba(0,0,0,0.25);">
            <p class="muted">Consolidarnos como una empresa líder y confiable dentro del ámbito, siendo punta de lanza en las nuevas tendencias de la industria, para convertirnos en una sonrisa por los mejores recuerdos de cada cliente.</p>
            </div>
        </section>
    </div>
</div>

<hr class="vertical-space2">
<section class="our-team-wrap clearfix">
	<div class="sixteen columns">
        <div class="sub-content">
            <h6 class="h-sub-content">Equipo</h6>
        </div>
	</div>
	<div class="sixteen columns">
        <div class="one_third">
          <figure class="our-team"> <?= $this->Html->image('nosotros/vanessadelatorre.jpg'); ?>
            <figcaption><h4><strong>Vanessa De La Torre<br>
              <small>Event Planner</small></strong></h4></figcaption>
          </figure>
          <!-- end Our Team -->
        </div>
        <div class="one_third">
          <figure class="our-team"> <?= $this->Html->image('nosotros/peonia.jpg'); ?>
            <figcaption></figcaption>
          </figure>
          <!-- end Our Team -->
        </div>
        <div class="one_third column-last">
          <figure class="our-team"> <?= $this->Html->image('nosotros/dianadelatorre.jpg'); ?>
            <figcaption><h4><strong>Diana De La Torre<br>
              <small>Diseñadora</small></strong></h4></figcaption>
          </figure>
          <!-- end Our Team -->
        </div>
	</div>
</section>
      <!-- end Our Team -->

<hr class="vertical-space4">
  </section>