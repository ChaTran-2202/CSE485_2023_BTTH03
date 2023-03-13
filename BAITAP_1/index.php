<?php 
$message = '';                                                            // Initialize
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                               // If form sent
   if ($_FILES['image']['error'] === 0) {                                 // If no errors
       $message  = '<b>File:</b> ' . $_FILES['image']['name'] . '<br>';   // File name
       $message .= '<b>Size:</b> ' . $_FILES['image']['size'] . ' bytes'; // File size
   } else {                                                               // Otherwise
       $message  = 'The file could not be uploaded.';                     // Error message
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send mail</title>
</head>
<body>
    <form action="EmailSender" method="post">
        Email <input type="email" name="email" id=""> <br>
        Subject <input type="text" name="subject" id=""> <br>
        Message <input type="text" name="message" id=""> <br>
        
        <!-- <label for="image"><b>Upload file:</b></label>
        <input type="file" name="image" accept="image/*" id="image"><br> -->

        <button type="submit" name="send">send</button>
        
    </form>
</body>
</html>