<?php
if( post_password_required() ) {
    return;
}

?>

<div id="comments" class="comments-area">

        <?php 
        if( have_comments() ):
            //we have cooments
            ?>
     <ol class="">

                <?php 
                $args = array(
                    'walker'            => null,
                    'max_depth'         => '',
                    'style'             => 'ul',
                    'callback'          => 'null',
                    'end-callback'      => 'null',
                    'type'              =>'all',
                    'reaply_text'       => 'Reply',
                    'page'              => '',
                    'per_page'          => '',
                    'avatar_size'       => 0,
                    'reverse_top_level' => null,
                    'revrse'            => '',
                    'format'            =>'html5',
                    'echo'              => false    

                );

                wp_list_comments( $args );

                ?>
     </ol>

<?php 
   if( !comments_open() && get_comments_number() ):
    ?>
<p class=""><?php esc_html_e('Comments are Close', 'dehlix') ?></p>
    <?php
   endif;
?>



            <?php
        endif;
        ?>


<?php comment_form(); ?>
   
</div>