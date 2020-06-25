<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sbondNumbers</title>
    <link rel="shortcut icon" href="https://ul.sbond.co/i/ico/hive.ico" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="volumeContainer">
      <input type="range" min="0" max="100" value="50" class="volumeSlider" id="volumeSlider" title="Volume Adjustment">
    </div>

    <div class="numberButtons">
      <?php
        for($i=0; $i < 10; $i++){
          echo "<button type='button' name='play" . $i . "Button' onclick='play_sound($i)'>$i</button>";
        }
      ?>
    </div>
		
		<script type="text/javascript">
		function play_sound(number){
			let volumeSlider = document.getElementById("volumeSlider");
			let audioElement = document.createElement('audio');
			audioElement.setAttribute('src', 'aud/' + number + '.mp3');
			audioElement.setAttribute('autoplay', 'autoplay');
			audioElement.volume = volumeSlider.value / 100;
			audioElement.load();
			audioElement.play();
		}
		</script>
  </body>
</html>
