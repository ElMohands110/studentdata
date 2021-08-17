<?php
    /*
    *****************************************
    ** Third Year Page
    *****************************************
    */

    ob_start(); // Output Buffering Start
    
    session_start();

    $pageTitle = 'Third Year';
    
    if (isset($_SESSION['Username'])) {

        include 'init.php';
        
        $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

        // ----------------------- Start Student Page
        if ($do == 'Manage') { // Manage Page 

            // Select All Users Except Admin
            $stmt = $con->prepare("SELECT * FROM datathird");

            // Execute The Statement
            $stmt->execute();

            // Assign To Vaiable
            $rows = $stmt->fetchAll();
        
        ?>

            <h1 class='text-center'>Third Year</h1>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered text-center main-table">
                        <thead>
                            <tr>
                                <td>#ID</td>
                                <td>Name</td>
                                <td>Student Number</td>
                                <td>Parrent Number</td>
                                <td>Register Date</td>
                                <td>1st Degree</td>
                                <td>2nd Degree</td>
                                <td>3rd Degree</td>
                                <td>4th Degree</td>
                                <td>5th Degree</td>
                                <td>6th Degree</td>
                                <td>7th Degree</td>
                                <td>Control</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 

                                foreach($rows as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['ID'] . "</td>";
                                    echo "<td>" . $row['Name'] . "</td>";
                                    echo "<td>" . $row['Student_Number'] . "</td>";
                                    echo "<td>" . $row['Parrent_Number'] . "</td>";
                                    echo "<td>" . $row['Date'] . "</td>";
                                    echo "<td>" . $row['FirstDegree'] . "</td>";
                                    echo "<td>" . $row['SecondDegree'] . "</td>";
                                    echo "<td>" . $row['ThirdDegree'] . "</td>";
                                    echo "<td>" . $row['FourthDegree'] . "</td>";
                                    echo "<td>" . $row['FifthDegree'] . "</td>";
                                    echo "<td>" . $row['SithDegree'] . "</td>";
                                    echo "<td>" . $row['SeventhDegree'] . "</td>";
                                    echo "<td>
                                    <a href='thirdyear.php?do=Edit&id=" . $row['ID'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                    <a href='thirdyear.php?do=Delete&id=" . $row['ID'] . "' class='btn btn-danger confirm'><i class='fa fa-times'></i> Delete</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }

                            ?>
                        </tbody>

                    </table>
                </div>
                <a href="thirdyear.php?do=Add" class="btn btn-primary">New Student</a>
            </div>

<?php   } elseif ($do == 'Add') { // Edit Page ?>

                <h1 class="text-center">Add Student</h1>
                <div class="container">
                    <form class="form-horizontal" action="?do=Insert" method="POST">

                        <!-- ID Field -->
                        <div class="form-group">
                            <label>ID</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="id" class="form-control form-control-lg" autocomplete="off" placeholder="Student ID" required="required" />
                            </div>
                        </div>

                        <!-- Name Field -->
                        <div class="form-group">
                            <label>Name</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="name" class="form-control form-control-lg" autocomplete="off" placeholder="Student Name" required="required" />
                            </div>
                        </div>

                        <!-- Student Number Field -->
                        <div class="form-group">
                            <label>Student Number</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="studentnumber" class="form-control form-control-lg" autocomplete="new-password" placeholder="Student Number" required="required"/>
                            </div>
                        </div>  

                        <!-- Parrent Number Field -->
                        <div class="form-group">
                            <label>Parrent Number</label>
                            <div class="col-sm-10 col-md-6 password">
                                <input type="number" name="parrentnumber" class="form-control form-control-lg" autocomplete="new-password" placeholder="Parrent Number" required="required"/>
                            </div>
                        </div>  

                        <!-- 1st Degree Field -->
                        <div class="form-group">
                            <label>1st Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="firstdegree" class="form-control form-control-lg" autocomplete="off" placeholder="1st Exam"/>
                            </div>
                        </div>  

                        <!-- 2nd Degree Field -->
                        <div class="form-group">
                            <label>2nd Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="seconddegree" class="form-control form-control-lg" autocomplete="off" placeholder="2nd Exam"/>
                            </div>
                        </div>  
                        <!-- 3rd Degree Field -->
                        <div class="form-group">
                            <label>3rd Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="thirddegree" class="form-control form-control-lg" autocomplete="off" placeholder="3rd Exam"/>
                            </div>
                        </div>  
                        <!-- 4th Degree Field -->
                        <div class="form-group">
                            <label>4th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="fourthdegree" class="form-control form-control-lg" autocomplete="off" placeholder="4th Exam"/>
                            </div>
                        </div>  
                        <!-- 5th Degree Field -->
                        <div class="form-group">
                            <label>5th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="fifthdegree" class="form-control form-control-lg" autocomplete="off" placeholder="5th Exam"/>
                            </div>
                        </div>  
                        <!-- 6th Degree Field -->
                        <div class="form-group">
                            <label>6th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="sithdegree" class="form-control form-control-lg" autocomplete="off" placeholder="6th Exam"/>
                            </div>
                        </div>  
                        <!-- 7th Degree Field -->
                        <div class="form-group">
                            <label>7th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="seventhdegree" class="form-control form-control-lg" autocomplete="off" placeholder="7th Exam"/>
                            </div>
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Add New Student" class="btn btn-primary btn-lg" />
                            </div>
                        </div>  
                    </form>
                </div>

<?php   } elseif ($do == 'Insert') { // Insert Page

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                echo "<div class='container'>";

                // Get Variables From The Form
                $name           = $_POST['name'];
                $studentNumber  = $_POST['studentnumber'];
                $parrentnumber  = $_POST['parrentnumber'];
                $firstDegree    = $_POST['firstdegree'];
                $secondDegree   = $_POST['seconddegree'];
                $thirdDegree    = $_POST['thirddegree'];
                $fourthDegree   = $_POST['fourthdegree'];
                $FifthDegree    = $_POST['fifthdegree'];
                $sithDegree     = $_POST['sithdegree'];
                $seventhDegree  = $_POST['seventhdegree'];

                // Validate The Form
                $formerror = array();
                if (strlen($studentNumber) < 11) {
                    $formerror[] = "Student Number Can't be Less than <strong>11 Number</strong>";
                }
                if (strlen($studentNumber) > 11) {
                    $formerror[] = "Student Number Can't be more than <strong>11 Number</strong>";
                }
                $formerror = array();
                if (strlen($parrentnumber) < 11) {
                    $formerror[] = "Parrent Number Can't be Less than <strong>11 Number</strong>";
                }
                if (strlen($parrentnumber) > 11) {
                    $formerror[] = "Parrent Number Can't be more than <strong>11 Number</strong>";
                }

                // Check If There's No Error Proceed The Update Operation
                if (empty($formerror)) {

                    // Check If User Exist In Database
                    $checkID = checkItem("ID", "datathird", $id);
                    $checkName = checkItem("Name", "datathird", $name);
                    $checkStudentNumber = checkItem("Student_Number", "datathird", $studentNumber);
                    $checkParrentNumber = checkItem("Parrent_Number", "datathird", $parrentnumber);
                    
                    if ($checkID == 1) {
                        $msg = '<div class="alert alert-info">Sorry, This ID Is already Exist</div>';
                        $page = 'Addition Page';
                        redirectHome($msg, $page, 'back');
                    }
                    if ($checkName == 1) {
                        $msg = '<div class="alert alert-info">Sorry, This Student Is already Exist</div>';
                        $page = 'Addition Page';
                        redirectHome($msg, $page, 'back');
                    }
                    if ($checkStudentNumber == 1) {
                        $msg = '<div class="alert alert-info">Sorry, Student Number Is already Exist</div>';
                        $page = 'Addition Page';
                        redirectHome($msg, $page, 'back');
                    }
                    if ($checkParrentNumber == 1) {
                        $msg = '<div class="alert alert-info">Sorry, Parrent Number Is already Exist</div>';
                        $page = 'Addition Page';
                        redirectHome($msg, $page, 'back');
                    } else {

                        // Insert Userinfo in Database
                        $stmt = $con->prepare("INSERT INTO 
                                                datathird(`Name`, Student_Number, Parrent_Number, FirstDegree, SecondDegree, ThirdDegree, FourthDegree, FifthDegree, SithDegree, SeventhDegree, Date)
                                                VALUES(:zname, :zsnumber, :zpnumber, :zfdegree,  :zsdegree,  :ztdegree,  :zfodegree,  :zfidegree,  :zsidegree,  :zsedegree, now()) ");
                        $stmt->execute(Array(
                            'zname'     => $name,
                            'zsnumber'  => $studentNumber,
                            'zpnumber'  => $parrentnumber,
                            'zfdegree'  => $firstDegree,
                            'zsdegree'  => $secondDegree,
                            'ztdegree'  => $thirdDegree,
                            'zfodegree' => $fourthDegree,
                            'zfidegree' => $FifthDegree,
                            'zsidegree' => $sithDegree,
                            'zsedegree' => $seventhDegree
                        ));
        
                        // Echo Success Message
                        $msg = '<div class="alert alert-success">Student Has Been Added</div>';
                        $page = 'Additiona Page';
                        redirectHome($msg, $page, 'back');
                    }

                }

                // Loop into Array and Echo It
                foreach ($formerror as $error) {
                    $msg = "<div class='alert alert-danger'>" . $error . "</div>"; 
                    $page = 'Addition Page';
                    redirectHome($msg, $page, 'back', 4);
                }

            }else {
                $msg = '<div class="alert alert-danger">Sorry You Can\'t Browse This Page <strong>Directly</strong></div>';
                $page = 'Dashboard';
                redirectHome($msg, $page);
            }
            
            echo "</div>";

        } elseif ($do == 'Edit') { // Edit Page 

            // Check If Get Request ID Is Numeric & Get The Integer Value Of It
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

            // Select All Data Depend On This ID
            $stmt = $con->prepare("SELECT * FROM datathird WHERE ID = ? LIMIT 1");

            // Execute Query
            $stmt->execute(array($id));

            // Fetsh The Data
            $row = $stmt->fetch();

            // The Row Count
            $count = $stmt->rowCount();

            // If There's Such ID Show The Form
            if ($count > 0) { ?>

                <h1 class="text-center">Edit Student</h1>
                <div class="container">
                    <form class="form-horizontal" action="?do=Update" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id ?>"/>

                        <!-- Name Field -->
                        <div class="form-group">
                            <label>Name</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Student Name" disable value="<?php echo $row['Name'] ?>" />
                            </div>
                        </div>

                        <!-- Student Number Field -->
                        <div class="form-group">
                            <label>Student Number</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="studentnumber" class="form-control form-control-lg" placeholder="Student Number" required="required" value="<?php echo $row['Student_Number'] ?>"/>
                            </div>
                        </div>  

                        <!-- Parrent Number Field -->
                        <div class="form-group">
                            <label>Parrent Number</label>
                            <div class="col-sm-10 col-md-6 password">
                                <input type="number" name="parrentnumber" class="form-control form-control-lg"placeholder="Parrent Number" required="required" value="<?php echo $row['Parrent_Number'] ?>"/>
                            </div>
                        </div>  

                        <!-- 1st Degree Field -->
                        <div class="form-group">
                            <label>1st Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="firstdegree" class="form-control form-control-lg" placeholder="1st Exam" value="<?php echo $row['FirstDegree'] ?>"/>
                            </div>
                        </div>  

                        <!-- 2nd Degree Field -->
                        <div class="form-group">
                            <label>2nd Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="seconddegree" class="form-control form-control-lg" placeholder="2nd Exam"  value="<?php echo $row['SecondDegree'] ?>"/>
                            </div>
                        </div>  
                        <!-- 3rd Degree Field -->
                        <div class="form-group">
                            <label>3rd Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="thirddegree" class="form-control form-control-lg" placeholder="3rd Exam"  value="<?php echo $row['ThirdDegree'] ?>"/>
                            </div>
                        </div>  
                        <!-- 4th Degree Field -->
                        <div class="form-group">
                            <label>4th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="fourthdegree" class="form-control form-control-lg" placeholder="4th Exam" value="<?php echo $row['FourthDegree'] ?>"/>
                            </div>
                        </div>  
                        <!-- 5th Degree Field -->
                        <div class="form-group">
                            <label>5th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="fifthdegree" class="form-control form-control-lg" placeholder="5th Exam" value="<?php echo $row['FifthDegree'] ?>"/>
                            </div>
                        </div>  
                        <!-- 6th Degree Field -->
                        <div class="form-group">
                            <label>6th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="sithdegree" class="form-control form-control-lg" placeholder="6th Exam" value="<?php echo $row['SithDegree'] ?>"/>
                            </div>
                        </div>  
                        <!-- 7th Degree Field -->
                        <div class="form-group">
                            <label>7th Degree</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="number" name="seventhdegree" class="form-control form-control-lg" placeholder="7th Exam" value="<?php echo $row['SeventhDegree'] ?>"/>
                            </div>
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Save" class="btn btn-primary btn-lg" />
                            </div>
                        </div>  
                    </form>
                </div>

<?php 
            // If There's No Such ID Show Error Message
            }else {
                echo '<div class="container">';
                $msg = '<div class="alert alert-primary">Thers\'s No Such ID</div>';
                $page = 'Dashboard';
                redirectHome($msg, $page);
                echo '</div>';
            }

        } elseif ($do == 'Update') { // Updata page

            echo "<div class='container'>";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // Get Variables From The Form
                $id             = $_POST['id'];
                $name           = $_POST['name'];
                $studentNumber  = $_POST['studentnumber'];
                $parrentnumber  = $_POST['parrentnumber'];
                $firstDegree    = $_POST['firstdegree'];
                $secondDegree   = $_POST['seconddegree'];
                $thirdDegree    = $_POST['thirddegree'];
                $fourthDegree   = $_POST['fourthdegree'];
                $fifthDegree    = $_POST['fifthdegree'];
                $sithDegree     = $_POST['sithdegree'];
                $seventhDegree  = $_POST['seventhdegree'];

                // Validate The Form
                $formerror = array();
                if (strlen($studentNumber) < 11) {
                    $formerror[] = "Student Number Can't be Less than <strong>11 Number</strong>";
                }
                if (strlen($studentNumber) > 11) {
                    $formerror[] = "Student Number Can't be more than <strong>11 Number</strong>";
                }
                $formerror = array();
                if (strlen($parrentnumber) < 11) {
                    $formerror[] = "Parrent Number Can't be Less than <strong>11 Number</strong>";
                }
                if (strlen($parrentnumber) > 11) {
                    $formerror[] = "Parrent Number Can't be more than <strong>11 Number</strong>";
                }

                // Check If There's No Error Proceed The Update Operation
                if (empty($formerror)) {

                    // Update The Database With This Info
                    $stmt = $con->prepare("UPDATE datathird SET `Name` = ?, Student_Number = ?, Parrent_Number = ?, FirstDegree = ?, SecondDegree = ?, ThirdDegree = ?, FourthDegree = ?, FifthDegree = ?, SithDegree = ?, SeventhDegree = ? WHERE ID = ?");

                    $stmt->execute(array($name, $studentNumber, $parrentnumber, $firstDegree, $secondDegree, $thirdDegree, $fourthDegree, $fifthDegree, $sithDegree, $seventhDegree, $id));
    
                    // Echo Success Message
                    if ($stmt->rowCount() == 0) {  
                        $msg = '<div class="alert alert-success">Student Never Update</div>';
                        $page = 'Edit Page';
                        redirectHome($msg, $page, 'back');
                    }else {
                        $msg = '<div class="alert alert-success">Your Student Updated</div>';
                        $page = 'Edit Page';
                        redirectHome($msg, $page, 'back');
                    }
                }

                // Loop into Array and Echo It
                foreach ($formerror as $error) {
                    $msg = "<div class='alert alert-danger'>" . $error . "</div>";
                    $page = 'Edit Page';
                    redirectHome($msg, $page, 'back');
                }

            }else {
                $msg = "<div class='alert alert-danger'>Sorry You Can't Browse This Page <strong>Directly</strong></div>";
                $page = 'Dashboard';
                redirectHome($msg, $page);
            }
            
            echo "</div>";

        } elseif ($do == 'Delete') { // Delete Member

            echo "<div class='container'>";

            // Check If Get Request UserID Is Numeric & Get The Integer Value Of It
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

            // Select All Data Depend On This ID
            $check = checkItem('id', 'datathird', $id);

            // If There's Such ID Show The Form
            if ($check > 0) { 
                $stmt = $con->prepare("DELETE FROM datathird WHERE ID = :zname");
                $stmt->bindParam(":zname", $id);
                $stmt->execute();
                $msg = '<div class="alert alert-success">Your Student Has Been Deleted</div>';
                $page = 'Students Page';
                redirectHome($msg, $page, 'back');

            } else {
                $msg = '<div class="alert alert-primary">Sorry, This id Isn\'t Exist</div>';
                $page = 'Student Count';
                redirectHome($msg, $page, 'back');
            }
            
            echo '</div>';
        }

        include $tpl . 'footer.php';
    }else {
        header('Location: index.php');
        exit();
    }
    
    ob_end_flush(); // Output Buffering End
?>