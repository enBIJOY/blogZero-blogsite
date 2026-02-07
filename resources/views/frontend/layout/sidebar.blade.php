<div id="colorlib-page">
	<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo"><a href="{{url('/')}}">elen<span>.</span></a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="{{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">BLOG's</a></li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                <li class="{{ request()->routeIs('skills') ? 'active' : '' }}"><a href="{{ route('skills') }}">Skills And Activity</a></li>
                <li class="{{ request()->routeIs('privecyPolicy') ? 'active' : '' }}"><a href="{{ route('privecyPolicy') }}">Privacy & Policy</a></li>
            </ul>
        </nav>
        <div class="colorlib-footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <ul>
                <li><a href="https://facebook.com" target="_blank"><i class="icon-facebook"></i></a></li>
                <li><a href="https://x.com" target="_blank"><i class="icon-twitter"></i></a></li>
                <li><a href="https://instagram.com" target="_blank"><i class="icon-instagram"></i></a></li>
                <li><a href="https://linkedin.com/in" target="_blank"><i class="icon-linkedin"></i></a></li>
            </ul>
        </div>
    </aside> <!-- END COLORLIB-ASIDE -->
</div>