@extends('layouts.default')
@section('content')
<div class="page-titles">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
        <li class="breadcrumb-item active" aria-current="page">Alert</li>
        </ol>
    </nav>
</div>
<div class="container-fluid">
    <div class="row ">
        <div class="col-xl-12">

        </div>
    </div>

    <!--element-area-->
    <div class="element-area">
        <div class="demo-view">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                <!-- row -->
                <div class="row">
                    <!-- Column starts -->
                    <div class=" col-xl-12">
                        <div class="card dz-card" id="basic-alerts">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Basic Alerts</h4>
                                    <p class="subtitle mb-0">Bootstrap default style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab" aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <!--tab-content-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                            <strong>Welcome!</strong> Message has been sent.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                            <strong>Done!</strong> Your profile photo updated.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-success alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                            <strong>Success!</strong> Message has been sent.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>

                                            </button>
                                        </div>
                                        <div class="alert alert-info alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                            <strong>Info!</strong> You have got 5 new email.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> Message sending failed.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-dark alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> You successfully read this important alert message.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-light alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> You successfully read this message..
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="html" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="alert alert-primary alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;path d="M8 14s1.5 2 4 2 4-2 4-2"&gt;&lt;/path&gt;&lt;line x1="9" y1="9" x2="9.01" y2="9"&gt;&lt;/line&gt;&lt;line x1="15" y1="9" x2="15.01" y2="9"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Welcome!&lt;/strong&gt; Message has been sent.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-secondary alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;strong&gt;Done!&lt;/strong&gt; Your profile photo updated.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-success alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polyline points="9 11 12 14 22 4"&gt;&lt;/polyline&gt;&lt;path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-info alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;line x1="12" y1="16" x2="12" y2="12"&gt;&lt;/line&gt;&lt;line x1="12" y1="8" x2="12.01" y2="8"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-warning alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"&gt;&lt;/path&gt;&lt;line x1="12" y1="9" x2="12" y2="13"&gt;&lt;/line&gt;&lt;line x1="12" y1="17" x2="12.01" y2="17"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-danger alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"&gt;&lt;/polygon&gt;&lt;line x1="15" y1="9" x2="9" y2="15"&gt;&lt;/line&gt;&lt;line x1="9" y1="9" x2="15" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message sending failed.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-dark alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"&gt;&lt;/polygon&gt;&lt;line x1="15" y1="9" x2="9" y2="15"&gt;&lt;/line&gt;&lt;line x1="9" y1="9" x2="15" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this important alert message.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-light alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"&gt;&lt;/polygon&gt;&lt;line x1="15" y1="9" x2="9" y2="15"&gt;&lt;/line&gt;&lt;line x1="9" y1="9" x2="15" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this message..
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;</code></pre>

                                    </div>
                                </div>
                            </div>
                            <!--/tab-content-->
                        </div>
                    </div>
                    <!-- /Column -->
                    <!-- Column  -->
                    <div class=" col-xl-12">
                        <div class="card dz-card" id="color-alerts">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Solid color alerts</h4>
                                    <p class="subtitle mb-0">add <code>.solid</code> class to change the solid color.</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#colorAlerts" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#colorAlerts-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-1">
                                <div class="tab-pane fade show active" id="colorAlerts" role="tabpanel" aria-labelledby="home-tab-1">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                            <strong>Welcome!</strong> Message has been sent.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-secondary solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                            <strong>Done!</strong> Your profile photo updated.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>

                                        <div class="alert alert-success solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                            <strong>Success!</strong> Message has been sent.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-info solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                            <strong>Info!</strong> You have got 5 new email.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-warning solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            <span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> Message sending failed.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-dark solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> You successfully read this important alert message.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                        <div class="alert alert-light solid alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> You successfully read this message..
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="colorAlerts-html" role="tabpanel" aria-labelledby="home-tab-1">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">  &lt;div class="alert alert-primary solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;path d="M8 14s1.5 2 4 2 4-2 4-2"&gt;&lt;/path&gt;&lt;line x1="9" y1="9" x2="9.01" y2="9"&gt;&lt;/line&gt;&lt;line x1="15" y1="9" x2="15.01" y2="9"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Welcome!&lt;/strong&gt; Message has been sent.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-secondary solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;strong&gt;Done!&lt;/strong&gt; Your profile photo updated.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;

