<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Assignment2.css" />
    <title>Muqadasa Sherani | Assignment2</title>
  </head>
  <body>
    <form action="" method="post">
        <!--From: -->
      <label for="from">From: </label>
      <input type="text" name="from" value="<?php echo isset($_POST['from']) ? htmlspecialchars($_POST['from'], ENT_QUOTES) : '0'; ?>" />
      <!--Currency: -->
      <label for="from-currency">Currency: </label>
      <select name="from-currency" >
        <option value="USD" <?php echo (isset($_POST['from-currency']) && $_POST['from-currency'] === 'USD') ? 'selected' : ''; ?>>US Dollar</option>
        <option value="CAD" <?php echo (isset($_POST['from-currency']) && $_POST['from-currency'] === 'CAD') ? 'selected' : ''; ?>>Canadian Dollar</option>
        <option value="EUR" <?php echo (isset($_POST['from-currency']) && $_POST['from-currency'] === 'EUR') ? 'selected' : ''; ?>>Euro</option>
      </select>
      <br />
      <!--To: -->
        <label>To: </label>
        <div class='result'>
            <?php
                /*PHP conversion part*/

                if(isset($_POST['submit'])){

                    $amount = $_POST['from'];
                    $from_cur = $_POST['from-currency'];
                    $to_cur = $_POST['to-currency'];

                    /*from USD to USD*/
                    if($from_cur == "USD" AND $to_cur == "USD"){
                        echo $amount;
                    }

                    /*from USD to CAD*/
                    if($from_cur == "USD" AND $to_cur == "CAD"){
                        echo $amount*1.25;
                    }

                    /*from USD to EUR*/
                    if($from_cur == "USD" AND $to_cur == "EUR"){
                        echo $amount*0.91;
                    }

                    /*from CAD to CAD*/
                    if($from_cur == "CAD" AND $to_cur == "CAD"){
                        echo $amount;
                    }

                    /*from CAD to USD*/
                    if($from_cur == "CAD" AND $to_cur == "USD"){
                        echo $amount*0.80;
                    }

                    /*from CAD to EUR*/
                    if($from_cur == "CAD" AND $to_cur == "EUR"){
                        echo $amount*0.72;
                    }

                    /*from EUR to EUR*/
                    if($from_cur == "EUR" AND $to_cur == "EUR"){
                        echo $amount;
                    }

                    /*from EUR to CAD*/
                    if($from_cur == "EUR" AND $to_cur == "CAD"){
                        echo $amount*1.38;
                    }

                    /*from EUR to USD*/
                    if($from_cur == "EUR" AND $to_cur == "USD"){
                        echo $amount*1.10;
                    }
                } else{
                    echo '0';
                }
            ?>
        </div>
        
        <label for="to-currency">Currency: </label>
        <select name="to-currency">
            <option value="USD" <?php echo (isset($_POST['to-currency']) && $_POST['to-currency'] === 'USD') ? 'selected' : ''; ?>>US Dollar</option>
            <option value="CAD" <?php echo (isset($_POST['to-currency']) && $_POST['to-currency'] === 'CAD') ? 'selected' : ''; ?>>Canadian Dollar</option>
            <option value="EUR" <?php echo (isset($_POST['to-currency']) && $_POST['to-currency'] === 'EUR') ? 'selected' : ''; ?>>Euro</option>
        </select>
      <br />
      <!--Submit button-->
      <input id="button-id" type="submit" name="submit" value="Submit" />
    </form>
  </body>
</html>

