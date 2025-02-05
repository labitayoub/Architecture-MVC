<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<header>
    <h1>test test </h1>
    <nav>
        <a href="/">Accueil</a>
        <a href="mvc/article">Articles</a>
    </nav>
</header>
<main>

    
<h1>Liste des articles</h1>
<ul>
    <?php foreach ($articles as $article): ?>
        <li><?= htmlspecialchars($article['titre']); ?></li>
    <?php endforeach; ?>
</ul>


</main>
<footer>
    <p>© 2025 - MVC</p>
</footer>
</body>
</html>