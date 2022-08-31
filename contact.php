<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/edec10413c.js" crossorigin="anonymous"></script>
	
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact</title>
</head>
<body>


<a href="index.html#">
<i class="fas fa-sign-out-alt icon"></i> 
</a>
    <h1>Nous Contacter</h1>
    <div class="form">
    <br>
    <label>Nom</label>
    <br>
    <input id="name" type="text" placeholder="Votre Nom" class="txt">
    <br>
    <label>E-mail</label>
    <br>
    <input id="email" type="email" placeholder="Votre adresse mail" class="txt">
    <br>
    <label>Sujet</label>
    <br>
    <input id="subject" type="text" placeholder="Sujet" class="txt">
    <br>
    <label>Message</label>
    <br>
    <textarea id="body" rows="6" placeholder="Message"></textarea>
    <br>
    <input type="button" onclick="sendEmail()"name="contact" value="Envoyer" class="myButton">
    </div>
    

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail(){
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body) ){
                $.ajax({
                    url: 'sendmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    }, success: function (response) {
                        console.log(response);
                    }
                });
            }
        }

        function isNotEmpty(caller){
            if (caller.val() == ""){
                caller.css('border','1px solid red');
                return false;
            } else
                caller.css('border','');
            return true;    
        }
    </script>

</body>
</html>