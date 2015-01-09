$(document).ready(function() {

	var options = {
		trainer: null,
		playerPkmn: null,
		challenger: null,
		challengerPkmn: null,
		scene: null,
		textbox: null,
		bgColor: null
	};

	$('.btn[data-action="create"]').click(function() {
		var length = 10;
		var startY = 35;
		var canvas = $('#sceneCanvas')[0];
		var challengerName = $('input[data-value="challengerName"]').val();
		var challengerPre = $('select[data-value="challengerPre"] option:selected').val();
		var displayText = $('textarea[data-value="displayText"]').val();
		var pPY = $('#playerPokemonVertical').val();
		var pPX = $('#playerPokemonHorizontal').val();
		var cPY = $('#challengerPokemonVertical').val();
		var cPX = $('#challengerPokemonHorizontal').val();

		var image = new Image();

		var ctx = canvas.getContext('2d');
		ctx.font = '12px Courier New';
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		if (options['bgColor'] && !$('input[data-value="transparent"]').prop('checked')) {
			ctx.fillStyle = options['bgColor'];
			ctx.fillRect(0, 0, canvas.width, canvas.height);
		}
		if (options['scene'] != null) {
				image.src = options['scene'];
				ctx.drawImage(image, 0, startY);
		}
		if (options['playerPkmn'] != null) {
			image.src = options['playerPkmn'];
			ctx.drawImage(image, 40 + parseInt(pPX), 143 - 85 + parseInt(pPY) + startY);
		}
		if (options['trainer'] != null) {
			image.src = options['trainer'];
			ctx.drawImage(image, 0, 143 - image.height + startY);
		}
		if (options['challenger'] != null) {
			image.src = options['challenger'];
			ctx.drawImage(image, 255 - image.width, 10 + startY);
		}
		if (options['challengerPkmn'] != null) {
			image.src = options['challengerPkmn'];
			ctx.drawImage(image, 134 + parseInt(cPX), 20 + parseInt(cPY) + startY);
		}
		if (options['textbox'] != null) {
			image.src = options['textbox'];
			ctx.drawImage(image, 0, 143 + startY);	
		}

		ctx.fillStyle = "#000"
		ctx.font = '8px "Pokemon"';
		var length = 14;

		if (challengerPre != '-1') {
			var text = challengerPre.split('\n');
			text.forEach(function(line) {
				ctx.fillText(text, length, 160 + startY);
				if (text[text.length - 1] != line) {
					length = 14;
					startY += 10;
				}
			});
			length += (text[text.length - 1].length * 8) + 8;

		}

		if (challengerName != '') {
			var text = challengerName.split('\n');
			text.forEach(function(line) {
				ctx.fillText(line, length, 160 + startY);
				if (text[text.length - 1] != line) {
					length = 14;
					startY += 10;
				}
			});
			length += (text[text.length - 1].length * 8) + 8;
		}

		if (displayText != '') {
			var text = displayText.split('\n');
			text.forEach(function(line) {
				ctx.fillText(line, length, 160 + startY);
				if (text[text.length - 1] != line) {
					length = 14;
					startY += 10;
				}
			});
			length += (text[text.length - 1].length * 8) + 8;
		}

		var dataURL = canvas.toDataURL();
		$('.canvasContainer a').prop('href', dataURL);
		$('#canvasHolder').prop('src', dataURL);
	});

	$('.btn[data-toggle="modal"]').click(function() {
		$(this).closest('.selectContainer').find('.modal').modal('show');
	});

	$('.btn[data-action="random"]').click(function() {
		$('.modal .imageContainer').each(function() {
			if (!$(this).closest('.selectContainer').find('input[data-action="lock"]').prop('checked')) {
				var children = $(this).children('img');
				var random = Math.floor((Math.random() * (children.length - 1)));
				$(children).removeClass('selected').eq(random).click();
				$(this).closest('.modal').find('.modal-footer .btn-primary').click();
			}
		});

		var $select = $('select[data-value="challengerPre"]');
		var children = $select.children('option');
		var random = Math.floor((Math.random() * (children.length - 1)) + 1);
		$(children).removeAttr('selected').eq(random).prop('selected', 'selected');

		if (!$('.selectionHolder.background').closest('.selectContainer').find('input[data-action="lock"]').prop('checked')) {
			var r = Math.floor(Math.random() * 255);
			var g = Math.floor(Math.random() * 255);
			var b = Math.floor(Math.random() * 255);
			options['bgColor'] = colorToHex('rgb(' + r + ', ' + g + ', ' + b +')');
			$('.selectionHolder.background').css('background-color', options['bgColor']);
		}
		$('.btn[data-action="create"]').click();
	});

	$('.colorpicker').colorpicker().on('changeColor', function(ev) {
		options['bgColor'] = ev.color.toHex();
		$(this).closest('.selectContainer').find('.selectionHolder').css('background-color', options['bgColor']);
	});

	$('.modal-footer .btn-primary').click(function() {
		var value = $(this).closest('.modal').find('.modal-body .imageContainer').attr('data-value');
		var image = $(this).closest('.modal').find('.modal-body img.selected');
		options[value] = image.attr('src');
		if (options[value]) {
			$(this).closest('.selectContainer').find('.selectionHolder img').attr('src', options[value]);	
		} else {
			$(this).closest('.selectContainer').find('.selectionHolder img').prop('src', './img/transparent.png');
		}
	});

	$('.modal-footer .btn[data-action="close"]').click(function() {
		var value = $(this).closest('.selectContainer').find('select').attr('data-value');//.find('.imageContainer').attr('data-value');
		$(this).closest('.modal').find('.modal-body').find('img[src="' + options[value] + '"]').click();
	});	

	$('.modal-footer .btn[data-action="reset"]').click(function() {
		$(this).closest('.modal').find('.modal-body').find('img').removeClass('selected');
		$(this).closest('.modal-footer').find('.btn-primary').click();
	});

	$('.pkmnSelect').change(function() {
		if ($(this).val() != '-1') {
			$(this).closest('.modal-body').find('.imageContainer').find('img[src="' + $(this).find('option:selected').val() + '"]').click();
		} else {
			$(this).closest('.modal-body').find('.imageContainer').find('img').removeClass('selected');
		}
	});

	$('.selectionHolder').click(function() {
		$(this).closest('.selectContainer').find('.btn[data-toggle="modal"]').click();
	});

	$('.slider').slider().on('slide', function(ev) {
		$('.btn[data-action="create"]').click();
	});

	function colorToHex(color) {
	    if (color.substr(0, 1) === '#') {
	        return color;
	    }
	    var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);
	    
	    var red = parseInt(digits[2]);
	    var green = parseInt(digits[3]);
	    var blue = parseInt(digits[4]);
	    
	    var rgb = blue | (green << 8) | (red << 16);
	    return digits[1] + '#' + rgb.toString(16);
	}

	function preLoad() {
		var loadProgress = $.Deferred();
		var $loadingBar = $('.loadingContainer .progress .bar');
		loadProgress.progress(function(pct) {
			$loadingBar.css('width', pct);
		});
		loadProgress.done(function() {
			$('.loadingContainer').hide();
			$('.modal-body img').on('click', function() {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
					$(this).closest('.modal-body').find('.pkmnSelect').val('-1');
				} else {
					$(this).closest('.modal-body').find('img').removeClass('selected');
					$(this).addClass('selected');
					$(this).closest('.modal-body').find('.pkmnSelect').val($(this).attr('src'));
				}
			});
		 	$('.contentContainer').show();
		})
		$loadingBar.css('width', '0%');
		var $options = $('select option');
		var total = $options.length;
		var i = 0;
		$.each($options, function(){
			var $select = $(this).closest('select');
			var $imageContainer = $(this).closest('.selectContainer').find('.modal-body .imageContainer');
			if ($(this).val() != -1 && $(this).val().indexOf('./') != -1) {
				var src = $(this).val();
				$.ajax({
					url: src
				}).done(function(data) {
					var loadingString = $select.attr('data-display');
					$('.loading-title').html('Loading ' + loadingString + '...');
					i++;
					var imageObj = new Image();
					imageObj.src = src;
					$imageContainer.append(imageObj);
					loadProgress.notify(Math.floor((i / total) * 100) + '%');
					if (i == total) {
						window.setTimeout(loadProgress.resolve, 1000);
					};
				});
			} else {
				i++;	
			}
		});
		return loadProgress.promise();
	}

	preLoad();
});