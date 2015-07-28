<?php
echo "<h1>", h($article->title), "</h1>",
     "<p>", h($article->body), "</p>",
     "<p><small>Criado em: ", $article->created->format(DATE_RFC850), "</small></p>";
?>