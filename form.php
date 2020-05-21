
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Sécuriser la prise de contact</title> 
  </head>

<h2> Sécuriser la prise de contact </h2>
<p><span class="error">* required field</span></p>

  <body>
    <form  action="controller.php" method="post">
      <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_lastname">
        <br><br>
      </div>
      <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="user_firstname">
        <br><br>
      </div>
      <div>
        <label  for="email">email :</label>
        <input  type="email"  id="email"  name="user_email">
        <br><br>
      </div>
      <div>
        <label  for="phone">Tél.:</label>
        <input  type="tel"  id="phone"  name="user_phone">
        <br><br>
      </div>
      <div>
        <label  for="subject">Sujet :</label>
        <select id="subject" name="subject">
        <br><br>
          <option value="">--Please choose an option--</option>
          <option value="PHP">PHP</option>
          <option value="SQL">SQL</option>
          <option value="HTML">HTML</option>
          <option value="CSS">CSS</option>
        </select>
      </div>
      <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" rows="5" cols="40">
        </textarea>
        <br><br>
      </div>
      <div  class="button">
        <button  type="submit">Envoyer votre message</button>
      </div>
    </form>
  </body>
</html>



