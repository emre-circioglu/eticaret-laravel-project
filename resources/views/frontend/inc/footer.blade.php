<footer class="site-footer border-top ">
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-6 mb-5 mb-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Hızlı Menü</h3>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                            <li><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                            <li><a href="{{ route('urunler') }}">Ürünler</a></li>
                            <li><a href="{{ route('iletisim') }}">İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">İletişim Bilgileri</h3>
                    <ul class="list-unstyled">
                        <li class="address">İzmir / Alsancak</li>
                        <li class="phone"><a href="tel://23923929210">+90 123 456 78 90</a></li>
                        <li class="email">info@eticaret.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p> {{date('Y')}} Copyright &copy; Tüm Hakları Saklıdır | E-Ticaret Sitesi</p>
            </div>
        </div>
    </div>
</footer>
