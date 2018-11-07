$( document ).ready(function() {
	
// Refresh interval of 30 seconds
var interval = 30000;

// Trigger function
getResults();

function getResults(){
  $.ajax ({
    url: "results.php",
    cache: false,
    dataType: "html",
    success: function(data) {
      $("#displayResults").html(data);
      
      // Trigger function again per each interval
      setTimeout(function() {
        getResults();
      }, interval);
    }
  });
}

});