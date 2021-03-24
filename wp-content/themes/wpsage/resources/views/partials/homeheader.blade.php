@if ( has_custom_logo() ) 
    @php $logo_url = wp_get_attachment_url(get_theme_mod( 'custom_logo' )); @endphp
    @if($logo_url)
      @php $logo   = '<img src="' . $logo_url . '" class="custLogo" >'; @endphp
    @else
      @php $logo   = get_bloginfo( 'name' );  @endphp
    @endif
    @php $output = $logo; @endphp
@endif

<header class="banner homeheader">
  <div class="container">
    <div class="headContent">
    <a class="brand" href="{{ home_url('/') }}">
      {!! $output !!}
    </a>

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      @endif
    </nav>
  </div>
</div>
</header>
