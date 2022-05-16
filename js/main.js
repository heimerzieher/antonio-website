var eastereggLoaded = false;
const eastereggKeys = [115, 112, 97, 114];
var eastereggCurrKey = 0;

$(document).ready(function(){
    $(document).on('keypress', function(ev) {
        if (eastereggLoaded) {
            if (ev.which == 115)
                KICKASSGAME.addPlayer();
        } else {
            if(ev.which == eastereggKeys[eastereggCurrKey]) {
                eastereggCurrKey++;

                if (eastereggCurrKey == eastereggKeys.length) {
                    eastereggLoaded = true;
                    $('body').append($('<script>').attr('src', 'https:////hi.kickassapp.com/kickass.js'));
                    let countdown = 20;
                    let timerId = setInterval(function(){ $('iframe.KICKASSELEMENT').remove(); if (--countdown <= 0) { clearInterval(timerId); console.log('end'); } }, 200);
                }
            } else {
                eastereggCurrKey = 0;
            }
        }
    });
});
