@extends('layouts.site')

@section('title', 'Mentions légales – FiscaConsult')
@section('description', 'Mentions légales et politique de confidentialité de FiscaConsult SRL, expert-comptable fiscaliste à Herve et Crisnée (Belgique).')
@section('canonical', config('site.url').'/mentions-legales')

@section('content')
    <article class="page_legal">
        <h1 class="page_heading">Mentions l&eacute;gales</h1>

        <section class="page_legal_section">
            <h2 class="page_legal_title primary_title">&Eacute;diteur du site</h2>
            <div class="page_legal_content">
                <p><strong itemprop="name">FISCA CONSULT <abbr class="abbr" title="Société à Responsabilité Limitée" lang="fr">SRL</abbr></strong></p>
                <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <span itemprop="streetAddress">Rue Ann-Sophie Charlier, 29/7</span><br>
                    <span itemprop="postalCode">4650</span> <span itemprop="addressLocality">Herve</span>, Belgique
                </p>
                <p><abbr title="Banque-Carrefour des Entreprises" lang="fr" class="abbr">BCE</abbr>&nbsp;: BE0811.531.494</p>
                <p><abbr title="Institute for Tax Advisors and Accountants" lang="en" class="abbr">ITAA</abbr>&nbsp;: 50.433.936</p>
                <p>Responsable de publication&nbsp;: Olivier Pagnoul</p>
                <p>Contact&nbsp;: <a class="link" href="mailto:olivier.pagnoul@fiscaconsult.com" itemprop="email">olivier.pagnoul@fiscaconsult.com</a></p>
                <p>T&eacute;l&eacute;phone&nbsp;: <a class="link" href="tel:+32476262639" itemprop="telephone">+32 (0) 476.26.26.39</a></p>
            </div>
        </section>

        <section class="page_legal_section">
            <h2 class="page_legal_title primary_title">Bureaux</h2>
            <div class="page_legal_content">
                <p><strong>Herve</strong> &mdash; Rue Ann-Sophie Charlier, 29/7, 4650 Herve</p>
                <p><strong>Crisn&eacute;e</strong> &mdash; Grand&apos;Route 18A (Centre d&apos;Affaires CLEBC), 4367 Crisn&eacute;e</p>
            </div>
        </section>

        <section class="page_legal_section">
            <h2 class="page_legal_title primary_title">H&eacute;bergement</h2>
            <div class="page_legal_content">
                <p>Le site est h&eacute;berg&eacute; par le prestataire d&apos;h&eacute;bergement du domaine <strong>fiscaconsult.com</strong>. Pour toute question relative &agrave; l&apos;h&eacute;bergement, veuillez nous contacter &agrave; l&apos;adresse ci-dessus.</p>
            </div>
        </section>

        <section class="page_legal_section">
            <h2 class="page_legal_title primary_title">Propri&eacute;t&eacute; intellectuelle</h2>
            <div class="page_legal_content">
                <p>L&apos;ensemble des contenus pr&eacute;sents sur ce site (textes, images, graphismes, logo) est la propri&eacute;t&eacute; exclusive de FiscaConsult SRL, sauf mention contraire. Toute reproduction, repr&eacute;sentation ou diffusion, totale ou partielle, sans autorisation pr&eacute;alable &eacute;crite est interdite.</p>
            </div>
        </section>

        <section class="page_legal_section">
            <h2 class="page_legal_title primary_title">Protection des donn&eacute;es personnelles (RGPD)</h2>
            <div class="page_legal_content">
                <p>Conform&eacute;ment au R&egrave;glement g&eacute;n&eacute;ral sur la protection des donn&eacute;es (RGPD) et &agrave; la loi belge du 30 juillet 2018, vous disposez d&apos;un droit d&apos;acc&egrave;s, de rectification, d&apos;effacement, de limitation et d&apos;opposition au traitement de vos donn&eacute;es personnelles.</p>
                <p>Les donn&eacute;es collect&eacute;es via ce site (courriels, appels t&eacute;l&eacute;phoniques) sont utilis&eacute;es uniquement dans le cadre de la relation professionnelle avec FiscaConsult. Elles ne sont ni vendues ni c&eacute;d&eacute;es &agrave; des tiers.</p>
                <p>Pour exercer vos droits ou pour toute question relative &agrave; vos donn&eacute;es, contactez-nous &agrave; <a class="link" href="mailto:olivier.pagnoul@fiscaconsult.com">olivier.pagnoul@fiscaconsult.com</a>.</p>
                <p>Vous pouvez &eacute;galement introduire une r&eacute;clamation aupr&egrave;s de l&apos;<abbr title="Autorité de protection des données" class="abbr" lang="fr">APD</abbr> (Autorit&eacute; de protection des donn&eacute;es).</p>
            </div>
        </section>

        <section class="page_legal_section">
            <h2 class="page_legal_title primary_title">Cookies</h2>
            <div class="page_legal_content">
                <p>Ce site vitrine n&apos;utilise pas de cookies de suivi ou de publicit&eacute;.</p>
            </div>
        </section>

        <section class="page_legal_section">
            <h2 class="page_legal_title primary_title">Cr&eacute;dits</h2>
            <div class="page_legal_content">
                <p>Site cr&eacute;&eacute; par Marvin Pagnoul et <a class="link" href="https://www.homtimiste.com/" hreflang="fr" title="Voir le portfolio de Maxime Pagnoul">Maxime Pagnoul</a>.</p>
            </div>
        </section>
    </article>
@endsection
