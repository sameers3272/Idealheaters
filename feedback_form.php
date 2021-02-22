
  <?php
  $email_address = $_POST['email_address'];
  $feedback = $_POST['feedback'];

  function filter_email_header($form_field) {  
    return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
    }

    $email_address  = filter_email_header($email_address);
    $headers = "From: $email_address";

    $sent = mail('sameers3272@gmail.com', 'Feedback Form Submission', $feedback, $headers);
  ?>
  <?php
if ($sent) {
    ?><script>
        alert("thanks for your feedback");
    </script><?php
    else{
        ?><script>
        alert("thanks for your feedback");
    </script><?php
    }

    ?>