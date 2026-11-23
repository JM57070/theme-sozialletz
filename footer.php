<footer class="site-footer">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center text-center">
            
            <!-- Bloc 1 : Identité & Observatoire -->
            <div class="cell medium-4 footer-col">
                <h3 class="footer-brand">SozialLëtz.lu</h3>
                <p class="footer-desc">
                    Média citoyen édité par <strong>OLICAS asbl</strong> (Observatoire de communication) — R.C.S. Luxembourg <strong>F15947</strong>.
                </p>
                <a href="https://olicas-luxembourg.eu" target="_blank" rel="noopener noreferrer" class="footer-obs-pill">
                    Observatoire Olicas-Luxembourg.eu &rarr;
                </a>
            </div>

            <!-- Bloc 2 : Navigation & Légal -->
            <div class="cell medium-4 footer-col">
                <span class="footer-eyebrow">Navigation &amp; Légal</span>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/' ) ); ?>">Archives du journal</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#mentions-legales' ) ); ?>">Mentions légales &amp; Droit de réponse</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#rgpd' ) ); ?>">Politique de confidentialité (RGPD / CNPD)</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/le-journal/#contact' ) ); ?>">Contact &amp; Service de presse</a></li>
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

        <div class="footer-bottom text-center">
            &copy; <?php echo date('Y'); ?> OLICAS asbl — R.C.S. Luxembourg F15947. Tous droits réservés.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>