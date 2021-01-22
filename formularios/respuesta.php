<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  </head>
  <body>
    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
      
      <?php $resultado = $_POST;?>
      <?php	$nombre = $resultado['nombre'];?>
      <?php	$apellido = $resultado['apellido'];?>

        <?php /*
                // Validar inputs

        if (!(filter_has_var(INPUT_POST, 'nombre') && 
              (strlen(filter_input(INPUT_POST, 'nombre')) > 0))) {
                echo 'Campo "Nombre" obligatorio';
              } else { ?>
              <p>Nombre: <?php echo $nombre;?></p>
          <?php } ?>

      <?php
        if (!(filter_has_var(INPUT_POST, 'apellido') && 
              (strlen(filter_input(INPUT_POST, 'apellido')) > 0))) {
                echo 'Campo "Apellido" obligatorio';
              } else { ?>
              <p>Apellido: <?php echo $apellido;?></p>
          <?php } */ ?>
          

      <?php echo "<h2>Datos personales</h2>";?>
      <?php	if(!isset($nombre) || trim($nombre) != '') { ?>
        <p>Nombre: <?php echo $nombre; ?></p>
      <?php }	else { 
        echo 'Campo "Nombre" obligatorio. <br>';
        } ?>

      <?php	if(!isset($apellido) || trim($apellido) != '') { ?>
        <p>Apellido: <?php echo $apellido; ?></p>
      <?php }	else { 
        echo 'Campo "Apellido" obligatorio. <br>';
        } ?>
  <hr>

      <?php//Validar checkboxes (Singular)?>
      <?php echo "<h2>Notificaciones</h2>";?>
      <?php
      if(isset($_POST['notificaciones'])) {
        $notificaciones = $_POST['notificaciones'];
        if($notificaciones == 'on') {
          echo 'Se ha inscrito correctamente a las notificaciones.';
        }
      } else {
        echo "Sin notificaciones subscritas";
      }
      ?>

      <hr>

      <?php//Validar array de checkboxes?>
      <?php
      if(isset($_POST['curso'])) {
        $cursos = $_POST['curso'];
        echo "<h2>Cursos</h2>";
        echo "Tus cursos son <br/>";
        foreach($cursos as $curso) {
          echo $curso . '<br/>';
        }
      } else {
        echo "No has seleccionado algún curso.";
      }
      ?>

      <hr>

      <?php// Validar Select?>
      <?php
      if(isset($_POST['area'])) {
        $area = $_POST['area'];
        echo "<h2>Área de especialización</h2>";
        switch($area) {
          case 'fe':
            echo "Front-End";
            break;
          case 'be':
            echo "Back-End";
            break;
          case 'fs';
            echo "Full Stack";
            default:
            echo "Debes elegir un área.";
            break;
        }
      }
      ?>
      <hr>

      <?php//Validar un radio button?>
      <?php  $opciones = array(
                      'pres' => 'Presencial',
                      'online' => 'En Línea'
                  );?>
      <h2>Tipo de curso elegido</h2>
      <?php
      if(array_key_exists($_POST['opciones'], $opciones)) {
        $tipo_curso = $_POST['opciones'];
        switch ($tipo_curso) {
          case 'pres':
            echo 'Elegiste curso presencial.';
            break;
          case 'online';
            echo 'Elegiste curso en línea.';
            break;
        } 
      } else {
        echo 'Debes elegir una tipo de curso.';
      }
      ?>

      <hr>

      <?php//Validar textarea?>
      <?php
      
      
      
      
      ?>









    </div>
  </body>
</html>
