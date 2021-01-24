window.addEventListener('load', () => {
	document.getElementById('nav-button-open').addEventListener('click', () => {
		document.getElementById('navbar').style.display = 'inline-block';
		document.getElementById('nav-button-open').style.display = 'none';
		document.getElementById('nav-button-close').style.display = 'inline-block';
	});

	document.getElementById('nav-button-close').addEventListener('click', () => {
		document.getElementById('navbar').style.display = 'none';
		document.getElementById('nav-button-open').style.display = 'inline-block';
		document.getElementById('nav-button-close').style.display = 'none';
	});
	
	document.getElementById('whatsappbutton').addEventListener('click', () => {
		document.getElementById('whatsapp-orderform').style.left = '17%';
	});
});
