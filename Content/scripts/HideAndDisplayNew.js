function HideAndDisplayNew(buttonId, firstId, secondId ) {
    $(document).ready(function () {
        $(buttonId).click(function () {
            $(firstId).hide();
            $(secondId).show();
        });
    });

}


//$("#hide").click(function(){
//    $("p").hide();
//});
//
//$("#show").click(function(){
//    $("p").show();
//});

//function HideAndDisplayNew(buttonId, firstId, secondId ) {
//    $(document).ready(function () {
//        $("#log_reg_button").click(function () {
//            $("#log_form").hide();
//            $("#reg_form").show();
//        });
//
//
//    });
//
//}