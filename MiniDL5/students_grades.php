<?php 
			session_start();

if (!isset($_SESSION['TEACHER_NAME'])) {
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
    <?php
	  if(isset($_COOKIE['dl-style'])){	
		  ?>
	  <link rel="stylesheet" href="<?php echo $_COOKIE['dl-style']; ?>.css"> 
	  <?php
		    } else{?>
			  <link rel="stylesheet" href="style.css"> 
		 <?php }
	  ?>
      	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <title>Admin</title>
  </head>
  <body>
      
      <nav class="navbar navbar-expand-lg" id="navb">
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
        <li>
       
      
    </ul>
      <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
			echo $_SESSION["TEACHER_NAME"]; ?>
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
                <a href="course_details.php">Начало</a>
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
                    <li class="list-item-group"><a href="course_details.php"><i class="fa fa-book" aria-hidden="true"></i> My Course</a></li>
                        <li class="list-item-group"><a href="groups_grades.php">Groups</a></li>
                        </ul>
<!--
              <ul class="list-group">
                    <li class="list-item-group"><a href="admin.php"><i class="fa fa-book" aria-hidden="true"></i> Курсы</a></li>
                        <li class="list-item-group"><a href="adminTeachers.php"><i class="fa fa-users" aria-hidden="true"></i> Преподователи</a></li>
                        <li class="list-item-group"><a href="adminGroups.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Группы</a></li>
                        <li class="list-item-group"><a href="adminStudents.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Студенты</a></li>
                        <li class="list-item-group"><a href="adminTasks.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Таски</a></li>
                        <li class="list-item-group"><a href="adminLessons.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Занятия</a></li>
                        <li class="list-item-group"><a href="adminGrades.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Оценки</a></li>
                        </ul>
-->
              </div> 
         
        </div>
          <div class="col-9">
          <div class="container">
              <nav class="navbar navbar" id="navb2" >
                        <h2 >Студенты</h2>

                    </nav>
			  
			  
			  
			  
			  
			  
			  

  <div class="row">
				  
				  
				  <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$query ="SELECT * FROM students where group_id = '".mysqli_real_escape_string($link,$_POST["groupId"])."'";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
$result2 = mysqli_query($link, "SELECT * FROM courses") or die("Ошибка " . mysqli_error($link)); 
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
		echo "<tr>"."\n";
		echo "<td>".$row['id']."</td>"."\n";
		echo "<td>".$row['username']."</td>"."\n";
		echo "<td>".$row['firstname']."</td>"."\n";
		echo "<td>".$row['lastname']."</td>"."\n";
		echo "<td>".$row['email']."</td>"."\n";
		echo "<td>
		<form action='grade_details.php' method='post'>
		<input type='hidden' name='student_grade_id' value='".$row['id']."'>
		<input type='hidden' name='group_grade_id' value='".$row['group_id']."'>
		<button class='btn btn-info btn-sm' >Оценки</button>
		</form>
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
      
      

      
 <div class="footer">
         <center style="padding-top:25px;">
              Вы зашли под именем <a href="#" style="color:white"><?php 
			echo $_SESSION["TEACHER_NAME"]; ?></a> <a style="color:white" href="logout.php">(Выход)</a></center></div>
  </body>
	
	
	  
	
	
    
  </html>