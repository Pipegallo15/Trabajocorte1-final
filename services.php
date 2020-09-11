<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //1. Data base connection data
        $dbhost 	= "localhost";
	    $dbname		= "municipioscolombia";
	    $dbuser		= "root";
	    $dbpass		= "";

        //2. Get REQUEST data
        $codDep = $_REQUEST["codDep"];
        $Name = $_REQUEST["Name"];
        

       

        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement
        $sql = "INSERT INTO departamento (cod_dep, nombre_dep) 
                    VALUES (:cod_dep, :nombre_dep)";

                      

        //5. Execute SQL statement
        $q = $conn->prepare($sql);
		$result = $q->execute(array(
            ':cod_dep'=>$codDep,
			':nombre_dep'=>$Name
            ));
       

        //6. Check result (success or error), regarding the result, send client response
        if($result){
            ?>
                <div>Departament<?php echo $Name; ?> has been created succesfully</div>
            <?php
        }
        else {
            ?>
                <div style="color:red">An error has ocurred creating Departament: <?php echo $Name; ?></div>
            <?php
        }

        
    ?>
     <form action="create-municipio.php" method="post" >
     <input type="submit" value="Siguiente"  /> 
    </form>
</body>
</html>