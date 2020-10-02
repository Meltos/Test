<?php
    if($_POST['submit'])
    {
        $a = (int)$_POST['first'];
        $b = (int)$_POST['second'];
        $p = $_POST['operation'];
        $c;
        switch($p){
            case '1': $c = $a + $b;
            break;
            case '2': $c = $a - $b;
            break;
            case '3': $c = $a * $b;
            break;
            case '4': if ($b ==0){
                $c = "Бесконечность";
            }
            else{
                $c = $a / $b;
            }
            break;
        }
    }
    
?>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <input name="first" type="text" class="form-control" placeholder="Первое число" require>
                        </div>
                        <div class="col">
                            <input name="second" type="text" class="form-control" placeholder="Второе число" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Выбрать действие</label>
                                <select name="operation" class="form-control" id="exampleFormControlSelect1" require>
                                <option value="1">Сложить</option>
                                <option value="2">Вычесть</option>
                                <option value="3">Умножить</option>
                                <option value="4">Разделить</option>
                                </select>
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


