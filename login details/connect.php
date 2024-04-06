<?
$surname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


//Database connection

$conn = new mysqli('localhost', 'root', '', 'first form');    
if($conn->connect_error){
    die('Connection Failed  : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare(
    "insert into login (username, email, password, password2) values(?,?,?,?)"
    );
    $stmt->bind_param("ssss", $surname, $email, $password, $password2);
    $stmt->execute();
    echo "login Successful...";
    $stmt->close();
    $conn->close();
}
?>