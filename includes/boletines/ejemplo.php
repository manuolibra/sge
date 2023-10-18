<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    require_once("../db.php");

    $id = $_GET['id'];
    $consulta = sprintf("SELECT * FROM alumnos WHERE id = %u", $id);
    $result = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($result);

    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    $nomprofesor = $fila['nombre'];
    $fechaprofesor = $fila['cedula_escolar'];
    
    //Cargando template
    $template = 'Plantilla_Colegiado.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('pro.nomprofesor', $nomprofesor);
    $TBS->MergeField('pro.fechaprofesor', $fechaprofesor);

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