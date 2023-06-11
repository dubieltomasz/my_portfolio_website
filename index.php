<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Tomasz Dubiel"> 
        <meta name="description" content="Web page about me">
        <meta name="keywords" content="Tomasz Dubiel">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="pictures/ikona.png">
        <title>Tomasz Dubiel</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="scripts.js"></script>

        <?php   error_reporting(E_ERROR | E_PARSE);
            include "scripts.php";

            if (connect_to_db()->connect_error) {
                die("<script>console.log('DB connection: fail');</script>");
            }
            echo "<script>console.log('DB connection: success');</script>";

            if($_GET['id'] == NULL) $_GET['id'] = "main.php";
            if($_GET['admin'] == "yes") header("Location: admin_page.php");
        ?>
    </head>
    
    <body>
        <nav>
            <?php
                if($_GET['id'] == "main.php")
                    nav_bar_script("experience");
                else
                    nav_bar_script("main");
            ?>

            <a id="to_admin" href="?admin=yes">admin</a>
        </nav>

        <button onclick="go_to_top()" id="to_top_button" title="Go to top">^</button>

        
        <section id="content">
            <section id="central_section">
                <?php   include $_GET['id'];    ?>
            </section>
        
            <footer>
                Please contact me:
                <br/>

                <?php
                    echo("<p class='footer_elem'>Send me an email: <a href='mailto:".contact_show('mail')."'  target='_blank'>".contact_show('mail')."</a></p>");
                    echo("<p class='footer_elem'>See my Github profile: <a href='".contact_show('github')."' target='_blank'>".contact_show('github')."</a></p>");
                    echo("<p class='footer_elem'>Check out my Linkedin profile: <a href='".contact_show('linkedin')."' target='_blank'>".contact_show('linkedin')."</a></p>");
                ?>
            </footer>
        </section>

        <aside  class="background">
            <img class="background_element" id="rs1" src="pictures/rysunek.png"/>
            <img class="background_element" id="rs2" src="pictures/rysunek.png"/>
            <img class="background_element" id="rs3" src="pictures/rysunek.png"/>
            <img class="background_element" id="rs4" src="pictures/rysunek.png"/>
            <img class="background_element" id="rs5" src="pictures/rysunek.png"/>
            <img class="background_element" id="rs6" src="pictures/rysunek.png"/>
            <img class="background_element" id="rs7" src="pictures/rysunek.png"/>
        </aside>
    </body>
</html>