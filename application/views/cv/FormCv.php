<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/simplebar.css");?>">
    <!-- Fonts CSS -->
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/feather.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/select2.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/dropzone.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/uppy.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.steps.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.timepicker.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/quill.snow.css");?>">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/daterangepicker.css");?>">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/app-light.css");?>" id="lightTheme">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/app-dark.css");?>" id="darkTheme" disabled>
    
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      <!-- /.col -->
      <style>
        .page-container {
          display: flex;
          width: 200%; /* Deux pages côte à côte */
          transition: transform 1s ease-in-out; /* Durée de la transition à 1 seconde */
        }
    
        .page {
          width: 50%;
          box-sizing: border-box;
          padding: 20px;
        }
    
        .navigation {
          text-align: center;
          margin-top: 20px;
        }
    
        /* Animation pour déplacer les pages */
        .page-slide {
          transform: translateX(-50%);
        }
    
        /* Cacher les boutons */
        .hidden {
          display: none;
        }
      </style>
      
      <form action="<?php echo site_url("cv_control/cv/checkcv"); ?>" method="GET">
      <div class="page-container">
        <div class="page" id="page1">
          <div class="col-md-6">
            <div class="card shadow mb-4">  
              <div class="card-header">
                <strong class="card-title">Remplissez ce CV</strong>
              </div>
              <div class="card-body">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Nom</label>
                      <input type="text" class="form-control" id="validationCustom3" value="Mark" required name="nom">
                      
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom4">Prénom</label>
                      <input type="text" class="form-control" id="validationCustom4" value="Otto" required name="prenom">
                      
                    </div>
                  </div> <!-- /.form-row -->
                  <div class="form-row">
                    <div class="col-md-8 mb-3">
                      <label for="exampleInputEmail2">Addresse Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp1" required name="email">
                      <div class="invalid-feedback"> Please use a valid email </div>
                      <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="custom-phone">Telephone</label>
                      <input class="form-control input-phoneus" id="custom-phone" maxlength="14" required name="telephone">
                      <div class="invalid-feedback"> Please enter a correct phone </div>
                    </div>
                  </div> <!-- /.form-row -->
                  <div class="form-group mb-3">
                    <label for="address-wpalaceholder">Address</label>
                    <input type="text" id="address-wpalaceholder" class="form-control" placeholder="Enter your address" name="adresse">
                    
                    
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="date-input1">Date de naissance</label>
                      <div class="input-group">]
                        <input type="text" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2" name="date">
                        <div class="input-group-append">
                          <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationSelect2">Sexe</label>
                      <select class="form-control select2" id="validationSelect2" required name="genre">
                        <option value="">Votre genre</option>
                        <?php $genre = $genre_pays[1];
                            foreach ( $genre->result_array() as $row) {?>
                            <option value="<?php echo $row['idgenre']; ?>"><?php echo $row['nomgenre']; ?></option>
                          <?php } ?>
                          
                      </select>
                    </div>
                    
                    
                  </div>
                              
                  
                
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div> <!-- /.col -->
        </div>
    
        <div class="page" id="page2">
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationSelect2">Situation matrimoniale</label>
              <select class="form-control select2" id="validationSelect2" required name="genre">
                <option value="">Votre situtation</option>
                <?php $situationmatrimoniale = $genre_pays[5];
                            foreach ( $situationmatrimoniale->result_array() as $row) {?>
                    <option value="<?php echo $row['idsituation']; ?>"><?php echo $row['nomsituation']; ?></option>
                  <?php } ?>
                          
              </select>
            </div>
          </div>
          <div class="form-row">
            
            <div class="col-md-3 mb-3">
              <label for="validationSelect2">Nationalité</label>
              <select class="form-control select2" id="validationSelect2" required name="pays">
                <option value="">Choissisez votre pays</option>
                  <?php $pays = $genre_pays[0];
                            foreach ( $pays->result_array() as $row) {?>
                    <option value="<?php echo $row['idpays']; ?>"><?php echo $row['nompays']; ?></option>
                  <?php } ?>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationSelect2">Ville</label>
              <select class="form-control select2" id="validationSelect2" required name="pays">
                <option value="">Choissisez votre ville</option>
                  <?php $ville = $genre_pays[4];
                            foreach ( $ville->result_array() as $row) {?>
                    <option value="<?php echo $row['idville']; ?>"><?php echo $row['nomville']; ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Parcours professionel</strong>
              </div>
              <div class="card-body">
                  <div class="form-group">
                    <label for="validationCustom3">Diplôme</label>
                          <?php $diplome = $genre_pays[2];
                            foreach ( $diplome->result_array() as $row) {?>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="<?php echo $row['iddiplome']; ?>" id="invalidCheck" name="diplome[]">
                              <label class="form-check-label" for="invalidCheck"><?php echo $row['nomdiplome']; ?></label>
                            </div>
                          <?php } ?>      
                  </div>

                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="validationSelect2">Expérience professionel</label>
                      <select class="form-control select2" id="validationSelect2" name="exp">
                        <option value="">Année d'expérience</option>
                          <?php $exp = $genre_pays[3];
                            foreach ( $exp->result_array() as $row) {?>
                            <option value="<?php echo $row['idexperience']; ?>"><?php echo $row['min']." - ".$row['max']; ?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>

                  <!-- <div class="form-group mb-3">
                    <label for="validationTextarea1">Note</label>
                    <textarea class="form-control" id="validationTextarea1" placeholder="Take a note here" required="" rows="3"></textarea>
                    <div class="invalid-feedback"> Please enter a message in the textarea. </div>
                  </div> -->


                
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div> <!-- /.col -->
          
        </div>
      </div>
            
            <div>
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>

      
    </form>
          
          <button id="suivant" >Suivant</button>
          <button id="retour" class="hidden">Retour</button>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="<?php echo base_url("js/jquery.min.js");?>"></script>
    <script src="<?php echo base_url("js/popper.min.js");?>"></script>
    <script src="<?php echo base_url("js/moment.min.js");?>"></script>
    <script src="<?php echo base_url("js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("js/simplebar.min.js");?>"></script>
    <script src="<?php echo base_url("js/daterangepicker.js");?>"></script>
    <script src="<?php echo base_url("js/jquery.stickOnScroll.js");?>"></script>
    <script src="<?php echo base_url("js/tinycolor-min.js");?>"></script>
    <script src="<?php echo base_url("js/config.js");?>"></script>
    <script src="<?php echo base_url("js/jquery.mask.min.js");?>"></script>
    <script src="<?php echo base_url("js/select2.min.js");?>"></script>
    <script src="<?php echo base_url("js/jquery.steps.min.js");?>"></script>
    <script src="<?php echo base_url("js/jquery.validate.min.js");?>"></script>
    <script src="<?php echo base_url("js/jquery.timepicker.js");?>"></script>
    <script src="<?php echo base_url("js/dropzone.min.js");?>"></script>
    <script src="<?php echo base_url("js/uppy.min.js");?>"></script>
    <script src="<?php echo base_url("js/quill.min.js");?>"></script>

    <script>
      const page1 = document.getElementById('page1');
      const page2 = document.getElementById('page2');
      const suivant = document.getElementById('suivant');
      const retour = document.getElementById('retour');
  
      suivant.addEventListener('click', function() {
        page1.style.transition = 'transform 1s ease-in-out';
        page2.style.transition = 'transform 1s ease-in-out';
        page1.classList.add('page-slide');
        page2.classList.add('page-slide');
        suivant.classList.add('hidden');
        setTimeout(function() {
          suivant.disabled = true;
        }, 1000); // Désactiver le bouton après 1 seconde
        retour.classList.remove('hidden');
        setTimeout(function() {
          retour.disabled = false;
        }, 1000); // Activer le bouton "Retour" après 1 seconde
      });
  
      retour.addEventListener('click', function() {
        page1.style.transition = 'transform 1s ease-in-out';
        page2.style.transition = 'transform 1s ease-in-out';
        page1.classList.remove('page-slide');
        page2.classList.remove('page-slide');
        retour.classList.add('hidden');
        setTimeout(function() {
          retour.disabled = true;
        }, 1000); // Désactiver le bouton après 1 seconde
        suivant.classList.remove('hidden');
        setTimeout(function() {
          suivant.disabled = false;
        }, 1000); // Activer le bouton "Suivant" après 1 seconde
      });
    </script>

    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="<?php echo base_url("js/apps.js");?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>