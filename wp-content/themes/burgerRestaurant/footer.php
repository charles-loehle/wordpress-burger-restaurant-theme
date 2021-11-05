<footer class="site-footer">
  <div class="site-footer__inner container container--narrow">
    <div class="flex">
      <div class="site-footer__col-one">
        <h1 class="school-logo-text school-logo-text--alt-color">
          <a href="<?= site_url() ?>"><strong>Burger</strong> Burger</a>
        </h1>
        <p><a class="site-footer__link" href="#">555.555.5555</a></p>
      </div>

      <div class="site-footer__col-two-three-group flex">
        <div class="site-footer__col-two">
          <h3 class="headline headline--small">Site</h3>
          <nav class="nav-list">

            <ul>
              <li><a href="<?= site_url('/about-us') ?>">About Us</a></li>
              <li><a href="<?= site_url('/locations') ?>">Locations</a></li>
              <li><a href="<?= get_post_type_archive_link('event') ?>">Events</a></li>
              <li><a href="<?= site_url('/menu') ?>">Menu</a></li>
            </ul>
          </nav>
        </div>

        <div class="site-footer__col-three">
          <h3 class="headline headline--small">Legal Stuff</h3>
          <nav class="nav-list">
            <ul>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="<?= site_url('/privacy-policy') ?>">Privacy</a></li>
            </ul> 
          </nav>
        </div>
      </div>

      <div class="site-footer__col-four">
        <h3 class="headline headline--small">Connect With Us</h3>
        <nav>
          <ul class="min-list social-icons-list group">
            <li>
              <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer() ?>
</body>
</html>