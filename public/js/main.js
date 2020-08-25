document.addEventListener('DOMContentLoaded', function () {
	$('select').select2({
		width: '100%',
	});

	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 200) {
			$('.arrow-top').fadeIn();
		} else {
			$('.arrow-top').fadeOut();
		}
	});

	$('.arrow-top').on('click', function () {
		$('html, body').animate(
			{
				scrollTop: 0,
			},
			500
		);
	});

	$('input[spaces-and-points="disabled"').on('input', function (event) {
		let target = $(event.target);

		target.val(target.val().replace(/\s|\./g, ''));
	});

	var popupIcon = document.querySelectorAll('.popup-icon');

	popupIcon.forEach((element) => {
		element.addEventListener('mouseover', function (event) {
			event.preventDefault();

			let popup = element.parentElement.nextElementSibling;

			if (window.matchMedia('(min-width: 577px)').matches) {
				var labelRect = element.parentElement.getBoundingClientRect();
				var elementRect = element.getBoundingClientRect();
				var labelHeight = element.parentElement.offsetHeight;

				popup.style.left = elementRect.left - labelRect.left - 115 + 'px';
				popup.style.top = labelHeight + 'px';
			}

			popup.classList.toggle('active');
		});
	});

	$('.content-general')
		.find('input')
		.on('input', function (event) {
			function capitalize(s) {
				return s.toLowerCase().replace(/\b./g, function (a) {
					return a.toUpperCase();
				});
			}

			let value = $(event.target).val();
			$(event.target).val(capitalize(value));
		});

	$('.options').on('click', function (event) {
		let radioButtons = $(this).find('input[type="radio"]');

		radioButtons.each(function (i, element) {
			$(this).on('click', function (e) {
				let input = $(this).closest('.options').next().find(':input');

				if ($(this).hasClass('other-option')) {
					input.attr('disabled', false);
				} else {
					input.attr('disabled', true);
				}
			});
		});
	});

	$('.options').each(function (i, element) {
		let radioButtons = $(element).find('input[type="radio"]');

		radioButtons.each(function (i, el) {
			let input = $(el).closest('.options').next().find(':input');

			if ($(el).hasClass('other-option') && $(el).is(':checked')) {
				input.attr('disabled', false);
			} else {
				input.attr('disabled', true);
			}
		});
	});

	$('.close-inputs').on('change', function (event) {
		let countBlockedInputs = $(this).data('block');
		let nextInput = $(this).closest('label').next();

		let checkboxOther;

		if ($(this).is(':checked')) {
			for (var i = 0; i < countBlockedInputs; i++) {
				nextInput.find(':input').attr('disabled', false);

				if (nextInput.find(':input').hasClass('check-other')) {
					checkboxOther = nextInput.find(':input');
				}

				nextInput = nextInput.next();
			}

			if (checkboxOther) {
				var otherInput = checkboxOther.closest('label').next().find(':input');
				var prevSelect = checkboxOther.closest('label').prev().find(':input');

				if (checkboxOther.is(':checked')) {
					otherInput.attr('disabled', false);
					prevSelect.attr('disabled', true);
				} else {
					otherInput.attr('disabled', true);
					prevSelect.attr('disabled', false);
				}
			}
		} else {
			for (var i = 0; i < countBlockedInputs; i++) {
				nextInput.find(':input').attr('disabled', true);
				nextInput = nextInput.next();
			}
		}
	});

	$('.close-inputs-reverse').on('change', function (event) {
		let countBlockedInputs = $(this).data('block');
		let nextInput = $(this).closest('label').next();

		let checkboxOther;

		if ($(this).is(':checked')) {
			for (var i = 0; i < countBlockedInputs; i++) {
				nextInput.find(':input').attr('disabled', true);
				nextInput = nextInput.next();
			}
		} else {
			for (var i = 0; i < countBlockedInputs; i++) {
				nextInput.find(':input').attr('disabled', false);

				if (nextInput.find(':input').hasClass('check-other')) {
					checkboxOther = nextInput.find(':input');
				}

				nextInput = nextInput.next();
			}

			if (checkboxOther) {
				var otherInput = checkboxOther.closest('label').next().find(':input');
				var prevSelect = checkboxOther.closest('label').prev().find(':input');

				if (checkboxOther.is(':checked')) {
					otherInput.attr('disabled', false);
					prevSelect.attr('disabled', true);
				} else {
					otherInput.attr('disabled', true);
					prevSelect.attr('disabled', false);
				}
			}
		}
	});

	setTimeout(function () {
		$('.close-inputs-reverse').each(function (event) {
			let countBlockedInputs = $(this).data('block');
			let nextInput = $(this).closest('label').next();

			let checkboxOther;

			if ($(this).is(':checked')) {
				for (var i = 0; i < countBlockedInputs; i++) {
					nextInput.find(':input').attr('disabled', true);
					nextInput = nextInput.next();
				}
			} else {
				for (var i = 0; i < countBlockedInputs; i++) {
					nextInput.find(':input').attr('disabled', false);

					if (nextInput.find(':input').hasClass('check-other')) {
						checkboxOther = nextInput.find(':input');
					}

					nextInput = nextInput.next();
				}

				if (checkboxOther) {
					var otherInput = checkboxOther.closest('label').next().find(':input');
					var prevSelect = checkboxOther.closest('label').prev().find(':input');

					if (checkboxOther.is(':checked')) {
						otherInput.attr('disabled', false);
						prevSelect.attr('disabled', true);
					} else {
						otherInput.attr('disabled', true);
						prevSelect.attr('disabled', false);
					}
				}
			}
		});
	}, 0);

	setTimeout(function () {
		$('.close-inputs').each(function (i, element) {
			let countBlockedInputs = $(element).data('block');
			let nextInput = $(element).closest('label').next();

			if ($(element).is(':checked')) {
				for (var i = 0; i < countBlockedInputs; i++) {
					nextInput.find(':input').attr('disabled', false);
					nextInput = nextInput.next();
				}
			} else {
				for (var i = 0; i < countBlockedInputs; i++) {
					nextInput.find(':input').attr('disabled', true);
					nextInput = nextInput.next();
				}
			}
		});
	}, 0);

	$('.check-other').on('change', function (event) {
		var otherInput = $(this).closest('label').next().find(':input');
		var prevSelect = $(this).closest('label').prev().find(':input');

		if ($(this).is(':checked')) {
			otherInput.attr('disabled', false);
			prevSelect.attr('disabled', true);
		} else {
			otherInput.attr('disabled', true);
			prevSelect.attr('disabled', false);
		}
	});

	$('.check-other').each(function (i, element) {
		var otherInput = $(element).closest('label').next().find(':input');
		var prevSelect = $(element).closest('label').prev().find(':input');

		if ($(element).is(':checked')) {
			otherInput.attr('disabled', false);
			prevSelect.attr('disabled', true);
		} else {
			otherInput.attr('disabled', true);
			prevSelect.attr('disabled', false);
		}
	});

	$('.check-textarea').on('change', function (event) {
		var textarea = $(this).closest('.checkbox-block').next().find(':input');

		if ($(this).is(':checked')) {
			textarea.attr('disabled', false);
		} else {
			textarea.attr('disabled', true);
		}
	});

	$('.check-textarea').each(function () {
		var textarea = $(this).closest('.checkbox-block').next().find(':input');

		if ($(this).is(':checked')) {
			textarea.attr('disabled', false);
		}
	});

	var radios = $('.radio-open-wrap').find('input[type="radio"]');

	radios.on('change', function () {
		var input = $(this).closest('.radio-open-wrap').next().find(':input');

		if ($(this).hasClass('radio-open')) {
			input.attr('disabled', false);
		} else {
			input.attr('disabled', true);
		}
	});

	radios.each(function () {
		var input = $(this).closest('.radio-open-wrap').next().find(':input');

		if ($(this).hasClass('radio-open') && $(this).is(':checked')) {
			input.attr('disabled', false);
		} else {
			input.attr('disabled', true);
		}
	});

	var radioWraps = $('.page-radio-wrap').find('.input-radio-wrap');

	radioWraps.each(function (i, el) {
		$(this).on('click', function () {
			var formsContainer = $(this).closest('.page-radio-wrap').next();

			if ($(el).hasClass('input-radio-wrap-yes')) {
				formsContainer.show();
			} else {
				formsContainer.hide();
			}
		});
	});

	radioWraps.each(function (i, el) {
		if ($(el).hasClass('input-radio-wrap-yes') && $(el).find(':input').is(':checked')) {
			var formsContainer = $(this).closest('.page-radio-wrap').next();
			formsContainer.show();
		}
	});

	function addNewFormButton() {
		var currentForm = $(this).closest('.form-tab');
		currentForm.addClass('active');
		formTabEditName(currentForm);
	}

	function submitForm(event) {
		event.preventDefault();
		var requiredInputs = $(this).find('[data-required]').not(':hidden').not(':disabled');

		var countInputs = 0;

		requiredInputs.each(function (i, element) {
			if ($(element).val() === '') {
				$(element).prop('required', true);

				$(element).on('input', function () {
					$(element).prop('required', false);
				});

				$(element).on('blur', function () {
					if ($(element).val() === '') {
						$(element).prop('required', true);
					}
				});
			} else {
				countInputs++;
			}
		});

		if (countInputs === requiredInputs.length) {
			var formData = new FormData(this);
			var way = "myactions";
			formData.append("action", way);


			$.ajax({
				type: 'POST',
				url: ajaxurl,
				data: formData, 
	            processData: false,
	            contentType: false,
	            dataType: "json",
				success: function(response){
               		console.log(response);
           		}
			});

			var currentForm = $(this).closest('.form-tab');

			if (currentForm.is(':last-child')) {
				currentForm.removeClass('active');

				var selects = currentForm.find('select');
				selects.each(function (i, element) {
					$(this).select2('destroy');
				});

				var newForm = currentForm.clone();
				newForm.find(':input').not('[type="submit"]').val('');
				newForm.find('select').val(' ');
				newForm.find('.button-add').on('click', addNewFormButton);
				newForm.on('submit', event, submitForm);
				newForm.find('.form-tab-header-name, .form-tab-edit').on('click', formTabToggle);
				newForm.find('.form-tab-remove').on('click', formTabRemove);
				newForm.find('.button-cancel-formtab').on('click', event, buttonCancelFormtab);

				var editableName = newForm.find('.editable-name');
				editableName.text(editableName.data('base-name'));

				newForm.find('.check-other').on('change', function (event) {
					var otherInput = $(this).closest('label').next().find(':input');
					var prevSelect = $(this).closest('label').prev().find(':input');

					if ($(this).is(':checked')) {
						otherInput.attr('disabled', false);
						prevSelect.attr('disabled', true);
					} else {
						otherInput.attr('disabled', true);
						prevSelect.attr('disabled', false);
					}
				});
				newForm.find('.close-inputs').on('change', function (event) {
					let countBlockedInputs = $(this).data('block');
					let nextInput = $(this).closest('label').next();

					let checkboxOther;

					if ($(this).is(':checked')) {
						for (var i = 0; i < countBlockedInputs; i++) {
							nextInput.find(':input').attr('disabled', false);

							if (nextInput.find(':input').hasClass('check-other')) {
								checkboxOther = nextInput.find(':input');
							}

							nextInput = nextInput.next();
						}

						if (checkboxOther.length) {
							var otherInput = checkboxOther.closest('label').next().find(':input');
							var prevSelect = checkboxOther.closest('label').prev().find(':input');

							if (checkboxOther.is(':checked')) {
								otherInput.attr('disabled', false);
								prevSelect.attr('disabled', true);
							} else {
								otherInput.attr('disabled', true);
								prevSelect.attr('disabled', false);
							}
						}
					} else {
						for (var i = 0; i < countBlockedInputs; i++) {
							nextInput.find(':input').attr('disabled', true);
							nextInput = nextInput.next();
						}
					}
				});

				selects.select2({
					width: '100%',
				});
				newForm.find('select').select2({
					width: '100%',
				});

				currentForm.removeClass('form-tab-add');
				currentForm.find('.button-add').remove();

				currentForm.after(newForm);

				var formsContainer = newForm.closest('.forms-container');

				var countForms = 1;
				formsContainer.find('.form-tab').each(function (i, element) {
					$(element).find('.count-number').text(countForms);
					countForms++;
				});
			} else {
				currentForm.removeClass('active');
			}
		}
	}

	$('form').on('submit', event, submitForm);

	document.addEventListener('mouseover', function (event) {
		if (!event.target.classList.contains('popup-icon')) {
			let popup = document.querySelectorAll('.popup');
			popup.forEach((element) => {
				element.classList.remove('active');
			});
		}
	});

	function formTabEditName(element) {
		var formTab = $(element);
		var editableName = formTab.find('.editable-name');

		var startResult = editableName.data('base-name');
		var editableNameObj = {
			name: false,
			surname: false,
			number: false,
		};

		var displayEditedName = function (obj) {
			var result = '';
			var count = 0;

			for (var key in obj) {
				if (!obj[key]) {
					continue;
				}

				result += obj[key] + ' ';
				count++;
			}

			if (count === 0) {
				editableName.text(startResult);
				return;
			}

			editableName.text(result);
		};

		var inputEditName = formTab.find('.input-edit-name');
		var inputEditSurname = formTab.find('.input-edit-surname');
		var inputEditNumber = formTab.find('.input-edit-number');

		inputEditName.on('input', function () {
			editableNameObj.name = $(this).val();
			console.log(editableNameObj);
			displayEditedName(editableNameObj);
		});

		inputEditSurname.on('input', function () {
			editableNameObj.surname = $(this).val();
			displayEditedName(editableNameObj);
		});

		inputEditNumber.on('input', function () {
			editableNameObj.number = $(this).val();
			displayEditedName(editableNameObj);
		});
	}

	function formTabToggle() {
		var formTab = $(this).closest('.form-tab');

		if (formTab.hasClass('form-tab-add')) {
			return;
		}

		formTab.toggleClass('active');
	}

	$('.form-tab-header-name, .form-tab-edit').on('click', formTabToggle);

	var removableForm;

	function formTabRemove() {
		$('.modal').addClass('active');
		$('.modal-remove-item').show();

		removableForm = $(this).closest('.form-tab');
	}

	$('.form-tab-remove').on('click', formTabRemove);

	$('.button-add').on('click', addNewFormButton);

	function buttonCancelFormtab(event) {
		event.preventDefault();
		var formTab = $(this).closest('.form-tab');
		formTab.removeClass('active');
	}

	$('.button-cancel-formtab').on('click', event, buttonCancelFormtab);

	$('.modal-remove-item .modal-ok').on('click', function () {
		removableForm.remove();

		$('.modal').removeClass('active');

		setTimeout(function() {
			$('.modal-remove-item').hide();
			$('.modal-back').hide();
		}, 500);

		removableForm = '';

		var countForms = 1;
		$('.form-tab').each(function (i, element) {
			$(element).find('.count-number').text(countForms);
			countForms++;
		});
	});

	$('.modal').on('click', function (event) {
		if (!$(event.target).closest('.modal-container').length) {
			$('.modal').removeClass('active');

			setTimeout(function() {
				$('.modal-remove-item').hide();
				$('.modal-back').hide();
			}, 500);
		}
	});

	$('.modal-close, .modal-cancel').on('click', function () {
		$('.modal').removeClass('active');

		setTimeout(function() {
			$('.modal-remove-item').hide();
			$('.modal-back').hide();
		}, 500);

		removableForm = '';
	});

	$(document).on('keydown', function (event) {
		if (event.code === 'Escape') {
			$('.modal').removeClass('active');

			setTimeout(function() {
				$('.modal-remove-item').hide();
				$('.modal-back').hide();
			}, 500);

			$('body').removeClass('lock');

			removableForm = '';
		}
	});

	$('.radio-form-choose').each(function () {
		var formTab = $(this).closest('.form-tab');
		var radioWraps = $(this).find('.input-radio-wrap');

		radioWraps.on('click', function (event) {
			var radioValue = $(this).find(':input').val();

			var tabs = formTab.find('.radio-form');
			tabs.each(function (i, el) {
				$(el).hide();

				if ($(el).data('form') === radioValue) {
					$(el).show();
				}
			});
		});
	});

	$('.radio-form-choose').each(function () {
		var formTab = $(this).closest('.form-tab');
		var radioWraps = $(this).find('.input-radio-wrap');

		radioWraps.each(function () {
			if ($(this).find(':input').is(':checked')) {
				var radioValue = $(this).find(':input').val();

				var tabs = formTab.find('.radio-form');

				tabs.each(function (i, el) {
					$(el).hide();

					if ($(el).data('form') === radioValue) {
						$(el).show();
					}
				});
			}
		});
	});

	var backLink;

	$(':input').one('input', function () {
		$('.back-link, .button-cancel').on('click', function (event) {
			event.preventDefault();

			backLink = $(this).attr('href');

			$('.modal-back').show();
			$('.modal').addClass('active');
			$(window).on('beforeunload', function () {
				// return 'Are you sure you want to leave this page? You will lose any unsaved data.';

			});
		});
	});

	$('.modal-back .modal-ok').on('click', function() {
		window.location.href = backLink;
	})
});

