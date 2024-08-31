<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title></title>
    <link rel="stylesheet" type="css" href="result.css">
    <link rel="stylesheet" type="text/css" href="result1.css">
    <?php
    session_start();
    $db = new mysqli("localhost", "root", "", "voting");
    ?>
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history go 1;
        };
    </script>
</head>

<body background="s.jpg">
    <div id="section-1">
        <div class="c text-center">
            
            <button class="btn btn-dark mt-3" onclick="display('section-2')">
                <a href="javascript:window.print()">Download as PDF</a>
            </button>
            <button class="btn btn-dark mt-3" onclick="display('section-2')">View</button>
        </div>
        <div class="c text-center mt-4">
              <a href="index.php" class="btn btn-dark">Logout</a>
        </div>
    </div>
    <div id="section-2" >
        <p><center><font size="10">VOTE COUNT</font></center></p>
        <div>
            <?php
            $v = "SELECT * from admins";
            $countt = $db->query($v);
            $new = $countt->fetch_assoc();
            echo "<div class=container >";
            echo "Total vote for CONGRESS = " . $new["congress"] . "<br>";
            echo "Total vote for DMK      = " . $new["dmk"] . "<br>";
            echo "Total vote for CPI      = " . $new["cpi"] . "<br>";
            echo "Total vote for AIADMK   = " . $new["aiadmk"] . "<br>";
            echo "Total vote for BJP      = " . $new["bjp"] . "<br>";
            
            $winnerCount = max($new["dmk"], $new["congress"], $new["cpi"], $new["aiadmk"], $new["bjp"], $new["nota"]);
            if ($winnerCount == 0) {
                $winnerName = "NO VOTES";
            } 
            else if ($winnerCount == $new["nota"]) {
                $winnerName = "NOTA";
            } elseif ($winnerCount == $new["dmk"]) {
                $winnerName = "DMK";
            } elseif ($winnerCount == $new["cpi"]) {
                $winnerName = "CPI";
            } elseif ($winnerCount == $new["aiadmk"]) {
                $winnerName = "AIADMK";
            } elseif ($winnerCount == $new["bjp"]) {
                $winnerName = "BJP";
            } else {
                $winnerName = "CONGRESS";
            }
            echo "Total vote for NOTA     = " . $new["nota"] . "<br> The Winner is " . $winnerName;
            echo "</div>";
            ?>
            <button class="btn btn-primary text-center m-4" onclick="display('section-1')">Back</button>
        </div>
    </div>
    
    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
</body>
</html>