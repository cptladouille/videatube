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
	

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//SCRIPT SIDESEARCH
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	let i=2;

	
	$(document).ready(function(){
		var radius = 200;
		var fields = $('.itemDot');
		var container = $('.dotCircle');
		var width = container.width();
 radius = width/2.5;
 
		 var height = container.height();
		var angle = 0, step = (2*Math.PI) / fields.length;
		fields.each(function() {
			var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
			var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
			if(window.console) {
				console.log($(this).text(), x, y);
			}
			
			$(this).css({
				left: x + 'px',
				top: y + 'px'
			});
			angle += step;
		});
		
		
		$('.itemDot').click(function(){
			
			var dataTab= $(this).data("tab");
			$('.itemDot').removeClass('active');
			$(this).addClass('active');
			$('.CirItem').removeClass('active');
			$( '.CirItem'+ dataTab).addClass('active');
			i=dataTab;
			
			$('.dotCircle').css({
				"transform":"rotate("+(360-(i-1)*36)+"deg)",
				"transition":"2s"
			});
			$('.itemDot').css({
				"transform":"rotate("+((i-1)*36)+"deg)",
				"transition":"1s"
			});
			
			
		});
		
	});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//SLIDER
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
} 