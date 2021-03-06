{include file="header.tpl"}
      <!-- Carousel ================================================== -->
      <div id="carouselMMA" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carouselMMA" data-slide-to="0" class="active"></li>
          <li data-target="#carouselMMA" data-slide-to="1"></li>
          <li data-target="#carouselMMA" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="images/mma-slide1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Sigue Luchando</h1>
                <p><code>Pelea</code> hasta que hayas vencido al ultimo. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="images/mma-slide2.jpeg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Combate con los mejores</h1>
                <p><code>Cras</code> justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="images/mma-slide3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Entrena como el mejor</h1>
                <p><code>Cras</code> justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carouselMMA" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselMMA" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
       ================================================== -->
       <!-- Wrap the rest of the page in another container to center all the content. -->

       <div class="container marketing">

         <!-- Three columns of text below the carousel -->
         <div class="row">
           <div class="col-lg-4">
             <img class="img-circle" src="images/torneo1.jpg" alt="Generic placeholder image" width="140" height="140">
             <h2>Torneo Importante</h2>
             <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
             <p><a class="btn btn-default" href="torneos" role="button">Ver Detalles &raquo;</a></p>
           </div><!-- /.col-lg-4 -->
           <div class="col-lg-4">
             <img class="img-circle" src="images/campeon1.jpg" alt="Generic placeholder image" width="140" height="140">
             <h2>Historia Campeon 1</h2>
             <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
             <p><a class="btn btn-default" href="luchadores" role="button">Ver Detalles &raquo;</a></p>
           </div><!-- /.col-lg-4 -->
           <div class="col-lg-4">
             <img class="img-circle" src="images/comentarios.jpg" alt="Generic placeholder image" width="140" height="140">
             <h2>Donde comentar</h2>
             <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
             <p><a class="btn btn-default" href="contacto" role="button">Ver Detalles &raquo;</a></p>
           </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->


         <!-- START THE FEATURETTES -->
         {foreach $noticias as $noticia}
         <hr class="featurette-divider">
         <div class="row featurette">
            {if $noticia['id_noticia']% 2 == 0}
             <div class="col-md-7 col-md-push-5">
               <h2 class="featurette-heading">{$noticia.titulo} <span class="text-muted">{$noticia.titulo_muted}</span></h2>
               <p class="lead">{$noticia.detalle}</p>
             </div>
             <div class="col-md-5 col-md-pull-7">
               <img class="featurette-image img-responsive center-block" src="images/{$noticia.imagen}" alt="Generic placeholder image">
             </div>
           </div>
             {else}
             <div class="col-md-7">
               <h2 class="featurette-heading">{$noticia.titulo} <span class="text-muted">{$noticia.titulo_muted}</span></h2>
               <p class="lead">{$noticia.detalle}</p>
             </div>
             <div class="col-md-5">
               <img class="featurette-image img-responsive center-block" src="images/{$noticia.imagen}" alt="Generic placeholder image">
             </div>
            </div>
           {/if}
         {/foreach}
        <hr class="featurette-divider">
         <!-- /END THE FEATURETTES -->

       </div><!-- /.container -->
{include file="noticias-footer.tpl"}
