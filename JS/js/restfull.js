/*var requestOptions = {
  method: 'GET',
  redirect: 'follow'
};

fetch("https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items?color=red", requestOptions)
  .then(response => response.text())
  .then(result => showResponse(result))
  .catch(error => console.log('error', error));*/

var settings = {
  "url"     : "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items?color=red",
  "method"  : "GET",
  "timeout" : 0,
};

$.ajax(settings).done(function (response) {
  showResponse(response);
});

  function showResponse(result){
    //console.log(result);
    $("#showTenis").text( result );

    $.each( result, function( index, value){
      //console.log("index: " + value);
      $.each( value, function(idx, val){
        console.log(idx);
        console.log(val);
      });
    
    });
  }