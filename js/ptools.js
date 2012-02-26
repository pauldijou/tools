function hideAndShow(divToHide, divToShow, buttonToHide, buttonToShow) {
	$(divToHide).collapse('hide');
	$(divToShow).collapse('show');
	$(buttonToHide).toggleClass('hide');
	$(buttonToShow).toggleClass('hide');
}