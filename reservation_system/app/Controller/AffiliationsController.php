<?php
App::uses('AppController', 'Controller');
/**
 * Affiliations Controller
 *
 * @property Affiliation $Affiliation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AffiliationsController extends AppController {

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
		$this->Affiliation->recursive = 0;
		$this->set('affiliations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Affiliation->exists($id)) {
			throw new NotFoundException(__('Invalid affiliation'));
		}
		$options = array('conditions' => array('Affiliation.' . $this->Affiliation->primaryKey => $id));
		$this->set('affiliation', $this->Affiliation->find('first', $options));		
		$this->Affiliation->recursive = 0;
		$this->set('affiliations', $this->Paginator->paginate());


	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Affiliation->create();
			if ($this->Affiliation->save($this->request->data)) {
				$this->Session->setFlash(__('The affiliation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliation could not be saved. Please, try again.'));
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
		if (!$this->Affiliation->exists($id)) {
			throw new NotFoundException(__('Invalid affiliation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Affiliation->save($this->request->data)) {
				$this->Session->setFlash(__('The affiliation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Affiliation.' . $this->Affiliation->primaryKey => $id));
			$this->request->data = $this->Affiliation->find('first', $options);
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
		$this->Affiliation->id = $id;
		if (!$this->Affiliation->exists()) {
			throw new NotFoundException(__('Invalid affiliation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Affiliation->delete()) {
			$this->Session->setFlash(__('The affiliation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The affiliation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
	
	
		public function serch_affiliation($id = null){
		//$this->Customer->view_id($id);
		if (!$this->Affiliation->exists($id)) {
			throw new NotFoundException(__('Invalid affiliation'));
		}
		$options = array('conditions' => array('Affiliation.' . $this->Affiliation->primaryKey => $id));
		$this->set('affiliation', $this->Affiliation->find('first', $options));
		
		$this->Affiliation->recursive = 0;
		$this->set('affiliations', $this->Paginator->paginate());

	}
	
	public function serch_answer($id = null){
		//$this->Customer->view_id($id);
		$this->serch_affiliation($id);
	}

}
