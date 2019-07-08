<div class="p_Lista" >
  <ul class="estrofas" style="margin-left: 5%;">
    <?php for($i = 1; $i <=12; $i++){?>
      <li class="btn btn-color" style="margin-top: 20px;"><a style="color:white;text-decoration:none;"href="<?php echo site_url('Zas/strophe_').$i; ?>">Estrofa <?php echo $i ?></a></li>
    <!--li ><a class="btn btn-info" href="<?php //echo site_url('Zas/estrofa_2'); ?>">Estrofa 2</a></li-->
<?php }?>
  </ul>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="row">
      <div class="title col-md-12">
        <p>Comme ci comme ça</p>
        <p>ZAZ 2013</p>
      </div>
    </div>
    <div class="row contentAll">
      <div class="col-md-6">
        <div class="sub">
          <h5>Letra de la canción en francés</h5>
          <hr>
          <p>
          S<span class="svo">i</span> c’<span class="svo">e</span><span class="lfp">st</span> ç<span class="svo">a</span>, c’<span class="svo">e</span><span class="lfp">st</span> <span class="svo">a</span>ss<span class="svo">e</span><span class="lfp">z</span>, c’<span class="svo">e</span><span class="lfp">st</span> <span class="svn">ain</span>s<span class="svo">i</span>
          </p>

          <p>
          C’<span class="svo">e</span><span class="lfp">st</span> c<span class="svo">o</span>m<span class="lfp">m</span><span class="schwa">e</span> c<span class="svo">i</span> c<span class="svo">o</span>m<span class="lfp">m</span><span class="schwa">e</span> ç<span class="svo">a</span>
          </p>

          <p>
          Ç<span class="svo">a</span> s<span class="svo">e</span> s<span class="svo">ai</span><span class="lfp">t</span>, ç<span class="svo">a</span> c’<span class="svo">e</span><span class="lfp">st</span> s<span class="svo">û</span><span class="scf">r</span>, <span class="svn">on</span> s<span class="svo">ai</span><span class="lfp">t</span> ç<span class="svo">a</span>
          </p>

          <p>
          C’<span class="svo">e</span><span class="lfp">st</span> c<span class="svo">o</span>m<span class="lfp">m</span><span class="schwa">e</span> ç<span class="svo">a</span> c<span class="svo">o</span>m<span class="lfp">m</span><span class="schwa">e</span> c<span class="svo">i</span>
          </p>

        </div>
        <div class="sub">
          <h5>Transcripción fonética</h5>
          <hr>
          <p>[si se sa, sɛtase, sɛtɛ̃si</p>
          <p>se kɔm si kɔm sa</p>
          <p>sa sə sɛ, sa se syʁ, ɔ̃ sɛ sa</p>
          <p>se kɔm sa kɔm si]</p>

          <audio controls >
            <source src="<?php echo base_url('assets/audio/transcription/strophe_9_10.mp3'); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
        <div class="sub">
          <h5>Traducción de la canción en español</h5>
          <hr>
          <p>Si eso es, es suficiente, es así</p>
          <p>Es así, es asá</p>
          <p>Eso se sabe, eso es seguro, uno lo sabe</p>
          <p>Es asá, es así</p>


        </div>
      </div>
      <div class="col-md-6 subcontent">
        <div class="sub">
          <h5 id="title"></h5>
          <hr>
        </div>
        <div id="menu">
          <p id="instruction">Selecciona un sonido que aparece en "La letra de la canción en francés".</p>
          <p class="svn">Sonidos vocálicos nasales</p>
          <hr>
          <p class="svo">Sonidos vocálicos orales</p>
          <hr>

        <!--p class="glide" >Sonidos semivocálicos/semiconsonánticos (glide)</p>
        <hr-->


        <p class="scf" >Sonidos consonánticos del francés que no existen en el español</p>
        <hr>
        <p class="lfp" >Letras finales que no se pronuncian </p>
        <hr>
        <p class="schwa" >e inestable (schwa) que no se pronuncia</p>
        <hr>

