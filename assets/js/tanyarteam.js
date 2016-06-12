// A $( document ).ready() block.
$(document).ready(function() {
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    var fieldsetn = 1;
    var emailantigo;
    var passval;
    var content = $('.form_body input').val();
    var emailVal = $('input[name="email"]').val();
    emailantigo = emailVal.toString();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    //reposição de texto
    //email
    // $('input[name="email"]').focus(function() {
    //     if ($('input[name="email"]').hasClass('warning') === true && fieldsetn == 1) {
    //         $('input[name="email"]').val(emailantigo);
    //     }
    // });
    // Function that validates email address through a regular expression.

    //algumas partes de css
    //select tiporegisto

    // $(".step_1").change(function() {
    //     if ($(".step_1").val() != "0") {
    //         $('.step_1').addClass('step_active');
    //     }
    // });

    //click
    // $(".next").click(function() {
    //             var erros = 0;
    //             //verificação de erros no primeiro fieldset
    //             if (fieldsetn == 1) {
    //                 //teste de email
    //                 var emailVal = $('input[name="email"]').val();
    //                 emailantigo = emailVal.toString();
    //                 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    //
    //                 if ($('input[name="email"]').val().length === 0) {
    //                     $('input[name="email"]').addClass('warning');
    //                     $('input[name="email"]').attr("placeholder", "ایمیل خود را درست وارد نکرده اید :(");
    //                     erros = 1;
    //                 } else if (!emailReg.test(emailVal)) {
    //                     $('input[name="email"]').attr("placeholder", "ایمیل خود را درست وارد نکرده اید :(");
    //                     $('input[name="email"]').addClass('warning');
    //                     $('input[name="email"]').val('');
    //                     erros = 1;
    //                 } else {
    //                     $('input[name="email"]').removeClass('warning');
    //                 }
    //               }})


    $('.goal input[type="radio"]').change(function() {
        $('.goal_desc').slideDown('slow/400/fast', function() {

        });
    });
    $('.damage input[type="radio"]').change(function() {
        $('.damage_desc').slideDown('slow/400/fast', function() {

        });
    });
    $('.history input[type="radio"]').change(function() {
        $('.history_desc_1').slideDown('slow/400/fast');
        $('.history_desc_2').slideDown('slow/400/fast');



    });

    $('.next_1').click(function() {
        var valueEmail = $('#step_1 input[type="email"]').val();

        if ($.trim(valueEmail).length == 0 || !validateEmail(valueEmail)) {
            $('#step_1 input[type="email"]').addClass('warning');
            $('#step_1 input[type="email"]').attr("placeholder", "ایمیل خود را درست وارد نکرده اید :(");
        } else {
            $('#step_1 input[type="email"]').removeClass('warning');
            $('.step_2').addClass('step_active');
            $('.tab-pane#step_1').removeClass('active');
            $('.tab-pane#step_2').addClass('active');
        }
    });
    // Function that validates email address through a regular expression.
    function validateEmail(valueEmail) {
        var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (filter.test(valueEmail)) {
            return true;
        } else {
            return false;
        }
    }
    $('.next_2').click(function() {
        if ($('#step_2 input[type="text"]').val().length == 0) {
            $('#step_2 input[type="text"]').addClass('warning');
            $('#step_2 input[type="text"]').attr("placeholder", "لطفا نام خود را وارد کنید :(");
        } else {
            $('#step_2 input[type="text"]').removeClass('warning');
            $('.step_3').addClass('step_active');
            $('.tab-pane#step_2').removeClass('active');
            $('.tab-pane#step_3').addClass('active');
        }
    });
    $('.prev_2').click(function() {
        $('.tab-pane#step_2').removeClass('active');
        $('.tab-pane#step_1').addClass('active');
        $('.step_2').removeClass('step_active');

    });
    $('.next_3').click(function() {
        if ($('#step_3 input[type="text"]').val().length == 0) {
            $('#step_3 input[type="text"]').addClass('warning');
            $('#step_3 input[type="text"]').attr("placeholder", "لطفا نام خود را وارد کنید :(");
        } else {
            $('#step_3 input[type="text"]').removeClass('warning');
            $('.step_4').addClass('step_active');
            $('.tab-pane#step_3').removeClass('active');
            $('.tab-pane#step_4').addClass('active');
        }
    });
    $('.prev_3').click(function() {
        $('.tab-pane#step_3').removeClass('active');
        $('.tab-pane#step_2').addClass('active');
        $('.step_3').removeClass('step_active');

    });
    $('.next_4').click(function() {
        if ($('#step_4 input[type="radio"]').val().length == 0) {
            $('#step_4 input[type="radio"]').addClass('warning');
            $('#step_4 input[type="radio"]').attr("placeholder", "لطفا نام خود را وارد کنید :(");
        } else {
            $('#step_4 input[type="radio"]').removeClass('warning');
            $('.step_5').addClass('step_active');
            $('.tab-pane#step_4').removeClass('active');
            $('.tab-pane#step_5').addClass('active');
        }
    });
    $('.prev_4').click(function() {
        $('.tab-pane#step_4').removeClass('active');
        $('.tab-pane#step_3').addClass('active');
        $('.step_4').removeClass('step_active');

    });
    $('.next_5').click(function() {
        if ($('#step_5 input[type="radio"]').val().length == 0) {
            $('#step_5 input[type="radio"]').addClass('warning');
            $('#step_4 input[type="radio"]').attr("placeholder", "لطفا نام خود را وارد کنید :(");
        } else {
            $('#step_5 input[type="radio"]').removeClass('warning');
            $('.step_6').addClass('step_active');
            $('.tab-pane#step_5').removeClass('active');
            $('.tab-pane#step_6').addClass('active');
        }
    });
    $('.prev_5').click(function() {
        $('.tab-pane#step_5').removeClass('active');
        $('.tab-pane#step_4').addClass('active');
        $('.step_5').removeClass('step_active');

    });
    $('.next_6').click(function() {
        if ($('#step_5 input[type="radio"]').val().length == 0) {
            $('#step_5 input[type="radio"]').addClass('warning');
            $('#step_4 input[type="radio"]').attr("placeholder", "لطفا نام خود را وارد کنید :(");
        } else {
            $('#step_5 input[type="radio"]').removeClass('warning');
            $('.step_6').addClass('step_active');
            $('.tab-pane#step_5').removeClass('active');
            $('.tab-pane#step_6').addClass('active');
        }
    });
    $('.prev_6').click(function() {
        $('.tab-pane#step_6').removeClass('active');
        $('.tab-pane#step_5').addClass('active');
        $('.step_6').removeClass('step_active');

    });

});
