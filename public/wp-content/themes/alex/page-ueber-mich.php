<?php 
    get_header();

        if(have_posts()){
            while(have_posts()){
                the_post();
                the_title("<h2>", "</h2>");
                the_content();
            }
        } else{
            echo "<p>nichts da :(</p>";
        }

    wp_reset_postdata();
    get_footer();
?>