<?php

    $menu = array(
        "Inicio" => array(
            "Id"=>1,
            "Nombre"=>"Inicio",
            "Url"=>"/",
            "Icono"=>"fa-solid fa-house"
        ),

        "Formulario" => array(
            "Id"=>2,
            "Nombre"=>"Formulario",
            "Url"=>"/formulario.php",
            "Icono"=>"fa-solid fa-address-card"
        ),

        "Google" => array(
            "Id"=>3,
            "Nombre"=>"Google",
            "Url"=>"https://www.google.com/",
            "Icono"=>"fa-brands fa-google",
            "Image" => "google.png",
            "Target" => "_blank"
        ),
        
        "Yahoo!" => array(
            "Id"=>4,
            "Nombre"=>"Yahoo",
            "Url"=>"https://espanol.yahoo.com/",
            "Icono"=>"",
            "Image" => "yahoo.png",
            "Target" => "_blank"
        ),
    );

    getMenu($menu);

    function getMenu($miMenu) {
        //echo json_encode($miMenu);

        foreach ($miMenu as $key => $value) {
            echo '<li class="sidebar-nav-item">
                    <a href="'.$value["Url"].'" class="sidebar-nav-link active"
                        '.(
                            isset($value["Target"])
                            ? 'target="'.$value["Target"].'"'
                            :''
                        ).'
                    >
                    <span class="sidebar-nav-icon">
                        '.(
                            !empty($value["Icono"])
                            ? '<i class="'.$value["Icono"].'"></i>'
                            : '<img src="/content/image/'.$value["Image"].'" />'
                        ).'
                        
                    </span>
                    <span class="sidebar-nav-name">
                        '.$value["Nombre"].'
                    </span>
                    <span class="sidebar-nav-end">

                    </span>
                    </a>
                </li>';
        }
    }

?>