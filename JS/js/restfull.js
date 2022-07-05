var settings = {
  "url"     : "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items?color=red",
  "method"  : "GET",
  "timeout" : 0,
};

$.ajax(settings).done(function (response) {
  showResponse(response);
});

  function showResponse(result){
    console.log(result);
    let text = '{';

    $.each( result, function( index, value){
      $("#showTenis").text(value);
      $.each( value, function(idx, val){
        text += idx + "=" + val + ",";
      });
      text = text.substr(0, text.length - 1);
      text += "}{";
    });

    text = text.substr(0, text.length - 1);
    $("#showTenis").text(text);
  }