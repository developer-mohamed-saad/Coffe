<?php

$_POST['token']=md5(uniqid(rand(), true));
$_SESSION['token']=$_POST['token'];
if($_SESSION['token'] === $_POST['token']){
/* Contact Us */
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email'])){
        $to = "mail@domain.com";//Your Email
        $subject = 'message from caffe Theme';//Subject
        $txt = "<html>
        <head>
        <title>Contact Us Form Submission Data</title>
        </head>
        <body>
        <p>This email contains HTML Tags!</p>
        <table>
        <tr>
        <th>Sender Name: </th>
        <th>".$_POST['name']."</th>
        </tr>
        <tr>
        <td>Sender Email: </td>
        <td>".$_POST['email']."</td>
        </tr>
        <tr>
        <td>Subject: </td>
        <td>".$_POST['message']."</td>
        </tr>
        </table>
        </body>
        </html>
        ";//Message Body
        $headers = "From: arabianmido@gmail.com" . "\r\n" .
        "CC: arabianmido@gmail.com". "\r\n" ."Content-type:text/html;charset=UTF-8";//Mail Headers
        $nameError='';
        if($_SERVER['REQUEST_METHOD']=='POST' && strlen($_POST['name'])<= 3){//Name error checker
            $nameError='Name Must be larger than<strong> 3</strong> charactars';
        }          
        // mail($to,$subject,$txt,$headers) ;// Mail Function
        elseif (mail($to,$subject,$txt,$headers)) {
            $result='<div class="alert alert-success" role="start"><button type="button" class="close" aria-label="Close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
          </button>Thank You ! We will be in touch soon</div>';
            echo $result;
            // exit;
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            echo $result;
        }
          } 

          /* Newsletter */
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['newsletter-email'])){
        $to = "mail@domain.com";//Your Email
        $subject = 'New Subscriber from coffee template';//Subject
        $txt = "<html>
        <head>
        <title>Newsletter Subscriber</title>
        </head>
        <body>
        <p>This email contains HTML Tags!</p>
        <table>
        <tr>
        <td>Subscriber Email: </td>
        <td>".$_POST['newsletter-email']."</td>
        </tr>
        </table>
        </body>
        </html>
        ";//Message Body
        $headers = "From: arabianmido@gmail.com" . "\r\n" .
        "CC: arabianmido@gmail.com". "\r\n" ."Content-type:text/html;charset=UTF-8";//Mail Headers
        // mail($to,$subject,$txt,$headers) ;// Mail Function
        if (mail($to,$subject,$txt,$headers)) {
            $result='<div class="alert alert-success">Thank You For Subscriping Our NewsLetter! </div>';
            echo $result;
            echo '<meta http-equiv="refresh" content="0; url=?successfull-submit">';
            exit;
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            echo $result;
        }

    }   
}     
              ?>