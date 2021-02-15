
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email_user'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
                                   
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
                                    
	<style>

body {
    margin: 0;
    padding: 0
}

#container {
    margin: 0;
    padding: 0;
    height: 650px;
    width: 100%;
    background-image:url("images/retro.jpg") 
}

#profilecontainer {
    width: 350px;
    height: 450px;
    background-color: white;
    border-radius: 8px;
    position: relative;
    top: 100px;
    left: 38%;
    box-shadow: 0 0 25px black
}

#part1 {
    width: 350px;
    height: 300px;
    background-color: #FF9299;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px
}

.hr {
    border: 1px solid black;
    margin-bottom: -7px
}



#person {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 5px solid white;
    position: relative;
    top: 50px;
    left: 36%;
    cursor: pointer
}

#name {
    font-family: 'Rubik', sans-serif;
    position: relative;
    padding:-10px;
    top: 55px;
    text-align: center;
    font-size: 16px;
    color: white
}


#ui {
    border-left: 1px solid gray
}



#follow {
    position: relative;
    top: 170px;
    left: 20%;
    height: 40px;
    width: 100px;
    font-size: 12px;
    font-family: 'Rubik', sans-serif;
    background-color: white;
    box-shadow: 0 0 15px;
    border: none;
    
    cursor: pointer;
    color: #FF9299
}
#follow1 {
    position: relative;
    top: 170px;
    left: 25%;
    height: 40px;
    width: 100px;
    font-size: 12px;
    font-family: 'Rubik', sans-serif;
    background-color: white;
    box-shadow: 0 0 15px;
    border: none;
    
    cursor: pointer;
    color: #FF9299
}

#follow:hover {
    background-color: cadetblue;
    color: white;
    transition: 0.5s
}





#next {
    width: 280px;
    height: 450px;
    background-color: rgb(20, 20, 35);
    position: relative;
    top: -540px;
    left: 0%;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    display: none
}

#cross2 {
    position: relative;
    top: -5px;
    left: 15px;
    color: white
}

#cross2:hover {
    color: red;
    transition: 0.5s
}



#name2,


.fa-mobile-alt,
#code {
    margin-right: 10px
}

.button {
    width: 100%;
    height: 40px;
    margin-bottom: 10px;
    font-size: 20px;
    font-family: 'Rubik', sans-serif;
    color: white;
    background-color: transparent;
    border: none
}



@media only screen and (max-width:830px) {
    #profilecontainer {
        position: relative;
        left: 20%
    }
}

@media only screen and (max-width:620px) {
    #profilecontainer {
        position: relative;
        left: 10%
    }
}

@media only screen and (max-width:530px) {
    #profilecontainer {
        position: relative;
        left: 4%
    }
}
</style>
</head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" >

<body>
    <div id="container">
        <div id="profilecontainer">
        
            <div id="part1"> 
                     <img id="person" src="https://img.icons8.com/bubbles/100/000000/user.png">
                <p id="name">Hello</p> 
                <p id="name"><?php echo $_SESSION['name']; ?></p>
                <p id="name"><?php echo $_SESSION['email_user']; ?></p>
                <a href="change.php"><button id="follow">EDIT PROFILE</button></a>
                <a href="home1.php"><button id="follow1">EXIT</button></a>
            </div>
            <div id="part2">
                
            </div>
            
        </div>
        
    </div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>