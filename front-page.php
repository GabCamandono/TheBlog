<?php get_header()?>

    <!-- Banner -->
    <section class="banner bg--dark clr--light">
      <div class="container">
        <div class="banner__wrapper">
          <h1 class="banner__title">The Blog</h1>
          <div class="banner__article">
            <div class="banner__grid">
              <div class="banner__primary">

                <?php $banner_lg = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'meta_key' => "Groupings",
                    'meta_value' => "HomeBannerMain"
                ))?>

                <?php if($banner_lg->have_posts()) : while($banner_lg->have_posts()) : $banner_lg->the_post();?>

                <div class="card__banner__lg">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();   
                    }?>
                  <ul class="card__meta flex">
                    <li class="article__date"><?php echo get_the_date('M, j, Y')?></li>
                  </ul>
                  <p class="article__excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 25)?>
                  </p>
                  <a href="<?php the_permalink()?>" class="article__more">Read More</a>
                </div>


                <?php endwhile;
                    else:
                        echo "no post";
                    endif;
                    wp_reset_postdata(); 
                ?>

              </div>
              <div class="banner__secondary">
                
                <?php $banner_sm = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'meta_key' => "Groupings",
                    'meta_value' => "HomeBannerSide"
                ))?>

                <?php if($banner_sm->have_posts()) : while($banner_sm->have_posts()) : $banner_sm->the_post();?>

                <div class="card__banner__sm">
                  <div class="flex">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();   
                    }?>
                    <div class="wrapper">
                      <ul class="card__meta flex">
                        <li class="article__date"><?php echo get_the_date('M, j, Y')?></li>
                      </ul>
                      <h3>
                        <?php echo wp_trim_words(get_the_excerpt(), 8)?>
                      </h3>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>

                <?php endwhile;
                    else:
                        echo "no post";
                    endif;
                    wp_reset_postdata(); 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


        <!-- Latest -->
    <section class="latest py--10">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__grid">

        <?php $latest = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_key' => "Groupings",
            'meta_value' => "HomeLatest"
        ))?>

                <?php if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post();?>

          <div class="card__single__col">
            <figure class="img__wrapper">
              <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();   
                    }?>
            </figure>
            <ul class="card__meta flex">
              <li class="article__date"><?php echo get_the_date('M, j, Y')?></li>
              <li class="article__category"><?php echo get_the_category()[0]->name?></li>
            </ul>
            <h3><?php the_title()?></h3>
            <p>
              <?php echo wp_trim_words(get_the_excerpt(), 26)?>
            </p>
            <a href="#">Read More</a>
          </div>

        <?php endwhile;
            else:
                echo "no post";
            endif;
            wp_reset_postdata(); 
        ?>

        </div>
      </div>
    </section>

        <!-- Feature -->
    <section class="feature bg--dark clr--light py--5 text--center">
      <div class="container">
        <h2>Feature News</h2>

        <?php $feature = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_key' => "Groupings",
            'meta_value' => "HomeFeature"
        ))?>

        <?php if($feature->have_posts()) : while($feature->have_posts()) : $feature->the_post();?>

        <div class="feature__wrapper">
          <h3><?php the_title()?></h3>
          <p>
            <?php echo wp_trim_words(get_the_excerpt(), 30)?>
          </p>
          <a href="#">Read the full Story</a>
        </div>

        <div class="feature__img">
          <?php if(has_post_thumbnail()) {
            the_post_thumbnail();
          }?>
        </div>
      </div>

      <?php endwhile;
            else:
                echo "no post";
            endif;
            wp_reset_postdata(); 
        ?>

    </section>

        <!-- Other -->
    <section class="other py--10">
      <div class="container">
        <div class="other__grid">
     
          <div class="other__main">

             <?php $other_main = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_key' => "Groupings",
            'meta_value' => "HomeOtherMain"
            ))?>

            <?php if($other_main->have_posts()) : while($other_main->have_posts()) : $other_main->the_post();?>
            <div class="card__two__col">
              <figure>
                <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                }?>
              </figure>

              <div class="other__content">
                <ul class="card__meta flex">
                  <li class="article__date"><?php echo get_the_date('M, j, Y')?></li>
                </ul>
                <h3>
                  <?php the_title()?>
                </h3>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 32)?>
                </p>
                <a href="#">Read more</a>
              </div>
            </div>

            <?php endwhile;
            else:
                echo "no post";
            endif;
            wp_reset_postdata(); 
            ?>

          </div>
          
          <div class="other__side">

            <?php $other_side = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'meta_key' => "Groupings",
                'meta_value' => "HomeOtherSide"
            ))?>

            <?php if($other_side->have_posts()) : while($other_side->have_posts()) : $other_side->the_post();?>

            <div class="card__sidebar">
              <ul class="card__meta flex">
                <li class="article__date"><?php echo get_the_date('M, j, Y')?></li>
              </ul>
              <h3>
                <?php the_title()?>
              </h3>
              <a href="#">Read more</a>
            </div>

            <?php endwhile;
                else:
                    echo "no post";
                endif;
                wp_reset_postdata(); 
            ?>

          </div>
        </div>
      </div>
    </section>


<?php get_footer()?>