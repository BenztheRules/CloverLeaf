$(document).ready(function () {
    EmployeeScripts.Init();
});

var EmployeeScripts = new function () {
	this.Init = function(){
		$("#datepicker").datepicker();
	};
};