&lt;div class="alert alert-success solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polyline points="9 11 12 14 22 4"&gt;&lt;/polyline&gt;&lt;path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-info solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;circle cx="12" cy="12" r="10"&gt;&lt;/circle&gt;&lt;line x1="12" y1="16" x2="12" y2="12"&gt;&lt;/line&gt;&lt;line x1="12" y1="8" x2="12.01" y2="8"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-warning solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"&gt;&lt;/path&gt;&lt;line x1="12" y1="9" x2="12" y2="13"&gt;&lt;/line&gt;&lt;line x1="12" y1="17" x2="12.01" y2="17"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-danger solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"&gt;&lt;/polygon&gt;&lt;line x1="15" y1="9" x2="9" y2="15"&gt;&lt;/line&gt;&lt;line x1="9" y1="9" x2="15" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message sending failed.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-dark solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"&gt;&lt;/polygon&gt;&lt;line x1="15" y1="9" x2="9" y2="15"&gt;&lt;/line&gt;&lt;line x1="9" y1="9" x2="15" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this important alert message.
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-light solid alert-dismissible fade show"&gt;
&lt;svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"&gt;&lt;polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"&gt;&lt;/polygon&gt;&lt;line x1="15" y1="9" x2="9" y2="15"&gt;&lt;/line&gt;&lt;line x1="9" y1="9" x2="15" y2="15"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this message..
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Column  -->
                    <!-- Column  -->
                    <div class=" col-xl-12">
                        <div class="card dz-card" id="square-alerts">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Square alerts</h4>
                                    <p class="mb-0 subtitle">add <code>.alert-square</code> class to change the solid color.
                                </p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#SquareAlerts" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#SquareAlerts-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-2">
                                <div class="tab-pane fade show active" id="SquareAlerts" role="tabpanel" aria-labelledby="home-tab-2">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary solid alert-square"><strong>Welcome!</strong> Message has been sent.</div>
                                        <div class="alert alert-secondary solid alert-square"><strong>Done!</strong> Your profile photo updated.</div>
                                        <div class="alert alert-success solid alert-square "><strong>Success!</strong> Message has been sent.</div>
                                        <div class="alert alert-info solid alert-square "><strong>Info!</strong> You have got 5 new email.</div>
                                        <div class="alert alert-warning solid alert-square "><strong>Warning!</strong> Something went wrong. Please check.</div>
                                        <div class="alert alert-danger solid alert-square "><strong>Error!</strong> Message sending failed.</div>
                                        <div class="alert alert-dark solid alert-square"><strong>Error!</strong> You successfully read this important alert message.</div>
                                        <div class="alert alert-light solid alert-square"><strong>Error!</strong> You successfully read this message..</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="SquareAlerts-html" role="tabpanel" aria-labelledby="home-tab-2">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="alert alert-primary solid alert-square"&gt;&lt;strong&gt;Welcome!&lt;/strong&gt; Message has been sent.&lt;/div&gt;
&lt;div class="alert alert-secondary solid alert-square"&gt;&lt;strong&gt;Done!&lt;/strong&gt; Your profile photo updated.&lt;/div&gt;
&lt;div class="alert alert-success solid alert-square "&gt;&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.&lt;/div&gt;
&lt;div class="alert alert-info solid alert-square "&gt;&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.&lt;/div&gt;
&lt;div class="alert alert-warning solid alert-square "&gt;&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.&lt;/div&gt;
&lt;div class="alert alert-danger solid alert-square "&gt;&lt;strong&gt;Error!&lt;/strong&gt; Message sending failed.&lt;/div&gt;
&lt;div class="alert alert-dark solid alert-square"&gt;&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this important alert message.&lt;/div&gt;
&lt;div class="alert alert-light solid alert-square"&gt;&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this message..&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="rounded-alerts">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Rounded alerts</h4>
                                    <p class="mb-0 subtitle">add <code>.alert-rounded</code> class to change the solid color.
                                    </p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#RoundedAlerts" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#RoundedAlerts-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-3">
                                <div class="tab-pane fade show active" id="RoundedAlerts" role="tabpanel" aria-labelledby="home-tab-3">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary solid alert-rounded"><strong>Welcome!</strong> Message has been sent.</div>
                                        <div class="alert alert-secondary solid alert-rounded"><strong>Done!</strong> Your profile photo updated.</div>
                                        <div class="alert alert-success solid alert-rounded "><strong>Success!</strong> Message has been sent.</div>
                                        <div class="alert alert-info solid alert-rounded "><strong>Info!</strong> You have got 5 new email.</div>
                                        <div class="alert alert-warning solid alert-rounded "><strong>Warning!</strong> Something went wrong. Please check.</div>
                                        <div class="alert alert-danger solid alert-rounded "><strong>Error!</strong> Message sending failed.</div>
                                        <div class="alert alert-dark solid alert-rounded"><strong>Error!</strong> You successfully read this important alert message.</div>
                                        <div class="alert alert-light solid alert-rounded"><strong>Error!</strong> You successfully read this message..</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="RoundedAlerts-html" role="tabpanel" aria-labelledby="home-tab-3">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="alert alert-primary solid alert-rounded"&gt;&lt;strong&gt;Welcome!&lt;/strong&gt; Message has been sent.&lt;/div&gt;
