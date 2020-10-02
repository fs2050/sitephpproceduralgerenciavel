<?php
if (!isset($seguranca)) {
    exit;
}
include_once 'app/sts/header.php';
?>

<body>
    <?php
    include_once 'app/sts/menu.php';
    ?>
    <main role="main">
        <?php
        $result_carousels = "SELECT car.*,
                cor.cor
                FROM sts_carousels car
                INNER JOIN sts_cors cor ON cor.id=car.sts_cor_id
                WHERE car.sts_situacoe_id=1
                ORDER BY ordem ASC";
        $resultado_carousels = mysqli_query($conn, $result_carousels);
        if (($resultado_carousels) AND ( $resultado_carousels->num_rows != 0)) {
            ?>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    $cont_marc = 0;
                    while ($row_marcador = mysqli_fetch_assoc($resultado_carousels)) {
                        echo "<li data-target='#myCarousel' data-slide-to='$cont_marc'></li>";
                        $cont_marc++;
                    }
                    ?>                    
                </ol>
                <div class="carousel-inner">
                    <?php
                    $cont_slide = 0;
                    $resultado_carousels = mysqli_query($conn, $result_carousels);
                    while ($row_slide = mysqli_fetch_assoc($resultado_carousels)) {
                        ?>
                        <div class="carousel-item <?php
                        if ($cont_slide == 0) {
                            echo 'active';
                        }
                        ?>">
                     <img class="second-slide img-fluid-sm d-flex w-100 p-1  flex-column mt-5 " src="<?php echo pg; ?>/assets/imagens/carousel/<?php echo $row_slide['id']; ?>/<?php echo $row_slide['imagem']; ?>" alt="<?php echo $row_slide['titulo']; ?>">
                            <div class="container">
                                <div class="carousel-caption <?php echo $row_slide['posicao_text']; ?>">
                                    <h1 class="d-none d-md-block"><?php echo $row_slide['titulo']; ?></h1>
                                    <p class="d-none d-md-block"><?php echo $row_slide['descricao']; ?></p>
                                    <p class="d-none d-md-block"><a class="btn btn-lg btn-<?php echo $row_slide['cor']; ?>" href="<?php echo $row_slide['link']; ?>" role="button"><?php echo $row_slide['titulo_botao']; ?></a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $cont_slide++;
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">antes</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">depois</span>
                </a>
            </div>
            <?php
        }


       
        ?>
         <div class="container text-center text-danger mt-5">
    <h1 class="display-4 font-weight-bold">Clubes e Entidades.</h1>
    <p class="lead">Clubes e entidades da cidade de carapicuiba.</p>
  </div>
      <div class="container mt-5">  <div class="jumbotron jumbotron-fluid alert alert-success">
  <div class="container text-center">
    <h1 class="display-4 font-weight-bold">Clubes Da Nossa Cidade</h1>
    <p class="lead">Cada Clube... Uma Seleção!</p>
  </div>
</div>
</div>
  

        
 <div class="container mt-5 ">
        <div class="row row-cols-1 row-cols-md-4">
            
              <style type="text/css">
      .card > img{
      
            
    display: block;
    margin-left: auto;
    margin-right: auto 
      
          width: 250px;
          height: 250px;
          
        
       
          
      }
  </style>


  <div class="col mb-4">
    <div class="card image ">
      <img src="assets/imgcampos/40CASAS.jpeg" class="card-img-top" alt="..."  >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">SC 40 K.SAS</h5>
       
       
      </div>
    </div>
  </div> 
 
         
            
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/AL-QAEDA FC.png" class="card-img-top" alt="Campo do Inac"  >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">AL-QAEDA FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/AMANTESDOALCOOLFC.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">AA FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/ANDORINHASFC.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">ANDORINHAS FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/ARISTONFC.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">ARISTON FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/ARSENALDOMORRO.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">ARSENAL FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/AZALEIAFC.jpeg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">AZALÉIA FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/BARCELONAFC.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">BARCELONA FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/BRASINHAFS.jpeg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">BRASINHA FS</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/BRIGIDAFC.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">BRIGIDA FC</h5>
       
      </div>
    </div>
  </div>
  
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/CHELSEAFP.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">CHELSEA FP</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/CHEQUEMATEFC.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">XEQUE-MATE FC</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/COMETAFC.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">COMETA FC</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/ECBOLABRANCA.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">EC BOLA BRANCA</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/ECVIDIGAL.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">EC VIDIGAL</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/FAMILIAFC.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">FAMILIA FC</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/FORAOBAILE.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">FORA O BAILE FC</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/LORENA.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">LORENA FC</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/LSFUTEBOLCLUBE.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">LS FC</h5>
       
      </div>
    </div>
  </div>
     <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/MALHORCA.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">MALHORCA FM</h5>
       
      </div>
    </div>
  </div>
  
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/MANGANELLI.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">MANGANELLI FC</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/MARAVILHANEGRA.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">MARAVILHA NEGRA</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/MARESIASS.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">MARESIAS SC</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/MARILIA.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">MARÍLIA FS</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/mJ.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">MARY-JANE FC</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/NACIONAL.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">NACIONAL FC</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/PARCERIA.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">PARCERIA FC</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/PAULISTANO.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">SC PAULISTANO</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/PEDREIRA.png" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">SBE PEDREIRA</h5>
       
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/PLANALTO.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">EC PLANALTO</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/REALJUPITER.jpeg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">REAL JÚPITER FC</h5>
       
      </div>
    </div>
  </div>
  
  <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/real.jpeg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">REAL FAVELA FC</h5>
       
      </div>
    </div>
  </div>
  
    <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/unidos.jpeg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">UNIDOS FC</h5>
       
      </div>
    </div>
  </div>
  
   <div class="col mb-4">
    <div class="card image">
      <img src="assets/imgcampos/furia.jpeg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title text-center">FÚRIA OESTE FC</h5>
       
      </div>
    </div>
  </div></div>
     
</div>
 <div class="container text-center">
       <div class="container text-center text-danger mt-5 mb-5">
    <h1 class="display-4 font-weight-bold">Federação Paulista de Futebol</h1>
    <p class="lead">Clubes Que Estão Disputando a 1° Divisão do Futebol Paulista</p>
  </div>
        <div class="card image "><div class="row escudos"><div class="col-sm-3 col-xs-6"><!----> <a href="https://www.ecaguasanta.com/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'água_santa');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/7212.gif"></div>
        <h4>Água Santa</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://botafogofutebolsa.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'botafogo');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/42.gif"></div>
        <h4>Botafogo</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://www.corinthians.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'corinthians');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/78.gif"></div>
        <h4>Corinthians</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="http://ferroviariasa.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'ferroviária');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/4564.gif"></div>
        <h4>Ferroviária</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="http://gremionovorizontino.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'grêmio_novorizontino');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/9541.gif"></div>
        <h4>Grêmio Novorizontino</h4></a></div
        ><div class="col-sm-3 col-xs-6"><!----> <a href="https://www.guaranifc.com.br/site/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'guarani');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/242.gif"></div>
        <h4>Guarani</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://interdelimeira.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'inter_limeira');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/257.gif"></div>
        <h4>Inter Limeira</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://www.ituanofc.com/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'ituano');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/271.gif"></div>
        <h4>Ituano</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="http://www.mirassolfc.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'mirassol');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/3293.gif"></div>
        <h4>Mirassol</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://www.xn--baruerioeste-heb.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'oeste');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/3307.gif"></div>
        <h4>Oeste</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://www.palmeiras.com.br/pt-br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'palmeiras');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/3320.gif"></div>
        <h4>Palmeiras</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://pontepreta.com.br/home/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'ponte_preta');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/3344.gif"></div>
        <h4>Ponte Preta</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://www.redbull.com/br-pt/collections/futebol-bragantino" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'red_bull_bragantino');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/45.gif"></div>
        <h4>Red Bull Bragantino</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="http://ecsantoandre.com.br/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'santo_andré');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/3381.gif"></div>
        <h4>Santo André</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="https://www.santosfc.com.br/noticias/" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'santos');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/3383.gif"></div>
        <h4>Santos</h4></a></div>
        <div class="col-sm-3 col-xs-6"><!----> <a href="http://www.saopaulofc.net/spfc" onclick="pageTracker._trackEvent('fpf_atletas', 'fpf_atletas_clubes', 'são_paulo');"><div style="margin: 0px;"><img src="https://conteudo.fpf.org.br/escudos/clube/3395.gif"></div>
        <h4>São Paulo</h4></a></div></div>
        </div>
  </div> 
  
     
  
     <div class="container text-center text-danger mt-5 mb-5">
    <h1 class="display-4 font-weight-bold">LIFUCA!</h1>
    <p class="lead">Nossa Liga Sempre Incentivando o Esporte em Nossa Cidade!</p>
  </div>
        
    </main>
