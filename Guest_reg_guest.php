<html>
    <head>
        <title>Guests</title>
        <link rel="stylesheet" href="./Guest_reg_admin_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--  The Tailwind CSS CDN link in your HTML file -->
        <!-- <link href="https://cdn.tailwindcss.com" rel="stylesheet">-->
        <style>
            body{
  margin: 0px 0px;
  overflow-x: hidden;
}
a{
    color: black;
    text-decoration: none;
}
a:hover{
    color: red;
    text-decoration: none;
}
a{
    margin: 0px 25px;
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: white;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    border: 1;
    border-color: gray;
    border-radius: 20px;
    background-color: white; /* Default background color */
    color: black;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease-out; /* Transition for background color change */
    position: relative;
    overflow: hidden;
  }

  .button:hover {
    background-color: red; /* Background color on hover */
    color: white;
  }
        </style>
    </head>
    
    <body>
        <div class="nav" style="margin: 0px 75px;">
            <div style="display: flex;">
                <div>
                    <img src="logo.jpg" height="75px" width="75px">
                </div>
                <div style="padding-top: 5px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                    <p style="font-size: 28px;"><b>Kec</b>Hostel</p>
                </div>
            </div>
            <div style="padding-top: 23px; font-family:Arial, Helvetica, sans-serif; font-size: 20px;font-weight: 400;" class="nac_link">
                <a href="#">Pass Approval</a>
                <a href="#">Notices</a>
                <a href="#">Guest Reg.</a>
                <a href="#">Complaints Reg.</a>
                <button class="button">
                    <span>Sign Out</span>
                  </button>  
            </div>
            <div class="container">
        <section class="Intro">
            <img src="https://i.ibb.co/PtZq9Hq/Logo.png" alt="logo">
            <h2>Lorem Ipsum Company</h2>
            <h3>Tradition, Dedication, Success</h3>
        </section>
        <div class="border"></div>
        <form>
            <label for="mail">Mail:</label>
            <input type="text" placeholder="e-mail" required>
            <label for="username">Username:</label>
            <input type="text" placeholder="username" required>
            <label for="password">Password:</label>
            <input type="password" placeholder="type password" required>
            <button>register</button>
            <p>Not a member? <i>register</i> now</p>
        </form>
    </div>
        </div><br>