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
	public function index($id = null) {
		$this->SalesInfo->recursive = 2;
		$this->set('salesInfos', $this->Paginator->paginate());
				
		//プルダウンのリスト
		$selectKey = array(0 => '全体');
		$selectKey += $this->SalesInfo->Ticket->find('list');
		$this->set('select', $selectKey);
		if(isset($this->data['serch_tickets'][__('serch_tickets')])){
				$id = (int)$this->data['serch_tickets'][__('serch_tickets')];
				$this->set('id' , $id);
		}
		
		//カウント
		$this->set('total' , $this->SalesInfo->find('all'));
		
		//カウント指定前
		if($id == null || $id == 0){
			
			//Total		
			$this->set('serch_total' , $this->SalesInfo->find('count'));
			
			//項目参加
			$options1 = array('conditions' => array('SalesInfo.answer_id'=> 1)); 
			$res = $this->SalesInfo->find('count', $options1);
			$this->set('serch_answer1' , $res);
			
			//項目不参加
			$options2 = array('conditions' => array('SalesInfo.answer_id' => 2)); 
			$res = $this->SalesInfo->find('count', $options2);
			$this->set('serch_answer2' , $res);
			
			//項目未定
			$options3 = array('conditions' => array('SalesInfo.answer_id' => 3)); 
			$res = $this->SalesInfo->find('count', $options3);
			$this->set('serch_answer3' , $res);
		}
		
		//カウント指定後
		else{
			$selecter = array('conditions' => array('SalesInfo.ticket_id' => $id));

			//Total
			$this->set('serch_total' , $this->SalesInfo->find('count' , $selecter));
			
			//項目参加
			$options1 = array('conditions' => array('SalesInfo.answer_id' => 1 , 'SalesInfo.ticket_id' => $id)); 
			$res = $this->SalesInfo->find('count', $options1);
			$this->set('serch_answer1' , $res);
			
			//項目不参加
			$options2 = array('conditions' => array('SalesInfo.answer_id' => 2 , 'SalesInfo.ticket_id' => $id)); 
			$res = $this->SalesInfo->find('count', $options2);
			$this->set('serch_answer2' , $res);
			
			//項目未定
			$options3 = array('conditions' => array('SalesInfo.answer_id' => 3 , 'SalesInfo.ticket_id' => $id)); 
			$res = $this->SalesInfo->find('count', $options3);
			$this->set('serch_answer3' , $res);
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
		//$affiliations = $this->SalesInfo->Affiliation->find('list');
		//$primaries = $this->SalesInfo->Primary->find('list');
		$this->set(compact('affiliations', 'primaries', 'tickets' ,  'answers'));
/*
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());
		$options = array();
		$options = array('conditions' => array('Customer.answer_id' => 2)); 
		$res = $this->Customer->find('all', $options);
		$this->set('serch_answer' , $res);*/

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
	
	
	
	public function customer_view($id = null){
		if (!$this->SalesInfo->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('SalesInfo.customer_id' => $id));
		$this->SalesInfo->recursive = 2;
		$this->set('customer', $this->SalesInfo->find('first', $options));
		$this->set('customers', $this->SalesInfo->find('all', $options));		
	}
	
	
	public function ticket_view($id = null) {
		if (!$this->SalesInfo->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		$this->SalesInfo->recursive = 2;
		$options = array('conditions' => array('SalesInfo.ticket_id' => $id));
		$this->set('ticket', $this->SalesInfo->find('first', $options));		
		$this->set('tickets', $this->SalesInfo->find('all', $options));		

	}


	public function answer_view($tid = null , $aid = null){
		if (!$this->SalesInfo->exists($tid) && !$this->SalesInfo->exists($aid)) {
			throw new NotFoundException(__('Invalid answer'));
		}
		$this->SalesInfo->recursive = 3;
		$options = array('conditions' => array('SalesInfo.ticket_id' => $tid , 'SalesInfo.answer_id' => $aid));
		$this->set('answer', $this->SalesInfo->find('first', $options));
		$this->set('answers', $this->SalesInfo->find('all', $options));		
	}

	
	
	
	
	
}
