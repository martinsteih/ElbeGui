<?php
header( 'Access-Contol-Allow-Origin: *' );
header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Methods: POST' );
header( 'Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With' );

include_once '../model/Initvm.php';

$data = json_decode( file_get_contents( "php://input" ) );

$initvm = new InitVm( $data->buildType, $data->mirror, $data->noauth, $data->preference, $data->suite, $data->packageList, $data->preseed, $data->size, $data->imageType, $data->portForwarding );

echo json_encode( $initvm );


?>