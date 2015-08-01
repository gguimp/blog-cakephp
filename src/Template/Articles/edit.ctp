<h1>Editar artigo</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('title');
echo $this->Form->input('body', ['rows' => '3']);
echo $this->Form->button(__('Salvar Artigo'));
echo $this->Form->end();
?>