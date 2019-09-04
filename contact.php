<?php
if (isset($_POST["name"]) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'darrenkonczak@gmail.com';
    $subject = "New Contact";
    $body = '<html>
            <body>
                <h2>Contact - dksolutions.co</h2>
                <hr>
                <p>Name:<br>'.$name.'</p>
                <p>Email:<br>'.$email.'</p>
            </body>
        </html>';
// headers
$headers = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";
// send
$send = mail($to, $subject, $body, $headers);
if($send){
    echo '<br>';
    echo "Thanks for contacting me. I look forward to speaking with you.";
} else {
    echo 'error - contact not sent.';
}
}
?>

<!doctype html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DKSolutions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Spectral:400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<div class="row">
        <div class="col-md-12 bg-solid-dark">
            <img src="resources/img/1x/dksol.png" class="dksolutions-title">
        </div>
    </div>
    <div class="row sticky-top">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-solid-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Gallery</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
    </div>
    <div class="row pt-5 bg-solid-dark">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h4 class="text-white center">Let's Chat</h4>
        </div>
    </div>
    <div class="row pt-5 pb-5 bg-solid-dark">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
    <form action="" class="center" method="post">
            <input class="contact-name-input center" type="text" name="name" placeholder="Your Name"><br>
            <br>
            <input class="contact-email-input center" type="text" name="email" placeholder="Your Email"><br>
            <br>
            <button class="btn-secondary" type="submit">Send</button>
        </form>
    </div>
    <div class="col-md-2"></div>
    </div>

</body>
</html> 