&lt;div class="alert alert-secondary solid alert-rounded"&gt;&lt;strong&gt;Done!&lt;/strong&gt; Your profile photo updated.&lt;/div&gt;
&lt;div class="alert alert-success solid alert-rounded "&gt;&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.&lt;/div&gt;
&lt;div class="alert alert-info solid alert-rounded "&gt;&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.&lt;/div&gt;
&lt;div class="alert alert-warning solid alert-rounded "&gt;&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.&lt;/div&gt;
&lt;div class="alert alert-danger solid alert-rounded "&gt;&lt;strong&gt;Error!&lt;/strong&gt; Message sending failed.&lt;/div&gt;
&lt;div class="alert alert-dark solid alert-rounded"&gt;&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this important alert message.&lt;/div&gt;
&lt;div class="alert alert-light solid alert-rounded"&gt;&lt;strong&gt;Error!&lt;/strong&gt; You successfully read this message..&lt;/div&gt;</code></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="dismissable-alerts">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Dismissable Alerts</h4>
                                    <p class="subtitle mb-0">Bootstrap default style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#DismissableAlerts" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#DismissableAlerts-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-4">
                                <div class="tab-pane fade show active" id="DismissableAlerts" role="tabpanel" aria-labelledby="home-tab-4">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-success alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-info alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Info!</strong> You have got 5 new email.
                                        </div>
                                        <div class="alert alert-warning alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-dark alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-light alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="DismissableAlerts-html" role="tabpanel" aria-labelledby="home-tab-4">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="alert alert-primary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-secondary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-success alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-info alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.
&lt;/div&gt;
&lt;div class="alert alert-warning alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;/div&gt;
&lt;div class="alert alert-danger alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-dark alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-light alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;</code></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="alerts-alt">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Alerts alt</h4>
                                    <p class="mb-0 subtitle">add <code>.alert-alt</code> class to change the solid color.
                                    </p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-5" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-5" data-bs-toggle="tab" data-bs-target="#AlertsAlt" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-5" data-bs-toggle="tab" data-bs-target="#AlertsAlt-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-5">
                                <div class="tab-pane fade show active" id="AlertsAlt" role="tabpanel" aria-labelledby="home-tab-5">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-success alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-info alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Info!</strong> You have got 5 new email.
                                        </div>
                                        <div class="alert alert-warning alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                        </div>
                                        <div class="alert alert-danger alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-dark alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-light alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="AlertsAlt-html" role="tabpanel" aria-labelledby="home-tab-5">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="alert alert-primary alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-secondary alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-success alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-info alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.
&lt;/div&gt;
&lt;div class="alert alert-warning alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;/div&gt;
&lt;div class="alert alert-danger alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-dark alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-light alert-dismissible alert-alt fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;</code></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12 ">
                        <div class="card dz-card" id="solid-alt">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Solid Alt</h4>
                                    <p class="mb-0 subtitle">add <code>.alert-alt.solid</code> class to change the solid color.
                                    </p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-6" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-6" data-bs-toggle="tab" data-bs-target="#SolidAlt" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-6" data-bs-toggle="tab" data-bs-target="#SolidAlt-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-6">
                                <div class="tab-pane fade show active" id="SolidAlt" role="tabpanel" aria-labelledby="home-tab-6">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-success alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-info alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Info!</strong> You have got 5 new email.
                                        </div>
                                        <div class="alert alert-warning alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                        </div>
                                        <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-dark alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-light alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="SolidAlt-html" role="tabpanel" aria-labelledby="home-tab-6">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="alert alert-primary alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-secondary alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-success alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-info alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.
