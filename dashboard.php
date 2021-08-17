<?php 

    ob_start(); // Output Buffering Start

    session_start();
    if (isset($_SESSION['Username'])) {
        
        $pageTitle = 'Student Count';

        include 'init.php';

        /* Start Dashboard Page */

        ?>

        <h1 class='text-center'>Student Count</h1>
        <div class="container home-stats text-center">
            <div class="row">
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-firstyear">
                        First Year
                        <span><a href="firstyear.php?do=Manage"><?php echo countItems('ID', 'datafirst') ?></a></span>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-secondyear">
                        Secnod Year
                        <span><a href="secondyear.php?do=Manage"><?php echo countItems('ID', 'datasecond') ?></a></span>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-thirdyear">
                        Third Year
                        <span><a href="thirdyear.php?do=Manage"><?php echo countItems('ID', 'datathird') ?></a></span>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include $tpl . 'footer.php';

    } else {
        header('Location: index.php');
        exit();
    }

    ob_end_flush(); // Output Buffering End Flush
?>