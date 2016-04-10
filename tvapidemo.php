<?PHP
/*
 * TV API Demo
 */


$url  = 'http://api.tvmaze.com/schedule?country=US&date=2015-04-01';
$json = file_get_contents($url);
$retVal = json_decode($json, TRUE);

for ($x = 0; $x < count($retVal); $x++) {
    echo $retVal[$x]['show']['name']."<br/>";
}