&lt;/div&gt;
&lt;div class="alert alert-warning alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;/div&gt;
&lt;div class="alert alert-danger alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-dark alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-light alert-dismissible alert-alt solid fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;</code></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12 ">
                        <div class="card dz-card" id="dismissable-solid">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Dismissable with solid</h4>
                                    <p class="mb-0 subtitle">add <code>.solid</code> class to change the solid color.</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-7" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-7" data-bs-toggle="tab" data-bs-target="#Dismissable" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-7" data-bs-toggle="tab" data-bs-target="#Dismissable-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-7">
                                <div class="tab-pane fade show active" id="Dismissable" role="tabpanel" aria-labelledby="home-tab-7">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-secondary solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-success solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Success!</strong> Message has been sent.
                                        </div>
                                        <div class="alert alert-info solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Info!</strong> You have got 5 new email.
                                        </div>
                                        <div class="alert alert-warning solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                        </div>
                                        <div class="alert alert-danger solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-dark solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-light solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Dismissable-html" role="tabpanel" aria-labelledby="home-tab-7">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="alert alert-primary solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-secondary solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-success solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Success!&lt;/strong&gt; Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-info solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Info!&lt;/strong&gt; You have got 5 new email.
&lt;/div&gt;
&lt;div class="alert alert-warning solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;/div&gt;
&lt;div class="alert alert-danger solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-dark solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-light solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12 ">
                        <div class="card dz-card" id="alert-link">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Alert with Link</h4>
                                    <p class="mb-0 subtitle">Bootstrap default style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-8" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-8" data-bs-toggle="tab" data-bs-target="#AlertLink" type="button" role="tab" aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-8" data-bs-toggle="tab" data-bs-target="#AlertLink-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-8">
                                <div class="tab-pane fade show active" id="AlertLink" role="tabpanel" aria-labelledby="home-tab-8">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
                                                well</a>
                                        </div>

                                        <div class="alert alert-secondary alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
                                                well</a>
                                        </div>

                                        <div class="alert alert-success alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
                                                well</a>
                                        </div>

                                        <div class="alert alert-info alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Hey! Take a quick look.</strong> <a href="#">My birthday party</a>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Why you did it to me! <a href="#">Check this out</a>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
                                        </div>
                                        <div class="alert alert-dark alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
                                        </div>
                                        <div class="alert alert-light alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="AlertLink-html" role="tabpanel" aria-labelledby="home-tab-8">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="alert alert-primary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;WOW! Eveything looks OK.&lt;/strong&gt; &lt;a href="#"&gt;Please check this one as
well&lt;/a&gt;
&lt;/div&gt;

&lt;div class="alert alert-secondary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;WOW! Eveything looks OK.&lt;/strong&gt; &lt;a href="#"&gt;Please check this one as
well&lt;/a&gt;
&lt;/div&gt;

&lt;div class="alert alert-success alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;WOW! Eveything looks OK.&lt;/strong&gt; &lt;a href="#"&gt;Please check this one as
well&lt;/a&gt;
&lt;/div&gt;

&lt;div class="alert alert-info alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Hey! Take a quick look.&lt;/strong&gt; &lt;a href="#"&gt;My birthday party&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-warning alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Why you did it to me! &lt;a href="#"&gt;Check this out&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-danger alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Something Went wrong &lt;a href="#"&gt;Click here for details.&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-dark alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Something Went wrong &lt;a href="#"&gt;Click here for details.&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-light alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Something Went wrong &lt;a href="#"&gt;Click here for details.&lt;/a&gt;
&lt;/div&gt;
</code></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class=" col-xl-12">
                        <div class="card dz-card" id="alert-link-color">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Alert with Link and solid color</h4>
                                    <p class="mb-0 subtitle">add <code>.solid</code> class to change the solid color.</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-9" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-9" data-bs-toggle="tab" data-bs-target="#LinkSolid" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-9" data-bs-toggle="tab" data-bs-target="#LinkSolid-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-9">
                                <div class="tab-pane fade show active" id="LinkSolid" role="tabpanel" aria-labelledby="home-tab-9">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary  solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> WOW! Eveything looks OK. <a href="#" class="badge badge-sm light badge-primary ms-1">upgrade</a>
                                        </div>
                                        <div class="alert alert-secondary solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> WOW! Eveything looks OK. <a href="#" class="badge badge-sm light badge-secondary ms-1">upgrade</a>
                                        </div>
                                        <div class="alert alert-success solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> WOW! Eveything looks OK. <a href="#" class="badge badge-sm light badge-success ms-1">upgrade</a>
                                        </div>

                                        <div class="alert alert-info solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Hey! Take a quick look. <a href="#" class="badge badge-sm light badge-info ms-1">upgrade</a>
                                        </div>
                                        <div class="alert alert-warning solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Why you did it to me! <a href="#" class="badge badge-sm light badge-warning ms-1">upgrade</a>
                                        </div>
                                        <div class="alert alert-danger solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Something Went wrong <a href="#" class="badge badge-sm light badge-danger ms-1">upgrade</a>
                                        </div>
                                        <div class="alert alert-dark solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Something Went wrong <a href="#" class="badge badge-sm light badge-dark ms-1">upgrade</a>
                                        </div>
                                        <div class="alert alert-light solid alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Something Went wrong <a href="#" class="badge badge-sm light badge-light ms-1">upgrade</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="LinkSolid-html" role="tabpanel" aria-labelledby="home-tab-9">
                                    <div class="card-body p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="alert alert-primary solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; WOW! Eveything looks OK. &lt;a href="#" class="badge badge-sm light badge-primary ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-secondary solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; WOW! Eveything looks OK. &lt;a href="#" class="badge badge-sm light badge-secondary ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-success solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; WOW! Eveything looks OK. &lt;a href="#" class="badge badge-sm light badge-success ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;

