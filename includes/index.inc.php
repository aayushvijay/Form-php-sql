<?php

if ( isset( $_POST['submit'] ) ) {
    include_once 'dbh.inc.php';
    $name = mysqli_real_escape_string( $conn, $_POST['name'] );
    $email = mysqli_real_escape_string( $conn, $_POST['email'] );
    $phone = mysqli_real_escape_string( $conn, $_POST['phone'] );
    $address = mysqli_real_escape_string( $conn, $_POST['address'] );
    $house = mysqli_real_escape_string( $conn, $_POST['house'] );
    $job = mysqli_real_escape_string( $conn, $_POST['job'] );

    //check if input character are valid
    if ( ( !preg_match( "/^[a-zA-Z\s]*$/", $name ) ) && ( !preg_match( "/^[0-9]*$/", $phone ) ) && ( !preg_match( "/^[a-zA-Z\s]*$/", $job ) ) ) {
        header( 'Location: ../index.php?data=invalid' );
        exit();
    } else {
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            header( 'Location: ../index.php?data=email' );
            exit();
        } else {
            $sql = "SELECT * FROM receiver WHERE email='$email' AND name='$name' ";
            $result = mysqli_query( $conn, $sql );
            $resultCheck = mysqli_num_rows( $result );
            if ( $resultCheck > 0 ) {
                header( 'Location: ../index.php?data=User_Already_Present' );
                exit();
            } else {
                ///Insert the user into the database
                $sql = "INSERT INTO receiver (fullname, email, blood, pasword) VALUES ('$name','$email','$phone', '$address','$house','$job');";
                mysqli_query( $conn, $sql );
                header( 'Location: ../show.php?data_entry=success' );
                exit();
            }
        }
    }
} else {
    header( 'Location: ../index.php' );
    exit();
}