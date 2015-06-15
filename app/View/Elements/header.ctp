<?php
$url = $this->here;

	$nosotros = strpos($url, 'nosotros');
	$servicios = strpos($url, 'servicios');
	$eventos = strpos($url, 'eventos');
	$galeria = strpos($url, 'galeria');
	$contacto = strpos($url, 'contacto');
?>
<div id="sticker">
	<header id="header">
			
<div  class="container">
	<div class="four columns">
	<div class="logo"><a href="#"><?= $this->Html->link( $this->Html->image('logov3.jpg', array('width' => 220, 'id' => 'img-logo', 'alt' => 'You and I') ), '/', array('escape' => false) ); ?></a></div>
	</div>

<!-- Navigation starts
  ================================================== -->
<nav id="nav-wrap" class="nav-wrap1 twelve columns">
<!--
	<div id="search-form">
        <form action="#" method="get">
            <input type="text" class="search-text-box" id="search-box">
        </form>
    </div>
-->
        <ul id="nav">
          <li class="<?php if($this->action == "display") echo "current"; ?>"><?= $this->Html->link('Inicio', '/'); ?></li>
          <li class="<?php if($nosotros) echo "current"; ?>"><?= $this->Html->link('Nosotros', '/nosotros'); ?></li>
          <li class="<?php if($servicios) echo "current"; ?>"><?= $this->Html->link('Servicios', '/servicios'); ?></li>
          <li class="<?php if($eventos) echo "current"; ?>"><?= $this->Html->link('Eventos', '/eventos'); ?></li>
          <li class="<?php if($galeria) echo "current"; ?>"><?= $this->Html->link('Galería', '/galeria'); ?></li>
		  <li class="<?php if($contacto) echo "current"; ?>"><?= $this->Html->link('Contacto', '/contacto'); ?></li>
        </ul>
      </nav>
      <!-- /nav-wrap -->

<!-- Navigation ends
  ================================================== -->
</div>
<!--
<div id="search-form2">
	<form action="#" method="get">
		<input type="text" class="search-text-box2">
	</form>
</div>
-->
</header>
</div>
<!-- end-header -->