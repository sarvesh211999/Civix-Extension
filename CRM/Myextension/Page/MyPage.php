<?php
use CRM_Myextension_ExtensionUtil as E;

class CRM_Myextension_Page_MyPage extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('My Page'));
    $session = CRM_Core_Session::singleton();
	$contact_id = $session->get('userID');
	$params = array(
    	'id' => $contact_id,
  	);
 
   	$result = civicrm_api3('Contact', 'getsingle', $params);
	// echo $result['first_name'];

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));
    $this->assign('firstName', $result['first_name']);

    parent::run();
  }

}