</div>
        <div id="svn">
          <br>

          <p> <span style="cursor:pointer;" id="def_art_son_svn_3">ɛ̃</span>  (<span class="svnC">ain</span>si)
            <audio id="son_svn_3">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/cest_ainsi.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn "  id="b_svn_3"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svn_3">
            <p style="font-size: 0.9em;">Fonema <span class="svnC">[ɛ̃]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</span>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-baja media-abierta, no redondeada, nasal. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</span>
              <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/e_2.png'); ?>" alt="ɛ̃.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</span>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia adelante (con la punta de la lengua detrás de los dientes incisivos inferiores), estirar los labios, casi cerrar la boca y permitir que el aire pase por la boca y por la nariz al mismo tiempo. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Para constatar que el aire pase por la boca y por la nariz tocar las aletas nasales para sentir la vibración producida por el aire y tocar la garganta para sentir la vibración de las cuerdas vocales. </p>
            <p style="text-align: justify; font-weight: lighter;">Evitar pronunciar consonantes nasales al final de su emisión. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">in, ain, ein, im, en (final) (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Su punto de articulación está un poco más atrás que el del fonema [ɛ] más el descenso del velo del paladar (tal descenso permite que el aire pueda pasar por la cavidad nasal y por la bucal al mismo tiempo). (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Está permitido remplazar [œ̃] por [ɛ̃], pero no al revés. (Emmanuel Companys, 1966)</p>

          </div>
          <p> <span style="cursor:pointer;" id="def_art_son_svn">ɔ̃</span>  <span class="svnC">(on)</span>
            <audio id="myAudio">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/on.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn "  id="on_svn"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svn_1">
            <p style="font-size: 0.9em;">Fonema <span class ="svnC">[ɔ̃]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</span>
            <p style="text-align: justify; font-weight: lighter;">Vocal posterior, baja abierta, redondeada, nasal. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/c_2.png'); ?>" alt="ɔ̃.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia atrás, redondear mucho los labios, casi cerrar la boca y permitir que el aire pase por la boca y por la nariz al mismo tiempo. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Para constatar que el aire pase por la boca y por la nariz tocar las aletas nasales para sentir la vibración producida por el aire y tocar la garganta para sentir la vibración de las cuerdas vocales.</p>
            <p style="text-align: justify; font-weight: lighter;">Evitar pronunciar consonantes nasales al final de su emisión. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">on, om (Freland-Ricard, 2002)</p>

          </div>

          <p id="svnM">Dato curioso</p>

        <div id="svnI">
          <p style="font-size: 0.9em;"> </p>
          <p style="text-align: justify; font-weight: lighter;">Las tres lenguas que tienen nasales son el francés, el portugués y el polaco (Freland-Ricard, 2002)</p>
          <p style="text-align: justify; font-weight: lighter;">Si los grafemas m o la n están entre dos vocales no forman parte de vocales nasales (Freland-Ricard, 2002)</p>
          <p style="text-align: justify;font-weight: lighter;">La mitad de Francia no distingue entre œ̃ y ɛ̃, a favor de  ɛ̃. Quienes sí hacen tal distinción son los del sur de Francia, los belgas, los suizos y los quebequenses. (Freland-Ricard, 2002)</p>
          <p style="text-align: justify; font-weight: lighter;">Se recomienda aprender la pronunciación de las nasales comenzando con palabras donde estén en posición final; después cuando sean acentuadas antes de consonante, en el siguiente orden según el tipo de consonante: dental (d, t), labial (m, p), velar (g, k), palatal (ʒ). (FALTAN CONSONANTES) (Emmanuel Companys, 1966) (faltan algunos datos de esta referencia) </p>

        </div>
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="svo">
          <br>

          <p><span style="cursor:pointer;" id="def_art_son_svo_2">ɛ</span> (s<span class="svoC">ai</span>t)
            <audio id="son_svo_2">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/sait.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svo_2">
            <p style="font-size: 0.9em;">Fonema <span class="svoC"> [ɛ]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-baja media-abierta, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal abierta opuesta a [e]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/e_1.png'); ?>" alt="ɛ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua ligeramente hacia adelante, estirar los labios y abrir la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">è, ê, ai, ei (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es inevitable en sílaba acentuada antes de consonante pronunciada. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es cerrada (sílaba que termina en consonante pronunciada). (Freland-Ricard, 2002)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_3">ə</span> (s<span class="svoC">e</span>)
            <audio id="son_svo_3">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/se.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svo_3">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[ə]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;"> Vocal anterior, media-cerrada, redondeada, oral. (Martins & Mabilat, 2004) </p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/ə.png'); ?>" alt="ə.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua al centro, redondear los labios, abrir ligeramente la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">e (Freland-Ricard, 2002)</p>
            <p>Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">e instable  </p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [œ] con el punto de articulación de [ø], pero con una labialización más débil que la de ambos. (Emmanuel Companys, 1966)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_4">a</span>
            (ç<span class="svoC">a</span> <a class="btn " id="b_svo_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            <span class="svoC">a</span>ssez <a class="btn " id="b_svo_4_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_svo_4">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/c_a.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_4_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_9_10/cest_assez.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>

          </p>
          <div id="sonido_svo_4">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[a]</span>  </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, baja abierta, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɑ] (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/a.png'); ?>" alt="a.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">a, oi, â (Freland-Ricard, 2002)</p>
          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_5">i</span>
            (s<span class="svoC">i</span> <a class="btn " id="b_svo_5" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            ains<span class="svoC">i</span> <a class="btn " id="b_svo_5_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            c<span class="svoC">i</span> <a class="btn " id="b_svo_5_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_svo_5">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/si.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_5_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_9_10/cest_ainsi.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_5_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_9_10/ci.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>


          </p>

          <div id="sonido_svo_5">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[i]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, alta cerrada, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/i.png'); ?>" alt="i.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua contra los dientes inferiores, estirar mucho los labios. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">i, y, î (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [u] (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Es una vocal muy tensa al igual que [y] e [u] (Freland-Ricard, 2002, p. 47)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_7">e</span>
            (c’<span class="svoC">e</span>st <a class="btn " id="b_svo_7" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            ass<span class="svoC">e</span>z <a class="btn " id="b_svo_7_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_svo_7">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/cest.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_7_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_9_10/cest_assez.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>


          </p>
          <div id="sonido_svo_7">
            <p style="font-size: 0.9em;">Fonema <span class="svoC"> [e]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-alta media-cerrada, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɛ]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/e.png'); ?>" alt="e.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia adelante, estirar los labios más que para [i], abrir la boca más que para [i]. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">é, er, ez, -es (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es inevitable en sílaba acentuada en posición final de palabra. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que o (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es abierta (sílaba que termina en vocal). (Freland-Ricard, 2002) </p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_8">ɔ</span> (c<span class="svoC">o</span>mme)
            <audio id="son_svo_8">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/comme.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_8" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svo_8">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[ɔ]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal posterior, media-baja media-abierta, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal abierta opuesta a [o]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/c_1.png'); ?>" alt="ɔ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia atrás, redondear los labios, abrir ligeramente la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">o + consonante pronunciada (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es un fonema intermedio entre la o y la a del español. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [ɛ]. (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es cerrada (sílaba que termina en consonante pronunciada). Excepción: cuando la "o" es seguida por z pronunciada. (Freland-Ricard, 2002)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_10">y</span> (s<span class="svoC">û</span>r)
            <audio id="son_svo_10">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/sur.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_10" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_svo_10">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[y]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, alta cerrada, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/y.png'); ?>" alt="y.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua contra los dientes inferiores, redondear mucho los labios. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Pronunciar [u] proyectando exageradamente los labios; sin detenerse y sin abandonar esta posición tratar de pronunciar [i]. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">u, ue (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma posición de lengua que [i]. La proyección y redondeo de labios que requiere es mayor que para [u] y la abertura es más pequeña. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Es una vocal muy tensa al igual que [i] e [u]. (Freland-Ricard, 2002, p. 47)</p>

          </div>
          <p id="svoM">Dato curioso</p>

          <div id="svoI">
            <p style="text-align: justify; font-weight: lighter;">[E] tiene dos derivados: [e] y [ɛ]; mientras que [Œ] tiene tres: [ø], [ə] et [œ]. Para [Œ] los labios se proyectan hacia el frente y se redondean. [Œ] tiene la misma posición de la lengua que [E]. (Emmanuel Companys, 1966)</p>
          </div>

          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="scf">
          <br>

          <p><span style="cursor:pointer;" id="def_art_son_scf_2">ʁ</span> (sû<span class="scfC">r</span>)
            <audio id="son_scf_2">
              <source src="<?php echo base_url('assets/audio/words/strophe_9_10/sur.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_scf_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>

          <div id="sonido_scf_2">
            <p style="font-size: 0.9em;">Fonema <span class="scfC">[ʁ]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, uvular, sonora. No es una vibrante salvo en el caso de r geminada. (Abry & Veldeman-Abry, 2007, p. 35)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_9_10/ʁ.png'); ?>" alt="ʁ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase sobre la parte posterior de la lengua para que al chocar contra la úvula la mueva. Inmovilizar la lengua (Martins & Mabilat, 2004) (a diferencia de cuando se pronuncia la r del español, en la que es la punta de la lengua la que se mueve, y no la úvula). Hacer vibrar las cuerdas vocales. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">En el caso de que se esté pronunciando una r apical (propia del español) al mismo tiempo que [ʁ[, lo cual es un error muy frecuente en hispanohablante, corregir manteniendo la punta de la lengua abajo con la ayuda de lápiz sostenido entre los dientes. (Emmanuel Companys, 1966) </p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="font-size: 0.9em;">r, rr (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Dato curioso</p>
            <p style="text-align: justify; font-weight: lighter;">La [ʁ] no es una variante de la R del español, sino de la g; pero para producir la [ʁ] la lengua se retrae más que para [g]. (Emmanuel Companys, 1966)</p>

          </div>
          <p id="scfM">Dato curioso</p>
          <div id="scfI">
            <p>Se producen cuando el aire es obstaculizado por labios, dientes y/o lengua. (Freland-Ricard, 2002)</p>
          </div>
          <!--a id='btnNext'class="btn" href="#">Next</a-->


          <!--a id='btnNext'class="btn" href="#">Next</a-->
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="lfp">

          <br>
          <p id="lfpM">Dato curioso</p>
          <div id="lfpI">
          <p>En general, no se pronuncian: la “-e” final (a menos que la palabra tenga una sola sílaba); las terminaciones de los verbos en “-e”, “-es”, “-ent”; las consonantes finales “-d”,” –p”, “-s”, “-t”, “-x”, “-z” (con algunas excepciones); la “-r” en la sílaba final “-er” (con algunas excepciones); y la final “-n” no se pronuncia, pero modifica el sonido de la vocal que la precede (la hace nasal). (Martins y Mabilat, 2004)</p>
          </div>
          <!--a id='btnNext'class="btn" href="#">Next</a-->
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="schwa">
          <br>
          <p  id="schwaM">Datos curiosos</p>

          <div id="schwaI">

            <p style="text-align: justify; font-weight: lighter;">También es llamada "e" muda, caduca o schwa. (Abry & Veldeman-Abry, 2007). </p>
            <p style="text-align: justify; font-weight: lighter;">Su grafema correspondiente es "e", y su fonema correspondiente es [ǝ].</p>
            <p style="text-align: justify; font-weight: lighter;">En algunos casos su pronunciación es prohibida, en otros obligatoria y en otros facultativa.</p>
            <p style="text-align: justify; font-weight: lighter;">La mayoría de las veces, la "e" inestable no se pronuncia. Por ejemplo: en una oración donde la grafía "e" se repite varias veces, se pronuncia una de cada dos, en final de palabra o si la palabra es seguida por una vocal (en un encadenamiento que provoca una elisión de la "e" inestable). (Abry & Veldeman-Abry, 2007)</p>
            <p style="text-align: justify; font-weight: lighter;">Es importante que cuando su pronunciación sea prohibida las consonantes sonoras permanezcan sonoras antes de una pausa. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Uno de los casos en los que su pronunciación es obligatoria es cuando tiene un valor fonológico, por ejemplo cuando marca la diferencia entre singular y plural o entre el presente y el pasado compuesto del francés (Abry & Veldeman-Abry, 2007). También suele ser obligatoria cuando la anteceden más de una consonante pronunciada, antes de h aspirada, cuando el pronombre "le" sigue al verbo, antes de "un", "huit", "onze" (Abry & Veldeman-Abry, 2007), si la palabra no tiene más de una sola sílaba y en el pronombre interrogativo "que" (Martins & Mabilat, 2004).</p>
            <p style="text-align: justify; font-weight: lighter;">Uno de los casos en los que su pronunciación es facultativa es cuando es precedida de una sola consonante pronunciada (Martins & Mabilat, 2004).</p>
            <p style="text-align: justify; font-weight: lighter;">Igualmente hay casos donde se pronuncia aunque no esté escrita la grafía "e" con el fin de facilitar la pronunciación. (Abry & Veldeman-Abry, 2007)</p>

          </div>
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        </div><!--Termina subcontent-->
    </div>
  </div><!--Termina mySlides-->

</div><!-- Slideshow container -->
<br>
