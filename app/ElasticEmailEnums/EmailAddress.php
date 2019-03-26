<?php

/*Custom class*/

class EmailAddress
{
	private /*string*/ $username;
	private /*string*/ $provied;
	private /*string*/ $domain;


	public function getEmailAddress()
	{
		return $this->username."@".$this->provider.".".$$this->domain;
	}
}

?>