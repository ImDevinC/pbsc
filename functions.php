<?php

	$trainerTypes = array("A-list Actor", "Actor", "Actress", "Aqua Admin", "Aqua Leader",
		"Arcade Star", "Area Leader", "Arena Tycoon", "Aroma Lady", "Artist", "Athlete",
		"Backers", "Backpacker", "Baker", "Bandana Guy", "Battle Girl", "Beauty", "Beginning Trainer",
		"Belle &amp; Pa", "Big Star", "Biker", "Bird Keeper", "Blackbelt", "Boarder", "Bodybuilder",
		"Boss", "Boss Trainer", "Bug Catcher", "Bug Maniac", "Bug-Catching Man", "Burglar",
		"Cameraman", "Camper", "Castle Valet", "Casual Dude", "Casual Guy", "Celebrity", "Challenger",
		"Champion", "Channeler", "Chaser", "Chic Actress", "Chief", "Child Star", "Cipher",
		"Cipher Admin", "Cipher Cmdr", "Cipher Head", "Cipher Peon", "Clerk", "Close Siblings",
		"Clown", "Collector", "Colosseum Leader", "Colosseum Master", "Comedian", "Commander",
		"Cool Beauty", "Cool Couple", "Cooltrainer", "Cowgirl", "Crush Girl", "Crush Kin", "Cue Ball",
		"Curmudgeon", "Cute Maniac", "Cyclist", "Dancer", "Deep King", "Depot Agent", "Doctor", 
		"Dome Ace", "Double Team", "Dragon Tamer", "Elder", "Electrifying Guy", "Elite Four",
		"Engineer", "Expert", "Factory Head", "Fine Actor", "Firebreather", "Fisherman",
		"Fun Old Lady", "Fun Old Man", "Future Girl", "GAME FREAK", "Galactic Boss",
		"Galactic Grunt", "Gambler", "Gentleman", "Girl In Love", "Glasses Man", "Grand Master",
		"Grand Master", "Guitarist", "Guy", "Hall Matron", "Hardheaded Girl", "Hex Maniac",
		"High-Tech Maniac", "Hiker", "Hiking Club Member", "Hiking Girl", "Hooligans", "Hoopster",
		"Hunter", "Icy Guy", "Idol", "Infielder", "Interviewer", "Janitor", "Joe's Groupie",
		"Jogger", "Jr. Trainer (Male)", "Jr. Trainer (Female)", "Juggler", "Junior Representative",
		"Kaminko Aide", "Kimono Girl", "Kindler", "Lady", "Lady in Suit", "Lass", "Leader",
		"Leader-in-Training", "Linebacker", "Little Queen", "Lone Wolf", "Magma Admin",
		"Magma Leader", "Maid", "Master Representative", "Mature Couple", "May-December Couple",
		"Medium", "Miror B.Peon", "Motorcyclist", "Movie Star", "Mt.BtlMaster", "Muddy Boy",
		"Musician", "Mystery Troop", "Mysticalman", "Myth Trainer", "Navigator", "New Actress",
		"New Star", "Newscaster", "Ninja Boy", "Nurse", "Nursery Aide", "Officer", "Old Couple",
		"Ordinary Guy", "Ordinary Lady", "Painter", "Palace Maven", "Parasol Lady", "Passionate Man",
		"Passionate Rider", "Picnic Girl", "Picnicker", "Pikachu Fan", "Pike Queen", "Pilot",
		"Poison Tongue Boy", "Poke Kid", "PokeManiac", "Pokefan", "Pokemon Breeder", "Pokemon Ranger",
		"Pokemon Trainer", "Poketopia Master", "Pregymleader", "Preschooler", "Psychic", "Pyramid King",
		"Rancher", "Reporter", "Rich Boy", "Rider", "Rival", "Robo Groudon", "Rocker", "Rocket",
		"Rocket Executive", "Rocket Grunt", "Rogue", "Roller Boy", "Ruin Maniac", "Sage", "Sailor",
		"Salon Maiden", "Sashay Fan Club", "Schoolboy", "Sci-Fi Maniac", "Scientist",
		"Senior Representative", "Shady Guy", "Shocking Girl", "Sightseer", "Sim Trainer", "Sis and Bro",
		"Skier", "Smasher", "Snagem Head", "Socialite", "Spy", "Sr. and Jr.", "St.Performer",
		"Star Actor", "Steel Spirit", "Striker", "Stubborn Boy", "Subway Boss", "Suit Actor",
		"Super Nerd", "Supertrainer", "Swimmer", "Swimmer (Female)", "Swimming Champ",
		"Swimming Club Member", "Tamer", "Teacher", "Team Aqua Grunt", "Team Magma Grunt",
		"Team Plasma Grunt", "Team Rocket Admin", "Team Rocket Grunt", "Team Snagem", "The Riches",
		"Three Brothers", "Three Sisters", "Thug", "Tomboy", "Traveling Guy", "Traveling Lady",
		"Triathlete", "Tuber", "Twin Brothers", "Twin Sisters", "Twins", "Unique Star", "VR Trainer",
		"Veteran", "Veteran Actor", "Veteran Star", "Waiter", "Waitress", "Wanderer", "Winstrate",
		"Worker", "Worker", "World Champion", "World Finalist", "World Runner-up", "Young Couple",
		"Youthful Couple"); 

	function loadFiles($path) {
		$result = '';
		$path .= '*.*';
		foreach(glob($path) as $filename) {
			$display = explode('/', $filename);
			$display = $display[sizeof($display) - 1];
			if (strpos($display, '.png')) {
				$display = explode('.png', $display);
			} elseif (strpos($display, '.gif')) {
				$display = explode('.gif', $display);
			}
			$result .= "<option value=\"" . $filename . "\">" . $display[0] . "</option>";
		}
		return $result;
	}
?>