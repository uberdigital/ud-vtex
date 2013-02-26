$(function() {
	$('.start-drop').mouseover(function() {
		var _this = $(this);
		_this.find('.drop-container').show();

		_this.mouseout(function() {
			_this.find('.drop-container').hide();
		});
	});
});