<?php 

function rank($upvote, $downvote, $views, $confidence = 1.96) {
    $n = $upvote + $downvote;
    $z = $confidence;

    $phat = $upvote / $n;
    $score = ($phat + $z * $z / (2 * $n) - $z * sqrt(($phat * (1 - $phat) + $z * $z / (4 * $n)) / $n)) / (1 + $z * $z / $n);

    return $score;
}