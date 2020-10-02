<?php
$bool;
$c;
    if($_POST['one'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+1;
        }
        else {
            $i = (int)$_POST['textblock'];
        $i *=10;
        $a = $i+1;
        }
        
    }
    else if($_POST['two'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+2;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+2;
    }
    else if($_POST['three'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+3;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+3;
    }
    else if($_POST['four'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+4;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+4;
    }
    else if($_POST['five'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+5;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+5;
    }
    else if($_POST['six'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+6;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+6;
    }
    else if($_POST['seven'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+7;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+7;
    }
    else if($_POST['eight'])
    {
        if ($bool !=null) 
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+8;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+8;
    }
    else if($_POST['nine'])
    {
        if ($bool != null)
        {
            $i = (int)$_POST['textblock'];
            $i *=10;
            $b = $i+9;
        }
        $i = (int)$_POST['textblock'];
        $i *= 10;
        $a = $i+9;
    }

    if($_POST['plus'])
    {
        $bool = "+";
    }
    else if($_POST['minus'])
    {
        $bool = "-";
    }
    else if($_POST['multiply'])
    {
        $bool = "*";
    }
    

    if($_POST['submit'])
    {
        
       
    }
    
?>

<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylecalc.css">
    <title>Калькулятор</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <input name="textblock" type="text" class="form-control" value="<?php
                 if ($a){
                    echo $a;
                 } 
                 ?>" placeholder="Введите число" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input value="1" type="submit" name="one" class="btn btn-primary mb-2">
                                <input value="2" type="submit" name="two" class="btn btn-primary mb-2">
                                <input value="3" type="submit" name="three" class="btn btn-primary mb-2">
                                <input value="+" type="submit" name="plus" class="btn btn-primary mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input value="4" type="submit" name="four" class="btn btn-primary mb-2">
                                <input value="5" type="submit" name="five" class="btn btn-primary mb-2">
                                <input value="6" type="submit" name="six" class="btn btn-primary mb-2">
                                <input value="-" type="submit" name="minus" class="btn btn-primary mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input value="7" type="submit" name="seven" class="btn btn-primary mb-2">
                                <input value="8" type="submit" name="eight" class="btn btn-primary mb-2">
                                <input value="9" type="submit" name="nine" class="btn btn-primary mb-2">
                                <input value="*" type="submit" name="multiply" class="btn btn-primary mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="row none-margin">
                        <div class="col">
                            <input value="Вычислить" name="submit" type="submit" class="btn btn-primary mb-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control" type="text" placeholder="<?php
                 if ($c){
                    echo $c;
                 } 
                 ?>" readonly>
                        </div>
                    </div>
                    
                 </form>
                 
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