&lt;div class="alert alert-info solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Hey! Take a quick look. &lt;a href="#" class="badge badge-sm light badge-info ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-warning solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Why you did it to me! &lt;a href="#" class="badge badge-sm light badge-warning ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-danger solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Something Went wrong &lt;a href="#" class="badge badge-sm light badge-danger ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-dark solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Something Went wrong &lt;a href="#" class="badge badge-sm light badge-dark ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;
&lt;div class="alert alert-light solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Something Went wrong &lt;a href="#" class="badge badge-sm light badge-light ms-1"&gt;upgrade&lt;/a&gt;
&lt;/div&gt;
</code></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-lg-12">
                        <div class="card dz-card" id="notifications">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Inline Notifications</h4>
                                    <p class="mb-0 subtitle">Default inline notification</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-10" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-10" data-bs-toggle="tab" data-bs-target="#Notifications" type="button" role="tab" aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-10" data-bs-toggle="tab" data-bs-target="#Notifications-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-10">
                                <div class="tab-pane fade show active" id="Notifications" role="tabpanel" aria-labelledby="home-tab-10">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="alert alert-primary notification">
                                                    <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                                    <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                                    <button class="btn btn-primary btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-secondary notification">
                                                    <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                                    <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                                    <button class="btn btn-secondary btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-success notification">
                                                    <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                                    <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                                    <button class="btn btn-success btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-info notification">
                                                    <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                                    <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                                    <button class="btn btn-info btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-warning notification">
                                                    <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                                    <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                                    <button class="btn btn-warning btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-danger notification">
                                                    <p class="notificaiton-title mb-2"><strong>Danger! </strong> Religion And Science
                                                    </p>
                                                    <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                                                    <button class="btn btn-danger btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-dark notification">
                                                    <p class="notificaiton-title mb-2"><strong>Danger! </strong> Religion And Science
                                                    </p>
                                                    <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                                                    <button class="btn btn-dark btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-light notification">
                                                    <p class="notificaiton-title mb-2"><strong>Danger! </strong> Religion And Science
                                                    </p>
                                                    <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                                                    <button class="btn btn-dark btn-sm">Confirm</button>
                                                    <button class="btn btn-link btn-sm">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="Notifications-html" role="tabpanel" aria-labelledby="home-tab-10">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="row"&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-primary notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Success!&lt;/strong&gt; Vampires The Romantic Ideology Behind Them&lt;/p&gt;
