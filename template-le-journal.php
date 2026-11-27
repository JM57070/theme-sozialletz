<?php
/*
Template Name: Page Le Journal (Qui sommes-nous, Le Directeur, Équipe, Charte & Contact)
*/
get_header();

$theme_uri = get_template_directory_uri();
$citizen_submitted = false;
if ( isset( $_POST['sl_citizen_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sl_citizen_nonce'] ) ), 'sl_citizen_submit' ) ) {
    $citizen_submitted = true;
}
?>

<main id="sl-main-content" class="grid-container sl-journal-page">

    <!-- EN-TÊTE ILLUSTRÉ : QUI SOMMES-NOUS ? -->
    <section class="sl-box sl-box-cream sl-journal-hero" style="border-left: 6px solid var(--sl-teal-lu); margin-bottom: 1.15rem;">
        <div class="grid-x grid-margin-x align-middle">
            <div class="cell large-8 sl-mobile-cell-gap">
                <span class="sl-eyebrow">Qui sommes-nous ? • OLICAS asbl</span>
                <h1 class="sl-section-title sl-journal-main-title" style="margin-bottom: 0.45rem;">
                    LE JOURNAL <span class="sl-title-navy">SOZIALLËTZ</span><span class="sl-title-lu">.LU</span>
                </h1>
                <p style="font-size: 0.93rem; line-height: 1.52; margin: 0; color: var(--sl-navy);">
                    SozialLëtz.lu est un journal citoyen en ligne indépendant et émergent, édité et publié par l’Observatoire Luxembourgeois pour l’Information, la Communication et l’Action Sociale — <strong>OLICAS asbl</strong>. Positionné au carrefour du journalisme citoyen, de la solidarité, des droits, de la recherche et de l’action internationale, le média vise à informer avec rigueur, à donner de la visibilité aux initiatives sociales et associatives, à promouvoir l’accessibilité universelle (WCAG) et à soutenir l’engagement citoyen, notamment auprès de la jeunesse.
                </p>
            </div>
            <div class="cell large-4">
                <div class="sl-journal-hero-visual">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/pexelsMainNoirDrapeau.jpg' ); ?>" alt="SozialLëtz.lu — Média citoyen OLICAS asbl" class="sl-journal-hero-img">
                    <div class="sl-journal-hero-pills">
                        <span class="sl-pill-badge">LU • DE • FR • EN</span>
                        <span class="sl-pill-badge">WCAG</span>
                        <span class="sl-pill-badge">OLICAS asbl</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RANGÉE 1 SYMÉTRIQUE : LE DIRECTEUR (BIOGRAPHIE) + NOS MISSIONS -->
    <div class="grid-x grid-margin-x sl-aligned-row">

        <div class="cell large-8 sl-row-col sl-mobile-cell-gap">
            <section id="le-directeur" class="sl-box sl-box-cream sl-grow-box" style="margin-bottom: 0; border-top: 4px solid var(--sl-teal-lu);">
                <div>
                    <div class="sl-director-header">
                        <img src="<?php echo esc_url( $theme_uri . '/assets/silouhette.png' ); ?>" alt="Jean-Claude MBEDE FOUDA — Directeur de la Publication" class="sl-director-portrait">
                        <div>
                            <span class="sl-eyebrow" style="margin: 0;">Biographie • Président du Conseil d’Administration &amp; Directeur de Publication</span>
                            <h2 class="sl-section-title" style="font-size: 1.32rem; margin: 0;">LE DIRECTEUR : JEAN-CLAUDE MBEDE FOUDA</h2>
                        </div>
                    </div>

                    <p style="font-size: 0.88rem; line-height: 1.48; color: var(--sl-navy); margin-bottom: 0.5rem;">
                        Directeur de la Publication de SozialLëtz.lu, Jean-Claude MBEDE FOUDA est un journaliste expérimenté inscrit à l’Ordre national des Journalistes italiens depuis mars 2013 dans la catégorie <em>Giornalista Professionista</em>, ce qui lui vaut d’être également reconnu comme journaliste professionnel par le Conseil de Presse du Luxembourg. Il a mené une riche carrière marquée par un engagement constant pour l’éthique et le respect de la déontologie journalistique.
                    </p>

                    <div id="bio-suite" class="sl-expandable-content" hidden>
                        <p>
                            A 23 ans, il s’était distingué en devenant pendant huit ans correspondant en Afrique centrale pour <em>Voice of America</em> – VoA et <em>Radio Vatican</em>, couvrant notamment des élections sensibles dans la région, des campagnes de vaccination, des coups d’État ainsi que de nombreuses missions d’institutions de Bretton Woods en négociation avec des gouvernements. Défenseur engagé de l’éthique, des droits des femmes et des enfants et de l’égalité des chances, il a ensuite élargi son parcours du journalisme vers la coopération internationale et la Diplomatie. De 2013 à 2025, il a travaillé — y compris au Pakistan, en Afghanistan, au Liban, en Syrie, en Éthiopie, en Tunisie et en République démocratique du Congo — pour l’Agence italienne de Coopération (AICS), l’Union européenne (gestion des projets de communication) et l’UNICEF, avant de réaliser son aspiration à la communication humanitaire en représentant en 2025 le Grand-Duché de Luxembourg comme responsable Communication Terrain en intersection pour le Pool international de Médecins Sans Frontières (MSF) en RD Congo.
                        </p>
                        <p style="margin-bottom: 0;">
                            Observateur attentif et réservé (qualités héritées de sa décennie dans les arcanes diplomatiques) et des dynamiques internationales et engagé dans la promotion du dialogue et de la paix, cet enseignant occasionnel à l’Université de Parme (Italie) il a été désigné courant 2025 comme médiateur lors des consultations pour la paix au Cameroun auprès du Pape Léon par la société civile. Citoyen du Monde résidant au Grand-Duché de Luxembourg depuis 2021, ancien réfugié politique qui considère le Luxembourg comme une <em>« Terre Promise »</em> pour sa famille entend partager son expérience internationale multisectorielle avec les plus jeunes.
                        </p>
                    </div>
                </div>

                <div class="sl-box-footer-action">
                    <button type="button" class="sl-suite-btn" data-sl-expand="bio-suite" aria-expanded="false">LIRE LA SUITE</button>
                </div>
            </section>
        </div>

        <div class="cell large-4 sl-row-col">
            <section id="nos-missions" class="sl-box sl-box-mint sl-grow-box" style="margin-bottom: 0; border-top: 4px solid var(--sl-navy);">
                <div>
                    <div class="sl-card-head-illus">
                        <img src="<?php echo esc_url( $theme_uri . '/assets/pexelsPoigneeDeMain.jpg' ); ?>" alt="Nos Missions" class="sl-card-mini-thumb">
                        <div>
                            <span class="sl-eyebrow" style="margin: 0;">Engagement Citoyen</span>
                            <h2 class="sl-section-title" style="font-size: 1.25rem; margin: 0;">NOS MISSIONS</h2>
                        </div>
                    </div>

                    <ul class="sl-journal-list">
                        <li>
                            <strong>Informer de manière citoyenne et indépendante :</strong> proposer des contenus fiables, pédagogiques et accessibles sur la solidarité, les droits, la vie associative, la recherche et l’action internationale.
                        </li>
                        <li>
                            <strong>Former et engager la jeunesse :</strong> accompagner les jeunes (0–30 ans) dans l’acquisition de repères critiques face à l’information, de compétences multimédia et d’un engagement solidaire concret.
                        </li>
                        <li id="missions-suite" class="sl-expandable-content" hidden>
                            <strong>Relier société civile, recherche et action publique :</strong> mettre en lumière les acteurs de terrain, croiser les regards avec la recherche et contribuer à une culture d’inclusion et d’accès effectif aux droits.
                        </li>
                    </ul>
                </div>

                <div class="sl-box-footer-action">
                    <button type="button" class="sl-suite-btn" data-sl-expand="missions-suite" aria-expanded="false">LIRE LA SUITE</button>
                </div>
            </section>
        </div>

    </div>

    <!-- RANGÉE 2 SYMÉTRIQUE : NOS VALEURS + LA RÉDACTION & ÉQUIPE -->
    <div class="grid-x grid-margin-x sl-aligned-row">

        <div class="cell large-6 sl-row-col sl-mobile-cell-gap">
            <section id="nos-valeurs" class="sl-box sl-box-cream sl-grow-box" style="margin-bottom: 0;">
                <div>
                    <div class="sl-card-head-illus">
                        <img src="<?php echo esc_url( $theme_uri . '/assets/terreSurLesMainsSansBG.png' ); ?>" alt="Nos Valeurs" class="sl-card-mini-thumb" style="object-fit: contain; background: #ffffff; padding: 4px;">
                        <div>
                            <span class="sl-eyebrow" style="margin: 0;">Principes Fondateurs</span>
                            <h2 class="sl-section-title" style="font-size: 1.25rem; margin: 0;">NOS VALEURS</h2>
                        </div>
                    </div>

                    <ul class="sl-journal-list">
                        <li>
                            <strong>Éthique et déontologie :</strong> respect strict des règles professionnelles, de la vérification des faits et de l’indépendance éditoriale.
                        </li>
                        <li>
                            <strong>Inclusion et égalité des chances :</strong> parité femmes-hommes, accueil bienveillant de la diversité et ouverture active aux personnes en situation de handicap ou confrontées à des vulnérabilités.
                        </li>
                        <li id="valeurs-suite" class="sl-expandable-content" hidden>
                            <strong>Accessibilité universelle :</strong> conception attentive aux normes WCAG et à la clarté du propos afin que l’information reste compréhensible et accessible au plus grand nombre.
                        </li>
                        <li id="valeurs-suite-2" class="sl-expandable-content" hidden>
                            <strong>Solidarité, dignité et dialogue :</strong> refus de la stigmatisation, défense des droits humains (notamment ceux des femmes et des enfants) et promotion d’une société plus juste et solidaire.
                        </li>
                    </ul>
                </div>

                <div class="sl-box-footer-action">
                    <button type="button" class="sl-suite-btn" data-sl-expand="valeurs-suite,valeurs-suite-2" aria-expanded="false">LIRE LA SUITE</button>
                </div>
            </section>
        </div>

        <div class="cell large-6 sl-row-col">
            <section id="la-redaction" class="sl-box sl-box-beige sl-grow-box" style="margin-bottom: 0;">
                <div>
                    <div class="sl-card-head-illus">
                        <img src="<?php echo esc_url( $theme_uri . '/assets/pexelsDiagrame.jpg' ); ?>" alt="La Rédaction et l'Équipe" class="sl-card-mini-thumb">
                        <div>
                            <span class="sl-eyebrow" style="margin: 0;">Organisation &amp; Correspondants</span>
                            <h2 class="sl-section-title" style="font-size: 1.25rem; margin: 0;">LA RÉDACTION &amp; L’ÉQUIPE</h2>
                        </div>
                    </div>

                    <p style="font-size: 0.86rem; line-height: 1.46; color: var(--sl-navy); margin-bottom: 0.55rem;">
                        La rédaction de SozialLëtz.lu réunit des journalistes professionnels, des contributeurs bénévoles, des experts thématiques et de jeunes reporters en formation (Voix &amp; Talent / JRS), placés sous la responsabilité éditoriale du Directeur de la Publication et l’encadrement organisationnel d’OLICAS asbl. Chaque production fait l’objet d’une relecture et d’une validation attentive avant mise en ligne, avec une vigilance particulière portée à la protection des mineurs et à la qualité de l’information.
                    </p>

                    <div id="equipe-suite" class="sl-expandable-content" hidden>
                        <ul class="sl-journal-list" style="margin-top: 0.4rem;">
                            <li><strong>Président du Conseil d’Administration / Directeur de Publication :</strong> Jean Claude MBEDE FOUDA</li>
                            <li><strong>Administration :</strong> Directrice Générale : Cécile Marie Sonia MIMBOE ONGUENE • Secrétaire Générale : Fatiha Rahmi</li>
                            <li><strong>Rédaction :</strong> Rédacteur -en-Chef : [À compléter] • Coordonnateur « Jeunes Reporters Sociaux – JRS » : [À compléter]</li>
                            <li><strong>Responsable Communication Digitale et Technique :</strong> Hubert Mubake / Huzaifa Baloch</li>
                            <li><strong>Correspondants :</strong> Kiram Tadesse (Addis-Abeba (Ethioipe) (Cotonou – Benin )(Malawi)Cap-vert • Rwanda Togo Burkina Faso. Mali Niger Sénegal Costa Ricca Salvator Kosovo Ukraine RD Congo Burundi Kenya Liban</li>
                            <li><strong>Partenaire Technique :</strong> Hugues Mubake. – CREATIVDIA S.a.r.l-s, 66, rue des Celtes, L-1318 – Luxembourg • Tél : +352 661 927 952 • Email : contact@creativdia.com</li>
                        </ul>
                    </div>
                </div>

                <div class="sl-box-footer-action">
                    <button type="button" class="sl-suite-btn" data-sl-expand="equipe-suite" aria-expanded="false">LIRE LA SUITE</button>
                </div>
            </section>
        </div>

    </div>

    <!-- RANGÉE 3 SYMÉTRIQUE & DYNAMIQUE : CHARTE ÉDITORIALE & CODE ÉTHIQUE + NOS PARTENAIRES -->
    <div id="charte-ethique" class="grid-x grid-margin-x sl-aligned-row">

        <div class="cell large-7 sl-row-col sl-mobile-cell-gap">
            <section class="sl-box sl-box-cream sl-grow-box" style="margin-bottom: 0; border-top: 4px solid var(--sl-teal-lu);">
                <div>
                    <div class="sl-tabs-header" role="tablist" aria-label="Charte éditoriale et Code éthique">
                        <button type="button" class="sl-tab-btn is-active" role="tab" aria-selected="true" data-sl-tab="tab-charte">La Charte éditoriale</button>
                        <button type="button" class="sl-tab-btn" role="tab" aria-selected="false" data-sl-tab="tab-code">Le Code Éthique</button>
                    </div>

                    <div id="tab-charte" class="sl-tab-panel is-active" role="tabpanel">
                        <p style="font-size: 0.86rem; line-height: 1.46; color: var(--sl-navy); margin-bottom: 0.45rem;">
                            La charte éditoriale de SozialLëtz.lu repose sur des engagements clairs :
                        </p>
                        <ul class="sl-journal-list">
                            <li><strong>Recherche de la vérité et vérification des faits :</strong> recoupement rigoureux des sources, refus des informations non vérifiées, de la manipulation des faits et du plagiat.</li>
                            <li><strong>Indépendance éditoriale :</strong> autonomie vis-à-vis des pouvoirs publics, des partis politiques, des intérêts commerciaux et des bailleurs de fonds.</li>
                            <li id="charte-suite-1" class="sl-expandable-content" hidden><strong>Protection des sources et droit de réponse :</strong> confidentialité des sources protégées et garantie d’un droit de réponse ou de rectification équitable.</li>
                            <li id="charte-suite-2" class="sl-expandable-content" hidden><strong>Respect de la dignité humaine :</strong> traitement respectueux des personnes vulnérables, refus de toute stigmatisation et proscription de tout propos haineux ou discriminatoire.</li>
                            <li id="charte-suite-3" class="sl-expandable-content" hidden><strong>Protection des jeunes et mineurs :</strong> autorisation écrite préalable des représentants légaux pour tout mineur et relecture systématique des productions de l’incubateur avant publication.</li>
                            <li id="charte-suite-4" class="sl-expandable-content" hidden><strong>Transparence et correction :</strong> correction visible, rapide et datée de toute erreur factuelle constatée après publication.</li>
                        </ul>
                    </div>

                    <div id="tab-code" class="sl-tab-panel" role="tabpanel" hidden>
                        <p style="font-size: 0.85rem; line-height: 1.46; color: var(--sl-navy); margin-bottom: 0.45rem;">
                            SozialLëtz.lu s’inscrit dans le respect des principes déontologiques et éthiques de la profession journalistique tels qu’établis au Grand-Duché de Luxembourg sous l’égide du Conseil de Presse. Parce qu’un journalisme citoyen crédible, indépendant et au service de l’intérêt général repose sur des repères éthiques clairs, SozialLëtz.lu, édité par OLICAS asbl, place son activité éditoriale sous le signe de la rigueur, de la transparence et du respect d’autrui.
                        </p>
                        <div id="code-suite" class="sl-expandable-content" hidden>
                            <p style="font-size: 0.84rem; line-height: 1.45; color: var(--sl-navy); margin-bottom: 0.45rem;">
                                Au Grand-Duché de Luxembourg, la charte éthique de référence est officiellement appelée le Code de déontologie de la presse et des médias, adopté par le Conseil de Presse du Luxembourg (institué en vertu de la loi du 8 juin 2004 sur la liberté d'expression dans les médias). En publiant ce texte de référence sur notre site, nous souhaitons permettre à nos lecteurs, partenaires, contributeurs et jeunes reporters de connaître les règles qui guident notre travail quotidien — de la vérification des faits et de l’indépendance éditoriale jusqu’au respect de la dignité humaine, à la transparence et aux garanties de médiation.
                            </p>
                            <p style="font-size: 0.83rem; margin: 0;">
                                Référence officielle : <a href="https://www.press.lu/wp-content/uploads/2025/01/Code-de-deontologie.pdf" target="_blank" rel="noopener noreferrer" style="color: var(--sl-teal-dark); font-weight: 700;">https://www.press.lu/wp-content/uploads/2025/01/Code-de-deontologie.pdf</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="sl-box-footer-action">
                    <button type="button" class="sl-suite-btn" data-sl-expand-active-tab="true" aria-expanded="false">LIRE LA SUITE</button>
                </div>
            </section>
        </div>

        <div class="cell large-5 sl-row-col">
            <section id="nos-partenaires" class="sl-box sl-box-mint sl-grow-box" style="margin-bottom: 0; border-top: 4px solid var(--sl-navy);">
                <div>
                    <div class="sl-card-head-illus">
                        <img src="<?php echo esc_url( $theme_uri . '/assets/onTheWorldSansBG.png' ); ?>" alt="Nos Partenaires" class="sl-card-mini-thumb" style="object-fit: contain; background: #ffffff; padding: 4px;">
                        <div>
                            <span class="sl-eyebrow" style="margin: 0;">Synergies &amp; Réseau</span>
                            <h2 class="sl-section-title" style="font-size: 1.25rem; margin: 0;">NOS PARTENAIRES</h2>
                        </div>
                    </div>

                    <p style="font-size: 0.86rem; line-height: 1.48; color: var(--sl-navy); margin-bottom: 0.55rem;">
                        SozialLëtz.lu et OLICAS asbl développent des collaborations et synergies avec des acteurs associatifs, sociaux, éducatifs, scientifiques et institutionnels au Luxembourg et à l’international (ASBL, fondations, ONG, acteurs de la jeunesse et de l’inclusion, comités et milieux académiques).
                    </p>
                    <p style="font-size: 0.83rem; line-height: 1.42; color: var(--sl-navy-soft); margin: 0;">
                        [Lister ici les partenaires officiellement confirmés avec leurs logos et liens respectifs, une fois les conventions/accords validés].
                    </p>
                </div>

                <div class="sl-box-footer-action">
                    <a href="#contact" class="sl-suite-btn sl-suite-link">LIRE LA SUITE</a>
                </div>
            </section>
        </div>

    </div>

    <!-- RANGÉE 4 SYMÉTRIQUE & LISIBLE : CONTACTS + FORMULAIRE DE CONTACT / PROPOSITION -->
    <section id="contact" class="sl-contact-section sl-box sl-box-cream" style="margin-bottom: 0;">
        <div class="sl-contact-header">
            <span class="sl-eyebrow">Rédaction &amp; Participation Citoyenne</span>
            <h2 class="sl-section-title sl-contact-heading" style="margin-bottom: 0.35rem;">
                CONTACTS &amp; PROPOSITION DE SUJETS / ATELIERS
            </h2>
            <p class="sl-contact-subtext">
                Formulaire de contact / proposition de sujets &amp; ateliers sur <strong>SozialLëtz.lu</strong> — Éditeur / Organisation porteuse : <strong>OLICAS asbl</strong>.
            </p>
        </div>

        <div class="grid-x grid-margin-x sl-aligned-row" style="margin-bottom: 0;">
            <div class="cell large-5 sl-row-col sl-mobile-cell-gap">
                <div class="sl-contact-card-left sl-grow-box">
                    <div>
                        <span class="sl-eyebrow">Éditeur / Organisation porteuse</span>
                        <h3 class="sl-section-title" style="font-size: 1.18rem; margin-bottom: 0.55rem;">OLICAS asbl</h3>
                        <p style="font-size: 0.86rem; line-height: 1.46; color: var(--sl-navy); margin-bottom: 0.75rem;">
                            Observatoire Luxembourgeois pour l’Information, la Communication et l’Action Sociale.
                        </p>
                    </div>
                    <ul class="sl-contact-details">
                        <li><strong>Siège :</strong> 10A Rue du Puits – L2355 Luxembourg</li>
                        <li><strong>n° RCS :</strong> R.C.S. Luxembourg F15947</li>
                        <li><strong>Téléphone :</strong> + 352 61 110576</li>
                        <li><strong>Courriel :</strong> <a href="mailto:redaction@sozialletz.lu">redaction@sozialletz.lu</a> - <a href="mailto:olicas@olicas-luxembourg.eu">olicas@olicas-luxembourg.eu</a> – <a href="mailto:rjs@sozialletz.lu">rjs@sozialletz.lu</a></li>
                    </ul>
                </div>
            </div>

            <div id="soumission-citoyenne" class="cell large-7 sl-row-col">
                <div class="sl-contact-card-right sl-grow-box">
                    <div>
                        <span class="sl-eyebrow">Formulaire de contact / proposition</span>
                        <h3 class="sl-section-title" style="font-size: 1.18rem; margin-bottom: 0.55rem;">Sujets, ateliers &amp; tribunes citoyennes</h3>
                    </div>

                    <?php if ( $citizen_submitted ) : ?>
                        <div class="sl-form-success" role="status">
                            <strong>Merci pour votre message !</strong> Votre proposition a bien été transmise à la rédaction de <strong>SozialLëtz.lu</strong>.
                        </div>
                    <?php endif; ?>

                    <form method="post" action="#soumission-citoyenne" class="sl-citizen-form">
                        <?php wp_nonce_field( 'sl_citizen_submit', 'sl_citizen_nonce' ); ?>
                        <div class="grid-x grid-margin-x">
                            <div class="cell medium-6">
                                <label>Nom &amp; Prénom *
                                    <input type="text" name="citizen_name" placeholder="Ex. Jean Muller" required>
                                </label>
                            </div>
                            <div class="cell medium-6">
                                <label>Adresse email *
                                    <input type="email" name="citizen_email" placeholder="jean.muller@exemple.lu" required>
                                </label>
                            </div>
                            <div class="cell medium-6">
                                <label>Objet / Rubrique *
                                    <select name="citizen_category" required>
                                        <option value="sujet-tribune">Proposition de sujet / tribune</option>
                                        <option value="ateliers-jrs">Ateliers &amp; Jeunes Reporters « JRS »</option>
                                        <option value="partenariat">Partenariat / Vie associative</option>
                                        <option value="contact-redaction">Contact rédaction</option>
                                    </select>
                                </label>
                            </div>
                            <div class="cell medium-6">
                                <label>Titre de votre proposition *
                                    <input type="text" name="citizen_title" placeholder="Titre court" required>
                                </label>
                            </div>
                            <div class="cell small-12">
                                <label>Votre message ou proposition *
                                    <textarea name="citizen_content" rows="3" placeholder="Rédigez votre message, idée de sujet ou proposition d'atelier..." required></textarea>
                                </label>
                            </div>
                            <div class="cell small-12">
                                <button type="submit" class="button sl-btn-submit-article">
                                    Envoyer à la rédaction &rarr;
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    'use strict';

    /* Dépliage dynamique "LIRE LA SUITE" / "RÉDUIRE" */
    function toggleTargets(idsStr, expand) {
        if (!idsStr) { return; }
        idsStr.split(',').forEach(function (id) {
            var el = document.getElementById(id.trim());
            if (!el) { return; }
            el.hidden = !expand;
            el.classList.toggle('is-open', expand);
        });
    }

    document.querySelectorAll('[data-sl-expand]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var isExpanded = btn.getAttribute('aria-expanded') === 'true';
            var nextState = !isExpanded;
            btn.setAttribute('aria-expanded', nextState ? 'true' : 'false');
            btn.textContent = nextState ? 'RÉDUIRE' : 'LIRE LA SUITE';
            toggleTargets(btn.getAttribute('data-sl-expand'), nextState);
        });
    });

    /* Onglets dynamiques Charte éditoriale / Code éthique */
    var tabBtns = document.querySelectorAll('[data-sl-tab]');
    var activeTabBtn = document.querySelector('[data-sl-expand-active-tab]');

    function syncActiveTabButton() {
        if (!activeTabBtn) { return; }
        var activePanel = document.querySelector('.sl-tab-panel.is-active');
        if (!activePanel) { return; }
        var extra = activePanel.querySelector('.sl-expandable-content');
        var isOpen = extra ? !extra.hidden : false;
        activeTabBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        activeTabBtn.textContent = isOpen ? 'RÉDUIRE' : 'LIRE LA SUITE';
    }

    tabBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var targetId = btn.getAttribute('data-sl-tab');
            tabBtns.forEach(function (b) {
                var selected = b === btn;
                b.classList.toggle('is-active', selected);
                b.setAttribute('aria-selected', selected ? 'true' : 'false');
            });
            document.querySelectorAll('.sl-tab-panel').forEach(function (panel) {
                var match = panel.id === targetId;
                panel.classList.toggle('is-active', match);
                panel.hidden = !match;
            });
            syncActiveTabButton();
        });
    });

    if (activeTabBtn) {
        activeTabBtn.addEventListener('click', function () {
            var activePanel = document.querySelector('.sl-tab-panel.is-active');
            if (!activePanel) { return; }
            var extras = activePanel.querySelectorAll('.sl-expandable-content');
            var anyHidden = false;
            extras.forEach(function (el) { if (el.hidden) { anyHidden = true; } });
            extras.forEach(function (el) {
                el.hidden = !anyHidden;
                el.classList.toggle('is-open', anyHidden);
            });
            activeTabBtn.setAttribute('aria-expanded', anyHidden ? 'true' : 'false');
            activeTabBtn.textContent = anyHidden ? 'RÉDUIRE' : 'LIRE LA SUITE';
        });
    }
})();
</script>

<?php get_footer(); ?>