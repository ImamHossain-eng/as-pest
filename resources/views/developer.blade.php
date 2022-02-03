<!DOCTYPE html>
<html>
<head>
	<title>Imam Hossain</title>
	<script src="https://cdn.jsdelivr.net/npm/p5@0.10.2/lib/p5.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
* {
	box-sizing: border-box;
}
body {
	margin: 0;
}
h1 {
	color: #fff;
	font-family: 'Muli', sans-serif;
	font-size: 40px;
	position: fixed;
	top: 50%;
	left: 50%;
	letter-spacing: 3px;
	transform: translate(-50%, -50%);
	text-align: center;
	margin: 0;
}
/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}
.social-panel-container.visible {
	transform: translateX(-10px);
}
.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #001F61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 169px;	
	width: 370px;
	max-width: calc(100% - 10px);
}
.social-panel button.close-btn {
	border: 0;
	color: #97A5CE;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}
.social-panel button.close-btn:focus {
	outline: none;
}
.social-panel p {
	background-color: #001F61;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}
.social-panel p i {
	margin: 0 5px;
}
.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}
.social-panel h4 {
	margin: 20px 0;
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}
.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}
.social-panel ul li {
	margin: 0 10px;
}
.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color: #001F61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}
.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}
.floating-btn {
	border-radius: 26.5px;
	background-color: #001F61;
	border: 1px solid #001F61;
	box-shadow: 0 16px 22px -17px #03153B;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}
.floating-btn:hover {
	background-color: #ffffff;
	color: #001F61;
}
.floating-btn:focus {
	outline: none;
}
.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}
.floating-text a {
	color: #FF7500;
	text-decoration: none;
}
@media screen and (max-width: 480px) {
	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}
	</style>
</head>
<body>

	<h1>AS PEST CONTROL LTD.</h1>

<!-- SOCIAL PANEL HTML -->
<div class="social-panel-container">
	<div class="social-panel">
		<p>Developed with <i class="fa fa-heart"></i> by
			<a target="_blank" href="https://www.facebook.com/profile.php?id=100009238441500">Imam</a></p>
		<button class="close-btn"><i class="fa fa-times"></i></button>
		<h4>Get in touch on</h4>
		<ul>
			<li>
				<a href="https://www.facebook.com/profile.php?id=100009238441500" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="https://github.com/ImamHossain-eng" target="_blank">
					<i class="fa fa-github"></i>
				</a>
			</li>
			<li>
				<a href="https://imamhossain-eng.github.io/resume/" target="_blank">
					<i class="fa fa-user-circle"></i>
				</a>
			</li>
		</ul>
	</div>
</div>
<button class="floating-btn">
	Get in Touch
</button>

<div class="floating-text">
	Md. Imam Hossain, Web Developer and Assistant Officer (IT), HUB
</div>
<script type="text/javascript">
	const particles = [];
function setup() {
	createCanvas(window.innerWidth, window.innerHeight);
	
	const particlesLength = Math.min(Math.floor(window.innerWidth / 10), 100);
	for(let i=0; i<particlesLength; i++) {
		particles.push(new Particle());
	}
}
function draw() {
	background(20);
	
	particles.forEach((particle, idx) => {
		particle.update();
		particle.draw();
		particle.checkParticles(particles.slice(idx));
	});
}
class Particle {
	constructor() {
		this.pos = createVector(random(width), random(height));
		this.vel = createVector(random(-2, 2), random(-2, 2));
		this.size = 5;
	}
	
	update() {
		this.pos.add(this.vel);
		this.edges();
	}
	
	draw() {
		noStroke();
		fill('rgba(255, 255, 255, 0.5)');
		circle(this.pos.x, this.pos.y, this.size * 2);
	}
	
	edges() {
		if(this.pos.x < 0 || this.pos.x > width) {
			this.vel.x *= -1;
		}
		
		if(this.pos.y < 0 || this.pos.y > height) {
			this.vel.y *= -1;
		}
		
// 		if(this.pos.x > width) {
// 			this.pos.x = 0;
// 		}
		
// 		if(this.pos.y > height) {
// 			this.pos.y = 0;
// 		}
	}
	
	checkParticles(particles) {
		particles.forEach(particle => {
			const d = dist(this.pos.x, this.pos.y, particle.pos.x, particle.pos.y);
			if(d < 120) {
				const alpha = map(d, 0, 120, 0, 0.25)
				stroke(`rgba(255, 255, 255, ${alpha})`);
				line(this.pos.x, this.pos.y, particle.pos.x, particle.pos.y)
			}
		});
	}
}
// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');
floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});
close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
</script>

</body>
</html>