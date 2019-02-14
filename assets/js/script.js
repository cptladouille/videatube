$(function() 
{
	$('input[data-confirm]').click(function(ev) 
	{
		var href = $(this).attr('href');
		
		if (!$('#dataConfirmModal').length) 
		{
            	$('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h3 id="dataConfirmLabel">ATTENTION !</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Peut-être pas...</button><a class="btn btn-danger" id="dataConfirmOK">Sûr !</a></div></div></div></div>');
		}
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		
		return false;
	});
});
// handles the click event for link 1, sends the query
function getOutput() {
	getRequest(
	    './assets/js/killsession.php', // URL for the PHP file
	     drawOutput,  // handle successful request
	     drawError    // handle error
	);
	return false;
    }  
    // handles drawing an error message
    function drawError() {
	  var container = document.getElementById('output');
	  container.innerHTML = 'Bummer: there was an error!';
    }
    // handles the response, adds the html
    function drawOutput(responseText) {
	  var container = document.getElementById('output');
	  container.innerHTML = responseText;
    }
    // helper function for cross-browser request object
    function getRequest(url, success, error) {
	  var req = false;
	  try{
		// most browsers
		req = new XMLHttpRequest();
	  } catch (e){
		// IE
		try{
		    req = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
		    // try an older version
		    try{
			  req = new ActiveXObject("Microsoft.XMLHTTP");
		    } catch(e) {
			  return false;
		    }
		}
	  }
	  if (!req) return false;
	  if (typeof success != 'function') success = function () {};
	  if (typeof error!= 'function') error = function () {};
	  req.onreadystatechange = function(){
		if(req.readyState == 4) {
		    return req.status === 200 ? 
			  success(req.responseText) : error(req.status);
		}
	  }
	  req.open("GET", url, true);
	  req.send(null);
	  return req;
    }