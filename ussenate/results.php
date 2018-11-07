<?php

$data = file_get_contents('https://results.elections.virginia.gov/vaelections/2018%20November%20General/Json/Congress.json');
$json_data = json_decode($data);
echo('<pre>');

$senate_array = $json_data->Races[0];
echo('</pre>');

$senate_candidates = $senate_array->Candidates;
$number_of_seats = $senate_array->NumberOfSeats;
$precincts_total = $senate_array->PrecinctsParticipating;
$precincts_reporting = $senate_array->PrecinctsReporting;
$last_update = new DateTime($json_data->CreateDate);
$max = sizeof($senate_candidates);

function sortByOrder($a, $b) {
    return $b->Votes - $a->Votes;
}

usort($senate_candidates, 'sortByOrder');

?>
	<div align="center">
		<img src="logo.png" style="max-width: 400px; height: auto; padding-bottom: 15px;">
		<h1>2018 November General: U.S. Senate</h1>
		<h2><?php echo($precincts_reporting.' out of '.$precincts_total.' precincts reporting'); ?></h2>
	</div>
	<div class="container">
		<?php for($i = 0; $i < $max; $i++) { ?>
		<div class="row result_row">
			<div class="col-md-8">
				<h1><?php print_r($senate_candidates[$i]->BallotName); ?></h1>
			</div>
			<div class="col-md-2">
				<h1><?php print_r($senate_candidates[$i]->Votes); ?></h1>
			</div>
			<div class="col-md-2" style="text-align: right;">
				<h1><?php print_r($senate_candidates[$i]->Percentage); ?></h1>
			</div>
		</div>
		<?php } ?>
	</div>
	<div align="center">
		<h4>Source: Virginia State Board of Elections | Last Updated: <?php echo $last_update->format('Y-m-d g:m:s a'); ?></h4>
	</div>