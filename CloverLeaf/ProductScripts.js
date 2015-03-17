$(document).ready(function () {
    ProductScripts.Init();
});

var ProductScripts = new function () {
	this.Init = function(){
		$(".canFavorite").click(function(){
			var id = $(this).attr("id");
			var x = $(this);
			var user = $("#hiddenUserId").val();
			var request = $.ajax({
				url: "FavoriteItem.php",
				type: "POST",
				data: { 
					id : id,
					userId : user
				 },
				dataType: "html"
			});

			request.done(function( msg ) {
				x.addClass("customBorder");
			});

			request.fail(function( jqXHR, textStatus ) {
				alert("An error occured while trying to add this item to your favorites!");
			});
		});
	};
};