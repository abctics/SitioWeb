<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Timeline de twitter en una página web paso a paso.</h2>
<p><span class="numeracion">Primero:</span> Utiliza una plantilla para trabajar. Si no tienes no te preocupes, puedes usar la plantilla a continuación. </p>
<a class="enlace-descarga" target="_blank" href="https://drive.google.com/drive/folders/1CDnd-h1Qal4qomu8dTLpYFP1irSzjGkA"><p><span class="numeracion">Link de descarga de la plantilla</span></p></a>

<p><span class="numeracion">Segundo:</span>Si tienes tu plantilla ubica el lugar donde quieres que aparezca el timeline de twitter.</p>
    

<p><span class="numeracion">Tercero:</span> Utiliza el siguiente fragmento de código y pégalo en tu archivo html o php.</p>

    <p><pre class="preformateado">
                &lth3&gtÚltimos tweets &lt/h3&gt
               &lta class="twitter-timeline" data-height="400" 
               data-theme="light" data-link-color=" #7bbb5e;" 
               href="https://twitter.com/alexben9607"&gtTweets by alexben9607 &lt/a&gt
               &ltscript async src="//platform.twitter.com/widgets.js"charset="utf-8"&gt
               &lt/script&gt
          </div>

     </pre></p>

   
<p><span class="numeracion">Cuarto:</span> Configura paso a paso. En el atributo href coloca el link de tu cuenta de twitter, también puedes mejorar sus atributos como altura, color y darle efectos con css para que sea mas amigable a la vista. No necesitas ninguna librería adicional.</p>

<p>Para mas información visita <a class="enlace-simple" href="https://developer.twitter.com/" target="_blank"><span class="numeracion"> twitter para desarrolladores.</span></a></p>

<br>
<b></b>

</div>

        </section>


<?php include_once 'includes/templates/footer.php'; ?>
