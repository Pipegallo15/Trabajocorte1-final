<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro municipios</title>
    <link rel="stylesheet" href="css/nosotros.css">
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
        $sql2 = "SELECT cod_mun, nombre_municipio, fk_dep FROM municipio";

        //5. Execute SQL statement
        $q2 = $conn->prepare($sql2);
        $result2 = $q2->execute();
        
        //6. Load database results in memory
        $categories = $q2->fetchAll();            
    ?>
<header class="main-header">
        <div class="container container--flex">
            <div class="logo--container column column--50">
                <h1 class="logo">Registro municipios</h1>
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
        <img src="imagenes/fondocolombia.jpg" alt="" class="banner__img">
        <div class="banner__content">Registro  municipio</div>
    </section>
    <main class="main">
        <section name="" id="" class="group group--color">
            <div class="container">
                <h2 class="main__title">Pag 2. Registro </h2>
                <p class="main__txt">Acá por favor digite el municipio
                </p>

                <form action="services2.php" method="POST">
        codMun <input type="number" name="codMun" /> <br/>
        nameMun <input type="text" name="nameMun" /> <br/>
        fkDep <input type="number" name="fkDep" /> <br/>
        <br/><br/>
        <input type="submit" value="Save Municipio" />

    </form>
       
     


    </form>

    
        </section>
    </main>
    
</body>
</html>