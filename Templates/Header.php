<head>
    <title>Pizza Palace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .brand-text {
        color: #cbb09c !important;
    }
    .brand {
        background: #cbb09c !important;
        border-radius: 5px;
    }
    .brand:hover {
        background: #e5b0a2 !important;
        border-radius: 8px;
    }

    form {
        font-size: x-large;
        max-width: 460px;
        margin: 20px auto;
        padding: 20px;
    }
    </style>
</head>
<body class="grey lighten-4">
<!-- nav id known to have a drop shadow. depth-0 calcels that -->
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Pizza Palace</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="formAdd.php" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>

    </nav> 
    