<?php include 'database_dischi.php'; ?>


<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Dischi</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../public/app.css">
    </head>
    <body>

        <header>
            <div class="header container">
                <img src="../logo.png" alt="logo">
            </div>
        </header>

        <main>
            <div class="container">
                <section id="card">

                    <?php
                    foreach ($dischi as $album) { ?>
                        <div class="card">
                            <img src=" <?php echo $album['poster']; ?> " alt="poster">
                            <h4>
                                <?php echo $album['title']; ?>
                            </h4>
                            <p>
                                <?php echo $album['author']; ?>
                            </p>
                            <p>
                                <?php echo $album['year']; ?>
                            </p>
                        </div>
                        <?php
                    } ?>

                </section>
            </div>
        </main>

        <script src="public/app.js" charset="utf-8"></script>
    </body>
</html>
















<!-- END -->
