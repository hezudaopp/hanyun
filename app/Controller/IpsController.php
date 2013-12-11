<?php
App::uses('AppController', 'Controller');
/**
 * Ips Controller
 *
 * @property Ip $Ip
 */
class IpsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ip->recursive = 0;
		$this->set('ips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ip->exists($id)) {
			throw new NotFoundException(__('Invalid ip'));
		}
		$options = array('conditions' => array('Ip.' . $this->Ip->primaryKey => $id));
		$this->set('ip', $this->Ip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ip->create();
			if ($this->Ip->save($this->request->data)) {
				$this->Session->setFlash(__('The ip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ip could not be saved. Please, try again.'));
			}
		}
		$items = $this->Ip->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ip->exists($id)) {
			throw new NotFoundException(__('Invalid ip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ip->save($this->request->data)) {
				$this->Session->setFlash(__('The ip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ip.' . $this->Ip->primaryKey => $id));
			$this->request->data = $this->Ip->find('first', $options);
		}
		$items = $this->Ip->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ip->id = $id;
		if (!$this->Ip->exists()) {
			throw new NotFoundException(__('Invalid ip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ip->delete()) {
			$this->Session->setFlash(__('Ip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
