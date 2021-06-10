<!--./main-->
<a name="anasayfa"><section class="main"></a>
<div class="main-info">
    <!-- particles.js container -->
    <h2>İsmail Can Karataş</h2>
    <h3><b>Frount-End Developer and Freelancer</b></h3>
    <div class="btn">
        <a href="#hakkinda">Hakkinda</a>
    </div>
    <div class="btn">
    </div>
</div><!--./main-info-->
<div id="particles-js"></div>
<!-- scripts -->
<script src="particles/particles.js"></script>
<script src="assets/js/app.js"></script>
</section>
<!--./main-->

<script>
window.onscroll = function() {menuScroll()};

    function menuScroll() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
            document.getElementById("header").style.background = "var(--secondary-color)";
        } else {
            document.getElementById("header").style.background = "none";

        }
    }
</script>

<!--./hakkinda-->
<a name="hakkinda"><br><br><br><br><section class="hakkinda"></a>
    <div class="hakkinda-container">
    <div class="hakkinda-text">
        <h3>Hakkında</h3>
    <p>
    Merhaba ben <b>İsmail Can Karataş</b>, web geliştiricisi ve lise öğrencisiyim.
    Pendik Türk Telekom Mesleki ve Teknik Anadolu Lisesinde öğrenim görmekteyim.
    <b>HTML, CSS, Javascript, C#, ASP.NET PHP</b> 'e kadar çok çeşitli becerilere sahibim.
    Ek olarak kendi proje ve start-up'larım ile uğraşmaktayım.
    </p>
    <div class="btn">
        <a href="#projeler">Projeler</a>
    </div>
    </div><!--./hakkinda-text-->
    </div><!--./hakkinda-container-->
</section>
<!--./hakkinda-->

<!--./yetenekler-->
<a name="yetenekler"><section class="yetenekler"></a>
        <div class="yetenekler-baslik">
        <h3>Yetenekler</h3>
        </div><!---yetenekler-baslik-->
        <div class="yetenekler-container">
        <div class="yetenek">
            <p>HTML</p>
        </div>        
        <div class="yetenek">
            <p>CSS</p>
        </div>
        <div class="yetenek">
            <p>JS</p>
        </div>
        <div class="yetenek">
            <p>PHP</p>
        </div>
        </div><!---yetenekler-container-->
        <div class="yetenekler-container">
        <div class="yetenek">
            <p>C#</p>
        </div>
        <div class="yetenek">
            <p>ASP.NET</p>
        </div>
        </div><!---yetenekler-container-->
</section>
<!--./yetenekler-->

<!--./yetenekler-->
<a name="projeler"><br><br><br><br><section></a>
    <div class="proje-container">
        <div class="proje-baslik">
            <h3>Projeler</h3>
        </div><!--/.proje-baslik-->
        <div class="projeler">

            <div class="proje">
                <div class="proje-resim">
                    <img src="assets/img/qankha.png" alt="">
                </div><!--/.proje-resim-->

                <div class="proje-detay">
                <div class="proje-adi">
                    <h4>Qankha</h4>
                </div><!--/.proje-adi-->
                <div class="proje-aciklama">
                <p>Her gün gündeme göre değişen konu başlıkları altında anonim sohbet odası.</p>
                </div><!--/.proje-aciklama-->
                <div class="proje-link">
                <a href="https://qankha.com/" target="_blank">Proje Link</a>
                </div><!--/.proje-link-->

                </div><!--/.proje-detay-->
            </div><!--/.proje-->

        </div><!--/.projeler-->
    </div><!--/.proje-container-->

</section>
<!--./yetenekler-->

<!--./iletisim-->
<a name="iletisim"><br><br><section class="iletisim"></a>
    <div class="iletisim-container">
        <div class="iletisim-baslik">
            <h3>Bana Ulaş!</h3>
            <p>
            Projen için ücret teklifi almak, aklına takılan bir soruyu sormak ya da <b>"Merhaba!"</b> demek için
            <b>buradan mail göndererek bana ulaş!</b>
            </p>
        </div><!--./iletisim-baslik-->
    <div class="iletisim-form">
        <form action="" method="post" id="form">

        <div id="sonuc"></div>

        <div class="form-eleman">
        <label for="isim"> Ad Soyad : <span id="isim-uyari"></span></label>
        <input type="text" id="isim" name="adsoyad" placeholder="Ad ve soyad yazınız.">    
        </div><!--./form-eleman-->

        <div class="form-eleman">
        <label for="eposta"> E-mail : <span id="eposta-uyari"></span></label>
        <input type="text" id="eposta" name="email" placeholder="E-mail adresinizi yazınız.">      
        </div><!--./form-eleman-->

        <div class="form-eleman">
        <label for="mesaj"> Mesaj :  <span id="mesaj-uyari"></span></label>
        <textarea name="mesaj" id="mesaj" cols="20" rows="4" placeholder="Mesajınızı yazınız."></textarea>      
        </div><!--./form-eleman-->

        <div class="form-eleman">
            <input type="button" value="Gönder" id="button">
        </div>
        </form>
    </div><!--./iletisim-form-->
    </div><!--./iletisim-container-->
<script src="assets/js/mail.js"></script>
</section>
<!--./iletisim-->

<!--./footer-->
<footer>
    <div class="footer-container">
        <h4>Bağlantılar</h4>

        <div class="sosyal-media">
        <a href="https://www.instagram.com/ismailcankaratas_" target="_blank_"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://www.twitter.com/ismailcankarats" target="_blank_"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="https://github.com/ismailcankaratas" target="_blank_"><i class="fab fa-github fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/ismail-can-karata%C5%9F-ba3b961a4/" target="_blank_"><i class="fab fa-linkedin fa-2x"></i></a>
        <p>
        Copyright © 2021 - 
        <script>
        var tarih = new Date(); 
        var yil = tarih.getFullYear();
        document.write(yil);
        </script> 
    <b>İsmail Can Karataş | Tüm Hakları Saklıdır.</b>
        </p>
        </div><!--./sosyal-media-->
    </div><!--./footer-container-->

</footer>
<!--./footer-->





