<?php

//if (isset($_POST['send1'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['email1'])) {
        $email = trim($_POST['email1']);
        $msg = $_POST['msg1']; // no need to trim message


        // Add the recipient email to a variable
        $to = "ivan.matas2@gmail.com";
        // Create a subject
        $subject = "$email sent a message via your contact form";

        // Construct the message
        $message .= "Email: $email\r\n\r\n";
        $message .= "Message:\r\n$msg";

        $message = wordwrap($message, 72); // Keep the message neat n' tidy

        // Set the mail headers into a variable
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: " . " <" . $email . ">\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        // Send the email!
        mail($to, $subject, $message, $headers);

    }else if (isset($_POST['email2'])) {

        $email	= trim($_POST['email2']);
        $msg	= $_POST['msg2']; // no need to trim message

        // Add the recipient email to a variable
        $to	= "korac.kristijan@gmail.com";
        // Create a subject
        $subject = "$email sent a message via your contact form";

        // Construct the message
        $message .= "Email: $email\r\n\r\n";
        $message .= "Message:\r\n$msg";

        $message = wordwrap($message, 72); // Keep the message neat n' tidy

        // Set the mail headers into a variable
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: " . " <" . $email . ">\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        // Send the email!
        mail($to, $subject, $message, $headers);

    }
    ?>



    <?php
} else {
    ?>

    <section id="forms">


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Radujemo se vašem odgovoru</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-10 col-md-offset-1">
                    <form role="form" class="form-horizontal" action="" method="post" id="form1" >
                        <legend>Odgovor Ivanu</legend>
                        <div class="form-group">
                            <label class="control-label col-md-3"for="email1">Vaš E-mail:</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="email1" name="email1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="textReply1">Vaš odgovor:</label>
                            <div class="col-md-9">
                                <textarea rows="8" class="form-control" id="textReply1" name="msg1" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="send1" id="send1" class="btn btn-default">Pošalji</button>
                            </div>
                        </div>
                    </form>
                    <div class="row"">
                    <div  id="no" class="alert alert-danger alert-dismissible" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Oops!</strong> Morate ispuniti sva polja!
                    </div>
                </div>
                <div class="row" >
                    <div  id="yes" class="alert alert-success alert-dismissible" role="alert" style="display: none;" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Woohoo!</strong> Poruka je poslana!
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="border-left: 5px solid #1caae2">
            <div class="col-md-10 col-md-offset-1">
                <form role="form" class="form-horizontal"  action="" method="post" id="form2">
                    <legend>Odgovor Kristijanu</legend>
                    <div class="form-group">
                        <label class="control-label col-md-3"for="email2" >Vaš E-mail:</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email2" name="email2" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="textReply2">Vaš odgovor:</label>
                        <div class="col-md-9">
                            <textarea  rows="8" class="form-control" id="textReply2" name="msg2" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="send2" id="send2" class="btn btn-default">Pošalji</button>
                        </div>
                    </div>
                </form>
                <div class="row"">
                <div  id="no2" class="alert alert-danger alert-dismissible" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Oops!</strong> Morate ispuniti sva polja!
                </div>
            </div>
            <div class="row" >
                <div  id="yes2" class="alert alert-success alert-dismissible" role="alert" style="display: none;" >
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Woohoo!</strong> Poruka je poslana!
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <?php
}
?>