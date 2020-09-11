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
        
        $where = "";
        $logicalOperator = 'OR';        
        $parameters = array();
        //2. Get REQUEST data
        if(isset($_POST["search"]) && ($_POST["search"] == "Search products (OR)" || $_POST["search"] == "Search products (AND)") ){            
            if($_POST["search"] == "Search products (AND)"){
                $logicalOperator = "AND";
            }
            $where = " WHERE ";

            foreach ($_POST as $key => $value) {            
                if($_POST[$key] && $key !== "search"){
                    $parameters[":$key"] = "%$value%";
                    $where = $where . "$key LIKE :$key $logicalOperator ";
                }
            }            

            if(!count($parameters)) {
                ?>
                    <span style="color:red;">ERROR: Especifique al menos un criterio de búsqueda</span>
                <?php
            }
        }


        $where = substr($where, 0, strlen($where) - (strlen($logicalOperator) + 1));

        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement
        $sql = "SELECT cod_mun, nombre_municipio, fk_dep FROM municipio, departamento " ;
        
        //5. Execute SQL statement
        $q = $conn->prepare($sql);
        $result = $q->execute();

        //6. Load database results in memory
        $categories = $q->fetchAll();
        
        //Retrieve products data
        $sqlProducts = "SELECT cod_mun, nombre_municipio FROM municipio, departamento  WHERE municipio.fk_dep=departamento.cod_dep AND departamento.nombre_dep='17'"; 
        $qProducts = $conn->prepare($sqlProducts);
        $resultProducts = $qProducts->execute($parameters);        
        $products = $qProducts->fetchAll();        
    ?>

    <form method="POST">
        

        nombre_dep <input type="text" name="fk_dep" value="<?= (isset($_POST["nombre_dep"])) ? $_POST["nombre_dep"] : "" ?>" />
        <br/><br/>
        <input type="submit" name="search" value="Search municipios" />
        
    </form>

    <div>
        <?php
            for($i=0; $i < count($products); $i++){
        ?>
            <div>
                <span><?php echo $products[$i]["nombre_municipio"];  ?></span>
                <span><?php echo $products[$i]["fk_dep"];  ?></span>
            </div>
        <?php
            }
        ?>      
    </div>
</body>
</html>