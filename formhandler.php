
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Confirmation</title>
    </head>
    <body>
        <h1>Appoinment Confirmed</h1>
        <main>
            <section>
                <h3>Thank you for your valuable time</h3>

                <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $name = $_POST['name'];
                    $visitor_email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    

                    echo "<p>Name: $name</p>";
                    echo "<p>visitor_email: $visitor_email</p>";
                    echo "<p>Subject: $subject</p>";
                    echo "<p>Message: $message</p>";
                    }else{
                        echo "<p>Sorry,No data recieved. Thank you.</p>";
                        }
                        ?>
            </section>
    </body>
    </html>