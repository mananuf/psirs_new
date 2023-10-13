<section class="topbar plr-100 bg-black">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="topbar-left-area">
                    <ul>
                        <li><a href="mailto:{{config('app.email')}}"><i class="fas fa-envelope"></i> <span class="__cf_email__">{{config('app.email')}}</span></a></li>
                        <li><a href="tel:{{config('app.contact_1')}}"><i class="fas fa-phone"></i> {{config('app.contact_1')}}</a></li>
                        <li><a href="tel:{{config('app.contact_2')}}"><i class="fas fa-phone"></i> {{config('app.contact_2')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="topbar-right-area">
                    <ul>
                        <li><a href="{{config('app.facebook_url')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{config('app.linkedin_url')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{config('app.twitter_url')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{config('app.instagram_url')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>