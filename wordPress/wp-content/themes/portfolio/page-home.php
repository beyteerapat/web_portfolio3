<?php
/*
Template Name : Home Page
*/

// Advanced Custom Field
// Hero Section
$hero_image         = get_field('hero_image');
$hero_title         = get_field('hero_title');
$hero_subtitle      = get_field('hero_subtitle');

//Education Section
$education_section_title = get_field('education_section_title');
$education_year          = get_field('education_year');
$education_subtitle      = get_field('education_subtitle');
$education_location      = get_field('education_location');
$education_background    = get_field('education_background');

// Experience Section
$experience_section_title   = get_field('experience_section_title');
$experience_subtitle        = get_field('experience_subtitle');
$experience_year            = get_field('experience_year');
$experience_background      = get_field('experience_background');

// Skill Section
$skill_section_title        = get_field('skill_section_title');
$skill_bar                  = get_field('skill_bar');

// Inerest Section
$interest_section_title     = get_field('interest_section_title');
$interest_image             = get_field('interest_image');
$interest_url               = get_field('interest_url');

// Contact Section
$contact_section_title      = get_field('contact_section_title');


get_header(); ?>

      <!-- svg Bubble -->
      <div class="svgBubble">

        <svg id="b1" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b2" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b3" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b4" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b5" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b6" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b7" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b8" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>
        <svg id="b9" width="10" height="10"><circle cx="5" cy="5" r="2.5" fill="#c1c1c1" /></svg>

      </div>

      <!-- SECTION HERO -->
      <div id="hero" class="hero">
        <div class="wrapper">
          <div class="hero__group">
            <img class="hero__profile" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt'] ?>">
            <h1 class="hero__title"><?php echo $hero_title; ?></h1>
            <h3 class="hero__subtitle"><?php echo $hero_subtitle; ?></h3>
          </div> <!-- hero group -->
        </div> <!-- wrapper -->
      </div> <!-- HERO -->
      <!-- SECTION EDUCATION -->
      <div id="education" class="education section">
        <div class="wrapper">

          <h1 class="section__title"><?php echo $education_section_title; ?></h1>

          <?php $loop = new WP_Query( array(
            'post_type' => 'education',
            'orderby'   => 'post_id',
            'order'     => 'ASC'
          )); ?>

          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="education__row">
            <div class="education__group">
              <div class="education__img-cover">
                <a href=""><img class="education__img" src="<?php the_field('education_background'); ?>"></a>
              </div>
              <div class="education__text">
                <p class="education__text-year"><?php the_field('education_year'); ?></p>
                <p class="education__text-title"><?php the_title(); ?></p>
                <p class="education__text-subtitle"><?php the_field('education_subtitle'); ?></p>
                <p class="education__text-location"><?php the_field('education_location'); ?></p>
              </div>
            </div>
          </div>

            <?php endwhile; ?>

        </div> <!-- wrapper -->
      </div> <!-- education -->
      <!-- SECTION EXPERIENCE -->
      <div id="experience" class="experience section" style="background:#333 url('<?php echo $experience_background; ?>') center center no-repeat fixed; background-size: cover; position: relative;">
        <div class="wrapper">

          <h1 class="section__title experience__headline"><?php echo $experience_section_title; ?></h1>

            <?php $loop = new WP_Query(array(
                'post_type' => 'experience',
                'orderby'   => 'post_id',
                'order'     => 'ASC'
              )) ?>

              <?php while($loop->have_posts()) : $loop->the_post(); ?>

              <div class="experience__group">
                <p class="experience__title"><?php the_title(); ?></p>
                <p class="experience__subtitle"><?php the_field('experience_subtitle'); ?></p>
                <p class="experience__subtitle"><?php the_field('experience_year'); ?></p>
              </div>

            <?php endwhile; ?>
