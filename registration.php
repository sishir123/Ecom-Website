<!--Connection-->
<?php
@include 'server/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form styling</title>
</head>

<body>
    <div id="container">
        <div class="form-wrap">
            <h1>Sign up</h1>
            <p>It's free and only takes a minute</p>
            <form action="" method="POSt">
                <div class="form-group">
                    <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">' . $error . '</span>';
                        }
                    }
                    ?>
                <label for="first-name">Username</label>
                <input type="text" name="username" id="username" value="<?php if (isset($_POST['username']))
                    echo $_POST['username']; ?>">
                        
                </div>
                <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
               
                
                $age_range = $_POST['age_range'];
                
                if (!empty($username)) {
                    if (strlen($username) >= 6) {
                        if (ctype_alpha($username)) {
                            $validusername = $username;
                        } else {
                            echo "<b>Username cannot be a number.</b></br>";
                        }
                    } else {
                        echo "<b>Username is less than 6</b> </br>";
                    } 
                   
                }else{
                    echo "<b>Your Username is empty</b> </br>";
                }
            }
            ?>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?php if (isset($_POST['password']))
                        echo $_POST['password']; ?>">
                </div>
               <?php $password = $_POST['password'];
                  //For password
                  if (!empty($password)) {
                    if (preg_match('/[a-z]/', $password)) {
                        if (preg_match('/[A-Z]/', $password)) {
                            if (preg_match('/[0-9]/', $password)) {
                                $validpassword = $password;
                            } else {
                                echo "<b>Insert numeric value in password</b> </br>";
                            }
                        } else {
                            echo "<b>Insert any uppercase value in password</b> </br>";
                        }
                    } else {
                        echo "<b>Insert any lowercase value in password</b> </br>";
                    }
                } else {
                    echo "<b>Your password is empty</b> </br>";
                }
               
               ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php if (isset($_POST['email']))
                        echo $_POST['email']; ?>">
                </div>

                <?php $email = $_POST['email']; 
                 //For email
                 if (!empty($email)) {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $validemail = $email;
                    } else {
                        echo "<b>Invalid email</b> </br>";
                    }
                } else {
                    echo "<b>Your email is empty</b> </br>";
                }
                    
                
                ?>
                <label for="age_range">Age Range:</label>
                <select id="age_range" name="age_range">

                    <option value="0" hidden>Please Select</option>

                    <option value="under18" <?php if (isset($_POST['age_range']) && $_POST['age_range'] == 'Under18') {
                        echo 'selected';
                    } ?>>Under 18</option>
                    <option value="18to24" <?php if (isset($_POST['age_range']) && $_POST['age_range'] == '18to24') {
                        echo 'selected';
                    } ?>>18 to 24</option>
                    <option value="25to34" <?php if (isset($_POST['age_range']) && $_POST['age_range'] == '25to34') {
                        echo 'selected';
                    } ?>>25 to 34</option>
                    <option value="35to44" <?php if (isset($_POST['age_range']) && $_POST['age_range'] == '35to44') {
                        echo 'selected';
                    } ?>>35 to 44</option>
                    <option value="45to54" <?php if (isset($_POST['age_range']) && $_POST['age_range'] == '45to54') {
                        echo 'selected';
                    } ?>>45 to 54</option>
                    <option value="55to64" <?php if (isset($_POST['age_range']) && $_POST['age_range'] == '55to64') {
                        echo 'selected';
                    } ?>>55 to 64</option>
                    <option value="over65" <?php if (isset($_POST['age_range']) && $_POST['age_range'] == 'over65') {
                        echo 'selected';
                    } ?>>Over 65</option>
                </select>
                <br>
                <?php
                //For age range
                if (!empty($age_range) && $age_range != '0') {
                    $valid_age_range = $age_range;
                } else {
                    echo "<b>Select a age range</b> </br>";
                }
                ?>
                <input type="checkbox" name="terms" value="accepted"> I accept the terms and conditions
                <?php
                ?>
                <button type="submit" value="submit" class="btn" name="submit">Submit</button>
                <h4>Already have a account?</h4>
                <a href="login.php">Login here</a>
                
            </form>
        
        </div>
    </div>
</body>

</html>