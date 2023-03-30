<?php
$_SESSION["pag"] = "Tema 5";
require("header.php");
?>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<nav class="voltar">
    <div class="container px-5">
        <div class="texto-nav pt-3">
        <a class="navbar-brand" href="index.php#services">
                <i class="bi bi-reply-fill"></i>
                Voltar
            </a>
        </div>
    </div>
</nav>


<div class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">
                        O que é Diplomacia?
                    </h1>
                    <p class="lead fw-normal text-muted mb-4">
                        Diplomacia consiste na atuação do representante profissional denominado diplomata, em
                        estabilizar e
                        defender os interesses internacionais de um país, preservando os relacionamentos com
                        outros domínios no
                        mercado exterior.
                    </p>
                    <a class="btn cor-btn btn-lg" href="#scroll-target">Leia mais</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="imagem/img-sobre1.png" alt="..." />
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Como funciona a Diplomacia:</h2>
                <p class="lead fw-normal text-muted mb-0 mt-2">
                    Como já mencionado, a função da diplomacia é visar um relacionamento benéfico entre nações.
                    Além disso,
                    essa área possui tarefas como a participação do representante (diplomata) do país em eventos
                    internacionais; promover a cultura do país de origem no mercado externo; planejar acordos
                    que visam
                    estimular a economia internacional; proteção e negociação dos interesses do país em que o
                    representante
                    está instalado, e até mesmo a resolução de conflitos externos, evitando uma possível revolta
                    (guerra).
                </p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="imagem/img-sobre2.png" alt="..." />
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Diplomata e onde atua:</h2>
                <p class="lead fw-normal text-muted mb-0 mt-2">
                    A função de diplomata pode ser exercida por diversos profissionais nos países em que estão
                    alocados,
                    podendo atuar também em seus países de origem. No caso do Brasil, o representante que atuar
                    no território
                    brasileiro irá trabalhar em departamentos do Ministério das Relações Exteriores em Brasília,
                    ou em
                    entidades pertencentes à Organização das Nações Unidas, a ONU, que atuam no país. Já em
                    outros países, o
                    diplomata realiza seu trabalho em embaixadas (embaixador), responsáveis pelas relações com o
                    país no qual
                    ele está instalado. Podendo atuar também em consulados (cônsul), que são mais atribuídos em
                    questões
                    relacionadas à população, sendo ambas as funções complementares. Em outros casos, o
                    profissional pode
                    trabalhar em departamentos especializados da ONU ou em missões internacionais
                    especializadas.

                </p>
            </div>
        </div>
    </div>
</section>
</main>
<?php
require("footer.php");
?>