@extends('layout.app')
@section('title', 'Index')

@section('style')
<style>
    .thumbnail-images {
    overflow-y: auto;
    max-height: 400px;
    scrollbar-width: none; /* For Firefox, hides the scrollbar */
    scroll-snap-type: y mandatory; /* Enable snapping on vertical scroll */
    scroll-behavior: smooth; /* Enables smooth scrolling */
}
/* Child items that should snap */
.thumbnail-images img {
    scroll-snap-align: start; /* Snaps the child elements to the start */
}
.thumbnail-images::-webkit-scrollbar {
    width: 0; /* Hide scrollbar for WebKit browsers */
}

/* On hover, show the scrollbar */
.thumbnail-images:hover {
    scrollbar-width: 2px; /* Firefox: makes scrollbar visible on hover */
}

.thumbnail-images:hover::-webkit-scrollbar {
    width: 2px; /* Show scrollbar for WebKit browsers on hover */
}

.thumbnail-images::-webkit-scrollbar-thumb {
    background-color: #0283C0; /* Thumb (scroll handle) color */
    height: 20px; /* Thumb height set to 20px */
    width: 2px;
}

.thumbnail-images::-webkit-scrollbar-track {
    background-color: #faf7f7; /* Scrollbar track (background) color */
}

/* Change thumb color on hover */
.thumbnail-images::-webkit-scrollbar-thumb:hover {
    background-color: #0283C0; /* Darken thumb color on hover */
}


/* Container for the product display */
.product-display {
    position: relative;
    width: 100%;
    height: auto;
    display: block;
}

/* Style for the masked SVG */
.product-canvas-mask {
    /* position: absolute; */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1; /* Mask layer should appear below texture */
}

/* Dynamic rectangle (fill color) */
#dynamic-color-rect {
    transition: fill 0.3s ease; /* Smooth transition when color changes */
}

/* Texture layer on top of the mask */
.product-canvas-texture {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2; /* Ensure texture is on top of the mask */
    pointer-events: none; /* Disable interaction with the texture layer */
}

/* Additional styling for responsiveness */
@media (max-width: 768px) {
    .product-display {
        height: 100%;
    }

    .product-canvas-mask,
    .product-canvas-texture {
        width: 100%;
        height: 100%;
    }
}

</style>
@endsection

