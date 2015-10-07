$(document).on('ready', function(){
	$('#fullpage').fullpage({
		sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke'],
		anchors: ['1stPage', '2ndPage', '3rdPage', '4thpage'],
		menu: '#menu',
		scrollingSpeed: 2000
	});
});