<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecosistemas de México</title>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="js/chart.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
  <!-- pagina de inicio -->
  <div data-role="page" id="inicio">
    <div data-role="content">
      <div class="intro">
        <img src="img/logo.png" alt="Ecosistemas de México">
        <h1>Bienvenidos</h1>
        <p>A nuestra app móvil, donde conoceras información relevante sobre los distintos ecosistemas de nuestro país.</p>
      </div>
      <div class="menu-inicio">
        <a href="#ecosistemas" data-role="button" data-transition="flip">Ecosistemas</a>
        <a href="#nosotros" data-role="button" data-transition="flip">Nosotros</a>
        <a href="#grafica" data-role="button" data-transition="flip">Graficas</a>
        <a href="#contacto" data-role="button" data-transition="flip">Contacto</a>
      </div>
      <div class="footer-interno">
        <p>DERECHOS RESERVADOS 2019 TECNICO EN PROGRAMACION GPO. 4JM </p>
      </div>
    </div>
  </div>
  <!-- fin de la pagina de inicio -->

  <!-- pagina de ecosistemas -->
  <div data-role="page" id="ecosistemas">
    <div data-role="header">
      <img src="img/logo.png" width="100%" alt="Ecosistemas de México">
      <nav data-role="navbar">
        <ul>
          <li><a href="#inicio" data-icon="home" data-theme="e" data-transition="flip">Home</a></li>
          <li><a href="#ecosistemas" data-icon="cloud" data-theme="e" data-transition="flip">Ecosistemas</a></li>
          <li><a href="#nosotros" data-icon="user" data-theme="e" data-transition="flip">Nosotros</a></li>
          <li><a href="#grafica" data-icon="star" data-theme="e" data-transition="flip">Graficas</a></li>
          <li><a href="#contacto" data-icon="mail" data-theme="e" data-transition="flip">Contacto</a></li>
        </ul>
      </nav>
    </div>

    <div data-role="content">
      <ul data-role="listview" data-inset="true">
        <?php
        $consultaEcosistema = "SELECT * FROM ecosistema ORDER BY nombre";
        $result = mysqli_query($bd, $consultaEcosistema);
        while ($muestraDatosEcositema = mysqli_fetch_array($result)) {
        ?>
          <li><a href="ecodetalle.php?ecoId=<?php echo $muestraDatosEcositema['id'] ?>" data-rel="dialog" data-transition="flip">
              <img src="<?php echo $muestraDatosEcositema['imagen'] ?>" height="100%">
              <h2><?php echo $muestraDatosEcositema['nombre'] ?></h2>
              <p><?php echo $muestraDatosEcositema['descripcion'] ?></p>
            </a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
  <!-- fin ecosistemas -->


  <!-- inicio nosotros -->
  <div data-role="page" id="nosotros">
    <div data-role="header">
      <img src="img/logo.png" width="100%" alt="Ecosistemas de México">
      <nav data-role="navbar">
        <ul>
          <li><a href="#inicio" data-icon="home" data-theme="e" data-transition="flip">Home</a></li>
          <li><a href="#ecosistemas" data-icon="cloud" data-theme="e" data-transition="flip">Ecosistemas</a></li>
          <li><a href="#nosotros" data-icon="user" data-theme="e" data-transition="flip">Nosotros</a></li>
          <li><a href="#grafica" data-icon="star" data-theme="e" data-transition="flip">Graficas</a></li>
          <li><a href="#contacto" data-icon="mail" data-theme="e" data-transition="flip">Contacto</a></li>
        </ul>
      </nav>
    </div>

    <div data-role="content">
      <ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Busqueda por alumno...">
        <?php
        $consultaAlumno = "SELECT * FROM alumnos ORDER BY nombre";
        $resultado = mysqli_query($bd, $consultaAlumno);
        while ($muestraDatosAlumno = mysqli_fetch_array($resultado)) {
        ?>
          <li><a href="nosotrosdetalle.php?alumnoId=<?php echo $muestraDatosAlumno['id'] ?>" data-rel="dialog" data-transition="flip">
              <img src="<?php echo $muestraDatosAlumno['imagen'] ?>" height="100%">
              <h2><?php echo $muestraDatosAlumno['nombre'] . ' ' . $muestraDatosAlumno['apellidos'] ?></h2>
              <p><?php echo $muestraDatosAlumno['biografia'] ?></p>
            </a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
  <!-- fin nosotros -->

  <!-- inicio contacto -->
  <div data-role="page" id="contacto">
    <div data-role="header">
      <img src="img/logo.png" width="100%" alt="Ecosistemas de México">
      <nav data-role="navbar">
        <ul>
          <li><a href="#inicio" data-icon="home" data-theme="e" data-transition="flip">Home</a></li>
          <li><a href="#ecosistemas" data-icon="cloud" data-theme="e" data-transition="flip">Ecosistemas</a></li>
          <li><a href="#nosotros" data-icon="user" data-theme="e" data-transition="flip">Nosotros</a></li>
          <li><a href="#grafica" data-icon="star" data-theme="e" data-transition="flip">Graficas</a></li>
          <li><a href="#contacto" data-icon="mail" data-theme="e" data-transition="flip">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div data-role="content" class="contacto-titulo">
      <h2>Envianos un mensaje</h2>
      <P>Carretera federal México-puebla Tlalpizahuac Valle de Chalco Edo. de México</P>
      <P>Tel.(55) 13 14 19 21. 59 86 30 73. </P>
    </div>
  </div>
  <!-- fin contacto -->

  <!-- inicio graficas -->
  <div data-role="page" id="grafica">
    <div data-role="header">
      <img src="img/logo.png" width="100%" alt="Ecosistemas de México">
      <nav data-role="navbar">
        <ul>
          <li><a href="#inicio" data-icon="home" data-theme="e" data-transition="flip">Home</a></li>
          <li><a href="#ecosistemas" data-icon="cloud" data-theme="e" data-transition="flip">Ecosistemas</a></li>
          <li><a href="#nosotros" data-icon="user" data-theme="e" data-transition="flip">Nosotros</a></li>
          <li><a href="#grafica" data-icon="star" data-theme="e" data-transition="flip">Graficas</a></li>
          <li><a href="#contacto" data-icon="mail" data-theme="e" data-transition="flip">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div data-role="content">
      <div class="container animated wow bounceIn slow" data-wow-delay="900ms">
        <h2 class="graficaArrecifes">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN ARRECIFES DE CORAL</h2>
        <!-- GRAFICA de ecosistemas -->

        <script>
          $(document).ready(function() {
            new Chart(document.getElementById("graficaArrecifes"), {
              type: 'line',
              data: {
                labels: ["Baja California", "Baja California sur", "Sonora", "Sinaloa", "Nayarit"],
                datasets: [{
                  data: [25, 30, 24, 35, 33],
                  label: "Flora",
                  borderColor: "#02E301",
                  fill: false,
                  backgroundColor: "#02E301",
                  lineTension: 0,
                  pointRadius: 5
                }, {
                  data: [70, 48, 32, 24, 66],
                  label: "Fauna",
                  borderColor: "#2d2d2d",
                  fill: false,
                  backgroundColor: "#2d2d2d",
                  lineTension: 0,
                  pointRadius: 5
                }, {
                  data: [32, 30, 35, 40, 30],
                  label: "Temperatura",
                  borderColor: "#ff8000",
                  fill: false,
                  backgroundColor: "#ff8000",
                  lineTension: 0,
                  pointRadius: 5
                }, ]
              },
              options: {
                responsive: true,
                title: {
                  display: true,
                  position: "top",
                  fontSize: 15,
                },

                scales: {
                  yAxes: [{
                    ticks: {
                      max: 100,
                      min: 0,
                      stepSize: 5
                    }
                  }]
                },
              }
            });

          });
        </script>

        <div class="mb-4">
          <canvas id="graficaArrecifes" width="100%"></canvas>
        </div>
      </div>


      <!-- FIN DEL CONTENIDO PRINCIPAL -->
      <br>
      <hr>

      <div class="container animated wow bounceIn slow" data-wow-delay="900ms">
        <h2 class="graficaManglares">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN MANGLARES</h2>
        <!-- GRAFICA de ecosistemas -->

        <script>
          $(document).ready(function() {
            new Chart(document.getElementById("graficaManglares"), {
              type: 'line',
              data: {
                labels: ["Chiapas", "Baja California", "Quintana Roo", "Tamaulipas", "Guerrero"],
                datasets: [{
                  data: [70, 60, 54, 70, 85],
                  label: "Flora",
                  borderColor: "#02E301",
                  fill: false,
                  backgroundColor: "#02E301",
                  lineTension: 0,
                  pointRadius: 5
                }, {
                  data: [43, 75, 74, 81, 82],
                  label: "Fauna",
                  borderColor: "#2d2d2d",
                  fill: false,
                  backgroundColor: "#2d2d2d",
                  lineTension: 0,
                  pointRadius: 5
                }, {
                  data: [30, 34, 35, 37, 35],
                  label: "Temperatura",
                  borderColor: "#ff8000",
                  fill: false,
                  backgroundColor: "#ff8000",
                  lineTension: 0,
                  pointRadius: 5
                }, ]
              },
              options: {
                responsive: true,
                title: {
                  display: true,
                  position: "top",
                  fontSize: 15,
                },

                scales: {
                  yAxes: [{
                    ticks: {
                      max: 100,
                      min: 0,
                      stepSize: 5
                    }
                  }]
                },
              }
            });

          });
        </script>

        <div class="mb-4">
          <canvas id="graficaManglares" width="100%"></canvas>
        </div>
      </div>
      <br>
      <hr>

      <h2 class="graficaAlgas">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN BOSQUES DE ALGAS GIGANTES</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaAlgas"), {
            type: 'line',
            data: {
              labels: ["Baja California", "Baja California sur", "Nayarit"],
              datasets: [{
                data: [40, 40, 39],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [30, 40, 35],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [21, 22, 20],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 60,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaAlgas" width="100%"></canvas>
      </div>
      <br>
      <hr>

      <h2 class="graficaPastizales">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN PASTIZALES</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaPastizales"), {
            type: 'line',
            data: {
              labels: ["Chihuahua", "Coahulia", "Sonora", "Durango", "Zacatecas", "Jalisco"],
              datasets: [{
                data: [29, 22, 12, 23, 12, 22],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [15, 12, 20, 20, 10, 13],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [20, 27, 20, 14, 23, 16],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 50,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaPastizales" width="100%"></canvas>
      </div>
      <BR>
      <HR>

      <h2 class="graficaSseca">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN SELVA SECA</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaSseca"), {
            type: 'line',
            data: {
              labels: ["Sonora", "Chihuahua", "Chiapas"],
              datasets: [{
                data: [60, 80, 40],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [28, 32, 30],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [25, 25, 40],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 100,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaSseca" width="100%"></canvas>
      </div>
      <BR>
      <HR>

      <h2 class="graficaShumeda">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN SELVA HUMEDA</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaShumeda"), {
            type: 'line',
            data: {
              labels: ["Chiapas", "Yucatan"],
              datasets: [{
                data: [43, 57],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [30, 44],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [15, 19],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 100,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaShumeda" width="100%"></canvas>
      </div>
      <BR>
      <HR>

      <h2 class="graficaBtemplados">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN BOSQUE TEMPLADO</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaBtemplados"), {
            type: 'line',
            data: {
              labels: ["Baja California", "Chiapas"],
              datasets: [{
                data: [65, 75],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [24, 16],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [14, 10],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 80,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaBtemplados" width="100%"></canvas>
      </div>
      <BR>
      <HR>

      <h2 class="graficaBnublados">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN BOSQUE NUBLADO</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaBnublados"), {
            type: 'line',
            data: {
              labels: ["Chiapas", "Guerrero", "Oaxaca"],
              datasets: [{
                data: [25, 33, 17],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [12, 20, 10],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [20, 24, 25],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 50,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaBnublados" width="100%"></canvas>
      </div>
      <BR>
      <HR>

      <h2 class="graficaLaguna">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN LAGUNAS COSTERAS</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaLaguna"), {
            type: 'line',
            data: {
              labels: ["Baja Caifornia", "Yucatan", "Veracruz", "Guerrero"],
              datasets: [{
                data: [30, 60, 80, 30],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [16, 20, 10, 10],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [18, 28, 16, 10],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 100,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaLaguna" width="100%"></canvas>
      </div>
      <BR>
      <HR>

      <h2 class="graficaMatorrales">VARIACIÓN DE FLORA, FAUNA Y TEMPERATURA POR ECOSISTEMA EN MATORRALES</h2>
      <!-- GRAFICA de ecosistemas -->

      <script>
        $(document).ready(function() {
          new Chart(document.getElementById("graficaMatorrales"), {
            type: 'line',
            data: {
              labels: ["Tamaulipas", "Nuevo Leon", "Coahulia", "Chihuahua", "Durango"],
              datasets: [{
                data: [55, 41, 22, 20, 33, 27],
                label: "Flora",
                borderColor: "#02E301",
                fill: false,
                backgroundColor: "#02E301",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [22, 20, 36, 25, 25],
                label: "Fauna",
                borderColor: "#2d2d2d",
                fill: false,
                backgroundColor: "#2d2d2d",
                lineTension: 0,
                pointRadius: 5
              }, {
                data: [21, 22, 20, 23, 24],
                label: "Temperatura",
                borderColor: "#ff8000",
                fill: false,
                backgroundColor: "#ff8000",
                lineTension: 0,
                pointRadius: 5
              }, ]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                position: "top",
                fontSize: 15,
              },

              scales: {
                yAxes: [{
                  ticks: {
                    max: 70,
                    min: 0,
                    stepSize: 5
                  }
                }]
              },
            }
          });

        });
      </script>

      <div class="mb-4">
        <canvas id="graficaMatorrales" width="100%"></canvas>
      </div>
      <BR>

    </div>
  </div>
  <!-- fin graficas -->

</body>

</html>