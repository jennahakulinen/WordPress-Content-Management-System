<?php get_header(); ?>
    <div class="content-row">
        <main>
            <div class="<?php post_class(); ?>">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) :  ?>
                    <?php the_post(); ?>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <h3 class="vaaleanpunainen">Katsotuimmat</h3>
            <?php wpp_get_mostpopular('range="all"&post_type="post"&wpp_start=" "&wpp_end=" "&thumbnail_width=150&thumbnail_height=200&excerpt_lenght=100&limit=5&post_html="<article><a href=\'{url}\'>{thumb_img}<h4>{text_title}</h4><p>{summary}</p></a></article>"'); ?>

        </main>
    </div>

<?php get_footer(); ?>

