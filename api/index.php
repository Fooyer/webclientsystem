<?php


class menu {

    function __construct(){

        $sc = $this->loadPage();
        if ($sc==FALSE) {exit("<script> alert('Houve um erro ao carregar a página.') </script>");}
        
    }

    public function loadPage(){
        
        include "index.html";
        
        return TRUE;
    
    }

}

new menu();

?>