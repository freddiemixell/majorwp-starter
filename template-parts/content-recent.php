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

    $featured_image_url = get_the_post_thumbnail_url( $single_post );
?>

<div class="columns">
    <?php foreach ( $recent_posts_query->posts as $single_post ) : ?>
        
        <div class="column is-one-third">
            <div class="card">
                <a href="<?php echo esc_url( get_permalink( $single_post ) ); ?>">
                    <?php if ( $featured_image_url ) : ?>
                    <div class="card-image is-relative">
                        <figure class="image is-4by3">
                            <img src="<?php echo esc_url( $featured_image_url ); ?>" alt="<?php echo esc_attr( get_post_meta( get_post_thumbnail_id( $single_post ), '_wp_attachment_image_alt', true ) ); ?>">
                        </figure>
                        <div class="box post-preview is-overlay has-background-primary">
                            <p><?php echo esc_html( $single_post->post_title ); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
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
                </a>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?php
wp_reset_query();
endif;