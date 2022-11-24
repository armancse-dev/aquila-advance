<?php
/**
 * Template for post entry content
 * To be used inside wordpress the loop
 * 
 * @package aquila
 */

?>

<div class="entry-content">
   <?php
      if ( is_single() ){
         the_content(
            sprintf(
               wp_kses(
                  __( 'Continue reading %s <span class="meta-nav">&rarrr;</span>', 'aquila' ),
                  [
                     'span' => [
                        'class' => []
                     ]
                  ]

               ),
               the_title( '<span class=" >"', '</span>', false )
            )
         );
      }else{
         aquila_the_excerpt( 200 );
      }
   ?>
</div>

