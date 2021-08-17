<?php

    ob_start(); // Output Buffering Start
    
    /*
    ** Title Function v1.0
    ** Title Function That Echo The page title in case the page
    ** Has the variable $pageTitle an echo defualt title for other pages
    */

    function getTitle() {

        global $pageTitle;
        if (isset($pageTitle)) {

            echo $pageTitle;

        }else {

            echo 'Defualt';
            
        }

    }

    /*
    ** Redirect Function v1.0
    ** [This Function Accept Parameter]
    ** $msg = Echo The Message [ Error | Success | Warning ]
    ** $second = Second Before Redirecting
    */

    function redirectHome($msg, $page, $url = null, $second = 4) {
        
        if ($url == null) {
            $url = 'index.php';
        } else {

            $url = isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '' ? $_SERVER['HTTP_REFERER'] : 'index.php';
        }
        
        echo $msg;
        echo "<div class='alert alert-info'>You Will Be Redirected To $page After $second Seconds</div>";
        header("refresh:$second;url=$url");
        exit();
    }
    
    /*
    ** Check Items Function v1.0
    ** Function To Check Items In Database [ Function Accept Parameters ]
    ** $select = THe Items To Select [ Example: user, item, category ]
    ** $form = The Table To Select From [ Example: users, items, categories ]
    ** $value = The Value Of Select [ Example: Mohamed, Box, Electronics ]
    */

    function checkItem($select, $from, $value) {
        global $con;
        $stmt2 = $con->prepare("SELECT $select FROM $from WHERE $select = ?");
        $stmt2->execute(array($value));
        $count = $stmt2->rowCount();
        return $count;
    }

    /*
    **  Count Number Of Items Function v2.0
    **  Function To Count Number Of Items Rows
    **  $item = The Item Count
    **  $table = The Table To Choose From
    */

    function countItems($item, $table) {
        global $con;
        $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");
        $stmt2->execute();
        return $stmt2->fetchColumn();
    }

    ob_end_flush(); // Output Buffering End
?>