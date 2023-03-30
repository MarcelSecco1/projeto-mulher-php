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
          <a href="index.php" class="logo">
            <h1>Projeto</h1>
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
            <li class="scroll-to-section"><a href="#about-us">Sobre</a></li>
            <li class="scroll-to-section"><a href="#team">Membros</a></li>
            <li class="scroll-to-section"><a href="#depoimentos">Depoimentos</a></li>
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

<div class="main-banner" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-banner">
          <div class="item item-1">
            <div class="header-text">
              <span class="category">Informação</span>
              <h2>Boas Vindas!!</h2>
              <p>
                Scholar is free CSS template designed by TemplateMo for
                online educational related websites. This layout is based on
                the famous Bootstrap v5.3.0 framework.
              </p>
              <div class="buttons">

                <div class="icon-button">
                  <a href="https://www.instagram.com/reel/Cpk2ggfo5J8/?igshid=MDJmNzVkMjY%3D" target="_blank"><i class="fa fa-play"></i> What's Scholar?</a>
                </div>

              </div>
            </div>
          </div>
          <div class="item item-2">
            <div class="header-text">
              <span class="category">Conhecimento</span>
              <h2>O que desejamos transmitir?</h2>
              <p>
                You are allowed to use this template for any educational or
                commercial purpose. You are not allowed to re-distribute the
                template ZIP file on any other website.
              </p>

              <div class="buttons">

              </div>
            </div>
          </div>
          <div class="item item-3">
            <div class="header-text">
              <span class="category">Finalidade</span>
              <h2>Finalidade final desse projeto?</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod temporious incididunt ut labore et dolore magna
                aliqua suspendisse.
              </p>

              <div class="buttons">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Música site-->

<div class="audio-site">
  <div class="texto-audio">
    <div class="header-text">
      <h2>Sugestão de Música: </h2>
    </div>
  </div>
  <audio controls class="audio-projeto">
    <source src="audio/TRAILER OFICIA WAV.mp3" type="audio/mpeg">
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
              <h4>Online Degrees</h4>
              <p>
                Whenever you need free templates in HTML CSS, you just
                remember TemplateMo website.
              </p>
              <div class="main-button">
                <a href="pg01.php">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-02.png" alt="short courses" />
            </div>
            <div class="main-content">
              <h4>Short Courses</h4>
              <p>
                You can browse free templates based on different tags such as
                digital marketing, etc.
              </p>
              <div class="main-button">
                <a href="pg02.php">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-03.png" alt="web experts" />
            </div>
            <div class="main-content">
              <h4>Web Experts</h4>
              <p>
                You can start learning HTML CSS by modifying free templates
                from our website too.
              </p>
              <div class="main-button">
                <a href="pg03.php">Read More</a>
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
              <h4>Online Degrees</h4>
              <p>
                Whenever you need free templates in HTML CSS, you just
                remember TemplateMo website.
              </p>
              <div class="main-button">
                <a href="pg04.php">Read More</a>
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
              <h4>Online Degrees</h4>
              <p>
                Whenever you need free templates in HTML CSS, you just
                remember TemplateMo website.
              </p>
              <div class="main-button">
                <a href="pg05.php">Read More</a>
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
              <h4>Online Degrees</h4>
              <p>
                Whenever you need free templates in HTML CSS, you just
                remember TemplateMo website.
              </p>
              <div class="main-button">
                <a href="pg06.php">Read More</a>
              </div>
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
                Where shall we begin?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Dolor <strong>almesit amet</strong>, consectetur adipiscing
                elit, sed doesn't eiusmod tempor incididunt ut labore
                consectetur <code>adipiscing</code> elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Quis
                ipsum suspendisse ultrices gravida.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                How do we work together?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Dolor <strong>almesit amet</strong>, consectetur adipiscing
                elit, sed doesn't eiusmod tempor incididunt ut labore
                consectetur <code>adipiscing</code> elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Quis
                ipsum suspendisse ultrices gravida.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Why SCHOLAR is the best?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                There are more than one hundred responsive HTML templates to
                choose from <strong>Template</strong>Mo website. You can
                browse by different tags or categories.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Do we get the best support?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                You can also search on Google with specific keywords such as
                <code>templatemo business templates, templatemo gallery
                  templates, admin dashboard templatemo, 3-column
                  templatemo, etc.</code>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <div class="section-heading">
          <h6>About Us</h6>
          <h2>What make us the best academy online?</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
            ipsum suspendisse ultrices gravid risus commodo.
          </p>
          <div class="main-button">
            <a href="#">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="wrapper">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="counter">
                <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                <p class="count-text">Happy Students</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter">
                <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                <p class="count-text">Course Hours</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter">
                <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                <p class="count-text">Employed Students</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter end">
                <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                <p class="count-text">Years Experience</p>
              </div>
            </div>
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
            <img src="assets/images/member-01.jpg" alt="" />
            <span class="category">Pequisas do Site</span>
            <h4>Enzo Secco Fassani</h4>
            <ul class="social-icons">
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-member">
          <div class="main-content">
            <img src="assets/images/member-02.jpg" alt="" />
            <span class="category">Desenvolvimento do Site</span>
            <h4>Marcel Secco Rodrigues</h4>
            <ul class="social-icons">
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-member">
          <div class="main-content">
            <img src="assets/images/member-03.jpg" alt="" />
            <span class="category">Desenvolvimento dos Panfletos</span>
            <h4>Maria Eduarda da Silva Iuga</h4>
            <ul class="social-icons">
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="team-member">
          <div class="main-content">
            <img src="assets/images/member-04.jpg" alt="" />
            <span class="category">Pesquisa dos Panfletos</span>
            <h4>Maria Eduarda Violin Lima</h4>
            <ul class="social-icons">
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section testimonials" id="depoimentos">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="owl-carousel owl-testimonials">
          <div class="item">
            <p>
              “Please tell your friends or collegues about TemplateMo
              website. Anyone can access the website to download free
              templates. Thank you for visiting.”
            </p>
            <div class="author">
              <img src="assets/images/testimonial-author.jpg" alt="" />
              <span class="category"></span>
              <h4>Enzo Secco</h4>
            </div>
          </div>
          <div class="item">
            <p>
              “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Quis ipsum suspendisse ultrices gravid.”
            </p>
            <div class="author">
              <img src="assets/images/testimonial-author.jpg" alt="" />
              <span class="category">UI Expert</span>
              <h4>Maria Eduarda Violin</h4>
            </div>
          </div>
          <div class="item">
            <p>
              “Please tell your friends or collegues about TemplateMo
              website. Anyone can access the website to download free
              templates. Thank you for visiting.”
            </p>
            <div class="author">
              <img src="assets/images/testimonial-author.jpg" alt="" />
              <span class="category"></span>
              <h4>Marcel Secco</h4>
            </div>
          </div>

          <div class="item">
            <p>
              “Scholar is free website template provided by TemplateMo for
              educational related websites. This CSS layout is based on
              Bootstrap v5.3.0 framework.”
            </p>
            <div class="author">
              <img src="assets/images/testimonial-author.jpg" alt="" />
              <span class="category">Digital Animator</span>
              <h4>Maria Eduarda Iuga</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <div class="section-heading">
          <h6>DEPOIMENTOS</h6>
          <h2>Qual a finalidade desse Trabalho?</h2>
          <p>
            You can search free CSS templates on Google using different
            keywords such as templatemo portfolio , templatemo gallery,
            templatemo blue color, etc.
          </p>
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