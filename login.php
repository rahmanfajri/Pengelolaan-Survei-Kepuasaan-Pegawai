<?php
	session_start();
	include 'koneksi.php';
	
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$sql = mysql_query("SELECT * FROM tb_hakakses WHERE Username='$user' and Password='$pass'");
		$hasil = mysql_num_rows($sql);
		$data = mysql_fetch_array($sql);
		
		if($hasil==1){
			$_SESSION ['Username']=$user;
			$_SESSION ['Password']=$pass;
			$_SESSION ['nama']=$data['Fullname'];
			$_SESSION ['satker']=$data['Satker'];
			$_SESSION ['akses']=$data['Akses'];
			header ('Location:content/home.php');
		}else{
			header ('Location:index.php');
		}
?>

<div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Sign In </h3>
            </div> 


            <div class="panel-body">
            <form class="form-horizontal m-t-20" action="login.php" method="post">
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="user" required="" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="pass" required="" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form> 
            
            </div>   
            </div>                              
                <div class="row">
            	<div class="col-sm-12 text-center">
            		<p> &copy PT. Bukit Asam</p>
                        
                    </div>
            </div>
            
        </div>