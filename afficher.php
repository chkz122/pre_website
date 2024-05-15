<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body  {
            color:white;
            background-color: rgb(58, 116, 203);
            height:100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            font-family: Arial,helvetica,helvetica;
        }
       .tableau-style{
        border-collapse:collapse;
       }
       th, td {
     border: 1px solid black;
        padding: 15px;
        text-align: left;}
        h1 {
           
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            width: 100%;  
        }
        h3 {
           
           display: flex;
           flex-direction: column;
           justify-content: center;
           text-align: center;
           width: 100%;  
       }
    </style>

</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $bdname="class";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
     catch(PDOException $e) {
        echo "Connection failed: ". $e->getMessage();
    }
      $requete="SELECT * FROM gi ORDER BY id_user ASC";
      $result=$conn->query($requete);
   if(!$result){
    echo"la recuperation des donnes a rencentre un probleme";}
    else{
        $nb_etu=$result->rowCount();}

       ?>
       <h1>la liste des etudient</h1>
       <h3> le nomber du des etudient =<?php echo $nb_etu ?></h3>
       <table border="1">
        <tr>
            <th>id_user</th>
            <th>etudiant</th>
        </tr>
    <?php 
     while ($ligne= $result->fetch(PDO::FETCH_NUM)){
        echo"<tr>";
        foreach($ligne as $valeur){
            echo "<td>$valeur</td>";
        }
        echo"</tr>";
     }  
 ?>
</table>
<?php 
$result->closeCursor();

?>


</body>
</html>