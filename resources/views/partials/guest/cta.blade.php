<div class="d-xs-block d-md-none fixed-bottom">
    <div class="container">
        <div class="row cta justify-content-center">
            <div class="header">
                Info lebih lanjut hubungi kami
            </div>
            <ul class="py-2">
                <li>
                    <a href="https://wa.me/{{ str_replace(' ', '', str_replace('+', '', $contact->phone)) }}">
                        <i class="fa fa-whatsapp"></i>
                        <span>Whatsapp</span>
                    </a>
                </li>
                <li>
                    <a href="tel:{{ str_replace(' ', '', $contact->phone) }}">
                        <i class="fa fa-phone"></i>
                        <span>Phone</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>