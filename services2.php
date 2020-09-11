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
        
        $codMun = $_REQUEST["codMun"];
        $nameMun = $_REQUEST["nameMun"];
        $fkDep = $_REQUEST["fkDep"];
        

       

        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement
      

        $sql2 =  "INSERT INTO municipio (cod_mun, nombre_municipio, fk_dep) 
        VALUES (:cod_mun, :nombre_municipio, :fk_dep)"; 

              

        //5. Execute SQL statement
        
        $q2 = $conn->prepare($sql2); 
        $result2 = $q2->execute(array(
            ':cod_mun'=>$codMun,
            ':nombre_municipio'=>$nameMun,
            ':fk_dep'=>$fkDep
            
            ));  
       

         //6. Check result (success or error), regarding the result, send client response
         if($result2){
            ?>
                <div>Municipio <?php echo $nameMun; ?> has been created succesfully</div>
            <?php
        }
        else {
            ?>
                <div style="color:red">An error has ocurred creating Municipio: <?php echo $nameMun; ?></div>
            <?php
        }
        
    ?>
    <form action="create-barrio.php" method="post" >
     <input type="submit" value="Siguiente"  /> 
    </form>
</body>
</html>