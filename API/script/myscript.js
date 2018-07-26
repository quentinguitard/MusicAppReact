
var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();
function myFunction()
{
	 delay(function(){
	    var input = document.getElementById("ville");
	    var autocomplete = new google.maps.places.Autocomplete(input);
    }, 300 );	
}