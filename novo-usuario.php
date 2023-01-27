<?php


// create a new record
if(isset($_POST['create'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $sql= "INSERT INTO novo_usuario" (email,senha) VALUES(' $email', '$senha')";
    if($conn->query($sql)== TRUE){
        echo "new record created sucessfully";
    }else{
        echo "erro:" .sql. "<br>". $conn->error;
    }
}

?>
 