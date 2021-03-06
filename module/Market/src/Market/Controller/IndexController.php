<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    use ListingsTableTrait;

    public function indexAction() {
        $messages = array();
        if ($this->flashMessenger()->hasMessages()) {
            $messages = $this->flashMessenger()->getMessages();
        }

        $itemRecent = $this->listingsTable->getLatestListings();

        return array('messages' => $messages, 'item' => $itemRecent);
        //return new ViewModel(array('messages' => $messages));
    }

    public function fooAction() {
        return new ViewModel();
    }

}
