/**
 * User: Ivan Pirus
 * Group: B14
 * Date: February 2016
 */
$('document').ready(function() {
    $("#pagination a").trigger('click'); // When page is loaded we trigger a click
});

$('#pagination').on('click', 'a', function() { // When click on a 'a' element of the pagination div
    var page = this.id; // Page number is the id of the 'a' element
    var pagination = ''; // Init pagination
    var per_page_ajax = 1e+6; // default value for pagination
    $('#articleArea').html('<img src="Content/images/loader.gif" alt="" style=" overflow: auto;margin: auto;position: absolute; top: 0; left: 0; bottom: 0; right: 0;" />'); // Display a processing icon
<<<<<<< HEAD
    //ajax, get value for pagination
    $.get('Content/Controllers/ajax_type_pagination.php', {type: 'type'}, function(data){

        per_page_ajax = parseInt(data);
    });
    per_page_ajax = 4; // I recover error and will be fix bug later
    var data = {page: page, per_page: per_page_ajax}; // Create JSON which will be sent via Ajax

=======
    var data = {page: page, per_page: 4}; // Create JSON which will be sent via Ajax
    // We set up the per_page var at 4. You may change to any number you need.
>>>>>>> c3cc0b5a594f6f9b9267845b0f8a1faa6ece9567

    $.ajax({ // jQuery Ajax
        type: 'POST',
        url: 'Content/Controllers/con_pagination.php', // URL to the PHP file which will insert new value in the database
        data: data, // We send the data string
        dataType: 'json', // Json format
        timeout: 3000,
        success: function(data) {
            $('#articleArea').html(data.articleList); // We update the articleArea DIV with the article list

            // Pagination system
            if (page == 1) pagination += '<div class="cell_disabled"><span>Перша</span></div><div class="cell_disabled"><span>Попередня</span></div>';
            else pagination += '<div class="cell"><a href="#" id="1">Перша</a></div><div class="cell"><a href="#" id="' + (page - 1) + '">Попередня</span></a></div>';

            for (var i=parseInt(page)-3; i<=parseInt(page)+3; i++) {
                if (i >= 1 && i <= data.numPage) {
                    pagination += '<div';
                    if (i == page) pagination += ' class="cell_active"><span>' + i + '</span>';
                    else pagination += ' class="cell"><a href="#" id="' + i + '">' + i + '</a>';
                    pagination += '</div>';
                }
            }

            if (page == data.numPage) pagination += '<div class="cell_disabled"><span>Наступна</span></div><div class="cell_disabled"><span>Остання</span></div>';
            else pagination += '<div class="cell"><a href="#" id="' + (parseInt(page) + 1) + '">Наступна</a></div><div class="cell"><a href="#" id="' + data.numPage + '">Остання</span></a></div>';

            $('#pagination').html(pagination); // We update the pagination DIV
        },
        error: function() {
        }
    });
    return false;
});



