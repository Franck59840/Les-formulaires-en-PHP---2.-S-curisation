<?php 
    include "form.php";

?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form  action="/thank.php" target="_blank" method="post">
            <div>
            <label  for="lastname"> Nom :</label>
                <input  type="text"  id="lastname"  name="userLastName"required>
              
            </div>
            <div>
            <label  for="firstname">Prénom :</label>
                <input  type="text"  id="firstname"  name="userFirstName"required>
                
            </div>
            
            <div>
            <label  for="phone">Téléphone :</label>
                <input  type="phone"  id="phone"  name="userPhone" required>
                
            </div>
            <div>
            <div>
            <label  for="email">Courriel :</label>
                <input  type="email"  id="email"  name="userEmail" required >
            </div>
            <select for="menu "name="menuDestination" required>
                <option>Sujet</option>
                <option>PHP c'est bien ?</option>
                <option>Symfony c'est mieux</option>
                <option>Je reste sur Javascript</option>
            </select>
            <div>
            <label  for="message">Message :</label>
                <textarea  id="message"  name="userMessage" required></textarea>
            </div>
           
            
            <div  class="button">
            <button  type="submit">Envoyer votre message</button>
            </div>
        </form>
        </body>
    </html>
