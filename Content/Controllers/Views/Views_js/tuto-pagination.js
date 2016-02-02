
        //$("#pagination a").trigger('click'); // When page is loaded we trigger a click

        var page =50;
        var num_page = 5;
        var pagination = "";

        if (page == 1) pagination += '<div class="cell_disabled"><button>Перша</button></div><div class="cell_disabled"><button>Попередня</button></div>';
        else pagination += '<div class="cell"><a href="#" id="1"><button type="button" class="btn btn-info btn-xs" class="cell">Перша</button></div><div class="cell"><a href="#" id="' + (page - 1)
            + '"><button type="button" class="btn btn-info btn-xs">Попередня</button></a></div>';

        for (var i=0; i<=page; i++) {
            if (i >= 1 && i <= num_page) {
                pagination += '<div';
                if (i == page) pagination += ' class="cell_active"><span>' + i + '</span>';
                else pagination += ' class="cell"><a href="#" id="' + i + '">' + i + '</a>';
                pagination += '</div>';
                console.log("test");
            }
        }

        if (page == num_page) pagination += '<div class="cell_disabled"><button type="button" class="btn btn-info btn-xs">Наступна</button>' +
            '</div><div class="cell_disabled"><button type="button" class="btn btn-info btn-xs">Остання</button></div>';
        else pagination += '<div class="cell"><a href="#" id="' + (page + 1) + '"><button type="button" class="btn btn-info btn-xs">Наступна</button></div><div class="cell"><a href="#" id="' + num_page + '"><button type="button" class="btn btn-info btn-xs">Остання</button></a></div>';

        $('#pagination').html(pagination); // Update pagination result
        console.log("included");

