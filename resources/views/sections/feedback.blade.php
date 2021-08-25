<section class="discount-feedback">
    <div class="container">
        <div class="discount-feedback__title">کاربران از بازارچه چه می‌گویند؟</div>
        <div class="discount-feedback__text">تجربه‌های موفق کاربران در استفاده از بازارچه ابری آروان و استقرار ساده‌ی نرم‌افزارها بشنوید و تصمیم بگیرید.</div>

        <div class="carousel-wrapper">
            <div class="carousel">
                @include('sections.feedback.pasargad')
                @include('sections.feedback.tiwall')
                @include('sections.feedback.basalam')
                @include('sections.feedback.football')
                @include('sections.feedback.mrbilit')

                <div class="carousel__button carousel__button--next" id="carousel-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.934" height="20.868" viewBox="0 0 11.934 20.868">
                        <path id="Path_122902" data-name="Path 122902" d="M12,5l8.313,8.313L12,21.625" transform="translate(-9.879 -2.879)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </svg>
                </div>

                <div class="carousel__button carousel__button--prev" id="carousel-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.934" height="20.868" viewBox="0 0 11.934 20.868">
                        <path id="Path_122903" data-name="Path 122903" d="M20.313,5,12,13.313l8.313,8.313" transform="translate(-10.5 -2.879)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
