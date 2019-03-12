import $ from 'jquery';

function load() {
    $(window).on('load', function(){
      $('.js-load-bg').hide();
    });
}

export default load;