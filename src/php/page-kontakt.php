<?php 
    get_header();
    require_once("pageheader.php");

        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        } else{
            echo "<p>nichts da :(</p>";
        }

    wp_reset_postdata();
    get_footer();
?>