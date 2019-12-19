

var my_select = document.getElementById("pa_cantidades");
var my_input = document.getElementsByClassName("input-text qty text")[0];
my_input.readOnly=true;

if (my_select) {
my_select.addEventListener("change", function() {

	if (document.getElementsByClassName("input-text qty text").length <0) {
		alert("array vacio");
	}
	var my_input = document.getElementsByClassName("input-text qty text")[0];
	if(my_input==null){
		var my_input= document.getElementById("quantity_5cdd1eb741b69");
	}
	my_input.value = my_select.value;

});
}