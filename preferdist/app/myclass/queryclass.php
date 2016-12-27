<?php namespace App\myclass;

class queryclass 
{
			public $servername;
			public $username;
			public $password ;
			public $dbname;
			public $conn;

	
	function queryclass()
	{
			
			$this->servername = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->dbname = "londrydatabase";



			// Create connection
			$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			} 

	}


	public function customerinfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			//$sql = "SELECT * FROM wp_ab_customers";

			
			$sql = "SELECT CustomersId,CustomerName FROM customers WHERE 1";
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			   // echo "0 results";
			}

			
			$conn->close();

			return json_encode($ans);


	}
	public function texinfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM tax";
				
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			
			$conn->close();

			return (json_encode($ans));


	}

	public function productsinfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM tax";
				
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			
			$conn->close();

			return (json_encode($ans));


	}

	public function itemunitinfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM itemunit";
				
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			
			$conn->close();

			return (json_encode($ans));


	}public function itemcategoryinfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM itemcategory";
				
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			
			$conn->close();

			return (json_encode($ans));


	}


		public function nominalinfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM nominal";
				
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			
			$conn->close();

			return (json_encode($ans));


	}	
	public function supplierinfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT SupplierId , SupplierName FROM Supplier WHERE Supplier.Active='yes'";
				
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			
			$conn->close();

			return (json_encode($ans));


	}	
	public function iteminfo(){



			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT ItemId,ItemName FROM item WHERE item.Active='yes'";
				
			$result = $conn->query($sql);

			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			
			$conn->close();

			return (json_encode($ans));


	}
}




