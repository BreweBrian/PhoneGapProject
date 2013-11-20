<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 11/14/13
 * Time: 4:20 PM
 */

//    print_r( $_GET );
    $qty = $_GET['qty'];
    $pid = $_GET['pid'];

/*    print_r( $qty );
    print_r( $pid );*/

    // Process you order here

/*    $form = <<<END_OF_FORM

    <form method="post" action="purchase.php?">
        Name: <input type="text" name="name" /></br>
        Address: <input type="text" name="address" /></br>
        <input type="submit" name="submit" value="Submit Order" />
    </form>
END_OF_FORM;

echo json_encode( $form );*/


$to = "bk.daily@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "bk.daily@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";



