<?
$usuario = "postgres";
$contraseña = "1Vnarmando";

try {
    $mbd = new PDO('pgsql:host=localhost;dbname=paginakarmin', $usuario, $contraseña);
    //Sentencias preparadas, son mas repidas que las sentencias normales y
    //evitan la insercion de codigo sql.
    // $sql = "INSERT INTO departamento (nombre) VALUES (':nombre')";
    // $sentencia = $mbd->prepare($sql);
    // $sentencia->bindParam(':nombre',$nombre);
    // $nombre = 'bastidores';
    // $sentencia->execute();
    $sql = 'SELECT * from departamento';
    foreach($mbd->query($sql) as $fila) {
      print $fila['departamento_id']."\t";
      print $fila['nombre'];
      echo '<br>';
    }
    //Las siguientes lineas comentadas, realizan las misma funcion que las de arriba.
    //foreach ($mbd->query($sql) as $clave => $valor) {
      // print $valor[0]."\t";
      // print $valor[1];
      //echo "<br>";
    //}
    unset($fila);//Se utiliza para desreferenciar del ultimo valor del array la variable auxiliar
                //del foreach para de esta forma no sobreescribir valores del array.
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    echo "pilin";
    die();
}
?>
