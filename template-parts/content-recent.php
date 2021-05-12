<?php
/**
 * Template part for displaying recent posts
 *
 * @package MajorWP_Starter
 */

$recent_posts_query = new WP_Query( [
    'post_type'      => 'post',
    'posts_per_page' => 3,
] );

if ( $recent_posts_query->have_posts() ) :
?>

<div class="columns">
    <?php foreach ( $recent_posts_query->posts as $single_post ) : ?>

    <div class="column is-one-third">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <?php if ( $single_post->post_excerpt ) : ?>
                <div class="content">
                    <?php
                        echo esc_html( $single_post->post_excerpt );
                    ?>
                    <br>
                    <time datetime="<?php echo esc_attr( $single_post->post_date ); ?>"><?php echo esc_html( get_the_date( 'F j, Y', $single_post ) ); ?></time>
                </div>
                <?php endif; ?>
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                        <img src="<?php echo esc_url( get_avatar_url( $single_post->post_author ) ); ?>" alt="Image of user <?php esc_attr( get_the_author_meta( 'display_name', absint( $single_post->post_author ) ) ); ?>">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-6"><?php echo esc_html( get_the_author_meta( 'first_name', $single_post->post_author ) . ' ' . get_the_author_meta( 'last_name', $single_post->post_author ) ); ?></p>
                        <p class="subtitle is-6">@<?php echo esc_html( get_the_author_meta( 'display_name', absint( $single_post->post_author ) ) ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
</div>

<?php
wp_reset_query();
endif;