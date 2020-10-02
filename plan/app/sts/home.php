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

            <div id="myCarousel " class="carousel slide" data-ride="carousel" >
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
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <?php
        }


        $result_servico = "SELECT * FROM sts_servicos LIMIT 1";
        $resultado_servico = mysqli_query($conn, $result_servico);
        $row_servico = mysqli_fetch_assoc($resultado_servico);
        ?>
        <div class="jumbotron servicos" >
            <div class="container">
                <h2 class="display-4 text-center" style="margin-bottom: 40px;"><?php echo $row_servico['titulo']; ?></h2>
                <div class="card-deck card-servicos" >
                    <div class="card text-center">
                        <div class="icon-row tamanh-icone">
                            <a class="text-muted" href="http://www.lifuca.com.br/blog"><span class="step size-96 text-primary">
                                <i class="icon <?php echo $row_servico['icone_um']; ?>"></i>
                            </span> </a>
                          
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_servico['nome_um']; ?></h5>
                            <p class="card-text lead"><?php echo $row_servico['descricao_um']; ?></p>      
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="icon-row tamanh-icone">
                              <a class="text-muted" href="http://www.lifuca.com.br/sobre_empresa">
                            <span class="step size-96 text-primary">
                                <i class="icon <?php echo $row_servico['icone_dois']; ?>"></i>
                            </span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_servico['nome_dois']; ?></h5>
                            <p class="card-text lead"><?php echo $row_servico['descricao_dois']; ?></p>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="icon-row tamanh-icone ">
                            <a class="text-muted" href="http://www.lifuca.com.br/clubes">
                            <span class="step size-96 text-primary">
                                <i class="icon <?php echo $row_servico['icone_tres']; ?>"></i>
                            </span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_servico['nome_tres']; ?></h5>
                            <p class="card-text lead"><?php echo $row_servico['descricao_tres']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $result_video = "SELECT * FROM sts_videos LIMIT 1";
        $resultado_video = mysqli_query($conn, $result_video);
        $row_video = mysqli_fetch_assoc($resultado_video);
        ?>
        <div class="jumbotron depoimento">
            <div class="container">
                <h2 class="display-4 text-center" style="margin-bottom: 40px; color: #FFF;"><?php echo $row_video['titulo']; ?></h2>
                <p class="lead text-center" style="margin-bottom: 40px; color: #FFF;"><?php echo $row_video['descricao']; ?></p>
                <div class="card-deck">
                    <div class="card text-center dep-left">
                        <div class="embed-responsive embed-responsive-16by9">
<?php echo $row_video['video_um']; ?>
                        </div>
                    </div>
                    <div class="card text-center dep-center">
                        <div class="embed-responsive embed-responsive-16by9">
<?php echo $row_video['video_dois']; ?>
                        </div>							
                    </div>
                    <div class="card text-center dep-right">
                        <div class="embed-responsive embed-responsive-16by9">
<?php echo $row_video['video_tres']; ?>
                        </div>							
                    </div>
                </div>
            </div>
        </div>
        

