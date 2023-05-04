<div class="news-section-start">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <div class="subtitle wow animate__ animate__fadeInUp animated"
                         style="visibility: visible; animation-name: fadeInUp;">
                        <div class="icon">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p>Our Video</p>
                        <div class="icon">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                    </div>
                    <h4 class="title wow animate__ animate__fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">Latest Video</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($videos as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="news-single-items wow animate__ animate__fadeInUp animated"
                         style="visibility: visible; animation-name: fadeInUp;">
                        <div class="news-bg"
                             style="background-image: url(/frontend/assets/img/businessmen-shaking-hands.png);">
                            <span class="even">Event</span>
                            <div class="content">
                                <a href="news-single.html"><h4 class="title">Many important brands have given us their
                                        trust</h4></a>
                                <div class="author-meta">
                                    <p class="author-name">By:Smith Roy</p>
                                    <p>24th March,2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
