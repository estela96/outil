$(document).ready(function(){
  $('#title').text('Menú');
  $('#svnI').hide(); //Información
  $('#svoI').hide();
  $('#glideI').hide();
    $('#lfpI').hide();
  $('#schwaI').hide();
    $('#scfI').hide();
  $('#svn').hide();
  $('#svo').hide();
  $('#svnNext').hide();
  $('#glide').hide();
  $('#scf').hide();
  $('#lfp').hide();
  $('#schwa').hide();

  for (var i = 1; i <= 11; i++) {
    $('#sonido_svo_'+i).hide();
  }

  for (var i = 1; i <= 5; i++) {
    $('#sonido_scf_'+i).hide();
  }
  $('#sonido_svn_1').hide();
  $('#sonido_svn_2').hide();
  $('#sonido_svn_3').hide();

  $('#sonido_glide_1').hide();
  $('#sonido_glide_2').hide();
  $('#sonido_glide_3').hide();

  $(".svn").click(function(){
    $('#title').text('Sonidos vocálicos nasales').css("color", "#E915CC");
    $('#instruction').hide();
    $('#menu').hide();
    $('#svn').show();
    $('#svo').hide();
    $('#glide').hide();
    $('#scf').hide();
    $('#svnNext').hide();
    $('#lfp').hide();
    $('#schwa').hide();
    $('#sonido_svn_1').hide();
  });
  $(".on_svn").click(function(){

  });

  $(".btnNext").click(function(){
    $('#title').text('Menú').css('color', '#000000');
    $('#instruction').show();
    $('#menu').show();
    $('#svn').hide();
    $('#svo').hide();
    $('#glide').hide();
    $('#scf').hide();
    $('#svnNext').hide();
    $('#lfp').hide();
    $('#schwa').hide();
    $('#sonido_svn_1').hide();
    $('#sonido_svn_2').hide();
  });

  $(".svo").click(function(){
    $('#title').text('Sonidos vocálicos orales').css("color", "#B562F9");
    $('#instruction').hide();
    $('#menu').hide();
    $('#svo').show();
    $('#svn').hide();
    $('#glide').hide();
    $('#scf').hide();
    $('#lfp').hide();
    $('#schwa').hide();
    $('#svnNext').hide();
  });

  $(".glide").click(function(){
    $('#title').text('Sonidos semivocálicos/semiconsonánticos (glide)').css("color", "#ADC329");
    $('#instruction').hide();
    $('#menu').hide();
    $('#svo').hide();
    $('#svn').hide();
    $('#glide').show();
    $('#scf').hide();
    $('#lfp').hide();
    $('#schwa').hide();
    $('#svnNext').hide();
  });

  $(".scf").click(function(){
    $('#title').text('Sonidos consonánticos del francés que no existen en el español').css("color", "#167B2E");
    $('#instruction').hide();
    $('#menu').hide();
    $('#svo').hide();
    $('#svn').hide();
    $('#glide').hide();
    $('#scf').show();
    $('#lfp').hide();
    $('#schwa').hide();
    $('#svnNext').hide();
  });

  $(".lfp").click(function(){
    $('#title').text('Letras finales que no se pronuncian').css("color", "#15A9BE");
    $('#instruction').hide();
    $('#menu').hide();
    $('#svo').hide();
    $('#svn').hide();
    $('#glide').hide();
    $('#scf').hide();
    $('#lfp').show();
    $('#schwa').hide();
    $('#svnNext').hide();
  });

  $(".schwa").click(function(){
    $('#title').text('Schwa que no se pronuncia').css('color', 'red');
    $('#instruction').hide();
    $('#menu').hide();
    $('#svo').hide();
    $('#svn').hide();
    $('#glide').hide();
    $('#scf').hide();
    $('#lfp').hide();
    $('#schwa').show();
    $('#svnNext').hide();
  });

/*Todas las M de menú*/
var m_svn = 0;
$('#svnM').click(function(){
  if(m_svn == 0){
    $('#svnI').show();
    m_svn=1;
  }else{
    $('#svnI').hide();
    m_svn=0;
  }

});

var m_svo = 0;
$('#svoM').click(function(){
  if(m_svo == 0){
    $('#svoI').show();
    m_svo=1;
  }else{
    $('#svoI').hide();
    m_svo=0;
  }

});

var m_scf = 0;
$('#scfM').click(function(){
  if(m_scf == 0){
    $('#scfI').show();
    m_scf=1;
  }else{
    $('#scfI').hide();
    m_scf=0;
  }

});

var m_lfp = 0;
$('#lfpM').click(function(){
  if(m_lfp == 0){
    $('#lfpI').show();
    m_lfp=1;
  }else{
    $('#lfpI').hide();
    m_lfp=0;
  }

});
var m_glide = 0;
$('#glideM').click(function(){
  if(m_glide == 0){
    $('#glideI').show();
    m_glide=1;
  }else{
    $('#glideI').hide();
    m_glide=0;
  }

});

var m_schwa = 0;
$('#schwaM').click(function(){
  if(m_schwa == 0){
    $('#schwaI').show();
    m_schwa=1;
  }else{
    $('#schwaI').hide();
    m_schwa=0;
  }

});
var def_art_son_svn = 0;
  $('#def_art_son_svn').click(function(){
    if(def_art_son_svn == 0){
      $('#sonido_svn_1').show();
      def_art_son_svn =1;
    }else{
      $('#sonido_svn_1').hide();
      def_art_son_svn =0;
    }

  });
  var def_art_son_svn_2 = 0;
    $('#def_art_son_svn_2').click(function(){
      if(def_art_son_svn_2 == 0){
        $('#sonido_svn_2').show();
        def_art_son_svn_2 =1;
      }else{
        $('#sonido_svn_2').hide();
        def_art_son_svn_2 =0;
      }

    });

    var def_art_son_svn_3 = 0;
      $('#def_art_son_svn_3').click(function(){
        if(def_art_son_svn_3 == 0){
          $('#sonido_svn_3').show();
          def_art_son_svn_3 =1;
        }else{
          $('#sonido_svn_3').hide();
          def_art_son_svn_3 =0;
        }

      });
  var def_art_son_svo_1 = 0;
    $('#def_art_son_svo_1').click(function(){
      if(def_art_son_svo_1 == 0){
        $('#sonido_svo_1').show();
        def_art_son_svo_1 =1;
      }else{
        $('#sonido_svo_1').hide();
        def_art_son_svo_1 =0;
      }

    });

  var def_art_son_svo_2 = 0;
    $('#def_art_son_svo_2').click(function(){
      if(def_art_son_svo_2 == 0){
        $('#sonido_svo_2').show();
        def_art_son_svo_2 =1;
      }else{
        $('#sonido_svo_2').hide();
        def_art_son_svo_2 =0;
      }
    });

  var def_art_son_svo_3 = 0;
    $('#def_art_son_svo_3').click(function(){
      if(def_art_son_svo_3 == 0){
        $('#sonido_svo_3').show();
        def_art_son_svo_3 =1;
      }else{
        $('#sonido_svo_3').hide();
        def_art_son_svo_3 =0;
      }

    });
  var def_art_son_svo_4 = 0;
    $('#def_art_son_svo_4').click(function(){
      if(def_art_son_svo_4 == 0){
        $('#sonido_svo_4').show();
        def_art_son_svo_4 =1;
      }else{
        $('#sonido_svo_4').hide();
        def_art_son_svo_4 =0;
      }

    });
  var def_art_son_svo_5 = 0;
    $('#def_art_son_svo_5').click(function(){
      if(def_art_son_svo_5 == 0){
        $('#sonido_svo_5').show();
        def_art_son_svo_5 =1;
      }else{
        $('#sonido_svo_5').hide();
        def_art_son_svo_5 =0;
      }
    });
  var def_art_son_svo_6 = 0;
    $('#def_art_son_svo_6').click(function(){
      if(def_art_son_svo_6 == 0){
        $('#sonido_svo_6').show();
        def_art_son_svo_6 =1;
      }else{
        $('#sonido_svo_6').hide();
        def_art_son_svo_6 =0;
      }
    });

  var def_art_son_svo_7 = 0;
    $('#def_art_son_svo_7').click(function(){
      if(def_art_son_svo_7 == 0){
        $('#sonido_svo_7').show();
        def_art_son_svo_7 =1;
      }else{
        $('#sonido_svo_7').hide();
        def_art_son_svo_7 =0;
      }
    });
  var def_art_son_svo_8 = 0;
    $('#def_art_son_svo_8').click(function(){
      if(def_art_son_svo_8 == 0){
        $('#sonido_svo_8').show();
        def_art_son_svo_8 =1;
      }else{
        $('#sonido_svo_8').hide();
        def_art_son_svo_8 =0;
      }
    });

  var def_art_son_svo_9 = 0;
    $('#def_art_son_svo_9').click(function(){
      if(def_art_son_svo_9 == 0){
        $('#sonido_svo_9').show();
        def_art_son_svo_9 =1;
      }else{
        $('#sonido_svo_9').hide();
        def_art_son_svo_9 =0;
      }
    });
  var def_art_son_svo_10 = 0;
    $('#def_art_son_svo_10').click(function(){
      if(def_art_son_svo_10 == 0){
        $('#sonido_svo_10').show();
        def_art_son_svo_10 =1;
      }else{
        $('#sonido_svo_10').hide();
        def_art_son_svo_10 =0;
      }
    });

    var def_art_son_svo_11 = 0;
      $('#def_art_son_svo_11').click(function(){
        if(def_art_son_svo_11 == 0){
          $('#sonido_svo_11').show();
          def_art_son_svo_11 =1;
        }else{
          $('#sonido_svo_11').hide();
          def_art_son_svo_11 =0;
        }
      });

    var def_art_son_glide_1 = 0;
      $('#def_art_son_glide_1').click(function(){
        if(def_art_son_glide_1 == 0){
          $('#sonido_glide_1').show();
          def_art_son_glide_1 =1;
        }else{
          $('#sonido_glide_1').hide();
          def_art_son_glide_1 =0;
        }
      });

      var def_art_son_glide_2 = 0;
        $('#def_art_son_glide_2').click(function(){
          if(def_art_son_glide_2 == 0){
            $('#sonido_glide_2').show();
            def_art_son_glide_2 =1;
          }else{
            $('#sonido_glide_2').hide();
            def_art_son_glide_2 =0;
          }
        });

        var def_art_son_glide_3 = 0;
          $('#def_art_son_glide_3').click(function(){
            if(def_art_son_glide_3 == 0){
              $('#sonido_glide_3').show();
              def_art_son_glide_3 =1;
            }else{
              $('#sonido_glide_3').hide();
              def_art_son_glide_3 =0;
            }
          });

          var def_art_son_scf_1 = 0;
            $('#def_art_son_scf_1').click(function(){
              if(def_art_son_scf_1 == 0){
                $('#sonido_scf_1').show();
                def_art_son_scf_1 =1;
              }else{
                $('#sonido_scf_1').hide();
                def_art_son_scf_1 =0;
              }
            });
            var def_art_son_scf_2 = 0;
              $('#def_art_son_scf_2').click(function(){
                if(def_art_son_scf_2 == 0){
                  $('#sonido_scf_2').show();
                  def_art_son_scf_2 =1;
                }else{
                  $('#sonido_scf_2').hide();
                  def_art_son_scf_2 =0;
                }
              });
              var def_art_son_scf_3 = 0;
                $('#def_art_son_scf_3').click(function(){
                  if(def_art_son_scf_3 == 0){
                    $('#sonido_scf_3').show();
                    def_art_son_scf_3 =1;
                  }else{
                    $('#sonido_scf_3').hide();
                    def_art_son_scf_3 =0;
                  }
                });
                var def_art_son_scf_4 = 0;
                  $('#def_art_son_scf_4').click(function(){
                    if(def_art_son_scf_4 == 0){
                      $('#sonido_scf_4').show();
                      def_art_son_scf_4 =1;
                    }else{
                      $('#sonido_scf_4').hide();
                      def_art_son_scf_4 =0;
                    }
                  });

                  var def_art_son_scf_5 = 0;
                    $('#def_art_son_scf_5').click(function(){
                      if(def_art_son_scf_5 == 0){
                        $('#sonido_scf_5').show();
                        def_art_son_scf_5 =1;
                      }else{
                        $('#sonido_scf_5').hide();
                        def_art_son_scf_5 =0;
                      }
                    });
});
