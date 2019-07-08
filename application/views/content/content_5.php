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
          <span class="svo">É</span>c<span class="svo">ou</span>t<span class="schwa">e</span>, <span class="svo">é</span>c<span class="svo">ou</span>t<span class="schwa">e</span>-l<span class="svo">a</span> c<span class="svo">e</span>t<span class="lfp">t</span><span class="schwa">e</span> p<span class="svo">e</span>t<span class="svo">i</span>t<span class="schwa">e</span> <span class="scf">v</span><span class="glide">oi</span><span class="lfp">x</span>
          </p>

          <p>
          <span class="svo">E</span>c<span class="svo">ou</span>t<span class="schwa">e</span>-l<span class="svo">a</span> b<span class="glide">i</span><span class="svn">en</svn>, <span class="svo">e</span>l<span class="lfp">l</span><span class="schwa">e</span> gu<span class="svo">i</span>d<span class="svo">e</span> t<span class="svo">e</span><span class="lfp">s</span> p<span class="svo">a</span><span class="lfp">s</span>
          </p>

          <p>
          <span class="svo">A</span>v<span class="svo">e</span>c <span class="svo">e</span>l<span class="lfp">l</span><span class="schwa">e</span> t<span class="svo">u</span> p<span class="svo">eu</span><span class="lfp">x</span> <span class="svo">é</span><span class="scf">ch</span><span class="svo">a</span>pp<span class="svo">e</span><span class="lfp">r</span>
          </p>

          <p>
          <span class="svo">Au</span><span class="lfp">x</span> <span class="scf">r</span><span class="svo">ê</span><span class="scf">v</span><span class="lfp">es</span> d<span class="svo">e</span><span class="scf">s</span> <span class="svo">au</span>tr<span class="svo">e</span><span class="lfp">s</span> qu’<span class="svn">on</span> <span class="scf">v</span><span class="svo">ou</span>dr<span class="svo">ai</span><span class="lfp">t</span> t’<span class="svn">im</span>p<span class="svo">o</span><span class="scf">s</span><span class="svo">e</span><span class="lfp">r</span>
          </p>

        </div>
        <div class="sub">
          <h5>Transcripción fonética</h5>
          <hr>
          <p>[ekut, ekutla set petit vɯa</p>
          <p>ekut la bjɛ̃, ɛl gidə te pa</p>
          <p>avɛk ɛl ty pø eʃape</p>
          <p>o ʁɛv dezotrə kɔ̃ vudʁɛ tɛ̃poze]</p>

          <audio controls >
            <source src="<?php echo base_url('assets/audio/transcription/strophe_5.mp3'); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
        <div class="sub">
          <h5>Traducción de la canción en español</h5>
          <hr>
          <p>Escucha, escucha esta pequeña voz</p>
          <p>Escúchala bien, ella guía tus pasos</p>
          <p>Con ella puedes escapar</p>
          <p>De los sueños de los demás que quisieran imponerte</p>


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
        <p class="glide">Sonidos semivocálicos/semiconsonánticos (glide)</p>
        <hr>

        <p class="scf">Sonidos consonánticos del francés que no existen en el español</p>
        <hr>

        <p class="lfp">Letras finales que no se pronuncian </p>
        <hr>
        <p class="schwa" >e inestable (schwa) que no se pronuncia</p>
        <hr>

