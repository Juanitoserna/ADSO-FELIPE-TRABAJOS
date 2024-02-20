@extends('layouts.landing')
@section('title','Pagina Services')
@section('content')
    <h1>Este es el inicio de vista services</h1>
    @component('_components.card')
        @slot('title','card principal')
        
        @slot('content','Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum explicabo vero perspiciatis debitis corrupti tempora, iure adipisci libero, nisi, aliquid incidunt! Adipisci illo, cupiditate rem vero itaque ratione quae nam!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem incidunt eius culpa assumenda consequuntur magni vero consectetur, doloremque deleniti vel quasi non, nam obcaecati reiciendis modi est labore, accusamus laborum.')

        
        
    @endcomponent
@endsection