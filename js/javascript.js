

  function getCookie(cname) {
    var cook = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(cook) == 0) {
        return c.substring(cook.length, c.length);
      }
    }
    return "";
  }

  function cookieClose(){
      document.cookie = "cookies=true";
      var cookies = getCookie("cookies");
      document.getElementById('Cookies').style.display = "none";
  }
