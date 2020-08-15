// Add buttons to page
for (let i = 0; i < 10; ++i) {
	document.getElementById("numberButtons").innerHTML += `<button type='button' name='enticingButton' id='${i}'>${i}</button>`;
}

// Handle button clicks
document.getElementsByName("enticingButton").forEach(function (btn) {
	btn.addEventListener("click", function(e) {
		play_sound(btn.id);
	});
});

// Play sound
function play_sound(number){
	let volumeSlider = document.getElementById("volumeSlider");
	let audioElement = document.createElement('audio');
	audioElement.setAttribute('src', 'aud/' + number + '.mp3');
	audioElement.setAttribute('autoplay', 'autoplay');
	audioElement.volume = volumeSlider.value / 100;
	audioElement.load();
	audioElement.play();
}
