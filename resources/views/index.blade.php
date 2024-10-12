<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
        <!-- Navbar content -->

        <div class="container mt-5">
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
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  <script src="{{asset('assets/js/colorselector.js')}}"></script>

</html>
