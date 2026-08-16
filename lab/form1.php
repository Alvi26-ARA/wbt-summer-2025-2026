<?php require_once "form1_process.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Workspace</title>

<link rel="stylesheet" href="form2.css?v=2">

</head>


<body>


<form class="card" 
method="post" 
action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
novalidate>


<header class="card-header">

<h1>Create your workspace</h1>

<p>Get started</p>

</header>





<div class="field">

<label for="name">Full Name</label>

<input 
type="text"
id="name"
name="name"
placeholder="Jane Doe"
value="<?= $name ?>"
>


<?php if(!empty($nameErr)): ?>

<span class="error">
<?= $nameErr ?>
</span>

<?php endif; ?>


</div>






<div class="field">


<label for="phone">Phone number</label>


<input 
type="text"
id="phone"
name="phone"
placeholder="5551234567"
value="<?= $phone ?>"
>


<?php if(!empty($phoneErr)): ?>

<span class="error">
<?= $phoneErr ?>
</span>

<?php endif; ?>


</div>






<div class="field">


<label for="dob">Date of birth</label>


<input 
type="date"
id="dob"
name="dob"
value="<?= $dob ?>"
>


<?php if(!empty($dobErr)): ?>

<span class="error">
<?= $dobErr ?>
</span>

<?php endif; ?>


</div>







<div class="field">


<label for="email">Work email</label>


<input 
type="email"
id="email"
name="email"
placeholder="jane@company.com"
value="<?= $email ?>"
>


<?php if(!empty($emailErr)): ?>

<span class="error">
<?= $emailErr ?>
</span>

<?php endif; ?>


</div>








<div class="field">


<label for="password">Password</label>


<input 
type="password"
id="password"
name="password"
placeholder="At least 8 characters"
>


<?php if(!empty($passwordErr)): ?>

<span class="error">
<?= $passwordErr ?>
</span>

<?php endif; ?>


</div>








<div class="checkbox">


<label>

<input 
type="checkbox"
name="updates"
value="yes"
checked
>

Email me product updates and tips

</label>





<label>

<input 
type="checkbox"
name="terms"
value="accepted"
>

I agree to the Terms & Privacy Policy

</label>



<?php if(!empty($termsErr)): ?>

<span class="error">
<?= $termsErr ?>
</span>

<?php endif; ?>


</div>






<?php if(!empty($dbErr)): ?>

<span class="error">
<?= $dbErr ?>
</span>

<?php endif; ?>








<div class="buttons">


<button type="submit" class="btn-primary">

Create workspace

</button>



<button type="reset" class="btn-secondary">

Reset

</button>



</div>




</form>







<?php if($isValid): ?>


<section class="card summary">


<h2>Registration received</h2>


<table class="result-table">


<tr>

<td>Full Name</td>

<td><?= $name ?></td>

</tr>



<tr>

<td>Phone Number</td>

<td><?= $phone ?></td>

</tr>




<tr>

<td>Date of Birth</td>

<td><?= $dob ?></td>

</tr>





<tr>

<td>Email Address</td>

<td><?= $email ?></td>

</tr>



</table>



</section>


<?php endif; ?>




</body>

</html>