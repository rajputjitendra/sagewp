
@if ( has_custom_logo() ) 
    @php $logo_url = wp_get_attachment_url(get_theme_mod( 'custom_logo' )); @endphp
    @if($logo_url)
      @php $logo   = '<img src="' . $logo_url . '" class="footerLogo" >'; @endphp
    @else
      @php $logo   = get_bloginfo( 'name' );  @endphp
    @endif
    @php $output = $logo; @endphp
@endif
<footer class="content-info footer">
   <div class="container">
   {!! $output !!}
   </div>
</footer>
