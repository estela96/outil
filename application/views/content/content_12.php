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
          C<span class="svo">o</span>m<span class="lfp">m</span><span class="schwa">e</span> c<span class="svo">i</span> c<span class="svo">o</span>m<span class="lfp">m</span><span class="schwa">e</span> ç<span class="svo">a</span>
          </p>

          <p>
          S<span class="svn">an</span><span class="lfp">s</span> p<span class="svo">eu</span><span class="scf">r</span> d’<span class="scf">v</span><span class="svo">o</span><span class="lfp">s</span> l<span class="glide">oi</span><span class="lfp">s</span>
          </p>

          <p>
          <span class="svn">On</span> n<span class="svo">e</span> m’<span class="svn">em</span>p<span class="svo">ê</span><span class="scf">ch</span><span class="schwa">e</span>r<span class="svo">a</span> p<span class="svo">a</span><span class="lfp">s</span>
          </p>

          <p>
          D<span class="svo">e</span> s<span class="glide">ui</span><span class="scf">vr</span><span class="svo">e</span> m<span class="svn">on</span> <span class="scf">ch</span><span class="svo">e</span>m<span class="svn">in</span>
          </p>

          <p>
          Cr<span class="svo">ée</span><span class="lfp">r</span> c’qu<span class="svo">i</span> m’f<span class="svo">ai</span><span class="lfp">t</span> d<span class="svo">u</span> b<span class="svn">ien</span>
          </p>


        </div>
        <div class="sub">
          <h5>Transcripción fonética</h5>
          <hr>
          <p>[kɔm si kɔm sa</p>
          <p>sɑ̃ pœʁdvo lɯa</p>
          <p>ɔ̃ nə mɑ̃peʃʁa pa</p>
          <p>də sɥivʁə mɔ̃ ʃəmɛ̃</p>
          <p>kʁee skim fɛ dy bjɛ̃]</p>

          <audio controls >
            <source src="<?php echo base_url('assets/audio/transcription/strophe_12.mp3'); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
        <div class="sub">
          <h5>Traducción de la canción en español</h5>
          <hr>
          <p>Así, asá</p>
          <p>Sin miedo a sus leyes</p>
          <p>No se me impedirá</p>
          <p>Seguir mi camino</p>
          <p>Crear lo que me hace bien</p>


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
          <p class="svo" >Sonidos vocálicos orales</p>
          <hr>
          <p class="glide" >Sonidos semivocálicos/semiconsonánticos (glide)</p>
          <hr>

        <p class="scf">Sonidos consonánticos del francés que no existen en el español</p>
        <hr>
        <p class="lfp" >Letras finales que no se pronuncian </p>
        <hr>
        <p class="schwa" >e inestable (schwa) que no se pronuncia</p>
        <hr>

