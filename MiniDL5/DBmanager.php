
<?php
require_once 'connection.php';
if(isset($_POST['name'])){
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $query ="INSERT INTO courses VALUES(NULL, '$name')";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:admin.php");
}
?>

<?php
require_once 'connection.php';
if(isset($_POST['group_name'])){
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['group_name']));
    $query ="INSERT INTO groups VALUES(NULL, '$name')";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:adminGroups.php");
}
?>



<?php
require_once 'connection.php';
if(isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['course_id']) && isset($_POST['account_id'])){

    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

    $username = htmlentities(mysqli_real_escape_string($link, $_POST['username']));
    $firstname = htmlentities(mysqli_real_escape_string($link, $_POST['firstname']));
    $lastname = htmlentities(mysqli_real_escape_string($link, $_POST['lastname']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
    $course_id = htmlentities(mysqli_real_escape_string($link, $_POST['course_id']));
    $account_id = htmlentities(mysqli_real_escape_string($link, $_POST['account_id']));
   
    $query ="INSERT INTO teachers VALUES(NULL, '$username','$firstname','$lastname','$email','$password','$course_id','$account_id')";
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);
	header("Location:adminTeachers.php");
}

?>




<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['update_name']) && isset($_POST['update_id'])){
 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['update_id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['update_name']));
  
     
    $query ="UPDATE courses SET name='$name' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	header("Location:admin.php");
} 
?>

<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['group_update_name']) && isset($_POST['group_update_id'])){
 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['group_update_id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['group_update_name']));
  
     
    $query ="UPDATE groups SET name='$name' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	header("Location:adminGroups.php");
} 
?>



<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['user_name']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['course_id']) && isset($_POST['account_id']) && isset($_POST['id']) ){
 
    $username = htmlentities(mysqli_real_escape_string($link, $_POST['user_name']));
    $firstname = htmlentities(mysqli_real_escape_string($link, $_POST['firstname']));
    $lastname = htmlentities(mysqli_real_escape_string($link, $_POST['lastname']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
    $course_id = htmlentities(mysqli_real_escape_string($link, $_POST['course_id']));
    $account_id = htmlentities(mysqli_real_escape_string($link, $_POST['account_id']));
	$id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
  
     
    $query ="UPDATE teachers SET username='$username',firstname='$firstname',lastname='$lastname',email='$email',password='$password',course_id='$course_id',account_id='$account_id' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	header("Location:adminTeachers.php");
}
 

  
?>








<?php
if(isset($_POST['id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['id']);
     
    $query ="DELETE FROM courses WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:admin.php");
}
?>

<?php
if(isset($_POST['gr_id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['gr_id']);
     
    $query ="DELETE FROM groups WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:adminGroups.php");
}
?>


/*------------------------ ADD Grade ------------------------*/
cr_id
<?php
require_once 'connection.php';
if(isset($_POST['grgrade']) && isset($_POST['gr_date']) && isset($_POST['gr_task_id']) && isset($_POST['gr_student_id']) && isset($_POST['cr_id'])){

    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

    $grade = htmlentities(mysqli_real_escape_string($link, $_POST['grgrade']));
    $date = htmlentities(mysqli_real_escape_string($link, $_POST['gr_date']));
    $task_id = htmlentities(mysqli_real_escape_string($link, $_POST['gr_task_id']));
    $student_id = htmlentities(mysqli_real_escape_string($link, $_POST['gr_student_id']));
    $course_id = htmlentities(mysqli_real_escape_string($link, $_POST['cr_id']));
   
    $query ="INSERT INTO grades VALUES(NULL, '$grade', '$date', '$task_id','$student_id','$course_id')";
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);
	if(isset($_POST['page'])){
		header("Location:grade_details.php?student_grade_id=".$_POST['gr_student_id']."");
	}
	else{
	header("Location:adminTasks.php");
	}
}
?>





/*------------------------ UPDATE Grade ------------------------*/

<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));

if(isset($_POST['gr_grade']) && isset($_POST['gr_date']) && isset($_POST['gr_task_id']) && isset($_POST['gr_student_id']) && isset($_POST['grr_id'])){
 
    $grade = htmlentities(mysqli_real_escape_string($link, $_POST['gr_grade']));
    $date = htmlentities(mysqli_real_escape_string($link, $_POST['gr_date']));
    $task_id = htmlentities(mysqli_real_escape_string($link, $_POST['gr_task_id']));
    $student_id = htmlentities(mysqli_real_escape_string($link, $_POST['gr_student_id']));
	$id = htmlentities(mysqli_real_escape_string($link, $_POST['grr_id']));
  
     
    $query ="UPDATE grades SET grade='$grade', date='$date', task_id='$task_id',student_id='$student_id' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	if(isset($_POST['page'])){
		header("Location:grade_details.php?student_grade_id=".$_POST['gr_student_id']."");
	}
	else{
	header("Location:adminTasks.php");
	}
} 
?>



