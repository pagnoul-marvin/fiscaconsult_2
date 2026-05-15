@extends('layouts.site')

@section('title', 'À propos – FiscaConsult | Expert-comptable à Herve et Crisnée')
@section('description', 'Découvrez FiscaConsult : Olivier Pagnoul et Nathalie Brugmans, experts-comptables fiscalistes à Herve et Crisnée depuis 1989. Une équipe à taille humaine, 100 % digitalisée.')
@section('canonical', config('site.url').'/a-propos')

@section('content')
    <h1 class="page_heading">&Agrave; propos de <span itemprop="name">FiscaConsult</span></h1>

    <section class="page_seo" aria-labelledby="seo-herve-title">
        <h2 id="seo-herve-title" class="page_seo_title primary_title">Votre expert-comptable &agrave; Herve</h2>
        <div class="page_seo_content">
            <p>Depuis 1989, <strong>FiscaConsult</strong> accompagne les entrepreneurs et les particuliers de la r&eacute;gion de <strong>Herve</strong>, de <strong>Verviers</strong> et du pays de Li&egrave;ge. Notre bureau situ&eacute; <strong>rue Ann-Sophie Charlier, 29/7 &agrave; Herve (4650)</strong> accueille les ind&eacute;pendants, les <abbr title="Petites et moyennes entreprises" class="abbr" lang="fr">PME</abbr>, les professions m&eacute;dicales et param&eacute;dicales ainsi que les professions lib&eacute;rales qui recherchent un <strong>comptable &agrave; Herve</strong> r&eacute;actif et proche de leurs pr&eacute;occupations.</p>
            <p>En tant qu&apos;<strong>experts-comptables fiscalistes</strong>, Olivier Pagnoul et Nathalie Brugmans g&egrave;rent personnellement chaque dossier : pas de secr&eacute;tariat interm&eacute;diaire, pas de turnover. Vous &eacute;changez directement avec votre expert, ce qui garantit un suivi sur mesure, de la cr&eacute;ation d&apos;entreprise &agrave; la cession ou la liquidation. Notre approche proactive vous aide &agrave; anticiper vos obligations fiscales et sociales plut&ocirc;t que de les subir.</p>
            <p>Notre cabinet est enti&egrave;rement digitalis&eacute; : transmission s&eacute;curis&eacute;e des documents, plateforme collaborative, facturation &eacute;lectronique via <abbr title="Pan-European Public Procurement On-Line" class="abbr" lang="en">PEPPOL</abbr>. Que vous soyez artisan, commer&ccedil;ant, professionnel de sant&eacute; ou dirigeant de PME, nous mettons notre expertise comptable et fiscale au service de votre activit&eacute; &agrave; Herve et dans les communes environnantes.</p>
        </div>
    </section>

    <livewire:welcome-page.team/>
    <livewire:welcome-page.office/>
    <livewire:welcome-page.mission/>
    <livewire:welcome-page.entrepreneur/>

    <section class="page_seo" aria-labelledby="seo-crisnee-title">
        <h2 id="seo-crisnee-title" class="page_seo_title primary_title">Votre comptable &agrave; Crisn&eacute;e</h2>
        <div class="page_seo_content">
            <p>Pour faciliter l&apos;acc&egrave;s &agrave; nos services dans le sud-est du pays de Li&egrave;ge, FiscaConsult dispose &eacute;galement d&apos;un point de contact au <strong>Centre d&apos;Affaires CLEBC</strong>, <strong>Grand&apos;Route 18A &agrave; Crisn&eacute;e (4367)</strong>. Les clients de Crisn&eacute;e, Fl&eacute;ron, Awans et des environs b&eacute;n&eacute;ficient du m&ecirc;me accompagnement personnalis&eacute; que ceux de Herve : comptabilit&eacute;, fiscalit&eacute;, paie et gestion administrative.</p>
            <p>Si vous recherchez un <strong>comptable &agrave; Crisn&eacute;e</strong> pour votre activit&eacute; ind&eacute;pendante ou votre soci&eacute;t&eacute;, FiscaConsult vous propose un interlocuteur unique, exp&eacute;riment&eacute; et disponible. Nous connaissons les r&eacute;alit&eacute;s des entrepreneurs locaux et adaptons nos conseils &agrave; votre secteur d&apos;activit&eacute;, qu&apos;il s&apos;agisse du b&acirc;timent, du commerce, des soins de sant&eacute; ou des services aux entreprises.</p>
            <p>Les deux bureaux &mdash; Herve et Crisn&eacute;e &mdash; partagent les m&ecirc;mes valeurs : proximit&eacute;, transparence, r&eacute;activit&eacute; et modernit&eacute;. Prenez rendez-vous par t&eacute;l&eacute;phone ou par e-mail pour discuter de vos besoins comptables et fiscaux. Nous serons ravis de vous pr&eacute;senter notre m&eacute;thode de travail et la mani&egrave;re dont nous pouvons soutenir votre d&eacute;veloppement.</p>
        </div>
    </section>
@endsection