</div>
        <div id="svn">
          <br>
          <p> <span style="cursor:pointer;" id="def_art_son_svn">ɔ̃</span>  <span class="svnC">(on)</span>
            <audio id="myAudio">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/qu_on.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn "  id="on_svn" type="button" name="button"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svn_1">
            <p style="font-size: 0.9em;">Fonema <span class ="svnC">[ɔ̃]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</span>
            <p style="text-align: justify; font-weight: lighter;">Vocal posterior, baja abierta, redondeada, nasal. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/c_1.png'); ?>" alt="ɔ̃.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia atrás, redondear mucho los labios, casi cerrar la boca y permitir que el aire pase por la boca y por la nariz al mismo tiempo. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Para constatar que el aire pase por la boca y por la nariz tocar las aletas nasales para sentir la vibración producida por el aire y tocar la garganta para sentir la vibración de las cuerdas vocales.</p>
            <p style="text-align: justify; font-weight: lighter;">Evitar pronunciar consonantes nasales al final de su emisión. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">on, om (Freland-Ricard, 2002)</p>

          </div>
          <p> <span style="cursor:pointer;" id="def_art_son_svn_3">ɛ̃</span>
            (bi<span class="svnC">en</span> <a class="btn "  id="b_svn_3"><i class="fas fa-volume-up"></i></a>,
            <span class="svnC">im</span>poser <a class="btn "  id="b_svn_3_2"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svn_3">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/bien.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svn_3_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/timposer.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>


          </p>
          <div id="sonido_svn_3">
            <p style="font-size: 0.9em;">Fonema <span class="svnC">[ɛ̃]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</span>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-baja media-abierta, no redondeada, nasal. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</span>
              <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/e_2.png'); ?>" alt="ɛ̃.png">

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
          <p  id="svnM">Dato curioso</p>
        <div id="svnI">
          <p style="text-align: justify; font-weight: lighter;">Las tres lenguas que tienen nasales son el francés, el portugués y el polaco (Freland-Ricard, 2002)</p>
          <p style="text-align: justify; font-weight: lighter;">Si los grafemas m o la n están entre dos vocales no forman parte de vocales nasales (Freland-Ricard, 2002)</p>
          <p style="text-align: justify;font-weight: lighter;">La mitad de Francia no distingue entre œ̃ y ɛ̃, a favor de  ɛ̃. Quienes sí hacen tal distinción son los del sur de Francia, los belgas, los suizos y los quebequenses. (Freland-Ricard, 2002)</p>
          <p style="text-align: justify; font-weight: lighter;">Se recomienda aprender la pronunciación de las nasales comenzando con palabras donde estén en posición final; después cuando sean acentuadas antes de consonante, en el siguiente orden según el tipo de consonante: dental (d, t), labial (m, p), velar (g, k), palatal (ʒ). (FALTAN CONSONANTES) (Emmanuel Companys, 1966) (faltan algunos datos de esta referencia) </p>

        </div>
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="svo">
          <br>

          <p><span style="cursor:pointer;" id="def_art_son_svo_1">ø</span> (p<span class="svoC">eu</span>x)
            <audio id="son_svo_1">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/peux.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_1" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svo_1">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[ø]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-alta media-cerrada, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [œ]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/o_2.png'); ?>" alt="ø.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia adelante, redondear mucho los labios y casi cerrar la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">eu (sin ser seguida por consonante pronunciada), œu. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene el mismo punto de articulación que [e] y el mismo redondeo de labios que [o]. (Emmanuel Companys, 1966, p. 70)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es abierta (sílaba que termina en vocal pronunciada). Excepción: cuando eu va seguido de una z pronunciada, se pronuncia [ø]. (Freland-Ricard, 2002)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_2">ɛ</span>
            (c<span class="svoC">e</span>tte,  <a class="btn " id="b_svo_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            <span class="svoC">e</span>lle,  <a class="btn " id="b_svo_2_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            av<span class="svoC">e</span>c,  <a class="btn " id="b_svo_2_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            r<span class="svoC">ê</span>ves,  <a class="btn " id="b_svo_2_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            voudr<span class="svoC">ai</span>t <a class="btn " id="b_svo_2_5" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_svo_2">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/cette.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_2_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/elle.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_2_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_5/avec.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <audio id="son_svo_2_4">
                    <source src="<?php echo base_url('assets/audio/words/strophe_5/re_ves.mp3'); ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                    <audio id="son_svo_2_5">
                      <source src="<?php echo base_url('assets/audio/words/strophe_5/voudrait.mp3'); ?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                      </audio>

          </p>
          <div id="sonido_svo_2">
            <p style="font-size: 0.9em;">Fonema <span class="svoC"> [ɛ]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-baja media-abierta, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal abierta opuesta a [e]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/e_1.png'); ?>" alt="ɛ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua ligeramente hacia adelante, estirar los labios y abrir la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">è, ê, ai, ei (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es inevitable en sílaba acentuada antes de consonante pronunciada. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es cerrada (sílaba que termina en consonante pronunciada). (Freland-Ricard, 2002)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_3">ə</span>
            (p<span class="svoC">e</span>tite <a class="btn " id="b_svo_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            autr<span class="svoC">e</span>s <a class="btn " id="b_svo_3_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_3">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/petite.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_3_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/des_autres.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>

          </p>
          <div id="sonido_svo_3">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[ə]  </span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-cerrada, redondeada, oral. (Martins & Mabilat, 2004)  </p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_5/ɛ.png'); ?>" alt="ɛ.png"-->

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua al centro, redondear los labios, abrir ligeramente la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">e (Freland-Ricard, 2002)</p>
            <p>Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">e instable  </p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [œ] con el punto de articulación de [ø], pero con una labialización más débil que la de ambos. (Emmanuel Companys, 1966)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_4">a</span>
            (l<span class="svoC">à</span> <a class="btn " id="b_svo_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            v<span class="svoC">oi</span>x <a class="btn " id="b_svo_4_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            p<span class="svoC">a</span>s <a class="btn " id="b_svo_4_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            <span class="svoC">a</span>vec <a class="btn " id="b_svo_4_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_4">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/la.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_4_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/voix.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_4_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_5/pas.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <audio id="son_svo_4_4">
                    <source src="<?php echo base_url('assets/audio/words/strophe_5/avec.mp3'); ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>

          </p>
          <div id="sonido_svo_4">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[a]</span>  </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, baja abierta, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɑ] (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/a.png'); ?>" alt="a.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">a, oi, â (Freland-Ricard, 2002)</p>
        </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_5">i</span>
            (pet<span class="svoC">i</span>te <a class="btn " id="b_svo_5" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            gu<span class="svoC">i</span>de <a class="btn " id="b_svo_5_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_5">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/petite.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_5_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/guide.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>


          </p>

          <div id="sonido_svo_5">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[i]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, alta cerrada, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/i.png'); ?>" alt="i.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua contra los dientes inferiores, estirar mucho los labios. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">i, y, î (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [u] (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Es una vocal muy tensa al igual que [y] e [u] (Freland-Ricard, 2002, p. 47)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_6">u</span>
            (éc<span class="svoC">ou</span>te <a class="btn " id="b_svo_6" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            v<span class="svoC">ou</span>drait <a class="btn " id="b_svo_6_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_6">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/e_coute.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_6_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/voudrait.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>

          </p>

          <div id="sonido_svo_6">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[u]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal posterior, alta cerrada, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Freland-Ricard – 44 vocal simple</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/u.png'); ?>" alt="u.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua muy hacia atrás y redondear mucho los labios. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">ou (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [i]. (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Es una vocal muy tensa al igual que [y] et [i]. (Freland-Ricard, 2002, p. 47)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_7">e</span>
            (<span class="svoC">é</span>coute <a class="btn " id="b_svo_7" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            t<span class="svoC">e</span>s <a class="btn " id="b_svo_7_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            <span class="svoC">é</span>chapp<span class="svoC">e</span>r <a class="btn " id="b_svo_7_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            d<span class="svoC">e</span>s <a class="btn " id="b_svo_7_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            impos<span class="svoC">e</span>r <a class="btn " id="b_svo_7_5" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_7">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/e_coute.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_7_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/tes.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_7_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_5/e_chapper.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <audio id="son_svo_7_4">
                    <source src="<?php echo base_url('assets/audio/words/strophe_5/des_autres.mp3'); ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                    <audio id="son_svo_7_5">
                      <source src="<?php echo base_url('assets/audio/words/strophe_5/timposer.mp3'); ?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                      </audio>

          </p>
          <div id="sonido_svo_7">
            <p style="font-size: 0.9em;">Fonema <span class="svoC"> [e]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-alta media-cerrada, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɛ]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/e.png'); ?>" alt="e.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia adelante, estirar los labios más que para [i], abrir la boca más que para [i]. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">é, er, ez, -es (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es inevitable en sílaba acentuada en posición final de palabra. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que o (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es abierta (sílaba que termina en vocal). (Freland-Ricard, 2002) </p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_9">o</span>
            (<span class="svoC">au</span>x <a class="btn " id="b_svo_9" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            <span class="svoC">au</span>tres <a class="btn " id="b_svo_9_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            imp<span class="svoC">o</span>ser <a class="btn " id="b_svo_9_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_9">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/au_x.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_9_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/des_autres.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_9_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_5/timposer.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>

          </p>
          <div id="sonido_svo_9">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[o]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal posterior, media-alta media-cerrada, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɔ]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/o.png'); ?>" alt="o.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia atrás, redondear mucho los labios, cerrar la boca más que para [ↄ].</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">o (sin ser seguida por consonante pronunciada), ô, au, eau (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es un fonema intermedio entre la u y la o del español. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [e]. (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es abierta (sílaba que termina en vocal pronunciada). (Freland-Ricard, 2002)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_10">y</span> (t<span class="svoC">u</span>)
            <audio id="son_svo_10">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/tu.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_10" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_svo_10">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[y]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, alta cerrada, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/y.png'); ?>" alt="y.png">

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



        <div id="glide">
          <br>
          <p><span style="cursor:pointer;" id="def_art_son_glide_1">ɯ</span> (v<span class="glideC">oi</span>x)
            <audio id="son_glide_1">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/voix.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_glide_1" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_glide_1">
            <p style="font-size: 0.9em;">Fonema <span class="glideC">[ɯ] </span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Semiconsonante velar, labializada, sonora. (Freland-Ricard, 2002, p. 70)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_5/ɛ.png'); ?>" alt="ɛ.png"-->

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua muy hacia atrás, redondear mucho los labios y casi cerrar la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">oi, ou + vocal (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Su vocal correspondiente es [u]. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Reemplaza a [u] en la combinación de los grafemas u + vocal (Freland-Ricard, 2002)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_glide_3">j</span> (b<span class="glideC">i</span>en)
            <audio id="son_glide_3">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/bien.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_glide_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_glide_3">
            <p style="font-size: 0.9em;">Fonema <span class="glideC">[j]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Semiconsonante palatal sonora. (Freland-Ricard, 2002, p. 70)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_5/ɛ.png'); ?>" alt="ɛ.png"-->

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Juntar mucho las mandíbulas, abrir los labios y colocar la lengua en la posición de [i]. (Freland-Ricard, 2002)</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua muy hacia adelante y alzar el dorso de la lengua. (Martins & Mabilat, 2004) </p>
            <p style="text-align: justify; font-weight: lighter;">Pronunciar las dos frases: "y ahora" y "ya ahora", notando que hablando rápido en la primera se pronuncia la semiconsonante [j] y en la segunda se pronuncia la consonante [ʒ]. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">y, i, ill (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos </p>
            <p style="text-align: justify; font-weight: lighter;">También se le conoce como "yod sonora". (Freland-Ricard, 2002)</p>
            <p style="text-align: justify; font-weight: lighter;">Su vocal correspondiente es [i]. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Su articulación es muy parecida a la de [i]. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Reemplaza a [i] en la combinación de los grafemas i + vocal. (Freland-Ricard, 2002)</p>

          </div>
          <p id="glideM" >Dato curioso</p>

          <div id="glideI">
            <p style="text-align: justify; font-weight: lighter;">En francés es imposible tener 2 vocales juntas en la misma sílaba porque no se aceptan los diptongos, por lo que se remplaza una de las dos vocales (pronunciadas) por una semi-consonante. (Freland-Ricard, 2002)</p>

          </div>
          <!--a id='btnNext'class="btn" href="#">Next</a-->
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="scf">
          <br>
          <p><span style="cursor:pointer;" id="def_art_son_scf_1">v</span>
            (<span class="scfC">v</span>oix <a class="btn " id="b_scf_1" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            a<span class="scfC">v</span>ec <a class="btn " id="b_scf_1_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            rê<span class="scfC">v</span>es <a class="btn " id="b_scf_1_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            <span class="scfC">v</span>oudrait <a class="btn " id="b_scf_1_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_scf_1">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/voix.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_scf_1_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/avec.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_scf_1_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_5/re_ves.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <audio id="son_scf_1_4">
                    <source src="<?php echo base_url('assets/audio/words/strophe_5/voudrait.mp3'); ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>

          </p>

          <div id="sonido_scf_1">
            <p style="font-size: 0.9em;">Fonema <span class="scfC"> [v]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, labiodental y sonora. (Abry & Veldeman-Abry, 2007, p. 34)</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante fricativa, anterior y sonora. (Emmanuel Companys, 1966, p. 18)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/fv.png'); ?>" alt="fv.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase entre el labio inferior y los dientes superiores. Hacer vibrar las  cuerdas vocales. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Pronunciar [f] exagerando la proyección de los labios; sin abandonar esta posición pronunciar [f] prolongadamente (en la emisión de [f] las cuerdas vocales no vibran). Repetir tapándose las orejas. Repetir tocando la garganta. Pronunciar [f[ y luego [v] notando que la posición de la boca no cambia. Pronunciar [v] exagerando la proyección de los labios; sin abandonar esta posición pronunciarla prolongadamente sintiendo la vibración de las cuerdas vocales. Repetir tapándose las orejas. Repetir tocando la garganta. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">v, w (Freland-Ricard, 2002)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_scf_2">ʁ</span>
            (<span class="scfC">r</span>êves <a class="btn " id="b_scf_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            aut<span class="scfC">r</span>es <a class="btn " id="b_scf_2_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            voud<span class="scfC">r</span>ait <a class="btn " id="b_scf_2_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_scf_2">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/re_ves.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_scf_2_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/des_autres.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>

                <audio id="son_scf_2_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_5/voudrait.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>



          </p>

          <div id="sonido_scf_2">
            <p style="font-size: 0.9em;">Fonema <span class="scfC">[ʁ]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, uvular, sonora. No es una vibrante salvo en el caso de r geminada. (Abry & Veldeman-Abry, 2007, p. 35)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_5/fv.png'); ?>" alt="fv.png"-->

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase sobre la parte posterior de la lengua para que al chocar contra la úvula la mueva. Inmovilizar la lengua (Martins & Mabilat, 2004) (a diferencia de cuando se pronuncia la r del español, en la que es la punta de la lengua la que se mueve, y no la úvula). Hacer vibrar las cuerdas vocales. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">En el caso de que se esté pronunciando una r apical (propia del español) al mismo tiempo que [ʁ[, lo cual es un error muy frecuente en hispanohablante, corregir manteniendo la punta de la lengua abajo con la ayuda de lápiz sostenido entre los dientes. (Emmanuel Companys, 1966) </p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="font-size: 0.9em;">r, rr (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Dato curioso</p>
            <p style="text-align: justify; font-weight: lighter;">La [ʁ] no es una variante de la R del español, sino de la g; pero para producir la [ʁ] la lengua se retrae más que para [g]. (Emmanuel Companys, 1966)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_scf_4">ʃ</span> (é<span class="scfC">ch</span>apper)
            <audio id="son_scf_4">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/e_chapper.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_scf_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>

          <div id="sonido_scf_4">
            <p style="font-size: 0.9em;">Fonema <span class="scfC">[ʃ]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, prepalatal, redondeada, sorda. (Abry & Veldeman-Abry, 2007, p. 35)</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante fricativa, posterior y sorda. (Emmanuel Companys, 1966, p. 18)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/ro_1.png'); ?>" alt="ʃʒ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase entre el dorso de la lengua y el paladar, proyectar los labios hacia adelante. No hacer vibrar las cuerdas vocales. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">ch (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Dato curioso</p>
            <p style="text-align: justify; font-weight: lighter;">Para el grafema ch algunas palabras se pronuncian con el fonema [k] y otras con el fonema [ʃ]. Desafortunadamente no hay regla para discernir si es uno u otro fonema, por lo que sólo la práctica puede permitir conocer la pronunciación correcta. (Freland-Ricard, 2002)</p>
            <p style="text-align: justify; font-weight: lighter;">Su articulación es la misma que la de [ʒ]. (Emmanuel Companys, 1966)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_scf_5">z</span>
            (de<span class="scfC">s</span> autres <a class="btn " id="b_scf_5" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            impo<span class="scfC">s</span>er <a class="btn " id="b_scf_5_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_scf_5">
              <source src="<?php echo base_url('assets/audio/words/strophe_5/des_autres.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_scf_5_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_5/timposer.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>


          </p>

          <div id="sonido_scf_5">
            <p style="font-size: 0.9em;">Fonema <span class="scfC">[z]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, alveolar, sonora. (Abry & Veldeman-Abry, 2007, p. 34)</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante fricativa, medial (¿media?) y sonora. (Emmanuel Companys, 1966, p. 18)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_5/sz.png'); ?>" alt="sz.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase entre la parte delantera de la lengua y los dientes superiores. Hacer vibrar las cuerdas vocales. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Pronunciar [s] prolongadamente (en la emisión de [s] las cuerdas vocales no vibran). Repetir tapándose las orejas. Repetir tocando la garganta. Pronunciar [s] y luego [z] notando que la posición de la boca no cambia. Pronunciar la [z] prolongadamente sintiendo la vibración de las cuerdas vocales. Repetir tapándose las orejas. Repetir tocando la garganta. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">z, s (cuando está entre dos vocales) (Freland-Ricard, 2002)</p>

          </div>

          <p id="scfM">Dato curioso</p>
          <div id="scfI">
            <p>Se producen cuando el aire es obstaculizado por labios, dientes y/o lengua. (Freland-Ricard, 2002)</p>
          </div>
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
          <p class="schwaM" id="schwaM">e inestable (schwa) que no se pronuncia</p>
          <div id="schwaI">
            <p style="font-size: 0.9em;">Datos curiosos</p>

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
