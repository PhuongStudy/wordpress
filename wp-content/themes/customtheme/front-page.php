<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>
        <?php bloginfo('name') ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title() ?>
    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
    .showcase {
        background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_directory').'/img/showcase.jpg');
        ?>) no-repeat center center;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light d-flex position-sticky custom-navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
        </div>
    </nav>
    <div class="showcase px-4 py-5 mb-5 text-center">
        <h1 class="display-5 fw-bold text-white">
            <?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                <?php echo get_theme_mod('showcase_text', 'This is mostly typography and not a lot of structural elements, except for the couple of float alignments, plus the responsive design block at the end.') ?>
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <!-- <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button> -->
                <a href='<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>'
                    class="btn btn-outline-secondary btn-lg px-4">
                    <?php echo get_theme_mod('btn_text', 'Read more'); ?>
                </a>
            </div>
        </div>
    </div>

    <div class='container'>
        <div class="marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1'); ?>
                    <?php endif; ?>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <?php if(is_active_sidebar('box2')) : ?>
                    <?php dynamic_sidebar('box2'); ?>
                    <?php endif; ?>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <?php if(is_active_sidebar('box3')) : ?>
                    <?php dynamic_sidebar('box3'); ?>
                    <?php endif; ?>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                            class="text-muted">It’ll blow
                            your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here.
                        Imagine some exciting prose
                        here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See
                            for
                            yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give
                        you an idea of how this
                        layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                            class="text-muted">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder
                        content. Again, not really
                        intended to be actually read, simply here to give you a better view of what this
                        would look like with
                        some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="container">
            <div class="col-md-4 d-flex align-items-center">
                <!-- <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                M
            </a> -->
                <span class="mb-3 mb-md-0 text-muted">&copy; <?php echo Date('Y'); ?> -
                    <?php bloginfo('name') ?></span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook" />
                        </svg></a></li>
            </ul>
            <p class="float-end"><a href="#">Back to top</a></p>
        </div>
    </footer>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>