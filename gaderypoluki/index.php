<?php
function encrypt(string $text) : string {
   $text = strtoupper($text);
    $textArray = str_split($text);
    $result = "";
    foreach ($textArray as $key => $char) {
        switch($char) {
            case 'G':
                $result .='A';
                break;
            case 'A':
                $result .='G';
                break;
            case 'D':
                $result .='E';
                break;
            case 'E':
                $result .='D';
                break;
            case 'R':
                $result .='Y';
                break;
            case 'Y':
                $result .='R';
                break;
            case 'P':
                $result .='O';
                break;
            case 'O':
                $result .='P';
                break;
            case 'L':
                $result .='U';
                break;
            case 'U':
                $result .='L';
                break;
            case 'K':
                $result .='I';
                break;
            case 'I':
                $result .='K';
                break;

            default:
                $result .=$char ;   
        }

    }
    return $result;
}



include('header.html');
if(!isset($_REQUEST['action']))
    include('form.html');
if(isset($_REQUEST['action']) && isset($_REQUEST['text'])) {
        $text = $_REQUEST['text'];
        $text = encrypt($text);
        echo "<div>$text</div>";
        echo "<a href=\"index.php\">Wroc</a>";
    }
    include('footer.html');
    ?>