<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,
    initial-scale=1, maximum-scale=1">
    <title>Biblioteca 🙌😋</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script
    src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></scrip
    t>
    <![endif]-->
</head>
<body class='container'>
    <?php
        // function __autoload_register($class_name) {
        //     include_once("class/" . $class_name . ".class.php");
        // }
        require_once('./libro.class.php');
        if(isset($_POST['enviar'])){
            if(isset($_POST['enviar'])){
                echo "<h3>Inventario de Libros 🧐🍷</h3>";
                $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
                $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : "";
                $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
                $nEdicion = (isset($_POST['nEdicion'])) ? doubleval($_POST['nEdicion']) : 0;
                $lugarPublicar = (isset($_POST['lugarPublicar'])) ? $_POST['lugarPublicar'] : "";
                $editorial = (isset($_POST['editorial'])) ? $_POST['editorial'] : "";
                $anoEdicion = (isset($_POST['anoEdicion'])) ? intval($_POST['anoEdicion']) : 0;
                $numeroPaginas = (isset($_POST['numeroPaginas'])) ? intval($_POST['numeroPaginas']) : 0;
                $notas = (isset($_POST['notas'])) ? $_POST['notas'] : "";
                $isbm = (isset($_POST['isbm'])) ? intval($_POST['isbm']) : "";

                //Creando instancias de la clase libro
                $libro1 = new libro();
                $libro1->agregarLibro($nombre,$apellido,$titulo,$nEdicion,$lugarPublicar,$editorial,$anoEdicion,$numeroPaginas,$notas,$isbm);
            }
        }
        else{
    ?>
    <section class="container">
        <nav class="navbar navbar-dark bg-primary text-white">
            <h1>Ingresa un libro 📚</h1>
        </nav>
    <article>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <fieldset>
                <div class="form-group"> 
                    <label for="nombre">Nombres:</label>
                    <input type="text" name="nombre" id="nombre" size="25" maxlength="35" class="inputField form-control" /><br />
                </div>
                <div class="form-group"> 
                    <label for="apellido">Apellidos:</label>
                    <input type="text" name="apellido" id="apellido" size="25" maxlength="35" class="inputField form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" size="25" maxlength="30" class="inputField form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="nEdicion">Número de Edición:</label>
                    <input type="text" name="nEdicion" id="nEdicion" size="8" maxlength="8" class="inputField form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="lugarPublicar">Lugar de publicación:</label>
                    <input type="text" name="lugarPublicar" id="lugarPublicar" class="inputField form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="editorial">Editorial:</label>
                    <input type="text" name="editorial" id="editorial" size="50" maxlength="50" class="inputField form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="anoEdicion">Año de edición:</label>
                    <input type="text" name="anoEdicion" id="anoEdicion" size="4" maxlength="" class="inputField form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="numeroPaginas">Número de paginas:</label>
                    <input type="text" name="numeroPaginas" id="numeroPaginas" size="4" maxlength="5" class="inputField form-control" /><br />
                </div>
                <div class="form-group"> 
                    <label for="notas">Notas:</label>
                    <input type="text" name="notas" id="notas" size="25" maxlength="35" class="inputField form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="isbm">ISBM:</label>
                    <input type="text" name="isbm" id="isbm" size="4" maxlength="13" class="inputField form-control" /><br />
                </div>

                <input type="submit" name="enviar" class="btn btn-primarymb-2" value="Enviar" class="inputButton" />&nbsp;
                <input type="reset" name="limpiar" class="btn btn-primarymb-2" value="Restablecer" class="inputButton" />
            </fieldset>
        </form>
    <?php
        }
    ?>
    </article>
    </section>
</body>
</html>