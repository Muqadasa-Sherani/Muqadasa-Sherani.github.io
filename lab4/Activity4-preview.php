<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muqadasa Sherani | Activity4</title>
  </head>
  <body>
    <?php
    /*name*/
    if(empty($_POST['name']) == false)
    {
        echo $_POST['name']."<br>";
    }
    else{
        echo "Name: Not provided"."<br>";
    }

    /*username*/
    if(empty($_POST['username']) == false)
    {
        echo $_POST['username']."<br>";
    }
    else{
        echo "Username: Not provided"."<br>";
    }

    /*password*/
    if(empty($_POST['password']) == false)
    {
        echo $_POST['password']."<br>";
    }
    else{
        echo "Password: Not provided"."<br>";
    }

    /*address*/
    if(empty($_POST['address']) == false)
    {
        echo $_POST['address']."<br>";
    }
    else{
        echo "Address: Not provided"."<br>";
    }

    /*Country*/
    if(empty($_POST['country']) == false)
    {
        echo $_POST['country']."<br>";
    }
    else{
        echo "Country: Not provided"."<br>";
    }

    /*Zip code*/
    if(empty($_POST['zip']) == false)
    {
        echo $_POST['zip']."<br>";
    }
    else{
        echo "ZIP Code: Not provided"."<br>";
    }

    /*email*/
    if(empty($_POST['email']) == false)
    {
        echo $_POST['email']."<br>";
    }
    else{
        echo "Email: Not provided"."<br>";
    }

    /*Sex*/
    if(empty($_POST['sex']) == false)
    {
        echo $_POST['sex']."<br>";
    }
    else{
        echo "Sex: Not provided"."<br>";
    }
    /*Languages*/
    if(empty($_POST["language"]) == true){
      echo "Language: Not provided"."<br>";
    }
    else{
      for($i=0; $i<sizeof($_POST["language"]); $i++){
        echo $_POST["language"][$i]."<br>";
      }
    }

    /*About*/
    if(empty($_POST['about']) == false)
    {
        echo $_POST['about']."<br>";
    }
    else{
        echo "About: Not provided"."<br>";
    }

    ?>
  </body>
</html>