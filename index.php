<?php

$conn = new mysqli('localhost', 'root', '', 'exp');

class Rank
{
    function popular($id) {
        $query = "SELECT view FROM voting_data";
    }

    function wilson($id, $upvote, $downvote, $views, $confidence = 1.96)
    {
        $n = $upvote + $downvote;
        $z = $confidence;

        $phat = $upvote / $n;
        $score = ($phat + $z * $z / (2 * $n) - $z * sqrt(($phat * (1 - $phat) + $z * $z / (4 * $n)) / $n)) / (1 + $z * $z / $n);

        $x = array($id, $score);

        return $x;
    }
}



$rnk = new Rank;

$query = $conn->query("SELECT * FROM rank");

while($x = $query->fetch_assoc()) {
    $clc = $rnk->wilson($x['id'], $x['upvote'], $x['downvote'], $x['view']);

    $fnl = array_push($x, $clc);

    echo '<pre>';
    var_dump($fnl);
    echo '</pre>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
</head>

<body>

</body>

</html>