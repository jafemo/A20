<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <?php
      include "dbNBA.php";
      $nba= new dbNBA();
      $local = $nba->getEquipos();
      $visitante = $nba->getEquipos();
      $temporadas= $nba->getTemporadas();
      ?>
  </head>
  <body class="frontal">
    <form class="" action="filtrado.php" method="post">
      <div class="container">
          <div class="codrops-top">
            <a href="">
            </a>
            <span class="right">

            </span>
            <div class="clr"></div>
        </div>
        <header>
            <h1>NBA</h1>
        </header>
        <div id="container_demo" >
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="procesarLogin.php" autocomplete="on" method="post">
                        <h1>Inserta un equipo</h1>
<!--EQUIPO LOCAL-->
        <label for="username" class="uname"> Equipo local </label>
        <select name="equipolocal">
        <?php
          while ($fila=$local->fetch_assoc()) {
            echo "<option value=".$fila['Nombre'].">".$fila['Nombre']."</option>";
            }
         ?>
      </select><br>

<!--EQUIPO VISITANTE-->
      <label for="username" class="uname"> Equipo visitante </label>
      <select name="equipov">
        <?php
          while ($fila=$visitante->fetch_assoc()) {
            echo "<option value=".$fila['Nombre'].">".$fila['Nombre']."</option>";
            }
         ?>
      </select><br>

<!--TEMPORADA-->
      <label for="username" class="uname" data-icon="u" > Temporada </label>
      <select name="temporada">
        <?php
        while ($fila=$temporadas->fetch_assoc()) {
          echo "<option value=".$fila['temporada'].">".$fila['temporada']."</option>";
          }
          ?>
        </select>

<!--BOTON FILTRAR-->
        <p class="login button">
            <input type="submit" value="Filtrado" />
        </p>

    </form>
  </body>
</html>
