<footer class="site-footer">
    <div class="grid-container text-center">

        <!-- UN MÉDIA DE : OLICAS ASBL -->
        <div class="sl-footer-publisher">
            <span class="sl-publisher-label" style="color: #cbd2d9;">Un média de :</span>
            <a href="https://olicas-luxembourg.eu/" target="_blank" rel="noopener noreferrer" class="sl-publisher-bubble" title="OLICAS asbl — Observatoire Luxembourgeois">
                <span>OLICAS asbl &rarr;</span>
            </a>
        </div>

        <!-- MENU PRINCIPAL HORIZONTAL STYLISÉ -->
        <nav class="sl-footer-menu-bar" aria-label="Navigation principale en pied de page">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'depth'          => 1,
                'menu_class'     => 'sl-footer-nav-pills',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>

        <!-- 3 COLONNES COMPACTES -->
        <div class="grid-x grid-margin-x align-center" style="margin-top: 1.2rem;">

            <div class="cell medium-4 footer-col">
                <div class="footer-brand-row">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logoJournal.png' ); ?>" alt="Logo SozialLëtz.lu" class="footer-brand-logo">
                    <div class="footer-brand" style="margin-bottom: 0;">SozialLëtz<span class="sl-title-lu">.lu</span></div>
                </div>
                <p class="footer-desc">
                    Média citoyen édité par <strong>OLICAS asbl</strong> (Observatoire de communication) — R.C.S. Luxembourg <strong>F15947</strong>.
                </p>
                <a href="https://olicas-luxembourg.eu/" target="_blank" rel="noopener noreferrer" class="footer-obs-pill">
                    Visitez également : Olicas-Luxembourg.eu &rarr;
                </a>
            </div>

            <div class="cell medium-4 footer-col">
                <span class="footer-eyebrow">Navigation rapide</span>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/' ) ); ?>">Archives &amp; Le Journal</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#mentions-legales' ) ); ?>">Mentions légales &amp; Code éthique</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#contact' ) ); ?>">Contact</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#soumission-citoyenne' ) ); ?>">Proposer une tribune / article</a></li>
                </ul>
            </div>

            <div class="cell medium-4 footer-col">
                <span class="footer-eyebrow">La Newsletter Hebdo</span>
                <p class="footer-desc">L'édito du Directeur et l'essentiel de l'actu sociale chaque semaine.</p>
                <form class="footer-newsletter" action="#newsletter" method="post">
                    <input type="email" name="subscriber_email" placeholder="Votre adresse email..." required aria-label="Votre adresse email">
                    <button type="submit">S'inscrire</button>
                </form>
                <small class="footer-rgpd">Données traitées uniquement par OLICAS asbl (RGPD).</small>
            </div>

        </div>

        <div class="footer-bottom">
            <p style="margin:0;">
                &copy; <?php echo date('Y'); ?> <strong>SozialLëtz.lu</strong> — Un média d'OLICAS asbl (Luxembourg). Tous droits réservés.
                &bull; Conception &amp; réalisation digitale : <a href="https://creativdia.com" target="_blank" rel="noopener noreferrer" style="color: #5eead4; font-weight: 700; text-decoration: none;">Creativdia</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>