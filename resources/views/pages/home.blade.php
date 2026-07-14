@extends('layouts.site')

@section('title', 'FiscaConsult – Comptable à Liège, Crisnée & Herve | Olivier Pagnoul')
@section('description', 'FiscaConsult – Expert-comptable fiscaliste à Crisnée et Herve. Olivier Pagnoul et Nathalie Brugmans accompagnent indépendants, PME et professions libérales depuis 1989.')
@section('canonical', config('site.url'))

@push('head')
    <link rel="preload" as="image"
          href="{{ asset('assets/images/optimized/office_3-400.webp') }}"
          imagesrcset="{{ asset('assets/images/optimized/office_3-400.webp') }} 400w, {{ asset('assets/images/optimized/office_3-600.webp') }} 600w, {{ asset('assets/images/optimized/office_3-800.webp') }} 800w"
          imagesizes="(max-width: 920px) 100vw, 50vw">
@endpush

@section('content')
    <h1 class="page_heading hidden"><span itemprop="name">FiscaConsult</span> – Comptable &agrave; Li&egrave;ge, Crisn&eacute;e & Herve</h1>

    @include('partials.sections.presentation')
    @include('partials.sections.inter')
    @include('partials.sections.expertise')

    <section class="page_cta">
        <p class="page_cta_text">D&eacute;couvrez notre &eacute;quipe, notre cabinet et notre mission, ou contactez-nous directement.</p>
        <div class="page_cta_btns">
            <a href="{{ route('about') }}" class="primary_btn" title="En savoir plus sur FiscaConsult">&Agrave; propos</a>
            <a href="{{ route('contact') }}" class="secondary_btn" title="Nous contacter">Contact</a>
        </div>
    </section>
@endsection
