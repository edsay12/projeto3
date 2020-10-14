<?php
// topo
include_once "Paginas/includes/header.php";


$curriculo= isset($_GET["cr"]);

if ($curriculo) {

switch ($_GET["cr"]) {
    case 'curriculo':
       include_once "paginas/curriculo.php"  ;
       include_once "paginas/includes/foot.php";
        break;

        case 'rule':
            include_once "paginas/qualificacoes.php";
            include_once "paginas/includes/foot.php";
             break;
        

             case 'portifolio':
                include_once "paginas/portifolio.php";
               
                 break;
            

        
}

}


else {
 
 
    include_once "paginas/none.php";
}


