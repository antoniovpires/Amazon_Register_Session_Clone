<?php
require_once('config.php');
?>

<?php
   if(isset($_POST)){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "INSERT INTO users (name, email, password) VALUES(?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute
    ([$name, $email, $password]);
    if($result){
        echo 'Successfully saved.';
    } else {
        echo 'There were errors while saving the data.';
    }
} else {
    echo 'No data';
}