&lt;p&gt;The following article covers a topic that has recently moved to center stage-at lease it seems that way.&lt;/p&gt;
&lt;button class="btn btn-primary btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-secondary notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Success!&lt;/strong&gt; Vampires The Romantic Ideology Behind Them&lt;/p&gt;
&lt;p&gt;The following article covers a topic that has recently moved to center stage-at lease it seems that way.&lt;/p&gt;
&lt;button class="btn btn-secondary btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-success notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Success!&lt;/strong&gt; Vampires The Romantic Ideology Behind Them&lt;/p&gt;
&lt;p&gt;The following article covers a topic that has recently moved to center stage-at lease it seems that way.&lt;/p&gt;
&lt;button class="btn btn-success btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-info notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Success!&lt;/strong&gt; Vampires The Romantic Ideology Behind Them&lt;/p&gt;
&lt;p&gt;The following article covers a topic that has recently moved to center stage-at lease it seems that way.&lt;/p&gt;
&lt;button class="btn btn-info btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-warning notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Success!&lt;/strong&gt; Vampires The Romantic Ideology Behind Them&lt;/p&gt;
&lt;p&gt;The following article covers a topic that has recently moved to center stage-at lease it seems that way.&lt;/p&gt;
&lt;button class="btn btn-warning btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-danger notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Danger! &lt;/strong&gt; Religion And Science
&lt;/p&gt;
&lt;p&gt;What is the loop of Creation? How is there something from nothing? In spite of the fact.. &lt;/p&gt;
&lt;button class="btn btn-danger btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-dark notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Danger! &lt;/strong&gt; Religion And Science
&lt;/p&gt;
&lt;p&gt;What is the loop of Creation? How is there something from nothing? In spite of the fact.. &lt;/p&gt;
&lt;button class="btn btn-dark btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-light notification"&gt;
&lt;p class="notificaiton-title mb-2"&gt;&lt;strong&gt;Danger! &lt;/strong&gt; Religion And Science
&lt;/p&gt;
&lt;p&gt;What is the loop of Creation? How is there something from nothing? In spite of the fact.. &lt;/p&gt;
&lt;button class="btn btn-dark btn-sm"&gt;Confirm&lt;/button&gt;
&lt;button class="btn btn-link btn-sm"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="alert-icon-left">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Alert Icon Left</h4>
                                    <p class="mb-0 subtitle">add <code>.alert-end-icon</code> to change the style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-11" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-11" data-bs-toggle="tab" data-bs-target="#IconLeft" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-11" data-bs-toggle="tab" data-bs-target="#IconLeft-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-11">
                                <div class="tab-pane fade show active" id="IconLeft" role="tabpanel" aria-labelledby="home-tab-11">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-primary solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-account-search"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Success! Message has been sent.
                                        </div>
                                        <div class="alert alert-secondary solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="icon icon-bell-53"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Success! Message has been sent.
                                        </div>
                                        <div class="alert alert-success solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-check"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Success! Message has been sent.
                                        </div>
                                        <div class="alert alert-info solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-email"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Info! You have got 5 new email.
                                        </div>
                                        <div class="alert alert-warning solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-alert"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                        </div>
                                        <div class="alert alert-danger solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-help"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-dark solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-settings"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-light solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-cogs"></i></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="IconLeft-html" role="tabpanel" aria-labelledby="home-tab-11">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="alert alert-primary solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="mdi mdi-account-search"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Success! Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-secondary solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="icon icon-bell-53"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Success! Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-success solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="mdi mdi-check"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Success! Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-info solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="mdi mdi-email"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Info! You have got 5 new email.
&lt;/div&gt;
&lt;div class="alert alert-warning solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="mdi mdi-alert"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;/div&gt;
&lt;div class="alert alert-danger solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="mdi mdi-help"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-dark solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="mdi mdi-settings"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-light solid alert-end-icon alert-dismissible fade show"&gt;
&lt;span&gt;&lt;i class="mdi mdi-cogs"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class=" col-xl-12">
                        <div class="card dz-card" id="alert-outline">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 " >
                                <div>
                                    <h4 class="card-title">Alert Outline</h4>
                                    <p class="mb-0 subtitle">add <code>.alert-outline-primary,secondary,success...</code> to change the style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-12" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-12" data-bs-toggle="tab" data-bs-target="#AlertOutline" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-12" data-bs-toggle="tab" data-bs-target="#AlertOutline-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-12">
                                <div class="tab-pane fade show active" id="AlertOutline" role="tabpanel" aria-labelledby="home-tab-12">
                                    <div class="card-body pt-0">
                                        <div class="alert alert-outline-primary alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Success! Message has been sent.
                                        </div>
                                        <div class="alert alert-outline-secondary alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Success! Message has been sent.
                                        </div>
                                        <div class="alert alert-outline-success alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Success! Message has been sent.
                                        </div>
                                        <div class="alert alert-outline-info alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button> Info! You have got 5 new email.
                                        </div>
                                        <div class="alert alert-outline-warning alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Warning!</strong> Something went wrong. Please check.
                                        </div>
                                        <div class="alert alert-outline-danger alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-outline-dark alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                        <div class="alert alert-outline-light alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                            </button>
                                            <strong>Error!</strong> Message Sending failed.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="AlertOutline-html" role="tabpanel" aria-labelledby="home-tab-12">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">
