{{--@extends('user.theme.layout')--}}
{{--@section('content')--}}
{{--    <br>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-md-offset-4">--}}
{{--                    <div class="panel panel-default">--}}
{{--                        <div class="panel-body">--}}
{{--                            <div class="text-center">--}}
{{--                                <h3><i class="fa fa-lock fa-4x"></i></h3>--}}
{{--                                <h2 class="text-center">Forgot Password?</h2>--}}
{{--                                <p>You can reset your password here.</p>--}}
{{--                                <div class="panel-body">--}}

{{--                                    <form class="form">--}}
{{--                                        <fieldset>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>--}}

{{--                                                    <input id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">--}}
{{--                                            </div>--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}




{{--    sign in--}}
    <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>



{{--sign up--}}
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<style>--}}
{{--    body {font-family: Arial, Helvetica, sans-serif;}--}}
{{--    * {box-sizing: border-box;}--}}

{{--    /* Full-width input fields */--}}
{{--    input[type=text], input[type=password] {--}}
{{--        width: 100%;--}}
{{--        padding: 15px;--}}
{{--        margin: 5px 0 22px 0;--}}
{{--        display: inline-block;--}}
{{--        border: none;--}}
{{--        background: #f1f1f1;--}}
{{--    }--}}

{{--    /* Add a background color when the inputs get focus */--}}
{{--    input[type=text]:focus, input[type=password]:focus {--}}
{{--        background-color: #ddd;--}}
{{--        outline: none;--}}
{{--    }--}}

{{--    /* Set a style for all buttons */--}}
{{--    button {--}}
{{--        background-color: #04AA6D;--}}
{{--        color: white;--}}
{{--        padding: 14px 20px;--}}
{{--        margin: 8px 0;--}}
{{--        border: none;--}}
{{--        cursor: pointer;--}}
{{--        width: 100%;--}}
{{--        opacity: 0.9;--}}
{{--    }--}}

{{--    button:hover {--}}
{{--        opacity:1;--}}
{{--    }--}}

{{--    /* Extra styles for the cancel button */--}}
{{--    .cancelbtn {--}}
{{--        padding: 14px 20px;--}}
{{--        background-color: #f44336;--}}
{{--    }--}}

{{--    /* Float cancel and signup buttons and add an equal width */--}}
{{--    .cancelbtn, .signupbtn {--}}
{{--        float: left;--}}
{{--        width: 50%;--}}
{{--    }--}}

{{--    /* Add padding to container elements */--}}
{{--    .container {--}}
{{--        padding: 16px;--}}
{{--    }--}}

{{--    /* The Modal (background) */--}}
{{--    .modal {--}}
{{--        display: none; /* Hidden by default */--}}
{{--        position: fixed; /* Stay in place */--}}
{{--        z-index: 1; /* Sit on top */--}}
{{--        left: 0;--}}
{{--        top: 0;--}}
{{--        width: 100%; /* Full width */--}}
{{--        height: 100%; /* Full height */--}}
{{--        overflow: auto; /* Enable scroll if needed */--}}
{{--        background-color: #474e5d;--}}
{{--        padding-top: 50px;--}}
{{--    }--}}

{{--    /* Modal Content/Box */--}}
{{--    .modal-content {--}}
{{--        background-color: #fefefe;--}}
{{--        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */--}}
{{--        border: 1px solid #888;--}}
{{--        width: 80%; /* Could be more or less, depending on screen size */--}}
{{--    }--}}

{{--    /* Style the horizontal ruler */--}}
{{--    hr {--}}
{{--        border: 1px solid #f1f1f1;--}}
{{--        margin-bottom: 25px;--}}
{{--    }--}}

{{--    /* The Close Button (x) */--}}
{{--    .close {--}}
{{--        position: absolute;--}}
{{--        right: 35px;--}}
{{--        top: 15px;--}}
{{--        font-size: 40px;--}}
{{--        font-weight: bold;--}}
{{--        color: #f1f1f1;--}}
{{--    }--}}

{{--    .close:hover,--}}
{{--    .close:focus {--}}
{{--        color: #f44336;--}}
{{--        cursor: pointer;--}}
{{--    }--}}

{{--    /* Clear floats */--}}
{{--    .clearfix::after {--}}
{{--        content: "";--}}
{{--        clear: both;--}}
{{--        display: table;--}}
{{--    }--}}

{{--    /* Change styles for cancel button and signup button on extra small screens */--}}
{{--    @media screen and (max-width: 300px) {--}}
{{--        .cancelbtn, .signupbtn {--}}
{{--            width: 100%;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}
{{--<body>--}}

{{--<h2>Modal Signup Form</h2>--}}

{{--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>--}}

{{--<div id="id01" class="modal">--}}
{{--    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>--}}
{{--    <form class="modal-content" action="/action_page.php">--}}
{{--        <div class="container">--}}
{{--            <h1>Sign Up</h1>--}}
{{--            <p>Please fill in this form to create an account.</p>--}}
{{--            <hr>--}}
{{--            <label for="email"><b>Email</b></label>--}}
{{--            <input type="text" placeholder="Enter Email" name="email" required>--}}

{{--            <label for="psw"><b>Password</b></label>--}}
{{--            <input type="password" placeholder="Enter Password" name="psw" required>--}}

{{--            <label for="psw-repeat"><b>Repeat Password</b></label>--}}
{{--            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>--}}

{{--            <label>--}}
{{--                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me--}}
{{--            </label>--}}

{{--            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>--}}

{{--            <div class="clearfix">--}}
{{--                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>--}}
{{--                <button type="submit" class="signupbtn">Sign Up</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<script>--}}
{{--    // Get the modal--}}
{{--    var modal = document.getElementById('id01');--}}

{{--    // When the user clicks anywhere outside of the modal, close it--}}
{{--    window.onclick = function(event) {--}}
{{--        if (event.target == modal) {--}}
{{--            modal.style.display = "none";--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}

{{--autucomblete--}}
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <style>--}}
{{--        * {--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}

{{--        body {--}}
{{--            font: 16px Arial;--}}
{{--        }--}}

{{--        /*the container must be positioned relative:*/--}}
{{--        .autocomplete {--}}
{{--            position: relative;--}}
{{--            display: inline-block;--}}
{{--        }--}}

{{--        input {--}}
{{--            border: 1px solid transparent;--}}
{{--            background-color: #f1f1f1;--}}
{{--            padding: 10px;--}}
{{--            font-size: 16px;--}}
{{--        }--}}

{{--        input[type=text] {--}}
{{--            background-color: #f1f1f1;--}}
{{--            width: 100%;--}}
{{--        }--}}

{{--        input[type=submit] {--}}
{{--            background-color: DodgerBlue;--}}
{{--            color: #fff;--}}
{{--            cursor: pointer;--}}
{{--        }--}}

{{--        .autocomplete-items {--}}
{{--            position: absolute;--}}
{{--            border: 1px solid #d4d4d4;--}}
{{--            border-bottom: none;--}}
{{--            border-top: none;--}}
{{--            z-index: 99;--}}
{{--            /*position the autocomplete items to be the same width as the container:*/--}}
{{--            top: 100%;--}}
{{--            left: 0;--}}
{{--            right: 0;--}}
{{--        }--}}

{{--        .autocomplete-items div {--}}
{{--            padding: 10px;--}}
{{--            cursor: pointer;--}}
{{--            background-color: #fff;--}}
{{--            border-bottom: 1px solid #d4d4d4;--}}
{{--        }--}}

{{--        /*when hovering an item:*/--}}
{{--        .autocomplete-items div:hover {--}}
{{--            background-color: #e9e9e9;--}}
{{--        }--}}

{{--        /*when navigating through the items using the arrow keys:*/--}}
{{--        .autocomplete-active {--}}
{{--            background-color: DodgerBlue !important;--}}
{{--            color: #ffffff;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<h2>Autocomplete</h2>--}}

{{--<p>Start typing:</p>--}}

{{--<!--Make sure the form has the autocomplete function switched off:-->--}}
{{--<form autocomplete="off" action="/action_page.php">--}}
{{--    <div class="autocomplete" style="width:300px;">--}}
{{--        <input id="myInput" type="text" name="myCountry" placeholder="Country">--}}
{{--    </div>--}}
{{--    <input type="submit">--}}
{{--</form>--}}

{{--<script>--}}
{{--    function autocomplete(inp, arr) {--}}
{{--        /*the autocomplete function takes two arguments,--}}
{{--        the text field element and an array of possible autocompleted values:*/--}}
{{--        var currentFocus;--}}
{{--        /*execute a function when someone writes in the text field:*/--}}
{{--        inp.addEventListener("input", function(e) {--}}
{{--            var a, b, i, val = this.value;--}}
{{--            /*close any already open lists of autocompleted values*/--}}
{{--            closeAllLists();--}}
{{--            if (!val) { return false;}--}}
{{--            currentFocus = -1;--}}
{{--            /*create a DIV element that will contain the items (values):*/--}}
{{--            a = document.createElement("DIV");--}}
{{--            a.setAttribute("id", this.id + "autocomplete-list");--}}
{{--            a.setAttribute("class", "autocomplete-items");--}}
{{--            /*append the DIV element as a child of the autocomplete container:*/--}}
{{--            this.parentNode.appendChild(a);--}}
{{--            /*for each item in the array...*/--}}
{{--            for (i = 0; i < arr.length; i++) {--}}
{{--                /*check if the item starts with the same letters as the text field value:*/--}}
{{--                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {--}}
{{--                    /*create a DIV element for each matching element:*/--}}
{{--                    b = document.createElement("DIV");--}}
{{--                    /*make the matching letters bold:*/--}}
{{--                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";--}}
{{--                    b.innerHTML += arr[i].substr(val.length);--}}
{{--                    /*insert a input field that will hold the current array item's value:*/--}}
{{--                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";--}}
{{--                    /*execute a function when someone clicks on the item value (DIV element):*/--}}
{{--                    b.addEventListener("click", function(e) {--}}
{{--                        /*insert the value for the autocomplete text field:*/--}}
{{--                        inp.value = this.getElementsByTagName("input")[0].value;--}}
{{--                        /*close the list of autocompleted values,--}}
{{--                        (or any other open lists of autocompleted values:*/--}}
{{--                        closeAllLists();--}}
{{--                    });--}}
{{--                    a.appendChild(b);--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--        /*execute a function presses a key on the keyboard:*/--}}
{{--        inp.addEventListener("keydown", function(e) {--}}
{{--            var x = document.getElementById(this.id + "autocomplete-list");--}}
{{--            if (x) x = x.getElementsByTagName("div");--}}
{{--            if (e.keyCode == 40) {--}}
{{--                /*If the arrow DOWN key is pressed,--}}
{{--                increase the currentFocus variable:*/--}}
{{--                currentFocus++;--}}
{{--                /*and and make the current item more visible:*/--}}
{{--                addActive(x);--}}
{{--            } else if (e.keyCode == 38) { //up--}}
{{--                /*If the arrow UP key is pressed,--}}
{{--                decrease the currentFocus variable:*/--}}
{{--                currentFocus--;--}}
{{--                /*and and make the current item more visible:*/--}}
{{--                addActive(x);--}}
{{--            } else if (e.keyCode == 13) {--}}
{{--                /*If the ENTER key is pressed, prevent the form from being submitted,*/--}}
{{--                e.preventDefault();--}}
{{--                if (currentFocus > -1) {--}}
{{--                    /*and simulate a click on the "active" item:*/--}}
{{--                    if (x) x[currentFocus].click();--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--        function addActive(x) {--}}
{{--            /*a function to classify an item as "active":*/--}}
{{--            if (!x) return false;--}}
{{--            /*start by removing the "active" class on all items:*/--}}
{{--            removeActive(x);--}}
{{--            if (currentFocus >= x.length) currentFocus = 0;--}}
{{--            if (currentFocus < 0) currentFocus = (x.length - 1);--}}
{{--            /*add class "autocomplete-active":*/--}}
{{--            x[currentFocus].classList.add("autocomplete-active");--}}
{{--        }--}}
{{--        function removeActive(x) {--}}
{{--            /*a function to remove the "active" class from all autocomplete items:*/--}}
{{--            for (var i = 0; i < x.length; i++) {--}}
{{--                x[i].classList.remove("autocomplete-active");--}}
{{--            }--}}
{{--        }--}}
{{--        function closeAllLists(elmnt) {--}}
{{--            /*close all autocomplete lists in the document,--}}
{{--            except the one passed as an argument:*/--}}
{{--            var x = document.getElementsByClassName("autocomplete-items");--}}
{{--            for (var i = 0; i < x.length; i++) {--}}
{{--                if (elmnt != x[i] && elmnt != inp) {--}}
{{--                    x[i].parentNode.removeChild(x[i]);--}}
{{--                }--}}
{{--            }--}}
{{--        }--}}
{{--        /*execute a function when someone clicks in the document:*/--}}
{{--        document.addEventListener("click", function (e) {--}}
{{--            closeAllLists(e.target);--}}
{{--        });--}}
{{--    }--}}

{{--    /*An array containing all the country names in the world:*/--}}
{{--    var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];--}}

{{--    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/--}}
{{--    autocomplete(document.getElementById("myInput"), countries);--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
