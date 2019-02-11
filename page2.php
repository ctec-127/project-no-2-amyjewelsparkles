<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
    <script>
function printPage() {
  window.print();
}
</script>
</head>
<body>
<div id="pagewrapper">
    <?php require "includes/header.inc.php"; ?>
    
    <div class="content">
        <?php
            if (isset($_GET['invitation'])){
                if ($_GET['invitation']=='yes'){
                    if (isset($_GET['image'])){
                        $image = $_GET['image'];
                        switch ($image) {
                            case 'beach':
                                echo '<img src="img/beach.jpg" alt="beach background image" height="600" width="800">';
                                break;
                            case 'cat':
                                echo '<img src="img/cat.jpg" alt="cat background image" height="600" width="800">';
                                break;
                            case 'confetti':
                                echo '<img src="img/confetti.jpg" alt="confetti background image" height="600" width="800">';
                                break;
                            case 'food':
                                echo '<img src="img/food.jpg" alt="party food background image" height="600" width="800">';
                                break;
                            case 'ribbon':
                                echo '<img src="img/ribbon.jpg" alt="party ribbon background image" height="600" width="800">';
                                break;
                            case 'balloon':
                                echo '<img src="img/balloon.jpg" alt="balloons background image" height="600" width="800">';
                                break;
                            default:
                                echo '<img src="img/confetti.jpg" alt="confetti background image" height="600" width="800">';
                                break;
                        }

                    }else{
                        echo '<img src="img/confetti.jpg" alt="confetti background image" height="600" width="800">';
                    }
                    if (isset($_GET['name'])){
                        $name = $_GET['name'];
                        echo '<div class="name"'.">$name</div>";
                    }
                    if (isset($_GET['age'])){
                        $age = $_GET['age'];
                        echo '<div class="age"'."><strong>$age</strong></div>";
                    }
                    if (isset($_GET['date'])){
                        $date = $_GET['date'];
                        echo '<div class="date"'.">$date</div>";
                    }
                    if (isset($_GET['time'])){
                        $time = $_GET['time'];
                        echo '<div class="time"'.">$time</div>";
                    }
                    if (isset($_GET['place'])){
                        $place = $_GET['place'];
                        echo '<div class="place"'.">$place</div>";
                    }
                    if (isset($_GET['rsvp'])){
                        $rsvp = $_GET['rsvp'];
                        echo '<div class="rsvp"'.">RSVP: $rsvp</div>";
                    }
                }
                echo '<p><input type="button" class="block" value="Print Invitation" onclick="printPage()" /></p>';
            
            }elseif (isset($_GET['thankyou'])){
                if ($_GET['thankyou']=='yes'){
                    
                    if (isset($_GET['image'])){
                        $image = $_GET['image'];
                        switch ($image) {
                            case 'beach':
                                echo '<img src="img/beach3.jpg" alt="beach background image" height="600" width="800">';
                                break;
                            case 'cat':
                                echo '<img src="img/cat3.jpg" alt="cat background image" height="600" width="800">';
                                break;
                            case 'confetti':
                                echo '<img src="img/confetti3.jpg" alt="confetti background image" height="600" width="800">';
                                break;
                            case 'food':
                                echo '<img src="img/food3.jpg" alt="party food background image" height="600" width="800">';
                                break;
                            case 'ribbon':
                                echo '<img src="img/ribbon3.jpg" alt="party ribbon background image" height="600" width="800">';
                                break;
                            case 'balloon':
                                echo '<img src="img/balloon3.jpg" alt="balloons background image" height="600" width="800">';
                                break;
                            default:
                                echo '<img src="img/confetti3.jpg" alt="confetti background image" height="600" width="800">';
                                break;
                        }
                    }else{
                        echo '<img src="img/confetti3.jpg" alt="confetti background image" height="600" width="800">';
                    }
                    
                    if (isset($_GET['name'])){
                        $name = $_GET['name'];
                            echo '<div class="thanksname"'.">Thank you for coming to $name"."'s party!</div>";
                    }
                echo '<p><input type="button" class="block" value="Print Thank You card" onclick="printPage()" /></p>';
                }
            }else{
                echo 'Please check query string and try again. Refer to <a href="page1.php">instructions.</a>';
            }
        ?>
        <a href="page1.php"><button type="button" class="block">Back to Instructions</button></a>
        
        <?php require "includes/footer.inc.php"; ?>
    </div>
</div>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>