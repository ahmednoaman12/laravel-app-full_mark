@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="./style/lecture_live.css" />
    <link rel="stylesheet" href="./style/bootstrap.min.css" />
    <script src="./scripts/bootstrap.bundle.min.js"></script>
@endsection

@section(  'main-body')
<main style="margin-top:15vh">
    <nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-live-tab" data-toggle="tab" href="#nav-live" role="tab" aria-controls="nav-live" aria-selected="true">Live session</a>
        <a class="nav-item nav-link" id="nav-recorded-tab" data-toggle="tab" href="#nav-recorded" role="tab" aria-controls="nav-recorded" aria-selected="false">Recorded session</a>
        <a class="nav-item nav-link" id="nav-VideosAndSessions-tab" data-toggle="tab" href="#nav-VideosAndSessions" role="tab" aria-controls="nav-VideosAndSessions" aria-selected="false">Videos and session</a>
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-live" role="tabpanel" aria-labelledby="nav-live-tab">
        <div class="m-3">
            <div class="container d-flex justify-content-center " id="videothumbnail">
                <div class="row col-12 embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item d-flex "  
                    
                    src="https://www.youtube.com/embed/tgbNymZ7vqY" 
                    align="center" id="videothumbnail"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-recorded" role="tabpanel" aria-labelledby="nav-recorded-tab">
        <div class="m-3">
           
                <div class="col-12 accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne"
                            >
                            First session 
                            </button>
                        </h2>
                        <div
                            id="flush-collapseOne"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                                />
                                <label class="form-check-label" for="flexCheckDefault">
                                html
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo"
                            aria-expanded="false"
                            aria-controls="flush-collapseTwo"
                            >
                            First session 
                            </button>
                        </h2>
                        <div
                            id="flush-collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                                />
                                <label class="form-check-label" for="flexCheckDefault">
                                html
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree"
                            >
                            First session 
                            </button>
                        </h2>
                        <div
                            id="flush-collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                                />
                                <label class="form-check-label" for="flexCheckDefault">
                                html
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour"
                            aria-expanded="false"
                            aria-controls="flush-collapseFour"
                            >
                            First session 
                            </button>
                        </h2>
                        <div
                            id="flush-collapseFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                                />
                                <label class="form-check-label" for="flexCheckDefault">
                                html
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive"
                            aria-expanded="false"
                            aria-controls="flush-collapseFive"
                            >
                            First session 
                            </button>
                        </h2>
                        <div
                            id="flush-collapseFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                                />
                                <label class="form-check-label" for="flexCheckDefault">
                                html
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
            
        </div>
    </div>

    <div class="tab-pane fade" id="nav-VideosAndSessions" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="container-fluid m-3">
        <div class="row">
            <aside class="col-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne"
                        >
                        First session 
                        </button>
                        </h2>
                        <div
                        id="flush-collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample"
                        >
                        <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                            />
                            <label class="form-check-label" for="flexCheckDefault">
                                html
                            </label>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo"
                            aria-expanded="false"
                            aria-controls="flush-collapseTwo"
                        >
                        First session 
                        </button>
                        </h2>
                        <div
                        id="flush-collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample"
                        >
                        <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                            />
                            <label class="form-check-label" for="flexCheckDefault">
                                html
                            </label>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree"
                        >
                        First session 
                        </button>
                        </h2>
                        <div
                        id="flush-collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample"
                        >
                        <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                            />
                            <label class="form-check-label" for="flexCheckDefault">
                                html
                            </label>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour"
                            aria-expanded="false"
                            aria-controls="flush-collapseFour"
                        >
                        First session 
                        </button>
                        </h2>
                        <div
                        id="flush-collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample"
                        >
                        <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                            />
                            <label class="form-check-label" for="flexCheckDefault">
                                html
                            </label>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive"
                            aria-expanded="false"
                            aria-controls="flush-collapseFive"
                        >
                        First session 
                        </button>
                        </h2>
                        <div
                        id="flush-collapseFive"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFive"
                        data-bs-parent="#accordionFlushExample"
                        >
                        <div class="accordion-body" id="accordion-body" >
                            <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                            />
                            <label class="form-check-label" for="flexCheckDefault">
                                html
                            </label>
                            </div>
                        </div>
                        </div>
                </div>
            </aside>

            <div class="col-lg-8 col-xl-8 " id="videothumbnail2">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item d-flex" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
  </main>
@endsection

@section('special-end-page')
    <script src="./scripts/home.js"></script>
    <script src="./scripts/multipagesslider.js"></script>
@endsection