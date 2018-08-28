<html>
<body>

<?php
session_start();

    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
?>

<?php include 'css/css.html'; ?>

<style>
   body{
    background: rgba(19, 35, 47, 0.9);
   }
   
</style>

<DIV style="width:50%; margin-left:25%;";>
<fieldset>
<legend style="color : GREEN; font-weight:bold;">COMPLAINT FORM</LEGEND>
<table WIDTH="100%" ALIGN="CENTER">
<form name="complain form" method="post">
    <tr>
        <td>
        <h3 style="color:white";>Compliant ID</h3>
        </td>
        <td>
            <h2>xx xx xxxx</h2>
        </td>
    </tr>
    <tr>
        <td>
        <h3 style="color:white";>Compliant user name</h3> 
        </td>
        <td>
        <h2><?php echo $first_name.' '.$last_name; ?></h2>
        </td>
    </tr>
    <tr>
        <td>
        <h3 style="color:white";>Compliant Area ID</h3> 
        </td>
        <td>
            <input type="text" name="aid">
        </td>
    </tr>
    <tr>
        <td>
        <h3 style="color:white";>Compliant date</h3> 
        </td>
        <td>
            <input type="text" name="cdt">
        </td>
    </tr>
    <tr>
        <td>
        <h3 style="color:white";>Compliant Description</h3> 
        </td>
        <td>
            <textarea name="description" rows="5" cols="20"></textarea>
        </td>
    </tr>
    <tr>
        <td>
        <h3 style="color:white";>Remarks</h3> 
        </td>
        <td>
            <textarea name="remarks" rows="5" cols="20"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            <a href="profile.php"><button class="button button-block" name="cancel">cancel</button></a>
        </td>
        <td>
            <a href="profile.php"><button class="button button-block" name="submit">Submit</button></a>
        </td>
    </tr>
</form>
</table>
<a href="profile.php"><button class="button button-block" name="logout"/>Back</button></a>

</fieldset>
</DIV>
</body>
</html>
