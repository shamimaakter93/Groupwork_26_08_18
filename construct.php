<?php  
	class People{
		function __construct ($first_name, $last_name){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
		}

		public $frist_name;
		public $last_name;
		public function fullName(){
			return $this->first_name . ' ' . $this->last_name;
		}
	}

$shamima = new People('Shamima', 'Akter');
echo $shamima->fullName ();
echo '<br>';
$farhana = new People('Farhana', 'Akter');
echo $farhana->fullName();