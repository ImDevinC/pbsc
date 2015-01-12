<!DOCTYPE HTML>
<html>
	<head>
		<title>Pokemon Scene Creator</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/libraries/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css/libraries/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="css/libraries/slider.css" type="text/css">
		<link rel="stylesheet" href="css/libraries/colorpicker.css" type="text/css">
		<link rel="stylesheet" href="css/main.css" type="text/css">
		<?php
			require 'functions.php';
		?>
	</head>
	<body>
		<?php //include_once("analyticstracking.php") ?>
		<div class="container">
			<div class="row">
				<div class="header text-center">
					Pokemon Battle Scene Creator
				</div>
			</div>
			<div class="row loadingContainer">
				<div class="col-xs-12">
					<div class="module">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="loading-title text-center">Loading...</div>
								<div class="progress">
									<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
										<span class="sr-only">0% Complete</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contentContainer" style="display:none">
				<div class="row">
					<div class="col-xs-12">
						<div class="module">
							<div class="row">
								<div class="col-md-4">
									<div class="row text-center module-header">Player</div>
									<div class="row text-center">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6 selectContainer">
													<select class="hide" data-value="trainer" data-display="players">
														<?php
															echo loadFiles('./img/Player/dp/');
															echo loadFiles('./img/Player/bw/');
														?>
													</select>
													<div class="row selectionHolder">
														<img />
													</div>
													<div class="row">
														<!--<span class="fa fa-unlock" aria-hidden="true"></span>-->
														<button class="btn btn-default" data-toggle="modal">Trainer</button>
													</div>
													<div class="modal fade" style="display:none">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h3>Choose a Trainer</h3>
																</div>
																<div class="modal-body">
																	<div class="row imageContainer" data-value="trainer"></div>
																</div>
																<div class="modal-footer">
																	<button class="btn btn-danger" data-dismiss="modal" data-action="close">Close</button>
																	<button class="btn btn-primary" data-dismiss="modal">Save</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 selectContainer">
													<div class="row selectionHolder">
														<img />
													</div>
													<div class="row">
														<!--<span class="fa fa-unlock" aria-hidden="true"></span>-->
														<button class="btn btn-default" data-toggle="modal">Pokemon</button>
													</div>
													<div class="modal fade" style="display:none">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h3>Choose a Pokemon</h3>
																</div>
																<div class="modal-body">
																	<div class="row text-center">
																		<select class="pkmnSelect" data-value="playerPkmn"  data-display="Pokemon backs">
																			<option value="-1">None</option>
																			<?php
																				echo loadFiles('./img/Pokemon/Back/');
																			?>
																		</select>
																	</div>
																	<div class="row imageContainer" data-value="playerPkmn"></div>
																</div>
																<div class="modal-footer">
																	<button class="btn btn-danger" data-dismiss="modal" data-action="close">Close</button>
																	<button class="btn btn-primary" data-dismiss="modal">Save</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<textarea maxlength="65" class="form-control" placeholder="Display text..." data-value="displayText"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row text-center module-header">Challenger</div>
									<div class="row text-center">
										<div class="col-md-12">
											<div class="row text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Challenger Name..." data-value="challengerName">
														</div>
														<div class="form-group">
															<select class="form-control" data-value="challengerPre" data-display="players" data-display="trainer names">
																<option value="-1">No Prefix</option>
																<?php
																	foreach($trainerTypes as $trainer) {
																		echo '<option value="' . $trainer . '">' . $trainer . '</option>';
																	}
																?>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 selectContainer">
														<select class="hide" data-value="challenger"  data-display="trainer sprites">
															<?php
																echo loadFiles('./img/Trainers/dp/');
																echo loadFiles('./img/Trainers/bw/');
															?>
														</select>
														<div class="row selectionHolder">
															<img />
														</div>
														<div class="row">
															<!--<span class="fa fa-unlock" aria-hidden="true"></span>-->
															<button class="btn btn-default" data-toggle="modal">Trainer</button>
														</div>
														<div class="modal fade" style="display:none">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h3>Choose a Trainer</h3>
																	</div>
																	<div class="modal-body">
																		<div class="row imageContainer" data-value="challenger"></div>
																	</div>
																	<div class="modal-footer">
																			<button class="btn btn-danger" data-dismiss="modal" data-action="close">Close</button>
																		<button class="btn btn-primary" data-dismiss="modal">Save</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 selectContainer">
														<div class="row selectionHolder">
															<img />
														</div>
														<div class="row">
															<!--<span class="fa fa-unlock" aria-hidden="true"></span>-->
															<button class="btn btn-default" data-toggle="modal">Pokemon</button>
														</div>
														<div class="modal fade" style="display:none">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h3>Choose a Pokemon</h3>
																	</div>
																	<div class="modal-body">
																		<div class="row text-center">
																			<select class="pkmnSelect" data-value="challengerPkmn" data-display="Pokemon fronts">
																				<option value="-1">None</option>
																				<?php
																					echo loadFiles('./img/Pokemon/Front/');
																				?>
																			</select>
																		</div>
																		<div class="row imageContainer" data-value="challengerPkmn"></div>
																	</div>
																	<div class="modal-footer">
																			<button class="btn btn-danger" data-dismiss="modal" data-action="close">Close</button>
																		<button class="btn btn-primary" data-dismiss="modal">Save</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row text-center module-header">Scene</div>
									<div class="row text-center">
										<div class="col-md-12">
											<div class="row text-center">
												<div class="row">
													<div class="col-md-12 selectContainer">
														<select class="hide" data-value="scene" data-display="scenes">
															<?php
																echo loadFiles('./img/Scenes/');
															?>
														</select>
														<div class="row selectionHolder sceneHolder">
															<img />
														</div>
														<!--<span class="fa fa-unlock" aria-hidden="true"></span>-->
														<button class="btn btn-default" data-toggle="modal">Scene</button>
														<div class="modal fade" style="display:none">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h3>Choose a Scene</h3>
																	</div>
																	<div class="modal-body">
																		<div class="row imageContainer" data-value="scene"></div>
																	</div>
																	<div class="modal-footer">
																		<button class="btn btn-danger" data-dismiss="modal" data-action="close">Close</button>
																		<button class="btn btn-primary" data-dismiss="modal">Save</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 selectContainer">
														<select class="hide" data-value="textbox" data-display="textbox display">
															<?php
																echo loadFiles('./img/UI/Text Box/');
															?>
														</select>
														<div class="row selectionHolder textBox">
															<img />
														</div>
														<!--<span class="fa fa-unlock" aria-hidden="true"></span>-->
														<button class="btn btn-default" data-toggle="modal">Textbox</button>
														<div class="modal fade" style="display:none">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h3>Choose a Scene</h3>
																	</div>
																	<div class="modal-body">
																		<div class="row imageContainer" data-value="textbox"></div>
																	</div>
																	<div class="modal-footer">
																		<button class="btn btn-danger" data-dismiss="modal" data-action="close">Close</button>
																		<button class="btn btn-primary" data-dismiss="modal">Save</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 selectContainer">
														<div class="row selectionHolder background">
															<img />
														</div>
														<!--<span class="fa fa-unlock" aria-hidden="true"></span>-->
														<button class="btn btn-default colorpicker" id="cp" data-color-format="hex" data-color="rgb(255,255,255)" data-value="bgcolor">Background Color</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class-"row">
								<div class="col-md-12">
									<div class="module text-center">
										<div class="module-header">
											Player Position
										</div>
										<div class="module-body">
											<div class="control-group">
												<div class="controls">
													<input id="playerPokemonVertical" class="slider" data-slider-min="-15" data-slider-max="15"
													data-slider-step="1" data-slider-value="1" value="1" data-slider-tooltip="hide"
													data-slider-orientation="vertical" data-slider-selection="after">
												</div>
											</div>
											<div class="control-group">
												<div class="controls">
													<input id="playerPokemonHorizontal" class="slider" data-slider-min="-20" data-slider-max="20"
													data-slider-step="1" data-slider-value="1" value="1" data-slider-tooltip="hide"
													data-slider-selection="before">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="module">
										<div class="row text-center">
											<button type="button" class="btn btn-primary" data-action="create">Create</button>
											<button type="button" class="btn btn-warning" data-action="random">Randomize</button>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="module">
										<div class="row text-center canvasContainer">
											<canvas id="sceneCanvas" width="255" height="255" style="display: none;"></canvas>
											<a download="pokemon.png">
												<img id="canvasHolder" />
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="module text-center">
										<div class="module-header">
											Challenger Position
										</div>
										<div class="module-body">
											<div class="control-group">
												<div class="controls">
													<input id="challengerPokemonVertical" class="slider" data-slider-min="-15" data-slider-max="15"
													data-slider-step="1" data-slider-value="1" value="1" data-slider-tooltip="hide"
													data-slider-orientation="vertical" data-slider-selection="after">
												</div>
											</div>
											<div class="control-group">
												<div class="controls">
													<input id="challengerPokemonHorizontal" class="slider" data-slider-min="-20" data-slider-max="20"
													data-slider-step="1" data-slider-value="1" value="1" data-slider-tooltip="hide"
													data-slider-selection="before">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="disclaimer text-center">
					Pokémon And All Respective Names are Trademark & © of Nintendo 1996-2015
				</div>
			</div>
		</div>
		<script src="js/libraries/jquery-1.11.2.min.js" ></script>
		<script src="js/libraries/bootstrap.min.js"></script>
		<script src="js/libraries/bootstrap-colorpicker.js"></script>
		<script src="js/libraries/bootstrap-slider.js"></script>
		<script src="js/custom/main.js"></script>
	</body>
</html>