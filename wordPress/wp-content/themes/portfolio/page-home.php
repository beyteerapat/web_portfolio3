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

// Inerest Section
$interest_section_title     = get_field('interest_section_title');
$interest_image             = get_field('interest_image');
$interest_url               = get_field('interest_url');


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
      <div id="experience" class="experience section">
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

          <h1 class="section__title">SKILL</h1>

          <div class="skill__list">
            <div class="skill__group">
              <p class="skill__group-title">MS.OFFICE</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-1"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">AUTOCAD</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-2"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">PHOTOSHOP</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-3"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">ILLUSTRATOR</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-4"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">GIT</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-5"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">HTML</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-6"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">CSS</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-7"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">JQUERY</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-8"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">BOOTSTRAP</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-9"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">WORDPRESS</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-10"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">GULP</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-11"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->
            <div class="skill__group">
              <p class="skill__group-title">JAPANESE</p>
              <div class="skill__group-bar">
                <div class="skill__group-bar-top skill__group-bar-top-12"></div>
                <div class="skill__group-bar-bottom"></div>
              </div> <!-- bar -->
            </div> <!-- skill -->

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

        <h1 class="section__title section__title-contact">CONTACT</h1>

        <form class="contact__form">
          <div class="contact__group">
            <label class="contact__group-label" for="name">Your Name</label>
            <input class="contact__group-input" type="text" name="name" placeholder=" Your Name">
          </div>
          <div class="contact__group">
            <label class="contact__group-label" for="email">Your Email</label>
            <input class="contact__group-input" type="email" name="name" placeholder=" Your Email">
          </div>
          <div class="contact__group">
            <label class="contact__group-label" for="email">Your Email</label>
            <textarea class="contact__group-textarea" placeholder=" Message"></textarea>
          </div>

          <input class="contact__group-submit" type="submit" name="submit">
        </form>

        </div>

      </div>

<?php

get_footer();
