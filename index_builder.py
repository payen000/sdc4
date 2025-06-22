import pandas

FECHA_TRABAJOS_ACEPTADOS = "19 de septiembre"
BANNER = """
<div class="section-box" id="main-header" title="banner">
    <div id="front-container">
        <div id="name"></div>
        <div id="banner"></div>
        <div id="banner-button">
            <a
                id="event-button0"
                class="btn btn-primary"
                pointer="registro"
                role="button"
                target="_blank"
                href=#
            >
                Registro para participar
            </a>
        </div>
    </div>
    <div id="gradient">
        <div id="logos-top"></div>
    </div>
</div>
"""
CARRUSEL = """
<section title="noticias" id="carousel" class="section-box carousel slide carousel-dark" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    </div>
    <div class="carousel-inner">
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
                    4to Simposio de Divulgación de la Ciencia: en el mar de la desinformación
                </p>
                <p class="active-35">
                    que se llevará a cabo en la Universidad Iberoamericana Ciudad de México 
                </p>
                <p class="active-35">
                    del 25 al 27 de octubre de 2023
                </p>
            </div>
        </div>
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
"""
PRESENTACION = """
<section class="section-box" id="presentacion" title="presentación">
    <div class="header-background">
        <h2 class="section-header">Presentación</h2>
    </div>
    <label class="screenreader-text">Presentación</label>
    <p class="justified ">
        En tiempos actuales, donde la digitalización y viralización de contenido hace posible que la información se transmita mucho más rápido, la desinformación ha tenido un impacto sin precedentes. Esta situación ha sido explotada con diversos intereses y motivos, lo que puede tener consecuencias en distintos niveles.<br><br>

        Ante esta crisis de infodemia, tener acceso a información precisa y correcta es crucial para la toma de decisiones sobre distintos aspectos de nuestra vida: salud, familia, política, economía, medio ambiente, entre otros.<br><br>

        ¿Qué es la desinformación? ¿Cuáles son los agentes de la desinformación? ¿Cuál es el papel de los medios de comunicación ante la desinformación? ¿Cuáles son los canales de la desinformación? ¿Cómo se reconoce la desinformación? ¿Cómo pueden contribuir las científicas, los científicos y divulgadores a combatir la desinformación? Con el fin de dialogar sobre estas y otras preguntas relacionadas, se plantea la realización del “3er Simposio de Divulgación de la Ciencia: en el mar de la desinformación” para facilitar un espacio de intercambio entre profesionales de diferentes disciplinas en torno a la problemática de la desinformación.
    </p>
</section>
"""

REGISTRO = f"""
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
                <a
                    id="registry-button"
                    class="btn btn-primary disabled-button disabled"
                    pointer="registro"
                    role="button"
                    target="_blank"
                    aria-disabled="true"
                >Registro de trabajos pendiente</a>
            </div>
        </div>

        <div><h2>Costos</h2></div>
        <div class="margin-bottomed">
            <p>
                El simposio tendrá una cuota de recuperación de $300 pesos.<br><br>
                En caso de requerir una condonación de dicha cuota se deberá enviar un correo electrónico a anabel.arrieta@ibero.mx exponiendo los motivos.
            </p><br>
        <div><h2>Evaluación y dictamen de propuestas</h2></div>  
        <div>
            Los trabajos propuestos al simposio se someterán a evaluación por un Comité Evaluador ad hoc.
            Se tomará en cuenta la calidad, creatividad, originalidad y congruencia del trabajo,
            así como la descripción del método, los resultados, el impacto esperado y el apego a los objetivos
            del simposio.<br><br>

            Las decisiones serán inapelables y se publicarán en la <a class="self-link" href="https://dep.fismat.ibero.mx/sdc4/" style="font-weight:bold">página oficial del Simposio</a> a partir del {FECHA_TRABAJOS_ACEPTADOS} indicando la modalidad en que se aceptó el trabajo.
        </div>
    </div>
</section>
"""


def objectivos_html():
    objetivos_template = """
        <section class="section-box" id="objetivos" title="objetivos">
            <div class="header-background">
                <h2 class="section-header">Objetivos generales</h2>
            </div>
            <label class="screenreader-text">Objetivos generales</label>
            <p>El simposio tiene como objetivos:</p>

            <ul title="lista de objetivos">
                %s
            </ul>
        </section>
    """
    bullet_template = """
        <li class="yes-bullet">
            %s
        </li>
    """
    with open("objetivos.txt", "r") as f:
        lines = f.readlines()
        objetivos_html = [bullet_template % objetivo for objetivo in lines]
    
    return objetivos_template % "\n".join(objetivos_html)


