<?php

namespace App\Controller;

class ArticlesController extends AppController
{
	public function initialize()
	{
		$this->loadComponent('Flash');
	}

	public function index() 
	{
		$articles = $this->Articles->find('all');
		$this->set(compact('articles'));
	}

	public function view($id = Null)
	{
		$article = $this->Articles->get($id);
		$this->set(compact('article'));
	}

	public function add()
	{
		$article = $this->Articles->newEntity();
		if ($this->request->is('post')) {
			$article = $this->Articles->patchEntity($article, $this->request->data);

			if ($this->Articles->save($article)) {
				$this->Flash->success(__('Seu artigo foi salvo.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('Unable to add your article.'));
			}
		}

		$this->set('article', $article);
	}

	public function edit($id = null)
	{
		$article = $this->Articles->get($id);
		if ($this->request->is(['post', 'put'])) {
			$this->Articles->patchEntity($article, $this->request->data);

			if ($this->Articles->save($article)) {
				$this->Flash->success(__('Seu artigo foi atualizado.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash-error(__('Unable to update your article.'));
			}
		}

		$this->set('article', $article);
	}

	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);

		$article = $this->Articles->get($id);

		if ($this->Articles->delete($article)) {
			$this->Flash->success(__('O artigo com a ID {0} foi deletado.', h($id)));
			return $this->redirect(['action' => 'index']);
		}
	}
}