<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>
    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
      
      <?php $resultado = $_POST;?>
      <?php	$nombre = $resultado['nombre'];?>
      <?php	$apellido = $resultado['apellido'];?>

      <?php			 
        if (!(filter_has_var(INPUT_POST, 'nombre') && 
              (strlen(filter_input(INPUT_POST, 'apellido')) > 0))) {
                echo "Campo obligatorio";
              } else { ?>
              <p>Nombre: <?php echo $nombre;?></p>
          <?php } ?>

              <br>

      <?php	if(!isset($apellido) || trim($apellido) != '') { ?>
        <p>Apellido: <?php echo $apellido; ?></p>
      <?php }	else { 
        echo "Campo obligatorio";
        } ?>

      












    </div>
  </body>
</html>