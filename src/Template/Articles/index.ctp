<h1>Blog Cakephp</h1>
<table>
	<tr>
		<th>ID</th>
		<th>Título</th>
		<th>Criado em...</th>
	</tr>

	<?php foreach ($articles as $article) {
		echo "<tr>",
			 	"<td>$article->id</td>",
			 	"<td>",
			 		$this->Html->link($article->title, ['action' => 'view', $article->id]),
			 	"</td>",
			 	'<td>', $article->created->format(DATE_RFC850), '</td>',
			 "</tr>";
	} ?>