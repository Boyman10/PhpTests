<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($comment['author']) ?>
                <em>le <?= $comment['comment_date_fr'] ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
            </p>
        </div>

        
    </body>
</html>