@extends('layouts.frontend')

@section('page-content')

<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="index.html">
              <img class="logo-dark" src="assets/img/logo-purple.png" srcset="./assets/img/logo-purple@2x.png 2x" alt="" />
              <img class="logo-light" src="assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="index.html"><img src="assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#!">Demos</a>
                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                  <li class="mega-menu-content">
                    <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                      <li class="col"><a class="dropdown-item" href="demo1.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi1.jpg" srcset="./assets/img/demos/mi1@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo I</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo2.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi2.jpg" srcset="./assets/img/demos/mi2@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo II</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo3.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi3.jpg" srcset="./assets/img/demos/mi3@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo III</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo4.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi4.jpg" srcset="./assets/img/demos/mi4@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo IV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo5.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi5.jpg" srcset="./assets/img/demos/mi5@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo V</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo6.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi6.jpg" srcset="./assets/img/demos/mi6@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo7.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi7.jpg" srcset="./assets/img/demos/mi7@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo8.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi8.jpg" srcset="./assets/img/demos/mi8@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VIII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo9.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi9.jpg" srcset="./assets/img/demos/mi9@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo IX</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo10.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi10.jpg" srcset="./assets/img/demos/mi10@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo X</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo11.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi11.jpg" srcset="./assets/img/demos/mi11@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo12.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi12.jpg" srcset="./assets/img/demos/mi12@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo13.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi13.jpg" srcset="./assets/img/demos/mi13@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XIII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo14.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi14.jpg" srcset="./assets/img/demos/mi14@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XIV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo15.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi15.jpg" srcset="./assets/img/demos/mi15@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo16.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi16.jpg" srcset="./assets/img/demos/mi16@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo17.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi17.jpg" srcset="./assets/img/demos/mi17@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="demo18.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="assets/img/demos/mi18.jpg" srcset="./assets/img/demos/mi18@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVIII</span>
                        </a></li>
                    </ul>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="services.html">Services I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="services2.html">Services II</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="about.html">About I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="about2.html">About II</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Contact</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="contact.html">Contact I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="contact2.html">Contact II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="contact3.html">Contact III</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="onepage.html">One Page</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Projects</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="projects.html">Projects I</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="projects2.html">Projects II</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="projects3.html">Projects III</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="projects4.html">Projects IV</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Single Projects</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="single-project.html">Single Project I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="single-project2.html">Single Project II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="single-project3.html">Single Project III</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="blog.html">Blog without Sidebar</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blog2.html">Blog with Sidebar</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blog3.html">Blog with Left Sidebar</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog Posts</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="blog-post.html">Post without Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="blog-post2.html">Post with Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="blog-post3.html">Post with Left Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#!">Blocks</a>
                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                  <li class="mega-menu-content">
                    <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                      <li class="col"><a class="dropdown-item" href="docs/blocks/about.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block1.svg" alt=""></div>
                          <span>About</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/blog.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block2.svg" alt=""></div>
                          <span>Blog</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/call-to-action.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block3.svg" alt=""></div>
                          <span>Call to Action</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/clients.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block4.svg" alt=""></div>
                          <span>Clients</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/contact.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block5.svg" alt=""></div>
                          <span>Contact</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/facts.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block6.svg" alt=""></div>
                          <span>Facts</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/faq.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block7.svg" alt=""></div>
                          <span>FAQ</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/features.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block8.svg" alt=""></div>
                          <span>Features</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/footer.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block9.svg" alt=""></div>
                          <span>Footer</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/hero.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block10.svg" alt=""></div>
                          <span>Hero</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/navbar.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block11.svg" alt=""></div>
                          <span>Navbar</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/portfolio.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block12.svg" alt=""></div>
                          <span>Portfolio</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/pricing.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block13.svg" alt=""></div>
                          <span>Pricing</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/process.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block14.svg" alt=""></div>
                          <span>Process</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/team.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block15.svg" alt=""></div>
                          <span>Team</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="docs/blocks/testimonials.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="assets/img/demos/block16.svg" alt=""></div>
                          <span>Testimonials</span>
                        </a>
                      </li>
                    </ul>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item"><a class="nav-link" href="docs/index.html">Documentation</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="mega-menu-content">
                    <div class="row gx-0 gx-lg-3">
                      <div class="col-lg-4">
                        <h6 class="dropdown-header">Usage</h6>
                        <ul class="list-unstyled cc-2 pb-lg-1">
                          <li><a class="dropdown-item" href="docs/index.html">Get Started</a></li>
                          <li><a class="dropdown-item" href="docs/forms.html">Forms</a></li>
                          <li><a class="dropdown-item" href="docs/faq.html">FAQ</a></li>
                          <li><a class="dropdown-item" href="docs/changelog.html">Changelog</a></li>
                          <li><a class="dropdown-item" href="docs/credits.html">Credits</a></li>
                        </ul>
                        <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                        <ul class="list-unstyled cc-2">
                          <li><a class="dropdown-item" href="docs/styleguide/colors.html">Colors</a></li>
                          <li><a class="dropdown-item" href="docs/styleguide/fonts.html">Fonts</a></li>
                          <li><a class="dropdown-item" href="docs/styleguide/duotone-icons.html">Duotone Icons</a></li>
                          <li><a class="dropdown-item" href="docs/styleguide/unicons.html">Unicons</a></li>
                          <li><a class="dropdown-item" href="docs/styleguide/illustrations.html">Illustrations</a></li>
                          <li><a class="dropdown-item" href="docs/styleguide/media.html">Media</a></li>
                          <li><a class="dropdown-item" href="docs/styleguide/abstract.html">Abstract Images</a></li>
                          <li><a class="dropdown-item" href="docs/styleguide/misc.html">Misc</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                      <div class="col-lg-8">
                        <h6 class="dropdown-header">Elements</h6>
                        <ul class="list-unstyled cc-3">
                          <li><a class="dropdown-item" href="docs/elements/accordion.html">Accordion</a></li>
                          <li><a class="dropdown-item" href="docs/elements/alerts.html">Alerts</a></li>
                          <li><a class="dropdown-item" href="docs/elements/animations.html">Animations</a></li>
                          <li><a class="dropdown-item" href="docs/elements/avatars.html">Avatars</a></li>
                          <li><a class="dropdown-item" href="docs/elements/background.html">Background</a></li>
                          <li><a class="dropdown-item" href="docs/elements/badges.html">Badges</a></li>
                          <li><a class="dropdown-item" href="docs/elements/breadcrumb.html">Breadcrumb</a></li>
                          <li><a class="dropdown-item" href="docs/elements/buttons.html">Buttons</a></li>
                          <li><a class="dropdown-item" href="docs/elements/carousel.html">Carousel</a></li>
                          <li><a class="dropdown-item" href="docs/elements/dividers.html">Dividers</a></li>
                          <li><a class="dropdown-item" href="docs/elements/form-elements.html">Form Elements</a></li>
                          <li><a class="dropdown-item" href="docs/elements/hover.html">Hover</a></li>
                          <li><a class="dropdown-item" href="docs/elements/image-mask.html">Image Mask</a></li>
                          <li><a class="dropdown-item" href="docs/elements/lightbox.html">Lightbox</a></li>
                          <li><a class="dropdown-item" href="docs/elements/lists.html">Lists</a></li>
                          <li><a class="dropdown-item" href="docs/elements/player.html">Media Player</a></li>
                          <li><a class="dropdown-item" href="docs/elements/modal.html">Modal</a></li>
                          <li><a class="dropdown-item" href="docs/elements/progressbar.html">Progressbar</a></li>
                          <li><a class="dropdown-item" href="docs/elements/shadows.html">Shadows</a></li>
                          <li><a class="dropdown-item" href="docs/elements/shapes.html">Shapes</a></li>
                          <li><a class="dropdown-item" href="docs/elements/tables.html">Tables</a></li>
                          <li><a class="dropdown-item" href="docs/elements/tabs.html">Tabs</a></li>
                          <li><a class="dropdown-item" href="docs/elements/text-highlight.html">Text Highlight</a></li>
                          <li><a class="dropdown-item" href="docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li>
                          <li><a class="dropdown-item" href="docs/elements/typed-text.html">Typed Text</a></li>
                          <li><a class="dropdown-item" href="docs/elements/typography.html">Typography</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-white rounded-pill">Free Trial</a>
              </li>
              <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white" data-image-src="assets/img/photos/bg4.jpg">
      <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
        <div class="row gx-0 gy-12 align-items-center">
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-5 text-white">Crafting project specific solutions with expertise.</h1>
            <p class="lead fs-lg lh-sm mb-7 pe-xl-10">We’re a creative company that focuses on establishing long-term relationships with customers.</p>
            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Explore Now</a></span>
              <span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-5 offset-lg-1">
            <div class="basic-slider owl-carousel dots-over shadow-lg" data-nav="true" data-margin="5">
              <div class="item"><img src="assets/img/photos/about21.jpg" srcset="./assets/img/photos/about21@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="item light-gallery-wrapper"><a href="https://vimeo.com/374265101" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a><img src="assets/img/photos/about22.jpg" srcset="./assets/img/photos/about22@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="item"><img src="assets/img/photos/about23.jpg" srcset="./assets/img/photos/about23@2x.jpg 2x" class="rounded" alt="" /></div>
            </div>
            <!-- /.basic-slider -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-primary mb-3">What We Do?</h2>
            <h3 class="display-4 mb-10 px-xl-10">The service we offer is specifically designed to meet your needs.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative mb-14 mb-md-17">
          <div class="shape rounded-circle bg-soft-primary rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.5rem; z-index: 0;"></div>
          <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5 text-center">
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-phone-volume"></i> </div>
                  <h4>24/7 Support</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-primary">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-shield-exclamation"></i> </div>
                  <h4>Secure Payments</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-primary">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-laptop-cloud"></i> </div>
                  <h4>Daily Updates</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-primary">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-chart-line"></i> </div>
                  <h4>Market Research</h4>
                  <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                  <a href="#" class="more hover link-primary">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.position-relative -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-17">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="assets/img/concept/concept11.png" srcset="./assets/img/concept/concept11@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Why Choose Us?</h2>
            <h3 class="display-4 mb-7">We bring solutions to make life easier for our clients.</h3>
            <div class="accordion accordion-wrapper" id="accordionExample">
              <div class="card plain accordion-item">
                <div class="card-header" id="headingOne">
                  <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
                </div>
                <!--/.card-header -->
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingTwo">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
                </div>
                <!--/.card-header -->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingThree">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
                </div>
                <!--/.card-header -->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
            </div>
            <!--/.accordion -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-md-15">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="w-auto" src="assets/img/concept/concept17.png" srcset="./assets/img/concept/concept17@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Our Solutions</h2>
            <h3 class="display-4 mb-5">We make your spending stress-free for you to have the perfect control.</h3>
            <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus.</p>
            <div class="row gy-3">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare. Curabitur blandit.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus vel augue rutrum.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
      <div class="container py-14 pt-md-0 pb-md-16">
        <div class="row mt-md-n50p mb-14 mb-md-7">
          <div class="col-xl-10 mx-auto">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="assets/img/photos/bg2.jpg">
              <div class="card-body p-9 p-xl-11">
                <div class="row align-items-center counter-wrapper gy-8 text-center text-white">
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white">7518</h3>
                    <p>Completed Projects</p>
                  </div>
                  <!--/column -->
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white">3472</h3>
                    <p>Happy Customers</p>
                  </div>
                  <!--/column -->
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white">2184</h3>
                    <p>Expert Employees</p>
                  </div>
                  <!--/column -->
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white">4523</h3>
                    <p>Awards Won</p>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row text-center">
          <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Case Studies</h2>
            <h3 class="display-4 mb-6">Check out some of our awesome projects with creative ideas and great design.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
          <div class="carousel owl-carousel gap-small blog grid-view" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
            <div class="item">
              <div class="item-inner">
                <article>
                  <div class="card">
                    <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="assets/img/photos/b4.jpg" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Ligula tristique quis risus</a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <!-- /article -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="item-inner">
                <article>
                  <div class="card">
                    <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="assets/img/photos/b5.jpg" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Nullam id dolor elit id nibh</a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <!-- /article -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="item-inner">
                <article>
                  <div class="card">
                    <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="assets/img/photos/b6.jpg" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Ultricies fusce porta elit</a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <!-- /article -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="item-inner">
                <article>
                  <div class="card">
                    <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="assets/img/photos/b7.jpg" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Morbi leo risus porta eget</a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <!-- /article -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!-- /.item -->
          </div>
          <!-- /.owl-carousel -->
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-18">
          <div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
            <a href="https://vimeo.com/374265101" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
            <figure class="rounded"><img src="assets/img/photos/about12.jpg" srcset="./assets/img/photos/about12@2x.jpg 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5 offset-lg-1">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Who Are We?</h2>
            <h3 class="display-4 mb-6">Company that believes in the power of creative strategy.</h3>
            <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row mb-3">
          <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Our Team</h2>
            <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Think unique and be innovative. Make a difference with Sandbox.</h3>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 mb-md-20">
          <div class="col-md-6 col-lg-3">
            <div class="position-relative">
              <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Coriss Ambady</h4>
                  <p class="mb-0">Financial Analyst</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="position-relative">
              <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="assets/img/avatars/t2.jpg" srcset="./assets/img/avatars/t2@2x.jpg 2x" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Cory Zamora</h4>
                  <p class="mb-0">Marketing Specialist</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="position-relative">
              <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="assets/img/avatars/t3.jpg" srcset="./assets/img/avatars/t3@2x.jpg 2x" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Nikolas Brooten</h4>
                  <p class="mb-0">Sales Manager</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="position-relative">
              <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="assets/img/avatars/t4.jpg" srcset="./assets/img/avatars/t4@2x.jpg 2x" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">Jackie Sanders</h4>
                  <p class="mb-0">Investment Planner</p>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
      <div class="container py-14 pt-md-0 pb-md-17">
        <div class="row mt-md-n50p text-white text-center">
          <div class="col-xl-10 mx-auto mb-14 mb-lg-n6">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="assets/img/photos/bg2.jpg">
              <div class="card-body p-9 p-xl-12">
                <div class="row gx-0">
                  <div class="col-xxl-9 mx-auto">
                    <div class="basic-slider owl-carousel dots-dark gap-small mb-0" data-margin="30">
                      <div class="item">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="border-0 fs-lg mb-2">
                          <p>“Vivamus sagittis lacus augue laoreet rutrum faucibus auctor vestibulum ligula porta felis, euismod semper cras justo odio consectetur.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1 text-white">Coriss Ambady</h5>
                              <p class="mb-0">Financial Analyst</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- /.item -->
                      <div class="item">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="border-0 fs-lg mb-2">
                          <p>“Vivamus sagittis lacus augue laoreet rutrum faucibus auctor vestibulum ligula porta felis, euismod semper cras justo odio consectetur.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1 text-white">Cory Zamora</h5>
                              <p class="mb-0">Marketing Specialist</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- /.item -->
                      <div class="item">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="border-0 fs-lg mb-2">
                          <p>“Vivamus sagittis lacus augue laoreet rutrum faucibus auctor vestibulum ligula porta felis, euismod semper cras justo odio consectetur.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1 text-white">Nikolas Brooten</h5>
                              <p class="mb-0">Sales Manager</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Our Pricing</h2>
            <h3 class="display-4 mb-10 px-xl-10">We offer great prices, premium products and quality service for your business.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-xl-11 mx-auto">
            <div class="pricing-wrapper position-relative mb-10 mb-md-14">
              <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
              <div class="shape rounded-circle bg-line primary rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
              <div class="pricing-switcher-wrapper switcher">
                <p class="mb-0 pe-3">Monthly</p>
                <div class="pricing-switchers">
                  <div class="pricing-switcher pricing-switcher-active"></div>
                  <div class="pricing-switcher"></div>
                  <div class="switcher-button bg-primary"></div>
                </div>
                <p class="mb-0 ps-3">Yearly</p>
              </div>
              <div class="row gy-6 mt-3 mt-md-5">
                <div class="col-md-6 col-lg-4">
                  <div class="pricing card">
                    <div class="card-body">
                      <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">$</span><span class="price-value">9</span> <span class="price-duration">month</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">year</span></div>
                      </div>
                      <!--/.prices -->
                      <h4 class="card-title mt-2">Basic Plan</h4>
                      <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                        <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                        <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong> </span></li>
                        <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                      </ul>
                      <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4 popular">
                  <div class="pricing card">
                    <div class="card-body">
                      <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">month</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">year</span></div>
                      </div>
                      <!--/.prices -->
                      <h4 class="card-title mt-2">Premium Plan</h4>
                      <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                        <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                        <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                        <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                      </ul>
                      <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                  <div class="pricing card">
                    <div class="card-body">
                      <div class="prices text-dark">
                        <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">month</span></div>
                        <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">year</span></div>
                      </div>
                      <!--/.prices -->
                      <h4 class="card-title mt-2">Corporate Plan</h4>
                      <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                        <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                        <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                        <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                        <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                      </ul>
                      <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.pricing -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.pricing-wrapper -->
            <div class="row gx-md-8 gx-xl-12 gy-10">
              <div class="col-lg-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                  </div>
                  <div>
                    <h4>Can I cancel my subscription?</h4>
                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
                  </div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-lg-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                  </div>
                  <div>
                    <h4>Which payment methods do you accept?</h4>
                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
                  </div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-lg-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                  </div>
                  <div>
                    <h4>How can I manage my Account?</h4>
                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
                  </div>
                </div>
              </div>
              <!-- /column -->
              <div class="col-lg-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                  </div>
                  <div>
                    <h4>Is my credit card information secure?</h4>
                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
                  </div>
                </div>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
@endsection