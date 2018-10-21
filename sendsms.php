<?php
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    require('../textlocal.class.php');

    $textlocal = new Textlocal('jetronsaiti1@gmail.com', 'Jetron1233');

    $numbers = array(38970549577, 38970789466, 38971247911, 38972666882);
    $sender = 'Alpha Team';
    $message = 'You are safe!';

    try {
        $result = $textlocal->sendSms($numbers, $message, $sender);
        print_r($result);
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
else
{
    echo "DONE";
}
?>