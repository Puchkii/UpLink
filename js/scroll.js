
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

  $(document).ready(function(){
      window.scroll(0,300);
  });
// window.onload = showHeight;

  function showHeight(){
      console.log(getCookie("scroll"));
      window.scrollTo(0, getCookie("scroll"));
      // window.scrollBy(0,getCookie("scroll"));

  }


  function getHeight(){
      var scrollHeight = document.documentElement.scrollTop;
      document.cookie = "scroll="+scrollHeight;
      window.scrollTo(0, 300);
  }
