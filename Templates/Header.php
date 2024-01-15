<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizza Palace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            background-color: #ffffff; 
            font-family: 'Arial', sans-serif; /* Maintaining a readable font */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 1.6; /* Setting a comfortable line height for better readability */
            color: #333; /* Setting a darker text color for better contrast */
        }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .brand-text {
            color: #cbb09c !important;
            font-weight: bold;
        }

        .brand {
            background: #cbb09c !important;
            border-radius: 5px;
            transition: background 0.3s ease-in-out;
        }

        .brand:hover {
            background: #e5b0a2 !important;
            border-radius: 8px;
        }

        form {
            font-size: 18px;
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* Set a white background for forms */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
        }
        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }

        .logoPizza {
            display: inline-block;
            width: 50px; /* Adjust the logo size */
            height: auto; /* Maintain aspect ratio */
            margin: 10px;
            vertical-align: middle; /* Align the logo vertically */
        }

/* Navigation Styling */
        nav {
            background-color: rgb(65, 62, 62);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        #nav-mobile {
            margin-right: 0;
        }


        .brand-logo:hover {
            color: #e5b0a2;
        }

        .btn.brand {
            color: #fff;
            font-weight: bold;
        }
        .cardSpace {
            background-color: rgb(197, 115, 115);
            color: #fff; /* Set text color to white */
            font-size: 1.2rem; /* Adjust font size */
            font-weight: 600; /* Increase font weight for emphasis */
            border-radius: 10px; /* Increased border radius for rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            padding: 20px; /* Increase padding for better spacing */
            transition: background-color 0.3s ease-in-out; /* Add a smooth background color transition on hover */
        }

        .cardSpace:hover {
            background-color: #e57373; /* Darken the background color on hover */
            cursor: pointer;
        }
        .animate-character
        {
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
    </style>
</head>

<body>
    <!-- nav id known to have a drop shadow. depth-0 cancels that -->
    <nav class="first">
        <div class="container">
            <a href="../Images/SupremePizza.jpg" class="logoPizza">
            <a href="index.php" class="brand-logo brand-text">Pizza Palace</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="formAdd.php" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>
