<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng đọc số thành chữ</title>
</head>
<style>
    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>
<body>
<h2>Convert number into words</h2>
<form method="post">
    <input type="text" name="number" placeholder="Input the number you want to convert"/>
    <input type="submit" id="submit" value="Convert"/>
</form>
</body>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST['number'];
    $hundreds = floor($number / 100);
    $tens = floor($number / 10) % 10;
    $ones = $number % 10;
    if ($number >= 0 && $number <= 19) {
        switch ($number) {
            case '0':
                echo "zero";
                break;
            case 1:
                echo "one";
                break;
            case 2:
                echo "two";
                break;
            case 3:
                echo "three";
                break;
            case 4:
                echo "four";
                break;
            case 5:
                echo "five";
                break;
            case 6:
                echo "six";
                break;
            case 7:
                echo "seven";
                break;
            case 8:
                echo "eight";
                break;
            case 9:
                echo "nine";
                break;
            case 10:
                echo "ten";
                break;
            case 11:
                echo "eleven";
                break;
            case 12:
                echo "twelve";
                break;
            case 13:
                echo "thirteen";
                break;
            case 15:
                echo "fifteen";
                break;
            case 14:
                echo "fourteen";
                break;
            case 16:
                echo "sixteen";
                break;
            case 17:
                echo "seventeen";
                break;
            case 18:
                echo "eighteen";
                break;
            case 19:
                echo "nineteen";
                break;
        }
    } elseif ($number >= 20 && $number < 99) {
        switch ($tens) {
            case 2:
                echo "twenty";
                break;
            case 3:
                echo "thirty";
                break;
            case 4:
                echo "forty";
                break;
            case 5:
                echo "fifty";
                break;
            case 6:
                echo "sixty";
                break;
            case 7:
                echo "seventy";
                break;
            case 8:
                echo "eighty";
                break;
            case 9:
                echo "ninety";
                break;
        }
        switch ($ones) {
            case 0:
                echo ' ';
                break;
            case 1:
                echo " one";
                break;
            case 2:
                echo " two";
                break;
            case 3:
                echo " three";
                break;
            case 4:
                echo " four";
                break;
            case 5:
                echo " five";
                break;
            case 6:
                echo " six";
                break;
            case 7:
                echo " seven";
                break;
            case 8:
                echo " eight";
                break;
            case 9:
                echo " nine";
                break;
            default:
                echo 'out of ability';
                break;
        }
    } elseif ($number > 99 && $number <= 999) {
        switch ($hundreds) {
            case 1:
                echo "one hundred ";
                break;
            case 2:
                echo "two hundred ";
                break;
            case 3:
                echo "three hundred ";
                break;
            case 4:
                echo "four hundred ";
                break;
            case 5:
                echo "five hundred ";
                break;
            case 6:
                echo "six hundred ";
                break;
            case 7:
                echo "seven hundred ";
                break;
            case 8:
                echo "eight hundred ";
                break;
            case 9:
                echo "nine hundred ";
                break;
            default:
                echo 'out of ability';
                break;
        }
        if ($tens == 1) {
            switch ($ones) {
                case 0 :
                    echo " and ten";
                    break;
                case 1:
                    echo " and eleven";
                    break;
                case 2:
                    echo ' and twelve';
                    break;
                case 3 :
                    echo " and thirteen";
                    break;
                case 4:
                    echo " and fourteen ";
                    break;
                case 5:
                    echo ' and fifteen';
                    break;
                case 6 :
                    echo " and sixteen";
                    break;
                case 7:
                    echo " and seventeen";
                    break;
                case 8:
                    echo ' and eighteen';
                    break;
                case 9:
                    echo ' and nineteen';
                    break;
            }
        } elseif ($tens != 1) {
            switch ($tens) {
                case 0:
                    echo " ";
                    break;
                case 2:
                    echo "twenty";
                    break;
                case 3:
                    echo "thirty";
                    break;
                case 4:
                    echo "forty";
                    break;
                case 5:
                    echo "fifty";
                    break;
                case 6:
                    echo "sixty";
                    break;
                case 7:
                    echo "seventy";
                    break;
                case 8:
                    echo "eighty";
                    break;
                case 9:
                    echo "ninety";
                    break;
            }
            switch ($ones) {
                case 0:
                    echo ' ';
                    break;
                case 1:
                    echo " and one";
                    break;
                case 2:
                    echo " and two";
                    break;
                case 3:
                    echo " and three";
                    break;
                case 4:
                    echo " and four";
                    break;
                case 5:
                    echo " and five";
                    break;
                case 6:
                    echo " and six";
                    break;
                case 7:
                    echo " and seven";
                    break;
                case 8:
                    echo " and eight";
                    break;
                case 9:
                    echo " and nine";
                    break;
                default:
                    echo 'out of ability';
            }
        }
    } elseif ($number > 999) {
        echo "out of ability";
    }
}