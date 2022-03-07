<!DOCTYPE html>
<html lang="en">

<?php 
    include 'templates/header.php';
?>

<div class="wrapper form-center">
    <h2 class="page-title">Add a Pizza</h2>
    <form action="" method="post">
        <input type="email" name="email" id="email" placeholder="Your Email">
        <input type="text" name="title" id="title" placeholder="Pizza Title">
        <input type="text" name="ingredients" id="ingredients" placeholder="Ingredients(comma separated)">
        <input type="submit" value="SUBMIT">
    </form>
</div>

<?php 
    include 'templates/footer.php';
?>

</html>