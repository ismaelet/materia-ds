<?php

class User {

	public $id;
	public $username;
	public $fname;
	public $lname;
	public $email;
	public $admin = false;
	public $guest = true;

	function __construct($id) {
		$this->id = $id;

		if ($row = DB::row('username, firstname, lastname, email, admin FROM users WHERE id=? AND guest=0', [$id])) {
			$this->username = $row['username'] ?? null;
			$this->firstname = $row['firstname'] ?? null;
			$this->lname = $row['lastname'] ?? null;
			$this->email = $row['email'] ?? null;
			$this->admin = $row['admin'] ?? false;
			$this->guest = false;
		}
	}

	function __get($name) {

		switch ($name) {
			case 'icon':
				return $this->icon = $this->icon();
				break;
			case 'fullName':
				return $this->fullName = $this->getFullName();
				break;
		}
	}

	private function getFullName() {
		$name = [];

		if ($this->firstname) $name[] = $this->firstname;
		if ($this->lname) $name[] = $this->lname;

		return implode(' ', $name);
	}

	//get the profile icon
	private function icon() {

		$icon = '/uploads/profile-icons/' . $this->id . '.jpg';

		if (!file_exists(__SERVER_ROOT__ . $icon)) $icon = '/uploads/profile-icons/0.jpg';

		return $icon;
	}
}
