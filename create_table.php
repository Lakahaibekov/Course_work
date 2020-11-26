


<?php
require_once 'connection.php';
 

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
//$query ="CREATE Table account
//(
//    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//    role VARCHAR(200) NOT NULL
//)";
//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
//if($result)
//{
//    echo "Создание таблицы прошло успешно";
//}


//
//
//$query ="CREATE Table groups
//(
//    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//    name VARCHAR(200) NOT NULL
//)";
//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
//if($result)
//{
//    echo "Создание таблицы прошло успешно";
//}





 
//$query ="CREATE Table teachers
//(
//    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//    username VARCHAR(200) NOT NULL,
//    firstname VARCHAR(200) NOT NULL,
//    lastname VARCHAR(200) NOT NULL,
//    email VARCHAR(200) NOT NULL,
//    password VARCHAR(200) NOT NULL,
//    course_id  int,
//	FOREIGN KEY(course_id) REFERENCES courses(id),
//	account_id  int,
//	FOREIGN KEY(account_id) REFERENCES account(id)
//)";

//$query ="CREATE Table tasks
//(
//    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//    name VARCHAR(200) NOT NULL,
//    date DATE NOT NULL,
//    course_id  int,
//	FOREIGN KEY(course_id) REFERENCES courses(id),
//	teacher_id  int,
//	FOREIGN KEY(teacher_id) REFERENCES teachers(id)
//)";



//$query ="CREATE Table students
//(
//    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//    username VARCHAR(200) NOT NULL,
//    firstname VARCHAR(200) NOT NULL,
//    lastname VARCHAR(200) NOT NULL,
//    email VARCHAR(200) NOT NULL,
//    password VARCHAR(200) NOT NULL,
//    group_id  int,
//	FOREIGN KEY(group_id) REFERENCES groups(id),
//	account_id  int,
//	FOREIGN KEY(account_id) REFERENCES account(id)
//)";


//
//$query ="CREATE Table lessons
//(
//    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//    group_id  int,
//	FOREIGN KEY(group_id) REFERENCES groups(id),
//	course_id  int,
//	FOREIGN KEY(course_id) REFERENCES courses(id)
//)";



$query ="CREATE Table grades
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	grade INT NOT NULL,
	date DATE NOT NULL,
    task_id  int,
	FOREIGN KEY(task_id) REFERENCES tasks(id),
	student_id  int,
	FOREIGN KEY(student_id) REFERENCES students(id)
)";



$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы прошло успешно";
}





 
mysqli_close($link);
?>