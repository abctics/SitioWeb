<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Botones me gusta y compartir de facebook en una página web paso a paso.</h2>
<p><span class="numeracion">Primero:</span> Utiliza una plantilla para trabajar. Si no tienes no te preocupes, puedes usar la plantilla a continuación. </p>
<a class="enlace-descarga" target="_blank" href="https://drive.google.com/drive/folders/1CDnd-h1Qal4qomu8dTLpYFP1irSzjGkA"><p><span class="numeracion">Link de descarga de la plantilla</span></p></a>

<p><span class="numeracion">Segundo:</span>Si tienes tu plantilla ubica el lugar donde quieres que aparezca los bonones me gusta y compartir en tu documento html.</p>
    
    <div class="clearfix">
    <div class="imagen-mg-facebook"> </div>
<!--    <div class="interes"> 
    <a href="novedades.php" ><span>Leer: </span><span id="enlace-colorear">La primera aplicación móvil para conectar a atletas en ascenso con reclutadores</span></a>
    </div>--> 
    </div>
    
<p><span class="numeracion">Tercero:</span> Copia el siguiente fragmento de código y pega en el lugar que elegiste. Si usas la plantilla ubica la etiqueta "aside" (de preferencia) dentro del index.html. Si tu editor de código es Brackets o Sublime Text, utiliza el atajo (Ctrl+ F) y escribe "aside".Una vez ubicada dicha etiqueta pega el código dentro de ella.</p>
<p><pre class="preformateado">
     &lt div class="fb-like"
      data-href="https://www.facebook.com/abctics/?modal=admin_todo_tour" 
      data-layout="standard" data-action="like" data-size="small"
       data-show-faces="true"data-share="true" &gt  &lt/div&gt 
</pre> </p>

   
<p><span class="numeracion">Cuarto:</span> Configura paso a paso. Primero en data-href="https://www.facebook.com/abctics/?modal=admin_todo_tour" modifica el contenido dentro de las comillas y coloca la url de tu página de facebook o sitio web. <p>Después modifica el data-layout que puede ser "standard, button_count, button o box_count". En data-action puedes colocar "like o recommend", lo mismo en data-size "small o large". Finalmente en data-show-faces puedes desactivar las caras de los perfiles de facebook poniendo el atributo "false", de la misma forma si quieres desactivar el boton compartir en data-share coloca "false".</p></p>

<p><span class="numeracion">Quinto:</span>Copia el siguiente Script en un archivo "js" y enlaza  con tu archivo "html". Si usas la plantilla pégalo en el main.js</p>
<pre class="preformateado">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</pre>



<p >Bueno, de esa manera ya tendrías tu botón me gusta y compartir para tu página web similar al siguiente resultado a continuación. Y recuerda que puedes mejorar la apariencia usando hojas de  estilos css.</p>
    <div class="fb-like" data-href="https://www.facebook.com/abctics/?modal=admin_todo_tour" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"> </div>

<br>
<b>Nota: Es necesario abrir el archivo .html con un servidor local para asegurar que me aparezca dichos botones. </b>

</div>

        </section>


<?php include_once 'includes/templates/footer.php'; ?>
