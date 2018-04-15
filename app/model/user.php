<?php
class user
{
	protected static $data_file;
	protected $inventroy = [];

	public function __construct()
	{
		self::$data_file = DATA.'user.csv';
	}

	private function load()
	{
		if (file_exists(DATA.'user.csv')) {
			 $this->inventroy = file(DATA.'user.csv');
		}
	}

	public function getuser(){
		$this->load();
		return $this->inventroy;
	}

}