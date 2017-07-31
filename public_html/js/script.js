$(document).ready(function () {

    //Close Footer 

    $('#close-icon').click(function () {
        $('#footer').hide();
    });


    // Datepicker

    $(function () {
        $(".datepicker").datepicker();
    });

// Event/Restaurant login form change 

    $('#rest-btn').click(function () {
       console.log('Hello');
       $('#first-form').show();
       $('#booking-events').hide();
        $('#rest-btn').css("background-color", "firebrick");
        $('#event-btn').css("background-color", "#252525");
    });
    
     $('#event-btn').click(function () {
       console.log('Hello');
       $('#first-form').hide();
       $('#booking-events').show();
               $('#rest-btn').css("background-color", "#252525");
        $('#event-btn').css("background-color", "firebrick");
    });

    // Register or login form change 

    $('#loginCTA').click(function () {
        $('#register').hide();
        $('#login').show();
        $('#abtUsBtn').show();
        $('#loginCTA').css("background-color", "firebrick");
        $('#registerCTA').css("background-color", "gray");
    });

    $('#registerCTA').click(function () {
        $('#login').hide();
        $('#register').show();
        $('#abtUsBtn').hide();
        $('#registerCTA').css("background-color", "firebrick");
        $('#loginCTA').css("background-color", "gray");
    });

    // Form Style change on click //


    $('#loginInput1').click(function () {
        $('#loginInput1').css('background-color', "firebrick");
        $('#loginInput2').css('background-color', "black");
    });

    $('#loginInput2').click(function () {
        $('#loginInput2').css('background-color', "firebrick");
        $('#loginInput1').css('background-color', "black");
    });


    $('#registerInput1').click(function () {
        $('#registerInput1').css('background-color', "firebrick");
        $('#registerInput2').css('background-color', "black");
        $('#registerInput3').css('background-color', "black");
        $('#registerInput4').css('background-color', "black");
    });

    $('#registerInput2').click(function () {
        $('#registerInput2').css('background-color', "firebrick");
        $('#registerInput1').css('background-color', "black");
        $('#registerInput3').css('background-color', "black");
        $('#registerInput4').css('background-color', "black");


    });

    $('#registerInput3').click(function () {
        $('#registerInput3').css('background-color', "firebrick");
        $('#registerInput1').css('background-color', "black");
        $('#registerInput2').css('background-color', "black");
        $('#registerInput4').css('background-color', "black");


    });

    $('#registerInput4').click(function () {
        $('#registerInput4').css('background-color', "firebrick");
        $('#registerInput1').css('background-color', "black");
        $('#registerInput2').css('background-color', "black");
        $('#registerInput3').css('background-color', "black");


    });

    //Slick

    $('.slideshow').slick();

});