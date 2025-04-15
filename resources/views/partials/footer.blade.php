<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{route('index')}}" class="logo d-flex align-items-center">
                    <span class="sitename" style="color: #8f1313">G</span>
                    <span class="sitename" style="color: black">lob</span>
                    <span class="sitename" style="color: #8f1313">AI</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Rue de l'Innovation 12</p>
                    <p>Geneva, Switzerland</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+41 22 123 45 67</span></p>
                    <p><strong>Email:</strong> <span>contact@youraiagency.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('careers') }}">Careers</a></li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="{{ route('service') }}?service=custom-solutions">Custom AI Solutions</a></li>
                    <li><a href="{{ route('service') }}?service=chatbots">AI-Powered Chatbots</a></li>
                    <li><a href="{{ route('service') }}?service=security ">AI Security & Compliance</a></li>
                    <li><a href="{{ route('service') }}?service=analytics">AI-Powered Analytics</a></li>
                    <li><a href="{{ route('service') }}?service=fine-tuning">AI Model Fine-Tuning</a></li>
                    <li><a href="{{ route('service') }}?service=strategy">AI Consulting & Strategy</a></li>
                </ul>
            </div>


            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Stay Updated</h4>
                <p>Subscribe to receive the latest updates on AI innovations, ethical practices, and new service
                    offerings.</p>
                <form id="newsletter-form" method="POST" action="{{ route('newsletter.subscribe') }}" class="php-email-form">
                    @csrf
                    <div class="newsletter-form">
                        <input type="email" name="email" required placeholder="Your email">
                        <input type="submit" value="Subscribe">
                    </div>
                    <div class="loading" style="display: none;">Loading</div>
                </form>

            </div>


        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">, BootStrap</strong> <span>All Rights Reserved</span>
        </p>

    </div>

</footer>
