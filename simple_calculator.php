<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      </head>
  <body>

    <div class="outerDiv">
      <div class="innerDiv">
        <div class="row">

          <div class="col  ">

            <div class="col1">


              <h2><div class="box" style="float:left">
                 <p> </p>
              </div>SIMPLE CALCULATOR</h2>
            </div>
          </div>

          <div class="col ">
            <div class="col2">

              <form class=""  method="POST"  >
                <label for="">Enter the numbers</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" value="0" name="num1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter a number">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control" value="0" name="num2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter a number">
                </div>

                <div class="input-group mb-3">
                  <select class="form-select" id="inputGroupSelect01" name="operation">
                    <option selected value="">Choose</option>
                    <option value="add">ADD</option>
                    <option value="sub">SUB</option>
                    <option value="mul">MUL</option>
                    <option value="div">DIV</option>
                  </select>
                </div>


                <input class="btn " type="submit" value="Submit" name="submit" >



              </form>


            </div>
          </div>



        </div>
<div class="result">
  <h4 class="">
    <?php
      if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operation=$_POST['operation'];
        switch($operation){
          case "add":$sum=$num1+$num2;
          echo "Addition of the numbers is $sum";
          break;
          case 'sub':$sub=$num1-$num2;
          echo "Subtraction of the numbers is $sub";
          break;
          case 'mul':$mul=$num1*$num2;
          echo "Multiplication of the numbers is $mul";
          break;
          case 'div':$div=$num1/$num2;
          echo "Division of the numbers is $div";
          break;
          default:echo "Enter the numbers please...";

        }
      }

     ?>
  </h4>

</div>



      </div>
    </div>

  </body>
</html>
