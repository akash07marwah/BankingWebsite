?php

//connect to mysql

$conn = mysqli_connect('localhost','root','Rishabh135','xyz_bank');

//test Conection

if(mysqli_connect_errno())
    
{
    echo 'Db connection error'.mysqli_connect_error();
    
    
}
?>