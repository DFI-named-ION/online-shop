@section('title')
Звернення
@endsection
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">Головна</a></li>
                <li class="item-link"><span>Звернення</span></li>
            </ul>
        </div>
        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">Залишити повідомлення</h2>
                            <form action="#" method="get" name="frm-contact">

                                <label for="name">Ім'я<span>*</span></label>
                                <input type="text" value="" id="name" name="name" >

                                <label for="email">Пошта<span>*</span></label>
                                <input type="text" value="" id="email" name="email" >

                                <label for="phone">Номер телефону</label>
                                <input type="text" value="" id="phone" name="phone" >

                                <label for="comment">Коментар</label>
                                <textarea name="comment" id="comment"></textarea>

                                <input type="submit" name="ok" value="Надіслати" >
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
                            <div class="wrap-map">
                                <div class="mercado-google-maps"
                                        id="az-google-maps57341d9e51968"
                                        data-hue=""
                                        data-lightness="1"
                                        data-map-style="2"
                                        data-saturation="-100"
                                        data-modify-coloring="false"
                                        data-title_maps="Kute themes"
                                        data-phone="088-465 9965 02"
                                        data-email="kutethemes@gmail.com"
                                        data-address="Z115 TP. Thai Nguyen"
                                        data-longitude="-0.120850"
                                        data-latitude="51.508742"
                                        data-pin-icon=""
                                        data-zoom="16"
                                        data-map-type="ROADMAP"
                                        data-map-height="263">
                                </div>
                            </div>
                            <h2 class="box-title">Контактні дані</h2>
                            <div class="wrap-icon-box">

                                <div class="icon-box-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Пошта</b>
                                        <p>Support1@Mercado.com</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Телефон</b>
                                        <p>0123-465-789-111</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Адреса</b>
                                        <p>Sed ut perspiciatis unde omnis<br />Street Name, Los Angeles</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->

</main>