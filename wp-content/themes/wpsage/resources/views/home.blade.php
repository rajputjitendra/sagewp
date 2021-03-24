@extends('layouts.appcustom')


@section('content')
<header class="woocommerce-products-header">
    <div class="container">
        @if(apply_filters('woocommerce_show_page_title', true))
        <h1 class="woocommerce-products-header__title page-title">{!! woocommerce_page_title(false) !!}</h1>
        @endif

        @php
        do_action('woocommerce_archive_description');
        @endphp
    </div>
  </header>
    <div class="wcProduct">
        <div class="container">
        {!! do_shortcode('[products columns="3"]') !!}
        </div>
    </div>
   
@endsection