<footer class="section-footer bg-dark white">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-sm-3 col-md-3 white">
                    <h5 class="title">Linki społecznościowe</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#">{{config('settings.social_facebook')}}</a></li>
                        <li> <a href="#">{{config('settings.social_twitter')}}</a></li>
                        <li> <a href="#">{{config('settings.social_instagram')}}</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-3 white">
                    <h5 class="title">O nas</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#"> Nasza historia </a></li>
                        <li> <a href="#"> Dostawa i płatność </a></li>
                        <li> <a href="#"> Partnerzy </a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3">
                    <article class="white">
                        <h5 class="title">Kontakt</h5>
                        <p>
                            <strong>Telefon: </strong> +123456789
                            <br>
                            <strong>Email:</strong> przykład
                        </p>
                    </article>
                </aside>
            </div>
            <!-- row.// -->
            <div class="row">
                <div>
                    <p style="font-variant: small-caps; margin: 5px">{{config('settings.footer_copyright_text')}}</p>
                </div>
            </div>
            <br>
        </section>
    </div>
    <!-- //container -->
</footer>
