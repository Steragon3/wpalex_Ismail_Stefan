<?php 
    get_header();
    echo "<section class='single-post'>";
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title("<h2>", "</h2>");
            the_content();
        }
    } else{
        echo "<p>Ich kann derzeit nicht kontaktiert werden.</p>";
    }
    echo "</section>";
    wp_reset_postdata();
    get_footer();
?>