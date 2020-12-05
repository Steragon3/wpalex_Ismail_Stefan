<?php 
    get_header();
    
    require_once("pageheader.php");

    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title("<h1>", "</h1>");
            the_content("<p>", "</p>");
        }
    } else{
        echo "nichts da :(";
    }

?>
<?php

    
    wp_reset_postdata();
    get_footer();
?>