var $ = require('jquery');

$(document).ready(function() {

    var source   = $('#entry-template').html();
    var template = Handlebars.compile(source);

    $.ajax ({
        'url': '../versione-php/database_dischi.php',
        'method': 'GET',
        'success': function (data) {

            for (var i = 0; i < data.length; i++) {
                var disco_corrente = data[i];

                var poster = disco_corrente.poster;
                var title = disco_corrente.title;
                var author = disco_corrente.author;
                var year = disco_corrente.year;

                var cd = {
                    'copertina': poster,
                    'titolo': title,
                    'autore': author,
                    'anno': year
                }

                var html = template(cd);

                $('main section').append(html);
            }
        },
        'error': function () {
            console.log('ERRORE!!');
        },
    });

});
