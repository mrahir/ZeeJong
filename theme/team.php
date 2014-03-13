<?php
/*
Template part for team page

Created: February 2014
*/
?>

<div class="container">

	<h2 id="title-team"><?php echo $this->team->getName(); ?></h2>


	<div class="row">


		<div class="col-md-10">
	
			<div class="panel panel-default">
			
			
				<div class="panel-heading">
			
					<h3 class="panel-title">Information</h3>
					
					
				</div>
				
				
				
				<div class="panel-body">
					
					<ul class="list-group">
					
					
						<li class="list-group-item">
							Name: <?php echo $this->team->getName(); ?>
						</li>
					
						<li class="list-group-item">Country: <?php echo $this->team->getCountry()->getName(); ?></li>
						
						<?php if($this->team->getCoach() != NULL) { ?>
						
						<li class="list-group-item">Coach: <?php echo $this->team->getCoach()->getName(); ?></li>
						
						<?php } ?>
						
						<li class="list-group-item">Won matches: <?php echo $this->team->getTotalWonMatches(); ?></li>
		
						<li class="list-group-item">Played matches: <?php echo $this->team->getTotalPlayedMatches(); ?></li>
					</ul>
					
					
				</div>
			
			</div>
			
		</div>



	
		
	
		<div class="col-md-2">
	
			<div class="image">
				
				<img src="<?php echo SITE_URL . 'core/cache/Team-' . $this->team->getId() . '.png' ?>">
				
			</div>
	
		</div>
		
	
	</div>


	<div class="panel panel-default">
		
		
		<div class="panel-heading">
			Players
		</div>
		


		<div class="panel-body">
			
			
			<table class="table striped">
				
				
				<thead>
					
					<tr>
					
						<th>
							Name
						</th>
						
					
					</tr>
					
				</thead>
				
			
				<tbody>
					
			
					<?php foreach($this->team->getPlayers() as $player) {
						?>
						
						<tr>
						
							<td>
								<a href="<?php echo SITE_URL . 'player/' . $player->getId(); ?>"><?php echo $player->getName(); ?></a>
							</td>
							
						
						</tr>
						
						<?php
					}
					?>
			
				</tbody>
			
			</table>
			
		</div>

		
	</div>


</div>
