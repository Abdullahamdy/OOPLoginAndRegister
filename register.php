<?php

require_once 'core/init.php';
if (Input::exists()) {
     $validate = new Validate();
     $Validation = $validate->check($_POST,array(
        'username'=>array(
            'required'=>true,
            'min'=>2,
            'max'=>20,
            'unique'=>'users'
        ),
        'name'=>array(
            'required'=>true,
            'min'=>2,
            'max'=>50,
        ),
        'password'=>array(
            'required'=>true,
            'min'=>6,
        ),
        'password_again'=>array(
            'required'=>true,
            'matches'=>'password'
        ),
     ));
if($Validation->passed()){
    echo 'passed';

}else{
    echo 'not passed';
    print_r($Validation->errors());
}
}


?>


<h2 style="text-align: center; color: #333;">Registration Form</h2>






<form action="" method="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" autocomplete="off">
    </div>
    <div class="field">
        <label for="password">Choose a Password</label>
        <input type="password" name="password" id="password" value="">
    </div>
    <div class="field">
        <label for="password_again">Repeat a Password</label>
        <input type="password" name="password_again" id="password_again" value="">
    </div>
    <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
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
</style>