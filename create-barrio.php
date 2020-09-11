<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de barrios</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="fonts/styles.css">
    </lin>
</head>
<body>
    <?php 
        //1. Data base connection data
        $dbhost 	= "localhost";
	    $dbname		= "municipioscolombia";
	    $dbuser		= "root";
	    $dbpass		= "";

        //2. Get REQUEST data

        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement
        $sql3 = "SELECT cod_barrio, nombre_barrio, fk_cod_municipio FROM barrio";

        //5. Execute SQL statement
        $q3 = $conn->prepare($sql3);
        $result3 = $q3->execute();
        
        //6. Load database results in memory
        $categories = $q3->fetchAll();            
    ?>

    <header class="main-header">
        <div class="container container--flex">
            <div class="logo--container column column--50">
                <h1 class="logo">Registro barrios</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <span class="icon-phone"> 13232</span>
                </p>
                <p class="main-header__contactInfo__direccion">
                    
                </p>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container--flex">
          
           
            <div class="social-icon">
                <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
                <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>
    <section class="banner">
        <img src="imagenes/wafles.jpg" alt="" class="banner__img">
        <div class="banner__content">Registro de barrio</div>
    </section>
    <main class="main">
        <section name="" id="" class="group group--color">
            <div class="container">
                <h2 class="main__title">Pag 3.Registro </h2>
                <p class="main__txt">Acá por favor digite el barrio 
                </p>

             
    <form action="services3.php" method="POST">
        codBarrio <input type="number" name="codBarrio" /> <br/>
        nameBarrio <input type="text" name="nameBarrio" /> <br/>
        fkCodMun <input type="number" name="fkCodMun" /> <br/>
        <br/><br/>
        <input type="submit" value="Save barrio" />

    </form>

    </form>
       
     


    </form>

    
        </section>
    </main>
</body>
</html>