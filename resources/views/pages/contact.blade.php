@extends('layouts.site')

@section('title', 'Contact – FiscaConsult | Comptable à Herve et Crisnée')
@section('description', 'Contactez FiscaConsult à Herve (rue Ann-Sophie Charlier 29/7) ou à Crisnée (CLEBC, Grand\'Route 18A). Olivier Pagnoul et Nathalie Brugmans, experts-comptables fiscalistes.')
@section('canonical', config('site.url').'/contact')

@section('content')
    <h1 class="page_heading">Nous contacter</h1>

    @include('partials.sections.contact')
@endsection
