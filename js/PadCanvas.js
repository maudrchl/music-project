
$buttons = Array.from(document.querySelectorAll('.touches'))

console.log($buttons)

$buttons.addEventListener('click',(e) => {
	var canvas = document.querySelector('canvas')
	var canvasCtx = canvas.getContext('2d')
	canvas.width = window.innerWidth
	canvas.height = window.innerHeight

	var settings = {
		MAX_PARTICLES: 500,
		DENSITY: 1,
		MAX_LIFE: 500,
		RADIUS: 1,
		SPEED: 1,
		GRAVITY: 0.1,
		BOUNCE_FACTOR: 0.7,
		TRACTION: 0.8,
		DISPLAY_INFO: false
	}

	var particles = []

	var random = function(min, max) {
		return Math.random() * (max - min) + min
	}

	var particle = function() {
		this.x = settings.RADIUS
		this.y = canvas.height / 3
		this.vx = random(-1, 12)
		this.vy = random(-1, -3)
		this.life = 0
		this.radius = settings.RADIUS
		this.speed = settings.SPEED
		this.hue = random(80, 150)
	}

	particle.prototype.reset = function() {
		var particle = this

		particle.x = settings.RADIUS
		particle.y = canvas.height / 3
		particle.vx = random(1, 3)
		particle.vy = random(-1, -3)
		particle.life = 0
	}

	particle.prototype.draw = function() {
		var particle = this

		// bounce from walls
		if(particle.x + particle.radius > canvas.width)
		{ 
			particle.vx *= -settings.BOUNCE_FACTOR
			particle.x = canvas.width - particle.radius 
		}
		else if(particle.x - particle.radius < 0)
		{ 
			particle.vx *= -settings.BOUNCE_FACTOR
			particle.x = particle.radius 
		}
		if(particle.y + particle.radius > canvas.height)
		{ 
			particle.vy *= -settings.BOUNCE_FACTOR 
			particle.y = canvas.height - particle.radius 
			particle.vx *= settings.TRACTION
		}
		else if(particle.y - particle.radius < 0)
		{ 
			particle.vy *= -settings.BOUNCE_FACTOR 
			particle.y = particle.radius 
			particle.vx *= settings.TRACTION
		}

		// gravity
		particle.vy += settings.GRAVITY

		// update pos
		particle.x += (particle.vx * particle.speed)
		particle.y += (particle.vy * particle.speed)

		// reset and respawn
		particle.life++
		if(particle.life >= settings.MAX_LIFE) {
			particle.reset()
		}

		// draw particle
		canvasCtx.beginPath()
		canvasCtx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2, false)
		canvasCtx.fillStyle = 'hsla(' + particle.y + ', 100%, 75%, 1)'
		canvasCtx.fill()
	}

	var drawCanvas = function() {
		canvasCtx.fillStyle = '#2e2e2e'
		canvasCtx.fillRect(0, 0, canvas.width, canvas.height)

		if(particles.length < settings.MAX_PARTICLES) {
			for(var i = 0; i < settings.DENSITY; i++) {
				particles.push(new particle())
			}
		}

		for(var i in particles) {
			particles[i].draw()
		}

		// display amount of particles
		if(settings.DISPLAY_INFO) {
			canvasCtx.font = '11px Arial'
			canvasCtx.fillStyle = '#6e6e6e'
			canvasCtx.textAlign = 'right'
			canvasCtx.fillText(particles.length + ' particles', 5, 15)
		}

		requestAnimationFrame(drawCanvas)
	}

	drawCanvas()
}
)
