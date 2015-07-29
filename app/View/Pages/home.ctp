<?php
	$this->viewVars['title_for_layout']= "You & I | Organización y coordinación de bodas";

    $images = array(
    'main1.jpg' => 'Organización y coordinación de bodas', 
    'main2.jpg' => 'Organización y coordinación de bodas', 
    'main3.jpg' => 'Banquetes', 
    'main4.jpg' => 'Renta de mobiliario y mantelería'
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