<?php
include 'user.php';

class Admin extends User{
       
   
    public function addproduct_A($pname,$price,$pdesc,$ptype,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
            $this->ptype=$ptype;
            $this->pimg=$pimg;
            $DB = new  DaBa();
			$check=$DB->Insertproduct($pname,$price,$pdesc,$ptype,$pimg);
    }
    
       
    public function Deleteproduct_A($pname)
    {
            $this->pname=$pname;
            $DB = new  DaBa();
			$check=$DB->Deleteproduct($pname);
    }
    
}

//$A = new Admin();

//$A ->addproduct_A('dubai','hytr',"jff","h");
//$A ->updateeplace(15,'dubai','kkkkkkkk',"jff","h");
//$A ->Deleteeplace(15);
//$A ->searchplacess('dubai');
//$A ->displayplaces("h");
// $A ->showalluser();




?>