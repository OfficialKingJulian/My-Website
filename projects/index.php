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
		<title>Projects | Julian's Projects</title>
	</head>

	<body>
		<?php include_once($nav); ?>

		<div class="circle"></div>
		<section id="hero">
			<div>
				<h1>
					My <b>Projects List</b>, The Best Bits
				</h1>
				<h3>
					Here you can find a list of a few projects I've been lucky enough to work on over the past couple of years.
				</h3>
				<br />
				<h3>
					<a href="/contact" class="arrow">Contact</a>
				</h3>
        <br />
			</div>
		</section>

		<section id="tiles" class="wide">
			<div>
				<div class="image">
					<img src="/res/wes.jpg" />
				</div>
				<div class="text">
					<h3>
						Lift Company, In-House Rebranding
					</h3>
					<p>
						The largest project I've ever worked on has been rebranding a lift company that has been active for over four decades.
					</p>
				</div>
			</div><!--

		 --><div>
				<div class="image">
					<img src="/res/nfgc.jpg" />
				</div>
				<div class="text">
					<h3>
						New Forest Gymnastics Club
					</h3>
					<p>
						A friend of mine invited me to design a logo for his (now very popular) gymnasics club.
          </p>
          <p>
            <a href="#nfgc" class="arrow">Learn More</a>
          </p>

				</div>
			</div><!--

		 --><div>
				<div class="image">
					<img src="/res/this.jpg" />
				</div>
				<div class="text">
					<h3>
						This Very Website, Dear Reader
					</h3>
					<p>
						Hello! Yes, this website is also a project I'm proud of!
					</p>
				</div>
		 	</div>


			<div>
				<div class="image">
					<img src="/res/mtn.jpg" />
				</div>
				<div class="text">
					<h3>
						A Dorset Church
					</h3>
					<p>
						A mainly small print media project for an historic Church in Dorset.
					</p>
				</div>
			</div><!--

		 --><div>
				<div class="image">
					<img src="/res/invites.jpg" />
				</div>
				<div class="text">
					<h3>
						Invitaions Project
					</h3>
					<p>
						Another small print media project that I learned a lot from.
					</p>
				</div>
			</div><!--

		 --><div>
         <div class="image">
           <img src="/res/mtn.jpg" />
         </div>
         <div class="text">
           <h3>
             Julian Docs
           </h3>
           <p>
             A project here I write PDF's (in markdown format) and host various documents.
           </p>
         </div>
		 	</div>
		</section>


		<?php include_once($foot); ?>
	</body>
</html>
