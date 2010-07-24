//show me love to the Module Pattern
var globbadge = function(){

    var elem,location;
  
    function init(o) {
      var isMSIE = /*@cc_on!@*/false;     
          elem = document.getElementById(o.element);
          location = o.location;
          if(elem && location) {
             var endpoint = 'http://query.yahooapis.com/v1/public/yql?q=';
             var yql = "use 'http://thinkphp.ro/apps/geo/geoglob/geo.globimage.xml' as g;select * from g where place='"+location+"'";

             if(isMSIE === false) {
                 yql += ' and type="data"'; 
             }
                 yql += ' and location="'+o.showlist+'"';

                 var url = endpoint + encodeURIComponent(yql) + '&format=xml&callback=globbadge.seed';

                 loadScript(url,function(){});
          }
    };

    function seed(o) {
           //if we have results then go ahead
           if(o.results) {
                //get the data
                var r = o.results[0];
                //if we have an error then begin
                if(r.indexOf('<error') !== -1) {
                  //remove from string <error> and </error>
                  var clean = r.replace(/<\/?error[^>]*>/g,'');
                  elem.innerHTML = '<h2 class="error">'+clean+'</h2>';  
                } else {
                  elem.innerHTML = r;
                }
           }        
    };

    function loadScript(src,callback) {
             var script = document.createElement('script');
                 script.setAttribute('type','text/javascript'); 
                 //if IE
                 if(script.readyState) {
                        script.onreadystatechange = function() {
                                  if(script.readyState == 'loaded' || script.readyState == 'complete') {
                                               script.onreadystatechange = null;
                                               callback();   
                                  }   
                        };
                 //others
                 } else {
                        script.onload = function() {
                               callback();
                        };
                 }

                 script.setAttribute('src',src);
                 document.getElementsByTagName('head')[0].appendChild(script);
    };//end function
 
  return{init: init, seed: seed};
}();
