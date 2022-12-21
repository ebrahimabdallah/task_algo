
<?php
function kruskal(array $graph): array {
    $len = count($graph);
    $tree = [];

    $set = [];
    foreach ($graph as $k => $adj) {
	$set[$k] = [$k];
    }

    $edges = [];
    for ($i = 0; $i < $len; $i++) {
	for ($j = 0; $j < $i; $j++) {
	    if ($graph[$i][$j]) {
		$edges[$i . ',' . $j] = $graph[$i][$j];
        
	    }
	}
    }

    asort($edges);

    foreach ($edges as $k => $w) {
	list($i, $j) = explode(',', $k);

	$iSet = findSet($set, $i);
	$jSet = findSet($set, $j);
	if ($iSet != $jSet) {
	    $tree[] = ["from" => $i, "to" => $j, "cost" => $graph[$i][$j]];
	    unionSet($set, $iSet, $jSet);
        
       
	}
    }
    
    return $tree;
    
}

function findSet(array &$set, int $index) {
    foreach ($set as $k => $v) {
	if (in_array($index, $v)) {
	    return $k;
	}
    }

    return false;
}

function unionSet(array &$set, int $i, int $j) {
    $a = $set[$i];
    $b = $set[$j];

    unset($set[$i], $set[$j]);
    $set[] = array_merge($a, $b);
}

$graph = [
    [2, 3, 6, 11,6],    
    [3, 1,  6, 3, 9],  
    [1, 5,  5, 6, 4],  
    [6, 2,  4, 8, 2],
    [6, 1 ,0, 0, 6]
];

$mst = kruskal($graph);

$minimumCost = 0;

foreach($mst as $v) {
    echo "From {$v['from']} __to__ {$v['to']} cost is = {$v['cost']} \n";
    echo"<br>";
   
    echo "<br>";
     
    $minimumCost += $v['cost'];
    
}

echo "sum the cost and show resualt min ";
echo '</br>';
echo '</br>';echo '</br>';
echo "Minimum cost: $minimumCost "."</br>";

?>