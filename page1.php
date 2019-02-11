<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
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
    
        <h2>Birthday Invitation + Thankyou Card Maker 7.0!</h2>
        
        <p>Please read the instructions on this page to generate a custom <strong>"Birthday Invitation"</strong> or <strong>"Thankyou Card"</strong>.</p>
        
        <h3>To make Invitation:</h3> 
        
        <p>
        You can customize the invitation by entering the following criteria in the search bar, after page2.php, separated by '&'.
                
        <p>?invitation=yes (*required)<br>
        &name = (your name)<br>
        &age = (your age)<br>
        &date = (date of event)<br>
        &time = (time of event)<br>
        &place = (place of event)<br>
        &rsvp = (RSVP information)<br>
        &image = (background images available, please see below)<br>
        <p class="green"><strong>For Example: page2.php?invitation=yes&name=John Smith&age=18&date=April-1st-2019&time=7:00 PM&place=Firstenberg Community Center&rsvp=John(360-555-5555)</strong>
        </p>
        <p><a href="page2.php">Please click here to go to the "Birthday Invitation Maker".</a></p>
        </p>
        <h3>To make Thank You Card:</h3> 
        You can customize the card by entering the following criteria in the search bar, after page2.php, separated by '&'.
        <p>?thankyou=yes (*required)<br>
        &name (name) <br>
        &image = (background image, see below)<br>
        <p class="green"><strong>For Example: page2.php?thankyou=yes&name=John&image=cat</strong>
        <br></p>
        You can choose backgrounds for your invitation or thankyou card from the following by adding an "image" query. If no image is selected, default image "confetti" will be added.<br>
        <strong>For Example: &image=cat</strong>
        <br></p>
        <p class="red">More images coming soon!</p>

        <table>
            <tr>
                <th>balloon</th>
                <th>beach</th>
                <th>cat</th>
                <th>confetti</th>
                <th>food</th>
                <th>ribbon</th>
            </tr>
            
            <tr>
            <td><img src="img/balloon2.jpg" alt="balloon backgroung image" height="82" width="110"></td>
            <td><img src="img/beach2.jpg" alt="beach backgroung image" height="82" width="110"></td>
            <td><img src="img/cat2.jpg" alt="cat backgroung image" height="82" width="110"></td>
            <td><img src="img/confetti2.jpg" alt="confetti backgroung image" height="82" width="110"></td>
            <td><img src="img/food2.jpg" alt="party food backgroung image" height="82" width="110"></td>
            <td><img src="img/ribbon2.jpg" alt="ribbon backgroung image" height="82" width="110"></td>
            
            </tr>
        </table>
    
        <p>
         Once you are satisfied with your invitation, you can print the page, and cut out the invitation.<br>
        </p>
        <p><input type="button" value="Print Instructions" onclick="printPage()" /></p>
    </div>
    <a href="page2.php"><button type="button" class="block">Go to Invitation + Thankyou Card Maker 7.0</button></a>

    <?php require "includes/footer.inc.php"; ?>
</div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>