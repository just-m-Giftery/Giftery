<?php

class DaBa{
		public $Servername;
		public $Username;
		public $Password;
		public $DBname;

		protected function connect(){
			$this->Servername="localhost";
			$this->Username="root";
			$this->Password="";
			$this->DBname="giftry-ia";
			$conn =new mysqli($this->Servername,$this->Username,$this->Password,$this->DBname);
			return $conn;
		}

    
  
    
    public function Insertuser($username,$email,$password,$address){
                $sql ="INSERT INTO  user(username,email,password,address) 
                VALUES ('$username','$email','$password','$address') ";
                $result=$this->connect()->query($sql);
                return $result;
             }    
     
    
    
    public function getAllUsers(){
                $sql="SELECT * FROM  user";
                $result=$this->connect()->query($sql);
                $numRows=$result->num_rows;
                if($numRows > 0){
                    while ($row=$result->fetch_assoc()) {
                        $data[]=$row;
                    }
                    return $data;
                }
            }    
    
    public function showalluser()
    {
        $datas=$this->getAllUsers();
    
        foreach ($datas as $data) {
				$id       =  $data['id'];
             
                $username =  $data['username'];
                $email    =  $data['email'];
                $password =  $data['password'];
                $address    =  $data['address'];
                
           
      //echo  '<img src="5.jpg">';
   /// echo $id ."<br>".$fname."<br>".$lname ."<br>".$username."<br>"
        //.$email."<br>".$password."<br>".$phone."<br>".$gender."<br>"."<br>";
				}
    }
    
    public function CheckUser($username,$password){
				$datas=$this->getAllUsers();
              foreach ($datas as $data) {
                if($username==$data['username']&&$password==$data['password'])
						if(!isset($_SESSION['loggedin']))
						{
							$_SESSION['redirectURL']=$_SESSION['REQUEST_URI'];
		                	header('location:Start1.php');
						}
                   
			}
    }
    
    public function getAllproduct(){
			$sql="SELECT * FROM   product";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows > 0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
				return $data;
			}
		}
    
    
    
    public function Insertproduct($pname,$price,$pdesc,$ptype,$pimg,$plocation){
			$sql =  " INSERT INTO  product
            (name,price,product_desc,img,type) 
			                   VALUES
                     ('$pname','$price','$pdesc','$pimg','$ptype') ";
  			$result=$this->connect()->query($sql);
		   	return $result;
		 }
    
    
    
    
    public function Deleteproduct($pname)
    {
        $sql = "DELETE  FROM product WHERE pname='$pname'";
            
        	$result=$this->connect()->query($sql);
		   	return $result;
    }
     
    public function displayproduct($ptype)  
    {
            $sql = "SELECT * FROM product WHERE type='$ptype'";
    
           $result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows > 0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
			
           
                	return $data;
			}
      

    }
    
    public function checkdisplayproduct($ptype)
    {
           $datas=$this->displayproduct($ptype);
    
        foreach ($datas as $data) {
				$pid  =  $data['pid'];
                $pname=  $data['pname'];
                $pdesc=  $data['pdesc'];
                $pimg =  $data['pimg'];
                $ptype=  $data['ptype'];
                $plocation= $data['plocation'];
           
      //echo  '<img src="5.jpg">';
      echo $pid ."<br>".$pname."<br>".$pdesc ."<br>".'<img width="400px" src="'.$pimg.'">'."<br>".$ptype."<br>";
				}

    }
    
    public function displayproduct_info($pid)
    {
            $sql = "SELECT * FROM product WHERE pid='$id'";
    
           $result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows > 0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
			
           
                	return $data;
			}
      

    }
    
    public function checkdisplayproduct_info($pid)
    {
           $datas=$this->displayproduct_info($pid);
    
        foreach ($datas as $data) {
				$pid  =  $data['pid'];
                $pname= $data['pname'];
                $pdesc= $data['pdesc'];
                $pimg =  $data['pimg'];
                $ptype= $data['ptype'];
        //$decoded_str = base64_decode($pimg);
            
        //$ii='<img src="'.$pimg.'">'; 
            
          // echo $ii; 
   //echo $pid ."<br>".$pname."<br>".$pdesc ."<br>".'<img width="400px" src="'.$pimg.'">'."<br>".$ptype."<br>";
				}

    }
}
?>