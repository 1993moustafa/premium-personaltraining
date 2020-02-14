
<script>
  jQuery( document ).ready( function($) {
    if ( $( '.menu-toggle' ).is( ':visible' ) ) {
      $( '.main-navigation' ).addClass( 'sfHover' );
      $( '.main-navigation .sub-menu' ).addClass( 'toggled-on' );
    }
  });
</script>

<?php wp_footer(); ?>




</body>
</html>


