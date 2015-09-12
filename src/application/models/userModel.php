<?php
class UserModel extends Model {
	
	private $user;
	private $pass;
	private $result;
	
	public function Login($username,$password) {
		
		$username=mysql_real_escape_string($username);
     	$password=mysql_real_escape_string($password);
     	$md5_password=md5($password);

     	$query=mysql_query("SELECT * FROM admin WHERE email='$username' and password='$md5_password' AND active='1'");
     	if(mysql_num_rows($query)==1){
     		$row=mysql_fetch_array($query);
			$_SESSION['LoggedIn'] = true;
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['last-login'] = $row['lastlogin'];
			$this->updateLastLogin($row['id']);
     		return $row['id'];
     	}
     	else{
     	return false;
     	}
		
		
	}
	
	public function updateLastLogin($id)
    {
        mysql_query("update `admin` set lastlogin=now() where id='$id'");
    }

	public function addSchool($name,$email)
    {
        $name  = htmlspecialchars($name);
        
        $add = mysql_query("INSERT INTO school ( `name`,`email`)
         VALUES ('$name','$email')");
 
        if ($add) {
            $communication->sendSchoolWelcomeEmail($email,$link);
        }
        
        return false;
    }
	
	 public function isLoggedIn()
    {
        if (isset($_SESSION['LoggedIn']) and isset($_SESSION['id']) and $_SESSION['id'] >= 1)
            return true;
        else
            return false;
    }
	
	
	
}

?>