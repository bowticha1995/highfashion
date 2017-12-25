<?php 

// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;

// require '../vendor/autoload.php';


// $app = new \Slim\App;
// $app->post('/register', function (Request $request, Response $response) {
//     //$name = $request->post('username');
//     //$response->getBody()->write("Hello, $name");
//     echo json_encode($request->post('username'));
    
//     //return $response;
// });

// $app->run();


$id = uniqid("");
$user = $_POST['username'];
$pass = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nickname = $_POST['nickname'];
$sex = $_POST['sex'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$address = $_POST['address'];
$image = $_POST['image'];
require 'connect.php';
$sql = "INSERT INTO members (username,password,firstname,lastname,nickname,sex,tel,email,address,image,id) 
    VALUES ('$user','$pass','$firstname','$lastname','$nickname','$sex','$tel','$email','$address','$image','$id')";
    

if ($conn->query($sql) === false) {
    $message = [
        'status' => 408,
        'message'=> "register failed"
    ]/** whatever you're serializing **/;
    header('Content-Type: application/json');
    echo json_encode($message);
}  else {
    $message = [
        'status' => 200,
        'message'=> "register completed"
    ]/** whatever you're serializing **/;
    header('Content-Type: application/json');
    echo json_encode($message);
}

$data = [ 'name' => 'God', 'age' => -1 ]

?>

