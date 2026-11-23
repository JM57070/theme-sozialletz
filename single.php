<?php get_header(); ?>

<main class="grid-container" style="padding-top: 1.5rem; padding-bottom: 3rem;">
    <?php while ( have_posts() ) : the_post(); ?>
        
        <article class="grid-x grid-margin-x align-center">
            <div class="cell large-9">
                
                <!-- En-tête de l'article -->
                <header class="sl-box sl-box-cream" style="border-left: 5px solid var(--sl-teal);">
                    <div style="margin-bottom: 0.6rem;">
                        <?php 
                        $cats = get_the_category();
                        if ( ! empty( $cats ) ) : ?>
                            <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="label" style="background: var(--sl-teal); text-decoration: none;">
                                <?php echo esc_html( $cats[0]->name ); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <h1 class="brand-title" style="font-size: 2rem; line-height: 1.2; margin-bottom: 0.8rem;">
                        <?php the_title(); ?>
                    </h1>

                    <div style="font-size: 0.85rem; color: #555; display: flex; flex-wrap: wrap; gap: 15px;">
                        <span><strong>Par :</strong> <?php the_author(); ?></span>
                        <span><strong>Publié le :</strong> <?php echo get_the_date(); ?></span>
                    </div>
                </header>

                <!-- Image à la une -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="margin-bottom: 1.5rem;">
                        <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; max-height:420px; object-fit:cover; border-radius:16px;' ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- Corps de l'article -->
                <div class="sl-box" style="background: #ffffff; border: 1px solid var(--sl-border); font-size: 1.05rem; line-height: 1.75; padding: 2rem;">
                    <?php the_content(); ?>
                </div>

                <!-- Encart légal Droit de réponse (Cahier des charges Luxembourg) -->
                <div class="sl-box sl-box-beige" style="font-size: 0.8rem; color: #444;">
                    <strong>Mentions éditoriales :</strong> Article publié sous la responsabilité de la rédaction de <em>SozialLëtz.lu</em> (OLICAS asbl — R.C.S. F15947). Pour toute demande de droit de réponse, contactez <a href="mailto:direction@olicas-luxembourg.eu" style="font-weight:700; color:var(--sl-teal);">direction@olicas-luxembourg.eu</a>.
                </div>

            </div>
        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>