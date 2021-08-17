<?php

    ob_start(); // Output Buffering Start

    function lang( $phrase ) {

        static $lang = array(

            'USER'          => 'User',
            'EDIT'          => 'Edit Profile',
            'OUT'           => 'Logout',
            'FIRSTYEAR'     => 'First Year',
            'SECONDYEAR'    => 'Second Year',
            'THIRDYEAR'     => 'Third Year',
            'DASHBOARD'     => 'Student Count'


        );

        return $lang[$phrase];

    }
    
    ob_end_flush(); // Output Buffering End
    
?>