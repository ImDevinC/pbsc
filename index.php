<!DOCTYPE HTML>
<html>
	<head>
		<title>Pokemon Scene Creator</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/libraries/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="css/libraries/bootstrap-responsive.css" type="text/css">
		<link rel="stylesheet" href="css/libraries/slider.css" type="text/css">
		<link rel="stylesheet" href="css/libraries/colorpicker.css" type="text/css">
		<link rel="stylesheet" href="css/main.css" type="text/css">
		<?php
			require 'functions.php';
		?>
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<div class="container">
			<div class="row-fluid">
				<div class="header text-center">
					Pokemon Battle Scene Creator
				</div>
			</div>
			<div class="row-fluid loadingContainer">
				<div class="span12">
					<div class="module">
						<div class="row-fluid">
							<div class="offset4 span4">
								<div class="row-fluid">
									<div class="loading-title text-center">Loading...</div>
								</div>
								<div class="progress progress-striped active">
									<div class="bar" style="width: 0%;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contentContainer hide">
				<div class="row-fluid">
					<div class="span12">
						<div class="module">
							<div class="row-fluid">
								<div class="span4">
									<div class="row-fluid text-center module-header">Player</div>
									<div class="row-fluid text-center">
										<div class="span12">
											<div class="row-fluid">
												<div class="span6 selectContainer">
													<select class="hide" data-value="trainer" data-display="players">
														<?php
															echo loadFiles('./img/Player/dp/');
															echo loadFiles('./img/Player/bw/');
														?>
													</select>
													<div class="row-fluid selectionHolder">
														<img />
													</div>
													<div class="row-fluid">
														<label class="checkbox inline">
															<input type="checkbox" data-action="lock"><i class="icon-lock"></i>
														</label>
													</div>
													<button class="btn" data-toggle="modal">Trainer</button>
													<div class="modal hide fade">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h3>Choose a Trainer</h3>
														</div>
														<div class="modal-body">
															<div class="row-fluid imageContainer" data-value="trainer"></div>
														</div>
														<div class="modal-footer">
															<button class="btn" data-action="reset">Reset</button>
															<button class="btn" data-dismiss="modal" data-action="close">Close</button>
															<button class="btn btn-primary" data-dismiss="modal">Save</button>
														</div>
													</div>
												</div>
												<div class="span6 selectContainer">
													<div class="row-fluid selectionHolder">
														<img />
													</div>
													<div class="row-fluid">
															<label class="checkbox inline">
																<input type="checkbox" data-action="lock"><i class="icon-lock"></i>
															</label>
														</div>
													<button class="btn" data-toggle="modal">Pokemon</button>
													<div class="modal hide fade">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h3>Choose a Pokemon</h3>
														</div>
														<div class="modal-body">
															<div class="row-fluid text-center">
																<select class="pkmnSelect" data-value="playerPkmn"  data-display="Pokemon backs">
																	<option value="-1">None</option>
																	<?php
																		echo loadFiles('./img/Pokemon/Back/');
																	?>
																</select>
															</div>
															<div class="row-fluid imageContainer" data-value="playerPkmn"></div>
														</div>
														<div class="modal-footer">
															<button class="btn" data-action="reset">Reset</button>
															<button class="btn" data-dismiss="modal" data-action="close">Close</button>
															<button class="btn btn-primary" data-dismiss="modal">Save</button>
														</div>
													</div>
												</div>
												<div class="span12">
													<textarea maxlength="65" placeholder="Display text..." data-value="displayText"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="span4">
									<div class="row-fluid text-center module-header">Challenger</div>
									<div class="row-fluid text-center">
										<div class="span12">
											<div class="row-fluid text-center">
												<div class="row-fluid">
													<input type="text" placeholder="Challenger Name..." data-value="challengerName" />
												</div>
												<div class="row-fluid">
													<select data-value="challengerPre" data-display="players" data-display="trainer names">
														<option value="-1">No Prefix</option>
														<?php
															foreach($trainerTypes as $trainer) {
																echo '<option value="' . $trainer . '">' . $trainer . '</option>';
															}
														?>
													</select>
												</div>
												<div class="row-fluid">
													<div class="span6 selectContainer">
														<select class="hide" data-value="challenger"  data-display="trainer sprites">
															<?php
																echo loadFiles('./img/Trainers/dp/');
																echo loadFiles('./img/Trainers/bw/');
															?>
														</select>
														<div class="row-fluid selectionHolder">
															<img />
														</div>
														<div class="row-fluid">
															<label class="checkbox inline">
																<input type="checkbox" data-action="lock"><i class="icon-lock"></i>
															</label>
														</div>
														<button class="btn" data-toggle="modal">Trainer</button>
														<div class="modal hide fade">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h3>Choose a Trainer</h3>
															</div>
															<div class="modal-body">
																<div class="row-fluid imageContainer" data-value="challenger"></div>
															</div>
															<div class="modal-footer">
																<button class="btn" data-action="reset">Reset</button>
																<button class="btn" data-dismiss="modal" data-action="close">Close</button>
																<button class="btn btn-primary" data-dismiss="modal">Save</button>
															</div>
														</div>
													</div>
													<div class="span6 selectContainer">
														
														<div class="row-fluid selectionHolder">
															<img />
														</div>
														<div class="row-fluid">
															<label class="checkbox inline">
																<input type="checkbox" data-action="lock"><i class="icon-lock"></i>
															</label>
														</div>
														<button class="btn" data-toggle="modal">Pokemon</button>
														<div class="modal hide fade">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h3>Choose a Pokemon</h3>
															</div>
															<div class="modal-body">
																<div class="row-fluid text-center">
																	<select class="pkmnSelect" data-value="challengerPkmn" data-display="Pokemon fronts">
																		<option value="-1">None</option>
																		<?php
																			echo loadFiles('./img/Pokemon/Front/');
																		?>
																	</select>
																</div>
																<div class="row-fluid imageContainer" data-value="challengerPkmn"></div>
															</div>
															<div class="modal-footer">
																<button class="btn" data-action="reset">Reset</button>
																<button class="btn" data-dismiss="modal" data-action="close">Close</button>
																<button class="btn btn-primary" data-dismiss="modal">Save</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="span4">
									<div class="row-fluid text-center module-header">Scene</div>
									<div class="row-fluid text-center">
										<div class="span12">
											<div class="row-fluid text-center">
												<div class="row-fluid">
													<div class="span12 selectContainer">
														<select class="hide" data-value="scene" data-display="scenes">
															<?php
																echo loadFiles('./img/Scenes/');
															?>
														</select>
														<div class="row-fluid selectionHolder sceneHolder">
															<img />
														</div>
														<button class="btn" data-toggle="modal">Scene</button>&nbsp;
														<label class="checkbox inline">
																<input type="checkbox" data-action="lock"><i class="icon-lock"></i>
															</label>
														<div class="modal hide fade">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h3>Choose a Scene</h3>
															</div>
															<div class="modal-body">
																<div class="row-fluid imageContainer" data-value="scene"></div>
															</div>
															<div class="modal-footer">
																<button class="btn" data-action="reset">Reset</button>
																<button class="btn" data-dismiss="modal" data-action="close">Close</button>
																<button class="btn btn-primary" data-dismiss="modal">Save</button>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12 selectContainer">
														<select class="hide" data-value="textbox" data-display="textbox display">
															<?php
																echo loadFiles('./img/UI/Text Box/');
															?>
														</select>
														<div class="row-fluid selectionHolder textBox">
															<img />
														</div>
														<button class="btn" data-toggle="modal">Textbox</button>&nbsp;
														<label class="checkbox inline">
																<input type="checkbox" data-action="lock"><i class="icon-lock"></i>
															</label>
														<div class="modal hide fade">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h3>Choose a Scene</h3>
															</div>
															<div class="modal-body">
																<div class="row-fluid imageContainer" data-value="textbox"></div>
															</div>
															<div class="modal-footer">
																<button class="btn" data-action="reset">Reset</button>
																<button class="btn" data-dismiss="modal" data-action="close">Close</button>
																<button class="btn btn-primary" data-dismiss="modal">Save</button>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12 selectContainer">
														<div class="row-fluid selectionHolder background">
															<img />
														</div>
														<div class="row-fluid">
															<label class="checkbox inline">
																<input type="checkbox" data-value="transparent"> Transparent
															</label>
														</div>
														<a href="#" class="btn small colorpicker" id="cp" data-color-format="hex" data-color="rgb(255, 255, 255)" data-value="bgcolor">Background Color</a>&nbsp;
														<label class="checkbox inline">
															<input type="checkbox" data-action="lock"><i class="icon-lock"></i>
														</label>
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
				<div class="row-fluid">
					<div class="span4">
						<div class-"row-fluid">
							<div class="span12">
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
					<div class="span4">
						<div class="row-fluid">
							<div class="span12">
								<div class="module">
									<div class="row-fluid text-center">
										<button type="button" class="btn btn-primary" data-action="create">Create</button>
										<button type="button" class="btn" data-action="random">Randomize</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<div class="module">
									<div class="row-fluid text-center canvasContainer">
										<canvas id="sceneCanvas" width="255" height="255" style="display: none;"></canvas>
										<a download="pokemon.png">
											<img id="canvasHolder" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="row-fluid">
							<div class="span12">
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
			<div class="row-fluid">
				<div class="disclaimer text-center">
					Pokémon And All Respective Names are Trademark & © of Nintendo 1996-2013
				</div>
			</div>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
		<script src="js/custom/main.js"></script>
		<script src="js/libraries/bootstrap.js"></script>
		<script src="js/libraries/bootstrap-colorpicker.js"></script>
		<script src="js/libraries/bootstrap-slider.js"></script>
		<!-- Git testing -->
	</body>
</html>