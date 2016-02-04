/**
 * User: Ivan Pirus
 * Group: B14
 * Date: February 2016
 */
//$("#pagination a").trigger('click'); // When page is loaded we trigger a click

var page =50;
var num_page = 6;
var pagination = "";

if (page == 1) pagination += '<div class="cell_disabled"><span>Перша</span></div><div class="cell_disabled"><span>Попередня</span></div>';
else pagination += '<div class="cell"><a href="#" id="1">Перша</a></div><div class="cell"><a href="#" id="' + (page - 1) + '">Попередня</span></a></div>';

for (var i=0; i<=page; i++) {
    if (i >= 1 && i <= num_page) {
        pagination += '<div';
        if (i == page) pagination += ' class="cell_active"><span>' + i + '</span>';
        else pagination += ' class="cell"><a href="#" id="' + i + '">' + i + '</a>';
        pagination += '</div>';
        console.log("test");
    }
}

if (page == num_page) pagination += '<div class="cell_disabled"><span>Наступна</span></div><div class="cell_disabled"><span>Остання</span></div>';
else pagination += '<div class="cell"><a href="#" id="' + (page + 1) + '">Наступна</a></div><div class="cell"><a href="#" id="' + num_page + '">Остання</span></a></div>';

$('#pagination').html(pagination); // Update pagination result
console.log("included");
   

