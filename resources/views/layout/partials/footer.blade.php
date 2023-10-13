<section class="footer">
<div class="container">
<div class="footer-content ptb-100">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-logo-area">
<a href="{{route('home')}}"><img src="{{asset('images/psirs-logo.png')}}" class="logo-w-35" alt="image"></a>
<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit tempor incididunt labore dolore magna aliqua consec tetur adipiscing elite sed do labor.</p>
<div class="footer-social-area">
<ul>
<li><span>Follow Us: </span></li>
<li><a href="{{config('app.facebook_url')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="{{config('app.linkedin_url')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="{{config('app.twitter_url')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li><a href="{{config('app.instagram_url')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-contact">
<h3>Get In Touch</h3>
<div class="footer-contact-card">
<i class="fas fa-map-marker-alt"></i>
<h5>Location: </h5>
<p><a href="../../../goo.gl/maps/bc3qza49szqGNZt86" target="_blank">Plateau State Internal Revenue Service</a></p>
</div>
<div class="footer-contact-card">
<i class="fas fa-envelope"></i>
<h5>{{__('Email:')}} </h5>
<p><a href="mailto:{{config('app.email')}}"><span class="__cf_email__">{{config('app.email')}}</span></a></p>
</div>
<div class="footer-contact-card">
<i class="fas fa-phone-alt"></i>
<h5>{{__('Contact:')}} </h5>
<p><a href="tel:{{config('app.contact_1')}}">{{config('app.contact_1')}}</a></p>
<p><a href="tel:{{config('app.contact_2')}}">{{config('app.contact_2')}}</a></p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-quick-links">
<h3>Quick Links</h3>
<ul>
<li><i class="fas fa-angle-right"></i> <a href="services.html">Government Service</a> </li>
<li><i class="fas fa-angle-right"></i> <a href="tetrms.html">Terms & Conditions</a></li>
<li><i class="fas fa-angle-right"></i> <a href="privacy.html">Privacy Policies</a></li>
<li><i class="fas fa-angle-right"></i> <a href="privacy.html">Accessibilty</a></li>
<li><i class="fas fa-angle-right"></i> <a href="events.html">Recent Events</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-newsletter">
<h3>Subscribe</h3>
<p>Subscribe To Our Newsletter To Get Our Update News!</p>
<form class="newsletter-form" data-toggle="validator">
<input type="email" class="input-newsletter form-control" placeholder="Your Email" name="EMAIL" required autocomplete="off">
<button class="default-button news-btn">Subscribe Now</button>
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
</div>
</div>
<div class="copyright">
<p>© <strong>{{config('app.name')}}</strong> All Rights Reserved By <a target="_blank" href="../../../hibootstrap.com/index.html">Code Plateau</a></p>
</div>
</div>
</section>