<div class="container mt-3 mb-3">
<div class="row featurette">
      <div class="col-md-7 order-md-2 text-center">
        <h2 class="featurette-heading">VISITE NOSSA PÁGINA NO FACEBOOK.</h2>
        <p class="lead">SIGA-NOS EM NOSSA PÁGINA DO FACEBOOK. AQUI VOCÊ ENCONTRA NOSSOS POSTS, FOTOS DE EVENTOS, FOTOS DE CAMPEONATOS, REUNIÕES ENTRE OUTRAS ATIVIDADES DA NOSSA LIGA. O FACEBOOK AJUDA VOCÊ A SE CONECTAR E COMPARTILHAR COM AS PESSOAS QUE FAZEM
        PARTE DA SUA VIDA!</p>
      </div>
      <div class="col-md-5 order-md-1 text-center">
      <div class="fb-page" data-href="https://www.facebook.com/lifuca" data-tabs="timeline" data-width="" data-height="350px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lifuca" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lifuca">Liga de Futebol de Carapicuíba</a></blockquote></div>
      </div>
    </div>
    </div>

        <?php
        $result_prod_home = "SELECT * FROM sts_prods_homes LIMIT 1";
        $resultado_prod_home = mysqli_query($conn, $result_prod_home);
        $row_prod_home = mysqli_fetch_assoc($resultado_prod_home);
        ?>
        <div class="jumbotron produto">
            <div class="container">
                <h2 class="display-4 text-center" style="margin-bottom: 40px;"><?php echo $row_prod_home['titulo']; ?></h2>
                <div class="row featurette">
                    <div class="col-md-7 prod-text">
                        <h2 class="featurette-heading"><?php echo $row_prod_home['subtitulo']; ?></h2>
                        <p class="lead"><?php echo $row_prod_home['descricao']; ?></p>
                    </div>
                    <div class="col-md-5 prod-img">
                        <img class="featurette-image img-fluid mx-auto" src="<?php echo pg . '/assets/imagens/prods_home/' . $row_prod_home['id'] . '/' . $row_prod_home['imagem']; ?>" alt="<?php echo $row_prod_home['subtitulo']; ?>">
                    </div>
                </div>
            </div>
        </div>	

        <?php
        $result_forms_emails = "SELECT * FROM sts_forms_emails LIMIT 1";
        $resultado_forms_emails = mysqli_query($conn, $result_forms_emails);
        $row_forms_emails = mysqli_fetch_assoc($resultado_forms_emails);
        ?>
        <div class="jumbotron cadastro-email paralaxe-email" style="background-image:url(<?php echo pg . "/assets/imagens/form_email/" . $row_forms_emails['id'] . "/" . $row_forms_emails['imagem']; ?>);">
            <div class="container">
                <div class="email-text">
                    <h2 class="display-4 text-center" style="margin-bottom: 40px"><?php echo $row_forms_emails['titulo']; ?></h2>
                    <p class="lead text-center" style="margin-bottom: 40px;"><?php echo $row_forms_emails['descricao']; ?></p>
                </div>
                <div class="email-form">
                    <form action="<?php echo pg; ?>/proc_cad_lead" method="POST">
                        <div class="form-row justify-content-center">
                            <div class="col-sm-3 my-1">
                                <label class="sr-only">E-mail</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Seu melhor e-mail">
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <input type="submit" class="btn btn-primary mb-2" value="<?php echo $row_forms_emails['titulo_botao']; ?>" name="SendCadLead">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>	


        <?php
        $result_perg_resp = "SELECT * FROM sts_pergs_resps WHERE sts_situacoe_id=1 ORDER BY ordem ASC";
        $resultado_perg_resp = mysqli_query($conn, $result_perg_resp);
        ?>
        <div class="jumbotron perg-resp">
            <div class="container">
                <h2 class="display-4 text-center perg-resp-text" style="margin-bottom: 40px">Perguntas e Respostas</h2>
                <div class="perg-resp-cont">
                    <div id="accordion">
                        <?php
                        $cont_acord = 1;
                        while ($row_perg_resp = mysqli_fetch_assoc($resultado_perg_resp)) {
                            ?>
                            <div class="card">
                                <div class="card-header" id="heading<?php echo $row_perg_resp['id']; ?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo $row_perg_resp['id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $row_perg_resp['id']; ?>">
    <?php echo $row_perg_resp['pergunta']; ?>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse<?php echo $row_perg_resp['id']; ?>" class="collapse <?php if ($cont_acord == 1) {
                                        echo "show";
                                    } ?>" aria-labelledby="heading<?php echo $row_perg_resp['id']; ?>" data-parent="#accordion">
                                    <div class="card-body">
                            <?php echo $row_perg_resp['resposta']; ?>
                                    </div>
                                </div>
                            </div>
    <?php
    //show
    $cont_acord++;
}
?>
                    </div>
                </div>
            </div>
        </div>
       
       <!-- carousel--> 
       <div class="container">
         <div class="row">
             <div class="col">
                 <div class="brands_slider_container">
                     <div class="owl-carousel owl-theme brands_slider">
                         <div class="owl-item">
                             <div class="brands_item d-flex flex-column justify-content-center"><a class="navbar-brand" href="http://www.carapicuiba.sp.gov.br/"> <img src="/assets/img/logos_projeto_carapicuiba_II-03 (2).png" alt="Prefitura de Crapicuíba"></a></div>
                         </div>
                         <div class="owl-item">
                             <div class="brands_item d-flex flex-column justify-content-center"><a class="navbar-brand" href="https://pt.fifa.com/u17worldcup/"> <img src="/assets/img/FIFA.png" alt="Prefitura de Crapicuíba"></a></div>
                         </div>
                         <div class="owl-item">
                             <div class="brands_item d-flex flex-column justify-content-center"><a class="navbar-brand" href="https://futebolpaulista.com.br/Home/"> <img src="/assets/img/FPF.png" alt="Prefitura de Crapicuíba"></a></div>
                         </div>
                         <div class="owl-item">
                             <div class="brands_item d-flex flex-column justify-content-center"><a class="navbar-brand" href="https://www.cbf.com.br/"> <img src="assets/img/CBF.png" alt="Prefitura de Crapicuíba"></a></div>
                         </div>
                         
                        
                        
                        
                     </div>
                   
                 </div>
             </div>
         </div>
     </div>
        <script
