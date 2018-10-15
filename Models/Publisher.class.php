<?php

	class Publisher 
	{
		var $firstName; 
		var $lastName; 
		var $isLead; 
		var $groupID;
		var $pubID;
		var $contactID;

	 function __construct($firstName, $lastName, $isLead, $groupID, $pubID,$contactID)
	 {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->isLead = $isLead;
		$this->groupID = $groupID;
		$this->pubID = $pubID;
		$this->contactID = $contactID;
	 }

	 function getPublisherInfo()
	 {
	 	DB.connect(DB_CONNECTION, PUBLISHER_INFO, $pubID);
		/* assign result set to variables
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->isLead = $isLead;
		$this->groupID = $groupID;
		$this->pubID = $pubID;
		$this->contactID = $contactID;
		*/
	 }



	}

?>
