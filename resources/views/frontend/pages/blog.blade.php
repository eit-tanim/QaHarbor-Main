@extends('frontend.frontend_master')

@section('main')

     <!-- 2. Banner Section -->
     <section class="pt-5 bg-colors">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Text Section -->
                <div class="text-center col-lg-6 col-md-12 text-lg-start">
                    <p class="text-danger fw-bold">Our Blog</p>
                    <h1 class="text-light fw-bold">Great Tips & Suggestions About <br> SQA</h1>
                </div>
    
                <!-- Image Section -->
                <div class="mt-4 text-center col-lg-6 col-md-12 mt-lg-0">
                    <img class="blog-img img-fluid" src="{{asset('frontend/images/news.jpg')}}" alt="Blog News Image">
                </div>
            </div>
        </div>
    </section>
    

    <!-- 3. card section -->
    <section>
        <div class="container">
            <div>

                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="./read_more.html" class="card-link text-decoration-none text-danger">Read More
                                    »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-2.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-3.png')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-4.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <!-- single card -->
                    <div class="col ">
                        <div class="card h-100">
                            <img src="{{asset('frontend/images/card-5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">[Part 02] API Testing Basics: SOAP API</h5>
                                <p class="card-text">API Testing Basics: SOAP API & REST API The World Wide Web
                                    Consortium
                                    (W3C) and its collaborators created the messaging standard, SOAP, or Simple Object
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link text-decoration-none text-danger">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagination -->
                <div class="m-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection