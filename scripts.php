<?php
    function connect_to_db($username = "strona_internetowa", $password = "1234"){
        $conn = new mysqli("localhost", $username, $password, "tomasz_dubiel_website");
        
        return $conn;
    }

    function nav_bar_script($name){
        $sql = "SELECT `name`, `file` FROM `menu` WHERE name='".$name."';";
        $result = mysqli_query(connect_to_db(), $sql);

        foreach($result as $value){
            echo("<a class='nav_elem' ondblclick='hello' title='go to the other page' href='?id=".$value['file']."'>".$value['name']."</a>");
        }
    }

    function contact_show($name){
        $sql = "SELECT `link` FROM `contact` WHERE `name` = '".$name."';";
        $result = mysqli_query(connect_to_db(), $sql);

        foreach($result as $value)
            return $value['link'];
    }

    function experience_show(){
        $sql = "SELECT `id`, `name`, `description`, `long_description`, `date`, `link` FROM `experience`;";
        $result = mysqli_query(connect_to_db(), $sql);

        foreach($result as $value){
            echo("<article class='experience'>");
                echo("<h2>".$value['name']."</h2>");
                echo("<p>".$value['description']."</p>");
                echo("<p id='".$value['id']."' style='display:none;'>".$value['long_description']."</p>");
                echo("<p><a href='#' onclick='read(".$value['id'].")' id='show_button_".$value['id']."'>Read more</a></p>");
                echo("<p>Link: ".$value['link']."</a></p>");
                echo("<p>".$value['date']."</p>");
            echo("</article>");
        }
    }

    function main_content_get($name){
        $sql = "SELECT `con` FROM `content` WHERE `name` = '".$name."';";
        $result = mysqli_query(connect_to_db(), $sql);

        foreach($result as $value)
            echo($value['con']);
    }