<?php define(TITLE, "Contact"); ?>
<?php include("templates/header.html"); ?>




<div class="contact-main">

<div class="container-fluid contact-container" id="contact_form">
  
<form action="https://mailthis.to/jrusso8199@gmail.com" method="post">
    <div class="form-group">
      <label for="first_name">First Name</label>
      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Please Enter Full Name</small>
    </div>
    <form action="contact_form.php" method="post">
    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Please Enter Full Name</small>
    </div>

    <div class="form-group">
      <label for="telephone">Telephone</label>
      <input type="telephone" name="telephone" id="telephone" class="form-control" placeholder="Telephone" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Enter Telephone Number</small>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Please Enter Your Email</small>
    </div>

    <div class="form-group">
      <label for="comments">Message</label>
      <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>

<?php include("templates/footer.html"); ?>