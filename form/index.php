<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<?php

if(!empty($_POST["submit"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    $toemail = $_POST['kudastech@gmail.com'];

    $mailHeader = "Name: ".$firstname.
    "\r\n lastname: " .$lastname.
    "\r\n Email: " .$email.
    "\r\n Content: " .$content. "\r\n";

    if(mail($toemail, $firstname, $mailHeader )){
        $message = "Your Information is Recieved Successfully.";
    }
}
?>
<body>
    <div class="container mt-5 w-50 bg-prmary">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" id="" aria-describedby="helpId" placeholder="">
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="">
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Message</label>
                <textarea class="form-control" name="content" id="" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
            </div>
            <?php if(!empty($message)){?>
                    
                    <div class="alert alert-success">
                        <strong><?php echo $message; ?></strong>
                    </div>
                    
                <?php }?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