window.addEventListener('load', function () {
	// Definitions
	var canvas = document.getElementById('paint-canvas');

	if (canvas) {
		var context = canvas.getContext('2d');

		var wrap = document.querySelector('.paint-wrap');

		function setCanvasSize(wrap) {
			var rect = wrap.getBoundingClientRect();
			canvas.width = rect.width - 60;

			if (window.matchMedia('(max-width: 576px)').matches) {
				canvas.height = 300;
			} else {
				canvas.height = 400;
			}
		}

		setCanvasSize(wrap);

		var boundings = canvas.getBoundingClientRect();

		window.addEventListener('resize', function () {
			setCanvasSize(wrap);

			boundings = canvas.getBoundingClientRect();
		});

		// Specifications
		var mouseX = 0;
		var mouseY = 0;
		context.strokeStyle = 'black'; // initial brush color
		context.lineWidth = 1; // initial brush width
		var isDrawing = false;

		// Mouse Down Event
		canvas.addEventListener('mousedown', function (event) {
			setMouseCoordinates(event);
			isDrawing = true;

			// Start Drawing
			context.beginPath();
			context.moveTo(mouseX, mouseY);
		});

		// Mouse Move Event
		canvas.addEventListener('mousemove', function (event) {
			setMouseCoordinates(event);

			if (isDrawing) {
				context.lineTo(mouseX, mouseY);
				context.stroke();
			}
		});

		// Mouse Up Event
		canvas.addEventListener('mouseup', function (event) {
			isDrawing = false;
		});

		canvas.ontouchstart = function (event) {
			event.preventDefault();

			setMouseCoordinates(event);
			isDrawing = true;

			// Start Drawing
			context.beginPath();
			context.moveTo(mouseX, mouseY);
		};

		canvas.ontouchmove = function (event) {
			event.preventDefault();

			setMouseCoordinates(event);

			if (isDrawing) {
				context.lineTo(mouseX, mouseY);
				context.stroke();
			}
		};

		canvas.ontouchend = function (event) {
			event.preventDefault();

			isDrawing = false;
		};

		// Handle Mouse Coordinates
		function setMouseCoordinates(event) {
			boundings = canvas.getBoundingClientRect();

			if (window.matchMedia('(any-hover: none)').matches) {
				mouseX = event.touches[0].clientX - boundings.left;
				mouseY = event.touches[0].clientY - boundings.top;
			} else {
				mouseX = event.clientX - boundings.left;
				mouseY = event.clientY - boundings.top;
			}
		}

		// Handle Clear Button
		var clearButton = document.getElementById('clear');

		clearButton.addEventListener('click', function () {
			context.clearRect(0, 0, canvas.width, canvas.height);
		});

		// Handle Save Button
		var saveButton = document.getElementById('save');

		saveButton.addEventListener('click', function () {
			var canvasDataURL = canvas.toDataURL();

			$.ajax({
				url: '',
				data: canvasDataURL,
				type: 'POST',
			});

			window.location = './tus-documentos.html';
		});
	}
});
