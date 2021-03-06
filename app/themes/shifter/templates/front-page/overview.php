<?php
/**
 * Front Page: Overview
 */
?>

<section class="_white section-padding">
  <div class="container">
    <article class="overview">
      <div class="overview__lead">
        <h1 class="lg-sans purple">Shifter brings the best of both worlds together—<br />so you can build the best website.</h1>
      </div>
      <div class="overview__item row">
        <div class="overview__icon">
          <img class="img-r" width="280" height="auto" src="<?= get_template_directory_uri();?>/dist/images/serverless-icon.svg" alt="">
        </div>
        <div class="overview__content">
          <h2 class="md-sans overview__title">Serverless Architecture</h2>
          <p>
            Static web pages are nearly maintenance-free and load at lightning speed. But they require outside development resources and don’t offer the functionality of a dynamic web page.
          </p>
          <div class="overview__highlights">
            <h3 class="xs-sans sm-caps purple">Highlights</h3>
            <ul class="item list-unstyled--seperators">
              <li>Speed</li>
              <li>Security</li>
              <li>Scalability</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="overview__item row">
        <div class="overview__icon">
          <img class="img-r" width="280" height="auto" src="<?= get_template_directory_uri();?>/dist/images/dashboard-icon.svg" alt="">
        </div>
        <div class="overview__content">
          <h2 class="md-sans overview__title">Built for WordPress</h2>
          <p>
            WordPress makes building a website easy and cost effective for almost any user. But it needs regular updates and security can be a concern.
          </p>
          <div class="overview__highlights">
            <h3 class="xs-sans sm-caps purple">Highlights</h3>
            <ul class="item list-unstyled--seperators">
              <li>Ease of use</li>
              <li>Functionality</li>
              <li>Design</li>
            </ul>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