<?php
include_once 'app/sts/rodape.php';
include_once 'app/sts/rodape_lib.php';
?>

    <script>
        window.sr = ScrollReveal({reset: true});
        sr.reveal('.card-servicos', {
            duration: 1000,
            origin: 'bottom',
            distance: '20px'
        });
        sr.reveal('.dep-left', {
            duration: 1000,
            origin: 'left',
            distance: '20px'
        });
        sr.reveal('.dep-center', {
            duration: 1000,
            origin: 'bottom',
            distance: '20px'
        });
        sr.reveal('.dep-right', {
            duration: 1000,
            origin: 'right',
            distance: '20px'
        });
        sr.reveal('.prod-text', {
            duration: 1000,
            origin: 'left',
            distance: '20px'
        });
        sr.reveal('.prod-img', {
            duration: 1000,
            origin: 'right',
            distance: '20px'
        });
        sr.reveal('.email-text', {
            duration: 1000,
            origin: 'left',
            distance: '20px'
        });
        sr.reveal('.email-form', {
            duration: 1000,
            origin: 'right',
            distance: '20px'
        });
        sr.reveal('.perg-resp-text', {
            duration: 1000,
            origin: 'left',
            distance: '20px'
        });
        sr.reveal('.perg-resp-cont', {
            duration: 1000,
            origin: 'right',
            distance: '20px'
        });
    </script>
</body>

