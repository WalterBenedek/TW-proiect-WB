function savePhoneNumber() {
  $.post("iindex.php",
    {
      name: $("#PhoneNum").val()
    },

    function(data,status){
      document.getElementById("saveWarningText").innerHTML = data;
      $( "#saveWarningText" ).fadeIn(100);
      setTimeout(function(){ $( "#saveWarningText" ).fadeOut(100); }, 3000);
    });
}

function openUserTimes(username) {
  $.post(
    "returndata.php",
    { name: username },
    function(response) {
      var name = response.name;

      console.log('Retreived data: ', myvariable, times);
    }, 'json'
  );
}
