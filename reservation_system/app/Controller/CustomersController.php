<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CustomersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	//public $uses = array('Ticket' , 'Customer');

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->Customer->recursive = 0;
		if($id == null){
			$this->set('customers', $this->Paginator->paginate());
			$options = array();
			$options = array('conditions' => array('Customer.answer_id' => 2)); 
			$res = $this->Customer->find('all', $options);
			$this->set('serch_answer' , $res);
		}
		
		//$this->set('allObject' , $this->Ticket->find('Ticket'));
		//凍結$customers =  $this->Customer->Ticket->find('list');
		$tOptions = array();
		//$id = null;
		$this->set('id' , array('Ticket' => $id));
		$tOptions = array('conditions' => array ('Customer.ticket_id' => $id));
		$this->set('tOptions' , array('conditions' => array ('Customer.ticket_id' => $id)));
		//凍結$this->set('allSelect' , $this->Customer->Ticket->find('all'));
		$this->set('select', $this->Customer->Ticket->find('list'));
		
		if($id != null){
			$this->set('customers', $this->Paginator->paginate());
			$options = array();
			$options = array('conditions' => array('Customer.answer_id' => 2 , 'Customer.ticket_id' => 2)); 
			$res = $this->Customer->find('all', $options);
			$this->set('serch_answer' , $res);

		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		}
		$affiliations = $this->Customer->Affiliation->find('list');
		$primaries = $this->Customer->Primary->find('list');
		$answers = $this->Customer->Answer->find('list');
		$tickets = $this->Customer->Ticket->find('list');
		$this->set(compact('affiliations', 'primaries', 'tickets' ,  'answers'));

		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());
		$options = array();
		$options = array('conditions' => array('Customer.answer_id' => 2)); 
		$res = $this->Customer->find('all', $options);
		$this->set('serch_answer' , $res);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
		}
		$affiliations = $this->Customer->Affiliation->find('list');
		$primaries = $this->Customer->Primary->find('list');
		$answers = $this->Customer->Answer->find('list');
		$tickets = $this->Customer->Ticket->find('list');
		$this->set(compact('affiliations', 'primaries', 'tickets' , 'answers'));

		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());
		$options = array();
		$options = array('conditions' => array('Customer.answer_id' => 2)); 
		$res = $this->Customer->find('all', $options);
		$this->set('serch_answer' , $res);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('The customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
}
