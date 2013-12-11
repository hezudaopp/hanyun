<?php
App::uses('AppController', 'Controller');
/**
 * ItemsIps Controller
 *
 * @property ItemsIp $ItemsIp
 */
class ItemsIpsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemsIp->recursive = 0;
		$this->set('itemsIps', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemsIp->exists($id)) {
			throw new NotFoundException(__('Invalid items ip'));
		}
		$options = array('conditions' => array('ItemsIp.' . $this->ItemsIp->primaryKey => $id));
		$this->set('itemsIp', $this->ItemsIp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsIp->create();
			if ($this->ItemsIp->save($this->request->data)) {
				$this->Session->setFlash(__('The items ip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items ip could not be saved. Please, try again.'));
			}
		}
		$items = $this->ItemsIp->Item->find('list');
		$ips = $this->ItemsIp->Ip->find('list');
		$this->set(compact('items', 'ips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemsIp->exists($id)) {
			throw new NotFoundException(__('Invalid items ip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemsIp->save($this->request->data)) {
				$this->Session->setFlash(__('The items ip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items ip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemsIp.' . $this->ItemsIp->primaryKey => $id));
			$this->request->data = $this->ItemsIp->find('first', $options);
		}
		$items = $this->ItemsIp->Item->find('list');
		$ips = $this->ItemsIp->Ip->find('list');
		$this->set(compact('items', 'ips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemsIp->id = $id;
		if (!$this->ItemsIp->exists()) {
			throw new NotFoundException(__('Invalid items ip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemsIp->delete()) {
			$this->Session->setFlash(__('Items ip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Items ip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
