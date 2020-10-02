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
    <h1 class="display-4 font-weight-bold">Futebol que chama!!!</h1>
    <p class="lead">Aqui Você encontra todos os endereços dos campos de futebol do municipio de Carapicuíba</p>
  </div>
      <div class="container mt-5">  <div class="jumbotron jumbotron-fluid alert alert-success">
  <div class="container text-center">
    <h1 class="display-4 font-weight-bold">Campos Da Nossa Cidade</h1>
    <p class="lead">Clique na imagem e venha nos fazer uma visita!.</p>
  </div>
</div>
</div>
  
        
 <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3">
            
            
  <a class="text-muted" target="_blank" href="https://goo.gl/maps/F7faQQ8ZFswFQoNi9">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO PEDREIRA</h5>
        <p class="card-text">Avenida Amazonas, S/N - Conjunto Habitacional Presidente Castelo Branco (COHAB) - Carapicuíba SP CEP 06326-970.</p>
      </div>
    </div>
  </div>
  </a>            
            
 <a class="text-muted" target="_blank" href="https://goo.gl/maps/RXznf4e7oR9NfyBG7">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="Campo do Inac" >
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO INAC</h5>
        <p class="card-text ">Avenida Comendador Dante Carraro, 333 - Cidade Ariston, Carapicuíba - SP CEP 06396-000. Obs dentro do Batalhão da Policia Militar.</p>
      </div>
    </div>
  </div>
 </a>
  
  
  
  
   <a class="text-muted" target="_blank" href="https://goo.gl/maps/4C5zvHGgCkeVZG7E8">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="COMPLEXO ESPORTIVO DA VILA CRETI (FUCA">
      <div class="card-body text-dark">
        <h5 class="card-title">COMPLEXO ESPORTIVO DA VILA CRETI (FUCA)</h5>
        <p class="card-text">Rua José Fernandes Teixeira (ZUZA), S/N – Vila Creti - Carapicuíba - SP CEP 06317-270.</p>
      </div>
    </div>
  </div>
  </a>
  
     <a class="text-muted" target="_blank"  href="https://goo.gl/maps/dsNVHXmDaYnG3mG89">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="COMPLEXO ESPORTIVO PARQUE DO PLANALTO">
      <div class="card-body text-dark">
        <h5 class="card-title">COMPLEXO ESPORTIVO PARQUE DO PLANALTO</h5>
        <p class="card-text">Rua Serra do Mailasque, S/N – Jardim Planalto - Carapicuíba - SP CEP 06362-160.</p>
      </div>
    </div>
  </div>
  </a>
  
  
   <a class="text-muted" target="_blank" href="https://goo.gl/maps/p8whM5r2EqUGLescA">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">ESTÁDIO MUNICIPAL DE CARAPICUIBA</h5>
        <p class="card-text">Avenida Perimetral Norte, 246 - Conjunto Habitacional Presidente Castelo Branco (COHAB 2) - Carapicuíba SP CEP 06328-020.</p>
      </div>
    </div>
  </div>
  </a>
  
    <a class="text-muted" target="_blank"  href="https://goo.gl/maps/YTHNW1v8WiHuuJGY7">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO BAHIA</h5>
        <p class="card-text">Rua General Carneiro, S/N – Jardim Ana Estela - Carapicuíba - SP CEP 06355-080.</p>
      </div>
    </div>
  </div>
  </a>
  
        <a class="text-muted" target="_blank"  href="https://goo.gl/maps/wfP3JxJZLsZxUzHw7">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO PARQUE ECOLOGICO DOS PATURIS</h5>
        <p class="card-text">Av. Antônio Faustino dos Santos S/N - Carapicuíba - SP CEP 06328-150.</p>
      </div>
    </div>
  </div>
  </a>
    

    <a class="text-muted" target="_blank" href="https://goo.gl/maps/AYbivuijrimvyEhz9">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO AZALEIA</h5>
        <p class="card-text">Rua Alvinópolis, 110 - Conjunto Habitacional Presidente Castelo Branco (COHAB) - Carapicuíba SP CEP 06327-110.</p>
      </div>
    </div>
  </div>
  </a>
  
      <a class="text-muted" target="_blank" href="https://goo.gl/maps/Jq5ni8pQoL84Fu976">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO IDEAL </h5>
        <p class="card-text">Av. Marginal do Ribeirão, S/N – Gopiúva - Carapicuíba - SP CEP 06330-010.</p>
      </div>
    </div>
  </div>
  </a>
  
  <a class="text-muted" target="_blank" href="https://goo.gl/maps/gzxuw9mj7RXLvjB87">
    <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CENTRO SOCIAL URBANO DE CARAPICUÍBA </h5>
        <p class="card-text">Rua Lizarda, 06 – Ariston Estela Azevedo – Carapicuíba – SP CEP 06395-290.</p>
      </div>
    </div>
  </div>
  </a>
  
    <a class="text-muted" target="_blank"  href="https://goo.gl/maps/yCxvhTQUgB8WSNww7">
    <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO LORENA </h5>
        <p class="card-text">Rua Alterosa, S/N - Conjunto Habitacional Presidente Castelo Branco (COHAB) - Carapicuíba SP CEP 06327-260.</p>
      </div>
    </div>
  </div>
  </a>
  
      <a class="text-muted" target="_blank" href="https://goo.gl/maps/7m6hXoCEuXA3vvdd9">
    <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DA ALDEIA</h5>
        <p class="card-text">Rua Maria Benedita Pereira Jardim Maria Beatriz S/N- Carapicuíba - SP CEP 06365-340.</p>
      </div>
    </div>
  </div>
  </a>
  
    <a class="text-muted" target="_blank" href="https://goo.gl/maps/A4jrjTHN5sm4ZBnM6">
    <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO BEATRIZ</h5>
        <p class="card-text">Av. Marginal do Ribeirão, S/N – Gopiúva - Carapicuíba - SP CEP 06330-010.</p>
      </div>
    </div>
  </div>
  </a>
  

  
   <a class="text-muted" target="_blank" href="https://goo.gl/maps/7AxfsoqBLoN9gKGe9">
  
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DO ROSEIRA PARQUE</h5>
        <p class="card-text">Rua Anabel S/N– Jardim Bom Pastor - Carapicuíba - SP CEP 06385-080.</p>
      </div>
    </div>
  </div>
  </a>
  
   <a class="text-muted" target="_blank" href="https://goo.gl/maps/pfNtZdBcLrKo1YeAA">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/imgcampos/endcampo.jpg" class="card-img-top" alt="...">
      <div class="card-body text-dark">
        <h5 class="card-title">CAMPO DA VILA LOURDES</h5>
        <p class="card-text">Avenida Nova Brasil, S/N Vila Lourdes - Carapicuíba - SP CEP 06397-220.</p>
      </div>
    </div>
  </div>
  </a>
  
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

