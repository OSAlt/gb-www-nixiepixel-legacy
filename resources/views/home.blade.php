@extends('layouts.base')
@section('title', 'NixiePixel')
@section('content')

    <a data-scroll id="toTop" href="#" class="btn btn-light"><i class="fa fa-angle-double-up"></i></a>

    @if(Session::has('email-sent'))
        <div class="alert alert-success alert-dismissible text-center mb-0 w-100" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <span>{{ session('email-sent') }}</span>
        </div>
    @endif

    <section data-scroll id="intro">
        <div id="headerImg"></div>
        <a data-scroll href="#about"><span class="fa fa-chevron-down"></span></a>
    </section>

    @component('components.sections.about')@endcomponent

    @component('components.sections.stats')@endcomponent

    @component('components.sections.media', ['media'=>$media])@endcomponent

    @component('components.sections.geekbeacon')@endcomponent

    @component('components.sections.contact', ['subjects'=>$subjects])@endcomponent

@endsection