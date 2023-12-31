<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<h2>Array</h2>
<p>Collection of elements</p>
<p>We can store multiple data in a single variable</p>
<p>Array stores its data in key => value paire index array will start from 0 and incresed by 1</p>
<h2>Type of Array</h2>
<ul>
    <li>index/numeric array keys will containes only numbers [0-....]</li>
    <li>Associative array ["key"=>"value"]</li>
    <li>multidimension array[[[]]]</li>
</ul>
<?php
$marksOfAbcHindi = 50;
$marksOfAbcGuj = 50;
$marksOfAbcMaths = 50;
$marksOfAbcComp = 50;
// $MarksOfAbc = array();
// $MarksOfAbc = [90,80,90,99];

$MarksOfAbc = ["90",true,'a',99,"Something"];
$AarksOfAbc = ["31","jhjhb",'awdasd',23,949];
$NarksOfAbc = [34,76,76,23,949];

echo "Array 0 index data is :".$MarksOfAbc[0]."<br>";
// echo $MarksOfAbc;
// exit;
echo "<pre>";
print_r($MarksOfAbc); //(key=>value paire)
// var_dump($MarksOfAbc); //(key=>value paire with data type)
// var_export($MarksOfAbc); //(key=>value paire if bloolean val return same true)
// echo count($MarksOfAbc);
for ($i=0; $i < count($MarksOfAbc); $i++) { 
    echo $MarksOfAbc[$i];
}
$MarksOfAbcAssoc = ["Hindi"=>"90","Guj"=>90,"Maths"=>99,"Comp"=>99];
echo "<br>";
foreach ($MarksOfAbcAssoc as $key => $value) {
    echo "$key => $value <br>";
}
$multDimension = array("scl"=>array("10th"=>array("Abc"=>array("Hindi"=>"90","Guj"=>90,"Maths"=>99,"Comp"=>99),"Xyz"=>array("Hindi"=>"80","Guj"=>98,"Maths"=>89,"Comp"=>94),"Pqr"=>array("Hindi"=>"80","Guj"=>98,"Maths"=>65,"Comp"=>74))));  
echo "<pre>";
print_r($multDimension);
print_r($multDimension['scl']["10th"]['Abc']['Maths']);

print_r(["test","checking"]);
print_r([12,45,78]);
print_r([12,78=>45,78]);
print_r([12,"test"=>45,78]);



echo"<pre>";
print_r($MarksOfAbc);
// print_r(array_change_key_case($MarksOfAbc, CASE_UPPER));
// print_r(array_chunk($MarksOfAbc, 3));
// print_r(array_column($MarksOfAbc, 3));
// print_r(array_combine($MarksOfAbc, $AarksOfAbc));
// print_r(array_count_values($NarksOfAbc));
// print_r(array_fill_keys(array_keys($MarksOfAbc),"jkh"));
// print_r(array_fill(0,3,"jfg"));
// print_r(array_flip($NarksOfAbc));
// print_r(array_is_list($MarksOfAbc));
// print_r(array_key_exists("3", $MarksOfAbc));
// print_r(array_key_first($MarksOfAbc));
// print_r(array_key_last($MarksOfAbc));
// print_r(array_keys($MarksOfAbc));
// print_r(array_map("",$MarksOfAbc));
// print_r(array_merge_recursive($MarksOfAbc,$AarksOfAbc));
// print_r(array_merge($MarksOfAbc,$NarksOfAbc));
// print_r(array_multisort($MarksOfAbc,$NarksOfAbc));
// print_r(array_pop($MarksOfAbc));
// print_r(array_push($MarksOfAbc,23));
// print_r(array_product($MarksOfAbc));
// print_r(array_rand($MarksOfAbc));
// print_r(array_replace_recursive($MarksOfAbc));
// print_r(array_reverse($MarksOfAbc));
// print_r(array_search(98, $MarksOfAbc));
// print_r(array_shift($MarksOfAbc));
// print_r(array_slice(array_reverse($AarksOfAbc),0,2));
print_r(sizeof($MarksOfAbc));



