<!DOCTYPE html>
<html lang="en">
    <?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc3/include/head.php');
    ?>

    <body>       
        <?php
            require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc3/include/navbar.php');
        ?> 

        <div class="content" title="contenido">
            <div class="section-box" id="main-header" title="banner">
                <div id="front-container">
                    <div id="name">
                        <!-- <h1 style="z-index:-1;position: absolute;font-size: 1px;">
                            TERCER SIMPOSIO DE DIVULGACIÓN DE LA CIENCIA: DIVULGACIÓN EN EL MAR DE LA DESINFORMACIÓN. DEL 25 al 27 de octubre de 2023.
                        </h1> -->
                    </div>
                    <div id="hands"></div>
                    <div id="banner-button">
                        <a id="event-button1" class="btn btn-danger" pointer="registro" role="button" href="/sdc3/programa.php" target="_blank">Ir al programa</a>
                        <a id="event-button0" class="btn btn-danger disabled" pointer="registro" role="button">Registro</a>
                    </div>
                </div>
                <div id="gradient">
                    <div id="logos-top"></div>
                </div>
            </div>


        <div class="responsive">
                <section title="noticias" id="carousel" class="section-box carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <!-- <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
                        <!-- <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
                    </div>
                    <div class="carousel-inner">
                        <!-- <div class="carousel-item active" data-bs-interval="10000">
                            <div class="centered" id="extension">
                                <h1 class="noticia-header">
                                    AVISO A LOS PARTICIPANTES
                                </h1>
                                <h1 class="active-25 noticia">
                                    A los participantes interesados en la publicación de su trabajo como memorias del Simposio favor de comunicarse a <br><br> fisica.matematicas@ibero.mx.
                                </h1>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="8000">
                            <div class="centered" id="extension">
                                <h1 class="noticia-header">
                                    AVISO
                                </h1>
                                <h1 class="active-25 noticia">
                                    El plazo de recepción de trabajos ha finalizado. <br> La lista de trabajos aceptados se publicará <br> en esta página el 25 de octubre de 2021. <br><br> El registro sin participación permanecerá abierto hasta finalizar el evento.

                                    <br><br>

                                    Agradecemos a todas las personas su registro. 
                                </h1>
                            </div>
                        </div> -->
                        <div class="carousel-item active" data-bs-interval="8000">
                            <div class="centered vertical-center" id="convocatoria">
                                <p class="active-15">
                                La Universidad Iberoamericana Ciudad de México, la Academia Mexicana de Ciencias (AMC), la Sociedad Mexicana para la Divulgación de la Ciencia y la Técnica, A.C. (SOMEDICyT) y El Colegio Nacional
                                </p>
                                                            
                                <p class="active-15" style="font-weight: bold;">CONVOCAN</p>
                                <p class="active-25">
                                a divulgadores, comunicadores, psicólogos, filósofos, académicos de todas las disciplinas, docentes, asociaciones civiles y a todo público interesado <br> a participar en el
                                </p>
                                <p style="font-weight: bold;" class="active-35">
                                    3er Simposio de Divulgación de la Ciencia: divulgación en el mar de la desinformación
                                </p>
                                <p class="active-35">
                                    que se llevará a cabo en la Universidad Iberoamericana Ciudad de México 
                                </p>
                                <p class="active-35">
                                    del 25 al 27 de octubre de 2023
                                </p>
                            </div>
                        </div>
                        <!-- <div class="carousel-item" data-bs-interval="8000">
                            <img src="/sdc3/img/alfredo-sandoval.jpg" class="d-block w-100" alt="Alfredo Sandoval Villalbazo" id="alfredo">
                            <div class="carousel-caption" id="alfredo-caption">
                                <div class="active-25">
                                    <p>
                                        <span class="active-15"> 
                                            En homenaje a <br>
                                            Dr. Alfredo Sandoval Villalbazo (1967-2021)</span><br>
                                        <span class="active-35"> Brillante investigador y asiduo divulgador de la ciencia</span>
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </section>

                <section class="section-box" id="presentacion" title="presentación">    
                    <div class="header-background">
                        <h2 class="section-header">Presentación</h2>    
                    </div>
                    <label class="screenreader-text">Presentación</label>
                    <p class="justified ">
                        En tiempos actuales, donde la digitalización y viralización de contenido hace posible que la información se transmita mucho más rápido, la desinformación ha tenido un impacto sin precedentes. Esta situación ha sido explotada con diversos intereses y motivos, lo que puede tener consecuencias en distintos niveles.<br><br>
 
                        Ante esta crisis de infodemia, tener acceso a información precisa y correcta es crucial para la toma de decisiones sobre distintos aspectos de nuestra vida: salud y familia, política, economía, medio ambiente, entre otros.<br><br>
  
                        ¿Qué es la desinformación? ¿Cuáles son los agentes de la desinformación? ¿Cuál es el papel de los medios de comunicación ante esta situación? ¿Cuáles son los canales de la desinformación? ¿Cómo se hace para reconocer la desinformación? ¿Cuál es el papel de las científicas, los científicos y divulgadores? Con el fin de dialogar sobre estas y otras preguntas relacionadas, se plantea la realización del “3er. Simposio de Divulgación de la Ciencia: divulgación en el mar de la desinformación” para facilitar un espacio de intercambio entre profesionales de diferentes disciplinas en torno a la problemática planteada.
                    </p>
                </section>

                <section class="section-box" id="objetivos" title="objetivos">
                    <div class="header-background">
                        <h2 class="section-header">Objetivos generales</h2>    
                    </div>
                    <label class="screenreader-text">Objetivos generales</label>
                    <p>El simposio tiene como objetivos:</p>

                    <ul title="lista de objetivos">
                        <li class="yes-bullet">
                            Crear un espacio de intercambio inter y transdisciplinar para facilitar el diálogo sobre el fenómeno de la desinformación.
                        </li>
                            Discutir el lugar de la comunicación de la ciencia dentro de esta crisis de infodemia.
                        <li class="yes-bullet">
                            Analizar las consecuencias de la desinformación.
                        </li>
                        <li class="yes-bullet">
                            Identificar a los agentes generadores de la desinformación y entender sus motivos.
                        </li>
                        <li class="yes-bullet">
                            Reconocer los diferentes métodos para la verificación de datos en los medios de comunicación.
                        </li>
                        <li class="yes-bullet">
                            Comprender la influencia de los algoritmos, cajas de resonancia y sesgos cognitivos presentes en las redes.
                        </li>
                        <li class="yes-bullet">
                            Proponer estrategias de reconocimiento, prevención y erradicación de la desinformación desde la perspectiva de la divulgación de la ciencia.
                        </li>
                    </ul>
                </section>

                <section class="section-box" id="temas" title="temas">
                    <div class="header-background">
                        <h2 class="section-header">Temas</h2>    
                    </div>
                    <label class="screenreader-text">Temas</label>

                    <div >
                        <p>
                            Los trabajos a presentar podrán referirse a algún análisis, investigación, experiencia, evaluación, exposición de casos y resultados en torno a cualquiera de los siguientes temas en su relación con el fenómeno de la desinformación y la divulgación de la ciencia:
                        </p>
                        <ul title="lista de temas">
                            <li class="yes-bullet">
                                Canales de comunicación.
                            </li>
                            <li class="yes-bullet">
                                Papel de los medios digitales.
                            </li>
                            <li class="yes-bullet">
                                Redes sociales.
                            </li>
                            <li class="yes-bullet">
                                Métodos de verificación de información.
                            </li>
                            <li class="yes-bullet">
                                ¿Qué es la desinformación?
                            </li>
                            <li class="yes-bullet">
                                Método científico, pensamiento crítico y pensamiento mágico
                            </li>
                            <li class="yes-bullet">
                                Opinión, creencia y datos.
                            </li>
                            <li class="yes-bullet">
                                Causas y consecuencias de la desinformación.
                            </li>
                        </ul>
                        <p>
                            O cualquier otro tema que quepa dentro de las tres grandes áreas:
                        </p>
                        <ol title="lista de temas">
                            <li class="yes-bullet">
                                ¿Qué es la desinformación?
                            </li>
                            <li class="yes-bullet">
                                ¿Cuáles son los agentes de la desinformación? (quién la genera, cómo se propaga y qué consecuencias tiene).
                            </li>
                            <li class="yes-bullet">
                                ¿Qué se puede hacer contra la desinformación?
                            </li>
                        </ol>
                        <p>
                            El abordaje de los temas podrá presentarse desde los puntos de vista de diversas disciplinas: ciencias naturales, sociales, computacionales, de la comunicación, psicología, filosofía, sociología, economía, ciencias políticas, medicina, historia, pedagogía, educación, periodismo, etc.
                        </p>
                    </div>
                </section>

                <section class="section-box" id="calendario" title="calendario">
                    <div class="header-background">
                        <h2 class="section-header">Fechas importantes</h2>    
                    </div>
                    <label class="screenreader-text">Fechas importantes</label>

                    <ul style="padding-left: 1px;" title="lista de fechas">
                        <li class="row no-bullet">
                            <div class="bold col-12 col-md-6 col-xl-5">
                                25 agosto 2023: 
                            </div>
                            <div class="col-12 col-md-6 col-xl-7">
                                Fecha límite para inscribir trabajos al Simposio.
                            </div>
                        </li>
                        <li class="row no-bullet">
                            <div class="bold col-12 col-md-6 col-xl-5">
                                15 septiembre 2023:
                            </div>
                            <div class="col-12 col-md-6 col-xl-7">
                                Publicación de trabajos aceptados.
                            </div>
                        </li>
                        <li class="row no-bullet">
                            <div class="bold col-12 col-md-6 col-xl-5">
                                29 septiembre:
                            </div>
                            <div class="col-12 col-md-6 col-xl-7">
                                Fecha final para retirar trabajos del Simposio.
                            </div>
                        </li>
                        <li class="row no-bullet">
                            <div class="bold col-12 col-md-6 col-xl-5">
                                1 de octubre: 
                            </div>
                            <div class="col-12 col-md-6 col-xl-7">
                                Fecha límite para pago de inscripción.
                            </div>
                        </li>
                        <li class="row no-bullet">
                            <div class="bold col-12 col-md-6 col-xl-5">
                                6 octubre:
                            </div>
                            <div class="col-12 col-md-6 col-xl-7">
                                Publicación del programa final
                            </div>
                        </li>
                        <li class="row no-bullet">
                            <div class="bold col-12 col-md-6 col-xl-5">
                                25 al 27 de octubre:
                            </div>
                            <div class="col-12 col-md-6 col-xl-7">
                                Simposio
                            </div>
                        </li>
                    </ul>
                </section>

                <section class="section-box" id="actividades" title="actividades">
                    <div class="header-background">
                        <h2 class="section-header">Actividades</h2>    
                    </div>
                    <label class="screenreader-text">Actividades</label>

                    <div >
                        <p>El programa incluirá las siguientes actividades:</p>
                        <ul title="lista de actividades">
                            <li class="yes-bullet">
                                Conferencias magistrales
                            </li>
                            <li class="yes-bullet">
                                Grupos de análisis y discusión.
                            </li>
                            <li class="yes-bullet">
                                Grupos de análisis y discusión 
                            </li>
                            <li class="yes-bullet">
                                Carteles
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Invitados -->
                <!-- Invitados-->

                <section class="section-box" id="registro" title="registro">
                    <div class="header-background">
                        <h2 class="section-header">Registro</h2>
                    </div>
                    <label class="screenreader-text">Registro</label>

                    <div>    
                        <p>
                            El registro al simposio e inscripción de trabajos se llevará a cabo en la siguiente liga:
                        </p>
                        <div id="regbutton" class="centered margin-bottomed" title="renglón de botón de registro">
                            <div title="botón de registro">
                                <a id="registry-button" class="btn btn-primary disabled" pointer="registro" role="button">Registro</a>
                            </div>
                        </div>
                        <p>

                        <div><h2>Costos</h2></div>
                        <div class="margin-bottomed">
                            <p>
                                El coloquio tendrá una cuota de recuperación de $300 pesos.<br><br>
                                (Liga)<br><br>
                                En caso de requerir una condonación de dicha cuota se deberá enviar un correo electrónico a anabel.arrieta@ibero.mx exponiendo los motivos.
                            </p>
                        <div><h2>Evaluación y dictamen de propuestas</h2></div>  
                        <div>
                            Los trabajos propuestos al simposio se someterán a evaluación por un Comité Evaluador ad hoc. Para la evaluación se tomará en cuenta la calidad, creatividad, originalidad y  congruencia del trabajo, así como la descripción del método, los resultados, el impacto esperado y el apego a los objetivos del simposio.<br><br>
 
                            Las decisiones serán inapelables y se publicarán en la <a class="self-link" href="http://dep.fismat.ibero.mx/sdc3/" style="font-weight:bold">página oficial del Simposio</a> a partir del 15 de septiembre indicando la modalidad en que se aceptó el trabajo.
                        </div>
                    </div>
                </section>

                <section class="section-box" id="registro" title="registro">
                    <div class="header-background">
                        <h2 class="section-header">Programa</h2>
                    </div>
                    <label class="screenreader-text">Programa</label>

                    <div>    
                        <p>
                            El programa se publicará en la <a class="self-link" href="http://dep.fismat.ibero.mx/sdc3/" style="font-weight:bold">página del coloquio</a>
                        </p>
                    </div>
                </section>

                <section class="section-box" id="comite" title="comités">
                    <div class="header-background">
                        <h2 class="section-header ">Comités Organizadores</h2>    
                    </div>
                    <label class="screenreader-text">Comités Organizadores</label>

                    <ul style="padding-left: 1px;">
                        <li class="bold margin-bottomed no-bullet">
                            <span>
                                Comité Académico
                            </span>
                        </li>
                        <li class="no-bullet">
                            <span>
                                Dr. Nemesio Chávez Arredondo, SOMEDICYT
                            </span>
                        </li>
                        <li class="no-bullet">
                            <span>
                                Dra. Susana Estela Lizano Soberón, AMC-El Colegio Nacional
                            </span>
                        </li>
                        <li class="margin-bottomed no-bullet">
                            <span>
                                Dr. Gerardo Martínez Avilés, Universidad Iberoamericana Ciudad de México
                            </span>
                        </li>
                        <li class="margin-bottomed no-bullet">
                            <span class="bold col-12 col-md-4">
                                Comité Local 
                            </span>
                        </li>
                        <li class="no-bullet">
                            <span>
                                Dra. Lorena Arias Montaño
                            </span>
                        </li>
                        <li class="no-bullet">
                            <span>
                                Dra. Anabel Arrieta Ostos
                            </span>
                        </li>
                         <li class="no-bullet">
                            <span>
                                Dra. Dominique Brun Battistini
                            </span>
                        </li>
                        <li class="no-bullet">
                            <span>
                                Ing. Agustín Payen Sandoval
                            </span>
                        </li>
                    </ul>
                </section>

                <section class="section-box" id="contacto" title="contacto">
                    <div class="header-background">
                        <h2 class="section-header">Más información y contacto</h2>    
                    </div>
                    <label class="screenreader-text">Más información y contacto</label>
                    <p class="screenreader-text">Correo electrónico: anabel.arrieta@ibero.mx</p>
                    <p class="screenreader-text">Facebook: Divulgación Ciencia Ibero</p>

                    <ul style="padding-left: 0px">
                        <li class="row no-bullet vertical-center">
                            <span class="col-2 col-md-1">
                                <img alt="email" src="/sdc3/img/email-logo.png" class="mini-logo">
                            </span>
                            <span class="col-10 col-md-11">
                                anabel.arrieta@ibero.mx
                            </span>
                        </li><br>                     
                        <li class="row no-bullet vertical-center">
                             <span class="col-2 col-md-1">
                                <img alt="facebook" src="/sdc3/img/facebook-logo.png" class="mini-logo">
                            </span>
                                
                            <span class="col-10 col-md-11">
                                Divulgación Ciencia Ibero
                            </span>
                        </li>
                    </ul>
                </section>
                <?php
                    require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc3/include/footer.php');
                ?>
            </div>
        </div>
    </body>
</html>
