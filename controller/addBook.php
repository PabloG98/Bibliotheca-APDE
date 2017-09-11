<?php
	require_once '../php/config.php';	
	
	$query = array('nombre_biblioteca' => new MongoRegex('/^'.preg_quote($_POST['nombre_biblioteca']).'$/i'));	
	$cursor = $collection->find($query)->count();
	if($cursor == 0){
		$document = array(
		"nombre_biblioteca" => $_POST['nombre_biblioteca'],
		"num_biblioteca" => $_POST['num_biblioteca']
		);
		$collection->insert($document);
		$document['_id'] = $document['_id'];
		echo json_encode($document);
	}
	else{
		echo 0;	
	}
	
?>
