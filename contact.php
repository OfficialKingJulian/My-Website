<?php
    // set initial variables to doc root
        $meta = $nav = $foot = $_SERVER['DOCUMENT_ROOT'];
    // add the relevant file
        $meta .= "/elms/meta.html";
        $nav .= "/elms/nav.html";
        $foot .= "/elms/foot.html";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once($meta); ?>
		<title>Contact Me | Julian</title>
	</head>

	<body>
		<?php include_once($nav); ?>

		<section id="hero">
			<div>
				<h1>
					There are many ways to <b>get in contact</b> with me...
				</h1>
				<h3>
					Here is an entire page dedicated to doing just that!
				</h3>
				<br />
			</div>
		</section>

		<?php include_once($foot); ?>
	</body>
</html>
