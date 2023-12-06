<?php

require_once 'core/init.php';
if (Input::exists()) {
    $validate = new Validate();
    $Validation = $validate->check($_POST, [
        'username' => ['required' => true, 'min' => 2, 'max' => 20, 'unique' => 'users'],
        'name' => ['required' => true, 'min' => 2, 'max' => 50],
        'password' => ['required' => true, 'min' => 6],
        'password_confirmation' => ['required' => true, 'matches' => 'password'],
    ]);
    if ($Validation->passed()) {
        echo 'passed';
    } else {
        foreach($Validation->errors() as $error){
            echo "{$error} <br />";
        }
    }
}


?>


<h2 style="text-align: center; color: #333;">Registration Form</h2>



<form action="" method="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
    </div>
    <div class="field">
        <label for="password">Choose a Password</label>
        <input type="password" name="password" id="password" value="<?php echo escape(Input::get('password')); ?>">
    </div>
    <div class="field">
        <label for="password_confirmation">Repeat a Password</label>
        <input type="password" name="password_confirmation" id="password_comfirmation" value="<?php echo escape(Input::get('password_confirmation')); ?>">
    </div>
    <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>">
    </div>
    <input type="submit" value="Register">
</form>













<style>
    .field {
        margin-bottom: 10px;
        text-align: center;
        /* Center align the content */
    }

    label {
        display: block;
        margin-bottom: 5px;
        text-align: left;
        /* Reset the text alignment to left */
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .error{
        color: red;
        font-size: large;
    }
</style>