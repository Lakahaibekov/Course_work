<?php 
			session_start();

if (!isset($_SESSION['ADMIN_NAME'])) {
    header('Location: auth.php');
    exit();
}

function logout(){
               if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
           }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> 
      	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <title>Admin</title>
  </head>
  <body>
      
      <nav class="navbar navbar-expand-lg bg-primary">
  <a class="navbar-brand" href="#">Mini-DL.iitu.kz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Руский (рус)
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Қазақша (қаз)</a>
          <a class="dropdown-item" href="#">Руский (рус)</a>
          <a class="dropdown-item" href="#">English (eng)</a>
        </div>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Style
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Default</a>
          <a class="dropdown-item" href="#">Dark</a>
        </div>
      </li>
      
    </ul>
      <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['ADMIN_NAME']; ?>
            <img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/u/f2" class="user_picture" width="35"
    height="35">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-tachometer"></i> Личный Кабинет</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> О пользователе</a>
          <a class="dropdown-item" href="#"><i class="fa fa-table"></i> Курсы</a>
          <a class="dropdown-item" href="#"><i class="fa fa-comment"></i> Сообщения</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Настройки</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Выход</a>
            
        </div>
      </li>
          </ul>
  </div>
</nav>
      
      <div class="card mt-3 mb-3" id="header_card">
            <div class="card-body">
                <h2>mini-dl.iitu.kz</h2>
                <a href="#">Начало</a>
            </div>
          </div>
      
      
      
    <div class="container-fluid" >
      <div class="row">
          <div class="col-2" >
          <div class="card-body p-3">
              <h5 class="card-title">Навигация</h5>
              </div>
            <div class="card-text content">
              <ul class="list-group">
                    <li class="list-item-group"><a href="admin.php"><i class="fa fa-book" aria-hidden="true"></i> Курсы</a></li>
                        <li class="list-item-group"><a href="adminTeachers.php"><i class="fa fa-users" aria-hidden="true"></i> Преподователи</a></li>
                        <li class="list-item-group"><a href="adminGroups.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Группы</a></li>
                        <li class="list-item-group"><a href="adminStudents.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Студенты</a></li>
                        <li class="list-item-group"><a href="adminTasks.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Таски</a></li>
                        <li class="list-item-group"><a href="adminLessons.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Занятия</a></li>
                        <li class="list-item-group"><a href="adminGrades.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Оценки</a></li>
                        </ul>
              </div> 
         
        </div>
          <div class="col-9">
          <div class="container">
              <nav class="navbar navbar" style="background-color: white">
                        <h2 >Students</h2>
                        <button type="button" class="btn btn-primary" id="add" data-toggle="modal" data-target="#ADD" data-whatever="@mdo">Добавить</button>

                    </nav>
			  
			  
			  
			  
			  
			  
			  

  <div class="row">
				  
				  
				  <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$query ="SELECT * FROM students";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
