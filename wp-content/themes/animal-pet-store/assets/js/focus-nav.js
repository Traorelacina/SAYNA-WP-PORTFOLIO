( function( window, document ) {
  function animal_pet_store_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const animal_pet_store_nav = document.querySelector( '.sidenav' );
      if ( ! animal_pet_store_nav || ! animal_pet_store_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...animal_pet_store_nav.querySelectorAll( 'input, a, button' )],
        animal_pet_store_lastEl = elements[ elements.length - 1 ],
        animal_pet_store_firstEl = elements[0],
        animal_pet_store_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && animal_pet_store_lastEl === animal_pet_store_activeEl ) {
        e.preventDefault();
        animal_pet_store_firstEl.focus();
      }
      if ( shiftKey && tabKey && animal_pet_store_firstEl === animal_pet_store_activeEl ) {
        e.preventDefault();
        animal_pet_store_lastEl.focus();
      }
    } );
  }
  animal_pet_store_keepFocusInMenu();
} )( window, document );