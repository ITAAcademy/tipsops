function HideAndDisplayNew(url) {
    $(document).ready(function () {
        $("#log_reg_button").click(function () {
            $("#log_form").after("<p id='to_reg_page'></p>").remove();
        });
    });

}


