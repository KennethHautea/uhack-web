<?php
class DB{

	public static function connect(){
		$dsn="mysql:host=".databasehost.";dbname=".databasename;
		$dbh = new PDO($dsn, databaseuser, databasepassword);
		return $dbh;
	}
	/**
	**Used for Fetch Query
	**/
	public function query($sql){
		$db =DB::connect();
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = array();
		return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	/**
	**Used for Fetch and Update Query
	**/
	public function querybinder($sql,$arrPar,$arrVal){
		$db =DB::connect();
		$stmt = $db->prepare($sql);
		for($i = 0; $i <sizeof($arrPar);$i++)
		{
			$stmt->bindValue($arrPar[$i], $arrVal[$i]);
		}
		$stmt->execute();
		return $stmt;
	}

	public function querybinderwithkey($sql,$arrPar,$arrVal){
		$db =DB::connect();
		$stmt = $db->prepare($sql);
		for($i = 0; $i <sizeof($arrPar);$i++)
		{
			$stmt->bindValue($arrPar[$i], $arrVal[$i]);
		}
		$stmt->execute();
		print_r($stmt->errorInfo());
		return $db->lastInsertId();
	}

	public function queryupdate($sql,$arrPar,$arrVal){
		$db =DB::connect();
		$stmt = $db->prepare($sql);
		for($i = 0; $i <sizeof($arrPar);$i++)
		{
			$stmt->bindValue($arrPar[$i], $arrVal[$i]);
		}
		$stmt->execute();
		//print_r($stmt->errorInfo());
		return $stmt->rowCount();
	}

}

