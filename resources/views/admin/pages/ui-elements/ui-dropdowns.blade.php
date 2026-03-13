@extends(backendView('layouts.app'))

@section('title', 'Ui Dropdowns')

@section('content')

<div class="container">
    <div class="col-12">
        <div class="bd-content">

            <div class="alert alert-danger" role="alert">
                <strong>Dropdowns</strong> for more bootstrao components <a
                    href="https://getbootstrap.com/docs/4.5/components/dropdowns/" target="_blank">Bootstrap Dropdowns
                    documentation <i class="fa fa-external-link"></i></a>
            </div>


            <h2 id="overview">Overview</h2>
            <p>Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made
                interactive with the included Bootstrap dropdown JavaScript plugin. They’re toggled by clicking, not by
                hovering; this is <a href="https://markdotto.com/2012/02/27/bootstrap-explained-dropdowns/">an
                    intentional design decision</a>.</p>
            <p>Dropdowns are built on a third party library, <a href="https://popper.js.org/">Popper.js</a>, which
                provides dynamic positioning and viewport detection. Be sure to include <a
                    href="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">popper.min.js</a> before
                Bootstrap’s JavaScript or use <code>bootstrap.bundle.min.js</code> / <code>bootstrap.bundle.js</code>
                which contains Popper.js. Popper.js isn’t used to position dropdowns in navbars though as dynamic
                positioning isn’t required.</p>

            <div class="border-top mt-5 pt-3">
                <h3 id="single-button">Single button</h3>
                <p>Any single <code>.btn</code> can be turned into a dropdown toggle with some markup changes. Here’s
                    how you can put them to work with either <code>&lt;button&gt;</code> elements:</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview1"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML1" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-Preview1" role="tabpanel">
                                <!-- dropdown: primary -->
                                <div class="dropdown d-inline-flex m-1">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Primary Dropdown
                                    </button>
                                    <ul class="dropdown-menu border-0 shadow p-3">
                                        <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- dropdown: outline primary -->
                                <div class="dropdown d-inline-flex m-1">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                        Primary Outline Dropdown
                                    </button>
                                    <ul class="dropdown-menu border-0 shadow p-3">
                                        <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- dropdown: dark -->
                                <div class="dropdown d-inline-flex m-1">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dark Dropdown
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark shadow p-3">
                                        <li><a class="dropdown-item py-2 rounded active" href="#">Action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
                                <pre class="language-html" data-lang="html">
    <code>&lt;!-- dropdown: primary --&gt;
    &lt;div class=&quot;dropdown&quot;&gt;
        &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Primary Dropdown
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow p-3&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;

    &lt;!-- dropdown: outline primary --&gt;
    &lt;div class=&quot;dropdown&quot;&gt;
        &lt;button class=&quot;btn btn-outline-primary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton3&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Primary Outline Dropdown
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow p-3&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;

    &lt;!-- dropdown: dark --&gt;
    &lt;div class=&quot;dropdown&quot;&gt;
        &lt;button class=&quot;btn btn-dark dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton2&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Dark Dropdown
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu dropdown-menu-dark shadow p-3&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded active&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;</code>
    </pre>
                            </div>
                        </div>
                    </div>
                </div>

                <p>And with <code>&lt;a&gt;</code> elements:</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview2"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML2" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body tab-content">
                        <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                            <!-- dropdown: primary -->
                            <div class="dropdown d-inline-flex m-1">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Primary Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <!-- dropdown: outline primary -->
                            <div class="dropdown d-inline-flex m-1">
                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Primary Outline Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <!-- dropdown: dark -->
                            <div class="dropdown d-inline-flex m-1">
                                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink3"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dark Dropdown
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-HTML2" role="tabpanel">
                            <pre class="language-html" data-lang="html">
    <code>&lt;!-- dropdown: primary --&gt;
    &lt;div class=&quot;dropdown&quot;&gt;
        &lt;a class=&quot;btn btn-primary dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink1&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Primary Dropdown
        &lt;/a&gt;
        &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;

    &lt;!-- dropdown: outline primary --&gt;
    &lt;div class=&quot;dropdown&quot;&gt;
        &lt;a class=&quot;btn btn-outline-primary dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink2&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Primary Outline Dropdown
        &lt;/a&gt;
        &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;

    &lt;!-- dropdown: dark --&gt;
    &lt;div class=&quot;dropdown&quot;&gt;
        &lt;a class=&quot;btn btn-dark dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink3&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Dark Dropdown
        &lt;/a&gt;
        &lt;ul class=&quot;dropdown-menu dropdown-menu-dark&quot; aria-labelledby=&quot;dropdownMenuButton2&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;</code>
    </pre>
                        </div>
                    </div>
                </div>

                <p>The best part is you can do this with any button variant, too:</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview3"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML3" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body tab-content">
                        <div class="tab-pane fade show active" id="nav-Preview3" role="tabpanel">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">Primary</button>
                                <ul class="dropdown-menu border-0 shadow bg-primary">
                                    <li><a class="dropdown-item text-light" href="#">Action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">Success</button>
                                <ul class="dropdown-menu border-0 shadow bg-success">
                                    <li><a class="dropdown-item text-light" href="#">Action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">Info</button>
                                <ul class="dropdown-menu border-0 shadow bg-info">
                                    <li><a class="dropdown-item text-light" href="#">Action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">Warning</button>
                                <ul class="dropdown-menu border-0 shadow bg-warning">
                                    <li><a class="dropdown-item text-light" href="#">Action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">Danger</button>
                                <ul class="dropdown-menu border-0 shadow bg-danger">
                                    <li><a class="dropdown-item text-light" href="#">Action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                                    <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                        </div>
                        <div class="tab-pane fade" id="nav-HTML3" role="tabpanel">
                            <pre class="language-html" data-lang="html">
    <code>&lt;div class=&quot;btn-group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Primary&lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow bg-primary&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Secondary&lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Success&lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow bg-success&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Info&lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow bg-info&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Warning&lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow bg-warning&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Danger&lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow bg-danger&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item text-light&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h3 id="split-button">Split button</h3>
                <p>Similarly, create split button dropdowns with virtually the same markup as single button dropdowns,
                    but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown
                    caret.</p>
                <p>We use this extra class to reduce the horizontal <code>padding</code> on either side of the caret by
                    25% and remove the <code>margin-left</code> that’s added for regular button dropdowns. Those extra
                    changes keep the caret centered in the split button and provide a more appropriately sized hit area
                    next to the main button.</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview4"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML4" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body tab-content">
                        <div class="tab-pane fade show active" id="nav-Preview4" role="tabpanel">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu border-0 shadow py-3 px-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu border-0 shadow py-3 px-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu border-0 shadow py-3 px-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu border-0 shadow py-3 px-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu border-0 shadow py-3 px-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu border-0 shadow py-3 px-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                        </div>
                        <div class="tab-pane fade" id="nav-HTML4" role="tabpanel">
                            <pre class="language-html" data-lang="html">
    <code>&lt;div class=&quot;btn-group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu border-0 shadow py-3 px-2&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item py-2 rounded&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h3 id="split-button1">Sizing</h3>
                <p>Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview5"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML5" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body tab-content">
                        <div class="tab-pane fade show active" id="nav-Preview5" role="tabpanel">
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Large button
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div><!-- /btn-group -->
                                <div class="btn-group ms-2">
                                    <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
                                    <button type="button"
                                        class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div><!-- /btn-group -->
                            </div><!-- /btn-toolbar -->
                            <div class="btn-toolbar py-2" role="toolbar">
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Small button
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div><!-- /btn-group -->
                                <div class="btn-group ms-2">
                                    <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
                                    <button type="button"
                                        class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div><!-- /btn-group -->
                            </div><!-- /btn-toolbar -->
                        </div>
                        <div class="tab-pane fade" id="nav-HTML5" role="tabpanel">
                            <pre class="language-html" data-lang="html">
    <code>&lt;div class=&quot;btn-group&quot;&gt;
        &lt;button class=&quot;btn btn-secondary btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Large button
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group ms-2&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-secondary&quot;&gt;Large split button&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
        &lt;button class=&quot;btn btn-secondary btn-sm dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Small button
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;
    &lt;div class=&quot;btn-group ms-2&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot;&gt;Small split button&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h3 id="text">Text</h3>
                <p>Place any freeform text within a dropdown menu with text and use <a
                        href="https://v5.getbootstrap.com/docs/5.0/utilities/spacing/">spacing utilities</a>. Note that
                    you’ll likely need additional sizing styles to constrain the menu width.</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview6"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML6" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body tab-content">
                        <div class="tab-pane fade show active" id="nav-Preview6" role="tabpanel">
                            <!-- text dropdown-menu-->
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Text Dropdown with div
                                </button>
                                <div class="dropdown-menu p-4 text-muted border-0 shadow" style="max-width: 200px;">
                                    <p>Some example text that's free-flowing within the dropdown menu.</p>
                                    <p class="mb-0">And this is more example text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-HTML6" role="tabpanel">
                            <pre class="language-html" data-lang="html">
    <code>&lt;div class=&quot;dropdown&quot;&gt;
        &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton5&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Dropdown button
        &lt;/button&gt;
        &lt;div class=&quot;dropdown-menu p-4 text-muted border-0 shadow&quot; style=&quot;max-width: 200px;&quot;&gt;
            &lt;p&gt;Some example text that's free-flowing within the dropdown menu.&lt;/p&gt;
            &lt;p class=&quot;mb-0&quot;&gt;And this is more example text.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h3 id="forms">Forms</h3>
                <p>Put a form within a dropdown menu, or make it into a dropdown menu, and use <a
                        href="https://v5.getbootstrap.com/docs/5.0/utilities/spacing/">margin or padding utilities</a>
                    to give it the negative space you require.</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview7"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML7" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body tab-content">
                        <div class="tab-pane fade show active" id="nav-Preview7" role="tabpanel">
                            <!-- dropdown-menu-->
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Login Forms Dropdown
                                </button>
                                <div class="dropdown-menu p-3 text-muted border-0 shadow" style="width: 320px;">
                                    <form class="px-2 py-2">
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormEmail1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                                placeholder="email@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormPassword1"
                                                class="form-label">Password</label>
                                            <input type="password" class="form-control"
                                                id="exampleDropdownFormPassword1" placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                <label class="form-check-label" for="dropdownCheck">Remember me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">New around here? Sign up</a>
                                    <a class="dropdown-item" href="#">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-HTML7" role="tabpanel">
                            <pre class="language-html" data-lang="html">
    <code>&lt;!-- dropdown-menu--&gt;
    &lt;div class=&quot;dropdown&quot;&gt;
        &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton6&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Login Forms Dropdown
        &lt;/button&gt;
        &lt;div class=&quot;dropdown-menu p-3 text-muted border-0 shadow&quot; style=&quot;width: 320px;&quot;&gt;
            &lt;form class=&quot;px-2 py-2&quot;&gt;
                &lt;div class=&quot;mb-3&quot;&gt;
                    &lt;label for=&quot;exampleDropdownFormEmail1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
                    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail1&quot; placeholder=&quot;email@example.com&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;mb-3&quot;&gt;
                    &lt;label for=&quot;exampleDropdownFormPassword1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormPassword1&quot; placeholder=&quot;Password&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;mb-3&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;dropdownCheck&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot; for=&quot;dropdownCheck&quot;&gt;Remember me&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
            &lt;/form&gt;
            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;New around here? Sign up&lt;/a&gt;
            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Forgot password?&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- Plugin css -->
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/prism/prism.css') !!}">
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<!-- Prism js file please do not add in your project -->
<script src="{!! asset('public/backend/dist/assets/plugin/prism/prism.js') !!}"></script>
@endpush

@push('custom_scripts')
@endpush

@push('modals')
@endpush