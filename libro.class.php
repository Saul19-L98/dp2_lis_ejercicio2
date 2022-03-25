<?php

    class libro {

        private static $idLibro = 0;
        private $nombre;
        private $apellido;
        private $titulo;
        private $nEdicion;
        private $lugarPublicar;
        private $editorial;
        private $anoEdicion;
        private $numeroPaginas;
        private $notas;
        private $isbm;

        //Constructor de la clase
        function __construct(){
            self::$idLibro++;
            $this->nombre = "";
            $this->apellido = "";
            $this->notas = "";
            $this->lugarPublicar = "";
            $this->numeroPaginas = 0;
        }
        //Destructor de la clase
        function __destruct(){
            echo "<p class=\"msg\">El libro a sido agregado 🙌.</p>";
            $backlink = "<a class=\"a-btn\"
            href=\"biblioteca.php\">";
            $backlink .= "<span class=\"a-btn-text\">Agregar al inventario </span>";
            $backlink .= "<span class=\"a-btn-slide-text\">a otro libro</span>";
            $backlink .= "<span class=\"a-btn-slide-icon\"></span>";
            $backlink .= "</a>";
            echo $backlink;
        }

        function agregarLibro($nombre,$apellido,$titulo,$nEdicion,$lugarPublicar,$editorial,$anoEdicion,$numeroPaginas,$notas,$isbm){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->titulo = $titulo;
            $this->nEdicion = $nEdicion;
            $this->lugarPublicar = $lugarPublicar;
            $this->editorial = $editorial;
            $this->anoEdicion = $anoEdicion;
            $this->numeroPaginas = $numeroPaginas;
            $this->notas = $notas;
            $this->isbm = $isbm;

            $this->imprimir();
        }
        function imprimir(){
            $tabla = "<table class='table '><tr>";
            $tabla .= "<td>Id empleado: </td>";
            $tabla .= "<td> " . self::$idLibro . "</td></tr>";
            $tabla .= "<tr><td>Nombre del Autor: </td>\n";
            $tabla .= "<td> " . $this->apellido . " " . $this->nombre . "</td></tr>";
            $tabla .= "<tr><td>Título: </td>";
            $tabla .= "<td> " . $this->titulo . "</td></tr>";
            $tabla .= "<tr><td>Número de edición: </td>";
            $tabla .= "<td> " . $this->nEdicion . "</td></tr>";
            $tabla .= "<tr class='success'><td colspan=\"2\"><h4>Datos importantes sobre el libro. 📚</h4></td></tr>";
            $tabla .= "<tr ><td >Lugar de publicación: </td>";
            $tabla .= "<td> " . $this->lugarPublicar . "</td></tr>";
            $tabla .= "<tr><td>Editorial: </td>";
            $tabla .= "<td> " . $this->editorial . "</td></tr>";
            $tabla .= "<tr><td>Año de Edición: </td>";
            $tabla .= "<td> " . $this->anoEdicion . "</td></tr>";
            $tabla .= "<tr><td>Número de paginas: </td>";
            $tabla .= "<td> " . $this->numeroPaginas . "</td></tr>";
            $tabla .= "<tr><td>Notas: </td>";
            $tabla .= "<td> " . $this->notas . "</td></tr>";
            $tabla .= "<tr><td>ISBM: </td>";
            $tabla .= "<td>" . $this->isbm . "</td></tr>";
            $tabla .= "</table>";
            echo $tabla;
        }
    }
?>