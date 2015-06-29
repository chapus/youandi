<?php
	$this->viewVars['title_for_layout']= "You & I | Organización y coordinación de bodas";

    $images = array(
    'inicio1.jpg' => 'Organización y coordinación de bodas', 
    'inicio2.jpg' => 'Organización y coordinación de bodas', 
    'inicio3.jpg' => 'Banquetes', 
    'inicio4.jpg' => 'Renta de mobiliario y mantelería',
    'inicio5.jpg' => 'Concepto y diseño', 
    'inicio6.jpg' => 'Fitness', 
    'inicio7.jpg' => 'Diseño de iluminación', 
    'inicio8.jpg' => 'Asesoría de Imagen', 
    'inicio9.jpg' => 'Maquillistas profesionales'
    );
?>

      <div class="flexslider">
        <ul class="slides">
        <?php
        foreach($images as $key => $value):
        ?>
          <li> 
          <img src="<?php echo $this->Image->resize('img/inicio', $key, 1100, 378, false) ?>">
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