// Accordeon internet details

const accordeonButtons = document.querySelectorAll('.conditions__item__btn');


accordeonButtons.forEach.call(accordeonButtons, function (accordeonButton) {
	accordeonButton.addEventListener('click', function () {

		const currentText = accordeonButton.parentElement.querySelector('.conditions__item__content');

		accordeonButton.classList.toggle('accordeon__title--active');
		currentText.classList.toggle('accordeon__text--visible');

		const arrowImg = accordeonButton.querySelector('.conditions__item__btn-icon');

		if (currentText.classList.contains('accordeon__text--visible')) {
			currentText.style.display = 'block'
			arrowImg.src = "./../assets/icons/accordeon__arrow-top.svg"
		} else {
			currentText.style.display = "none"
			arrowImg.src = "./../assets/icons/accordeon__arrow-down.svg"
		}

	})
})





// modal balance


const editBtnName = document.querySelector('.personal__content__bottom');
const modalName = document.querySelector('.popup');
const modalNameClose = document.querySelector('.balance__btn-reset');
const modalNameSaveBtn = document.querySelector('.balance__btn-exit');

editBtnName.addEventListener('click', function () {
	modalName.classList.toggle('modal-show');
	document.body.classList.toggle('no-scroll');
})

modalNameClose.addEventListener('click', function () {
	modalName.classList.toggle('modal-show');
	document.body.classList.toggle('no-scroll');
})

modalNameSaveBtn.addEventListener('click', function () {
	modalName.classList.toggle('modal-show');
	document.body.classList.toggle('no-scroll');
})







// login and sign-up confirm

function moveToNextOrPreviousInput(event, currentInput) {
	if (/^[0-9]$/.test(currentInput.value)) {
		// Если введена цифра
		if (event.inputType === 'deleteContentBackward' && currentInput.previousElementSibling !== null) {
			// Если был удален символ и текущий ввод не первый
			currentInput.previousElementSibling.focus(); // Переходим к предыдущему полю ввода
		} else if (currentInput.nextElementSibling !== null) {
			// Если введена цифра и текущий ввод не последний
			currentInput.nextElementSibling.focus(); // Переходим к следующему полю ввода
		}
	} else if (event.inputType === 'deleteContentBackward' && currentInput.previousElementSibling !== null) {
		// Если символ не цифра и был удален символ, переходим к предыдущему полю ввода
		currentInput.previousElementSibling.focus(); // Переходим к предыдущему полю ввода
	}
}
























