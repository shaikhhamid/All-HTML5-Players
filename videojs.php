<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
		<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
		<script src="http://vjs.zencdn.net/c/video.js"></script>
    </head>
    <body>
		<?php
		$dir = './files/';
		$de = opendir($dir);
		if ($de) {
			$counter = 0;
			while (($file = readdir($de)) !== false) {
				$path = $dir . $file;
				$url = 'http://gagandeep.rtcamp.info/allplayers/files/' . $file;
				if ((!is_file($path)) || (!is_readable($path)) || (strtolower(pathinfo($path, PATHINFO_EXTENSION) != 'mp4')))
					continue;
				echo $url;
				?>
		<h2>Video-JS <?php echo $file; ?></h2>
		<video id="<?php echo 'id-' . ++$counter; ?>" class="video-js vjs-default-skin" controls
					   preload="auto" width="640" height="480" poster="my_video_poster.png"
					   data-setup="{}">
					<source src="<?php echo $url; ?>" type='video/mp4'>
				</video>
					<?php
			}
		}else {
			echo "Could not find directory";
		}
		?>

    </body>
</html>
