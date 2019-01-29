<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<div class="section-galeria">
  <div id="dcjv-homeslider" class="owl-carousel">
    <div class="owl-item">
      <figure class="item item-1">
          <img src="assets/images/gallery/gallery-01.jpg" alt="image description">
          <figcaption>
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-10 col-xs-12 pull-right -contenido">
                  <h1>Asesoría contable de calidad</h1>
                  <h2>Garantizada</h2> 
                  <div class="box-description">
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi
                        aliquip ex ea commodo consequat aute irure dolor in sprehen.</p>
                  </div>
                  <div class="box-actions">
                    <a class="vc-btn" href="#"><span>Contáctanos</span></a> 
                  </div>
                </div>
              </div>
            </div>
          </figcaption>
        </figure>
    </div>
    <div class="owl-item">
      <figure class="item item-2 box-style-one">
          <img src="assets/images/gallery/gallery-02.jpg" alt="image description">
          <figcaption>
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-10 col-xs-12 pull-right -contenido">
                  <h1>Asesoría contable de calidad</h1>
                  <h2>Garantizada</h2> 
                  <div class="box-description">
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi
                        aliquip ex ea commodo consequat aute irure dolor in sprehen.</p>
                  </div>
                  <div class="box-actions">
                    <a class="vc-btn btn-primary" href="#"><span>Contáctanos</span></a> 
                  </div>
                </div>
              </div>
            </div>
          </figcaption>
        </figure>
    </div>
    <div class="owl-item">
      <figure class="item item-3">
          <img src="assets/images/gallery/gallery-01.jpg" alt="image description">
          <figcaption>
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-10 col-xs-12 pull-right -contenido">
                  <h1>Five star service</h1>
                  <h2>guaranteed</h2>
                  
                  <div class="box-description">
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi
                        aliquip ex ea commodo consequat aute irure dolor in sprehen.</p>
                  </div>
                  <div class="box-actions">
                    <a class="vc-btn" href="#"><span>Read more</span></a>
                    <a class="vc-btn" href="#"><span>buy now</span></a>
                  </div>
                </div>
              </div>
            </div>
          </figcaption>
      </figure>
    </div>
  </div>
</div>

<div class="section-servicios">
  
</div>

<script type="text/javascript">

  $(document).ready(function() { 
    // GALERIA INICIO 
    var owl = $("#dcjv-homeslider");
    owl.owlCarousel({
      pagination : false,
      navigation : true,
      singleItem : true,
      navigationText: [
        "<i class='vc-btnnext fa fa-angle-left'></i>",
        "<i class='vc-btnprev fa fa-angle-right'></i>"
      ],
    });
  });
    
</script>