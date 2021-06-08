<?php

$data = file_get_contents('https://results.elections.virginia.gov/vaelections/2021%20June%20Democratic%20Primary/Json/Locality/ALEXANDRIA_CITY/Index.json');
$json_data = json_decode($data);
echo('<pre>');

$city_council_array = $json_data->Races[5];
echo('</pre>');

$election_name = $json_data->ElectionName;
$race_name = $city_council_array->RaceName;
$city_council_candidades = $city_council_array->Candidates;
$number_of_seats = $city_council_array->NumberOfSeats;
$precincts_total = $city_council_array->PrecinctsParticipating;
$precincts_reporting = $city_council_array->PrecinctsReporting;
$last_update = new DateTime($json_data->CreateDate);

function sortByOrder($a, $b) {
    return $b->Votes - $a->Votes;
}

usort($city_council_candidades, 'sortByOrder');

?>
	<div align="center">
		<img src="logo.png" style="max-width: 400px; height: auto; padding-bottom: 15px;">
		<h2><?php echo($election_name.'<br/>'.$race_name); ?></h2>
		<h3><?php echo($precincts_reporting.' out of '.$precincts_total.' precincts reporting'); ?></h3>
	</div>
	<div class="container">
		<?php for($i = 0; $i < $number_of_seats; $i++) { ?>
		<?php //for($i = 2; $i < $number_of_seats+2; $i++) { ?>
		<div class="row result_row">
			<div class="col-md-8">
				<h1><?php print_r($city_council_candidades[$i]->BallotName); ?></h1>
			</div>
			<div class="col-md-2">
				<h1><?php print_r($city_council_candidades[$i]->Votes); ?></h1>
			</div>
			<div class="col-md-2" style="text-align: right;">
				<h1><?php print_r($city_council_candidades[$i]->Percentage); ?></h1>
			</div>
		</div>
		<?php } ?>
	</div>
	<div align="center">
		<h4>Source: Virginia State Board of Elections | Last Updated: <?php echo $last_update->format('Y-m-d g:m:s a'); ?></h4>
	</div>
	
	<div align="center">Showing first six spots based on votes regardless of political party</div>