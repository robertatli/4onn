$.ajax({
  'url': 'http://apis.is/concerts',
  'type': 'GET',
  'dataType': 'json',
  'success': function(response) {

    console.log(response);
	for (var i = 0; i <= response.results.length; i++) {
    	document.getElementById('images').innerHTML += "<div class='img'><img src='"
    	+response.results[i].imageSource+"'><div class='imgName'><div class'imgtext'>"
    	+response.results[i].eventDateName+"</div></div></div>"
    }
  }
});