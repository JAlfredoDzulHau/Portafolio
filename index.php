<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.green.css">

</head>

<body>
      <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="nav d-flex" id="home">
                <div class="logo">
                    <a href="#">
                        <img src="assets/images/Logo.png" alt="logo" class="logo-main">
                        <img src="assets/images/logo-white.png" alt="logo" class="logo-dark">

                    </a>
                </div>
                <!-- toggle icon -->
                <a href="javascript:void(0)" class="burger">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                    <span class="four"></span>

                    <div class="close-icon">
                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.4492 14.4202L29.5992 2.67518C29.8723 2.36697 30.015 1.97052 29.9988 1.56504C29.9826 1.15956 29.8087 0.774925 29.5118 0.487995C29.215 0.201065 28.8171 0.0329733 28.3977 0.0173115C27.9782 0.00164963 27.5681 0.139571 27.2492 0.403514L15.0992 12.1485L2.94924 0.387402C2.6304 0.12346 2.22028 -0.0144603 1.80082 0.00120154C1.38136 0.0168634 0.983459 0.184954 0.686635 0.471884C0.389811 0.758814 0.215923 1.14345 0.199721 1.54893C0.183519 1.95441 0.326196 2.35086 0.59924 2.65907L12.7492 14.4202L0.582573 26.1652C0.408104 26.3096 0.266403 26.4873 0.166364 26.6872C0.0663255 26.8871 0.0101078 27.1048 0.00124197 27.3267C-0.00762386 27.5486 0.0310527 27.7698 0.114844 27.9766C0.198635 28.1833 0.325732 28.3711 0.488156 28.5281C0.650581 28.6851 0.844826 28.808 1.0587 28.889C1.27258 28.97 1.50146 29.0074 1.731 28.9988C1.96053 28.9902 2.18575 28.9359 2.39252 28.8392C2.5993 28.7425 2.78316 28.6055 2.93257 28.4368L15.0992 16.6918L27.2492 28.4368C27.5681 28.7008 27.9782 28.8387 28.3977 28.823C28.8171 28.8074 29.215 28.6393 29.5118 28.3524C29.8087 28.0654 29.9826 27.6808 29.9988 27.2753C30.015 26.8698 29.8723 26.4734 29.5992 26.1652L17.4492 14.4202Z" />
                        </svg>

                    </div>
                </a>
                <div class="navigation-bar">
                    <ul id="nav">
                        <li class="active"><a href="#home">Inicio</a></li>
                        <li><a href="#about">Acerca de Mi</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#portfolio">Portafolio</a></li>
                        <li><a href="#contact">contacto</a></li>
                        <li class="darkmode-btn d-desktop">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brightness.svg" alt="brightness" class="bright">
                                <img src="assets/images/moon.svg" alt="moon" class="dark"> </a>
                        </li>
                    </ul>
                </div>
                <div class="darkmode-btn d-mobile"><a href="javascript:void(0)">
                        <img src="assets/images/brightness.svg" alt="brightness" class="bright">
                        <img src="assets/images/moon.svg" alt="moon" class="dark"> </a></div>
            </nav>
        </div>
    </header>
    <main>
        <!-- Hero section -->
        <section class="hero-section" id="home">
            <div class="container">
                <div class="hero-inner d-flex">
                    <div class="col-left">
                        <span class="sub-heading">Hola soy
                        </span>
                        <h1 class="heading">Jose Alfredo
                            <span>Dzul Hau</span>
                        </h1>
                        <h4 class="heading2">Ingeniero en Informática
                        </h4>
                        <p class="paragraph">
                            soy informático apasionado de brindar estrategias optimas con conocimientos científicos y tecnológicos para el análisis, la gestión de servicios y la identificación de necesidades de seguridad en Tecnologías de la Información. </p>
                        <div class="btn-blk">
                            <a href="#contact" class="btn btn-blue">Negociamos</a>
                            <a href="#portfolio" class="btn btn-black">Ver proyectos</a>
                        </div>
                        <div class="social">
                            <ul>
                                <li class="social-icon"><a href="https://www.linkedin.com/in/josealfredodzulhau/"><img
                                            src="assets/images/social-icons/linkedin.png" alt="linkedin"></a>
                                </li>
                                <li class="social-icon"><a href="#"><img
                                            src="assets/images/social-icons/gmail.png" alt="gmail"></a>
                                </li>
                                <li class="social-icon"><a href="#"><img
                                            src="assets/images/social-icons/facebook.png" alt="facebook"></a>
                                </li>
                                <li class="social-icon"><a href="https://github.com/JAlfredoDzulHau"><img
                                            src="assets/images/social-icons/github.png" alt="github"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-right">
                        <img class="image-main" src="assets/images/thumbnail-1.png" alt="user image">
                        <img class="image-darkmode" src="assets/images/thumbnail-2.png" alt="user image">
                    </div>
                </div>
            </div>
        </section>

        <!-- features -->
        <section class="features">
            <div class="container">
                <div class="features-inner d-grid">
                    <div class="feature-item d-flex">
                        <div class="icon d-flex color1">
                            <img src="assets/images/experience.svg" alt="experience">
                        </div>
                        <div>
                            <h3>2 Años</h3>
                            <p>Experiencia</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex">
                        <div class="icon d-flex color2">
                            <img src="assets/images/happy-clients.svg" alt="happy clients ">
                        </div>
                        <div>
                            <h3>5</h3>
                            <p>Clientes felices</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex">
                        <div class="icon d-flex color3">
                            <img src="assets/images/projects-completed.svg" alt="happy clients ">
                        </div>
                        <div>
                            <h3>5</h3>
                            <p>Proyectos completados</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex">
                        <div class="icon d-flex  color4">
                            <img src="assets/images/awards-won.svg" alt="awards ">
                        </div>
                        <div>
                            <h3>10+</h3>
                            <p>Premios ganados
