<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "class";
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
} 

if (isset($_POST['envoyer'])) {
    $nom = $_POST['nom_complet'];
    $ide = $_POST['id'];
    $sql = "INSERT INTO gi(id_user, user_name) VALUES('$ide','$nom')";
    header("Location: pagecode.html");
    if ($conn->query($sql) === false) {
      echo "Error: ". $sql. "<br>". $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscrire.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('c.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    }
  
  
  
  .container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    border: #f2f2f2;
    max-width: 400px;
    width: 100%;
  }
  
  form { 
    color: #f2f2f2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-color: rgb(11, 129, 184);
    border-radius: 6px ;
    margin: 50px;
    padding: 0px 40px;

  }
  input[type=text] {
    width: 100%; 
    background-color:rgb(165, 213, 252); 
    color: white; 
    padding: 10px; 
    border: none; 
    border-radius: 5px; 
}
  h1 {
    text-align: center;
  }
  
  input,
  button {
    margin: 10px 0;
    padding: 10px;
    border: 1px solid rgb(24, 119, 192);
    border-radius: 3px;
  }
  
  button {
    cursor: pointer;
    background-color:white(21, 47, 194);
    color:rgb(0, 191, 255);
    border: none;
    border-radius: 3px;
  }
    </style>
</head>
<body>
    <form method="post" action="inscrire.php" name="container">
        <h1>login</h1>
        <lable>USERNAME <i class='bx bxs-user-check'></i></lable>
        <input type="text" name="nom complet" >
        <lable>USERID <i class='bx bx-user-check'></i></lable>
        <input type="text" name="id" >
        <input type="submit" value="login" name="envoyer" ></form>
</body>
</html>

