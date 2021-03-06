<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Une plateforme communautaire d'étudiants infirmiers HELB - Avec les horaires et les notes de cours" />
        <meta name="author" content="" />
        <title><?php if(!empty($pagetitre)){echo $pagetitre;}else{echo "Notes - Infirmier";}?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Organization",
        "url": "http://infinotes.me",
        "logo": "https://i.imgur.com/7zKLSjI.png"
        }
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NNEJVT4QH"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7NNEJVT4QH');
        </script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a href="index.php">
                    <img class="navbar-brand" src="https://i.imgur.com/zFgMzke.png" height="60" wight="60" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="prehoraires.php">Horaire</a></li>
                            <li class="nav-item"><a class="nav-link" href="notes.php">Notes</a></li>
                            <li class="nav-item"><a class="nav-link" href="propofile.php">Ajouter ses notes</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">A propos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>