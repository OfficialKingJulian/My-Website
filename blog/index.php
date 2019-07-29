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
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Blog | Marketing & Thoughts on Computers | Julian Orchard</title>
		<link href="/style.css" rel="stylesheet" type="text/css" />
	<head>

	<body>
		<?php include_once($nav); ?>
		<section id="hero-small">
			<div>
				<h1>
					The Blog <b>of Julian Orchard</b>
				</h1>
				<h3>
					Oh hi, thanks for stopping by! This is a blog where I gather occasional thoughts about my professional skillset. I <sup>[very occasaionally]</sup> maintain a <a href="https://julianorchard.com" class="highlight">personal blog</a> and also one <a href="https://kingjulian.xyz/blog" class="highlight">here</a>... but don't look at that one.
				</h3>
			</div>
		</section>
		<section id="content">
			<div class="content-left">
				<h3>Collections:</h3>
				<ul>
					<li>
						<a href="">
							Archive
						</a>
					</li>
					<li>
						<a href="">
							Tags
						</a>
					</li>
					<li>
						<a href="">
							This Year
						</a>
					</li>
				</ul>
			</div><!--
		 --><div class="content-right">
		 		<div class="rel">
			 		<h2 class="larchar">An Exploration In Discovery</h2>
				</div>
				<p>
					This is the page content, it can take the form of a variety of different things, but the best thing is when it's organic. I needs to be organic, original and nice. I think it's the best writing you'll ever have read.
				</p>
				<p>
					However, if it doesn't look good, <a href="" class="highlight">it won't look good</a>, and that'll be that. Sadly. This is the page content, it can take the form of a variety of different things, but the best thing is when it's organic. I needs to be organic, original and nice. I think it's the best writing you'll ever have read. This is the page content, it can take the form of a variety of different things, but the best thing is when it's organic. I needs to be organic, original and nice. I think it's the best writing you'll ever have read.
				</p>
				<div class="rel">
					<h2 class="larchar">Once Again</h2>
				</div>
				<p>
					However, if it doesn't look good, it won't look good, and that'll be that. Sadly. This is the page content, it can take the form of a variety of different things, but the best thing is when it's organic. <a href="" class="highlight">I needs to be organic</a>, original and nice. I think it's the best writing you'll ever have read.
				</p>
				<p>
					This is the page content, it can take the form of a variety of different things, but the best thing is when it's organic. I needs to be organic, original and nice. I think it's the best writing you'll ever have read.
				</p>
				<p>
					This is the page content, it can take the form of a variety of different things, but the best thing is when it's organic. I needs to be organic, original and nice. I think it's the best writing you'll ever have read.
				</p>
				<p>
					However, if it doesn't look good, it won't look good, and that'll be that. Sadly. This is the page content, it can take the form of a variety of <a href="" class="highlight">different things</a>, but the best thing is when it's organic. I needs to be organic, original and nice. I think it's the best writing you'll ever have read. This is the page content, it can take the form of a variety of different things, but the best thing is when it's organic. I needs to be organic, original and nice. I think it's the best writing you'll ever have read.
				</p>
			</div>
		</section>
		<?php include_once($foot); ?>
	</body>
</html>
