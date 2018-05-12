<!DOCTYPE html>
<html lang="en">
<head>      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <title>HTTP POST</title>
</head>

    <h1 class="welcome">Welcome to our Galaxy Web </h1>
    <img src="galaxy.jpg" align="left" alt="Yummy">
    <p class = "Lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
        magna aliqua. Ut aliquam purus sit amet luctus. Tellus at urna condimentum mattis pellentesque id nibh. Laoreet suspendisse 
        interdum consectetur libero id faucibus. Viverra nibh cras pulvinar mattis nunc sed blandit libero. Lectus quam id leo in vitae
        turpis massa sed elementum. Duis ut diam quam nulla porttitor. Libero enim sed faucibus turpis in eu. Proin sagittis nisl rhoncus
        mattis rhoncus urna. Tempus urna et pharetra pharetra massa. Malesuada nunc vel risus commodo viverra maecenas. Lorem donec massa
        sapien faucibus et. Condimentum id venenatis a condimentum vitae sapien. Eget nunc scelerisque viverra mauris in aliquam sem 
        fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem
        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit
        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
    </p>
    <p>Download your  <a href="MarsGalaxy.pdf" title="voucher" download="HTML_MarsGalaxy">Voucher</a></p>
 
    
 <form action="" method="POST">
 <div class = "form-group" >
   <label for ="username">Username: <input  type="text" id="username"  name="username" style="color: black" placeholder="Smurfette" required/></label>
   <label for="email">Email: <input  type="email" id="email"  name="email" style="color: black" placeholder="smurf@example.com" required/></label>
  
   <label>Date of Birth: <input type="date"  name="birthdate" style="color: black"></label>
   <label for = "country">Country: <input  type="text" id="country"  name="country" placeholder="Wonderland" required/></label>
   <button  type="submit" class="btn-btn-primary btn-sm"> Try one </button>
  </div>
 </form>
    
    <div style="background-color: antiquewhite; margin-top: 3%">
        <img src="hotchocho.jpg" align="right" alt ="hotchoco" style="padding-right: 0">
    <p class="response"> Thank you for being part of our team!</p> 
        <?php
        if (!empty($_POST)) {
            echo "<h3>Welcome $_POST[username]</h3>"; 
            echo "<h3>You're email is $_POST[email]</h3>";
            echo "<h3>You've been borned in $_POST[birthdate]</h3>";
            echo "<h3>You live in $_POST[country]</h3>";
        }
        else{
        echo "<h4>You have not submitted any data to the server</h4>";
        }
    ?>
    </div>
    
    <footer> <p>&copy; GalaxySupreme 2018 </p></footer>    

</html>
