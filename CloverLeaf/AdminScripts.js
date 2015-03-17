$(document).ready(function () {
    AdminScripts.Init();
});

var AdminScripts = new function () {
	this.Init = function(){
		$("#makeEmpButton").click(function(){
			var id = $("#empDropdown").val();
			var request = $.ajax({
				url: "ConvertToEmployee.php",
				type: "POST",
				data: { 
					id : id
				 },
				dataType: "html"
			});

			request.done(function( msg ) {
				alert("Employee added!");
			});

			request.fail(function( jqXHR, textStatus ) {
				alert("An error occured while trying to add this employee!");
			});
		});
	};
};