$result2 = mysqli_query($link, "SELECT * FROM groups") or die("Ошибка " . mysqli_error($link)); 
if($result)
{
	$rows = mysqli_num_rows($result);
	$rows2 = mysqli_num_rows($result2);
	echo "<table class='table table-striped table-hover'>
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th >Детали</th>
	</tr>";
	
	for ($i = 0 ; $i < $rows ; ++$i)
	{
		$row = mysqli_fetch_assoc($result);
		$row2 = mysqli_fetch_row($result2);
		$id =$row['group_id'];
		echo "<tr>"."\n";
		echo "<td>".$row['id']."</td>"."\n";
		echo "<td>".$row['username']."</td>"."\n";
		echo "<td>".$row['firstname']."</td>"."\n";
		echo "<td>".$row['lastname']."</td>"."\n";
		echo "<td>".$row['email']."</td>"."\n";
		echo "<input type='hidden' id='username_".$row['id']."' value='".$row['username']."'>";
		echo "<input type='hidden' id='firstname_".$row['id']."' value='".$row['firstname']."'>";
		echo "<input type='hidden' id='lastname_".$row['id']."' value='".$row['lastname']."'>";
		echo "<input type='hidden' id='email_".$row['id']."' value='".$row['email']."'>";
		echo "<input type='hidden' id='password_".$row['id']."' value='".$row['password']."'>";
		echo "<input type='hidden' id='groupid_".$row['id']."' value='".$row['group_id']."'>";
		echo "<input type='hidden' id='accountid_".$row['id']."' value='".$row['account_id']."'>";
		echo "<td>
		<button onclick='edit(".$row['id'].")' class='btn btn-success btn-sm' data-toggle='modal' data-target='#exampleModal' >Изменить</button>
		<button onclick='deleteStudent(".$row['id'].")' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#Delete'>Удалить</button>
		</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_free_result($result);
}

mysqli_close($link);
?>

              </div>
            
              
        </div>
              </div>
          </div>
      </div>
      
      
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Изменить Студента</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="DBmanager.php"  method="post">
							

							
							
                        <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-form-label" >Username:</label>
                                    <input type="text" class="form-control" id="username" name="st_user_name">
                                    <input type="hidden" class="form-control" id="id" name="st_id">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Firstname:</label>
                                    <input type="text" class="form-control" id="firstname" name="st_firstname">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Lastname:</label>
                                    <input type="text" class="form-control" id="lastname"  name="st_lastname">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Email:</label>
                                    <input type="email" class="form-control" id="email" name="st_email">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Password:</label>
                                    <input type="password" class="form-control" id="password" name="st_password">
                                </div>
							
																		 
							
							
							<div class="form-group">
                                    <label class="col-form-label" >Group:</label>
								<select class="form-control" name="group_id" id="group_id">
									
									 <?php
 require_once 'connection.php'; 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM groups") or die("Ошибка " . mysqli_error($link)); 
if($result2)
{
	$rows2 = mysqli_num_rows($result2);
	for ($i = 0 ; $i < $rows2 ; ++$i){
		 $row = mysqli_fetch_row($result2);
	
									?>
									
									
									<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
									
									
									
<?php
		
	}
	mysqli_free_result($result2);
}

mysqli_close($link);
 ?>
									
								</select>
                                </div>
							<div class="form-group">
								
																	 <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM account where id =2") or die("Ошибка " . mysqli_error($link)); 
if($result2)
{
	$rows2 = mysqli_num_rows($result2);
	for ($i = 0 ; $i < $rows2 ; ++$i){
		 $row = mysqli_fetch_row($result2);
	
									?>
                                  		<input class="form-control" type="hidden" value="<?php echo $row[0]; ?>" name="account_id" >
									<?php
		
	}
	mysqli_free_result($result2);
}

mysqli_close($link);
 ?>
							
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-success">Изменить</button>
                        </div>
							


                        </form>
                    </div>
                </div>
            </div>




            <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Вы уверены что хотите удалить студента?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
						
                        <div class="modal-footer">
                            <form action="DBmanager.php" method="post">
                                <input type="hidden" name="st_id" id="st_id">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                <button type="submit" class="btn btn-danger">Да</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="ADD" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Добавить студента</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="DBmanager.php"  method="post">
							

							
							
                        <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-form-label" >Username:</label>
                                    <input type="text" class="form-control" name="st_username">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Firstname:</label>
                                    <input type="text" class="form-control" name="st_firstname">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Lastname:</label>
                                    <input type="text" class="form-control" name="st_lastname">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Email:</label>
                                    <input type="email" class="form-control" name="st_email">
                                </div>
							<div class="form-group">
                                    <label class="col-form-label" >Password:</label>
                                    <input type="password" class="form-control" name="st_password">
                                </div>
							
																		 
							
							
							<div class="form-group">
                                    <label class="col-form-label" >Group:</label>
								<select class="form-control" name="group_id" id="group_id">
									
									 <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM groups") or die("Ошибка " . mysqli_error($link)); 
if($result2)
{
	$rows2 = mysqli_num_rows($result2);
	for ($i = 0 ; $i < $rows2 ; ++$i){
		 $row = mysqli_fetch_row($result2);
	
									?>
									
									
									<option value="<?php echo $row[0]." ".$rows2; ?>"><?php echo $row[1]; ?></option>
									
									
									
<?php
		
	}
	mysqli_free_result($result2);
}

mysqli_close($link);
 ?>
									
								</select>
                                </div>
							<div class="form-group">
								
																	 <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM account where id =2") or die("Ошибка " . mysqli_error($link)); 
if($result2)
{
	$rows2 = mysqli_num_rows($result2);
	for ($i = 0 ; $i < $rows2 ; ++$i){
		 $row = mysqli_fetch_row($result2);
	
									?>
                                  		<input class="form-control" type="hidden" value="<?php echo $row[0]; ?>" name="account_id" >
									<?php
		
	}
	mysqli_free_result($result2);
}

mysqli_close($link);
 ?>
							
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-success">Добавить</button>
                        </div>
							


                        </form>
                    </div>
                </div>
            </div>


      
      
      
 <div class="footer">
         <center style="padding-top: 25px;">
              Вы зашли под именем <a href="#" style="color:white"><?php 
			echo $_SESSION["ADMIN_NAME"]; ?></a> <a style="color:white" href="logout.php">(Выход)</a></center>
          </div>
  </body>
	
	
	  <script type="text/javascript">
            const edit = (id) =>{
                document.getElementById("id").value = id;
                document.getElementById("username").value = document.getElementById("username_"+id).value;
                document.getElementById("firstname").value = document.getElementById("firstname_"+id).value;
                document.getElementById("lastname").value = document.getElementById("lastname_"+id).value;
                document.getElementById("email").value = document.getElementById("email_"+id).value;
                document.getElementById("password").value = document.getElementById("password_"+id).value;
                document.getElementById("group_id").value = document.getElementById("groupid_"+id).value;
                document.getElementById("account_id").value = document.getElementById("accountid_"+id).value;
            }
        </script>
	
	
	    <script type="text/javascript">
                const deleteStudent = (id) =>{
                    document.getElementById("st_id").value = id;
                }
            </script>
	
	
	
    
  </html>