<?php
/**
 * The User class allows the standard CRUD operations.
 * Can add more properties that suit the project
 */
class User implements iCrud {
	/**
	 * unique user id
	 * @var string
	 */
	private $_userId = NULL;

	/**
	 * username
	 * @var array
	 */
	private $_username = NULL;

	public function __construct($data)
	{
		$this->_userId = uniqid();
		// must validate $data first
		$this->_username = $data['username'];
	}

	public function create($data) 
	{
		$self::__construct($data);
	}

	public function read() 
	{
		return array('userId' => $this->_userId, 'username' => $this->_username);
	}

	public function update($data)
	{
		// remember to validate before accepting the information
		$this->_username = $data['username'];
	}

	public function delete()
	{
		$this->_userId = NULL;
		$this->_username = NULL;
	}
}
