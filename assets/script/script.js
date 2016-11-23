$(document).ready( function(){
/*******************************************************************************
 *                   Behaviour of the home button when hover                   *
 *******************************************************************************/

$( ".page-scroll a" ).hover(             // Hover some sort of animation
  function() {
    $( this ).addClass( "hover-button" );
  }, function() {
    $( this ).removeClass( "hover-button" );
  }
);

/*******************************************************************************
 *                         Bootstraps Affix Navbar                             *
 *******************************************************************************/

function correctNavbarBreakpoint () {
    //console.log($("#intro").outerHeight() - $(".navbar").outerHeight());
    $(".navbar").affix({
        offset: {
            top: $("#intro").outerHeight() - ($(".navbar").outerHeight())*1.03
        }
    }); 
}

$(window).on('resize', correctNavbarBreakpoint);
$(document).on('ready load', correctNavbarBreakpoint);


// $(window).on('resize', function() {
//     $windowWidth = $(this).height();
//     console.log($windowWidth);
// });

/*******************************************************************************
 *                      The navigation bar botton                              *
 *******************************************************************************/

 function toggleScrollBar() {
    
 }
/*******************************************************************************
 *                            Google Maps                                      *
 *******************************************************************************/

$(document).on('click', '.hide-direction', function(event) {
  event.preventDefault();
  $('#map_canvas1').slideToggle("slow", function(){
    $('.hide-map').toggleClass('hidden');
    $('.show-map').toggleClass('hidden');
  });
});
/*******************************************************************************
 *                         Scroll to Div of pictures                           *
 *******************************************************************************/


$(document).on('click', '.see-more-button', function() {
    $('html,body').animate({
        scrollTop: $(".heading-before-gallery").offset().top},
        'slow');
});

/*******************************************************************************
 *                         No scroll on the map only zooming                   *
 *******************************************************************************/

 
    $(".google-maps").scroll(function(){
        $("span").text( x+= 1);
    });


/*******************************************************************************
 *                         No until you wanna scroll on the map only zooming                   *
 *******************************************************************************/

        // you want to enable the pointer events only on click;

        $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready
        $('#canvas1').on('click', function () {
            $('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click
        });

        // you want to disable pointer events when the mouse leave the canvas area;

        $("#map_canvas1").mouseleave(function () {
            $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
        }); 
        
  /*******************************************************************************
 *                      Form for Appointment                            *
 *******************************************************************************/
   $(document).on("click",".submit-button", function(event){
        $.ajax({
            url: base_url+"index.php/Cardio_public_c/pre_appointment",
            method: 'POST',
            dataType: "JSON",
            data: $('#appointment').serialize(),
            success: function (resp)
            {
                if (resp.msg=="fail") {
                    alert(resp.msg);
                    $('.error_name').html(resp.error_name);
                    $('.error_email').html(resp.error_email);
                    $('.error_telephone').html(resp.error_telephone);
                    $('.error_message').html(resp.error_message);
                } else {
                    $("#app-form").html(resp);
                }
            }
        });
        event.stopPropagation();
        event.preventDefault();
       });    
  
});