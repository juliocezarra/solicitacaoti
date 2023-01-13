<?php

    require_once('connect.php');  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    
    $sql = "INSERT INTO `solicitacoes` (id, assunto, descricao, nome,email)
    VALUES ('', '$subject', '$description', '$name','$email')";
    
    if ($conn->query($sql) === TRUE) {
      $conn->close();
      header('Location: /request/index.php');
    } else {
      $conn->close();
      header('Location: /request/new.php');
    }
?>  