/*------------------------ DELETE Grade ------------------------*/

<?php
if(isset($_POST['grade_id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['grade_id']);
     
    $query ="DELETE FROM grades WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:adminGrades.php");
}
?>








/*------------------------ ADD Task ------------------------*/

<?php
require_once 'connection.php';
if(isset($_POST['task_name']) && isset($_POST['task_date']) && isset($_POST['task_course_id']) && isset($_POST['task_teacher_id'])){

    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

    $name = htmlentities(mysqli_real_escape_string($link, $_POST['task_name']));
    $date = htmlentities(mysqli_real_escape_string($link, $_POST['task_date']));
    $cid = htmlentities(mysqli_real_escape_string($link, $_POST['task_course_id']));
    $tid = htmlentities(mysqli_real_escape_string($link, $_POST['task_teacher_id']));
   
    $query ="INSERT INTO tasks VALUES(NULL, '$name','$date','$cid','$tid')";
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);
	if(isset($_POST['teacher'])){
		header("Location:teacherTasks.php");
	}
	else{
	header("Location:adminTasks.php");
	}
}
?>




/*------------------------ ADD Task ------------------------*/






/*------------------------ UPDATE Task ------------------------*/

<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['task_name']) && isset($_POST['task_date']) && isset($_POST['taskid']) && isset($_POST['courseid']) && isset($_POST['teacherid'])){
 
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['task_name']));
    $date = htmlentities(mysqli_real_escape_string($link, $_POST['task_date']));
    $cid = htmlentities(mysqli_real_escape_string($link, $_POST['courseid']));
    $tid = htmlentities(mysqli_real_escape_string($link, $_POST['teacherid']));
  	$id = htmlentities(mysqli_real_escape_string($link, $_POST['taskid']));
     
    $query ="UPDATE tasks SET name='$name',date='$date',course_id='$cid',teacher_id='$tid' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	if(isset($_POST['teacher'])){
		header("Location:teacherTasks.php");
	}
	else{
	header("Location:adminTasks.php");
	}
} 
?>



<?php
if(isset($_POST['t_id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['t_id']);
     
    $query ="DELETE FROM tasks WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	if(isset($_POST['teacher'])){
		header("Location:teacherTasks.php");
	}
	else{
	header("Location:adminTasks.php");
	}
}
?>









/*------------------------ ADD Student ------------------------*/

<?php
require_once 'connection.php';
if(isset($_POST['st_username']) && isset($_POST['st_firstname']) && isset($_POST['st_lastname']) && isset($_POST['st_email']) && isset($_POST['st_password']) && isset($_POST['group_id']) && isset($_POST['account_id'])){

    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

    $username = htmlentities(mysqli_real_escape_string($link, $_POST['st_username']));
    $firstname = htmlentities(mysqli_real_escape_string($link, $_POST['st_firstname']));
    $lastname = htmlentities(mysqli_real_escape_string($link, $_POST['st_lastname']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['st_email']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['st_password']));
    $group_id = htmlentities(mysqli_real_escape_string($link, $_POST['group_id']));
    $account_id = htmlentities(mysqli_real_escape_string($link, $_POST['account_id']));
   
    $query ="INSERT INTO students VALUES(NULL, '$username','$firstname','$lastname','$email','$password','$group_id','$account_id')";
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);
	header("Location:adminStudents.php");
}
?>






/*------------------------ UPDATE Student ------------------------*/

