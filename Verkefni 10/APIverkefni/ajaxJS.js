  $.ajax({
    'url': 'http://apis.is/currency/m5',
    'type': 'GET',
    'dataType': 'json',
    'success': function(response) {// búa til

      console.log(response);// setur response í console-ið
      
      document.getElementById('table').innerHTML = "<tr><th>ShortName</th><th>Value</th></tr>" // setur inní tableHeader
      for (var i = 0; i <= response.results.length; i++) {
        document.getElementById('table').innerHTML += "<tr><td><a href='#' title='Nafn á Gjaldmiðlinum'>" + response.results[i].shortName + "</a></td><td><a href='#' title='Virði Gjaldmiðlans í íslenskum krónum'>" + response.results[i].value + "</a></td></tr>"
      } // setur gögnin i table
      
    },
    'error': function(req, status, err) {// ef það er villa
      console.log('Villa', status, err);// birta villu
    }
  });

$( document ).tooltip();
