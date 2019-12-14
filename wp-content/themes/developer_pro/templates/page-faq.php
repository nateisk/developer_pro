<?php

    // Template Name: FAQ

    get_header();
?>

<?php 
  /*$faq = array( 
      'post_type'      => 'faqs',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      );
  $faqs   = new WP_Query($faq);
  if($faqs->have_posts()){
      while($faqs->have_posts()){
        $faqs->the_post();
       
        echo get_the_title().'<br/>';

        echo get_the_excerpt().'<br/>';
      }
      wp_reset_postdata();

    }*/
  
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [

            <?php 
            $faq = array( 
                'post_type'      => 'faqs',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                );
            $faqs   = new WP_Query($faq);
            $count  = $faqs->post_count;
            if($faqs->have_posts()){
            $i = 1;
                while($faqs->have_posts()){
                  $faqs->the_post();

            ?>
            {
              "@type": "Question",
              "name": "<?php echo get_the_title() ?>",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "<?php echo get_the_excerpt() ?>"
              }
            }
            <?php 
                if($i<$count){echo ','; }
                $i++;  }
                wp_reset_postdata();
              }
            ?>
   ]
  }
</script>
<?php


 get_footer(); ?>