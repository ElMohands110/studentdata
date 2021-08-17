<?php 

    ob_start(); // Output Buffering Start

    session_start();
    
    $noNavbar = '';
    $pageTitle = 'Login';

    if (isset($_SESSION['Username'])) {
        header('Location: dashboard.php'); // Redirect Register Page
    }
    include 'init.php';

    // Check If User Coming From HTTP Post Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $hashedPass = sha1($password);

        // Check if the user exist in Database
        $stmt = $con->prepare("SELECT 
                                    UserID, Username, `Password` 
                                FROM 
                                    `sign` 
                                WHERE 
                                    Username = ? 
                                AND 
                                    `Password` = ? 
                                AND 
                                    GroupID = 1
                                LIMIT 1");
        $stmt->execute(array($username, $hashedPass));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();


        // If Count > 0 This Database Contain Record This UsernameS
        if($count > 0) {
            $_SESSION['Username'] = $username; // Register Session Name
            $_SESSION['ID'] = $row['UserID']; // Register Session ID
            header('Location: dashboard.php'); // Redirect Register Page
            exit();

        }

    }
?>

    <div class="control container col-sm-10 col-md-4">
        <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h3 class="text-center">Sign In</h4>
            <div class="input">
                <i class="fa fa-user"></i><input class="form-control form-control-lg" type="text" name="user" placeholder="Username" autocomplete="off" required="required"/>
            </div>
            <div class="input">
                <i class="fa fa-lock"></i><input class="form-control form-control-lg pass-input" type="password" name="pass" placeholder="Password" autocomplete="new-password"/><i class="fa fa-eye visual-password"></i>
            </div>
            <input class="btn btn-primary btn-lg input-group" type="submit" value="Login"/>
        </form>
    </div>

<?php 

    include $tpl . 'footer.php'; 
    
    ob_end_flush(); // Output Buffering End
    
?>