

    <?php
        
    if (isset($_REQUEST['email']))
    //if "email" is filled out, send email
    {
    //send email
    $email = $_REQUEST['email'] ;
    $firstName = $_REQUEST['firstName'] ;
    $lastName = $_REQUEST['lastName'] ;
    $message = $_REQUEST['message'] ;
    mail("laurabonini53@yahoo.com",
    $message, "From:" . $email);
    echo "Thank you for using our mail form";
    }
    else
    //if "email" is not filled out, display the form
    {
    echo "<form method='post' action='mail.php'>
    Email: <input name='email' type='text'><br>
    Message:<br>
    <textarea name='message' rows='15' cols='40'>
    </textarea><br>
    <input type='submit'>
    </form>";
    }
    ?>

      