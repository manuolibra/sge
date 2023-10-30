<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    require_once("../db.php");

    $id = $_GET['id'];
    $consulta = sprintf("SELECT * FROM alumnos WHERE id = %u", $id);
    $result = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($result);

    $sql = sprintf("SELECT * FROM grados WHERE id = %u", $fila['id_grado']);
    $resultado = mysqli_query($conexion, $sql);
    $cgrado = mysqli_fetch_array($resultado);
    
    function aEscolar() {
        $añoActual = date("Y");
        $mesActual = idate("m");

        if ($mesActual <= 7) {
            return date("Y",strtotime("-1 year")) . "-" . $añoActual;
        } elseif ($mesActual >= 9) {
            return $añoActual . "-" . date("Y",strtotime("+1 year"));
        } else {
            return "Vacaciones";
        };
        
    };

    function lapsoActual() {
        $mesActual = idate("m");

        switch ($mesActual) {
            case '9' || '10' || '11' || '12':
                return "Primer Lapso";
                break;

            case '1' || '2' || '3':
                return "Segundo Lapso";
                break;
            default:
                return "Tercer Lapso";
                break;
        }
    }

    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    $apellido = $fila['apellido'];
    $nombre = $fila['nombre'];
    $cedula = $fila['cedula_escolar'];
    $grado = $cgrado['descripcion'];
    $rep = $fila['rep'];
    $ano = aEscolar();
    $fecha = date("d-m-Y");
    $lapso = lapsoActual(); 
    
    //Cargando template
    $template = 'primaria.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('apellidos', $apellido);
    $TBS->MergeField('nombres', $nombre);
    $TBS->MergeField('c.escolar', $cedula);
    $TBS->MergeField('grado', $grado);
    $TBS->MergeField('rep', $rep);
    $TBS->MergeField('aEscolar', $ano);
    $TBS->MergeField('fecha', $fecha);
    $TBS->MergeField('lapso', $lapso);

    $TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

    $save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
    $output_file_name = 'Informe Final - '.$fila['nombre'] . $fila['apellido']. ' - ' . date('Y-m-d') . $save_as. '.docx';
    if ($save_as==='') {
        $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); 
        exit();
    } else {
        $TBS->Show(OPENTBS_FILE, $output_file_name);
        exit("File [$output_file_name] has been created.");
    }
?>