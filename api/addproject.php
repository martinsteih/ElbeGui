<?php
header( 'Access-Contol-Allow-Origin: *' );
header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Methods: POST' );
header( 'Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With' );

include_once '../model/Project.php';

$data = json_decode( file_get_contents( "php://input" ) );

$project = new Project($data->name, $data->description);

$projects = array(new Project('First', 'Desc'), new Project('Second', 'Desc'), $project);

echo json_encode( $projects );


?>