$(document).ready(function () {

	Webcam.attach('#example');

	$('#button').click(function () {
		take_snapshot();
	});

	qrcode.callback = showInfo;


}); 

function take_snapshot() {
	Webcam.snap(function (dataUrl) {
		qrCodeDecoder(dataUrl);
	});
}

// decode the img
function qrCodeDecoder(dataUrl) {
	qrcode.decode(dataUrl);
}

// show info from qr code
async function showInfo(data) {
	$("#qrContent p").text(data);
	
	if (data=='error decoding QR Code'){
		console.log('scaning failed');
		
	}
	else{
	scan(data);
	
	}}
function url(){
	const urls = window.location.search;     
	const urlParams = new URLSearchParams(urls);
	const mobile = urlParams.get('mobile');
	console.log(mobile);
	return mobile;
	
}
function fname(){
	const urls = window.location.search;     
	const urlParams = new URLSearchParams(urls);
	const fname = urlParams.get('fname');
	console.log(fname);
	
	return fname;
}

async function scan(data){
		console.log(data);
		mobileu=url();
		
		const scan = {
				   shopdata:data,
				   userdata:mobileu,
				   fnames:fname()
					
				
				};
				
				const response = await fetch('http://localhost/ctracker/models/scanpass.php', {
					      method: 'POST',
					      headers: {
					        'Content-Type': 'application/json',
					
					      },
					      body: JSON.stringify(scan),
						})
						.then(response => response.text())
	.then(scan => {
	  console.log('sucess:',scan);
	 
	})
	.catch((error) => {
		  console.error('Error:', error);
		});
	}

