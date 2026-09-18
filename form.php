<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            background-color: red;
            align-items: center;
            justify-content: center;
            padding: 100;
        }

        button {
            border-radius: 10px;
            border: none;
            border-color: aqua;
            right: 300px;
            color: green;
            background-color: black;
        }

        form-group {
            display: flex;
            flex-direction: column;

        }

        form-component {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aqua;
        }
        button:hover{
            background-color: bisque;
            cursor: pointer;
        }

        form {
            align-items: center;
            flex-direction: column;
            color: blue;
            justify-content: center;
        }
        input{
            outline: none;
            margin-bottom: 5px;
            padding: 5px;
            align-items: center;
            flex-direction: column;
        }
    </style>

</head>

<body>
    <div id="form-component">
        <p>interview form</p>
        <form action="" id="form">
            <label for="name">Name</label>
            <input type="text" name="" id="name" placeholder="">

            <label for="phone">Phone</label>
            <input type="number" name="" id="phone" placeholder="">

            <label for="address">Address</label>
            <input type="text" name="" id="address" placeholder="">

            <label for="email">Email</label>
            <input type="email" name="" id="email" placeholder="">

            <label for="Password">Password</label>
            <input type="password" name="" id="password" placeholder="">
        </form>
        <button class="submit">Login</button>
    </div>

</body>

</html>