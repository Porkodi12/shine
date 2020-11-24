<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="style1.css">
        
        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        
       <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <title>Sidebar menu</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                
                <div>
                    <a href="#" class="nav__logo">
                        <img src="assets/icons/logo.svg" alt="" class="nav__logo-icon">
                        <span class="nav__logo-text">Shine</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="admission.php" class="nav__link active">
                            <i class='bx bx-user-circle nav__icon'></i>
                            <span class="nav__text">Admission</span>
                        </a>
                        <a href="course.php" class="nav__link">
                            <i class='bx bx-download nav__icon'></i>
                              <span class="nav__text">Material</span>
                        </a>
                        <a href="fees.php" class="nav__link">
                            <i class='bx bx-dollar nav__icon'></i>
                              <span class="nav__text">Fees</span>
                        </a>
                        <a href="class.php" class="nav__link">
                            <i class='bx bx-book-open nav__icon' ></i>
                            <span class="nav__text">Live Class</span>
                        </a>
                        <a href="ctable.php" class="nav__link">
                            <i class='bx bx-clipboard nav__icon' ></i>
                            <span class="nav__text">TimeTable</span>
                        </a>
                        <!-- <a href="timetable.php" class="nav__link">
                            <i class='bx bx-pencil nav__icon' ></i>
                            <span class="nav__text">Exam TimeTable</span>
                        </a> -->
                        <a href="mark.php" class="nav__link">
                            <i class='bx bx-trophy nav__icon'></i>
                            <span class="nav__text">Mark</span>
                        </a>
                        
                        <a href="announce.php" class="nav__link">
                            <i class='bx bx-bell-plus nav__icon'></i>
                              <span class="nav__text">Announcement</span>
                        </a>
                        <a href="feedback.php" class="nav__link">
                            <i class='bx bx-message nav__icon' ></i>
                            <span class="nav__text">Feedback</span>
                        </a> 
                        <a href="attendence.php" class="nav__link">
                            <i class='bx bx-calendar-check nav__icon'></i>
                              <span class="nav__text">Attendence</span>
                        </a>                
                    </ul>
                </div>
                <a href="#" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Close</span>
                </a>
           
            </nav>
        </div>
        <!-- <h2>Unete al canal</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Atque optio odio officiis nostrum nesciunt quam libero. 
            Cumque impedit veritatis, quibusdam nulla accusantium illo. 
            In velit laboriosam obcaecati quaerat eaque beatae.</p> -->
    </body>
    <!-- MAIN JS -->
    <script src="main.js"></script>
    
</html>   