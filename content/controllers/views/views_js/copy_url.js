/**
 * User: Alexander Khupchenko
 * Group: A15
 * Date: April 2016
 */

$(document).ready(function(){

    var client = new ZeroClipboard($("#CopyURL"), {
        moviePath: "ZeroClipboard.swf"
    });

    client.on("load", function(client) {
        client.on("complete", function(client, args) {
            alert(args.text);
        });
    });
});