<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-links">
                    <ul>
                        <li>
                            <a href="{{route("contact")}}">Contact</a>
                        </li>
                        <li>
                            <a href="#">Imprint</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-links">
                    <ul>
                        <li>
                            <a href="#">Terms of Use</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Solutions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-links">
                    <h6>Subscribe fot Updates and News</h6>
                    <form action="{{ route('newsletterSubmit') }}" method="POST" id="newsletterFormFooter">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="newsletter_email" placeholder="Your email"
                                id="exampleInputEmail1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                    <div id="formLoader" style="display:none; text-align:center; margin-top:10px;">
                        <img src="{{ asset('asset/images/loader.gif') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-links tel-a">
                    <h6>Folow us on</h6>
                    <ul class="d-ul">
                        <li>
                            <a href="{{$linkedin->flag_value}}">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $instagram->flag_value }}">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $facebook->flag_value }}">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="mailto:info@wanhu.com" class="info-email">{{$company_email->flag_value}}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="main-bottom-links">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bottom-footer">
                    <div class="term-link">
                        <p>Copyright © 2025, All right reserved</p>
                    </div>
                    <div class="term-link">
                        <a href="#">Terms Of Services</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>