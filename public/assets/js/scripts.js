 // Snackbar
 var showAlert = function(type, body, title = null) {
    function getBackgroundColor() {
        switch (type) {
            case 'success':
                return '#28a745';
                break;

            case 'info':
                return '#007bff';
                break;

            case 'danger':
                return '#dc3545';
                break;

            default:
                return '#323232';
                break;
        }
    }
    Snackbar.show({
        text: body
        , pos: 'bottom-right'
        , backgroundColor: getBackgroundColor(),
        actionTextColor: type == 'default' ? '#4CAF50' : '#ffc107'
    });
}


//clock script
const clocks = document.getElementsByClassName("clock");

function updateClocks() {
  for (let clock of clocks) {
    let timezone = clock.dataset.timezone;
    let time = new Date().toLocaleTimeString("en-US", {
      hour: '2-digit',
      minute: '2-digit',
      //second: '2-digit',
      timeZone: timezone
    });
    clock.textContent = time;
  }
}

// Update every minute:
setInterval(updateClocks, 60000);
updateClocks();


//Counter script

$(document).ready(function($) {
    //Check if an element was in a screen
    function isScrolledIntoView(elem){
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return ((elemBottom <= docViewBottom));
    }
    //Count up code
    function countUp() {
        $('.counter').each(function() {
          var $this = $(this), // <- Don't touch this variable. It's pure magic.
              countTo = $this.attr('data-count');
              ended = $this.attr('ended');

        if ( ended != "true" && isScrolledIntoView($this) ) {
            $({ countNum: $this.text()}).animate({
            countNum: countTo
          },
          {
            duration: 1500, //duration of counting
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
          });
        $this.attr('ended', 'true');
        }
        });
    }
    //Start animation on page-load
    if ( isScrolledIntoView(".counter") ) {
        countUp();
    }
    //Start animation on screen
    $(document).scroll(function() {
        if ( isScrolledIntoView(".counter") ) {
            countUp();
        }
    });
});



//Register Form Script

$(function(){
  $('#married').click(function(){
    if($(this).is(':checked')){
      $('#hidemarriedinfo').show();

    }else{
      $('#hidemarriedinfo').hide();
    }
  });
 });
 


  $(function(){
  $('#haschild').click(function(){
    if($(this).is(':checked')){
      $('#hidechildinfo').show();

    }else{
      $('#hidechildinfo').hide();
    }
  });
 });
 $(function(){
  $('#no').click(function(){
    if($(this).is(':checked')){
      $('#diffadress').show();

    }else{
      $('#diffadress').hide();
    }
  });
 });