def temas_html():
    temas_template = """
        <section class="section-box" id="temas" title="temas">
            <div class="header-background">
                <h2 class="section-header">Temas</h2>
            </div>
            <label class="screenreader-text">Temas</label>
                %s
            <div>
                <ul title="lista de temas">
                </ul>
                <p class="justified">
                    Se aceptarán propuestas que aborden estos temas desde una perspectiva interdisciplinaria,
                    integrando áreas como ciencias naturales, sociales, computacionales, comunicación, filosofía,
                    pedagogía, arte, diseño, entre otras.
                </p>
            </div>
        </section>
    """
    tema_template = """
        <li class="yes-bullet">
            %s
        </li>
    """
    with open("temas.txt", "r") as f:
        lines = f.readlines()
        temas_html = [tema_template % tema for tema in lines]
    
    return temas_template % "\n".join(temas_html)


def calendario_html():
    calendario_template = """
        <section class="section-box" id="calendario" title="calendario">
            <div class="header-background">
                <h2 class="section-header">Fechas importantes</h2>
            </div>
            <label class="screenreader-text">Fechas importantes</label>

            <ul style="padding-left: 1px;" title="lista de fechas">
                %s
            </ul>
        </section>
    """
    fecha_template = """
        <li class="row no-bullet">
            <div class="bold col-12 col-md-6 col-xl-5">
                %s: 
            </div>
            <div class="col-12 col-md-6 col-xl-7">
                %s
            </div>
        </li>
    """
    with open("fechas.txt") as f:
        lines = f.readlines()
        fechas = [fecha_template % (fecha.split("-")[0], fecha.split("-")[1]) for fecha in lines]

    return calendario_template % "\n".join(fechas)


def actividades_html():
    actividades_template = """
        <section class="section-box" id="actividades" title="actividades">
            <div class="header-background">
                <h2 class="section-header">Actividades</h2>
            </div>
            <label class="screenreader-text">Actividades</label>

            <div >
                <p>El programa incluirá las siguientes actividades:</p>
                <ul title="lista de actividades">
                    %s
                </ul>
            </div>
        </section>
    """
    actividad_template = """
        <li class="yes-bullet">
            %s
        </li>
    """
    with open("actividades.txt", "r") as f:
        lines = f.readlines()
        actividades = [actividad_template % actividad for actividad in lines]

    return actividades_template % "\n".join(actividades)


def invitados_html():
    invitados_template = """
        <section class="section-box" id="invitados" title="invitados">
            <div class="header-background">
                <h2 class="section-header">Invitados</h2>
            </div>
            <label class="screenreader-text">Invitados</label>

            %s
        </section>
    """
    card_template = """
        <div class="card invitado">
            <div class="row card-row">
                <div class="col-3">
                    <img src="/sdc4/img/%s.png" class="photograph vertical-center">
                </div>
                <div class="col-6 lefted">
                    <div class="vertical-center">
                        <h5 class="name-in-card">%s</h5>
                    </div>
                </div>
                <div class="col-3 centered">
                    <button
                        class="btn btn-primary card-button row-button vertical-center collapsed"
                        type="button" data-bs-toggle="collapse"
                        data-bs-target="#invitado%s" aria-expanded="false"
                        aria-controls="invitado%s"
                        title="expandir información"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor"
                        class="bi bi-caret-down-fill" viewBox="0 0 16 16"
                    >
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path></svg>
                    </button>
                </div>
            </div>
            <div class="multi-collapse collapse" id="invitado%s" style="">
                <div class="card-body">
                    <div class="card-inside">
                        <div class="card-text">
                            <p class="description">
                                %s
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    """
    cards = []
    df = pandas.read_excel("mesa_sdc4.xlsx")
    for i in df.index:
        ref = df["ref"][i].strip().title()
        fullname = df["fullname"][i].strip().title()
        number = i + 1
        description = df["description"][i].strip()
        cards.append(card_template % (ref, fullname, number, number, number, description))
    return invitados_template % "\n".join(cards)


