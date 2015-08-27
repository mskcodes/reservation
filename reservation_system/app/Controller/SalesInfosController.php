<?php
App::uses('AppController', 'Controller');
/**
 * SalesInfos Controller
 *
 * @property SalesInfo $SalesInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SalesInfosController extends AppController {

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
		$this->SalesInfo->recursive = 0;
		$this->set('salesInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalesInfo->exists($id)) {
			throw new NotFoundException(__('Invalid sales info'));
		}
		$options = array('conditions' => array('SalesInfo.' . $this->SalesInfo->primaryKey => $id));
		$this->set('salesInfo', $this->SalesInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalesInfo->create();
			if ($this->SalesInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The sales info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales info could not be saved. Please, try again.'));
			}
		}
		$customers = $this->SalesInfo->Customer->find('list');
		$tickets = $this->SalesInfo->Ticket->find('list');
		$answers = $this->SalesInfo->Answer->find('list');
		$this->set(compact('customers', 'tickets', 'answers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SalesInfo->exists($id)) {
			throw new NotFoundException(__('Invalid sales info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SalesInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The sales info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalesInfo.' . $this->SalesInfo->primaryKey => $id));
			$this->request->data = $this->SalesInfo->find('first', $options);
		}
		$customers = $this->SalesInfo->Customer->find('list');
		$tickets = $this->SalesInfo->Ticket->find('list');
		$answers = $this->SalesInfo->Answer->find('list');
		$this->set(compact('customers', 'tickets', 'answers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SalesInfo->id = $id;
		if (!$this->SalesInfo->exists()) {
			throw new NotFoundException(__('Invalid sales info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SalesInfo->delete()) {
			$this->Session->setFlash(__('The sales info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sales info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
