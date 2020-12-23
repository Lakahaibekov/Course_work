<?php 
			session_start();

if (!isset($_SESSION['USER_NAME'])) {
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
        <title>Grades</title>
  </head>
  <body>
      
      <nav class="navbar navbar-expand-lg " id="navb">
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
        <form action="change-style.php" method="post" name="form">
			<input type="hidden" name="page" value="all_grades">
			<select onchange="this.form.submit()" name="style" class="form-control">
				<option value="Style"
						<?php if(isset($_COOKIE['dl-style'])){
									if($_COOKIE['dl-style']=='Default'){?>
									selected
									<?php
									}}
						?>
}
						
						>Default</option>
				<option
						<?php if(isset($_COOKIE['dl-style'])){
									if($_COOKIE['dl-style']=="Dark"){?>
									selected
									<?php
									}}
						?>
						>Dark</option>
				
				<option value="Large"
						<?php if(isset($_COOKIE['dl-style'])){
									if($_COOKIE['dl-style']=='Large'){?>
									selected
									<?php
									}}
						?>
}
						
						>Large</option>
				
				<option value="Small"
						<?php if(isset($_COOKIE['dl-style'])){
									if($_COOKIE['dl-style']=='Small'){?>
									selected
									<?php
									}}
						?>
}
						
						>Small</option>
			</select>
			
			</form>
      </li>
      
    </ul>
      <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
			echo $_SESSION["USER_NAME"]; ?>
            <img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/u/f2" class="user_picture" width="35"
    height="35">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-tachometer"></i> Личный Кабинет</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> О пользователе</a>
          <a class="dropdown-item" href="all_grades.php"><i class="fa fa-table"></i> Оценки</a>
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
                <div class="form-group">
                    <div class="row">
                    <img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/u/f1" width="100" height="100" style="border-radius: 50%">
                    <h2 style="margin-left: 20px;"><?php 
			echo $_SESSION["USER_NAME"]; ?></h2>
                    </div>
                <nav aria-label="breadcrumb" >
          <ol class="breadcrumb" id="breadcrumb1">
            <li class="breadcrumb-item"><a href="home.php">В начало</a></li>
            <li class="breadcrumb-item"><a href="#">Личный кабинет</a></li>
            <li class="breadcrumb-item active" aria-current="page">Оценки</li>
          </ol>
        </nav>
            </div>
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
                    <li class="list-item-group"><a href="home.php">В начало</a></li>
                        <li class="list-item-group"><a href="#">Личный кабинет</a></li>
                       <li class="list-item-group"><a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Мои курсы
                    </a>
							<?php 
				   require_once 'connection.php';
							$link = mysqli_connect($host, $user, $password, $database) 
								or die("Ошибка " . mysqli_error($link));
				  $query2 = mysqli_query($link,"SELECT * FROM courses WHERE id IN (Select course_id from lessons where group_id ='".mysqli_real_escape_string($link,$_SESSION["GROUP_ID"])."' )");
    				
				  $rows = mysqli_num_rows($query2); ?>
				
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					    <?php for($i=0;$i<$rows;$i++){
					  $data2 = mysqli_fetch_assoc($query2);
					  
					  $query3 = mysqli_query($link,"SELECT * FROM teachers WHERE course_id='".mysqli_real_escape_string($link,$data2["id"])."'");
					  $data3 = mysqli_fetch_assoc($query3);
				  ?>
					   
					   <form action="course_details_student.php" method="post">
							  <input type="hidden" name="course_id" value="<?php echo $data2['id']; ?>">
							  <input type="hidden" name="teacher_name" value="<?php echo $data3['lastname']." ".$data3['firstname']; ?>">
                    <button class="dropdown-item"  ><img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/i/course"><?php echo " ".$data2['id']." ".$data2['name']; ?></button></form>
					   
					   
					   
					   
                     
					   	<?php
				  }
				  ?>
                    
                    </div>
                  </li>
                        </ul>
              </div> 
         
        </div>
          <div class="col-9">
          <div class="container">
              <div class="row">
              <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Название курса</th>
                          <th scope="col" >Оценка</th>
                        </tr>
                      </thead>
                  
                      <tbody>
						  <?php 
				   require_once 'connection.php';
							$link = mysqli_connect($host, $user, $password, $database) 
								or die("Ошибка " . mysqli_error($link));
				  $query2 = mysqli_query($link,"SELECT * FROM courses WHERE id IN (Select course_id from lessons where group_id ='".mysqli_real_escape_string($link,$_SESSION["GROUP_ID"])."' )");
    				
				  $rows = mysqli_num_rows($query2);
				  for($i=0;$i<$rows;$i++){
					  $data2 = mysqli_fetch_assoc($query2);
					  
					  $query3 = mysqli_query($link,"SELECT * FROM teachers WHERE course_id='".mysqli_real_escape_string($link,$data2["id"])."' LIMIT 1");
					  $data3 = mysqli_fetch_assoc($query3);
				  ?>
						  
                        <tr>
                          <th>

							
							
							<form action="grades.php" method="post">
						<input type="hidden" name="course_id" value="<?php echo $data2['id']; ?>">  
				  		<button  class="btn btn-link"><?php echo " ".$data2['id']." ".$data2['name']." (".$data3['lastname']." ".$data3['firstname'].") "; ?> 2020-2021/1</button>
				  		</form>
							</th>
							  
							  
							  
							  
							  		  <?php 
				  $query4 = mysqli_query($link,"SELECT * FROM tasks WHERE course_id ='".mysqli_real_escape_string($link,$data2['id'])."'");
    				$total=0;
						  $count=0;
				  $rows1 = mysqli_num_rows($query4);
				  for($j=0;$j<$rows1;$j++){
					  $data4 = mysqli_fetch_assoc($query4);
					  $count+=1;
					  $query5 = mysqli_query($link,"SELECT * FROM grades WHERE task_id='".mysqli_real_escape_string($link,$data4["id"])."'");
					  $data5 = mysqli_fetch_assoc($query5);
					  $total+=$data5['grade'];
				  ?>
										    <?php
				  }
				  ?>  
                            <td><?php
					  if($count==0){ 
						   echo "-"; 
					   }else{
					  $t = (int)($total/$count);
							
					  echo $t."%"; 
							}?>
							</td>
							
							  
							  
                        </tr>
						    <?php
				  }
				  ?>
<!--
                        <tr>
                          <th><a href="grades.html">11647 Web-technologIes (Мукажанов Н.К.) 2020-2021/1</a></th>
                            <td>F(0,00%)</td>
                        </tr>
                          <tr>
                          <th><a href="grades.html">11667 ArchItecture and OrganIzatIon of Computer Systems (Coursera КИИБ) 2020-2021/1</a></th>
                            <td>F(0,00%)</td>
                        </tr>
-->
                      </tbody>
</table>
            
              </div>
        </div>
              </div>
          </div>
      </div>

      
      
      
 <div class="footer">
     <div style="margin-top: 20px;">
          <center style="padding-top: 25px;">
              Вы зашли под именем <a href="#" style="color:white"><?php 
			echo $_SESSION["USER_NAME"]; ?></a> <a style="color:white" href="logout.php">(Выход)</a></center></div>
          </div>
  </body>
    
  </html>