<?php
include 'header.php';
if (isset($_POST['create_review'])) {
    $reviews_obj->create_review_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
      
        <h3>Create review Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="namec">Name:</label>
                <input type="text" name="namec" id="namec" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Email address:</label>
                <input type="email" class="form-control" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">review:</label>
                <input type="text" class="form-control" name="review" id="review"  maxlength="50">
            </div>
            
            
            <input type="submit" class="button button-blue  pull-right" name="create_review" value="Submit" />
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

