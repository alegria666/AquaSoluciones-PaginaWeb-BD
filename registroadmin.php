

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/disenore.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Registro de datos</title>
</head>
<body>

    <header>
        <div class="cuadrologo">
        <div class="logo">
            <a href="inicio.html"><img src="./imagenes/logo.jpg" alt="#" /></a>
        </div>
        </div>
    </header>
    
    <!--linea azul-->
    <div id="separador"></div>

  

    <form id="miFormulario" action="" method="post">
        <h2 id="opciones">Elija una opcion:</h2>
        <select name="combobox" id="combobox">
            <option value="0">Selecciona una</option>
            <option value="1">Empleados</option>
            <option value="2">Clientes</option>
            <option value="3">Contratos Empleado</option>
            <option value="4">Contratos de Servicio</option>
            <option value="5">Medidores</option>
            <option value="6">Lecturas de Medidor</option>
            <option value="7">Facturas</option>
            <option value="8">Pagos</option>
            <option value="9">Reportes del Servicio</option>
            <option value="10">Noticias</option>
        </select>
        <br><br>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Obtén el formulario y el combobox
                var formulario = document.getElementById('miFormulario');
                var combobox = formulario.querySelector('#combobox');

                // Verifica si hay una opción seleccionada en sessionStorage
                var opcionSeleccionada = sessionStorage.getItem('opcionSeleccionada');
                if (opcionSeleccionada) {
                    // Establece el valor del combobox y marca la opción como seleccionada
                    combobox.value = opcionSeleccionada;
                    combobox.options[combobox.selectedIndex].setAttribute('selected', 'selected');
                }

                // Agrega un evento al formulario para almacenar la opción seleccionada en sessionStorage
                formulario.addEventListener('submit', function () {
                    sessionStorage.setItem('opcionSeleccionada', combobox.value);
                });
            });
        </script>

        <input type="submit" value="Registrar" name="registrar">
        <input type="submit" value="Modificar" name="modificar">
        <input type="submit" value="Consultar" name="consultar">
        <input type="submit" value="Eliminar" name="eliminar">
        <input type="submit" value="Listar" name="listar">
        </form>  
    <form action="" method="post">
    <?php
    if ($_SERVER && isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $opcion = isset($_POST['combobox']) ? $_POST['combobox'] : null;


        if (isset($_POST['registrar']) || isset($_POST['insertar1']) || isset($_POST['insertar2']) || isset($_POST['insertar3']) 
        || isset($_POST['insertar4']) || isset($_POST['insertar5']) || isset($_POST['insertar6']) || isset($_POST['insertar7'])
        || isset($_POST['insertar8']) || isset($_POST['insertar9']) || isset($_POST['insertar10'])){
            switch ($opcion) {
                case 1:
                    echo '<br><br><br>';
                    echo '<h2>Se ingresarán datos a la tabla Empleados</h2>';
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula: </label>';
                    echo '<input style="-moz-appearance: textfield" type="number" name="ccem" maxlength="10";>';
                    echo '<br><br>';
                    echo '<label>Nombre: </label>';
                    echo '<input type="text" name="noem">';
                    echo '<br><br>';
                    echo '<label>Apellido: </label>';
                    echo '<input type="text" name="apem">';
                    echo '<br><br>';
                    echo '<label>Celular: </label>';
                    echo '<input type="number" name="ceem" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Email: </label>';
                    echo '<input type="text" name="emem">';
                    echo '<br><br>';
                    echo '<label>Cargo: </label>';
                    echo '<input type="text" name="caem">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar1">';
                    echo '</form>';

                    break;
                case 2:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Clientes";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula: </label>';
                    echo '<input type="number" name="cccl" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Nombre completo: </label>';
                    echo '<input type="text" name="nocl">';
                    echo '<br><br>';
                    echo '<label>Direccion: </label>';
                    echo '<input type="text" name="dicl">';
                    echo '<br><br>';
                    echo '<label>Celular: </label>';
                    echo '<input type="number" name="cecl" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar2">';
                    echo '</form>';
                    break;
                case 3:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Contratos Empleado";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id contrato: </label>';
                    echo '<input type="number" name="idcoe" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Cedula empleado: </label>';
                    echo '<input type="number" name="ccemc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Tipo de contrato: </label>';
                    echo '<input type="text" name="ticoe">';
                    echo '<br><br>';
                    echo '<label>Fecha de inicio: </label>';
                    echo '<input type="date" name="fecoe">';
                    echo '<br><br>';
                    echo '<label>Fecha de vencimiento: </label>';
                    echo '<input type="date" name="fevcoe">';
                    echo '<br><br>';
                    echo '<label>Sueldo: </label>';
                    echo '<input type="text" name="sucoe" pattern="[0-9]*">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar3">';
                    echo '</form>';
                    break;
                case 4:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Contratos de Servicio";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id contrato: </label>';
                    echo '<input type="number" name="idcoc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Cedula cliente: </label>';
                    echo '<input type="number" name="ccclc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Fecha de inicio: </label>';
                    echo '<input type="date" name="fecoc">';
                    echo '<br><br>';
                    echo '<label>Fecha de vencimiento: </label>';
                    echo '<input type="date" name="fevcoc">';
                    echo '<br><br>';
                    echo '<label>Tipo de servicio: </label>';
                    echo '<input type="text" name="ticoc">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar4">';
                    echo '</form>';
                    break;
                case 5:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Medidores";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id del medidor: </label>';
                    echo '<input type="number" name="idme" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Cedula cliente: </label>';
                    echo '<input type="number" name="ccclme" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Número de serie: </label>';
                    echo '<input type="text" name="nums" maxlength=8 placeholder="AAAA-0000">';
                    echo '<br><br>';;
                    echo '<input type="submit" value="  Registrar  " name="insertar5">';
                    echo '</form>';
                    break;
                case 6:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla LecturaMedidores";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id de la lectura: </label>';
                    echo '<input type="number" name="idle" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Id medidor: </label>';
                    echo '<input type="number" name="idmel" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Fecha: </label>';
                    echo '<input type="date" name="fele">';
                    echo '<br><br>';
                    echo '<label>Lectura actual: </label>';
                    echo '<input type="text" name="leac" pattern="[0-9]*" placeholder="Metros cúbicos">';
                    echo '<br><br>';;
                    echo '<label>Lectura anterior: </label>';
                    echo '<input type="text" name="lean" pattern="[0-9]*" placeholder="Metros cúbicos">';
                    echo '<br><br>';;
                    echo '<input type="submit" value="  Registrar  " name="insertar6">';
                    echo '</form>';
                    break;
                case 7:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Facturas";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id factura: </label>';
                    echo '<input type="number" name="idfa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Cedula cliente: </label>';
                    echo '<input type="number" name="ccclf" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Fecha de generación: </label>';
                    echo '<input type="date" name="fefa">';
                    echo '<br><br>';
                    echo '<label>Fecha de vencimiento: </label>';
                    echo '<input type="date" name="fevfa">';
                    echo '<br><br>';
                    echo '<label>Total costo: </label>';
                    echo '<input type="text" name="cofa" pattern="[0-9]*">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar7">';
                    echo '</form>';
                    break;
                case 8:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Pagos";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id pago: </label>';
                    echo '<input type="number" name="idpa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Id factura: </label>';
                    echo '<input type="number" name="idfap" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Fecha de pago realizado: </label>';
                    echo '<input type="date" name="fepa">';
                    echo '<br><br>';
                    echo '<label>Total monto: </label>';
                    echo '<input type="text" name="mopa" pattern="[0-9]*">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar8">';
                    echo '</form>';
                    break;
                case 9:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Reportes de Servicio";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id reporte: </label>';
                    echo '<input type="number" name="idre" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Cedula cliente: </label>';
                    echo '<input type="number" name="ccclr" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Problema reportado: </label>';
                    echo '<textarea name="prre" rows="2" cols="40"></textarea>';
                    echo '<br><br>';
                    echo '<label>Fecha reporte: </label>';
                    echo '<input type="date" name="fere">';
                    echo '<br><br>';
                    echo '<label>Estado: </label>';
                    echo '<input type="text" name="esre" placeholder="Pendiente/Solucionado">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar9">';
                    echo '</form>';
                    break;
                case 10:
                    echo '<br><br><br>';
                    echo "Se ingresarán datos a la tabla Noticias";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id noticia: </label>';
                    echo '<input type="number" name="idno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<label>Titulo: </label>';
                    echo '<input type="text" name="tino">';
                    echo '<br><br>';
                    echo '<label>Contenido: </label>';
                    echo '<textarea name="cono" rows="2" cols="40"></textarea>';
                    echo '<br><br>';
                    echo '<label>Fecha de publicación: </label>';
                    echo '<input type="date" name="puno">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Registrar  " name="insertar10">';
                    echo '</form>';
                    break;
                }
            echo '<br><br>';
            if (isset($_POST['insertar1'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $ccem = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $noem = isset($_POST['noem']) ? $_POST['noem'] : null;
                    $apem = isset($_POST['apem']) ? $_POST['apem'] : null;
                    $ceem = isset($_POST['ceem']) ? $_POST['ceem'] : null;
                    $emem = isset($_POST['emem']) ? $_POST['emem'] : null;
                    $caem = isset($_POST['caem']) ? $_POST['caem'] : null;
                    $sql = "INSERT INTO empleado VALUES ('$ccem','$noem','$apem','$ceem','$emem','$caem');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL NÚMERO DE CÉDULA: " . $ccem;
                        echo '</form>';
                    }
                }
            }
            else if (isset($_POST['insertar2'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $cccl = isset($_POST['cccl']) ? $_POST['cccl'] : null;
                    $nocl = isset($_POST['nocl']) ? $_POST['nocl'] : null;
                    $dicl = isset($_POST['dicl']) ? $_POST['dicl'] : null;
                    $cecl = isset($_POST['cecl']) ? $_POST['cecl'] : null;
                    $sql = "INSERT INTO cliente VALUES ('$cccl','$nocl','$dicl','$cecl');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL NÚMERO DE CÉDULA: " . $cccl;
                        echo '</form>';
                    }
                }
            }
            else if (isset($_POST['insertar3'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idcoe = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $ccemc = isset($_POST['ccemc']) ? $_POST['ccemc'] : null;
                    $ticoe = isset($_POST['ticoe']) ? $_POST['ticoe'] : null;
                    $fecoe = isset($_POST['fecoe']) ? $_POST['fecoe'] : null;
                    $fevcoe = isset($_POST['fevcoe']) ? $_POST['fevcoe'] : null;
                    $sucoe = isset($_POST['sucoe']) ? $_POST['sucoe'] : null;
                    $sql = "INSERT INTO contrato_empleado VALUES ('$idcoe','$ccemc','$ticoe','$fecoe','$fevcoe','$sucoe');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID DE CONTRATO: " . $idcoe;
                        echo '</form>';
                    }
                }
            } 
            else if (isset($_POST['insertar4'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idcoc = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                    $ccclc = isset($_POST['ccclc']) ? $_POST['ccclc'] : null;
                    $fecoc = isset($_POST['fecoc']) ? $_POST['fecoc'] : null;
                    $fevcoc = isset($_POST['fevcoc']) ? $_POST['fevcoc'] : null;
                    $ticoc = isset($_POST['ticoc']) ? $_POST['ticoc'] : null;
                    $sql = "INSERT INTO contrato_servicio VALUES ('$idcoc','$ccclc','$fecoc','$fevcoc','$ticoc');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID DE CONTRATO: " . $idcoc;
                        echo '</form>';
                    }

                }
            }
            else if (isset($_POST['insertar5'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idme = isset($_POST['idme']) ? $_POST['idme'] : null;
                    $ccclme = isset($_POST['ccclme']) ? $_POST['ccclme'] : null;
                    $nums = isset($_POST['nums']) ? $_POST['nums'] : null;
                    $sql = "INSERT INTO medidor VALUES ('$idme','$ccclme','$nums');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID DE MEDIDOR: " . $idme;
                        echo '</form>';
                    }

                }
            }
            else if (isset($_POST['insertar6'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idle = isset($_POST['idle']) ? $_POST['idle'] : null;
                    $idmel = isset($_POST['idmel']) ? $_POST['idmel'] : null;
                    $fele = isset($_POST['fele']) ? $_POST['fele'] : null;
                    $leac = isset($_POST['leac']) ? $_POST['leac'] : null;
                    $lean = isset($_POST['lean']) ? $_POST['lean'] : null;
                    $sql = "INSERT INTO lectura_medidor VALUES ('$idle','$idmel','$fele','$leac','$lean');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID DE LECTURA: " . $idle;
                        echo '</form>';
                    }

                }
            }
            else if (isset($_POST['insertar7'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idfa = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                    $ccclf = isset($_POST['ccclf']) ? $_POST['ccclf'] : null;
                    $fefa = isset($_POST['fefa']) ? $_POST['fefa'] : null;
                    $fevfa = isset($_POST['fevfa']) ? $_POST['fevfa'] : null;
                    $cofa = isset($_POST['cofa']) ? $_POST['cofa'] : null;
                    $sql = "INSERT INTO factura VALUES ('$idfa','$ccclf','$fefa','$fevfa','$cofa');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID FACTURA: " . $idfa;
                        echo '</form>';
                    }

                }
            }
            else if (isset($_POST['insertar8'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idpa = isset($_POST['idpa']) ? $_POST['idpa'] : null;
                    $idfap = isset($_POST['idfap']) ? $_POST['idfap'] : null;
                    $fepa = isset($_POST['fepa']) ? $_POST['fepa'] : null;
                    $mopa = isset($_POST['mopa']) ? $_POST['mopa'] : null;
                    $sql = "INSERT INTO pagos VALUES ('$idpa','$idfap','$fepa','$mopa');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID DE PAGO: " . $idpa;
                        echo '</form>';
                    }

                }
            }
            else if (isset($_POST['insertar9'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idre = isset($_POST['idre']) ? $_POST['idre'] : null;
                    $ccclr = isset($_POST['ccclr']) ? $_POST['ccclr'] : null;
                    $prre = isset($_POST['prre']) ? $_POST['prre'] : null;
                    $fere = isset($_POST['fere']) ? $_POST['fere'] : null;
                    $esre = isset($_POST['esre']) ? $_POST['esre'] : null;
                    $sql = "INSERT INTO reporte_servicio VALUES ('$idre','$ccclr','$prre','$fere','$esre');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID DE REPORTE: " . $idre;
                        echo '</form>';
                    }

                }
            }
            else if (isset($_POST['insertar10'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idno = isset($_POST['idno']) ? $_POST['idno'] : null;
                    $tino = isset($_POST['tino']) ? $_POST['tino'] : null;
                    $cono = isset($_POST['cono']) ? $_POST['cono'] : null;
                    $puno = isset($_POST['puno']) ? $_POST['puno'] : null;
                    $sql = "INSERT INTO noticias VALUES ('$idno','$tino','$cono','$puno');";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo "REGISTRO EXITOSO CON EL ID DE NOTICIA: " . $idno;
                        echo '</form>';
                    }

                }
            }
        }
          
        

        else if(isset($_POST['modificar']) || isset($_POST['modificar1']) || isset($_POST['cambiard1']) || isset($_POST['cambio11']) 
        || isset($_POST['cambio12']) || isset($_POST['cambio13']) || isset($_POST['cambio14']) || isset($_POST['cambio15'])|| isset($_POST['cambio16'])
        || isset($_POST['modificar2']) || isset($_POST['cambiard2']) || isset($_POST['cambio21']) || isset($_POST['cambio22']) 
        || isset($_POST['cambio23']) || isset($_POST['modificar3']) || isset($_POST['cambiard3']) || isset($_POST['cambio31']) 
        || isset($_POST['cambio32']) || isset($_POST['cambio33']) || isset($_POST['cambio34']) || isset($_POST['cambio35'])
        || isset($_POST['modificar4']) || isset($_POST['cambiard4']) || isset($_POST['cambio41']) 
        || isset($_POST['cambio42']) || isset($_POST['cambio43']) || isset($_POST['cambio44']) || isset($_POST['modificar5']) 
        || isset($_POST['cambiard5']) || isset($_POST['cambio51']) || isset($_POST['cambio52']) || isset($_POST['modificar6']) 
        || isset($_POST['cambiard6']) || isset($_POST['cambio61']) || isset($_POST['cambio62']) || isset($_POST['cambio63'])
        || isset($_POST['cambio64']) || isset($_POST['modificar7']) || isset($_POST['cambiard7']) || isset($_POST['cambio71']) 
        || isset($_POST['cambio72']) || isset($_POST['cambio73']) || isset($_POST['cambio74']) || isset($_POST['modificar8']) 
        || isset($_POST['cambiard8']) || isset($_POST['cambio81']) || isset($_POST['cambio82']) || isset($_POST['cambio83']) || isset($_POST['modificar9']) 
        || isset($_POST['cambiard9']) || isset($_POST['cambio91']) || isset($_POST['cambio92']) || isset($_POST['cambio93']) || isset($_POST['cambio94']) 
        || isset($_POST['modificar10']) || isset($_POST['cambiard10']) || isset($_POST['cambio101']) || isset($_POST['cambio102']) || isset($_POST['cambio103']) 
        ){


            $ccemm = null; $noemm = null; $apemm = null; $ceemm = null; $ememm = null; $caemm = null; $ccclme = null; $noclm = null; $diclm = null; $ceclm = null;  
            $idcoem = null; $ccemcm = null; $ticoem = null; $fecoem = null; $fevcoem = null; $sucoem = null; $idcocm = null; $ccclcm = null; 
            $ticocm = null; $fecocm = null; $fevcocm = null; $idmem = null; $ccclmem = null; $numsm = null; $idlem = null; $idmelm = null;
            $felem = null; $leacm = null; $leanm = null; $idfam = null; $ccclfm = null; $fefam = null; $fevfam = null; $cofam = null; $idpam = null;
            $idfapm = null; $fepam = null; $mopam = null; $idrem = null; $ccclrm = null; $prrem = null; $ferem = null; $esrem = null; $idnom = null;
            $tinom = null; $conom = null; $punom = null;

            switch ($opcion) {
                case 1:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Empleados";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula a modificar: </label>';
                    echo '<input type="number" name="ccem" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar1">';
                    echo '</form>';
                break;
                case 2:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Clientes";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula a modificar: </label>';
                    echo '<input type="number" name="cccl" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar2">';
                    echo '</form>';
                    break;
                case 3:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Contratos Empleado";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idcoe" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar3">';
                    echo '</form>';
                    break;
                case 4:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Contratos Servicio";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idcoc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar4">';
                    echo '</form>';
                    break;
                case 5:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Medidores";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idme" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar5">';
                    echo '</form>';
                    break;
                case 6:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Lectura de Medidores";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idle" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar6">';
                    echo '</form>';
                    break;
                case 7:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Facturas";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idfa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar7">';
                    echo '</form>';
                    break;
                case 8:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Pagos";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idpa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar8">';
                    echo '</form>';
                    break;
                case 9:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Reporte de Servicios";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idre" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar9">';
                    echo '</form>';
                    break;
                case 10:
                    echo '<br><br><br>';
                    echo "Modificación de datos de la tabla Noticias";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id a modificar: </label>';
                    echo '<input type="number" name="idno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Modificar  " name="modificar10">';
                    echo '</form>';
                    break;
            }

            $ccemm = isset($_POST['ccem']) ? $_POST['ccem'] : null;
            $ccclme = isset($_POST['cccl']) ? $_POST['cccl'] : null;
            $idcoem = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
            $idcocm = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
            $idmem = isset($_POST['idme']) ? $_POST['idme'] : null;
            $idlem = isset($_POST['idle']) ? $_POST['idle'] : null;
            $idfam = isset($_POST['idfa']) ? $_POST['idfa'] : null;
            $idpam = isset($_POST['idpa']) ? $_POST['idpa'] : null;
            $idrem = isset($_POST['idre']) ? $_POST['idre'] : null;
            $idnom = isset($_POST['idno']) ? $_POST['idno'] : null;

            echo '<br><br>';
            if (isset($_POST['modificar1'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM empleado WHERE empleado.Cedula='$ccemm';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "EMPLEADO NO ENCONTRADO";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox2">Opciones:&nbsp;</label>';
                        echo '<select name="combobox2" id="combobox2">';
                        echo '<option value="1">Nombre</option>';
                        echo '<option value="2">Apellido</option>';
                        echo '<option value="3">Celular</option>';
                        echo '<option value="4">Email</option>';
                        echo '<option value="4">Cargo</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="ccem" value="' . $ccemm . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard1">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar2'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM cliente WHERE cliente.Cedula='$ccclme';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CLIENTE NO ENCONTRADO";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox3">Opciones:&nbsp;</label>';
                        echo '<select name="combobox3" id="combobox3">';
                        echo '<option value="1">Nombre</option>';
                        echo '<option value="2">Direccion</option>';
                        echo '<option value="3">Celular</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="cccl" value="' . $ccclme . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard2">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar3'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM contrato_empleado WHERE id_contrato='$idcoem';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CONTRATO NO ENCONTRADO";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox4">Opciones:&nbsp;</label>';
                        echo '<select name="combobox4" id="combobox4">';
                        echo '<option value="1">Cedula Empleado</option>';
                        echo '<option value="2">Tipo Contrato</option>';
                        echo '<option value="3">Fecha inicio</option>';
                        echo '<option value="4">Fecha vencimiento</option>';
                        echo '<option value="4">Sueldo</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoe" value="' . $idcoem . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard3">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar4'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM contrato_servicio WHERE id_servicio='$idcocm';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CONTRATO NO ENCONTRADO";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox5">Opciones:&nbsp;</label>';
                        echo '<select name="combobox5" id="combobox5">';
                        echo '<option value="1">Cedula Cliente</option>';
                        echo '<option value="2">Fecha inicio</option>';
                        echo '<option value="3">Fecha vencimiento</option>';
                        echo '<option value="4">Tipo de Servicio</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoc" value="' . $idcocm . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard4">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar5'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM medidor WHERE id_medidor='$idmem';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "MEDIDOR NO ENCONTRADO";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox6">Opciones:&nbsp;</label>';
                        echo '<select name="combobox6" id="combobox6">';
                        echo '<option value="1">Cedula Cliente</option>';
                        echo '<option value="2">Número de Serie</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idme" value="' . $idmem . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard5">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar6'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM lectura_medidor WHERE id_lectura='$idlem';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "LECTURA NO ENCONTRADA";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox7">Opciones:&nbsp;</label>';
                        echo '<select name="combobox7" id="combobox7">';
                        echo '<option value="1">Id Medidor</option>';
                        echo '<option value="2">Fecha de lectura</option>';
                        echo '<option value="3">Lectura actual</option>';
                        echo '<option value="4">Lectura anterior</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idle" value="' . $idlem . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard6">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar7'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM factura WHERE id_fac='$idfam';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "FACTURA NO ENCONTRADA";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox8">Opciones:&nbsp;</label>';
                        echo '<select name="combobox8" id="combobox8">';
                        echo '<option value="1">Cédula cliente</option>';
                        echo '<option value="2">Fecha de generación</option>';
                        echo '<option value="3">Fecha de vencimiento</option>';
                        echo '<option value="4">Costo total</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idfa" value="' . $idfam . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard7">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar8'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM pagos WHERE id_pago='$idpam';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "PAGO NO ENCONTRADO";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox9">Opciones:&nbsp;</label>';
                        echo '<select name="combobox9" id="combobox9">';
                        echo '<option value="1">Id de factura</option>';
                        echo '<option value="2">Fecha pago realizado</option>';
                        echo '<option value="3">Monto del pago</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idpa" value="' . $idpam . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard8">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar9'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM reporte_servicio WHERE id_reporte='$idrem';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "REPORTE NO ENCONTRADO";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox10">Opciones:&nbsp;</label>';
                        echo '<select name="combobox10" id="combobox10">';
                        echo '<option value="1">Cédula cliente</option>';
                        echo '<option value="2">Problema reportado</option>';
                        echo '<option value="3">Fecha de reporte</option>';
                        echo '<option value="4">Estado</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idre" value="' . $idrem . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard9">';
                        echo '</form>';
                    }
                }
            }
            else if(isset($_POST['modificar10'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $sql="SELECT * FROM noticias WHERE id_noticia='$idnom';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "NOTICIA NO ENCONTRADA";
                    }
                    else{
                        $bdatos = pg_dbname($dbconn);
                        echo "Que dato deseas modificar?";
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label for="combobox11">Opciones:&nbsp;</label>';
                        echo '<select name="combobox11" id="combobox11">';
                        echo '<option value="1">Titulo</option>';
                        echo '<option value="2">Contenido</option>';
                        echo '<option value="3">Fecha de publicacion</option>';
                        echo '</select>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idno" value="' . $idnom . '">'; //a
                        echo '<input type="submit" value="  Modificar  " name="cambiard10">';
                        echo '</form>';
                    }
                }
            }
            if (isset($_POST['cambiard1'])){
                $opcion2 = isset($_POST['combobox2']) ? $_POST['combobox2'] : null;
                switch($opcion2){
                    case '1':
                        echo "Se modificará el Nombre del Empleado con Cedula:&nbsp; " .$ccemm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Nombre:&nbsp; </label>';
                        echo '<input type="text" name="noemm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="ccem" value="' . $ccemm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio11">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará el Apellido del Empleado con Cedula:&nbsp; " .$ccemm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Apellido:&nbsp; </label>';
                        echo '<input type="text" name="apemm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="ccem" value="' . $ccemm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio12">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará el Celular del Empleado con Cedula:&nbsp; " .$ccemm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Celular:&nbsp; </label>';
                        echo '<input type="text" name="ceemm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="ccem" value="' . $ccemm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio13">';
                        echo '</form>';
                        break;
                    case '4':
                        echo "Se modificará el Email del Empleado con Cedula:&nbsp; " .$ccemm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Email&nbsp;: </label>';
                        echo '<input type="text" name="ememm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="ccem" value="' . $ccemm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio14">';
                        echo '</form>';
                        break;
                    case '5':
                        echo "Se modificará el Cargo del Empleado con Cedula:&nbsp; " .$ccemm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Cargo&nbsp;: </label>';
                        echo '<input type="text" name="caemm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="ccem" value="' . $ccemm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio15">';
                        echo '</form>';
                        break; 
                };
            }
            else if (isset($_POST['cambiard2'])){
                $opcion3 = isset($_POST['combobox3']) ? $_POST['combobox3'] : null;
                switch($opcion3){
                    case '1':
                        echo "Se modificará el Nombre del Cliente con Cedula:&nbsp; " .$ccclme;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Nombre:&nbsp; </label>';
                        echo '<input type="text" name="noclm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="cccl" value="' . $ccclme . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio21">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará la Dirección del CLIENTE con Cedula:&nbsp; " .$ccclme;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Dirección:&nbsp; </label>';
                        echo '<input type="text" name="diclm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="cccl" value="' . $ccclme . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio22">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará el Celular del CLIENTE con Cedula:&nbsp; " .$ccclme;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Celular:&nbsp; </label>';
                        echo '<input type="number" name="ceclm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="cccl" value="' . $ccclme . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio23">';
                        echo '</form>';
                        break;
                }
            }
            else if (isset($_POST['cambiard3'])){
                $opcion4 = isset($_POST['combobox4']) ? $_POST['combobox4'] : null;
                switch($opcion4){
                    case '1':
                        echo "Se modificará la cedula del Empleado para el contrato con ID:&nbsp; " .$idcoem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Cedula:&nbsp; </label>';
                        echo '<input type="number" name="ccemcm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoe" value="' . $idcoem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio31">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará el Tipo de Contrato con ID:&nbsp; " .$idcoem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Tipo de Contrato:&nbsp; </label>';
                        echo '<input type="text" name="ticoem">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoe" value="' . $idcoem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio32">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará la Fecha de Inicio del Contrato con ID:&nbsp; " .$idcoem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha de Inicio:&nbsp; </label>';
                        echo '<input type="date" name="fecoem">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoe" value="' . $idcoem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio33">';
                        echo '</form>';
                        break;
                    case '4':
                        echo "Se modificará la Fecha de Vencimiento del Contrato con ID:&nbsp; " .$idcoem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha de Vencimiento:&nbsp; </label>';
                        echo '<input type="date" name="fevcoem">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoe" value="' . $idcoem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio34">';
                        echo '</form>';
                        break;
                    case '5':
                        echo "Se modificará el Sueldo del Contrato con ID:&nbsp; " .$idcoem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Sueldo:&nbsp; </label>';
                        echo '<input type="text" name="sucoem" pattern="[0-9]*">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoe" value="' . $idcoem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio35">';
                        echo '</form>';
                        break; 
                };
            }
            else if (isset($_POST['cambiard4'])){
                $opcion5 = isset($_POST['combobox5']) ? $_POST['combobox5'] : null;
                switch($opcion5){
                    case '1':
                        echo "Se modificará la cedula del Cliente para el contrato con ID:&nbsp; " .$idcocm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Cedula:&nbsp; </label>';
                        echo '<input type="number" name="ccclcm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoc" value="' . $idcocm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio41">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará la Fecha de Inicio del Contrato con ID:&nbsp; " .$idcocm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha de Inicio:&nbsp; </label>';
                        echo '<input type="date" name="fecocm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoc" value="' . $idcocm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio42">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará la Fecha de Vencimiento del Contrato con ID:&nbsp; " .$idcocm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha de Vencimiento:&nbsp; </label>';
                        echo '<input type="date" name="fevcocm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoc" value="' . $idcocm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio43">';
                        echo '</form>';
                        break;
                    case '4':
                        echo "Se modificará el Tipo de Servicio del Contrato con ID:&nbsp; " .$idcocm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Tipo de Servivio:&nbsp; </label>';
                        echo '<input type="text" name="ticocm">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idcoc" value="' . $idcocm . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio44">';
                        echo '</form>';
                        break;
                }
            }
            else if (isset($_POST['cambiard5'])){
                $opcion6 = isset($_POST['combobox6']) ? $_POST['combobox6'] : null;
                switch($opcion6){
                    case '1':
                        echo "Se modificará la cedula del Cliente para el Medidor con ID:&nbsp; " .$idcocm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Cedula:&nbsp; </label>';
                        echo '<input type="number" name="ccclmem" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idme" value="' . $idmem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio51">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará el Número de Serie para el Medidor con ID:&nbsp; " .$idcocm;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo Número de Serie:&nbsp; </label>';
                        echo '<input type="text" name="numsm" pattern="[0-9]*">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idme" value="' . $idmem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio52">';
                        echo '</form>';
                        break;
                    }
                }
            else if (isset($_POST['cambiard6'])){
                $opcion7 = isset($_POST['combobox7']) ? $_POST['combobox7'] : null;
                switch($opcion7){
                    case '1':
                        echo "Se modificará el ID del Medidor para la Lectura con ID:&nbsp; " .$idlem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo ID:&nbsp; </label>';
                        echo '<input type="number" name="idmelm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idle" value="' . $idlem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio61">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará la Fecha de Lectura con ID:&nbsp; " .$idlem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha:&nbsp; </label>';
                        echo '<input type="date" name="felem">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idle" value="' . $idlem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio62">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará la Lectura actual de la Lectura con ID:&nbsp; " .$idlem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Lectura actual:&nbsp; </label>';
                        echo '<input type="text" name="leacm" pattern="[0-9]*" placeholder="Metros cúbicos">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idle" value="' . $idlem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio63">';
                        echo '</form>';
                        break;
                    case '4':
                        echo "Se modificará la Lectura anterior de la Lectura con ID:&nbsp; " .$idlem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Lectura anterior:&nbsp; </label>';
                        echo '<input type="text" name="leanm" pattern="[0-9]*" placeholder="Metros cúbicos">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idle" value="' . $idlem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio64">';
                        echo '</form>';
                        break;
                }
            }
            else if (isset($_POST['cambiard7'])){
                $opcion8 = isset($_POST['combobox8']) ? $_POST['combobox8'] : null;
                switch($opcion8){
                    case '1':
                        echo "Se modificará la Cédula del Cliente para la Factura con ID:&nbsp; " .$idfam;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva cedula:&nbsp; </label>';
                        echo '<input type="number" name="ccclfm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idfa" value="' . $idfam . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio71">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará la Fecha de Generación de la Factura con ID:&nbsp; " .$idfam;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha:&nbsp; </label>';
                        echo '<input type="date" name="fefam">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idfa" value="' . $idfam . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio72">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará la Fecha de Vencimiento de la Factura con ID:&nbsp; " .$idfam;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha:&nbsp; </label>';
                        echo '<input type="date" name="fevfam">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idfa" value="' . $idfam . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio73">';
                        echo '</form>';
                        break;
                    case '4':
                        echo "Se modificará el Costo Total de la Factura con ID:&nbsp; " .$idfam;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo costo:&nbsp; </label>';
                        echo '<input type="text" name="cofam" pattern="[0-9]*">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idfa" value="' . $idfam . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio74">';
                        echo '</form>';
                        break;
                }
            }
            else if (isset($_POST['cambiard8'])){
                $opcion9 = isset($_POST['combobox9']) ? $_POST['combobox9'] : null;
                switch($opcion9){
                    case '1':
                        echo "Se modificará el ID de la Factura para el Pago con ID:&nbsp; " .$idpam;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo ID:&nbsp; </label>';
                        echo '<input type="number" name="idfapm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idpa" value="' . $idpam . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio81">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará la Fecha de Realización del Pago con ID:&nbsp; " .$idpam;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha:&nbsp; </label>';
                        echo '<input type="date" name="fepam">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idpa" value="' . $idpam . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio82">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará el Monto del Pago con ID:&nbsp; " .$idpam;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo monto:&nbsp; </label>';
                        echo '<input type="text" name="mopam" pattern="[0-9]*">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idpa" value="' . $idpam . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio83">';
                        echo '</form>';
                        break;
                }
            }
            else if (isset($_POST['cambiard9'])){
                $opcion10 = isset($_POST['combobox10']) ? $_POST['combobox10'] : null;
                switch($opcion10){
                    case '1':
                        echo "Se modificará la Cedula del Cliente en el Reporte con ID:&nbsp; " .$idrem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva cedula:&nbsp; </label>';
                        echo '<input type="number" name="ccclrm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idre" value="' . $idrem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio91">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará el Problema Reportado en el Reporte con ID:&nbsp; " .$idrem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo problema:&nbsp; </label>';
                        echo '<textarea name="prrem" rows="4" cols="60"></textarea>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idre" value="' . $idrem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio92">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará la Fecha del Reporte con ID:&nbsp; " .$idrem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva Fecha:&nbsp; </label>';
                        echo '<input type="date" name="ferem">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idre" value="' . $idrem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio93">';
                        echo '</form>';
                        break;
                    case '4':
                        echo "Se modificará el Estado del Reporte con ID:&nbsp; " .$idrem;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo estado:&nbsp; </label>';
                        echo '<input type="text" name="esrem" placeholder="Pendiente/Solucionado">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idre" value="' . $idrem . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio94">';
                        echo '</form>';
                        break;
                }
            }
            else if (isset($_POST['cambiard10'])){
                $opcion11 = isset($_POST['combobox11']) ? $_POST['combobox11'] : null;
                switch($opcion11){
                    case '1':
                        echo "Se modificará el Titulo de la Noticia con ID:&nbsp; " .$idnom;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo título:&nbsp; </label>';
                        echo '<input type="text" name="tinom">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idno" value="' . $idnom . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio101">';
                        echo '</form>';
                        break;
                    case '2':
                        echo "Se modificará el Contenido de la Noticia con ID:&nbsp; " .$idnom;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nuevo contenido:&nbsp; </label>';
                        echo '<textarea name="conom" rows="4" cols="60"></textarea>';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idno" value="' . $idnom . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio102">';
                        echo '</form>';
                        break;
                    case '3':
                        echo "Se modificará la Fecha de Publicación de la Noticia con ID:&nbsp; " .$idnom;
                        echo '<br><br>';
                        echo '<form action="" method="post">';
                        echo '<label>Nueva fecha:&nbsp; </label>';
                        echo '<input type="date" name="punom">';
                        echo  '&nbsp;&nbsp;&nbsp;';
                        echo '<input type="hidden" name="idno" value="' . $idnom . '">'; //a
                        echo '<input type="submit" value="  Cambiar  " name="cambio103">';
                        echo '</form>';
                        break;
                }
            }
                
            if (isset($_POST['cambio11'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $noemm = isset($_POST['noemm']) ? $_POST['noemm'] : null;
                    $ccemm = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $sql = "UPDATE empleado SET nombre='$noemm' WHERE cedula='$ccemm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio12'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $apemm = isset($_POST['apemm']) ? $_POST['apemm'] : null;
                    $ccemm = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $sql = "UPDATE empleado SET apellido='$apemm' WHERE cedula='$ccemm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio13'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ceemm = isset($_POST['ceemm']) ? $_POST['ceemm'] : null;
                    $ccemm = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $sql = "UPDATE empleado SET celular='$ceemm' WHERE cedula='$ccemm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio14'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ememm = isset($_POST['ememm']) ? $_POST['ememm'] : null;
                    $ccemm = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $sql = "UPDATE empleado SET email='$ememm' WHERE cedula='$ccemm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio15'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $caemm = isset($_POST['caemm']) ? $_POST['caemm'] : null;
                    $ccemm = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $sql = "UPDATE empleado SET cargo='$caemm' WHERE cedula='$ccemm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio21'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $noclm = isset($_POST['noclm']) ? $_POST['noclm'] : null;
                    $ccclme = isset($_POST['cccl']) ? $_POST['cccl'] : null;
                    $sql = "UPDATE cliente SET nombre_completo='$noclm' WHERE cedula='$ccclme';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio22'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $diclm = isset($_POST['diclm']) ? $_POST['diclm'] : null;
                    $ccclme = isset($_POST['cccl']) ? $_POST['cccl'] : null;
                    $sql = "UPDATE cliente SET direccion='$diclm' WHERE cedula='$ccclme';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio23'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ceclm = isset($_POST['ceclm']) ? $_POST['ceclm'] : null;
                    $ccclme = isset($_POST['cccl']) ? $_POST['cccl'] : null;
                    $sql = "UPDATE cliente SET celular='$ceclm' WHERE cedula='$ccclme';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio31'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ccemcm = isset($_POST['ccemcm']) ? $_POST['ccemcm'] : null;
                    $idcoem = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $sql = "UPDATE contrato_empleado SET cedula_empleado='$ccemcm' WHERE id_contrato='$idcoem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio32'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ticoem = isset($_POST['ticoem']) ? $_POST['ticoem'] : null;
                    $idcoem = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $sql = "UPDATE contrato_empleado SET tipo_contrato='$ticoem' WHERE id_contrato='$idcoem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio33'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $fecoem = isset($_POST['fecoem']) ? $_POST['fecoem'] : null;
                    $idcoem = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $sql = "UPDATE contrato_empleado SET fecha_inicio='$fecoem' WHERE id_contrato='$idcoem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio34'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $fevcoem = isset($_POST['fevcoem']) ? $_POST['fevcoem'] : null;
                    $idcoem = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $sql = "UPDATE contrato_empleado SET fecha_fin='$fevcoem' WHERE id_contrato='$idcoem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio35'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $sucoem = isset($_POST['sucoem']) ? $_POST['sucoem'] : null;
                    $idcoem = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $sql = "UPDATE contrato_empleado SET sueldo='$sucoem' WHERE id_contrato='$idcoem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio41'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ccclcm = isset($_POST['ccclcm']) ? $_POST['ccclcm'] : null;
                    $idcocm = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                    $sql = "UPDATE contrato_servicio SET cedula_cliente='$ccclcm' WHERE id_servicio='$idcocm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio42'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $fecocm = isset($_POST['fecocm']) ? $_POST['fecocm'] : null;
                    $idcocm = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                    $sql = "UPDATE contrato_servicio SET fecha_inicio='$fecocm' WHERE id_servicio='$idcocm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio43'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $fevcocm = isset($_POST['fevcocm']) ? $_POST['fevcocm'] : null;
                    $idcocm = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                    $sql = "UPDATE contrato_servicio SET fecha_fin='$fevcocm' WHERE id_servicio='$idcocm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio44'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ticocm = isset($_POST['ticocm']) ? $_POST['ticocm'] : null;
                    $idcocm = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                    $sql = "UPDATE contrato_servicio SET tipo_servicio='$ticocm' WHERE id_servicio='$idcocm';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio51'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ccclmem = isset($_POST['ccclmem']) ? $_POST['ccclmem'] : null;
                    $idmem = isset($_POST['idme']) ? $_POST['idme'] : null;
                    $sql = "UPDATE medidor SET cedula_cliente='$ccclmem' WHERE id_medidor='$idmem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio52'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $numsm = isset($_POST['numsm']) ? $_POST['numsm'] : null;
                    $idmem = isset($_POST['idme']) ? $_POST['idme'] : null;
                    $sql = "UPDATE medidor SET numero_serie='$numsm' WHERE id_medidor='$idmem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio61'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $idmelm = isset($_POST['idmelm']) ? $_POST['idmelm'] : null;
                    $idlem = isset($_POST['idle']) ? $_POST['idle'] : null;
                    $sql = "UPDATE lectura_medidor SET id_medidor='$idmelm' WHERE id_lectura='$idlem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio62'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $felem = isset($_POST['felem']) ? $_POST['felem'] : null;
                    $idlem = isset($_POST['idle']) ? $_POST['idle'] : null;
                    $sql = "UPDATE lectura_medidor SET fecha='$felem' WHERE id_lectura='$idlem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio63'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $leacm = isset($_POST['leacm']) ? $_POST['leacm'] : null;
                    $idlem = isset($_POST['idle']) ? $_POST['idle'] : null;
                    $sql = "UPDATE lectura_medidor SET lectura_actual='$leacm' WHERE id_lectura='$idlem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio64'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $leanm = isset($_POST['leanm']) ? $_POST['leanm'] : null;
                    $idlem = isset($_POST['idle']) ? $_POST['idle'] : null;
                    $sql = "UPDATE lectura_medidor SET lectura_anterior='$leacm' WHERE id_lectura='$idlem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio71'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ccclfm = isset($_POST['ccclfm']) ? $_POST['ccclfm'] : null;
                    $idfam = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                    $sql = "UPDATE factura SET cedula_cliente='$ccclfm' WHERE id_fac='$idfam';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio72'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $fefam = isset($_POST['fefam']) ? $_POST['fefam'] : null;
                    $idfam = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                    $sql = "UPDATE factura SET fecha_aviso='$fefam' WHERE id_fac='$idfam';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio73'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $fevfam = isset($_POST['fevfam']) ? $_POST['fevfam'] : null;
                    $idfam = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                    $sql = "UPDATE factura SET fecha_vencimiento='$fevfam' WHERE id_fac='$idfam';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio74'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $cofam = isset($_POST['cofam']) ? $_POST['cofam'] : null;
                    $idfam = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                    $sql = "UPDATE factura SET total='$cofam' WHERE id_fac='$idfam';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio81'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $idfapm = isset($_POST['idfapm']) ? $_POST['idfapm'] : null;
                    $idpam = isset($_POST['idpa']) ? $_POST['idpa'] : null;
                    $sql = "UPDATE pagos SET id_factura='$idfapm' WHERE id_pago='$idpam';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio82'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $fepam = isset($_POST['fepam']) ? $_POST['fepam'] : null;
                    $idpam = isset($_POST['idpa']) ? $_POST['idpa'] : null;
                    $sql = "UPDATE pagos SET fecha='$fepam' WHERE id_pago='$idpam';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio83'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $mopam = isset($_POST['mopam']) ? $_POST['mopam'] : null;
                    $idpam = isset($_POST['idpa']) ? $_POST['idpa'] : null;
                    $sql = "UPDATE pagos SET monto='$mopam' WHERE id_pago='$idpam';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio91'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ccclrm = isset($_POST['ccclrm']) ? $_POST['ccclrm'] : null;
                    $idrem = isset($_POST['idre']) ? $_POST['idre'] : null;
                    $sql = "UPDATE reporte_servicio SET cedula_cliente='$ccclrm' WHERE id_reporte='$idrem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio92'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $prrem = isset($_POST['prrem']) ? $_POST['prrem'] : null;
                    $idrem = isset($_POST['idre']) ? $_POST['idre'] : null;
                    $sql = "UPDATE reporte_servicio SET problema_reportado='$prrem' WHERE id_reporte='$idrem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio93'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $ferem = isset($_POST['ferem']) ? $_POST['ferem'] : null;
                    $idrem = isset($_POST['idre']) ? $_POST['idre'] : null;
                    $sql = "UPDATE reporte_servicio SET fecha_reporte='$ferem' WHERE id_reporte='$idrem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio94'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $esrem = isset($_POST['esrem']) ? $_POST['esrem'] : null;
                    $idrem = isset($_POST['idre']) ? $_POST['idre'] : null;
                    $sql = "UPDATE reporte_servicio SET estado='$esrem' WHERE id_reporte='$idrem';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio101'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $tinom = isset($_POST['tinom']) ? $_POST['tinom'] : null;
                    $idnom = isset($_POST['idno']) ? $_POST['idno'] : null;
                    $sql = "UPDATE noticias SET titulo='$tinom' WHERE id_noticia='$idnom';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio102'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $conom = isset($_POST['conom']) ? $_POST['conom'] : null;
                    $idnom = isset($_POST['idno']) ? $_POST['idno'] : null;
                    $sql = "UPDATE noticias SET contenido='$conom' WHERE id_noticia='$idnom';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
            else if (isset($_POST['cambio103'])){
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if(!$dbconn){
                    echo "NO PUEDO CONECTARME A LA BASE DE DATOS";            
                }
                else {
                    $bdatos = pg_dbname($dbconn);
                    $punom = isset($_POST['punom']) ? $_POST['punom'] : null;
                    $idnom = isset($_POST['idno']) ? $_POST['idno'] : null;
                    $sql = "UPDATE noticias SET fecha_publicacion='$punom' WHERE id_noticia='$idnom';";
                    $result = pg_exec($dbconn, $sql);
                    if(!$result){
                        echo '<br><br>';
                        echo "Upss! Al parecer hubo un error al momento de ingresar los datos. Por favor revisa las llaves foráneas, los valores que deben ser únicos o los campos no nulos.";
                    }
                    else{
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo 'EL DATO SE MODIFICÓ EXITOSAMENTE EN LA TABLA';
                        echo '</form>';
                    }
                }   
            }
         
        }

        
        else if(isset($_POST['consultar']) || isset($_POST['consultar1']) || isset($_POST['consultar2']) || isset($_POST['consultar3'])
        || isset($_POST['consultar4']) || isset($_POST['consultar5']) || isset($_POST['consultar6']) || isset($_POST['consultar7'])
        || isset($_POST['consultar8']) || isset($_POST['consultar9']) || isset($_POST['consultar10'])){
            switch ($opcion) {
                case 1:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Empleados";
                    echo '<br><br>';
                    echo '<form action="">';
                    echo '<label>Cédula a consultar: </label>';
                    echo '<input type="number" name="ccem" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<label><br>O <br><br><br> Apellido a consultar: </label>';
                    echo '<input type="text" name="apem">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar1">';
                    echo '</form>';
                break;
                case 2:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Clientes";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula a consultar: </label>';
                    echo '<input type="number" name="cccl" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar2">';
                    echo '</form>';
                    break;
                case 3:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Contratos Empleados";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id del contrato: </label>';
                    echo '<input type="number" name="idcoe" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar3">';
                    echo '</form>';
                    break;
                case 4:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Contratos Servicio";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id del servicio: </label>';
                    echo '<input type="number" name="idcoc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar4">';
                    echo '</form>';
                    break;
                case 5:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Medidores";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id del medidor: </label>';
                    echo '<input type="number" name="idme" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar5">';
                    echo '</form>';
                    break;
                case 6:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Lecturas de Medidor";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id de la lectura: </label>';
                    echo '<input type="number" name="idle" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar6">';
                    echo '</form>';
                    break;
                case 7:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Facturas";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id de la factura: </label>';
                    echo '<input type="number" name="idfa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar7">';
                    echo '</form>';
                    break;
                case 8:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Pagos";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id del pago: </label>';
                    echo '<input type="number" name="idpa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar8">';
                    echo '</form>';
                    break;
                case 9:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Reportes de Servicio";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id del reporte: </label>';
                    echo '<input type="number" name="idre" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar9">';
                    echo '</form>';
                    break;
                case 10:
                    echo '<br><br><br>';
                    echo "Se consultarán los datos de la tabla Noticias";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Id de la noticia: </label>';
                    echo '<input type="number" name="idno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Consultar  " name="consultar10">';
                    echo '</form>';
                    break;
            }                
            if (isset($_POST['consultar1'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $ccem = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $apem = isset($_POST['apem']) ? $_POST['apem'] : null; 
                    $sql="SELECT * FROM empleado WHERE empleado.Cedula='$ccem' OR empleado.Apellido = '$apem';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "EMPLEADO NO ENCONTRADO";
                    }
                    else{
                        $ccem=pg_result($result,0,'cedula');
                        $noem=pg_result($result,0,'nombre');
                        $apem=pg_result($result,0,'apellido');
                        $ceem=pg_result($result,0,'celular');
                        $emem=pg_result($result,0,'email');
                        $caem=pg_result($result,0,'cargo');                        
                        echo '<caption> DESCRIPCION DE EMPLEADO </caption>';
                        echo '<form action="" method="post">';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> CEDULA </th>';
                        echo '<th> NOMBRE </th>';
                        echo '<th> APELLIDO </th>';
                        echo '<th> CELULAR </th>';
                        echo '<th> EMAIL </th>';
                        echo '<th> CARGO </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $ccem . '</td>';
                        echo '<td>' . $noem . '</td>';
                        echo '<td>' . $apem . '</td>';
                        echo '<td>' . $ceem . '</td>';
                        echo '<td>' . $emem . '</td>';
                        echo '<td>' . $caem . '</td>';
                        echo '</tr>'; 
                        echo '</table>';   
                        echo '</form>';

                    }
                }
            }
            else if (isset($_POST['consultar2'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $cccl = isset($_POST['cccl']) ? $_POST['cccl'] : null;
                    $sql="SELECT * FROM cliente WHERE cliente.Cedula='$cccl';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CLIENTE NO ENCONTRADO";
                    }
                    else{
                        $nocl=pg_result($result,0,'nombre_completo');
                        $dicl=pg_result($result,0,'direccion');
                        $cecl=pg_result($result,0,'celular');                      
                        echo '<caption> DESCRIPCION DE CLIENTE </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> CEDULA </th>';
                        echo '<th> NOMBRE </th>';
                        echo '<th> DIRECCION </th>';
                        echo '<th> CELULAR </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $cccl . '</td>';
                        echo '<td>' . $nocl . '</td>';
                        echo '<td>' . $dicl . '</td>';
                        echo '<td>' . $cecl . '</td>';
                        echo '</tr>';
                        echo '</table>';    
                    }
                }
            }
            else if (isset($_POST['consultar3'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idcoe = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $sql="SELECT * FROM contrato_empleado WHERE id_contrato='$idcoe';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CONTRATO NO ENCONTRADO";
                    }
                    else{
                        $ccemc=pg_result($result,0,'cedula_empleado');
                        $ticoe=pg_result($result,0,'tipo_contrato');
                        $fecoe=pg_result($result,0,'fecha_inicio');
                        $fevcoe=pg_result($result,0,'fecha_fin');
                        $sucoe=pg_result($result,0,'sueldo');
                        echo '<caption"> CONTRATO DE EMPLEADO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA EMPLEADO </th>';
                        echo '<th> TIPO DE CONTRATO </th>';
                        echo '<th> FECHA DE INICIO </th>';
                        echo '<th> FECHA FINALIZA </th>';
                        echo '<th> SUELDO </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idcoe . '</td>';
                        echo '<td>' . $ccemc . '</td>';
                        echo '<td>' . $ticoe . '</td>';
                        echo '<td>' . $fecoe . '</td>';
                        echo '<td>' . $fevcoe . '</td>';
                        echo '<td>' . $sucoe . '</td>';
                        echo '</tr>'; 
                        echo '</table>';   
                    }
                }
            }
            else if (isset($_POST['consultar4'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idcoc = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                    $sql="SELECT * FROM contrato_servicio WHERE id_servicio='$idcoc';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CONTRATO NO ENCONTRADO";
                    }
                    else{
                        $ccclc=pg_result($result,0,'cedula_cliente');
                        $fecoc=pg_result($result,0,'fecha_inicio');
                        $fevcoc=pg_result($result,0,'fecha_fin');
                        $ticoe=pg_result($result,0,'tipo_servicio');
                        echo '<caption> CONTRATO DE SERVICIO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> FECHA DE INICIO </th>';
                        echo '<th> FECHA FINALIZA </th>';
                        echo '<th> TIPO DE SERVICIO </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idcoc . '</td>';
                        echo '<td>' . $ccclc . '</td>';
                        echo '<td>' . $fecoc . '</td>';
                        echo '<td>' . $fevcoc . '</td>';
                        echo '<td>' . $ticoe . '</td>';
                        echo '</tr>'; 
                        echo '</table>';   
                    }
                }
            }
            else if (isset($_POST['consultar5'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idme = isset($_POST['idme']) ? $_POST['idme'] : null;
                    $sql="SELECT * FROM medidor WHERE id_medidor='$idme';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "MEDIDOR NO ENCONTRADO";
                    }
                    else{
                        $ccclme=pg_result($result,0,'cedula_cliente');
                        $nums=pg_result($result,0,'numero_serie');
                        echo '<caption> MEDIDOR ENCONTRADO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> NÚMERO DE SERIE </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idme . '</td>';
                        echo '<td>' . $ccclme . '</td>';
                        echo '<td>' . $nums . '</td>';
                        echo '</tr>';
                        echo '</table>';    
                    }
                }
            }
            else if (isset($_POST['consultar6'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idle = isset($_POST['idle']) ? $_POST['idle'] : null;
                    $sql="SELECT * FROM lectura_medidor WHERE id_lectura='$idle';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "LECTURA NO ENCONTRADA";
                    }
                    else{
                        $idmel=pg_result($result,0,'id_medidor');
                        $fele=pg_result($result,0,'fecha');
                        $leac=pg_result($result,0,'lectura_actual');
                        $lean=pg_result($result,0,'lectura_anterior');
                        echo '<caption> LECTURA ENCONTRADA </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> ID DEL MEDIDOR </th>';
                        echo '<th> FECHA DE LECTURA </th>';
                        echo '<th> LECTURA ACTUAL </th>';
                        echo '<th> LECTURA ANTERIOR </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idle . '</td>';
                        echo '<td>' . $idmel . '</td>';
                        echo '<td>' . $fele . '</td>';
                        echo '<td>' . $leac . '</td>';
                        echo '<td>' . $lean . '</td>';
                        echo '</tr>'; 
                        echo '</table>';   
                    }
                }
            }
            else if (isset($_POST['consultar7'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idfa = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                    $sql="SELECT * FROM factura WHERE id_fac='$idfa';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "FACTURA NO ENCONTRADA";
                    }
                    else{
                        $ccclf=pg_result($result,0,'cedula_cliente');
                        $fefa=pg_result($result,0,'fecha_aviso');
                        $fevfa=pg_result($result,0,'fecha_vencimiento');
                        $cofa=pg_result($result,0,'total');
                        echo '<caption> FACTURA ENCONTRADA </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> FECHA DE GENERACIÓN </th>';
                        echo '<th> FECHA DE VENCIMIENTO </th>';
                        echo '<th> TOTAL COSTO </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idfa . '</td>';
                        echo '<td>' . $ccclf . '</td>';
                        echo '<td>' . $fefa . '</td>';
                        echo '<td>' . $fevfa . '</td>';
                        echo '<td>' . $cofa . '</td>';
                        echo '</tr>';
                        echo '</table>';    
                    }
                }
            }
            else if (isset($_POST['consultar8'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idpa = isset($_POST['idpa']) ? $_POST['idpa'] : null;
                    $sql="SELECT * FROM pagos WHERE id_pago='$idpa';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "PAGO NO ENCONTRADO";
                    }
                    else{
                        $idfap=pg_result($result,0,'id_factura');
                        $fepa=pg_result($result,0,'fecha');
                        $mopa=pg_result($result,0,'monto');
                        echo '<caption> PAGO ENCONTRADO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> ID FACTURA </th>';
                        echo '<th> FECHA PAGO REALIZADO </th>';
                        echo '<th> MONTO TOTAL </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idpa . '</td>';
                        echo '<td>' . $idfap . '</td>';
                        echo '<td>' . $fepa . '</td>';
                        echo '<td>' . $mopa . '</td>';
                        echo '</tr>';  
                        echo '</table>';  
                    }
                }
            }
            else if (isset($_POST['consultar9'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idre = isset($_POST['idre']) ? $_POST['idre'] : null;
                    $sql="SELECT * FROM reporte_servicio WHERE id_reporte='$idre';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "REPORTE NO ENCONTRADO";
                    }
                    else{
                        $ccclr=pg_result($result,0,'cedula_cliente');
                        $prre=pg_result($result,0,'problema_reportado');
                        $fere=pg_result($result,0,'fecha_reporte');
                        $esre=pg_result($result,0,'estado');
                        echo '<caption> REPORTE ENCONTRADO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> PROBLEMA REPORTADO </th>';
                        echo '<th> FECHA DE REPORTE </th>';
                        echo '<th> ESTADO </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idre . '</td>';
                        echo '<td>' . $ccclr . '</td>';
                        echo '<td>' . $prre . '</td>';
                        echo '<td>' . $fere . '</td>';
                        echo '<td>' . $esre . '</td>';
                        echo '</tr>';   
                        echo '</table>'; 
                    }
                }
            }
            else if (isset($_POST['consultar10'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idno = isset($_POST['idno']) ? $_POST['idno'] : null;
                    $sql="SELECT * FROM noticias WHERE id_noticia='$idno';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "NOTICIA NO ENCONTRADA";
                    }
                    else{
                        $tino=pg_result($result,0,'titulo');
                        $cono=pg_result($result,0,'contenido');
                        $puno=pg_result($result,0,'fecha_publicacion');
                        echo '<caption> NOTICIA ENCONTRADA </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> TITULO </th>';
                        echo '<th> CONTENIDO </th>';
                        echo '<th> FECHA DE PUBLICACION </th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>' . $idno . '</td>';
                        echo '<td>' . $tino . '</td>';
                        echo '<td>' . $cono . '</td>';
                        echo '<td>' . $puno . '</td>';
                        echo '</tr>';
                        echo '</table>';   
                    }
                }
            }
                
        }



        else if(isset($_POST['eliminar']) || isset($_POST['eliminar1']) || isset($_POST['eliminar2']) || isset($_POST['eliminar3']) || isset($_POST['eliminar4'])
        || isset($_POST['eliminar5']) || isset($_POST['eliminar6']) || isset($_POST['eliminar7']) || isset($_POST['eliminar8']) || isset($_POST['eliminar9']) || isset($_POST['eliminar10'])){
            switch ($opcion) {
                case 1:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Empleado";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula a eliminar: </label>';
                    echo '<input type="text" name="ccem" maxlength=10>';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar1">';
                    echo '</form>';
                break;
                case 2:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Cliente";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula a eliminar: </label>';
                    echo '<input type="number" name="cccl" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar2">';
                    echo '</form>';
                    break;
                case 3:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Contratos Empleado";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>ID de Contrato a eliminar: </label>';
                    echo '<input type="number" name="idcoe" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar3">';
                    echo '</form>';
                    break;
                case 4:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Contratos Servicio";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>ID de Contrato a eliminar: </label>';
                    echo '<input type="number" name="idcoc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar4">';
                    echo '</form>';
                    break;
                case 5:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Medidores";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>ID de Medidor a eliminar: </label>';
                    echo '<input type="number" name="idme" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar5">';
                    echo '</form>';
                    break;
                case 6:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Lectura de Medidores";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>ID de Lectura a eliminar: </label>';
                    echo '<input type="number" name="idle" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar6">';
                    echo '</form>';
                    break;
                case 7:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Facturas";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>ID de Factura a eliminar: </label>';
                    echo '<input type="number" name="idfa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar7">';
                    echo '</form>';
                    break;
                case 8:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Pagos";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>ID de Pago a eliminar: </label>';
                    echo '<input type="number" name="idpa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar8">';
                    echo '</form>';
                    break;
                case 9:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Reportes de Servicio";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>ID de Reporte a eliminar: </label>';
                    echo '<input type="number" name="idre" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar9">';
                    echo '</form>';
                    break;
                case 10:
                    echo '<br><br><br>';
                    echo "Se eliminarán tuplas de la tabla Noticias";
                    echo '<br><br>';
                    echo '<form action="" method="post">';
                    echo '<label>Cédula a eliminar: </label>';
                    echo '<input type="number" name="cccl" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57">';
                    echo '<br><br>';
                    echo '<input type="submit" value="  Eliminar  " name="eliminar10">';
                    echo '</form>';
                    break;
            }                
            echo '<br><br>';
            if (isset($_POST['eliminar1'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $ccem = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                    $sql="SELECT * FROM empleado WHERE empleado.Cedula='$ccem';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "EMPLEADO NO ENCONTRADO";
                    }
                    else{
                        $noem=pg_result($result,0,'nombre');
                        $apem=pg_result($result,0,'apellido');
                        $sql="DELETE FROM empleado WHERE empleado.Cedula='$ccem';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "EL EMPLEADO&nbsp; " .$noem ;
                            echo "&nbsp;".$apem;
                            echo "&nbsp;CON CEDULA:&nbsp;" .$ccem;
                            echo '&nbsp;FUE ELIMINADO EXITOSAMENTE'; 
                        }      

                    }
                }
            }
            else if (isset($_POST['eliminar2'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $cccl = isset($_POST['cccl']) ? $_POST['cccl'] : null;
                    $sql="SELECT * FROM cliente WHERE cliente.Cedula='$cccl';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "EMPLEADO NO ENCONTRADO";
                    }
                    else{
                        $nocl=pg_result($result,0,'nombre_completo');
                        $sql="DELETE FROM cliente WHERE cliente.Cedula='$cccl';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "EL CLIENTE&nbsp; " .$nocl ;
                            echo "&nbsp;CON CEDULA:&nbsp;" .$cccl;
                            echo '&nbsp;FUE ELIMINADO EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar3'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idcoe = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                    $sql="SELECT * FROM contrato_empleado WHERE id_contrato='$idcoe';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CONTRATO NO ENCONTRADO";
                    }
                    else{
                        $ccemc=pg_result($result,0,'cedula_empleado');
                        $sql="DELETE FROM contrato_empleado WHERE id_contrato='$idcoe';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "EL CONTRATO CON ID&nbsp; " .$idcoe ;
                            echo "&nbsp;LIGADO AL EMPLEADO CON CEDULA:&nbsp;" .$ccemc;
                            echo '&nbsp;FUE ELIMINADO EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar4'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idcoc = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                    $sql="SELECT * FROM contrato_servicio WHERE id_servicio='$idcoc';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "CONTRATO NO ENCONTRADO";
                    }
                    else{
                        $ccclc=pg_result($result,0,'cedula_cliente');
                        $sql="DELETE FROM contrato_servicio WHERE id_servicio='$idcoc';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "EL CONTRATO CON ID&nbsp; " .$idcoc ;
                            echo "&nbsp;LIGADO AL EMPLEADO CON CEDULA:&nbsp;" .$ccclc;
                            echo '&nbsp;FUE ELIMINADO EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar5'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idme = isset($_POST['idme']) ? $_POST['idme'] : null;
                    $sql="SELECT * FROM medidor WHERE id_medidor='$idme';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "MEDIDOR NO ENCONTRADO";
                    }
                    else{
                        $ccclme=pg_result($result,0,'cedula_cliente');
                        $sql="DELETE FROM medidor WHERE id_medidor='$idme';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "EL MEDIDOR CON ID&nbsp; " .$idme ;
                            echo "&nbsp;LIGADO AL CLIENTE CON CEDULA:&nbsp;" .$ccclme;
                            echo '&nbsp;FUE ELIMINADO EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar6'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idle = isset($_POST['idle']) ? $_POST['idle'] : null;
                    $sql="SELECT * FROM lectura_medidor WHERE id_lectura ='$idle';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "LECTURA NO ENCONTRADA";
                    }
                    else{
                        $idmel=pg_result($result,0,'id_medidor');
                        $sql="DELETE FROM lectura_medidor WHERE id_lectura ='$idle';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "LA LECTURA CON ID&nbsp; " .$idle ;
                            echo "&nbsp;LIGADA AL MEDIDOR CON ID:&nbsp;" .$idmel;
                            echo '&nbsp;FUE ELIMINADA EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar7'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idfa = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                    $sql="SELECT * FROM factura WHERE id_fac ='$idfa';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "FACTURA NO ENCONTRADA";
                    }
                    else{
                        $ccclf=pg_result($result,0,'cedula_cliente');
                        $sql="DELETE FROM factura WHERE id_fac ='$idfa';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "LA FACTURA CON ID&nbsp; " .$idfa ;
                            echo "&nbsp;LIGADA AL CLIENTE CON CEDULA:&nbsp;" .$ccclf;
                            echo '&nbsp;FUE ELIMINADA EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar8'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idpa = isset($_POST['idpa']) ? $_POST['idpa'] : null;
                    $sql="SELECT * FROM pagos WHERE id_pago ='$idpa';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "PAGO NO ENCONTRADO";
                    }
                    else{
                        $idfap=pg_result($result,0,'id_factura');
                        $sql="DELETE FROM pagos WHERE id_pago ='$idpa';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "EL PAGO CON ID&nbsp; " .$idpa ;
                            echo "&nbsp;LIGADO A LA FACTURA CON ID:&nbsp;" .$idfap;
                            echo '&nbsp;FUE ELIMINADO EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar9'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idre = isset($_POST['idre']) ? $_POST['idre'] : null;
                    $sql="SELECT * FROM reporte_servicio WHERE id_reporte ='$idre';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "REPORTE NO ENCONTRADO";
                    }
                    else{
                        $ccclr=pg_result($result,0,'cedula_cliente');
                        $sql="DELETE FROM reporte_servicio WHERE id_reporte ='$idre';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "EL REPORTE CON ID&nbsp; " .$idre ;
                            echo "&nbsp;LIGADO AL CLIENTE CON CEDULA:&nbsp;" .$ccclr;
                            echo '&nbsp;FUE ELIMINADO EXITOSAMENTE';  
                        }     

                    }
                }
            }
            else if (isset($_POST['eliminar10'])) {
                $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                if (!$dbconn) {
                    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                } else {
                    $bdatos = pg_dbname($dbconn);
                    $idno = isset($_POST['idno']) ? $_POST['idno'] : null;
                    $sql="SELECT * FROM noticias WHERE id_noticia ='$idno';";
                    $result=pg_exec($dbconn,$sql);
                    $nreg=pg_numrows($result);
                    if($nreg==0){
                        echo '<br><br>';    
                        echo "NOTICIA NO ENCONTRADA";
                    }
                    else{
                        $sql="DELETE FROM noticias WHERE id_noticia ='$idno';";
                        $result=pg_exec($dbconn,$sql);
                        if(!$result){
                            echo '<br><br>';
                            echo "Upss! Al parecer hubo un error al momento de eliminar los datos. Por favor, revisa las llaves foráneas relacionadas o los campos no nulos";
                        }
                        else{
                            echo '<br><br>'; 
                            echo "LA NOTICIA CON ID&nbsp; " .$idno ;
                            echo '&nbsp;FUE ELIMINADA EXITOSAMENTE';  
                        }     

                    }
                }
            }
        }



        else if(isset($_POST['listar'])){
            switch ($opcion) {
                case 1:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $ccem = isset($_POST['ccem']) ? $_POST['ccem'] : null;
                        $sql="SELECT * FROM empleado;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE EMPLEADOS </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> CÉDULA </th>';
                        echo '<th> NOMBRE </th>';
                        echo '<th> APELLIDO </th>';
                        echo '<th> CELULAR </th>';
                        echo '<th> EMAIL </th>';
                        echo '<th> CARGO </th>';
                        echo '</tr>';
                
                        for ($i = 0; $i < $nreg; $i++) {
                            $ccem = pg_result($result, $i, 'cedula'); 
                            $noem = pg_result($result, $i, 'nombre'); 
                            $apem = pg_result($result, $i, 'apellido');
                            $ceem = pg_result($result, $i, 'celular');
                            $emem = pg_result($result, $i, 'email');
                            $caem = pg_result($result, $i, 'cargo');
                            echo '<tr>';
                            echo '<td>' . $ccem . '</td>';
                            echo '<td>' . $noem . '</td>';
                            echo '<td>' . $apem . '</td>';
                            echo '<td>' . $ceem . '</td>';
                            echo '<td>' . $emem . '</td>';
                            echo '<td>' . $caem . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';
                        
                    }
                    break;
                case 2:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $cccl = isset($_POST['cccl']) ? $_POST['cccl'] : null;
                        $sql="SELECT * FROM cliente;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE CLIENTES </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> CÉDULA </th>';
                        echo '<th> NOMBRE </th>';
                        echo '<th> DIRECCION </th>';
                        echo '<th> CELULAR </th>';
                        echo '</tr>';
                
                        for ($i = 0; $i < $nreg; $i++) {
                            $cccl = pg_result($result, $i, 'cedula'); 
                            $nocl = pg_result($result, $i, 'nombre_completo'); 
                            $dicl = pg_result($result, $i, 'direccion');
                            $cecl = pg_result($result, $i, 'celular');
                            echo '<tr>';
                            echo '<td>' . $cccl . '</td>';
                            echo '<td>' . $nocl . '</td>';
                            echo '<td>' . $dicl. '</td>';
                            echo '<td>' . $cecl . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';
                        
                    }
                    break;
                case 3:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idcoe = isset($_POST['idcoe']) ? $_POST['idcoe'] : null;
                        $sql="SELECT * FROM contrato_empleado;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE CONTRATOS EMPLEADO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA EMPLEADO </th>';
                        echo '<th> TIPO DE CONTRATO </th>';
                        echo '<th> FECHA DE INICIO </th>';
                        echo '<th> FECHA FINALIZA </th>';
                        echo '<th> SUELDO </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idcoe=pg_result($result,$i,'id_contrato');
                            $ccemc=pg_result($result,$i,'cedula_empleado');
                            $ticoe=pg_result($result,$i,'tipo_contrato');
                            $fecoe=pg_result($result,$i,'fecha_inicio');
                            $fevcoe=pg_result($result,$i,'fecha_fin');
                            $sucoe=pg_result($result,$i,'sueldo');
                            echo '<tr>';
                            echo '<td>' . $idcoe . '</td>';
                            echo '<td>' . $ccemc . '</td>';
                            echo '<td>' . $ticoe . '</td>';
                            echo '<td>' . $fecoe . '</td>';
                            echo '<td>' . $fevcoe . '</td>';
                            echo '<td>' . $sucoe . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    }
                    break;
                case 4:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idcoc = isset($_POST['idcoc']) ? $_POST['idcoc'] : null;
                        $sql="SELECT * FROM contrato_servicio;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE CONTRATOS SERVICIO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> FECHA DE INICIO </th>';
                        echo '<th> FECHA FINALIZA </th>';
                        echo '<th> TIPO DE SERVICIO </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idcoc=pg_result($result,$i,'id_servicio');
                            $ccclc=pg_result($result,$i,'cedula_cliente');
                            $fecoc=pg_result($result,$i,'fecha_inicio');
                            $fevcoc=pg_result($result,$i,'fecha_fin');
                            $ticoe=pg_result($result,$i,'tipo_servicio');
                            echo '<tr>';
                            echo '<td>' . $idcoc . '</td>';
                            echo '<td>' . $ccclc . '</td>';
                            echo '<td>' . $fecoc . '</td>';
                            echo '<td>' . $fevcoc . '</td>';
                            echo '<td>' . $ticoe . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    }   
                    break;
                case 5:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idme = isset($_POST['idme']) ? $_POST['idme'] : null;
                        $sql="SELECT * FROM medidor;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE MEDIDORES </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> NÚMERO DE SERIE </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idme=pg_result($result,$i,'id_medidor');
                            $ccclme=pg_result($result,$i,'cedula_cliente');
                            $nums=pg_result($result,$i,'numero_serie');
                            echo '<tr>';
                            echo '<td>' . $idme . '</td>';
                            echo '<td>' . $ccclme . '</td>';
                            echo '<td>' . $nums . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    } 
                    break;
                case 6:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idle = isset($_POST['idle']) ? $_POST['idle'] : null;
                        $sql="SELECT * FROM lectura_medidor;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE LECTURAS DE MEDIDOR </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> ID DEL MEDIDOR </th>';
                        echo '<th> FECHA DE LECTURA </th>';
                        echo '<th> LECTURA ACTUAL </th>';
                        echo '<th> LECTURA ANTERIOR </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idle=pg_result($result,$i,'id_lectura');
                            $idmel=pg_result($result,$i,'id_medidor');
                            $fele=pg_result($result,$i,'fecha');
                            $leac=pg_result($result,$i,'lectura_actual');
                            $lean=pg_result($result,$i,'lectura_anterior');
                            echo '<tr>';
                            echo '<td>' . $idle . '</td>';
                            echo '<td>' . $idmel . '</td>';
                            echo '<td>' . $fele . '</td>';
                            echo '<td>' . $leac . '</td>';
                            echo '<td>' . $lean . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    }
                    break;
                case 7:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idfa = isset($_POST['idfa']) ? $_POST['idfa'] : null;
                        $sql="SELECT * FROM factura;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE FACTURAS </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> FECHA DE GENERACIÓN </th>';
                        echo '<th> FECHA DE VENCIMIENTO </th>';
                        echo '<th> TOTAL COSTO </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idfa=pg_result($result,$i,'id_fac');
                            $ccclf=pg_result($result,$i,'cedula_cliente');
                            $fefa=pg_result($result,$i,'fecha_aviso');
                            $fevfa=pg_result($result,$i,'fecha_vencimiento');
                            $cofa=pg_result($result,$i,'total');
                            echo '<tr>';
                            echo '<td>' . $idfa . '</td>';
                            echo '<td>' . $ccclf . '</td>';
                            echo '<td>' . $fefa . '</td>';
                            echo '<td>' . $fevfa . '</td>';
                            echo '<td>' . $cofa . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    }
                    break;
                case 8:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idpa = isset($_POST['idpa']) ? $_POST['idpa'] : null;
                        $sql="SELECT * FROM pagos;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE PAGOS </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> ID FACTURA </th>';
                        echo '<th> FECHA PAGO REALIZADO </th>';
                        echo '<th> MONTO TOTAL </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idpa=pg_result($result,$i,'id_pago');
                            $idfap=pg_result($result,$i,'id_factura');
                            $fepa=pg_result($result,$i,'fecha');
                            $mopa=pg_result($result,$i,'monto');
                            echo '<tr>';
                            echo '<td>' . $idpa . '</td>';
                            echo '<td>' . $idfap . '</td>';
                            echo '<td>' . $fepa . '</td>';
                            echo '<td>' . $mopa . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    }
                    break;
                case 9:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idre = isset($_POST['idre']) ? $_POST['idre'] : null;
                        $sql="SELECT * FROM reporte_servicio;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE REPORTES DE SERVICIO </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> CEDULA CLIENTE </th>';
                        echo '<th> PROBLEMA REPORTADO </th>';
                        echo '<th> FECHA DE REPORTE </th>';
                        echo '<th> ESTADO </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idre=pg_result($result,$i,'id_reporte');
                            $ccclr=pg_result($result,$i,'cedula_cliente');
                            $prre=pg_result($result,$i,'problema_reportado');
                            $fere=pg_result($result,$i,'fecha_reporte');
                            $esre=pg_result($result,$i,'estado');
                            echo '<tr>';
                            echo '<td>' . $idre . '</td>';
                            echo '<td>' . $ccclr . '</td>';
                            echo '<td>' . $prre . '</td>';
                            echo '<td>' . $fere . '</td>';
                            echo '<td>' . $esre . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    }
                    break;
                case 10:
                    echo '<br><br><br>';
                    $dbconn = pg_connect("host=localhost dbname=aquasoluciones user=postgres password=1234");
                    if (!$dbconn) {
                        echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
                    } else {
                        $bdatos = pg_dbname($dbconn);
                        $idno = isset($_POST['idno']) ? $_POST['idno'] : null;
                        $sql="SELECT * FROM noticias;";
                        $result=pg_exec($dbconn,$sql);
                        $nreg=pg_numrows($result);
                        echo '<caption> LISTADO DE NOTICIAS </caption>';
                        echo '<br><br>';
                        echo '<table border="1" align = "center">';
                        echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> TITULO </th>';
                        echo '<th> CONTENIDO </th>';
                        echo '<th> FECHA DE PUBLICACION </th>';
                        echo '</tr>';
                        for ($i = 0; $i < $nreg; $i++) {
                            $idno=pg_result($result,$i,'id_noticia');
                            $tino=pg_result($result,$i,'titulo');
                            $cono=pg_result($result,$i,'contenido');
                            $puno=pg_result($result,$i,'fecha_publicacion');
                            echo '<tr>';
                            echo '<td>' . $idno . '</td>';
                            echo '<td>' . $tino . '</td>';
                            echo '<td>' . $cono . '</td>';
                            echo '<td>' . $puno . '</td>';
                            echo '</tr>';
                        }
                
                        echo '</table>';

                    }
                    break;
                }                
            }
        }
    ?>
    </form>
    

    <!--final formulario-->
    <div id="separador"></div>
        
    <footer>
        <div class="contenido">
        <div class="redes_sociales">
            <h3>Redes Sociales</h3>
            <ul class="iconos_redes">
            <li><a href="https://www.facebook.com/empoobando.esp.9" target = "_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/home" target = "_blank">  <i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/explore/tags/empobando/" target = "_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <p class="p1fo">Adjuntamos las redes
            sociales para que
            puedan hacer un mejor
            seguimientos de nuestras
            actividades y nuestros
            anuncions importantes.
        </p>
        </div>
        <div class="observacion">
            <h3>Observación</h3>
            <p  class="p1fo">La página resultante
            surge a partir de la idea
            de realizar una maqueta relacionada con
            la página oficial de 
            la empresa de tratamiento de aguas
            de la ciudad local y describir sus servicios
            en la página web. 
        </p>
        </div>
        <div class="informacion">
            <h3>Información</h3>
            <ul class="link_menu">
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="acerca.html">Acerca de nosotros</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            </ul>
        </div>
        <div class="nuestro_diseno">
            <h3>Nuestro Diseño</h3>
            <p  class="p1fo">Para este diseño nos
            hemos inspirado en plantillas y archivos auxiliares 
            con los que se venian trabajando
            en el transcurso de la carrera
            junto con las investigaciones realizadas
            para aplicarlas en este proyecto.
            </p>
        </div>
        </div>
    </footer>
</body>
</html>


