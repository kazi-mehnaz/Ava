<?php
/**
 * Main Template File
 * 
 * @package Ava
*/

get_header();
?>

<article>
    <div class="ava-blog-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-title"><?php the_title( '' ); ?></h1>
                </div>
            </div>
        </div>
    </div>
</article>

<?php
get_footer();