&lt;div class="alert alert-outline-primary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Success! Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-outline-secondary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Success! Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-outline-success alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Success! Message has been sent.
&lt;/div&gt;
&lt;div class="alert alert-outline-info alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt; Info! You have got 5 new email.
&lt;/div&gt;
&lt;div class="alert alert-outline-warning alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Something went wrong. Please check.
&lt;/div&gt;
&lt;div class="alert alert-outline-danger alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-outline-dark alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
&lt;div class="alert alert-outline-light alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;
&lt;/button&gt;
&lt;strong&gt;Error!&lt;/strong&gt; Message Sending failed.
&lt;/div&gt;
</code></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class=" col-xl-12">
                        <div class="card dz-card" id="alert-social">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Alert Social</h4>
                                    <p class="mb-0 subtitle">add <code>.alert-social
                                        .facebook,.twitter,.linkedin,.google-plus</code> to change the style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-13" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-13" data-bs-toggle="tab" data-bs-target="#AlertSocial" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-13" data-bs-toggle="tab" data-bs-target="#AlertSocial-html" type="button" role="tab" aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-13">
                                <div class="tab-pane fade show active" id="AlertSocial" role="tabpanel" aria-labelledby="home-tab-13">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="alert alert-social facebook alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-social-icon">
                                                            <span><i class="mdi mdi-facebook"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Facebook</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-social twitter alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-social-icon">
                                                            <span><i class="mdi mdi-twitter"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Twitter</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-social linkedin alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-social-icon">
                                                            <span><i class="mdi mdi-linkedin"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Linkedin</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-social google-plus alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-social-icon">
                                                            <span><i class="mdi mdi-google-plus"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Google Plus</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="AlertSocial-html" role="tabpanel" aria-labelledby="home-tab-13">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">
