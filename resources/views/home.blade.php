@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images/salon-b2.jpg') }}"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/salon-b2.jpg') }}"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/salon-b2.jpg') }}"
                         alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col product-card">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="https://i.imgur.com/xdbHo4E.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Women,bag</span>
                    <h4><a href="">Women leather bag</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>$96.00</small>$230.99</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col product-card">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="https://i.imgur.com/xdbHo4E.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Women,bag</span>
                    <h4><a href="">Women leather bag</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>$96.00</small>$230.99</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col product-card">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="https://i.imgur.com/xdbHo4E.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Women,bag</span>
                    <h4><a href="">Women leather bag</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>$96.00</small>$230.99</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col product-card">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="https://i.imgur.com/xdbHo4E.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Women,bag</span>
                    <h4><a href="">Women leather bag</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>$96.00</small>$230.99</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
