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
		<title>Homepage | Julian</title>
	</head>

	<body>
		<?php include_once($nav); ?>

		<section id="hero">
			<div>
				<h1>
					Hi, My Name Is <b>Julian Orchard</b>
				</h1>
				<h3>
					A skilled Marketing Coordinator, Web Designer, and Free Software Enthusiast living in Southampton, UK.
				</h3>
				<br />
				<h3>
					<a href="/about" class="arrow">About</a>
				</h3>
			</div>
		</section>

    <section id="content">
      <div class="content-left">
        <!-- Add an image of Me -->
        <img src="" />
      </div><!--
    --><div class="content-right">
        <h2>
          Who Am I?
        </h2>
          <p>
            I'm Julian Orchard. I have over 3 years experience as the sole 
            marketer (job title; Marketing Coordinator) in a 200+ Employee SME 
            company manufacturing lifting equipment.
          </p>
          <p>
            Not only do I have excellent experience in marketing but I
            design websites and build the 
            <a href="https://github.com/OfficialKingJulian" class="highlight">
            occasional application</a>. This includes
            maintaining the large website for the company I work for, as well as 
            a couple of other <a href="/projects/" class="highlight">side projects</a>.
          </p>
      </div>
    </section>

    <?php include_once($foot); ?>
	</body>
</html>
