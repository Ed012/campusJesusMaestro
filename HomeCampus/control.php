<?php   
session_start();
$inactivo=120;
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        
    
    } else{
        echo "Esta pagina es solo para usuarios registrados.<br>";
        echo "<br><a href='http://localhost/campuscolegio/LoginCampus/Login.html'>Login</a>";
        exit;
    }

    if(isset($_SESSION['tiempo'])) {
        $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo){
            session_destroy();
            header("location: http://localhost/campuscolegio/Logout/logout.html");
            exit;
        }
    
    }   
    $_SESSION['tiempo'] = time();
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <title>Home</title>
        <link rel="stylesheet" href="stylesheet1.css">
    </head>
    <body row col-xs-12 col-md-4 background="fondo.png">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            
            <header id="main-header">
                
                <h1 id="logo-header" href="#">
                    <span class="colegio-photo"> <img src="Logo Colegio.png" WIDTH=40 HEIGHT=40 BORDER=0 ALT="Logo Colegio"> </span>
                    <span class="site-name">Campus Virtual - Jesús Maestro</span>
                </h1> 
                <h1 id="user-header" href="#">
                    <span class="user-name"> Bienvenid@ de nuevo...... <?php echo $_SESSION['username']; ?></span>
                    <span class="user-photo"> <img src="Usuario 32.png" ALT="Foto Usuario"> </span>
                </h1>
                                
                <!-- / #logo-header -->
            
                <ul class="hList">
                    <li>
                      <a href="http://localhost/campuscolegio/HomeCampus/control.php" class="menu">
                        <h2 class="menu-title">Inicio</h2>
                        <ul class="menu-dropdown">
                          <li>Nada que mostrar</li>
                        </ul>
                      </a>
                    </li>
                    <li>
                      <a href="http://localhost/campuscolegio/Mensajes/Mensajes.html" class="menu">
                        <h2 class="menu-title menu-title_2nd">Mensajes</h2>
                      </a>
                    </li>
                    <li>
                      <a href="#click" class="menu">
                        <h2 class="menu-title menu-title_3rd">Boletín</h2>
                        <ul class="menu-dropdown">
                          <li>Comunicados</li>
                          <li>Anuncios</li>
                        </ul>
                      </a>
                    </li>
                    <li>
                      <a href="http://localhost/campuscolegio/Notas/Notas.html" class="menu">
                        <h2 class="menu-title menu-title_4th">Notas</h2>
                      </a>
                    </li>
                    <li>
                        <a href="http://localhost/campuscolegio/Tareas/Prototype1.html" class="menu">
                          <h2 class="menu-title menu-title_5th">Tareas</h2>

                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/campuscolegio/Horario/index.html" class="menu">
                          <h2 class="menu-title menu-title_6th">Horario</h2>
                        </a>
                    </li>
                    <li>
                        <a href="#click" class="menu">
                          <h2 class="menu-title menu-title_7th">Galería</h2>
                          <ul class="menu-dropdown">
                            <li>Nuevas</li>
                            <li>Personales</li>
                          </ul>
                        </a>
                    </li>
                  </ul>
            
            </header><!-- / #main-header -->
            
            
            <section id="main-content">
            
                <article>
                    <header>
                        <h4>Inicio</h4>
                    </header>
                    
                    <div class="content">
                      <table>
                        <tr>
                          <td><div class="Mensajes"><img src="Mensajes 128.png">
                          <a href="http://localhost/campuscolegio/Mensajes/Mensajes.html"><p>Mensajes</p></a></div></td>
                          <td><div class="Boletín"><img src="Boletín 128.png"><p>Boletín</p></div></td>
                          <td><div class="Notas"><img src="Notas 128.png">
                          <a href="http://localhost/campuscolegio/Notas/Notas.html"><p>Notas</p></a></div></td>
                        </tr>
                        <tr>
                          <td><div class="Tareas" ><img src="Tareas 128.png" >
                            <a href="http://localhost/campuscolegio/Tareas/Prototype1.html"><p>Tareas</p></a>
                        </div></td>
                          <td><div class="Horario"><img src="Horario 128.png">
                          <a href="http://localhost/campuscolegio/Horario/index.html"><p>Horario</p></a>
                        </div></td>
                          <td><div class="Galería"><img src="Galería 128.png"><p>Galería</p></div></td>
                        </tr>
                      </table>
                    </div>
                    
                </article>  <!-- / article -->
            
            </section><!-- / #main-content -->
            
            
            
            <footer id="main-footer">
                <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
            </footer><!-- / #main-footer -->