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
            <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Выход</a>
            
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
              <nav class="navbar navbar" id="navb2">
                        <h2 >Преподователи</h2>
                        <button type="button" class="btn btn-primary" id="add" data-toggle="modal" data-target="#ADD" data-whatever="@mdo">Добавить</button>

                    </nav>
			  
			  
			  
			  
			  
			  
			  

  <div class="row">
				  
				  
				  <?php
	  $stud_id =null;
	  if(isset($_POST["student_grade_id"])){
		  $stud_id = $_POST["student_grade_id"];
	  }
	  if(isset($_GET["student_grade_id"])){
		  $stud_id = $_GET["student_grade_id"];
	  }
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$query ="SELECT * FROM grades where student_id='".mysqli_real_escape_string($link,$stud_id)."' and course_id = '".mysqli_real_escape_string($link,$_SESSION["COURSE_ID"])."'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
$result2 = mysqli_query($link, "SELECT * FROM tasks where course_id = '".mysqli_real_escape_string($link,$_SESSION["COURSE_ID"])."'") or die("Ошибка " . mysqli_error($link));
$result3 = mysqli_query($link, "SELECT * FROM students where id = '".mysqli_real_escape_string($link,$stud_id)."'") or die("Ошибка " . mysqli_error($link)); 
if($result)
{
	$rows = mysqli_num_rows($result);
   
    $rows3 = mysqli_num_rows($result3);
	echo "<table class='table table-striped table-hover'>
	<tr>
        <th>Id</th>
		<th>Student</th>
        <th>Date</th>
		<th>Task</th>
		<th>Grade</th>
		<th >Детали</th>
	</tr>";
	$row3 = mysqli_fetch_assoc($result3);
	$fullname = $row3['firstname']." ".$row3['lastname'];
	for ($i = 0 ; $i < $rows ; ++$i)
	{
		$row = mysqli_fetch_assoc($result);
         $rows2 = mysqli_num_rows($result2);
        
		$id = $row['task_id'];
		echo "<tr>"."\n";
        echo "<td>".$row['id']."</td>"."\n";
		echo "<td>".$fullname."</td>"."\n";
		echo "<td>".$row['date']."</td>"."\n";
		$row7 = mysqli_fetch_assoc($result2);
	
		echo "<td>".$row['task_id']."</td>"."\n";
        echo "<td>".$row['grade']."</td>"."\n";
        
	
        
        echo "<input type='hidden' id='grade_".$row['id']."' value='".$row['grade']."'>";
        echo "<input type='hidden' id='date_".$row['id']."' value='".$row['date']."'>";
		echo "<input type='hidden' id='taskid_".$row['id']."' value='".$row['task_id']."'>";
		echo "<input type='hidden' id='studentid_".$row['id']."' value='".$row['student_id']."'>";
		echo "<td>
		<button onclick='edit(".$row['id'].")' class='btn btn-success btn-sm' data-toggle='modal' data-target='#exampleModal' >Изменить</button>
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
                            <h5 class="modal-title" id="exampleModalLabel">Изменить Оценку</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="DBmanager.php"  method="post">
							

							
							<input type="hidden" name="crs_id" value="<?php echo $_SESSION['COURSE_ID']; ?>">
							<input type="hidden" name="page" value="grade_details.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-form-label" >Grade:</label>
                                <input type="text" class="form-control" id="grade" name="gr_grade">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" >Date:</label>
                                <input type="date" class="form-control" id="date" name="gr_date">
                            </div>
							<div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="grr_id">
                                <label class="col-form-label" >Task:</label>
								<select class="form-control" name="gr_task_id" id="task_id">
									
									 <?php
 require_once 'connection.php'; 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM tasks where course_id = '".mysqli_real_escape_string($link,$_SESSION['COURSE_ID'])."'") or die("Ошибка " . mysqli_error($link)); 
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
                                    <label class="col-form-label" >Student:</label>
                                    <select class="form-control" name="gr_student_id" id="student_id">
																	 <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM students where id = '".mysqli_real_escape_string($link,$stud_id)."'") or die("Ошибка " . mysqli_error($link)); 
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
                            <h5 class="modal-title" id="exampleModalLabel2">Вы уверены что хотите удалить оценку?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
						
                        <div class="modal-footer">
                            <form action="DBmanager.php" method="post">
                                <input type="hidden" name="grade_id" id="grade_id">
								<input type="hidden" name="studd" value="<?php echo $stud_id; ?>">
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
                            <h5 class="modal-title" id="exampleModalLabel1">Добавить оценку</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="DBmanager.php"  method="post">
							<input type="hidden" name="page" value="grade_details.php">
							<input type="hidden" name="studd" value="<?php echo $stud_id; ?>">
							
							
							<input type="hidden" name="cr_id" value="<?php echo $_SESSION['COURSE_ID']; ?>">
                        <div class="modal-body">	
                            <div class="form-group">
                                <label class="col-form-label" >Grade:</label>
                                <input type="text" class="form-control" name="grgrade">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" >Date:</label>
                                <input type="date" class="form-control" name="gr_date">
                            </div>	
								<div class="form-group">
                                    <label class="col-form-label" >Task:</label>
								<select class="form-control" name="gr_task_id" id="task_id">
									
									 <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM tasks where course_id = '".mysqli_real_escape_string($link,$_SESSION['COURSE_ID'])."'") or die("Ошибка " . mysqli_error($link)); 
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
                                    <label class="col-form-label" >Student:</label>
								<select class="form-control" name="gr_student_id" id="student_id">
																	 <?php
 require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

	  $result2 = mysqli_query($link, "SELECT * FROM students where id = '".mysqli_real_escape_string($link,$stud_id)."'") or die("Ошибка " . mysqli_error($link)); 
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
          <center style="padding-top:25px;">
              Вы зашли под именем <a href="#" style="color:white"><?php 
			echo $_SESSION["TEACHER_NAME"]; ?></a> <a style="color:white" href="logout.php">(Выход)</a></center>
          </div>
  </body>
	
	
	  <script type="text/javascript">
            const edit = (id) =>{
                document.getElementById("id").value = id;
                document.getElementById("grade").value = document.getElementById("grade_"+id).value;
                document.getElementById("date").value = document.getElementById("date_"+id).value;
                document.getElementById("task_id").value = document.getElementById("taskid_"+id).value;
                document.getElementById("student_id").value = document.getElementById("studentid_"+id).value;
            }
        </script>
	
	
	    <script type="text/javascript">
                const deleteGrade = (id) =>{
                    document.getElementById("grade_id").value = id;
                }
            </script>
	
	
	
    
  </html>