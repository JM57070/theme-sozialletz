<footer class="site-footer">
    <div class="grid-container">

        <!-- BANDEAU PARTENAIRES & LOGOS DANS LE FOOTER -->
        <div class="sl-footer-partners">
            <span class="footer-eyebrow" style="display: block; text-align: center; margin-bottom: 0.85rem;">
                Partenaires &amp; Réseau
            </span>

            <div class="sl-partners-bubbles">
                <!-- Bulle 1 : SozialLëtz.lu -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sl-partner-bubble" title="SozialLëtz.lu — Le média citoyen">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logoJournal.png' ); ?>" alt="SozialLëtz.lu">
                    <span>SozialLëtz.lu</span>
                </a>

                <!-- Bulles dynamiques ajoutées depuis l'admin WordPress > Partenaires -->
                <?php
                $partners_query = new WP_Query( array(
                    'post_type'      => 'sl_partenaire',
                    'posts_per_page' => 20,
                    'orderby'        => 'menu_order date',
                    'order'          => 'ASC',
                ) );

                if ( $partners_query->have_posts() ) :
                    while ( $partners_query->have_posts() ) : $partners_query->the_post();
                        $p_url = get_post_meta( get_the_ID(), '_sl_partenaire_url', true );
                        $p_url = $p_url ? $p_url : '#';
                        ?>
                        <a href="<?php echo esc_url( $p_url ); ?>" target="_blank" rel="noopener noreferrer" class="sl-partner-bubble" title="<?php the_title_attribute(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'thumbnail', array( 'alt' => get_the_title() ) ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsPoigneeDeMain.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            <span><?php the_title(); ?></span>
                        </a>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <a href="https://luxdev.lu" target="_blank" rel="noopener noreferrer" class="sl-partner-bubble" title="Agence LuxDev">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/luxdev.png' ); ?>" alt="LuxDev">
                        <span>LuxDev</span>
                    </a>
                    <a href="https://www.fnr.lu" target="_blank" rel="noopener noreferrer" class="sl-partner-bubble" title="Fonds National de la Recherche">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/FNRLOGOBlack.png' ); ?>" alt="FNR Luxembourg">
                        <span>FNR</span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Mention : Un média de OLICAS asbl -->
            <div class="sl-footer-publisher">
                <span class="sl-publisher-label" style="color: #cbd2d9;">Un média de :</span>
                <a href="https://www.olicas-luxembourg.eu" target="_blank" rel="noopener noreferrer" class="sl-publisher-bubble" title="Visiter le site d'OLICAS asbl">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logoOlicasBG.png' ); ?>" alt="OLICAS asbl">
                    <span>OLICAS asbl &rarr;</span>
                </a>
            </div>
        </div>

        <div class="grid-x grid-margin-x align-center text-center" style="margin-top: 1.5rem;">
            
            <!-- Bloc 1 : Identité & Observatoire -->
            <div class="cell medium-4 footer-col">
                <h3 class="footer-brand">
                    <span style="color: #fdf5d7;">SozialLëtz</span><span class="sl-title-lu">.lu</span>
                </h3>
                <p class="footer-desc">
                    Média citoyen édité par <strong>OLICAS asbl</strong> (Observatoire de communication) — R.C.S. Luxembourg <strong>F15947</strong>.
                </p>
                <a href="https://olicas-luxembourg.eu" target="_blank" rel="noopener noreferrer" class="footer-obs-pill">
                    Visitez également : Olicas-Luxembourg.eu &rarr;
                </a>
            </div>

            <!-- Bloc 2 : Navigation & Légal -->
            <div class="cell medium-4 footer-col">
                <span class="footer-eyebrow">Navigation rapide</span>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/' ) ); ?>">Archives &amp; Le Journal</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#code-ethique' ) ); ?>">Mentions légales &amp; Code éthique</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#contacts-journal' ) ); ?>">Contact &amp; Service de presse</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#soumission-citoyenne' ) ); ?>">Proposer une tribune / article</a></li>
                </ul>
            </div>

            <!-- Bloc 3 : Newsletter Hebdo -->
            <div class="cell medium-4 footer-col">
                <span class="footer-eyebrow">La Newsletter Hebdo</span>
                <p class="footer-desc">L'édito du Directeur et l'essentiel de l'actu sociale chaque semaine.</p>
                <form class="footer-newsletter" action="#" method="post">
                    <input type="email" placeholder="Votre adresse email..." required aria-label="Votre adresse email">
                    <button type="submit">S'inscrire</button>
                </form>
                <small class="footer-rgpd">Données traitées uniquement par OLICAS asbl (RGPD).</small>
            </div>

        </div>

        <!-- RAPPEL DU MENU PRINCIPAL DANS LE FOOTER -->
        <nav class="sl-footer-menu-bar" aria-label="Menu de pied de page">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'depth'          => 1,
                'menu_class'     => 'sl-footer-nav-list',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>            

        <div class="footer-bottom text-center">
            &copy; <?php echo date('Y'); ?> OLICAS asbl — R.C.S. Luxembourg F15947. Tous droits réservés.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>