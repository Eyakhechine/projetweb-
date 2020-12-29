<?php
include 'headerr.php';
if (isset($_POST['create_returns'])) {
    $returns_obj->create_returns_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="../views/indexRE.php"  class="button button-blue mt-12 pull-right">View returns List</a> 
        <h3> return or exchange</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="us_name">Name:</label>
                <input type="text" name="us_name" id="us_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Email address:</label>
                <input type="email" class="form-control" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">reason:</label>
                <input type="text" class="form-control" name="reason" id="reason"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="typee">type:</label>
                <select class="form-control" name="typee" id="typee">
                    <option value="" selected>Select</option>
                    <option value="return" >return</option>
                    <option value="exchange" >exchange</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="country">address:</label>
                <input type="text" name="adress" id="adress" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_returns" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

