<!DOCTYPE html>

<title>My Blog</title>

<link rel="stylesheet" href="/app.css">

<body>

    <?php foreach ($posts as $post) : ?>
        <article>
            <a href="/posts/<?= $post->slug; ?>">
                <h1><?= $post->title; ?></h1>
            </a>

            <div><?= $post->excerpt; ?></h1>
        </article>
    <?php endforeach; ?>

</body>