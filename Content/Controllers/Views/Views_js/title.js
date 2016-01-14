$(document).ready(function(){
    $('button#button').click(function(){
        var title = this.name;
        $('h2#language').text(title);
    });
});


