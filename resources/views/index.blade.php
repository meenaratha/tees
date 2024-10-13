@extends('layout.app')
@section('title', 'index page')

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
                    <img src="{{asset('/images/fullimage.jpg')}}" class="img-fluid" alt="...">
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

                        <button class="color-button white" data-color="#FFFFFF"><i class="bi bi-check"></i></button>
                        <button class="color-button gray" data-color="#808080"><i class="bi bi-check"></i></button>
                        <button class="color-button medium-gray" data-color="#A9A9A9"></button>
                        <button class="color-button dark-gray" data-color="#696969"></button>
                        <button class="color-button dark-heather" data-color="#4B3D3D"></button>
                        <button class="color-button forest-green" data-color="#228B22"></button>
                        <button class="color-button black" data-color="#000000"></button>
                        <button class="color-button light-pink" data-color="#FFB6C1"></button>
                        <button class="color-button red" data-color="#FF0000"></button>
                        <button class="color-button cardinal-red" data-color="#C8102E"></button>
                        <button class="color-button sky-blue" data-color="#87CEEB"></button>
                        <button class="color-button navy-blue" data-color="#000080"></button>
                        <button class="color-button olive-green" data-color="#808000"></button>
                        <button class="color-button sandy-beige" data-color="#F4A460"></button>
                        <button class="color-button coral" data-color="#FF7F50"></button>
                        <button class="color-button lavender" data-color="#E6E6FA"></button>
                        <button class="color-button salmon" data-color="#FA8072"></button>
                        <button class="color-button turquoise" data-color="#40E0D0"></button>
                        <button class="color-button maroon" data-color="#800000"></button>
                        <button class="color-button gold" data-color="#FFD700"></button>
                        <button class="color-button plum" data-color="#DDA0DD"></button>

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