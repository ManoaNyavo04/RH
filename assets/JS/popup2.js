jQuery(document).ready(function($){
    //open popup
    $('.cd-popup-trigger-2').on('click', function(event){
      event.preventDefault();
      $('.cd-popup-2').addClass('is-visible');
    });
    
    //close popup
    $('.cd-popup-2').on('click', function(event){
      if( $(event.target).is('.cd-popup-close-2') || $(event.target).is('.cd-popup-2') ) {
        event.preventDefault();
        $(this).removeClass('is-visible');
      }
    });
    //close popup when clicking the esc keyboard button
    $(document).keyup(function(event){
      if(event.which=='27'){
        $('.cd-popup-2').removeClass('is-visible');
      }
    });
  });
