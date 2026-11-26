<?php get_header(); ?>

<main class="grid-container" style="padding-top: 1rem; padding-bottom: 2.5rem;">
    <div class="grid-x grid-margin-x align-center">
        <div class="cell large-9">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <!-- En-tête de l'article -->
                    <header class="sl-box sl-box-cream" style="border-left: 5px solid var(--sl-navy);">
                        
                        <div class="sl-single-cat-bar">
                            <?php if ( in_category( 'le-monde-du-directeur' ) ) : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pexelsSilouhette.jpg' ); ?>" alt="Directeur de la publication" class="sl-director-avatar">
                            <?php endif; ?>

                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) :
                                $cat = $categories[0];
                            ?>
                                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="sl-single-cat-badge">
                                    <?php echo esc_html( $cat->name ); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <h1 class="brand-title" style="font-size: 2rem; margin: 0.65rem 0; line-height: 1.2;">
                            <?php the_title(); ?>
                        </h1>

                        <div style="font-size: 0.85rem; color: #444;">
                            <span>Par : <strong><?php the_author(); ?></strong></span> &bull;
                            <span>Publié le : <?php echo get_the_date(); ?></span>
                        </div>
                    </header>

                    <!-- Image à la une -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin-bottom: 1.5rem; text-align: center;">
                            <?php the_post_thumbnail( 'large', array( 'style' => 'border-radius: 12px; max-height: 450px; object-fit: cover; width: 100%;' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Contenu de l'article -->
                    <div class="sl-box" style="background: #ffffff; border: 1px solid var(--sl-border); font-size: 1.05rem; line-height: 1.75;">
                        <?php the_content(); ?>
                    </div>

                    <!-- Encadré Responsabilité & Droit de réponse -->
                    <footer class="sl-box sl-box-beige" style="font-size: 0.82rem; margin-top: 1.5rem;">
                        <strong>Mention éditoriale <span class="sl-title-navy">SozialLëtz</span><span class="sl-title-lu">.lu</span> :</strong>
                        Cet article a été vérifié par la rédaction d'<strong>OLICAS asbl</strong> (R.C.S. Luxembourg F15947).
                        Toute personne citée dispose d'un droit de réponse conformément à la législation luxembourgeoise sur la liberté d'expression dans les médias.
                    </footer>

                </article>
            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>