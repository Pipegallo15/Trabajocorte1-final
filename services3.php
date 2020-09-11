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
       
        $codBarrio = $_REQUEST["codBarrio"];
        $nameBarrio = $_REQUEST["nameBarrio"];
        $fkCodMun = $_REQUEST["fkCodMun"];


       

        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement

        $sql3 =  "INSERT INTO barrio (cod_barrio, nombre_barrio, fk_cod_municipio) 
        VALUES (:cod_barrio, :nombre_barrio, :fk_cod_municipio)";                 

        //5. Execute SQL statement
         

         $q3 = $conn->prepare($sql3); 
        $result3 = $q3->execute(array(
            ':cod_barrio'=>$codBarrio,
            ':nombre_barrio'=>$nameBarrio,
            ':fk_cod_municipio'=>$fkCodMun
                
             ));       
            

        
         //6. Check result (success or error), regarding the result, send client response
         if($result3){
            ?>
                <div>Product <?php echo $nameBarrio; ?> has been created succesfully</div>
            <?php
        }
        else {
            ?>
                <div style="color:red">An error has ocurred creating product: <?php echo $nameBarrio; ?></div>
            <?php
        }
    ?>

    
  

</body>
<form action="create-departamento.php" method="post" >
     <input type="submit" value="Regresar principal"  /> 
    </form>
</html>