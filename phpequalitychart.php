<?php
//Make a php dictionary that has keys of the formal string name and its actual value to be compared.
$values = array(
    'true'   => true,
    'false'  => false,
    '1'      => 1,
    '1.0'    => 1.0,
    '1.3' => 1.3,
    '0' => 0,
    '-1' => -1,
    '""' => "",
    'myundefinedvariable' => myundefinedvariable,
    '"null"' => "null",
    'foobar' => foobar,
    'NAN' => NAN, 
    'INF' => INF,
    '-INF' => -INF,
    '1.8e308' => 1.8e308,
    '"foo"' => "foo", 
    '[]' => array(),
    '"true"' => "true",
    '"false"' => "false",
    '"1"' => "1",
    '"0"' => "0",
    '"-1"' => "-1",
    '""' => "",
    '"null"' => "null",
    'new stdClass()' => new stdClass(),
    '[[]]' => array(array()),
    '[0]' => array(0),
    '[1]' => array(1),
    '"12.3456789012345678"' => "12.3456789012345678",
    '"12.3456789012345670"' => "12.3456789012345670",
);
?>

<html>
<style>
body {
    font-family: Courier new;
}
table {
    font-size: 10px;
}
th > div {
    white-space: nowrap;
    width: 20px;
    transform: rotate(90deg);
}
th {
    vertical-align: top;
    width: 20px;
    height: 160px;
    padding-top: 6px;
    margin: 10px;
}
td {
    padding: 0px;
    margin: 0px;
}
.side {
    width: 50px;
    font-weight: bold;
    text-align: right;
}
<!-- css definition for paint a green square background if equal -->
td.equals {
    border: 1px solid black;
    background-color: #5bbe5b;
}
<!-- css definition for paint a default white square background if not equal -->
td.notequals {
    border: 1px solid grey;
    background-color: white;
}
td.comp {
    width: 20px;
    height: 20px;
}
</style>
    
<body style="background-color: #eeeeee">
<table border=1>
    <tr>
        <th border=1 class="side">&nbsp;</th>
<?php
//Overlay the html table headers with their named values.
foreach ($values as $valuePretty => $value) {
?>
        <!-- echo htmlspecialchars($valuePretty); -->
        <th><div><?php echo $valuePretty; ?></div></th>
<?php
}
?>
    </tr>
<?php
//iterate over the dictionary of values above and put the key into '$valuePretty' variable and dictionary value into '$value' variable.
foreach ($values as $valueYPretty => $valueY) {
?>
    <tr>
       <td class="side"><?php echo htmlspecialchars($valueYPretty); ?></td>
<?php
    foreach ($values as $valueX) {
?>
        
<!-- Compare each variable from the horizontal dimension to each variable on the vertical dimension
     and if double equals returns true, paint a green, otherwise, paint a not-green. -->
        <td class="comp <?php echo ($valueY == $valueX ? 'equals' : 'notequals'); ?>">&nbsp;</td>
<?php
    }
    //end Y dimension foreach.
?>
    </tr>
<?php
}
//end X dimension foreach
?>
</table>
</html>

