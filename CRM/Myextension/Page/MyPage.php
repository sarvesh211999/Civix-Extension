<?php
use CRM_Myextension_ExtensionUtil as E;

class CRM_Myextension_Page_MyPage extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('My Page'));
    $session = CRM_Core_Session::singleton();
    $contact_id = $session->get('userID');
    if ($contact_id){
        $params = array(
        'id' => $contact_id,
        );
        $result = civicrm_api3('Contact', 'getsingle', $params);
        $this->assign('firstName', $result['first_name']);
    }
    else{
        $this->assign('firstName', "World");
    }

    // // Example: Assign a variable for use in a template

    parent::run();
  }

}
