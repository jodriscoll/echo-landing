<?php
  if( $_POST ) {
/*  $variable       = $_POST['name definition from the form'] */
    $first_name     = $_POST['first_name'];
    $last_name      = $_POST['last_name'];
    $business_email = $_POST['email'];
    $phone_number   = $_POST['phone'];
    $company_name   = $_POST['company']; 
    $job_title      = $_POST['title'];

    ?>
    
    <h1>Form submitted successfully!</h1>

    <table class="table table-striped" border="0">
      <tr>
        <td>First Name</td>
        <td><?php echo $first_name ?></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><?php echo $last_name ?></td>
      </tr>
      <tr>
        <td>Business Email</td>
        <td><?php echo $business_email; ?></td>
      </tr>
      <tr>
        <td>Phone Number</td>
        <td><?php echo $phone_number; ?></td>
      </tr>
      <tr>
        <td>Company Name</td>
        <td><?php echo $company_name; ?></td>
      </tr>
      <tr>
        <td>Job Title</td>
        <td><?php echo $job_title; ?></td>
      </tr>
    </table>

<?php
  }