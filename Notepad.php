<?php  
session_start();

	class Notebook {
		
		protected $notes;
		public $title;
		public $body;
		public function __construct()
		{
			$this->notes = [];
			$this->title = $title;
			$this->body = $body;
			//$_SESSION['notes'] = $this->notes;
		}
		public function getNote(){
			return $this->notes;
		}
		public function addNote()
		{
			//$this->notes = $_SESSION['notes'];
			$this->notes[$_POST[$title]] = $_POST['body'];
			//$_SESSION['notes'] = $this->notes;
		}
		public function seeAll()
		{
			return $this->notes;
		}
		
		public function seeOne($title)
		{
			return $this->notes[$title];
		}
		public function edit($title)
		{
			$this->notes[$_POST['title']] = $_POST['body'];
		}
		public function delete($title)
		{
			unset($this->notes[$title]);
		}
		public function deleteAll()
		{
			unset($this->notes);
		}


	}

	if (empty($_SESSION['notebook'])){
		$_SESSION['notebook'] = new Notebook();
	}
	
	if($_POST['title'] && $_POST['body']){
		$_SESSION['notebook']->addNote();
	}
	// if($_POST['title']){
	// 	$_SESSION['notebook']->seeOne($_POST['title']);
	// }


?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>Note Book</title>
		</head>
		<body>
		<h1>My Online Notebook</h1>

			<form class="form" action="" method="post">
				<input type="text" name="title" required><br>
				<textarea name="body" cols="30" rows="5" required></textarea>
				<input type="submit" value="submit">
			</form>
			
			<?php
			if ($_SESSION['notebook']){
				foreach ($_SESSION['notebook']->getNote() as $title => $body) {
					echo "<p>$title</p><p>$body</p><br>";
				}
			}
			?>
		</body>
		</html>


