@extends('layouts.guest.master-guest')
@section('styles')
<style type="text/css">
    .feature-icon img.icon {
        width: 50px;
        height: 50px;
    }

    .gmap-p {
        padding-left: 0px;
        padding-right: 0px;
    }

    .whyus{
        height:125px;
        background:#626262;
    }

    .whyus .feature-info h4{
        font-size:12pt;
        font-weight:bold;
    }

    .whyus .feature-info p{
        font-size:10pt;
    }

</style>
@stop
@section('content')
@include('pages.guest.slider.index')

@include('pages.guest.whyus.index')

@include('pages.guest.aboutus.index')

@include('pages.guest.feature.index')

@include('pages.guest.visimisi.index')

@include('pages.guest.international.index')

@include('pages.guest.domestic.index')

@include('pages.guest.contact.index')

@include('pages.guest.map.index')

@endsection
