(function($) {
	$(function() {
		function clean_url(str) {
			final = str.replace(/[^a-zA-Z0-9\/_|+ -]/g, "").toLowerCase();
			return final.replace(/[\/_|+ -]+/g, '-');
		}

		var target = $("input#edit-title");
		var summary_toggler = $(".text-summary-wrapper.text-summary-wrapper-processed").is(":visible");
		if(summary_toggler === false){
			$(".text-summary-wrapper.text-summary-wrapper-processed").show();
		}
		target.on("input", function() {
			$("input#edit-path-alias")
					.val("profile/" + clean_url(target.val()));
		})
	});
})(jQuery);