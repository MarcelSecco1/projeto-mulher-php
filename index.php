<?php
session_start();
$_SESSION["pag"] = "Projeto Filosofia";
if (isset($_SESSION["msg"]) && $_SESSION["msg"] == true) {
?>
  <script>
    alert("Muito obrigado pelo contato <?= $_SESSION["nome"] ?>!! Responderemos assim que possível!")
  </script>

<?php
  session_unset();
  header("Refresh:1");
} elseif (isset($_SESSION["msg"]) && $_SESSION["msg"] == false) {
?>
  <script>
    alert("Ouve um erro de preenchimento, tente novamente!!")
  </script>
<?php
  session_unset();
  header("Refresh:1");
}
require("header.php");
require "conexao.php";
?>
<!-- ***** Preloader Start *****  -->
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
<!--***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.php" class="mt-2">
            <h3 class="text-white mt-3">FAKE IS</h3>
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section">
              <a href="#top" class="active">Home</a>
            </li>
            <li class="scroll-to-section">
              <a href="#services">Temas</a>
            </li>
            <li class="scroll-to-section"><a href="#conclusao">Conclusão</a></li>
            <li class="scroll-to-section"><a href="#about-us">Destaques</a></li>
            <li class="scroll-to-section"><a href="#team">Membros</a></li>
            <li class="scroll-to-section"><a href="#contact">Contato</a></li>
          </ul>
          <a class="menu-trigger">
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="main-banner banner" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-banner">
          <div class="item item-1">
            <img src="assets\images\Banner1.png" class="img-item1 rounded-4">
          </div>

          <div class="item item-2">
            <img src="assets\images\Banner2.png" class="img-item1 rounded-4">
          </div>
          <div class="item item-3">
            <div class="header-text">
              <img src="assets\images\Banner4.png" class="img-item1 rounded-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Música site-->

<div class="audio-site">
  <div class="texto-audio mt-5">
    <div class="header-text">
      <h2 class="mt-4">Sugestão de Música: </h2>
    </div>
  </div>
  <audio controls class="audio-projeto">
    <source src="assets\audio\Francisco el Hombre - Triste Louca ou Má (OFICIAL).mp3" type="audio/mpeg">
  </audio>
</div>
<div class="pai">
  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="online degrees" />
            </div>
            <div class="main-content">
              <h4>Personificação <br>do mal:</h4>
              <p>
                As fake news (fatos falsos) criadas por homens influenciaram duramente a vidas das mulheres<a href="pg01.php" class="text-primary">...</a>
              </p>
              <div class="main-button">
                <a href="pg01.php">Ler mais...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="short courses" />
            </div>
            <div class="main-content">
              <h4>Inquisição às bruxas:</h4>
              <p>
                O conservadorismo dizimou milhares A fogueira ainda queima. As bruxas ainda são caçadas e não<a href="pg02.php" class="text-primary">...</a>
              </p>
              <div class="main-button">
                <a href="pg02.php">Ler mais...</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="web experts" />
            </div>
            <div class="main-content">
              <h4>O padrão da beleza:</h4>
              <p>
                A tentativa de padronizar os corpos femininos e limitar a liberdade das mulheres está presente no nosso cotidiano<a href="pg03.php" class="text-primary">...</a>
              </p>
              <div class="main-button">
                <a href="pg03.php">Ler mais...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="online degrees" />
            </div>
            <div class="main-content">
              <h4>Educação feminina:</h4>
              <p>
                A educação é a única forma de interromper o ciclo de disseminação de fake news (Agência Senado).<a href="pg04.php" class="text-primary">...</a>
              </p>
              <div class="main-button">
                <a href="pg04.php">Ler mais...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="online degrees" />
            </div>
            <div class="main-content">
              <h4>Conquista e desigualdade:</h4>
              <p>
                A conquista da cidadania feminina foi consolidada pelo direito ao voto, aumentando sua liberdade. Entretanto, a<a href="pg05.php" class="text-primary">...</a>
              </p>
              <div class="main-button">
                <a href="pg05.php">Ler mais...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="online degrees" />
            </div>
            <div class="main-content">
              <h4>Direitos<br>femininos:</h4>
              <p>
                Atualmente, a luta pelo direito das mulheres ainda é árdua e, mesmo já tendo conquistado muito, ainda.<a href="pg06.php" class="text-primary">...</a>
              </p>
              <div class="main-button">
                <a href="pg06.php">Ler mais...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section fun-facts" id="conclusao">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="wrapper">
          <div class="row">
            <div class="col-lg-12 col-md-6">
              
                <!--<h3 class="text-white">
                  Conclusão:
                </h3>
