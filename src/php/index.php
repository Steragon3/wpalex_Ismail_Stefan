<?php 
    get_header();
    
    require_once("pageheader.php");

    echo "<div class='wrapper'><main>";

    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content("<p>", "</p>");
        }
    } else{
        echo "<p>nichts da :(</p>";
    }

    if(is_front_page()){
        $leistungen_query = new WP_Query("category_name=leistungen && posts_per_page=3");
        if($leistungen_query->have_posts()){
            echo "<section id='leistungen' class='leistungen'>";
            echo "<h2>Leistungen</h2>";
            echo "<nav><ul>";

            while($leistungen_query->have_posts()){
                echo "<li><a href='#'>";
                $leistungen_query->the_post();
                the_title("<p>", "</p>");

                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }
                echo "</a></li>";
            }

            echo "</ul></nav></section>";
        } else{
            echo "<p>keine Leistungen</p>";
        }
    }
    
    wp_reset_postdata();
    echo"</main></div>";
    get_footer();
?>