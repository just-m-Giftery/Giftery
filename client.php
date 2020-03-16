<?php
include 'user.php';

 class client extends User{

  
    public function Register($username,$email,$password,$adress){
			$this->username=$username;
			$this->email=$email;
			$this->password=$password;
            $this->adress=$adress;
            $DB = new  DaBa();
			$check=$DB->Insertuser($username,$email,$password,$address);
          //echo "done";
		}

}

//$t = new Tourist();
//$t ->searchplacess('dubai');
//$t ->choosecategories("h");
//$t->displayplaceinfo(15);
//$t>Register(5,'mahmoud','maged',"mahmoudelwan",'mahmoudelwan460@gmail.com',111,'01142951602','male');




?>