$(document).ready(function(){





    $(".shop .header").click(function(){
        show_or_hide(".shop");
    });
    $(".interest .header").click(function(){
        show_or_hide(".interest");
    });
    $(".drow .header").click(function(){
        show_or_hide(".drow");
    });

    $("#ButtonEnter").click(function(){

        $(".register").show(400);
        $(".enter").hide(400);
    });
    $("#CloseButton").click(function(){

        $(".enter").show(400);
        $(".register").hide(400);
    });

//условия проверки первичных данных
    $('#reg_email').blur(function() {
        if($(this).val() != '') {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                $(this).css({'border' : '1px solid #569b44'});
                $('#valid').text('Верно');
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
        }
    });




    $(".register *").change(function() {

        if ($("#reg_email").val() == '')
        {
            $("#Button_submit_userREG").attr("onclick","return true;") ;
        }

    });



});


function show_or_hide(n){

    if($(n+" .main").hasClass("active"))
    {
        $(n+" .main").removeClass("active");
        $(n+" .main").hide(400);
    }
    else{
        $(n+" .main").addClass("active");
        $(n+" .main").show(400);

    }







}