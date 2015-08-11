<?php

?>
<section id="headline">
    <div class="container">
      <h3>Galería</h3>
    </div>
</section>

<section class="container page-content" >
<hr class="vertical-space2">
<div class="sixteen columns fondo">
<h4 style="margin: 20px;">Una muestra de nuestros eventos<br>
<small> Vuelva pronto, estamos actualizando nuestra galería por el momento.</small></h4>
<hr class="vertical-space1">
<div class="image-gallery">

			<ul class="gallery clearfix">
				<li class="img-item">
                <?= $this->Html->link($this->Html->image('galeria/g1.jpg').'<span class="zoomex">&nbsp;</span>', '/img/galeria/g1.jpg', array('rel' => 'prettyPhoto[gallery2]', 'title' => 'Title', 'escape' => false) ); ?>
				</li>
				<li class="img-item">
				<?= $this->Html->link($this->Html->image('galeria/g4.jpg').'<span class="zoomex">&nbsp;</span>', '/img/galeria/g4.jpg', array('rel' => 'prettyPhoto[gallery2]', 'title' => 'Title', 'escape' => false) ); ?>
				</li>
				<li class="img-item">
				<?= $this->Html->link($this->Html->image('galeria/g5.jpg').'<span class="zoomex">&nbsp;</span>', '/img/galeria/g5.jpg', array('rel' => 'prettyPhoto[gallery2]', 'title' => 'Title', 'escape' => false) ); ?>
				</li>
				<li class="img-item">
				<?= $this->Html->link($this->Html->image('galeria/g6.jpg').'<span class="zoomex">&nbsp;</span>', '/img/galeria/g6.jpg', array('rel' => 'prettyPhoto[gallery2]', 'title' => 'Title', 'escape' => false) ); ?>
				</li>
				<li class="img-item">
				<?= $this->Html->link($this->Html->image('galeria/g8.jpg').'<span class="zoomex">&nbsp;</span>', '/img/galeria/g8.jpg', array('rel' => 'prettyPhoto[gallery2]', 'title' => 'Title', 'escape' => false) ); ?>
				</li>

	</ul>
</div>
</div>
<hr class="vertical-space2">
</section><!-- container -->	