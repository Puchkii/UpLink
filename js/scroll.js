
  function getCookie(cname) {//zit all in een andere script moet ik nog aanpassen
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

  window.onload = setTimeout(showHeight, 50);

  function resetCookie(location){
      document.cookie = "scroll="+ 0;
      if(location){
          window.location.assign(location)
      }
  }

  function showHeight(){
      window.scrollTo(0, getCookie("scroll"));
      console.log("test");
  }

  function getHeight(){//set sroll height cookie
      var scrollHeight = document.documentElement.scrollTop;
      document.cookie = "scroll="+scrollHeight;
  }