<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['st_user_name']) && isset($_POST['st_firstname']) && isset($_POST['st_lastname']) && isset($_POST['st_email']) && isset($_POST['st_password']) && isset($_POST['group_id']) && isset($_POST['account_id']) && isset($_POST['st_id']) ){
 
    $username = htmlentities(mysqli_real_escape_string($link, $_POST['st_user_name']));
    $firstname = htmlentities(mysqli_real_escape_string($link, $_POST['st_firstname']));
    $lastname = htmlentities(mysqli_real_escape_string($link, $_POST['st_lastname']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['st_email']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['st_password']));
    $group_id = htmlentities(mysqli_real_escape_string($link, $_POST['group_id']));
    $account_id = htmlentities(mysqli_real_escape_string($link, $_POST['account_id']));
	$id = htmlentities(mysqli_real_escape_string($link, $_POST['st_id']));
  
     
    $query ="UPDATE students SET username='$username',firstname='$firstname',lastname='$lastname',email='$email',password='$password',group_id='$group_id',account_id='$account_id' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	header("Location:adminStudents.php");
} 
?>




/*------------------------ DELETE Student ------------------------*/

<?php
if(isset($_POST['st_id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['st_id']);
     
    $query ="DELETE FROM students WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:adminStudents.php");
}
?>




<?php
if(isset($_POST['tid']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['tid']);
     
    $query ="DELETE FROM teachers WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:adminTeachers.php");
}
?>






/*------------------------ ADD Lesson ------------------------*/

<?php
require_once 'connection.php';
if(isset($_POST['les_course_id']) && isset($_POST['les_group_id'])){

    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

    $course_id = htmlentities(mysqli_real_escape_string($link, $_POST['les_course_id']));
    $group_id = htmlentities(mysqli_real_escape_string($link, $_POST['les_group_id']));
   
    $query ="INSERT INTO lessons VALUES(NULL,'$group_id','$course_id')";
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);
	header("Location:adminLessons.php");
}
?>



/*------------------------ UPDATE Lesson ------------------------*/

<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['lescourseid']) && isset($_POST['lesgroupid']) && isset($_POST['lesid']) ){
 
    $course_id = htmlentities(mysqli_real_escape_string($link, $_POST['lescourseid']));
    $group_id = htmlentities(mysqli_real_escape_string($link, $_POST['lesgroupid']));
	$id = htmlentities(mysqli_real_escape_string($link, $_POST['lesid']));
  
     
    $query ="UPDATE lessons SET course_id='$course_id',group_id='$group_id' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	header("Location:adminLessons.php");
} 
?>



/*------------------------ DELETE Lesson ------------------------*/

<?php
if(isset($_POST['l_id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['l_id']);
     
    $query ="DELETE FROM lessons WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:adminLessons.php");
}
?>




<?php
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

if(isset($_POST['submit']))
{
	session_start();
    $query = mysqli_query($link,"SELECT * FROM teachers WHERE email='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    if($data['password'] == $_POST['password'] && $data!=null)
    {
		$query2 = mysqli_query($link,"SELECT * FROM courses WHERE id='".mysqli_real_escape_string($link,$data['course_id'])."' LIMIT 1");
    	$data2 = mysqli_fetch_assoc($query2);
		
		
		$_SESSION["TEACHER_NAME"] = $data['firstname']." ".$data['lastname'];
		$_SESSION["TEACHER_ID"] = $data['id'];
		$_SESSION["COURSE_NAME"] = $data2['name'];
		$_SESSION["COURSE_ID"] = $data2['id'];
		
		if(isset($_POST["remember"]) && $_POST["remember"]==1){
			 setcookie("login", $data['email'], time()+60*60*24*30, "/");
        setcookie("password", sha1($data['email']), time()+60*60*24*30, "/");
		}
       
        header("Location: course_details.php"); exit();
    }
	$query = mysqli_query($link,"SELECT * FROM students WHERE email='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
	if($data['password'] == $_POST['password'] && $data!=null)
    {
		$query2 = mysqli_query($link,"SELECT * FROM courses WHERE id IN (Select course_id from lessons where group_id ='".mysqli_real_escape_string($link,$data['group_id'])."' )");
    	$data2 = mysqli_fetch_assoc($query2);
		
		
		$_SESSION["USER_NAME"] = $data['firstname']." ".$data['lastname'];
		$_SESSION["USER_ID"] = $data['id'];
		$_SESSION["GROUP_ID"] = $data['group_id'];
		
		if(isset($_POST["remember"]) && $_POST["remember"]==1){
			 setcookie("login", $data['email'], time()+60*60*24*30, "/");
        setcookie("password", sha1($data['email']), time()+60*60*24*30, "/");
		}
       
        header("Location: home.php"); exit();
    }
	if($_POST['login']=="admin" && $_POST['password']=="123"){
		$_SESSION["ADMIN_NAME"] = "Admin";
	 header("Location: admin.php"); exit();
	}
	
	
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
