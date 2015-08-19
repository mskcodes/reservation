<?php
App::uses('AppController', 'Controller');
/**
 * Primaries Controller
 *
 * @property Primary $Primary
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PrimariesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Primary->recursive = 0;
		$this->set('primaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Primary->exists($id)) {
			throw new NotFoundException(__('Invalid primary'));
		}
		$options = array('conditions' => array('Primary.' . $this->Primary->primaryKey => $id));
		$this->set('primary', $this->Primary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Primary->create();
			if ($this->Primary->save($this->request->data)) {
				$this->Session->setFlash(__('The primary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The primary could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Primary->exists($id)) {
			throw new NotFoundException(__('Invalid primary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Primary->save($this->request->data)) {
				$this->Session->setFlash(__('The primary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The primary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Primary.' . $this->Primary->primaryKey => $id));
			$this->request->data = $this->Primary->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Primary->id = $id;
		if (!$this->Primary->exists()) {
			throw new NotFoundException(__('Invalid primary'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Primary->delete()) {
			$this->Session->setFlash(__('The primary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The primary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
