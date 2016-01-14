$.ajax({
    url: 'Content/Controllers/main_title.php?action=sample1',
    success: function(DataRespons) {
        $('.results').html(DataRespons);
    }
});
//var text = "Java";
//$(document).ready(function () {
//    $('h2#language').text(text);
//});
console.log("Included");


