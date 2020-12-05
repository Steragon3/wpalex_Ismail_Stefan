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
        #leistungen
        $leistungen_query = new WP_Query("category_name=leistungen && posts_per_page=3");
        if($leistungen_query->have_posts()){
            echo "<section id='leistungen' class='leistungen'>";
            echo "<h2>Leistungen</h2>";
            echo "<nav><ul>";

            while($leistungen_query->have_posts()){
                $leistungen_query->the_post();
                echo "<li><a href='#'>";
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
        
        #news
        $news_query = new WP_Query("category_name=news && posts_per_page=3");
        if($news_query->have_posts()){
            echo "<section id='news' class='news'>";
            echo "<h2>News</h2>";
            echo "<ul>";

            while($news_query->have_posts()){
                echo "<li><p>";
                $news_query->the_post();

                $exc = get_the_excerpt();
                $marked = get_post_custom_values("marked");

                foreach($marked as $mark){
                    $exc = str_replace($mark, "<mark>" . $mark . "</mark>", $exc);
                }
                
                echo $exc;
                echo "<a href='". get_the_permalink() . "'>[mehr erfahren]</a>";
                echo "</p></li>";
            }

            echo "</ul></section>";
        } else{
            echo "<p>keine News</p>";
        }
    }
    
    wp_reset_postdata();
    echo"</main></div>";
    get_footer();
?>