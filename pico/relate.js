/**
 * Initialize XMLHttpRequest
 */
function initAJAX() {
	var req = false;
	// Branch for native XMLHttpRequest Object
	if (window.XMLHttpRequest) {
		try {
			req = new XMLHttpRequest();
		} catch(e) {
			req = false;
		}
	// Branch for IE/Windows ActiveX version
	} else if (window.ActiveXObject) {
		try {
			req = new ActiveXOBject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
				req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e) {
				req = false;
			}
		}
	}
	// Send alert if false
	if (!req) {
		alert('Error initializing XMLHttpRequest.')
	} else {
		return req;
	}
}

/**
 * changeContent function
 *		accepts URL, Element ID and Loading HTML
 */
function changeContent(url, elid, lhtml)
{
	// Initialize Request
	xmlreq = initAJAX();
	// Process
	if (xmlreq) {
		xmlreq.onreadystatechange = function() {
			if (xmlreq.readyState == 4) { // Complete
				if (xmlreq.status == 200) { //If OK
					document.getElementById(elid).innerHTML = xmlreq.responseText;
				} else {
					alert("There was a problem retrieving XML Data:\n" + xmlreq.statusText);
				}
			} else {
				document.getElementById(elid).innerHTML = lhtml;
			}
		}
		xmlreq.open("GET", url, true);
		xmlreq.send("");
	} else {
		alert("There was a problem connecting to server.");
	}
}

function toggleRelated(pmid)
{
	// Assign Variables
	var reldiv = 'related_' + pmid;
	
	var origd = document.getElementById(reldiv).style.display;
	var nextd;
	// Process
	if (origd == 'block') {
		nextd = 'none';
	} else if (origd == 'none') {
		nextd = 'block';
		// Close abstract first if open

		// Manipulate innerHTML
		
			getRelated(pmid);

	}
	document.getElementById(reldiv).style.display = nextd;
}

function getRelated(pmid)
{
	// Assign variables
	var url = 'nlp_search_pico.php?id='+pmid+'&mod=related&page=1&from=cpico';
	var reldiv = 'related_' + pmid;
	var lhtml = '<p>Loading Related Articles...</p>';

	// Send to changeContent function
	changeContent(url, reldiv, lhtml);
}
