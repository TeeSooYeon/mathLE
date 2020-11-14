<html>
    <div>
    <form method="POST">
        <input type="number" id="n" name="num1">
        <input type="number" id="r" name="num2"><br/>
        <input type="submit" id="submit" name="submit" value="Submit">
    </form>
    </div>
    <div>
        Answer is :<br/>
        <?php 
    if($_POST){
        $n = $_POST["num1"]; 
        $r = $_POST["num2"];

        function fact($num){
            if($num <=1){
                return 1;
            }
            else{
                return $num * fact($num - 1);
            }
        }
        $dividend = $n + $r - 1;

        $fdividend = fact($dividend);

        $fr = fact($r);

        $dvs = $n - 1;

        $dvs2 = fact($dvs);

        $divisor = $fr * $dvs2;

        $answer = $fdividend / $divisor;

        echo "n = ". $n ."<br/>";
        echo "r = ". $r ."<br/>";
        echo "Answer = ". $answer;
    }
        ?>
    </div>
</html>