@section('content')

    <div class="row justify-content-start">
        <div class="col-4 d-flex">
            <div class="prod-img-cont d-flex">
                <div class="col-md-2 ">
                    <div class="thumbnail-images">
                    <img src="{{asset('/images/backimage.jpg')}}" alt="..." class="img-thumbnail active_img_thumbnail">
                    <img src="{{asset('/images/hipimage.jpg')}}" alt="..." class="img-thumbnail">
                    <img src="{{asset('/images/neckimage.jpg')}}" alt="..." class="img-thumbnail">
                    <img src="{{asset('/images/righthand.jpg')}}" alt="..." class="img-thumbnail">
                    <img src="{{asset('/images/sidehandimage.jpg')}}" alt="..." class="img-thumbnail">
                    <img src="{{asset('/images/sideimg.jpg')}}" alt="..." class="img-thumbnail">
                    <img src="{{asset('/images/sideimg.jpg')}}" alt="..." class="img-thumbnail">

                    <img src="{{asset('/images/sideimg.jpg')}}" alt="..." class="img-thumbnail">

                    <img src="{{asset('/images/sideimg.jpg')}}" alt="..." class="img-thumbnail">
                    </div>
               </div>
               <div class="col-md-10">
                <div class="product-display">
                    <!-- Masked SVG with dynamic color -->
                    <svg viewBox="0 0 1200 1130" class="product-canvas-mask" draggable="false" preserveAspectRatio="xMinYMin meet" style="width: 100%; height: 100%;">
                        <defs ng-if="color.useMask">
                            <mask id="mask-1">
                                <rect x="0" y="0" width="1200" height="1130" fill="#fff"></rect>
                                <image x="0" y="0" width="1200" height="1130"
                                    xlink:href="{{ asset('images/product_dummy.png') }}"
                                    ng-href="{{ asset('images/product_dummy.png') }}">
                                </image>
                            </mask>
                        </defs>
                        <!-- Dynamic fill color applied to this rect -->
                        <rect id="dynamic-color-rect" x="0" y="0" width="1200" height="1130" mask="url(#mask-1)" fill="yellow"></rect>
                    </svg>

                    <!-- SVG for texture -->
                    <svg viewBox="0 0 1200 1130" preserveAspectRatio="xMinYMin meet" class="product-canvas-texture" pointer-events="none" draggable="false" style="overflow: hidden; width: 100%; height: 100%;">
                        <image x="0" y="0" width="1200" height="1130" xlink:href="{{ asset('images/product_texture.png') }}"></image>
                    </svg>
                </div>
            </div>

            </div>

        </div>
        <div class="col-8">
                <div class="product-content">
                    <h2>RushOrderTees Classic Tee</h2>
                    <span class="product-style-text">Style: RT2000</span>
                    <span class="star-rate">
                        <p>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span>569 reviews</span>
                        </p>

                    </span>
                    {{-- color selector --}}
                    <div class="color-selector-cont">
                        <div class="selector-text-bold">Selected Color:</div>
                        <div class="selector-selected-color"></div>
                        <div class="selector-selected-color-name">SAFETY GREEN</div>
                    </div>
                    {{-- color buttons --}}
                    <div class="color-button-cont">
                        <button class="color-button white" data-color="#FFFFFF" data-color-name="White"><i class="bi bi-check"></i></button>
                        <button class="color-button gray" data-color="#808080" data-color-name="Gray"><i class="bi bi-check"></i></button>
                        <button class="color-button medium-gray" data-color="#A9A9A9" data-color-name="Medium Gray"></button>
                        <button class="color-button dark-gray" data-color="#696969" data-color-name="Dark Gray"></button>
                        <button class="color-button dark-heather" data-color="#4B3D3D" data-color-name="Dark Heather"></button>
                        <button class="color-button forest-green" data-color="#228B22" data-color-name="Forest Green"></button>
                        <button class="color-button black" data-color="#000000" data-color-name="Black"></button>
                        <button class="color-button light-pink" data-color="#FFB6C1" data-color-name="Light Pink"></button>
                        <button class="color-button red" data-color="#FF0000" data-color-name="Red"></button>
                        <button class="color-button cardinal-red" data-color="#C8102E" data-color-name="Cardinal Red"></button>
                        <button class="color-button sky-blue" data-color="#87CEEB" data-color-name="Sky Blue"></button>
                        <button class="color-button navy-blue" data-color="#000080" data-color-name="Navy Blue"></button>
                        <button class="color-button olive-green" data-color="#808000" data-color-name="Olive Green"></button>
                        <button class="color-button sandy-beige" data-color="#F4A460" data-color-name="Sandy Beige"></button>
                        <button class="color-button coral" data-color="#FF7F50" data-color-name="Coral"></button>
                        <button class="color-button lavender" data-color="#E6E6FA" data-color-name="Lavender"></button>
                        <button class="color-button salmon" data-color="#FA8072" data-color-name="Salmon"></button>
                        <button class="color-button turquoise" data-color="#40E0D0" data-color-name="Turquoise"></button>
                        <button class="color-button maroon" data-color="#800000" data-color-name="Maroon"></button>
                        <button class="color-button gold" data-color="#FFD700" data-color-name="Gold"></button>
                        <button class="color-button plum" data-color="#DDA0DD" data-color-name="Plum"></button>
                    </div>
                   {{-- decoration method --}}

                   <div class="decoration-cont">
                    <h5>Decoration Method:</h5>
                    <div class="decoration-method">
                        <p>Printing</p>
                        <span>No Minimum</span>
                    </div>
                   </div>
                    {{-- customise button --}}
                    <div class="customise-button-cont">
                        <button class="customise-button">start designing</button>
                    </div>
                </div>
        </div>
      </div>



@endsection
