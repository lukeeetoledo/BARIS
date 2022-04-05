<?php 
include 'SYSTEM_config.php';

if (isset($_POST['txt_email_cnumber'])) {
    $email_cnumber = $_POST['txt_email_cnumber'];
    $query_Check_email_cnumber = "SELECT * FROM system_accounts_tbl WHERE account_Email = '$email_cnumber' OR account_Contactnumber = '$email_cnumber'";
    $result_Check_email_cnumber = mysqli_query($conn, $query_Check_email_cnumber);

    if (mysqli_num_rows($result_Check_email_cnumber) > 0) {
        $row_CEC = mysqli_fetch_assoc($result_Check_email_cnumber);
        $real_Email = $row_CEC['account_Email'];

        if ($real_Email == $email_cnumber) {
            $user_ID = $row_CEC['user_ID'];
            // TOKEN
            $token = openssl_random_pseudo_bytes(16);
            $token = bin2hex($token);
            // VALIDITY
            $token_Validty = date('Y-m-d', strtotime("+1 day"));
            $query_Set_token_validity = "UPDATE system_accounts_tbl SET account_Token = '$token', token_Validity = '$token_Validty' WHERE user_ID = '$user_ID'";
            $result_Set_token_validity = mysqli_query($conn, $query_Set_token_validity);
            $query_Check_userID = "SELECT * FROM barangay_users_tbl WHERE user_ID = '$user_ID'";
            $result_Check_userID = mysqli_query($conn, $query_Check_userID);
            if (mysqli_num_rows($result_Check_userID) > 0) {
                $row_CuID = mysqli_fetch_assoc($result_Check_userID);

                // EMAIL
                $to = $email_cnumber;
                $subject = "Reset Password - AcadeMx";

                $message = "
                <html>
                <head>
                <title>{$subject}</title>
                </head>
                <body>
                <p><strong>Dear Mr./Ms. {$row_CuID['user_Lname']},</strong></p>
                <p>Forgot Password? Not a problem. Click below link to reset your password.</p>
                <p><a href='{$base_url}reset-password.php?token={$token}'>Reset Password</a></p>
                <p>If not on the primary inbox search the mail at the *Spam Collection*. </p>
                <p>Kindly report as not a spam. </p>
                <p>The link will expire at the end of the day. </p>
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "X-Priority: 3\r\n";
                $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

                // More headers
                $headers .= "From: " . $my_email;

                if (mail($to, $subject, $message, $headers)) {
                    echo "<script>
                      window.setTimeout(function() {
                        window.location = 'index.php';
                      }, 5000);
                      alert('We have sent a reset password link to your email - {$email_cnumber}. Check inbox or spam.');
                      </script>";
                } else {
                    echo "<script>alert('Mail not sent. Please try again.');</script>";
                }
            }
        } else {
            require_once('API_SMS.php');
            $user_ID = $row_CEC['user_ID'];
            // TOKEN
            $token = openssl_random_pseudo_bytes(16);
            $token = bin2hex($token);
            // VALIDITY
            $token_Validty = date('Y-m-d', strtotime("+1 day"));
            $query_Set_token_validity = "UPDATE system_accounts_tbl SET account_Token = '$token', token_Validity = '$token_Validty' WHERE user_ID = '$user_ID'";
            $result_Set_token_validity = mysqli_query($conn, $query_Set_token_validity);
            $receiver = $email_cnumber;
            $message = "BARIS_LINK: {$base_url}reset-password.php?token={$token}" . "\r\n" . "\r\n";
            $smsAPICode = "TR-BARAN421180_1KFK3";
            $smsAPIPassword = "6@1t2!k%1[";
    
            $send = new ItextMo();
            $send->itexmo($receiver, $message, $smsAPICode, $smsAPIPassword);
            if ($send == false) {
                echo "Error";
            } else {
                echo "Success";
            }
        }
    } else {
        echo "<script>alert('Email/Contact number not found.');</script>";
    }
}
?>