&lt;div class="row"&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-social facebook alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="alert-social-icon"&gt;
        &lt;span&gt;&lt;i class="mdi mdi-facebook"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Facebook&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-social twitter alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="alert-social-icon"&gt;
        &lt;span&gt;&lt;i class="mdi mdi-twitter"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Twitter&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-social linkedin alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="alert-social-icon"&gt;
        &lt;span&gt;&lt;i class="mdi mdi-linkedin"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Linkedin&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-social google-plus alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="alert-social-icon"&gt;
        &lt;span&gt;&lt;i class="mdi mdi-google-plus"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Google Plus&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class=" col-xl-12">
                        <div class="card dz-card" id="message-alert">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Message Alert</h4>
                                    <p class="subtitle mb-0">Bootstrap default style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-14" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-14" data-bs-toggle="tab" data-bs-target="#AlertMessage" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-14" data-bs-toggle="tab" data-bs-target="#AlertMessage-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-14">
                                <div class="tab-pane fade show active" id="AlertMessage" role="tabpanel" aria-labelledby="home-tab-14">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="alert alert-primary alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-secondary alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-success alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-info alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-warning alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-danger alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-dark alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-light alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-1">Notifications</h5>
                                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="AlertMessage-html" role="tabpanel" aria-labelledby="home-tab-14">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="row"&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-primary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-secondary alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-success alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-info alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-warning alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-danger alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-dark alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-light alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-1"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="message-alert-color">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Message Alert with Solid color</h4>
                                    <p class="mb-0 subtitle">add <code>.solid</code> to change the style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-15" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-15" data-bs-toggle="tab" data-bs-target="#AlertSolidcolor" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-15" data-bs-toggle="tab" data-bs-target="#AlertSolidcolor-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-15">
                                <div class="tab-pane fade show active" id="AlertSolidcolor" role="tabpanel"    aria-labelledby="home-tab-15">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="alert alert-primary solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-secondary solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-success solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-info solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-warning solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-danger solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-dark solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-light solid alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                        <span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                                                            <p class="mb-0 text-white">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="AlertSolidcolor-html" role="tabpanel" aria-labelledby="home-tab-15">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="row"&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-primary solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-secondary solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-success solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-info solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-warning solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-danger solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-dark solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2 text-white"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-light solid alert-dismissible fade show"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h5 class="mt-1 mb-2"&gt;Notifications&lt;/h5&gt;
        &lt;p class="mb-0"&gt;Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12 ">
                        <div class="card dz-card" id="alert-icon-big">
                            <div class="card-header flex-wrap d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Alert left icon big </h4>
                                    <p class="mb-0 subtitle">add <code>.left-icon-big</code> to change the style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-16" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-16" data-bs-toggle="tab" data-bs-target="#AlertLeftIcon" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-16" data-bs-toggle="tab" data-bs-target="#AlertLeftIcon-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-16">
                                <div class="tab-pane fade show active" id="AlertLeftIcon" role="tabpanel"    aria-labelledby="home-tab-16">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="alert alert-primary left-icon-big alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-left-icon-big">
                                                            <span><i class="mdi mdi-email-alert"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mt-1 mb-2">Welcome to your account, Dear user!</h6>
                                                            <p class="mb-0">Please confirm your email address: email@example.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-warning left-icon-big alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-left-icon-big">
                                                            <span><i class="mdi mdi-help-circle-outline"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2">Pending!</h5>
                                                            <p class="mb-0">You message sending failed.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-success left-icon-big alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-left-icon-big">
                                                            <span><i class="mdi mdi-check-circle-outline"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2">Congratulations!</h5>
                                                            <p class="mb-0">You have successfully created a account.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                                    </button>
                                                    <div class="media">
                                                        <div class="alert-left-icon-big">
                                                            <span><i class="mdi mdi-alert"></i></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-1 mb-2">Loading failed!</h5>
                                                            <p class="mb-0">Again upload your server</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="AlertLeftIcon-html" role="tabpanel"    aria-labelledby="home-tab-16">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="row"&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-primary left-icon-big alert-dismissible fade show"&gt;
    &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="media"&gt;
        &lt;div class="alert-left-icon-big"&gt;
            &lt;span&gt;&lt;i class="mdi mdi-email-alert"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="media-body"&gt;
            &lt;h6 class="mt-1 mb-2"&gt;Welcome to your account, Dear user!&lt;/h6&gt;
            &lt;p class="mb-0"&gt;Please confirm your email address: email@example.com&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-warning left-icon-big alert-dismissible fade show"&gt;
    &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="media"&gt;
        &lt;div class="alert-left-icon-big"&gt;
            &lt;span&gt;&lt;i class="mdi mdi-help-circle-outline"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="media-body"&gt;
            &lt;h5 class="mt-1 mb-2"&gt;Pending!&lt;/h5&gt;
            &lt;p class="mb-0"&gt;You message sending failed.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-success left-icon-big alert-dismissible fade show"&gt;
    &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="media"&gt;
        &lt;div class="alert-left-icon-big"&gt;
            &lt;span&gt;&lt;i class="mdi mdi-check-circle-outline"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="media-body"&gt;
            &lt;h5 class="mt-1 mb-2"&gt;Congratulations!&lt;/h5&gt;
            &lt;p class="mb-0"&gt;You have successfully created a account.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="alert alert-danger left-icon-big alert-dismissible fade show"&gt;
    &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"&gt;&lt;span&gt;&lt;i class="fa-solid fa-xmark"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="media"&gt;
        &lt;div class="alert-left-icon-big"&gt;
            &lt;span&gt;&lt;i class="mdi mdi-alert"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="media-body"&gt;
            &lt;h5 class="mt-1 mb-2"&gt;Loading failed!&lt;/h5&gt;
            &lt;p class="mb-0"&gt;Again upload your server&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /Column  -->
                    <!-- Column  -->
                </div>
            <!-- /row -->
            </div>
        </div>
        <div class="demo-right ">
            <div class="demo-right-inner dz-scroll " id="right-sidebar">
                <h4 class="title">Alert</h4>
                <div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
                    <ul class="navbar-nav" id="menu-bar">
                        <li><a href="#basic-alerts" class="scroll">Basic-Alerts</a></li>
                        <li><a href="#color-alerts" class="scroll">Solid color alerts</a></li>
                        <li><a href="#square-alerts" class="scroll">Square Alerts</a></li>
                        <li><a href="#rounded-alerts" class="scroll">Rounded Alerts</a></li>
                        <li><a href="#dismissable-alerts" class="scroll">Dismissable Alerts</a></li>
                        <li><a href="#alerts-alt" class="scroll">Alerts Alt</a></li>
                        <li><a href="#solid-alt" class="scroll">Solid Alt</a></li>
                        <li><a href="#dismissable-solid" class="scroll">Dismissable with solid</a></li>
                        <li><a href="#alert-link" class="scroll">Alert with Link</a></li>
                        <li><a href="#alert-link-color" class="scroll">Alert with Link and Solid Color</a></li>
                        <li><a href="#notifications" class="scroll">Inline Notifications</a></li>
                        <li><a href="#alert-icon-left" class="scroll">Alert Icon Left</a></li>
                        <li><a href="#alert-outline" class="scroll">Alert outline</a></li>
                        <li><a href="#alert-social" class="scroll">Alert Social</a></li>
                        <li><a href="#message-alert" class="scroll">Message Alert</a></li>
                        <li><a href="#message-alert-color" class="scroll">Message Alert Color</a></li>
                        <li><a href="#alert-icon-big" class="scroll">Alert left icon big </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/element-area-->
</div>
@endsection
@push('scripts')
    <script>
        hljs.highlightAll();
        hljs.configure({ ignoreUnescapedHTML: true })

		document.addEventListener('DOMContentLoaded', (event) => {
			document.querySelectorAll('pre code').forEach((el) => {
				hljs.highlightElement(el);
			});
			});
	</script>
@endpush