src="https://code.jquery.com/jquery-1.11.3.min.js"
integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
crossorigin="anonymous"></script> <!-- remova se você já tiver o jquery sendo carregado em sua página -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<style>
/*
Created on : 24/02/2019, 13:27:07
Author : ebrahimpleite
*/
.wc_whatsapp_app {
position: fixed;
bottom: 30px;
z-index: 9999999999; /*Força o widget ficar acima de qualquer elemento*/
display: flex;
align-items: center;
}

.wc_whatsapp_app.left {
left: 15px;
}

.wc_whatsapp_app.right {
right: 15px;
}

.wc_whatsapp {
width: 50px;
height: 50px;
display: block;
border-radius: 50%;
background: #25d366;
box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
}

.wc_whatsapp:hover,
.wc_whatsapp:focus {
box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
}

.wc_whatsapp::before {
content: "";
display: block;
background: url("data:image/svg+xml;charset=UTF-8,%3csvg aria-hidden='true' focusable='false' data-prefix='icon' data-icon='whatsapp' class='svg-inline' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3e%3cpath fill='%23fff' d='M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z'%3e%3c/path%3e%3c/svg%3e") top center no-repeat;
height: 35px;
margin-top: 6px;
}

.wc_whatsapp p {
font-family: 'Arial', sans-serif;
}

.wc_whatsapp_secondary,
.wc_whatsapp_primary {
display: none;
}

.wc_whatsapp_secondary {
max-width: 300px;
}

.wc_whatsapp_secondary p {
margin-left: 15px;
border: 1px solid #e2e2e2;
padding: 5px 10px;
border-radius: 5px;
position: relative;
color: #000;
font-size: 14px;
background: #fff;
}

.wc_whatsapp_secondary p::before {
top: 20px;
left: -9px;
content: '';
position: absolute;
background: white;
border-bottom: 1px solid #e2e2e2;
border-right: 1px solid #e2e2e2;
left: -5px;
top: 50%;
margin-top: -4px;
width: 8px;
height: 8px;
z-index: 1;
-ms-transform: rotate(135deg);
-webkit-transform: rotate(135deg);
-moz-transform: rotate(135deg);
-o-transform: rotate(135deg);
transform: rotate(135deg);
}

.wc_whatsapp_primary {
border-radius: 5px;
border: 1px solid #eaeaea;
background: #fff;
padding: 10px;
bottom: 70px;
align-items: center;
max-width: 350px;
box-shadow: 7px 7px 15px 8px rgba(0, 0, 0, 0.17);
position: absolute;
width: 350px;
}

.wc_whatsapp_primary img {
width: 50px;
border-radius: 5px;
margin-left: 10px;
}

.wc_whatsapp_primary p {
margin: 20px;
border: 1px solid #e2e2e2;
padding: 10px;
border-radius: 5px;
position: relative;
color: #000;
font-size: 14px;
}

.wc_whatsapp_primary p::before {
top: 20px;
left: -9px;
content: '';
position: absolute;
background: white;
border-bottom: 1px solid #e2e2e2;
border-right: 1px solid #e2e2e2;
left: -5px;
top: 50%;
margin-top: -4px;
width: 8px;
height: 8px;
z-index: 1;
-ms-transform: rotate(135deg);
-webkit-transform: rotate(135deg);
-moz-transform: rotate(135deg);
-o-transform: rotate(135deg);
transform: rotate(135deg);
}

.wc_whatsapp_primary .close {
position: absolute;
right: 10px;
top: 10px;
font-size: 14px;
color: #000;
opacity: .5;
}

.wc_whatsapp_primary .close:hover,
.wc_whatsapp_primary .close:focus {
color: #f00;
opacity: 1;
}
</style>

<div class="wc_whatsapp_app right">
<a href="https://wa.me/5511947566744" target="_blank" class="wc_whatsapp" >
<span class="wc_whatsapp_primary">
<span class="close">x</span>
<img src="https://www.lifuca.com.br"/>
<p>Liga de Futebol de Carapicuíba</p>
</span>
</a>
<a href="https://wa.me/5511947566744" target="_blank" class="wc_whatsapp_secondary" >
<p>Sejam bem vindos!</p>
</a>
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
    
    <script>
     $(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
loop:true,
autoplay:true,
autoplayTimeout:3000,
nav:false,
dots:false,
autoWidth:true,
items:8,
margin:55
});

if($('.brands_prev').length)
{
var prev = $('.brands_prev');
prev.on('click', function()
{
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});
    </script>
 
    
</body>

