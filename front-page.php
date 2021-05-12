<?php
/**
 * Front Page Template
 *
 * @package MajorWP_Starter
 */

get_header();
?>

    <section class="hero is-medium has-background-dark">
        <div class="hero-body has-text-centered">
            <h1 class="title is-spaced is-1 has-text-white">Websites like this?</h1>
            <p class="subtitle is-4 has-text-white">It's Major.</p>

            <div class="buttons is-centered">
                <a class="button is-primary">Get Started</a>
                <a class="button is-light is-outlined">Docs</a>
            </div>

        </div>
    </section>
    
    <div class="box cta">
        <p class="has-text-centered">
            <span class="tag is-primary">New</span>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <section class="section">
        <div class="container">
            <?php
                get_template_part( 'template-parts/content', 'recent' );
            ?>
        </div>
    </section>

    <section class="hero has-background-primary is-medium">
        <div class="hero-body has-text-centered">
            <h2 class="title is-spaced">There's a world of possiblities.</h2>
            <p class="subtitle">Check out the bulma documentation for more components and elements!</p>
            <div class="buttons is-centered">
                <a class="button is-dark" href="https://bulma.io" target="_blank" rel="noopener">Bulma Docs</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>