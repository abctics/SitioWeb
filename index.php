<?php include_once 'includes/templates/header.php'; ?>

<!--Acá empieza el banner-->

<div class="div-banner">
           
            <div class="hero">
                <div class="contenido-header">
                  
                    <div class="informacion-sitio">

                        <h1 class="nombre-sitio clearfix">ABC TI</h1>
                        <p class="slogan ">Aprende sobre <span>Desarrollo de sistemas</span></p>

                <div class="div-proyectos ">
                 <a class="button" href="https://github.com/abctics" target="_blank">Ver mis proyectos en github</a>
                </div>
                      
                    </div> <!--.informacion-evento-->
                              


                </div>
            </div><!--.hero-->
            
        </div>
                
        <!--Acá termina el banner> -->
        

        <section class="seccion-descripcion contenedor">
            <h2>Aprende sobre sistemas, desarrollo web y mucho más</h2>
            <p class="aprende-desarrollo">
              Potencia tus conocimientos aprendiendo muchos cursos. Aquí encontrarás muchos recursos gratuitos.
            </p>
        </section> <!--seccion-->

       
              <?php include_once 'includes/templates/todo.php'; ?>


        
       <!--Áca empieza el contenido de los plugins-->
               <section class="plugins-sociales contenedor seccion">
            <h2>Aprende a utilizar los plugins en tu sitio web</h2>
            <ul class="lista-plugins clearfix">
                <li>
                    <div class="plugin">
                        <a href="todo-plugins.php"><img  src="img/plugins-facebook.jpg" alt=""></a>
                        <p>Plugins para facebook</p>
                    </div>
                </li>
            </ul>
        </section>
        
       <!--Áca termina el contenido de los plugins-->
       

        <section class="recursos">
            <div class="contenedor-video">
                <video autoplay loop poster="img/bg-talleres.jpg">
                    <source src="video/video.mp4" type="video/mp4">
                    <source src="video/video.webm" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">
                </video><!--.contenedor-video-->
                <div class="contenido-lista-recursos">
                    <div class="contenedor">
                        <div class="cursos-plantillas">
                               <h2>recursos desarrollo web</h2>
                               
                                 <nav class="menu-todos-recursos">
                               
                                <a href="#cursos"><i class="fa fa-folder-open" aria-hidden="true"></i>Cursos</a>
<!--                                <a href="#tutoriales"><i class="fa fa-link" aria-hidden="true"></i>Tutoriales</a>-->
                                <a href="#plantillas"><i class="fa fa-download" aria-hidden="true"></i>Plantillas desde cero</a>
                            </nav>
                            
                            <div id="cursos" class="info-curso ocultar clearfix">
                                <div class="detalle-recursos">
                                    <h3>sistema de ventas con php y mysql</h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>Muy pronto</p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i>Alexander Benavides Cabrera</p>
<!--                                    <p><a class="ir-curso" href="">Hacer</a></p> -->
                                     </div>
                                
                                <div class="detalle-recursos">
                                    <h3>aplicación web dinámico desde cero</h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>Muy pronto</p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i>Alexander Benavides Cabrera</p>
<!--                                    <p><a class="ir-curso" href="#">Hacer</a></p> -->
                       
                                 </div>
<!--
                                <a href="" class="button float-right"> Ver todos</a>
-->
                            </div><!--#tutoriales-->

                           
                           
                            <div id="tutoriales" class="info-curso ocultar clearfix">
                                <div class="detalle-recursos">
                                    <h3>Html5</h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>Publicado el 12/08/2018</p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i>Alexander Benavides Cabrera</p>
                                    <p><a class="ir-curso" href="#">Ir al tutorial</a></p>                             
                                </div>

                                <div class="detalle-recursos">
                                    <h3>Css3</h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>Publicado el 12/08/2018</p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i>Alexander Benavides Cabrera</p>
                                    <p><a class="ir-curso" href="#">Ir al tutorial</a></p>                               
                                      </div>
                                <a href="todo-tutoriales.php" class="button float-right"> Ver todos</a>
                            </div><!--#tutoriales-->

                           
                           
                            <div id="plantillas" class="info-curso ocultar clearfix">
                                <div class="detalle-recursos">
                                    <h3>PLantilla  sistema de ventas</h3>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>Muy pronto</p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i>Alexander Benavides Cabrera</p>
<!--                                    <p><a class="ir-curso" href="#">Hacer</a></p>                            -->
                                    </div>
                                         
                                <div class="detalle-recursos">
                                    <h3>Plantilla para sistema de hoteles</h3>
                                    <p ><i class="fa fa-clock-o" aria-hidden="true"></i>Muy pronto</p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i>Alexander Benavides Cabrera</p>
<!--                                    <p><a class="ir-curso" href="#">Hacer</a></p> -->
                                </div>
<!--
                                <a href="" class="button float-right"> Ver todos</a>
-->
                                
                            </div><!--#plantilllas-->
                        </div><!--.lista-recursos-->
                    </div><!--.contenedor-->
                </div><!--.contenedor-recursos-->
            </div><!--.contenido-recursos-->
        </section><!--.Recursos-->
        
        
                
        <section class="pronto seccion">
            <h2>Muy pronto: Otras categorias de cursos y talleres</h2>
            <div class="contenedor">
                  <ul class="lista-pronto clearfix">
                      <li>
                            <div class="tabla-pronto">
                                <h3>Tutorial de excel básico</h3>
                                <p class="numero"></p>
                                <ul>
                                  <li>Resolución de dudas</li>
                                  <li>Recursos descargables</li>
                                  <li>Curso en línea</li>
                                </ul>
                                <a class="button hollow">Ver detalle</a>
                            </div>
                      </li>
                      <li>
                            <div class="tabla-pronto">
                                <h3>Tutorial inteligencia de negocios con qlik sense</h3>
                                <p class="numero"></p>
                                <ul>
                                  <li>Resolución de dudas</li>
                                  <li>Recursos descargables</li>
                                  <li>Curso en línea</li>
                                </ul>
                                <a class="button">Ver detalle</a>
                            </div>
                      </li> 
                      
                      <li>
                            <div class="tabla-pronto">
                                <h3>Aprende a desarrollar sistemas para java</h3>
                                <p class="numero"></p>
                                <ul>
                                  <li>Resolución de dudas</li>
                                  <li>recursos descargables</li>
                                  <li>Curso en línea</li>
                                </ul>
                                <a class="button hollow">Ver detalle</a>
                            </div>
                      </li> 
                  </ul>
            </div>
        </section>     
        
        
        <div class="contador parallax">
            <div class="contenedor">
                <ul class="resumen-cursos clearfix">
                    <li><p class="numero">0</p> Cursos</li>
                    <li><p class="numero">0</p> Turoriales</li>
                    <li><p class="numero">0</p> Plantillas</li>
                    <li><p class="numero">0</p> Otros</li>
                  
                </ul>
            </div>
        </div>

               
<?php include_once 'includes/templates/footer.php'; ?>


        

