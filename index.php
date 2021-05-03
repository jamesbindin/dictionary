<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dictionary</title>
    
    <!-- fonts and icons -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    
    <!-- css for dictionary -->
    <link rel="stylesheet" href="dictionary.css">

    <style>
        body{   
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }
        .navbar{
            display:flex;
            justify-content: flex-end;
            background-color:aliceblue;
        }
    </style>

</head>
<body>
    <!-- include dictionary in navbar or any other container -->
<div class="navbar">
    <?php include 'dictionary.php'?>
</div>


</body>
<!-- script file for the dictionary -->
<script src="dictionary.js"></script>

</html>