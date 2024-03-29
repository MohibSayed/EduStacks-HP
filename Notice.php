<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="notice.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portal</title>
</head>
<body>
    
    <div class="section-1">
        <div class="navbar">
            <div class="header-logo">
                <img src="logo-removebg-preview.png" alt="" width="90" height="90">
                <h1><a href="index.php" style="text-decoration: none;">EduStacks</a></h1>
                <!--<h1>Portal</h1>--->
            </div>
            <div class="header-tabs">
                <a href="Notice.php" id="#aa">Notices </a>
                <a href="report.php">Reports </a>
                <a href="DeadLine.php">Deadlines </a>
                
            </div>
            <!--<div class="header-login">
                <a href="">Login</a>
                <button>Sign Up</button>
            </div>-->
        </div>
    </div>
    <dive class="next-1">
        <form action="" class="form">
            <div class="heading">
            <h2>PUBLISH NOTICE</h2>
        </div>
            <div class="form-boxes">
            <div class="form-box">
                <h3>Enter Heading:</h3>
                <input type="text" id="inputsubject" name="Heading" placeholder="Enter the Heading" required>
            </div>
            <div class="form-box">
            <h3>Enter Description:</h3>
                <!--<input type="textbox" id="design" name="context" placeholder="Enter Description" required>-->
                <input type="text" id="inputcontent" placeholder="Enter description">
            </div>
            <div class="submit-box">
                
                    <!--<input type="submit" id="submit" name="context" placeholder="Submit" required>-->
                    <button id="submit">Submit</button>
                </div>
            </div>
        </form>
        
        <div class="part-2">
            <div class="report">
                <div class="head">
                    <h2>NOTICES✏️</h2>
                </div>
    
                <ul id="notices">

                </ul>

            </div>
        </div>
    </div>
    <script src="notice.js"></script>
</body>
</html>