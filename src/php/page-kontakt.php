<?php 
    get_header();
   
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    } else{
        echo "<p>Ich kann nicht kontaktiert werden.</p>";
    }

    wp_reset_postdata();
    get_footer();
?>