-->
                <p class="count-text text-dark">
                  A construção social histórica de subordinação da mulher está intimamente atrelada às questões de gênero, questões essas que submetiam a mulher a uma figura de frágil e pecadora, e por assim ser, devendo ficar condicionada a uma posição de inferioridade. Ideias como essas foram transmitidas de geração a geração, a diversos povos e culturas, fortalecendo a ideia de que a mulher tinha como papel exclusivo o de ser mãe e dona de casa.
                </p>
                <p class="count-text text-dark">
                  Podemos perceber que essa construção está amplamente evidenciada, através dos diferentes papeis ocupados por homens e mulheres na sociedade, e que ao longo dos anos têm marcado as mulheres com desigualdade, preconceito e discriminação, afetando-as como um todo, moralmente, fisicamente e psicologicamente, trata-se de uma historia escrita pelo silêncio de uma sociedade patriarcal onde se tinha um império do domínio masculino.
                </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about-us section" id="about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Silvia Federici (1942-)
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p><i>"As diferenças não são o problema, o problema é a hierarquia."</i></p><br>
                <p>Ativista feminista, filósofa, escritora e professora italiana.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Simone de Beauvoir (1908-1986)
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p><i>“Ninguém nasce mulher: torna-se mulher.”</i></p><br>
                <p>Escritora francesa, filósofa existencialista, memorialista e feminista.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Malala Yousafzai (1997-)

              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p><i>"Eu decidi que não há nada de errado em se considerar feminista. Então, eu sou uma feminista e todas nós deveríamos ser feministas, porque feminismo é uma outra palavra para igualdade."</i></p><br>
                <p>Ativista paquistanesa e pessoa mais jovem a receber um prêmio Nobel.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Djamila Ribeiro (1980-)
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p><i>“Minha luta diária é para ser reconhecida como sujeito, impor minha existência numa sociedade que insiste em negá-la.”</i></p><br>
                <p>Filósofa, ativista social, professora e escritora brasileira.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <div class="section-heading">
          <h6>Referências femininas:</h6>
          <h2>Você conhece elas??</h2>
          <p>
            O destaque das mulheres é evidente em qualquer ambito, e na ciência não poderia ser diferente. Veja ao lado algumas mulheres que provaram que lugar de mulher é onde ela quiser!
          </p>
          <div class="main-button">
            <a href="https://www.instagram.com/reel/Cpk2ggfo5J8/?utm_source=ig_web_copy_link" target="_blank">Veja mais...</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="team section" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="team-member">
          <div class="main-content">
            <img src="assets/images/enzo.png" alt="" />
            <span class="category">Organização e elaboração de conteúdo</span>
            <h4>Enzo Secco Fassani</h4>
            <ul class="social-icons">
              <li>
                <a href="https://instagram.com/enzosfassani?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/enzofazzani?t=wLVSgq6Gi8eYuil2uPhUaQ&s=08"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/enzo-secco-fassani-66127426a"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-member">
          <div class="main-content">
            <img src="assets/images/eu.png" alt="" />
            <span class="category">Desenvolvimento do Site</span>
            <h4>Marcel Secco Rodrigues</h4>
            <ul class="social-icons">
              <li>
                <a href="https://instagram.com/m.secco99"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/MarcelSecco"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/marcel-secco-658081266"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6">
        <div class="team-member">
          <div class="main-content">
            <img src="assets/images/duarda.png" alt="" />
            <span class="category">Desenvolvimento de pesquisas, imagens e cartazes</span>
            <h4>Maria Eduarda da Silva Iuga</h4>
            <ul class="social-icons">
              <li>
                <a href="https://instagram.com/madu_iuga?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/dudaiuga?s=11&t=JL5gHf0Xpct_70o0MdJ3Og"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/maria-eduarda-iuga-3572ba271"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-member">
          <div class="main-content">
            <img src="assets/images/lima.png" alt="" />
            <span class="category">Produção das artes para divulgação</span>
            <h4>Maria Eduarda Violin Lima</h 4>
              <ul class="social-icons">
                <li>
                  <a href="https://instagram.com/madu_violin?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://twitter.com/eduarda_violin?s=21"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/maria-eduarda-violin-lima-0a100926a"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="contact-us section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="section-heading">
          <h6>Contato:</h6>
          <h2>Preencha para obter nosso contato:</h2>
          <p>
            Muito obrigado por ler e prestigiar nosso site, caso tenha
            alguma dúvida ou deseja entrar em contato com a nossa equipe,
            preencha o formúlario.
          </p>
          <div class="special-offer">
            <span class="offer"></span>
            <h6>Construído em: <em>09 de Março, 2023</em></h6>
            <h4>Atenciosamente: <em>Alunos Informática</em></h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-us-content">

          <form id="contact-form" action="gravar.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Seu nome..." autocomplete="on" required />
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu e-mail..." required="" />
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Sua mensagem..."></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">
                    Enviar Mensagem
                  </button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php

require("footer.php");
?>