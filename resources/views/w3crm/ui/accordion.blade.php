@extends('layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Accordion</a></li>
    </ol>
</div>
            <!-- container starts -->
<div class="container-fluid">
    <div class="element-area">
        <div class="demo-view">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                <div class="row">
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="accordion-one">
                            <div class="card-header flex-wrap border-0">
                                <div>
                                    <h4 class="card-title">Default Accordion</h4>
                                    <p class="m-0 subtitle">Default accordion. Add <code>accordion</code> class in root</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <!--tab-content-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body pt-0">
                                        <!-- Default accordion -->
                                        <div class="accordion accordion-primary" >
                                            <div class="accordion-item">
                                            <div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">
                                                <span class="accordion-header-icon"></span>
                                                <span class="accordion-header-text">Accordion Header One</span>
                                                <span class="accordion-header-indicator"></span>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                                                <div class="accordion-body-text">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                            </div>
                                            <div class="accordion-item">
                                            <div class="accordion-header collapsed rounded-lg" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo"   role="button" aria-expanded="true">
                                                <span class="accordion-header-text">Accordion Header Two</span>
                                                <span class="accordion-header-indicator"></span>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-one">
                                                <div class="accordion-body-text">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                            </div>
                                            <div class="accordion-item">
                                            <div class="accordion-header collapsed rounded-lg" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree"  role="button"  aria-expanded="true">
                                                <span class="accordion-header-text">Accordion Header Three</span>
                                                <span class="accordion-header-indicator"></span>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-one">
                                                <div class="accordion-body-text">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Default accordion -->
                                </div>
                                <div class="tab-pane fade " id="html" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body pt-0 p-0 code-area">
<!-- Default accordion -->
<pre class="mb-0"><code class="language-html">
&lt;div class="accordion accordion-primary" id="accordion-one"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo"   role="button" aria-expanded="true"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-one"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree"  role="button"  aria-expanded="true"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-one"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
</div>
<!-- /Default accordion -->
                                </div>
                            </div>
                            <!--/tab-content-->
                        </div>
                    </div>
                </div>
            <!-- Column ends -->
            <!-- Column starts -->
            <div class="col-xl-12">
                <div class="card dz-card" id="accordion-two">
                    <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                        <div>
                            <h4 class="card-title">Accordion bordered</h4>
                            <p class="m-0 subtitle">Accordion with border. Add class <code>accordion-bordered</code> with the class <code> accordion</code></p>
                        </div>
                        <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#bordered" type="button" role="tab" aria-selected="true">Preview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#bordered-html" type="button" role="tab"  aria-selected="false">HTML</button>
                            </li>
                        </ul>
                    </div>

                        <!-- tab-content -->
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="bordered" role="tabpanel" aria-labelledby="home-tab-1">
                            <div class="card-body pt-0">
                                <div class="accordion accordion-danger-solid" >
                            <div class="accordion-item">
                            <div class="accordion-header  rounded-lg" id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One"   aria-expanded="true"  role="button">
                                <span class="accordion-header-text">Accordion Header One</span>
                                <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse2One" class="collapse accordion__body show" aria-labelledby="accord-2One" data-bs-parent="#accordion-two">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-2Two" data-bs-toggle="collapse" data-bs-target="#collapse2Two" aria-controls="collapse2Two"   aria-expanded="true"  role="button">
                                <span class="accordion-header-text">Accordion Header Two</span>
                                <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse2Two" class="collapse accordion__body" aria-labelledby="accord-2Two" data-bs-parent="#accordion-two">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-2Three" data-bs-toggle="collapse" data-bs-target="#collapse2Three" aria-controls="collapse2Three"   aria-expanded="true"  role="button">
                                <span class="accordion-header-text">Accordion Header Three</span>
                                <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse2Three" class="collapse accordion__body" aria-labelledby="accord-2Three" data-bs-parent="#accordion-two">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="bordered-html" role="tabpanel" aria-labelledby="home-tab-1">
                            <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="accordion accordion-danger-solid" id="accordion-two"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse2One" class="collapse accordion__body show" aria-labelledby="accord-2One" data-bs-parent="#accordion-two"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-2Two" data-bs-toggle="collapse" data-bs-target="#collapse2Two" aria-controls="collapse2Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse2Two" class="collapse accordion__body" aria-labelledby="accord-2Two" data-bs-parent="#accordion-two"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-2Three" data-bs-toggle="collapse" data-bs-target="#collapse2Three" aria-controls="collapse2Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse2Three" class="collapse accordion__body" aria-labelledby="accord-2Three" data-bs-parent="#accordion-two"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                        </div>
                    </div>
                    <!-- /tab-content -->

                </div>
            </div>
            <!-- Column ends -->
            <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-three">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                    <h4 class="card-title">Accordion without space</h4>
                    <p class="m-0 subtitle">Add <code>accordion-no-gutter</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#withoutSpace" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#withoutSpace-html" type="button" role="tab"  aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>

                    <!-- /tab-content -->
                    <div class="tab-content" id="myTabContent-2">
                        <div class="tab-pane fade show active" id="withoutSpace" role="tabpanel" aria-labelledby="home-tab-2">
                            <div class="card-body pt-0">
                                <div class="accordion accordion-no-gutter accordion-header-bg" >
                                <div class="accordion-item">
                                    <div class="accordion-header  rounded-lg" id="accord-3One" data-bs-toggle="collapse" data-bs-target="#collapse3One" aria-controls="collapse3One"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-text">Accordion Header One</span>
                                    <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapse3One" class="collapse accordion__body show" aria-labelledby="accord-3One" data-bs-parent="#accordion-three">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed rounded-lg" id="accord-3Two" data-bs-toggle="collapse" data-bs-target="#collapse3Two" aria-controls="collapse3Two"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-text">Accordion Header Two</span>
                                    <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapse3Two" class="collapse accordion__body" aria-labelledby="accord-3Two" data-bs-parent="#accordion-three">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed rounded-lg" id="accord-3Three" data-bs-toggle="collapse" data-bs-target="#collapse3Three" aria-controls="collapse3Three"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-text">Accordion Header Three</span>
                                    <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapse3Three" class="collapse accordion__body" aria-labelledby="accord-3Three" data-bs-parent="#accordion-three">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="withoutSpace-html" role="tabpanel" aria-labelledby="home-tab-2">
                            <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-no-gutter accordion-header-bg" id="accordion-three"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-3One" data-bs-toggle="collapse" data-bs-target="#collapse3One" aria-controls="collapse3One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse3One" class="collapse accordion__body show" aria-labelledby="accord-3One" data-bs-parent="#accordion-three"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-3Two" data-bs-toggle="collapse" data-bs-target="#collapse3Two" aria-controls="collapse3Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse3Two" class="collapse accordion__body" aria-labelledby="accord-3Two" data-bs-parent="#accordion-three"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-3Three" data-bs-toggle="collapse" data-bs-target="#collapse3Three" aria-controls="collapse3Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse3Three" class="collapse accordion__body" aria-labelledby="accord-3Three" data-bs-parent="#accordion-three"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre></div>
                        </div>
                    </div>
                    <!-- /tab-content -->

            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-four">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion without space with border</h4>
                        <p class="m-0 subtitle">Add <code>accordion-no-gutter accordion-bordered</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#withoutBorder" type="button" role="tab"  aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#withoutBorder-html" type="button" role="tab"  aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>

                    <!-- /tab-content -->
                    <div class="tab-content" id="myTabContent-3">
                        <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel" aria-labelledby="home-tab-3">
                            <div class="card-body pt-0 ">
                                <div class="accordion accordion-no-gutter accordion-bordered" >
                                <div class="accordion-item">
                                    <div class="accordion-header  rounded-lg" id="accord-4One" data-bs-toggle="collapse" data-bs-target="#collapse4One" aria-controls="collapse4One"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-text">Accordion Header One</span>
                                    <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapse4One" class="collapse accordion__body show" aria-labelledby="accord-4One" data-bs-parent="#accordion-four">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed rounded-lg" id="accord-4Two" data-bs-toggle="collapse" data-bs-target="#collapse4Two" aria-controls="collapse4Two"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-text">Accordion Header Two</span>
                                    <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapse4Two" class="collapse accordion__body" aria-labelledby="accord-4Two" data-bs-parent="#accordion-four">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header collapsed rounded-lg" id="accord-4Three" data-bs-toggle="collapse" data-bs-target="#collapse4Three" aria-controls="collapse4Three"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-text">Accordion Header Three</span>
                                    <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapse4Three" class="collapse accordion__body" aria-labelledby="accord-4Three" data-bs-parent="#accordion-four">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="withoutBorder-html" role="tabpanel" aria-labelledby="home-tab-3">
                            <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-no-gutter accordion-bordered" id="accordion-four"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-4One" data-bs-toggle="collapse" data-bs-target="#collapse4One" aria-controls="collapse4One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse4One" class="collapse accordion__body show" aria-labelledby="accord-4One" data-bs-parent="#accordion-four"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-4Two" data-bs-toggle="collapse" data-bs-target="#collapse4Two" aria-controls="collapse4Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse4Two" class="collapse accordion__body" aria-labelledby="accord-4Two" data-bs-parent="#accordion-four"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-4Three" data-bs-toggle="collapse" data-bs-target="#collapse4Three" aria-controls="collapse4Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse4Three" class="collapse accordion__body" aria-labelledby="accord-4Three" data-bs-parent="#accordion-four"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                        </div>
                    </div>
                <!-- /tab-content -->

            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-five">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion indicator in left position</h4>
                        <p class="m-0 subtitle">Add <code>accordion-start-indicator</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#leftPosition" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#leftPosition-html" type="button" role="tab"  aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <!-- tab-content -->
                <div class="tab-content" id="myTabContent-4">
                    <div class="tab-pane fade show active" id="leftPosition" role="tabpanel" aria-labelledby="home-tab-4">
                        <div class="card-body pt-0 ">
                        <div class="accordion accordion-start-indicator" >
                        <div class="accordion-item">
                            <div class="accordion-header  rounded-lg" id="accord-5One" data-bs-toggle="collapse" data-bs-target="#collapse5One" aria-controls="collapse5One"   aria-expanded="true"  role="button">
                            <span class="accordion-header-text">Accordion Header One</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse5One" class="collapse accordion__body show" aria-labelledby="accord-5One" data-bs-parent="#accordion-five">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-5Two" data-bs-toggle="collapse" data-bs-target="#collapse5Two" aria-controls="collapse5Two"   aria-expanded="true"  role="button">
                            <span class="accordion-header-text">Accordion Header Two</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse5Two" class="collapse accordion__body" aria-labelledby="accord-5Two" data-bs-parent="#accordion-five">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-5Three" data-bs-toggle="collapse" data-bs-target="#collapse5Three" aria-controls="collapse5Three"   aria-expanded="true"  role="button">
                            <span class="accordion-header-text">Accordion Header Three</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse5Three" class="collapse accordion__body" aria-labelledby="accord-5Three" data-bs-parent="#accordion-five">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="leftPosition-html" role="tabpanel" aria-labelledby="home-tab-4">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-start-indicator" id="accordion-five"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-5One" data-bs-toggle="collapse" data-bs-target="#collapse5One" aria-controls="collapse5One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse5One" class="collapse accordion__body show" aria-labelledby="accord-5One" data-bs-parent="#accordion-five"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-5Two" data-bs-toggle="collapse" data-bs-target="#collapse5Two" aria-controls="collapse5Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse5Two" class="collapse accordion__body" aria-labelledby="accord-5Two" data-bs-parent="#accordion-five"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-5Three" data-bs-toggle="collapse" data-bs-target="#collapse5Three" aria-controls="collapse5Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse5Three" class="collapse accordion__body" aria-labelledby="accord-5Three" data-bs-parent="#accordion-five"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                        </code></pre>
                    </div>
                    </div>
                </div>
                <!-- /tab-content -->

            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-six">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion with icon</h4>
                        <p class="m-0 subtitle">Add <code>accordion-with-icon</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-5" data-bs-toggle="tab" data-bs-target="#widthicon" type="button" role="tab"  aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-5" data-bs-toggle="tab" data-bs-target="#widthicon-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent-5">
                    <div class="tab-pane fade show active" id="widthicon" role="tabpanel" aria-labelledby="home-tab-5">
                        <div class="card-body pt-0">
                            <div class="accordion accordion-with-icon" >
                            <div class="accordion-item">
                                <div class="accordion-header  rounded-lg" id="accord-6One" data-bs-toggle="collapse" data-bs-target="#collapse6One" aria-controls="collapse6One"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header One</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse6One" class="collapse accordion__body show" aria-labelledby="accord-6One" data-bs-parent="#accordion-six">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-6Two" data-bs-toggle="collapse" data-bs-target="#collapse6Two" aria-controls="collapse6Two"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Two</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse6Two" class="collapse accordion__body" aria-labelledby="accord-6Two" data-bs-parent="#accordion-six">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-6Three" data-bs-toggle="collapse" data-bs-target="#collapse6Three" aria-controls="collapse6Three"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Three</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse6Three" class="collapse accordion__body" aria-labelledby="accord-6Three" data-bs-parent="#accordion-six">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="widthicon-html" role="tabpanel" aria-labelledby="home-tab-5">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-with-icon" id="accordion-six"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-6One" data-bs-toggle="collapse" data-bs-target="#collapse6One" aria-controls="collapse6One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse6One" class="collapse accordion__body show" aria-labelledby="accord-6One" data-bs-parent="#accordion-six"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-6Two" data-bs-toggle="collapse" data-bs-target="#collapse6Two" aria-controls="collapse6Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse6Two" class="collapse accordion__body" aria-labelledby="accord-6Two" data-bs-parent="#accordion-six"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-6Three" data-bs-toggle="collapse" data-bs-target="#collapse6Three" aria-controls="collapse6Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse6Three" class="collapse accordion__body" aria-labelledby="accord-6Three" data-bs-parent="#accordion-six"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-seven">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion header background</h4>
                        <p class="m-0 subtitle">Add <code>accordion-header-bg</code> class with <code>accrodion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-6" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-6" data-bs-toggle="tab" data-bs-target="#headerbackground" type="button" role="tab"  aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-6" data-bs-toggle="tab" data-bs-target="#headerbackground-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
        <div class="tab-content" id="myTabContent-6">
            <div class="tab-pane fade show active" id="headerbackground" role="tabpanel" aria-labelledby="home-tab-6">
                <div class="card-body pt-0">

                    <div class="accordion accordion-header-bg accordion-bordered" >
                        <div class="accordion-item">
                        <div class="accordion-header  rounded-lg" id="accord-7One" data-bs-toggle="collapse" data-bs-target="#collapse7One" aria-controls="collapse7One"   aria-expanded="true"  role="button">
                            <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header One</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapse7One" class="collapse accordion__body show" aria-labelledby="accord-7One" data-bs-parent="#accordion-seven">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="accord-7Two" data-bs-toggle="collapse" data-bs-target="#collapse7Two" aria-controls="collapse7Two"   aria-expanded="true"  role="button">
                            <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header Two</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapse7Two" class="collapse accordion__body" aria-labelledby="accord-7Two" data-bs-parent="#accordion-seven">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="accord-7Three" data-bs-toggle="collapse" data-bs-target="#collapse7Three" aria-controls="collapse7Three"   aria-expanded="true"  role="button">
                            <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header Three</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapse7Three" class="collapse accordion__body" aria-labelledby="accord-7Three" data-bs-parent="#accordion-seven">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="headerbackground-html" role="tabpanel" aria-labelledby="home-tab-6">
                <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-header-bg accordion-bordered" id="accordion-seven"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-7One" data-bs-toggle="collapse" data-bs-target="#collapse7One" aria-controls="collapse7One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse7One" class="collapse accordion__body show" aria-labelledby="accord-7One" data-bs-parent="#accordion-seven"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-7Two" data-bs-toggle="collapse" data-bs-target="#collapse7Two" aria-controls="collapse7Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse7Two" class="collapse accordion__body" aria-labelledby="accord-7Two" data-bs-parent="#accordion-seven"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-7Three" data-bs-toggle="collapse" data-bs-target="#collapse7Three" aria-controls="collapse7Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse7Three" class="collapse accordion__body" aria-labelledby="accord-7Three" data-bs-parent="#accordion-seven"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-eight">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion solid background</h4>
                        <p class="m-0 subtitle">Add class <code>accordion-solid-bg</code> with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-7" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-7" data-bs-toggle="tab" data-bs-target="#solidbackground" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-7" data-bs-toggle="tab" data-bs-target="#solidbackground-html" type="button" role="tab"  aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent-7">
                    <div class="tab-pane fade show active" id="solidbackground" role="tabpanel" aria-labelledby="home-tab-7">
                        <div class="card-body pt-0">

                            <div class="accordion accordion-solid-bg" >
                            <div class="accordion-item">
                                <div class="accordion-header  rounded-lg" id="accord-8One" data-bs-toggle="collapse" data-bs-target="#collapse8One" aria-controls="collapse8One"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header One</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse8One" class="collapse accordion__body show" aria-labelledby="accord-8One" data-bs-parent="#accordion-eight">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-8Two" data-bs-toggle="collapse" data-bs-target="#collapse8Two" aria-controls="collapse8Two"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Two</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse8Two" class="collapse accordion__body" aria-labelledby="accord-8Two" data-bs-parent="#accordion-eight">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-8Three" data-bs-toggle="collapse" data-bs-target="#collapse8Three" aria-controls="collapse8Three"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Three</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse8Three" class="collapse accordion__body" aria-labelledby="accord-8Three" data-bs-parent="#accordion-eight">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="solidbackground-html" role="tabpanel" aria-labelledby="home-tab-7">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-solid-bg" id="accordion-eight"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-8One" data-bs-toggle="collapse" data-bs-target="#collapse8One" aria-controls="collapse8One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse8One" class="collapse accordion__body show" aria-labelledby="accord-8One" data-bs-parent="#accordion-eight"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-8Two" data-bs-toggle="collapse" data-bs-target="#collapse8Two" aria-controls="collapse8Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse8Two" class="collapse accordion__body" aria-labelledby="accord-8Two" data-bs-parent="#accordion-eight"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-8Three" data-bs-toggle="collapse" data-bs-target="#collapse8Three" aria-controls="collapse8Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse8Three" class="collapse accordion__body" aria-labelledby="accord-8Three" data-bs-parent="#accordion-eight"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card"  id="accordion-nine">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion active background</h4>
                        <p class="m-0 subtitle">Add class <code>accordion-active-header</code> with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-8" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-8" data-bs-toggle="tab" data-bs-target="#activebackground" type="button" role="tab"  aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-8" data-bs-toggle="tab" data-bs-target="#activebackground-html" type="button" role="tab"  aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent-8">
                    <div class="tab-pane fade show active" id="activebackground" role="tabpanel" aria-labelledby="home-tab-8">
                        <div class="card-body pt-0">
                            <div class="accordion accordion-active-header">
                            <div class="accordion-item">
                                <div class="accordion-header  rounded-lg" id="accord-9One" data-bs-toggle="collapse" data-bs-target="#collapse9One" aria-controls="collapse9One"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header One</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse9One" class="collapse accordion__body show" aria-labelledby="accord-9One" data-bs-parent="#accordion-nine">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-9Two" data-bs-toggle="collapse" data-bs-target="#collapse9Two" aria-controls="collapse9Two"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Two</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse9Two" class="collapse accordion__body" aria-labelledby="accord-9Two" data-bs-parent="#accordion-nine">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-9Three" data-bs-toggle="collapse" data-bs-target="#collapse9Three" aria-controls="collapse9Three"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Three</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse9Three" class="collapse accordion__body" aria-labelledby="accord-9Three" data-bs-parent="#accordion-nine">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="activebackground-html" role="tabpanel" aria-labelledby="home-tab-8">
                        <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="accordion accordion-active-header" id="accordion-nine"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-9One" data-bs-toggle="collapse" data-bs-target="#collapse9One" aria-controls="collapse9One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse9One" class="collapse accordion__body show" aria-labelledby="accord-9One" data-bs-parent="#accordion-nine"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-9Two" data-bs-toggle="collapse" data-bs-target="#collapse9Two" aria-controls="collapse9Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse9Two" class="collapse accordion__body" aria-labelledby="accord-9Two" data-bs-parent="#accordion-nine"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-9Three" data-bs-toggle="collapse" data-bs-target="#collapse9Three" aria-controls="collapse9Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse9Three" class="collapse accordion__body" aria-labelledby="accord-9Three" data-bs-parent="#accordion-nine"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
                            </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card " id="accordion-ten">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion header shadow</h4>
                        <p class="m-0 subtitle">Add <code>accordion-header-shadow</code> and <code>accordion-rounded</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-9" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-9" data-bs-toggle="tab" data-bs-target="#headerShadow" type="button" role="tab"  aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-9" data-bs-toggle="tab" data-bs-target="#headerShadow-html" type="button" role="tab"  aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent-9">
                    <div class="tab-pane fade show active" id="headerShadow" role="tabpanel" aria-labelledby="home-tab-9">
                        <div class="card-body pt-0">
                            <div class="accordion accordion-header-shadow accordion-rounded" >

                            <div class="accordion-item">
                                <div class="accordion-header  rounded-lg" id="accord-10One" data-bs-toggle="collapse" data-bs-target="#collapse10One" aria-controls="collapse10One"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header One</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse10One" class="collapse accordion__body show" aria-labelledby="accord-10One" data-bs-parent="#accordion-ten">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-10Two" data-bs-toggle="collapse" data-bs-target="#collapse10Two" aria-controls="collapse10Two"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Two</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse10Two" class="collapse accordion__body" aria-labelledby="accord-10Two" data-bs-parent="#accordion-ten">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-10Three" data-bs-toggle="collapse" data-bs-target="#collapse10Three" aria-controls="collapse9Three"   aria-expanded="true"  role="button">
                                    <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Accordion Header Three</span>
                                <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse10Three" class="collapse accordion__body" aria-labelledby="accord-10Three" data-bs-parent="#accordion-ten">
                                <div class="accordion-body-text">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="headerShadow-html" role="tabpanel" aria-labelledby="home-tab-9">
                        <div class="card-body pt-0 code-area">
<pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-header-shadow accordion-rounded" id="accordion-ten"&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header  rounded-lg" id="accord-10One" data-bs-toggle="collapse" data-bs-target="#collapse10One" aria-controls="collapse10One"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse10One" class="collapse accordion__body show" aria-labelledby="accord-10One" data-bs-parent="#accordion-ten"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-10Two" data-bs-toggle="collapse" data-bs-target="#collapse10Two" aria-controls="collapse10Two"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse10Two" class="collapse accordion__body" aria-labelledby="accord-10Two" data-bs-parent="#accordion-ten"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-item"&gt;
&lt;div class="accordion-header collapsed rounded-lg" id="accord-10Three" data-bs-toggle="collapse" data-bs-target="#collapse10Three" aria-controls="collapse9Three"   aria-expanded="true"  role="button"&gt;
&lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
&lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
&lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div id="collapse10Three" class="collapse accordion__body" aria-labelledby="accord-10Three" data-bs-parent="#accordion-ten"&gt;
&lt;div class="accordion-body-text"&gt;
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-eleven">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion rounded stylish</h4>
                        <p class="m-0 subtitle">Add <code>accordion-rounded-stylish</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-10" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-10" data-bs-toggle="tab" data-bs-target="#roundedStylish" type="button" role="tab"  aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-10" data-bs-toggle="tab" data-bs-target="#roundedStylish-html" type="button" role="tab"  aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
            <div class="tab-content" id="myTabContent-10">
                <div class="tab-pane fade show active" id="roundedStylish" role="tabpanel" aria-labelledby="home-tab-10">
                    <div class="card-body pt-0">

                        <div class="accordion accordion-rounded-stylish accordion-bordered" >
                        <div class="accordion-item">
                            <div class="accordion-header  rounded-lg" id="accord-11One" data-bs-toggle="collapse" data-bs-target="#collapse11One" aria-controls="collapse11One"   aria-expanded="true"  role="button">
                                <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header One</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse11One" class="collapse accordion__body show" aria-labelledby="accord-11One" data-bs-parent="#accordion-eleven">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-11Two" data-bs-toggle="collapse" data-bs-target="#collapse11Two" aria-controls="collapse11Two"   aria-expanded="true"  role="button">
                                <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header Two</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse11Two" class="collapse accordion__body" aria-labelledby="accord-11Two" data-bs-parent="#accordion-eleven">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-11Three" data-bs-toggle="collapse" data-bs-target="#collapse11Three" aria-controls="collapse11Three"   aria-expanded="true"  role="button">
                                <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header Three</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse11Three" class="collapse accordion__body" aria-labelledby="accord-11Three" data-bs-parent="#accordion-eleven">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="roundedStylish-html" role="tabpanel" aria-labelledby="home-tab-10">
                    <div class="card-body pt-0 p-0 code-area">
        <pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-rounded-stylish accordion-bordered" id="accordion-eleven"&gt;
            &lt;div class="accordion-item"&gt;
                &lt;div class="accordion-header  rounded-lg" id="accord-11One" data-bs-toggle="collapse" data-bs-target="#collapse11One" aria-controls="collapse11One"   aria-expanded="true"  role="button"&gt;
                    &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
                &lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
                &lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
                &lt;/div&gt;
                &lt;div id="collapse11One" class="collapse accordion__body show" aria-labelledby="accord-11One" data-bs-parent="#accordion-eleven"&gt;
                &lt;div class="accordion-body-text"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="accordion-item"&gt;
                &lt;div class="accordion-header collapsed rounded-lg" id="accord-11Two" data-bs-toggle="collapse" data-bs-target="#collapse11Two" aria-controls="collapse11Two"   aria-expanded="true"  role="button"&gt;
                    &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
                &lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
                &lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
                &lt;/div&gt;
                &lt;div id="collapse11Two" class="collapse accordion__body" aria-labelledby="accord-11Two" data-bs-parent="#accordion-eleven"&gt;
                &lt;div class="accordion-body-text"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="accordion-item"&gt;
                &lt;div class="accordion-header collapsed rounded-lg" id="accord-11Three" data-bs-toggle="collapse" data-bs-target="#collapse11Three" aria-controls="collapse11Three"   aria-expanded="true"  role="button"&gt;
                    &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
                &lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
                &lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
                &lt;/div&gt;
                &lt;div id="collapse11Three" class="collapse accordion__body" aria-labelledby="accord-11Three" data-bs-parent="#accordion-eleven"&gt;
                &lt;div class="accordion-body-text"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;</code></pre>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Column ends -->
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card dz-card" id="accordion-twelve">
                <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                    <div>
                        <h4 class="card-title">Accordion gradient</h4>
                        <p class="m-0 subtitle">Add <code>accordion-gradient</code> class with <code>accordion</code></p>
                    </div>
                    <ul class="nav nav-tabs dzm-tabs" id="myTab-11" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="home-tab-11" data-bs-toggle="tab" data-bs-target="#gradient" type="button" role="tab" aria-selected="true">Preview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab-11" data-bs-toggle="tab" data-bs-target="#gradient-html" type="button" role="tab" aria-selected="false">HTML</button>
                        </li>
                    </ul>
                </div>
            <div class="tab-content" id="myTabContent-11">
                <div class="tab-pane fade show active" id="gradient" role="tabpanel" aria-labelledby="home-tab-11">
                    <div class="card-body pt-0">
                        <div class="accordion accordion-rounded-stylish accordion-gradient" >
                        <div class="accordion-item">
                            <div class="accordion-header  rounded-lg" id="accord-12One" data-bs-toggle="collapse" data-bs-target="#collapse12One" aria-controls="collapse12One"   aria-expanded="true"  role="button">
                                <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header One</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse12One" class="collapse accordion__body show" aria-labelledby="accord-12One" data-bs-parent="#accordion-twelve">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-12Two" data-bs-toggle="collapse" data-bs-target="#collapse12Two" aria-controls="collapse12Two"   aria-expanded="true"  role="button">
                                <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header Two</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse12Two" class="collapse accordion__body" aria-labelledby="accord-12Two" data-bs-parent="#accordion-twelve">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header collapsed rounded-lg" id="accord-12Three" data-bs-toggle="collapse" data-bs-target="#collapse12Three" aria-controls="collapse12Three"   aria-expanded="true"  role="button">
                                <span class="accordion-header-icon"></span>
                            <span class="accordion-header-text">Accordion Header Three</span>
                            <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse12Three" class="collapse accordion__body" aria-labelledby="accord-12Three" data-bs-parent="#accordion-twelve">
                            <div class="accordion-body-text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="gradient-html" role="tabpanel" aria-labelledby="home-tab-11">
                    <div class="card-body pt-0 p-0 code-area">
                        <pre class="mb-0"><code class="language-html">&lt;div class="accordion accordion-rounded-stylish accordion-gradient" id="accordion-twelve"&gt;
                        &lt;div class="accordion-item"&gt;
                            &lt;div class="accordion-header  rounded-lg" id="accord-12One" data-bs-toggle="collapse" data-bs-target="#collapse12One" aria-controls="collapse12One"   aria-expanded="true"  role="button"&gt;
                                &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
                            &lt;span class="accordion-header-text"&gt;Accordion Header One&lt;/span&gt;
                            &lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div id="collapse12One" class="collapse accordion__body show" aria-labelledby="accord-12One" data-bs-parent="#accordion-twelve"&gt;
                            &lt;div class="accordion-body-text"&gt;
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="accordion-item"&gt;
                            &lt;div class="accordion-header collapsed rounded-lg" id="accord-12Two" data-bs-toggle="collapse" data-bs-target="#collapse12Two" aria-controls="collapse12Two"   aria-expanded="true"  role="button"&gt;
                                &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
                            &lt;span class="accordion-header-text"&gt;Accordion Header Two&lt;/span&gt;
                            &lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div id="collapse12Two" class="collapse accordion__body" aria-labelledby="accord-12Two" data-bs-parent="#accordion-twelve"&gt;
                            &lt;div class="accordion-body-text"&gt;
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="accordion-item"&gt;
                            &lt;div class="accordion-header collapsed rounded-lg" id="accord-12Three" data-bs-toggle="collapse" data-bs-target="#collapse12Three" aria-controls="collapse12Three"   aria-expanded="true"  role="button"&gt;
                                &lt;span class="accordion-header-icon"&gt;&lt;/span&gt;
                            &lt;span class="accordion-header-text"&gt;Accordion Header Three&lt;/span&gt;
                            &lt;span class="accordion-header-indicator"&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div id="collapse12Three" class="collapse accordion__body" aria-labelledby="accord-12Three" data-bs-parent="#accordion-twelve"&gt;
                            &lt;div class="accordion-body-text"&gt;
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;</code></pre>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Column ends -->
    </div>
        </div>
            <div class="demo-right ">
                <div class="demo-right-inner navigation navbar" id="right-sidebar">
                    <h4 class="title">Accordion</h4>
                    <div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
                        <ul class="navbar-nav nav" id="menu-bar">
                            <li><a href="#accordion-one" 	class="scroll ">Default Accordion</a></li>
                            <li><a href="#accordion-two"	class="scroll ">Accordion Bordered</a></li>
                            <li><a href="#accordion-three"	class="scroll ">Accordion without space</a></li>
                            <li><a href="#accordion-four" 	class="scroll ">Accordion without space with border</a></li>
                            <li><a href="#accordion-five" 	class="scroll ">Accordion indicator in left position</a></li>
                            <li><a href="#accordion-six" 	class="scroll ">Accordion with icon</a></li>
                            <li><a href="#accordion-seven" 	class="scroll ">Accordion header background</a></li>
                            <li><a href="#accordion-eight" 	class="scroll ">Accordion solid background</a></li>
                            <li><a href="#accordion-nine" 	class="scroll ">Accordion active background</a></li>
                            <li><a href="#accordion-ten" 	class="scroll ">Accordion header shadow</a></li>
                            <li><a href="#accordion-eleven" class="scroll ">Accordion Rounded Stylish</a></li>
                            <li><a href="#accordion-twelve" class="scroll ">Accordion Gradient</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
