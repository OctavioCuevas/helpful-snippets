<?php
	$msp_conn = simplexml_load_file("C:\ProgramData\Microsip\ProgramData.xml");
	$connections = $msp_conn->xpath('LocalMachine/Software/Microsip/Conexiones');
	foreach($connections[0] as $name => $data) {
	    $directory = (string) $data->Directorio_de_datos;
	    $server = $data->Tipo_de_acceso == 0 ? (string) $data->Nombre_del_servidor[0] : 'localhost';
	    if (isset($conn_data)) {
		$conn_data += [$name => array($server, $directory)];
	    } else {
		$conn_data[$name] = array($server, $directory);
	    }
	}
?>