</div>
        <div id="svn">
          <br>
          <p> <span style="cursor:pointer;" id="def_art_son_svn">ɔ̃</span>
            (<span class="svnC">on</span> <a class="btn "  id="on_svn" ><i class="fas fa-volume-up"></i></a>,
            m<span class="svnC">o</span>n <a class="btn "  id="on_svn_2" ><i class="fas fa-volume-up"></i></a>
            )
            <audio id="myAudio">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/on.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="myAudio_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/mon.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>

          </p>
          <div id="sonido_svn_1">
            <p style="font-size: 0.9em;">Fonema <span class ="svnC">[ɔ̃]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</span>
            <p style="text-align: justify; font-weight: lighter;">Vocal posterior, baja abierta, redondeada, nasal. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/c_2.png'); ?>" alt="ɔ̃.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia atrás, redondear mucho los labios, casi cerrar la boca y permitir que el aire pase por la boca y por la nariz al mismo tiempo. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Para constatar que el aire pase por la boca y por la nariz tocar las aletas nasales para sentir la vibración producida por el aire y tocar la garganta para sentir la vibración de las cuerdas vocales.</p>
            <p style="text-align: justify; font-weight: lighter;">Evitar pronunciar consonantes nasales al final de su emisión. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">on, om (Freland-Ricard, 2002)</p>

          </div>
          <p ><span style="cursor:pointer;" id="def_art_son_svn_2">ɑ̃</span>
            (s<span class="svnC">an</span>s <a class="btn " id="a_svn_2" style="cursor:pointer;"><i class="fas fa-volume-up"></i></a>
            <span class="svnC">em</span>pêchera <a class="btn " id="a_svn_2_2" style="cursor:pointer;"><i class="fas fa-volume-up"></i></a>)
            <audio id="myAudio2">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/sans.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="myAudio2_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/m_empe_chera.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>

          </p>
            <div id="sonido_svn_2">
              <p style="font-size: 0.9em;">Fonema<span class="svnC">[ɑ̃]</span> <p>
                <p style="font-size: 0.9em;">Descripción articulatoria</p>
                <p style="text-align: justify; font-weight: lighter;">Vocal posterior, baja abierta, redondeada, nasal. (Abry & Veldeman-Abry, 2007, p. 28)</p>
                <p style="font-size: 0.9em;">Diagrama</p>
                <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/a_2.png'); ?>" alt="ɑ̃.png">

                <p style="font-size: 0.9em;">Cómo emitirlo</p>
                <p style="text-align: justify; font-weight: lighter;">Colocar la lengua ligeramente hacia atrás, redondear los labios ligeramente, abrir bien la boca y permitir que el aire pase por la boca y por la nariz al mismo tiempo. (Martins & Mabilat, 2004) </p>
                <p style="text-align: justify; font-weight: lighter;">Para constatar que el aire pase por la boca y por la nariz tocar las aletas nasales para sentir la vibración producida por el aire y tocar la garganta para sentir la vibración de las cuerdas vocales. </p>
                <p style="text-align: justify; font-weight: lighter;">Evitar pronunciar consonantes nasales al final de su emisión. (Emmanuel Companys, 1966)</p>
                <p style="font-size: 0.9em;">Grafemas correspondientes</p>
                <p style="text-align: justify; font-weight: lighter;">an, en, am, em (Freland-Ricard, 2002)</p>
                <p style="font-size: 0.9em;">Dato curioso</p>
                <p style="text-align: justify; font-weight: lighter;">Su articulación es la misma que para el fonema [a] más el descenso del velo del paladar (tal descenso permite que el aire pueda pasar por la cavidad nasal y por la bucal al mismo tiempo). (Emmanuel Companys, 1966)</p>

            </div>
            <p> <span style="cursor:pointer;" id="def_art_son_svn_3">ɛ̃</span>
              (chem<span class="svnC">in</span> <a class="btn "  id="b_svn_3"><i class="fas fa-volume-up"></i></a>,
              b<span class="svnC">ien</span> <a class="btn "  id="b_svn_3_2"><i class="fas fa-volume-up"></i></a>)
              <audio id="son_svn_3">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/chemin.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svn_3_2">
                  <source src="<?php echo base_url('assets/audio/words/strophe_12/bien.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>

            </p>
            <div id="sonido_svn_3">
              <p style="font-size: 0.9em;">Fonema <span class="svnC">[ɛ̃]</span> </p>
              <p style="font-size: 0.9em;">Descripción articulatoria</span>
              <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-baja media-abierta, no redondeada, nasal. (Abry & Veldeman-Abry, 2007, p. 28)</p>
              <p style="font-size: 0.9em;">Diagrama</span>
                <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/e_2.png'); ?>" alt="ɛ̃.png">

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
            <p id="svnM">Dato curioso</p>

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

          <p><span style="cursor:pointer;" id="def_art_son_svo_2">ɛ</span> (f<span class="svoC">ai</span>t)
            <audio id="son_svo_2">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/fait.mp3'); ?>" type="audio/mpeg">
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
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/e_1.png'); ?>" alt="ɛ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua ligeramente hacia adelante, estirar los labios y abrir la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">è, ê, ai, ei (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es inevitable en sílaba acentuada antes de consonante pronunciada. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es cerrada (sílaba que termina en consonante pronunciada). (Freland-Ricard, 2002)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_3">ə</span>
            (n<span class="svoC">e</span> <a class="btn " id="b_svo_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            d<span class="svoC">e</span> <a class="btn " id="b_svo_3_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            suivr<span class="svoC">e</span> <a class="btn " id="b_svo_3_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            ch<span class="svoC">e</span>min <a class="btn " id="b_svo_3_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_3">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/ne.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_3_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/de.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_3_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_12/suivre.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <audio id="son_svo_3_4">
                    <source src="<?php echo base_url('assets/audio/words/strophe_12/chemin.mp3'); ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>

          </p>
          <div id="sonido_svo_3">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[ə]  </span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;"> </p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_12/ɛ.png'); ?>" alt="ɛ.png"-->

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
            l<span class="svoC">oi</span>s <a class="btn " id="b_svo_4_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            empêcher<span class="svoC">a</span> <a class="btn " id="b_svo_4_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            p<span class="svoC">a</span>s <a class="btn " id="b_svo_4_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
            )
            <audio id="son_svo_4">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/lois.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_4_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/lois.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_4_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_12/m_empe_chera.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <audio id="son_svo_4_4">
                    <source src="<?php echo base_url('assets/audio/words/strophe_12/pas.mp3'); ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>

          </p>
          <div id="sonido_svo_4">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[a]</span>  </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, baja abierta, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɑ] (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/a.png'); ?>" alt="a.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">a, oi, â (Freland-Ricard, 2002)</p>
        </div>

          <p><span style="cursor:pointer;" id="def_art_son_svo_5">i</span>
            (c<span class="svoC">i</span> <a class="btn " id="b_svo_5" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            su<span class="svoC">i</span>vre <a class="btn " id="b_svo_5_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            qu<span class="svoC">i</span> <a class="btn " id="b_svo_5_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_svo_5">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/ci.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_5_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/suivre.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_svo_5_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_12/ce_qui_me.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>


          </p>

          <div id="sonido_svo_5">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[i]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, alta cerrada, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/i.png'); ?>" alt="i.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua contra los dientes inferiores, estirar mucho los labios. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">i, y, î (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [u] (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Es una vocal muy tensa al igual que [y] e [u] (Freland-Ricard, 2002, p. 47)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_7">e</span>
            (emp<span class="svoC">ê</span>chera <a class="btn " id="b_svo_7" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            cr<span class="svoC">ée</span>r <a class="btn " id="b_svo_7_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_svo_7">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/m_empe_chera.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_svo_7_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/creer.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>


          </p>
          <div id="sonido_svo_7">
            <p style="font-size: 0.9em;">Fonema <span class="svoC"> [e]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-alta media-cerrada, no redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɛ]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/e.png'); ?>" alt="e.png">

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
              <source src="<?php echo base_url('assets/audio/words/strophe_12/comme.mp3'); ?>" type="audio/mpeg">
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
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/c_1.png'); ?>" alt="ɔ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia atrás, redondear los labios, abrir ligeramente la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">o + consonante pronunciada (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es un fonema intermedio entre la o y la a del español. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [ɛ]. (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es cerrada (sílaba que termina en consonante pronunciada). Excepción: cuando la "o" es seguida por z pronunciada. (Freland-Ricard, 2002)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_9">o</span> (v<span class="svoC">o</span>s)
            <audio id="son_svo_9">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/peur_de_vos.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_9" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>
          </p>
          <div id="sonido_svo_9">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[o]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal posterior, media-alta media-cerrada, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal cerrada opuesta a [ɔ]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/o.png'); ?>" alt="o.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua hacia atrás, redondear mucho los labios, cerrar la boca más que para [ↄ].</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">o (sin ser seguida por consonante pronunciada), ô, au, eau (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Es un fonema intermedio entre la u y la o del español. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma abertura que [e]. (Emmanuel Companys, 1966, p. 86)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es abierta (sílaba que termina en vocal pronunciada). (Freland-Ricard, 2002)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_10">y</span> (d<span class="svoC">u</span>)
            <audio id="son_svo_10">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/du.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_10" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_svo_10">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[y]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, alta cerrada, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/y.png'); ?>" alt="y.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua contra los dientes inferiores, redondear mucho los labios. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Pronunciar [u] proyectando exageradamente los labios; sin detenerse y sin abandonar esta posición tratar de pronunciar [i]. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">u, ue (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene la misma posición de lengua que [i]. La proyección y redondeo de labios que requiere es mayor que para [u] y la abertura es más pequeña. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Es una vocal muy tensa al igual que [i] e [u]. (Freland-Ricard, 2002, p. 47)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_svo_11">œ</span> (p<span class="svoC">eu</span>r)
            <audio id="son_svo_11">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/peur_de_vos.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_svo_11" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_svo_11">
            <p style="font-size: 0.9em;">Fonema <span class="svoC">[œ]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal anterior, media-baja media-abierta, redondeada, oral. (Abry & Veldeman-Abry, 2007, p. 28)</p>
            <p style="text-align: justify; font-weight: lighter;">Vocal abierta opuesta a [ø]. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/oe.png'); ?>" alt="oe.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua ligeramente hacia adelante, redondear los labios y abrir ligeramente la boca. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">Pronunciar una o proyectando exageradamente los labios; sin detenerse y sin abandonar esta posición tratar de pronunciar una e. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">eu + consonante pronunciada, œu + consonante pronunciada. (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">La posición de la lengua es la misma que para [e]. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene el mismo punto de articulación que [ɛ] y el mismo redondeo de labios que [ɔ]. (Emmanuel Companys, 1966, p. 70)</p>
            <p style="text-align: justify; font-weight: lighter;">Tiene lugar cuando la sílaba es abierta (sílaba que termina en consonante pronunciada). Excepción: cuando eu va seguido de una z pronunciada, se pronuncia [ø] (Freland-Ricard, 2002)</p>

          </div>
          <p  id="svoM">Dato curioso</p>
          <div id="svoI">
            <p style="text-align: justify; font-weight: lighter;">[E] tiene dos derivados: [e] y [ɛ]; mientras que [Œ] tiene tres: [ø], [ə] et [œ]. Para [Œ] los labios se proyectan hacia el frente y se redondean. [Œ] tiene la misma posición de la lengua que [E]. (Emmanuel Companys, 1966)</p>
          </div>
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="glide">
          <br>
          <p><span style="cursor:pointer;" id="def_art_son_glide_1">ɯ</span> (l<span class="glideC">oi</span>s)
            <audio id="son_glide_1">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/lois.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_glide_1" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_glide_1">
            <p style="font-size: 0.9em;">Fonema <span class="glideC">[ɯ] </span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Semiconsonante velar, labializada, sonora. (Freland-Ricard, 2002, p. 70)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_12/y.png'); ?>" alt="y.png"-->

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua muy hacia atrás, redondear mucho los labios y casi cerrar la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">oi, ou + vocal (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Su vocal correspondiente es [u]. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Reemplaza a [u] en la combinación de los grafemas u + vocal (Freland-Ricard, 2002)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_glide_2">ɥ</span> (s<span class="glideC">ui</span>vre)
            <audio id="son_glide_2">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/suivre.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_glide_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_glide_2">
            <p style="font-size: 0.9em;">Fonema <span class="glideC">[ɥ]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Semiconsonante palatal, labializada, sonora. (Freland-Ricard, 2002, p. 70)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_12/y.png'); ?>" alt="y.png"-->

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Colocar la lengua muy hacia adelante, redondear mucho los labios y abrir ligeramente la boca. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">u + vocal (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Datos curiosos</p>
            <p style="text-align: justify; font-weight: lighter;">Su vocal correspondiente es [y]. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Su punto de articulación es el mismo que para [y] pero su constricción es más grande y su sonoridad más débil. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Reemplaza a [y] en la combinación de los grafemas y + vocal. (Freland-Ricard, 2002)</p>
            <p style="text-align: justify; font-weight: lighter;">Esta semiconsonante es muy difícil para todos los extranjeros y en particular para los hispanófonos, incluso para algunos francófonos que no saben pronunciarlo, principalmente los belgas que la remplazan por [ɯ]. Su dificultad reside en la coarticulación con la vocal que sigue. (Emmanuel Companys, 1966)</p>

          </div>
          <!--a id='btnNext'class="btn" href="#">Next</a-->

          <p><span style="cursor:pointer;" id="def_art_son_glide_3">j</span> (b<span class="glideC">i</span>en)
            <audio id="son_glide_3">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/bien.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <a class="btn " id="b_glide_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>

          </p>
          <div id="sonido_glide_3">
            <p style="font-size: 0.9em;">Fonema <span class="glideC">[j]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Semiconsonante palatal sonora. (Freland-Ricard, 2002, p. 70)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_12/y.png'); ?>" alt="y.png"-->

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
          <p  id="glideM" >Dato curioso</p>
          <div id="glideI">
            <p style="text-align: justify; font-weight: lighter;">En francés es imposible tener 2 vocales juntas en la misma sílaba porque no se aceptan los diptongos, por lo que se remplaza una de las dos vocales (pronunciadas) por una semi-consonante. (Freland-Ricard, 2002)</p>

          </div>
          <a class="btn btnNext" style="cursor: pointer;">Menú</a>
        </div>

        <div id="scf">
          <br>
          <p><span style="cursor:pointer;" id="def_art_son_scf_1">v</span> (
            <span class="scfC">v</span>os <a class="btn " id="b_scf_1" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            sui<span class="scfC">v</span>re <a class="btn " id="b_scf_1_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_scf_1">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/peur_de_vos.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_scf_1_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/suivre.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>


          </p>

          <div id="sonido_scf_1">
            <p style="font-size: 0.9em;">Fonema <span class="scfC"> [v]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, labiodental y sonora. (Abry & Veldeman-Abry, 2007, p. 34)</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante fricativa, anterior y sonora. (Emmanuel Companys, 1966, p. 18)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/fv.png'); ?>" alt="fv.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase entre el labio inferior y los dientes superiores. Hacer vibrar las  cuerdas vocales. (Emmanuel Companys, 1966)</p>
            <p style="text-align: justify; font-weight: lighter;">Pronunciar [f] exagerando la proyección de los labios; sin abandonar esta posición pronunciar [f] prolongadamente (en la emisión de [f] las cuerdas vocales no vibran). Repetir tapándose las orejas. Repetir tocando la garganta. Pronunciar [f[ y luego [v] notando que la posición de la boca no cambia. Pronunciar [v] exagerando la proyección de los labios; sin abandonar esta posición pronunciarla prolongadamente sintiendo la vibración de las cuerdas vocales. Repetir tapándose las orejas. Repetir tocando la garganta. (Emmanuel Companys, 1966)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">v, w (Freland-Ricard, 2002)</p>

          </div>
          <p><span style="cursor:pointer;" id="def_art_son_scf_2">ʁ</span>
            (peu<span class="scfC">r</span> <a class="btn " id="b_scf_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            empêche<span class="scfC">r</span>a <a class="btn " id="b_scf_2_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            suiv<span class="scfC">r</span>e <a class="btn " id="b_scf_2_3" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            c<span class="scfC">r</span>éer <a class="btn " id="b_scf_2_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_scf_2">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/peur_de_vos.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_scf_2_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/m_empe_chera.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <audio id="son_scf_2_3">
                  <source src="<?php echo base_url('assets/audio/words/strophe_12/suivre.mp3'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <audio id="son_scf_2_4">
                    <source src="<?php echo base_url('assets/audio/words/strophe_12/creer.mp3'); ?>" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>


          </p>

          <div id="sonido_scf_2">
            <p style="font-size: 0.9em;">Fonema <span class="scfC">[ʁ]</span> </p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, uvular, sonora. No es una vibrante salvo en el caso de r geminada. (Abry & Veldeman-Abry, 2007, p. 35)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <!--img src="<?php echo base_url('assets/img/diagramas/diagramas_12/y.png'); ?>" alt="y.png"-->

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase sobre la parte posterior de la lengua para que al chocar contra la úvula la mueva. Inmovilizar la lengua (Martins & Mabilat, 2004) (a diferencia de cuando se pronuncia la r del español, en la que es la punta de la lengua la que se mueve, y no la úvula). Hacer vibrar las cuerdas vocales. (Martins & Mabilat, 2004)</p>
            <p style="text-align: justify; font-weight: lighter;">En el caso de que se esté pronunciando una r apical (propia del español) al mismo tiempo que [ʁ[, lo cual es un error muy frecuente en hispanohablante, corregir manteniendo la punta de la lengua abajo con la ayuda de lápiz sostenido entre los dientes. (Emmanuel Companys, 1966) </p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="font-size: 0.9em;">r, rr (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Dato curioso</p>
            <p style="text-align: justify; font-weight: lighter;">La [ʁ] no es una variante de la R del español, sino de la g; pero para producir la [ʁ] la lengua se retrae más que para [g]. (Emmanuel Companys, 1966)</p>

          </div>

          <p><span style="cursor:pointer;" id="def_art_son_scf_4">ʃ</span>
            (empê<span class="scfC">ch</span>era <a class="btn " id="b_scf_4" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>,
            <span class="scfC">ch</span>emin <a class="btn " id="b_scf_4_2" style="cursor: pointer"><i class="fas fa-volume-up"></i></a>)
            <audio id="son_scf_4">
              <source src="<?php echo base_url('assets/audio/words/strophe_12/m_empe_chera.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <audio id="son_scf_4_2">
                <source src="<?php echo base_url('assets/audio/words/strophe_12/chemin.mp3'); ?>" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>


          </p>

          <div id="sonido_scf_4">
            <p style="font-size: 0.9em;">Fonema <span class="scfC">[ʃ]</span></p>
            <p style="font-size: 0.9em;">Descripción articulatoria</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante constrictiva, prepalatal, redondeada, sorda. (Abry & Veldeman-Abry, 2007, p. 35)</p>
            <p style="text-align: justify; font-weight: lighter;">Consonante fricativa, posterior y sorda. (Emmanuel Companys, 1966, p. 18)</p>
            <p style="font-size: 0.9em;">Diagrama</p>
            <img src="<?php echo base_url('assets/img/diagramas/diagramas_12/ro_1.png'); ?>" alt="ʃʒ.png">

            <p style="font-size: 0.9em;">Cómo emitirlo</p>
            <p style="text-align: justify; font-weight: lighter;">Permitir que el aire pase entre el dorso de la lengua y el paladar, proyectar los labios hacia adelante. No hacer vibrar las cuerdas vocales. (Martins & Mabilat, 2004)</p>
            <p style="font-size: 0.9em;">Grafemas correspondientes</p>
            <p style="text-align: justify; font-weight: lighter;">ch (Freland-Ricard, 2002)</p>
            <p style="font-size: 0.9em;">Dato curioso</p>
            <p style="text-align: justify; font-weight: lighter;">Para el grafema ch algunas palabras se pronuncian con el fonema [k] y otras con el fonema [ʃ]. Desafortunadamente no hay regla para discernir si es uno u otro fonema, por lo que sólo la práctica puede permitir conocer la pronunciación correcta. (Freland-Ricard, 2002)</p>
            <p style="text-align: justify; font-weight: lighter;">Su articulación es la misma que la de [ʒ]. (Emmanuel Companys, 1966)</p>

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
          <p id="schwaM">Datos curiosos</p>

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
