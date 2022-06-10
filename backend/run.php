<?php
require "classes.php";

header('Content-Type: application/json;charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');

$request = json_decode(file_get_contents("php://input"));
$data = array(
    'error' => false,
    'message' => ''
);

$chris = new Personnage("Pseudo", 0);
if ($request->action == 'Archer') {
    $data['player'] = new Archer("Archer", $request->life);
    
}else if ($request->action == 'Guerier') {
    $data['player'] = new Guerrier("Guerrier", $request->life);
    
}else if ($request->action == 'Sorcier') {
    $data['player'] = new Sorcier("Sorcier", $request->life);
    
}else if ($request->action == 'Druide') {
    $data['player'] = new Druide("Druide", $request->life);
}else {
    $data['player'] = new Pretre("Pretre", $request->life);
    
}
echo json_encode($data);