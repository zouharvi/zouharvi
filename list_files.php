<html>

<head>
	<meta charset='utf-8'>
	<meta name="keywords" content="Vilém Zouhar, zouharvi, programmer, portfolio, student, mathematics, TypeScript, Python, Linguistics, Research">
	<meta name="author" content="Vilém Zouhar">
	<link href="https://fonts.googleapis.com/css2?family=Fira%20Mono&display=swap" rel="stylesheet">
	<link rel='stylesheet' type='text/css'  href='/css/style.css?v=3'>
	<link rel='icon'       type='image/png' href='/src/favicon.png'>
	<title>Vilda | Vilém Zouhar</title>
	<meta name="viewport" content="width=device-width">
	<style>
		* {
			font-family: "Fira Mono", monospace; 
		}
		li {
			font-size: 1.3em;
		}
		li span {
			font-size: 0.8em;
			display: inline-block;
			width: 200px;
		}
		a {
			text-decoration: underline;
		}

	</style>
</head>

<body style='padding-bottom: 100px; background-color: #F0F0F0;'>
	<h2>Listing of <span style='font-style: italic'><?php echo $WHATFILES; ?></span> files</h2>
	<h4>..for private presentation purposes, easy files handover, etc</h4>
	<ul>
	<?php
	// adapted from https://stackoverflow.com/questions/15555771/listing-files-in-folder-showing-index-php#15557850
	// you can add to the array
	$exclude_ext_array = array(".htm", ".php", ".js");
	$exclude_file_array = array("robots.txt");
	// list of extensions not required (above)
	$files = glob("./*"); 

	usort($files, function($a, $b) {
		return filemtime($b) - filemtime($a);
	});

	foreach($files as $file) { 
		//gets the file extension
		$file_ext = substr($file,strrpos($file,"."));
		// remove the ./ prefix
		$file = preg_replace('/.\//', '', $file);

		//check for file extension in list
		if (in_array($file_ext, $exclude_ext_array) || in_array($file, $exclude_file_array)) {
			continue;
		} else { 
			if ($file_ext == ".link") {
				$filelink = file_get_contents($file);
			} else {
				$filelink = $file;
			}

			if(($file != '.') && ($file!= '..')) { 
				echo
					'<li><a href="' . $filelink . '">'
					. '<span>[' . date ("d M Y H", filemtime($file)) . 'h]</span>'
					. $file
					. '</a></li>';
			} 
		}
	}
	?>
	</ul>
</body>
</html>
