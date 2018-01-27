	<section id="slider">
        <div class="slider-wrapper">
            <div class="slider-slide"><img src="/static/image/main-image.jpg"/></div>
            <div class="slider-slide"></div>
            <div class="slider-slide"></div>
        </div>
    </section>
	<section id="introduction">
		<div class="main-div col">
			<h2>EDUCATION</h2>
			<div class="resume-box"></div>
			<div class="resume-box"></div>
			<div class="resume-box"></div>
		</div>
		<div class="main-div col hire-background">
			hire me
		</div>
		</div>
		<div class="main-div col">
			<h2>EXPERIENCE</h2>
			<div class="resume-box"></div>
			<div class="resume-box"></div>
			<div class="resume-box"></div>
		</div>
	</section>
	<section id="skill">
		<div class="main-div col">
			<h2>SKILL</h2>
			<div class="skill-contents"></div>
		</div>
		<div class="skill-dial col hire-background">
			skill-dial-animation
		</div>
	</section>
	<section id="photofolio">
		<div class="main-div col portfolio-contents hire-background">
			<div id="portfolioSlider"></div>
		</div>
		<div class="main-div col">
			<h2>PORTFOLIO</h2>
		</div>
	</section>
    <section id="contact">
    	<div class="main-div col">
    		<form class="contact-form">
                <fieldset>
                    <h2>
                    	<legend>Contact form</legend>
                    </h2>
                    <div class="contact-name">
                        <label for="contact-name">
                        	<input type="name" id="contact-name" required placeholder="Name">
                    	</label>
                    </div>
                    <div class="contact-email">
                        <label for="contact-email">
	                        <input type="email" id="contact-email" required placeholder="E-mail">
	                    </label>
                    </div>
                    <div class="contact-message">
                        <label for="contact-message">
                        	<input type="text" id="contact-message" required placeholder="Message">
                        </label>
                    </div>
                    <button type="submit" class="btn-login">Send Message</button>
                </fieldset>
            </form>
    	</div>
    	<div id="map" class="main-div map-contents col">
    	</div>
    	<script>
      	function initMap() {
	        var uluru = {lat:37.46953, lng: 127.0374713};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 16,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
	      }
	    </script>
	    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEP53MHFzSmWA5bbKQYDfq_SR8EEWz5U&callback=initMap">
	    </script>
    </section>