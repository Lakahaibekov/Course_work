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
    <link rel="stylesheet" href="style.css"> 
      	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <title>Home</title>
  </head>
  <body>
      
     
      <nav class="navbar navbar-expand-lg ">
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
          <a class="dropdown-item" href="home.html">Default</a>
          <a class="dropdown-item" href="home-dark.html">Dark</a>
        </div>
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
          <a class="dropdown-item" href="all_grades.html"><i class="fa fa-table"></i> Оценки</a>
          <a class="dropdown-item" href="#"><i class="fa fa-comment"></i> Сообщения</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Настройки</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="auth.php" onclick ="alert('<?php echo logout(); ?>')"><i class="fa fa-sign-out"></i> Выход</a>
            
        </div>
      </li>
          </ul>
  </div>
</nav>
      
      <div class="card mt-3 mb-3" id="header_card">
            <div class="card-body">
                <h2>mini-dl.iitu.kz</h2>
                <a href="home.html">Начало</a>
            </div>
          </div>
      
      
      
    <div class="container-fluid" >
      <div class="row">
          <div class="col-2" >
              <div class="container">
                  <div class="row">
          <div class="card-body p-3">
              <h5 class="card-title">Навигация</h5>
              </div>
            <div class="card-text content">
              <ul class="list-group">
                    <li class="list-item-group"><a href="home.html">В начало</a></li>
                        <li class="list-item-group"><a href="#">Личный кабинет</a></li>
                        <li class="list-item-group"><a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Мои курсы
                    </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="course_details.html">11645</a>
                      <a class="dropdown-item" href="course_details.html">11658</a>
                      <a class="dropdown-item" href="course_details.html">11659</a>
                    </div>
                  </li>
                 
                  
                  
                  
                        </ul>
                </div>
              </div> 
         </div>
        </div>
          <div class="col-9">
          <div class="container">
          <div class="row">
              <form>
              <label>Поиск курса</label>
              <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter course name">
                  </div>
                  <div class="form-group">
              <button class="btn btn-secondary btn-sm">Применить</button>
                  </div>
              </form>
              </div>
              <div class="row"><h2>Мои курсы</h2></div>
              <div class="row">
              <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                      <div class="form-group">
                    <a class="jumb-a" href="course_details.html"><img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/i/course"> 11645 OperatIng Systems (Сапакова С.З.) 2020-2021/1</a>
                          </div>
                    <ul class="list-group">
                    <li class="list-item-group">Teacher:<a href="#"> Zhansaya Bekaulova</a></li>
                        <li class="list-item-group">Teacher:<a href="#"> Saya Sapakova</a></li>
                        <li class="list-item-group">Teacher:<a href="#"> Karakoz Teshebayeva</a></li>
                        </ul>
                  </div>
                </div>
                  
                  
                  <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                      <div class="form-group">
                    <a class="jumb-a" href="#"><img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/i/course"> 11647 Web-technologIes (Мукажанов Н.К.) 2020-2021/1
</a>
                          </div>
                    <ul class="list-group">
                    <li class="list-item-group">Teacher:<a href="#"> Nursultan Alpysbay</a></li>
                        <li class="list-item-group">Teacher:<a href="#"> Nurzhan Mukazhanov</a></li>
                        </ul>
                  </div>
                </div>
                  
                  
                  
                  <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                      <div class="form-group">
                    <a class="jumb-a" href="#"> <img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/i/course">11667 ArchItecture and OrganIzatIon of Computer Systems (Coursera КИИБ) 2020-2021/1
</a>
                          </div>
                    <ul class="list-group">
                    <li class="list-item-group">Teacher:<a href="#"> Madina Ipalakova</a></li>
                        <li class="list-item-group">Teacher:<a href="#"> Nurgul Nalgozhina</a></li>

                        </ul>
                  </div>
                </div>
                  
                  
                  
              
              </div>
            
              
        </div>
              </div>
          </div>
      </div>

      
      
      
 <div class="footer">
     <div style="margin-top: 20px;">
          <center>
              Вы зашли под именем <a href="#" style="color:white">Nurbol Lakhaibekov</a> <a style="color:white" href="index.html">(Выход)</a></center></div>
          </div>
  </body>
    
  </html>