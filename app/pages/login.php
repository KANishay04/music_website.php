<?php 

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$errors = [];
 		
 		$values = [];
 		$values['email'] = trim($_POST['email']);
 		$query = "select * from users where email = :email limit 1";
 		$row = db_query_one($query,$values);
		
		if(!empty($row))
		{
  			if(password_verify($_POST['password'], $row['password']))
  			{

  				authenticate($row);
				message("login successfull");
				redirect('admin');  				
  			}

		}

		message("wrong email or password"); 
	}

?>

<?php require page('includes/header')?>
 <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }

  .content {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .login-holder {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  form {
    max-width: 300px;
    margin: 0 auto;
  }

  h2 {
    text-align: center;
    color: #333;
  }

  input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }

  button {
    width: 100%;
    padding: 10px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #2980b9;
  }

  .alert {
    background-color: #f2dede;
    color: #a94442;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ebccd1;
    border-radius: 4px;
  }
</style>
	<section class="content">
 
		<div class="login-holder">

		<?php if(message()):?>
			<div class="alert"><?=message('',true)?></div>
		<?php endif;?>

			<form method="post">
				
				
				<center><img src="assets/images/logo.png" style="width: 150px;border-radius: 50%;border: solid thin #ccc;"></center>
				<h2>Login</h2>
				<input value="<?=set_value('email')?>" class="my-1 form-control" type="email" name="email" placeholder="Email">
				<input value="<?=set_value('password')?>" class="my-1 form-control" type="password" name="password" placeholder="Password">
				<button class="my-1 btn bg-blue">Login</button>
			</form>
		</div>
	</section>

<?php require page('includes/footer')?>