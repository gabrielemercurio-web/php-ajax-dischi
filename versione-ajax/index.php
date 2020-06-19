<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajax Dischi</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../public/app.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    </head>
    <body>

        <header>
            <div class="header container">
                <img src="../logo.png" alt="logo">
            </div>
        </header>

        <main>
            <div class="container">
                <section id="filtro">
                    <div>
                        <select class="filtro">
                            <option value="Tutti">Tutti</option>
                            <option value="Metal">Metal</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                        </select>
                    </div>
                </section>

                <section id="card">
                </section>
            </div>
        </main>

        <!-- HANDLEBARS -->
        <script id="entry-template" type="text/x-handlebars-template">
            <div class="card">
                <img src="{{ copertina }}" alt="poster">
                <h4>{{ titolo }}</h4>
                <p>{{ autore }}</p>
                <p>{{ anno }}</p>
            </div>
        </script>

        <script src="../public/app.js" charset="utf-8"></script>
    </body>
</html>