<!--           <div class="experience__group">
            <p class="experience__title">ACRO THAILAND</p>
            <p class="experience__subtitle">- ENGINEER -</p>
            <p class="experience__subtitle">[2013-2014]</p>
          </div>

          <div class="experience__group">
            <p class="experience__title">THAI YAMAHA MOTOR CO.,LTD</p>
            <p class="experience__subtitle">- INTERN ENGINEER -</p>
            <p class="experience__subtitle">[2012]</p>
          </div> -->

        </div>
      </div>

      <!-- SECTION SKILL -->
      <div id="skill" class="skill section">
        <div class="wrapper">

          <h1 class="section__title"><?php echo $skill_section_title; ?></h1>

            <div class="skill__list">

              <?php $loop = new WP_Query(array(
                'post_type'     => 'skill',
                'posts_per_page'=> -1,
                'orderby'       => 'post_id',
                'order'         => 'ASC'
              )); ?>

              <?php while($loop->have_posts()) : $loop->the_post(); ?>

                <div class="skill__group">
                  <p class="skill__group-title"><?php the_title(); ?></p>
                  <div class="skill__group-bar">
                    <div class="skill__group-bar-top" style="width:<?php the_field('skill_bar'); ?>px"></div>
                    <div class="skill__group-bar-bottom"></div>
                  </div> <!-- bar -->
                </div> <!-- skill -->

              <?php endwhile; ?>

          </div>  <!-- list -->

        </div>
      </div>
      <!-- SECTION INTEREST -->
      <div id="interest" class="interest section">

        <div class="wrapper">

          <p class="section__title"><?php echo $interest_section_title; ?></p>

          <div class="card__group">

          <?php $loop = new WP_Query(array(
            'post_type' => 'interest',
            'orderby'   => 'post_id',
            'order'     => 'ASC'
          )); ?>

          <?php while($loop->have_posts()) : $loop->the_post(); ?>

            <div class="card">
              <a href="<?php the_field('interest_url'); ?>"><img src="<?php the_field('interest_image'); ?>" style="width:100%"></a>
              <div class="container">
                <h4 class="card-title"><?php the_title(); ?></h4>
              </div>
            </div> <!-- card -->

           <?php endwhile; ?>

          </div> <!-- card group -->

        </div> <!-- wrapper -->

      </div> <!-- INTEREST -->

      <!-- SECTION CONTACT -->
      <div id="contact" class="contact section">

        <h1 class="section__title section__title-contact"><?php echo $contact_section_title; ?></h1>

        <!-- STATIC FORM -->
        <!-- <form>
            <div class="contact__form">
              <div class="contact__group">
                <label class="contact__group-label" for="name">Your Name</label>
                <input class="contact__group-input" type="text" name="name" placeholder=" Your Name">
              </div>
              <div class="contact__group">
                <label class="contact__group-label" for="email">Your Email</label>
                <input class="contact__group-input" type="email" name="email" placeholder=" Your Email">
              </div>
              <div class="contact__group">
                <label class="contact__group-label" for="email">Your Email</label>
                <textarea class="contact__group-textarea" name="mesage"  placeholder=" Message"></textarea>
              </div>

              <input class="contact__group-submit" type="submit" value="submit">
            </div>
        </form> -->

        <!-- DYNAMIC FORM use in contact form 7 -->
        <!-- <form class="contact__form">
          <div class="contact__group">
            <label class="contact__group-label" for="name">Your Name</label>
            [text* name class:contact__group-input placeholder "Your Name"]
          </div>
          <div class="contact__group">
            <label class="contact__group-label" for="email">Your Email</label>
            [email* email class:contact__group-input placeholder "Your Email"]
          </div>
          <div class="contact__group">
            <label class="contact__group-label" for="email">Your Email</label>
            [textarea message class:contact__group-textarea x3 placeholder " Message"]
          </div>
          [submit class:contact__group-submit "Send Message"]
          </div>
        </form> -->


        <?php echo do_shortcode('[contact-form-7 id="65" title="Primary Contact"]'); ?>

        </div>

      </div>

<?php

get_footer();
