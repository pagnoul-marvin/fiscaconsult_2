@extends('layouts.site')

@section('title', 'FiscaConsult – Comptable à Liège, Crisnée & Herve | Olivier Pagnoul')
@section('description', 'FiscaConsult – Expert-comptable fiscaliste à Crisnée et Herve. Olivier Pagnoul et Nathalie Brugmans accompagnent indépendants, PME et professions libérales depuis 1989.')
@section('canonical', config('site.url'))

@section('content')
    <h1 class="page_heading hidden"><span itemprop="name">FiscaConsult</span> – Comptable &agrave; Li&egrave;ge, Crisn&eacute;e & Herve</h1>

    <livewire:welcome-page.presentation/>
    <livewire:welcome-page.inter/>
    <livewire:welcome-page.expertise/>

    <section class="page_cta">
        <p class="page_cta_text">D&eacute;couvrez notre &eacute;quipe, notre cabinet et notre mission, ou contactez-nous directement.</p>
        <div class="page_cta_btns">
            <a href="{{ route('about') }}" class="primary_btn" title="En savoir plus sur FiscaConsult">&Agrave; propos</a>
            <a href="{{ route('contact') }}" class="secondary_btn" title="Nous contacter">Contact</a>
        </div>
    </section>
@endsection