?>

    <ul class="chunklist chunklist_reference">
        <li><a href="function.array-change-key-case.php">array_change_key_case</a> — Changes the case of all keys in an array</li>
        <li><a href="function.array-chunk.php">array_chunk</a> — Split an array into chunks</li>
        <li><a href="function.array-column.php">array_column</a> — Return the values from a single column in the input array</li>
        <li><a href="function.array-combine.php">array_combine</a> — Creates an array by using one array for keys and another for its values</li>
        <li><a href="function.array-count-values.php">array_count_values</a> — Counts all the values of an array</li>
        <li><a href="function.array-fill-keys.php">array_fill_keys</a> — Fill an array with values, specifying keys</li>
        <li><a href="function.array-fill.php">array_fill</a> — Fill an array with values</li>
        <li><a href="function.array-filter.php">array_filter</a> — Filters elements of an array using a callback function</li>
        <li><a href="function.array-flip.php">array_flip</a> — Exchanges all keys with their associated values in an array</li>
        <li><a href="function.array-is-list.php">array_is_list</a> — Checks whether a given array is a list</li>
        <li><a href="function.array-key-exists.php">array_key_exists</a> — Checks if the given key or index exists in the array</li>
        <li><a href="function.array-key-first.php">array_key_first</a> — Gets the first key of an array</li>
        <li><a href="function.array-key-last.php">array_key_last</a> — Gets the last key of an array</li>
        <li><a href="function.array-keys.php">array_keys</a> — Return all the keys or a subset of the keys of an array</li>
        <li><a href="function.array-map.php">array_map</a> — Applies the callback to the elements of the given arrays</li>
        <li><a href="function.array-merge-recursive.php">array_merge_recursive</a> — Merge one or more arrays recursively</li>
        <li><a href="function.array-merge.php">array_merge</a> — Merge one or more arrays</li>
        <li><a href="function.array-multisort.php">array_multisort</a> — Sort multiple or multi-dimensional arrays</li>
        <li><a href="function.array-pad.php">array_pad</a> — Pad array to the specified length with a value</li>
        <li><a href="function.array-pop.php">array_pop</a> — Pop the element off the end of array</li>
        <li><a href="function.array-product.php">array_product</a> — Calculate the product of values in an array</li>
        <li><a href="function.array-push.php">array_push</a> — Push one or more elements onto the end of array</li>
        <li><a href="function.array-rand.php">array_rand</a> — Pick one or more random keys out of an array</li>
        <li><a href="function.array-reduce.php">array_reduce</a> — Iteratively reduce the array to a single value using a callback function</li>
        <li><a href="function.array-replace-recursive.php">array_replace_recursive</a> — Replaces elements from passed arrays into the first array recursively</li>
        <li><a href="function.array-replace.php">array_replace</a> — Replaces elements from passed arrays into the first array</li>
        <li><a href="function.array-reverse.php">array_reverse</a> — Return an array with elements in reverse order</li>
        <li><a href="function.array-search.php">array_search</a> — Searches the array for a given value and returns the first corresponding key if successful</li>
        <li><a href="function.array-shift.php">array_shift</a> — Shift an element off the beginning of array</li>
        <li><a href="function.array-slice.php">array_slice</a> — Extract a slice of the array</li>
        <li><a href="function.array-splice.php">array_splice</a> — Remove a portion of the array and replace it with something else</li>
        <li><a href="function.array-sum.php">array_sum</a> — Calculate the sum of values in an array</li>
        <li><a href="function.array-values.php">array_values</a> — Return all the values of an array</li>
        <li><a href="function.array-walk-recursive.php">array_walk_recursive</a> — Apply a user function recursively to every member of an array</li>
        <li><a href="function.array-walk.php">array_walk</a> — Apply a user supplied function to every member of an array</li>
        <li><a href="function.array.php">array</a> — Create an array</li>
        <li><a href="function.arsort.php">arsort</a> — Sort an array in descending order and maintain index association</li>
        <li><a href="function.asort.php">asort</a> — Sort an array in ascending order and maintain index association</li>
        <li><a href="function.compact.php">compact</a> — Create array containing variables and their values</li>
        <li><a href="function.count.php">count</a> — Counts all elements in an array or in a Countable object</li>
        <li><a href="function.current.php">current</a> — Return the current element in an array</li>
        <li><a href="function.each.php">each</a> — Return the current key and value pair from an array and advance the array cursor</li>
        <li><a href="function.end.php">end</a> — Set the internal pointer of an array to its last element</li>
        <li><a href="function.extract.php">extract</a> — Import variables into the current symbol table from an array</li>
        <li><a href="function.in-array.php">in_array</a> — Checks if a value exists in an array</li>
        <li><a href="function.key-exists.php">key_exists</a> — Alias of array_key_exists</li>
        <li><a href="function.key.php">key</a> — Fetch a key from an array</li>
        <li><a href="function.krsort.php">krsort</a> — Sort an array by key in descending order</li>
        <li><a href="function.ksort.php">ksort</a> — Sort an array by key in ascending order</li>
        <li><a href="function.list.php">list</a> — Assign variables as if they were an array</li>
        <li><a href="function.natcasesort.php">natcasesort</a> — Sort an array using a case insensitive "natural order" algorithm</li>
        <li><a href="function.natsort.php">natsort</a> — Sort an array using a "natural order" algorithm</li>
        <li><a href="function.next.php">next</a> — Advance the internal pointer of an array</li>
        <li><a href="function.pos.php">pos</a> — Alias of current</li>
        <li><a href="function.prev.php">prev</a> — Rewind the internal array pointer</li>
        <li><a href="function.range.php">range</a> — Create an array containing a range of elements</li>
        <li><a href="function.reset.php">reset</a> — Set the internal pointer of an array to its first element</li>
        <li><a href="function.rsort.php">rsort</a> — Sort an array in descending order</li>
        <li><a href="function.shuffle.php">shuffle</a> — Shuffle an array</li>
        <li><a href="function.sizeof.php">sizeof</a> — Alias of count</li>
        <li><a href="function.sort.php">sort</a> — Sort an array in ascending order</li>
        <li><a href="function.uasort.php">uasort</a> — Sort an array with a user-defined comparison function and maintain index association</li>
        <li><a href="function.uksort.php">uksort</a> — Sort an array by keys using a user-defined comparison function</li>
        <li><a href="function.usort.php">usort</a> — Sort an array by values using a user-defined comparison function</li>
        <li><a href="function.array-unique.php">array_unique</a> — Removes duplicate values from an array</li>
        <li><a href="function.array-unshift.php">array_unshift</a> — Prepend one or more elements to the beginning of an array</li>
        <li><a href="function.array-udiff-assoc.php">array_udiff_assoc</a> — Computes the difference of arrays with additional index check, compares data by a callback function</li>
        <li><a href="function.array-udiff-uassoc.php">array_udiff_uassoc</a> — Computes the difference of arrays with additional index check, compares data and indexes by a callback function</li>
        <li><a href="function.array-udiff.php">array_udiff</a> — Computes the difference of arrays by using a callback function for data comparison</li>
        <li><a href="function.array-uintersect-assoc.php">array_uintersect_assoc</a> — Computes the intersection of arrays with additional index check, compares data by a callback function</li>
        <li><a href="function.array-uintersect-uassoc.php">array_uintersect_uassoc</a> — Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions</li>
        <li><a href="function.array-uintersect.php">array_uintersect</a> — Computes the intersection of arrays, compares data by a callback function</li>
        <li><a href="function.array-diff-assoc.php">array_diff_assoc</a> — Computes the difference of arrays with additional index check</li>
        <li><a href="function.array-diff-key.php">array_diff_key</a> — Computes the difference of arrays using keys for comparison</li>
        <li><a href="function.array-diff-uassoc.php">array_diff_uassoc</a> — Computes the difference of arrays with additional index check which is performed by a user supplied callback function</li>
        <li><a href="function.array-diff-ukey.php">array_diff_ukey</a> — Computes the difference of arrays using a callback function on the keys for comparison</li>
        <li><a href="function.array-diff.php">array_diff</a> — Computes the difference of arrays</li>
        <li><a href="function.array-intersect-assoc.php">array_intersect_assoc</a> — Computes the intersection of arrays with additional index check</li>
        <li><a href="function.array-intersect-key.php">array_intersect_key</a> — Computes the intersection of arrays using keys for comparison</li>
        <li><a href="function.array-intersect-uassoc.php">array_intersect_uassoc</a> — Computes the intersection of arrays with additional index check, compares indexes by a callback function</li>
        <li><a href="function.array-intersect-ukey.php">array_intersect_ukey</a> — Computes the intersection of arrays using a callback function on the keys for comparison</li>
        <li><a href="function.array-intersect.php">array_intersect</a> — Computes the intersection of arrays</li>
    </ul>
</body>

</html>