</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About -->
        <section class="about ptb-100" id="about">
            <div class="container">
                <div class="about-inner d-flex">
                    <div class="about-col-left">
                        <img src="assets/images/Perfil.png" alt="about">
                    </div>
                    <div class="about-col-right">
                        <h2 class="about-heading">Acerca de Mi</h2>
                        <h3 class="about2">Que tal!, Mi Nombre es Jose Alfredo
                            Ingeniero en Informática </h3>
                        <p class="about3">Competente en el diseño, desarrollo, implementación y administración de servicios informáticos y gestión de proyectos con una visión sistémica, tecnológica y estratégica, ofreciendo soluciones innovadoras e integrales a las organizaciones, de acuerdo con las necesidades globales, actuales y emergentes, comprometido con el entorno, desempeño actitud ética, emprendedora y de liderazgo. 
                    <div class="row">
                      <div class="col-lg-6">
                        <ul>
                          <li><i class="icofont-rounded-right"></i> <strong>Sitio Web:</strong> https://jalfredodzulhau.systems</li>
                          <li><i class="icofont-rounded-right"></i> <strong>Teléfono Cel:</strong> +52 996 109 58 64</li>
                          <li><i class="icofont-rounded-right"></i> <strong>Ciudad:</strong> Calkiní, Campeche, México</li>
                        </ul>
                      </div>
                      <div class="col-lg-6">
                        <ul>
                          <li><i class="icofont-rounded-right"></i> <strong>Licenciatura:</strong> Ing.Informática</li>
                          <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> JAlfredoDzulHau@gmail.com</li>
                        </ul>
                      </div>
                    </div>

                        </p>
                        <div class="about-btn-blk">
                            <a href="https://drive.google.com/file/d/1yJaR8305Xq2NWNeMn0fIeioIp3P4WnEa/view?usp=sharing" class="btn btn-blue about-btn">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience -->
        <section class="experience ptb-100">
            <div class="container">
                <h2>Experiencia en </h2>
                <div class="experience-inner d-grid">
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>HTML</h3>
                            <h4>95%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:95%">

                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>CSS</h3>
                            <h4>85%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:85%">

                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>JAVASCRIPT</h3>
                            <h4>90%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:90%">

                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>PHP</h3>
                            <h4>80%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:80%">

                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>PHYTON</h3>
                            <h4>96%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:96%">

                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>C#</h3>
                            <h4>96%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:96%">

                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>JAVA</h3>
                            <h4>75%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:75%">

                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="progressbar-item">
                        <div class="progressbar-content d-flex">
                            <h3>React Js</h3>
                            <h4>70%</h4>
                        </div>
                        <div class="progessbar-bg">
                            <div class="progressbar-size" style="width:70%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services ptb-100" id="services">
            <div class="container">
                <h2>Servicios</h2>
                <div class="services-inner d-grid">
                    <!-- item -->
                    <div class="services-block">
                        <div class="service-icon color1 d-flex">
                            <img src="assets/images/services/lista-de-verificacion.png" alt="ui design">
                        </div>
                        <h3>Software Testing</h3>
                        <p>Mi objetivo es que el sistema falle y buscar los errores que sean necesarios para asegurar la calidad del software.</p>
                    </div>
                    <!-- item -->
                    <div class="services-block">
                        <div class="service-icon color2 d-flex">
                            <img src="assets/images/services/programacion-web.png" alt="web dev">
                        </div>
                        <h3>Web development</h3>
                        <p>Programación, diseño y desarrollo de sitios web específicos para la empresa y creación y administración de bases de datos vinculadas a esas webs.</p>
                    </div>
                    <!-- item -->
                    <div class="services-block">
                        <div class="service-icon color3 d-flex">
                            <img src="assets/images/services/mobile-app.png" alt="illustration">
                        </div>
                        <h3>Mobile app developer</h3>
                        <p>Resolver problemas a través de aplicaciones y/o plataformas móviles, diseñar interfaces sencillas de entender, programar y analizar y corregir problemas de las aplicaciones.</p>
                    </div>
                    <!-- item -->
                    <div class="services-block">
                        <div class="service-icon color4 d-flex">
                            <img src="assets/images/services/search-engine-optimization.png" alt="SEO ">
                        </div>
                        <h3>SEO </h3>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                            Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker
                            including
                            versions of Lorem Ipsum.</p>
                    </div>
                    <!-- item -->
                    <div class="services-block">
                        <div class="service-icon color5 d-flex">
                            <img src="assets/images/services/administracion.png" alt="Content writing ">
                        </div>
                        <h3>Administración de servidores </h3>
                        <p>Gestionar el sistema operativo del servidor, mantener la integridad del rendimiento del servidor, instalar y configurar el software nuevo y las actualizaciones, solucionar problemas y actualizar la información de cuentas de usuario (añadir/eliminar usuarios y restablecer contraseñas). También se realizan copias de seguridad de rutina; integrar las nuevas tecnologías; gestionar redes; y aplicar las actualizaciones, revisiones y cambios de configuración para el sistema operativo.</p>
                    </div>
                    <!-- item -->
                    <div class="services-block">
                        <div class="service-icon color6 d-flex">
                            <img src="assets/images/services/la-red.png" alt="youtube ">
                        </div>
                        <h3>Seguridad en redes </h3>
                        <p>Identificar los requerimientos de normativas, servicios o software necesarios para implementar, mejorar y garantizar la eficacia del protocolo de seguridad informática, garantizando la integridad, la confidencialidad y la protección de todos los activos de la empresa a nivel tecnológico.</p>
                    </div>
                    <!-- item -->
                    <div class="services-block">
                        <div class="service-icon color6 d-flex">
                            <img src="assets/images/services/base-de-datos.png" alt="youtube ">
                        </div>
                        <h3>Administración de BD </h3>
                        <p>Manejo, mantenimiento, desempeño y de la confiabilidad de bases de datos. Asimismo, nos encargamos de la mejora y diseño de nuevos modelos de las mismas.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA -->
        <section class="cta">
            <div class="container">
                <div class="cta-inner d-flex">
                    <div class="cta-content">
                        <h3>¿Tienes un proyecto en mente?</h3>
                        <p>¡Obtenga un presupuesto GRATIS! </p>
                    </div>
                    <a href="#contact" class="btn btn-default ">Contactame Ahora</a>
                </div>
            </div>
        </section>
        <!-- projects -->
        <section class="projects ptb-100" id="portfolio">
            <div class="container">
                <h2>Proyectos Recientes</h2>
                <div class="projects-inner d-grid">
                    <!-- item -->
                    <div class="project-item">
                        <div class="project-image">
                            <img src="assets/images/projects/1.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h3>Sistema Web AgroTec</h3>
                            <div class="project-view d-flex">
                                <span>Frontend y Backend</span>
                                <a href="javascript:void(0)" class="btn-view">View </a>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="project-item">
                        <div class="project-image">
                            <img src="assets/images/projects/2.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h3>Web development</h3>
                            <div class="project-view d-flex">
                                <span>Front-end developemnt</span>
                                <a href="javascript:void(0)" class="btn-view">View </a>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="project-item">
                        <div class="project-image">
                            <img src="assets/images/projects/3.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <h3>Logo design</h3>
                            <div class="project-view d-flex">
                                <span>Graphic Design</span>
                                <a href="javascript:void(0)" class="btn-view">View </a>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="project-item">
                        <div class="project-image">
                            <img src="assets/images/projects/4.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <h3>Application design</h3>
                            <div class="project-view d-flex">
                                <span>UI/ux Design</span>
                                <a href="javascript:void(0)" class="btn-view">View </a>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="project-item">
                        <div class="project-image">
                            <img src="assets/images/projects/5.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <h3>Youtube marketing</h3>
                            <div class="project-view d-flex">
                                <span>Digital Marketing</span>
                                <a href="javascript:void(0)" class="btn-view">View </a>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="project-item">
                        <div class="project-image">
                            <img src="assets/images/projects/6.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <h3>Webflow</h3>
                            <div class="project-view d-flex">
                                <span>Webflow developement</span>
                                <a href="javascript:void(0)" class="btn-view">View </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-more-block">
                    <a href="#" class="btn btn-outline">View more</a>
                </div>
            </div>
        </section>
        <!-- Testmonial -->
        <section class="testmonial">
            <div class="container">
                <div class="testmonial-inner">
                    <h2>Clientes Felices </h2>
                    <div class="testmonial-slider owl-carousel owl-theme">
                        <!-- item -->
                        <div class="testmonial-item">
                            <h3>Ui design project</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum is
                                simply
                                dummy text of the printing and typesetting industry. simply dummy text of the
                                printing
                                and
                                typesetting industry. </p>
                            <div class="client-data d-flex">
                                <img src="assets/images/client-1.png" alt="client thumb">
                                <h4>Bob Frapples
                                    <br> <span>CEO Finance</span>
                                </h4>

                            </div>
                        </div>
                        <!-- item -->
                        <div class="testmonial-item">
                            <h3>Expert front-end developer</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum is
                                simply
                                dummy text of the printing and typesetting industry. simply dummy text of the
                                printing
                                and
                                typesetting industry. </p>
                            <div class="client-data d-flex">
                                <img src="assets/images/client-2.png" alt="client thumb">
                                <h4>Brock Lee
                                    <br> <span>Finace expert</span>
                                </h4>

                            </div>
                        </div>
                        <!-- item -->
                        <div class="testmonial-item">
                            <h3>Ui design project</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum is
                                simply
                                dummy text of the printing and typesetting industry. simply dummy text of the
                                printing
                                and
                                typesetting industry. </p>
                            <div class="client-data d-flex">
                                <img src="assets/images/client-1.png" alt="client thumb">
                                <h4>Bob Frapples
                                    <br> <span>CEO Finance</span>
                                </h4>

                            </div>
                        </div>
                        <div class="testmonial-item">
                            <h3>Expert front-end developer</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum is
                                simply
                                dummy text of the printing and typesetting industry. simply dummy text of the
                                printing
                                and
                                typesetting industry. </p>
                            <div class="client-data d-flex">
                                <img src="assets/images/client-2.png" alt="client thumb">
                                <h4>Brock Lee
                                    <br> <span>Finace expert</span>
                                </h4>

                            </div>
                        </div>
                        <!-- item -->
                        <div class="testmonial-item">
                            <h3>Ui design project</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum is
                                simply
                                dummy text of the printing and typesetting industry. simply dummy text of the
                                printing
                                and
                                typesetting industry. </p>
                            <div class="client-data d-flex">
                                <img src="assets/images/client-1.png" alt="client thumb">
                                <h4>Bob Frapples
                                    <br> <span>CEO Finance</span>
                                </h4>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Me -->
        <section class="contact ptb-100" id="contact">
            <div class="container">
                <h2>Contactame</h2>
                <form id="basic-form" action="" method="POST">
                    <div class="contact-inner d-flex">
                        <div class="input-block form-item">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" required>
                        </div>
                        <div class="input-block form-item">
                            <label for="">Apellido</label>
                            <input type="text" name="apellido" required>
                        </div>
                        <div class="input-block form-item">
                            <label for="">Email</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="input-block form-item">
                            <label for="">Teléfono</label>
                            <input type="text" name="telefono" required>
                        </div>

                        <div class="textarea form-item">
                            <label for="">Tú mensaje</label>
                            <textarea name="mensaje" id="" required></textarea>
                        </div>
                        <div class="submit-btn form-item">
                            <button type="submit" name="submit" class="btn btn-blue"> Enviar Mensaje</button>

                        </div>
                </form>
            </div>
        </section>
        </div>
    </main>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-inner">
                <a href="#" class="footer-logo"><img src="assets/images/logo-white.png" alt="Footer logo"></a>
                <div class="footer-nav">
                    <ul>
                        <li class="f-navlinks"><a href="#home">Inicio</a></li>
                        <li class="f-navlinks"><a href="#about">Acerca De Mi</a></li>
                        <li class="f-navlinks"><a href="#services">Servicios</a></li>
                        <li class="f-navlinks"><a href="#portfolio">Portafolio</a></li>
                        <li class="f-navlinks"><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-bottom d-flex">
                    <p class="copyright">Jose Alfredo Dzul Hau © Copyright 2021. All Right Reserved.</p>
                    <div class="footer-social">
                        <a href="#" class="footer-social"><img src="assets/images/social-icons/feather_instagram.svg"
                                alt="instagram"></a>
                        <a href="#" class="footer-social"><img src="assets/images/social-icons/feather_linkedin.svg"
                                alt="linkedin"></a>
                        <a href="#" class="footer-social"><img src="assets/images/social-icons/feather_github.svg"
                                alt="github"></a>
                        <a href="#" class="footer-social"><img src="assets/images/social-icons/feather_dribbble.svg"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Project view modal -->
    <div class="modal-container">
        <div class="modal">
            <div class="modal-image">
                <img src="assets/images/projects/1.png" alt="image">
            </div>
            <div class="modal-content">

                <h3>Cree un sistema web AgroTec para cultivos</h3>
                <p class="requirments">Los requisitos del cliente era crear simulador preditivo de datos edafoclimáticos para la producción de hortalizas del camino real de calkiní</p>

                <ul>
                    <li><span>Skills:-</span> HTML, CSS, BOOTSTRAP 4, JAVASCRIPT, JQuery, Chart.js, API de Google</li>
                    <li><span>Project duration: </span>6 meses</li>
                    <li><span>Project url:-</span> <a
                            href="https://agronomicsystem.jalfredodzulhau.com/bienvenida.php">https://agronomicsystem.jalfredodzulhau.com/bienvenida.php</a>
                    </li>
                </ul>

                <div class="close-btn">
                    <a href="javascript:void(0)" class="btn btn-blue close-modal">Cerrar Modal</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll up -->
    <a href="javascript:void(0)" class="scrollup">
        <img src="assets/images/uparrow.svg" alt="arrow up">
    </a>

      <script type="text/javascript">
        if(window.history.replaceState){
          window.history.replaceState(null, null, window.location.href);
        }
      </script>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/gumshoe/dist/gumshoe.polyfills.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        $("#basic-form").validate();
    });
</script>

</html>