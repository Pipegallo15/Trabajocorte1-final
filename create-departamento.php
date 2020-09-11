<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de departamento</title>
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
        $sql = "SELECT cod_dep, nombre_dep FROM departamento";

        //5. Execute SQL statement
        $q = $conn->prepare($sql);
        $result = $q->execute();
        
        //6. Load database results in memory
        $categories = $q->fetchAll();            
    ?>

   
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo--container column column--50">
                <h1 class="logo">Registro departamentos</h1>
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
           
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="/" class="menu__link menu__link--select">Inicio</a></li>
                <li class="menu__item"><a href="nosotros.html" class="menu__link">Nosotros</a></li>
                <li class="menu__item"><a href="galeria.html" class="menu__link">Galeria</a></li>
                <li class="menu__item"><a href="contacto.html" class="menu__link">Contacto</a></li>
            </ul>
            <div class="social-icon">
                <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
                <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>
    <section class="banner">
        <img src="imagenes/fondocolombia.jpg" alt="" class="banner__img">
        
    </section>
    <main class="main">
        <section name="" id="" class="group group--color">
            <div class="container">
                <h2 class="main__title">Bienvenidos </h2>
                <p class="main__txt">Acá por favor digite el departamento 
                </p>

                <form action="services.php" method="POST">
        codDep <input type="number" name="codDep" /> <br/>
        Name <input type="text" name="Name" /> <br/>
        <br/><br/>
        <input type="submit" value="Save departamento" />
       
     


    </form>

    
        </section>
    </main>
    
    


    <section class="group main__about_description">
        <div class="container container--flex">
            <div class="column column--50">
                <img src="imagenes/departamento.jpg" alt="">

            </div>

            <div class="column column--50">
                <h3 class="column__title">Colombia</h3>
                <p class="column__txt">Mapa Departamentos colombia</p>
                
            </div>
        </div>
    </section>


 

    </main>
    <footer class="main--footer">
        <div class="container container--flex">
            <div class="column column--33">
                <h2 class="column__title">Colombia</h2>
                <p class="column__txt">somos Colombia.</p>

            </div>
            <div class="column column--33">
                <h2 class="column__title">contacto</h2>
                <p class="column__txt">tel 324234</p>
                <p class="column__txt">urb santa teresita</p>
                <p class="column__txt">pipegallo.15@gmail.com</p>

            </div>
            <div class="column column--33">
                <h2 class="column__title">Siguenos en nuetras redes sociales</h2>
                <p class="column__txt">
                    <a href="" class="icon-facebook"></a>facebook</p>
                <p class="column__txt">
                    <a href="" class="icon-youtube"></a>visitanos en nuestro canal</p>
                <p class="column__txt">
                    <a href="" class="icon-twitter"></a>Siguenos en twitter</p>

            </div>
            <p class="copy">2020|Registro mapas colombia|todos los derechos</p>
        </div>
    </footer>

</body>
</html>