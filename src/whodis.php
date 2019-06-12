<?php

require_once 'class.IP2LocationAPI.php';

$apiKey = 'RWIIYJANFP';
$package = 'WS24'; // Package: WS1 - WS24
$useSSL = false; // Use HTTP or HTTPS (Secure, but slower)

$ip = $_POST['ip'];

$location = new IP2LocationAPI($apiKey, $package, $useSSL);

if (!$location->query($ip)) {
	die('ERROR');
}

// echo '<pre>';
// echo 'Country Code         : ' . $location->countryCode . "\n";
// echo 'Country Name         : ' . $location->countryName . "\n";
// echo 'Region Name          : ' . $location->regionName . "\n";
// echo 'City Name            : ' . $location->cityName . "\n";
// echo 'Latitude             : ' . $location->latitude . "\n";
// echo 'Longitude            : ' . $location->longitude . "\n";
// echo 'ZIP Code             : ' . $location->zipCode . "\n";
// echo 'Time Zone            : ' . $location->timeZone . "\n";
// echo 'ISP                  : ' . $location->isp . "\n";
// echo 'Domain               : ' . $location->domain . "\n";
// echo 'Latitude             : ' . $location->netSpeed . "\n";
// echo 'IDD Code             : ' . $location->iddCode . "\n";
// echo 'Area Code            : ' . $location->areaCode . "\n";
// echo 'Weather Station Code : ' . $location->weatherStationCode . "\n";
// echo 'Weather Station Name : ' . $location->weatherStationName . "\n";
// echo 'Mobile Brand         : ' . $location->mobileBrand . "\n";
// echo 'Elevation            : ' . $location->elevation . "\n";
// echo 'Usage Type           : ' . $location->usageType . "\n";
// echo '</pre>';
?>
<div class="ipdetails-wrap col-sm-12 col-md-9 col-lg-9 col-xs-12" id="op-ip-data">
	<p><span>Country Code :</span> <?php echo $location->countryCode; ?></p>
	<p><span>Country Name :</span> <?php echo $location->countryName; ?></p>
	<p><span>Region Name :</span> <?php echo $location->regionName; ?></p>
	<p><span>City Name :</span> <?php echo $location->cityName; ?></p>
	<p><span>Latitude :</span> <?php echo $location->latitude; ?></p>
	<p><span>Longitude :</span> <?php echo $location->longitude; ?></p>
	<p><span>ZIP Code :</span> <?php echo $location->zipCode; ?></p>
	<p><span>Time Zone :</span> <?php echo  $location->timeZone ; ?></p>
	<p><span>ISP :</span> <?php echo   $location->isp; ?></p>
	<p><span>Domain :</span> <?php echo  $location->domain; ?></p>
	<p><span>Latitude :</span> <?php echo   $location->netSpeed; ?></p>
	<p><span>IDD Code :</span> <?php echo   $location->iddCode; ?></p>
	<p><span>Area Code :</span> <?php echo $location->areaCode ; ?></p>
	<p><span>Weather Station Code :</span> <?php echo $location->weatherStationCode ; ?></p>
	<p><span>Weather Station Name :</span> <?php echo $location->weatherStationName ; ?></p>
	<p><span>Mobile Brand :</span> <?php echo $location->mobileBrand ; ?></p>
	<p><span>Elevation :</span> <?php echo $location->elevation ; ?></p>
	<p><span>Usage Type :</span> <?php echo $location->usageType ; ?></p>
</div>
<div class="copy-data col-sm-12 col-md-3 col-lg-3 col-xs-12">
	<button id="copy-ip-data" onclick="copyDivToClipboard()" class="btn btn-primary">Click to Copy</button>
</div>
<script>
	function copyDivToClipboard() {
	console.log(" getIP zzz");
    var range = document.createRange();
    range.selectNode(document.getElementById("op-ip-data"));
    window.getSelection().removeAllRanges(); // clear current selection
    window.getSelection().addRange(range); // to select text
    document.execCommand("copy");
    window.getSelection().removeAllRanges();// to deselect
}
</script>