def mesas_html():
    mesas_template = """
        <section class="section-box" id="mesas" title="mesas de discusión">
            <div class="header-background">
                <h2 class="section-header">Mesas de discusión</h2>    
            </div>
            <label class="screenreader-text">Mesas de discusión</label>
            %s
            <div class="card mesa-empty">
                <div class="mesa-header">
                    <h4 class="name-in-card">Mesa %s: Conclusiones y cierre</h4>
                    <h5 class="name-in-card">Moderador: %s</h5>   
                </div>            
            </div>
        </section>
    """
    mesa_template = """
        <div class="card mesa">
        <div class="mesa-header">
            <h4 class="name-in-card">%s</h4>
            <h5 class="name-in-card">%s</h5>  
            <h5 class="name-in-card">%s</h5>   
        </div>            
        <div class="role">
            <p>Participantes</p>
            <hr>
        </div>  
        <div class="row card-row desk" aria-hidden="true">
            <div class="tabs">
                %s
            </div>
            <div class="tab-content">
                %s
            </div>
        </div>
        <div class="row card-row mini">
            %s
        </div>
    """
    button_template = """
        <button class="tablinks nav-link tab" toggle-target="%s">
            <img src="/sdc4/img/%s.png" class="photograph vertical-center">
            <p class="name-in-tab-3 vertical-center">
                %s <br>%s<br>%s
            </p>
        </button>
    """
    content_template = """
        <div class="tabcontent" id="%s" role="tabpanel">
            <p class="description">
                %s
            </p>
        </div>
    """
    mesa_mini_template = """
        <div class="row card-row mini">
            %s
        </div>
    """
    invitado_mini_template = """
        <div class="card invitado">
            <div class="row card-row">
                <div class="col-3">
                    <img src="/sdc4/img/%s.png" class="photograph vertical-center">
                </div>
                <div class="col-6 lefted">
                    <div class="vertical-center">
                        <h5 class="name-in-card">%s</h5>
                    </div>
                </div>
                <div class="col-3 centered">
                    <button
                        class="btn btn-primary card-button row-button vertical-center"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#%s-toggle"
                        aria-expanded="false"
                        aria-controls="%s-toggle"
                        title="expandir información">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-caret-down-fill"
                                viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                                    </path>
                            </svg>
                    </button>
                </div>
            </div>
            <div class="collapse multi-collapse" id="%s-toggle">  
                <div class="card-body">
                    <div class="card-inside">
                        <div class="card-text">
                            <p class="description">
                                %s
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    """

    df = pandas.read_excel("mesas.xlsx")

    invitados_mini = []
    contenidos = []
    botones = []
    for i in df.index:
        ref = df["ref"][i].strip().title()
        firstname = df["firstname"][i].strip().title()
        secondname = df["secondname"][i].strip().title()
        lastname = df["lastname"][i].strip().title()
        fullname = "%s %s %s" % (firstname, secondname, lastname)
        description = df["description"][i].strip()
        invitados_mini.append(invitado_mini_template % (ref, fullname, ref, ref, ref, description))
        contenidos.append(content_template % (ref, description))
        botones.append(button_template % (ref, ref, firstname, secondname, lastname))


    mesas = []
    for mesa in ["1"]:
        mesas.append(
            mesa_template % (
                "title", #property of mesa 
                "date",
                "moderator",
                "\n".join(botones),
                "\n".join(contenidos),
                mesa_template % "\n".join(invitados_mini)
            )
        )
    mesa_mini_template % "\n".join(invitados_mini) 

    return mesas_template % ("\n".join(mesas), len(mesas), "Agustin Payen Sandoval")


def comite_html():
    comite_template = """
        <section class="section-box" id="comite" title="comité">
            <div class="header-background">
                <h2 class="section-header ">Comité Organizadore</h2>
            </div>
            <label class="screenreader-text">Comité Organizadore</label>

            <ul style="padding-left: 1px;">
                %s
            </ul>
        </section>
    """
    list_template = """
        <li class="no-bullet">
            <span>
                %s
            </span>
        </li>
    """
    comite_list = []
    with open("comite_organizador.txt", "r") as f:
        lines = f.readlines()
        for line in lines:
            comite_list.append(list_template % line)
    return comite_template % "\n".join(comite_list)
    

def contacto_html():
    return """
        <section class="section-box" id="contacto" title="contacto">
            <div class="header-background">
                <h2 class="section-header">Información y contacto</h2>
            </div>
            <label class="screenreader-text">Información y contacto</label>
            <p class="screenreader-text">Correo electrónico: anabel.arrieta@ibero.mx</p>
            <p class="screenreader-text">Facebook: Divulgación Ciencia Ibero</p>

            <ul style="padding-left: 0px">
                <li class="row no-bullet vertical-center">
                    <span class="col-2 col-md-1">
                        <img alt="email" src="/sdc4/img/email-logo.png" class="mini-logo">
                    </span>
                    <span class="col-10 col-md-11">
                        anabel.arrieta@ibero.mx
                    </span>
                </li><br>                     
                <li class="row no-bullet vertical-center">
                    <span class="col-2 col-md-1">
                        <img alt="facebook" src="/sdc4/img/facebook-logo.png" class="mini-logo">
                    </span>
                        
                    <span class="col-10 col-md-11">
                        Divulgación Ciencia Ibero
                    </span>
                </li>
            </ul>
        </section>
    """


def index_html():
    return f"""
        <!DOCTYPE html>
        <html lang="en">
            <?php
            require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc4/include/head.php');
            ?>

            <body>       
                <?php
                    require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc4/include/navbar.php');
                ?> 

                <div class="content" title="contenido">
                    {BANNER}

                    <div class="responsive">
                        {CARRUSEL}

                        {PRESENTACION}

                        {objectivos_html()}

                        {temas_html()}

                        {calendario_html()}

                        {actividades_html()}

                        {invitados_html()}

                        {mesas_html()}

                        {REGISTRO}

                        {comite_html()}

                        {contacto_html()}

                        <?php
                            require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc4/include/footer.php');
                        ?>
                    </div>
                </div>
            </body>
        </html>
    """

print(index_html())