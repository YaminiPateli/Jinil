@extends(backendView('layouts.app'))

@section('title', 'Ui Pagination')

@section('content')

<div class="container">
    <div class="col-12">
        <div class="bd-content">

            <h2 id="overview">Overview</h2>
            <p>We use a large block of connected links for our pagination, making links hard to miss and easily
                scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen
                readers can announce the number of available links. Use a wrapping <code>&lt;nav&gt;</code> element to
                identify it as a navigation section to screen readers and other assistive technologies.</p>
            <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a
                descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For
                example, if the pagination component is used to navigate between a set of search results, an appropriate
                label could be <code>aria-label="Search results pages"</code>.</p>
            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview1"
                        role="tab">Preview</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML1" role="tab">HTML</a></li>
            </ul>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-Preview1" role="tabpanel">
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
                            <pre class="language-html m-0" data-lang="html">
    <code>&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
        &lt;ul class=&quot;pagination&quot;&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h5 id="working-with-icons">Working with icons</h5>
                <p>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide
                    proper screen reader support with <code>aria</code> attributes.</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview2"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML2" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous"><span
                                                    aria-hidden="true">&laquo;</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next"><span
                                                    aria-hidden="true">&raquo;</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="nav-HTML2" role="tabpanel">
                                <pre class="language-html m-0" data-lang="html">
    <code>&lt;nav aria-label=&quot;Page navigation&quot;&gt;
        &lt;ul class=&quot;pagination&quot;&gt;
            &lt;li class=&quot;page-item&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code>
    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h5 id="disabled-and-active-states">Disabled and active states</h5>
                <p>Pagination links are customizable for different circumstances. Use <code>.disabled</code> for links
                    that appear un-clickable and <code>.active</code> to indicate the current page.</p>
                <p>While the <code>.disabled</code> class uses <code>pointer-events: none</code> to <em>try</em> to
                    disable the link functionality of <code>&lt;a&gt;</code>s, that CSS property is not yet standardized
                    and doesn’t account for keyboard navigation. As such, you should always add
                    <code>tabindex="-1"</code> on disabled links and use custom JavaScript to fully disable their
                    functionality.
                </p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview3"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML3" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-Preview3" role="tabpanel">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2 <span
                                                    class="visually-hidden">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code>,
                                    or omit the anchor in the case of the prev/next arrows, to remove click
                                    functionality and prevent keyboard focus while retaining intended styles.</p>
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">2<span
                                                    class="visually-hidden">(current)</span></span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="nav-HTML3" role="tabpanel">
                                <pre class="language-html m-0" data-lang="html">
    <code>&lt;nav aria-label=&quot;...&quot;&gt;
        &lt;ul class=&quot;pagination&quot;&gt;
            &lt;li class=&quot;page-item disabled&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;

    &lt;nav aria-label=&quot;...&quot;&gt;
        &lt;ul class=&quot;pagination&quot;&gt;
            &lt;li class=&quot;page-item disabled&quot;&gt;
                &lt;span class=&quot;page-link&quot;&gt;Previous&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
                &lt;span class=&quot;page-link&quot;&gt;2&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code>
    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h5 id="sizing">Sizing</h5>
                <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code>
                    for additional sizes.</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview4"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML4" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-Preview4" role="tabpanel">
                                <!-- pagination: lg -->
                                <nav aria-label="...">
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">1<span
                                                    class="visually-hidden">(current)</span></span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </nav>
                                <!-- pagination: md -->
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">1<span
                                                    class="visually-hidden">(current)</span></span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </nav>

                                <!-- pagination: sm -->
                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">1<span
                                                    class="visually-hidden">(current)</span></span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="nav-HTML4" role="tabpanel">
                                <pre class="language-html m-0" data-lang="html">
    <code>&lt;!-- pagination: lg --&gt;
        &lt;nav aria-label=&quot;...&quot;&gt;
        &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
            &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
                &lt;span class=&quot;page-link&quot;&gt;1&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;

    &lt;!-- pagination: md --&gt;
    &lt;nav aria-label=&quot;...&quot;&gt;
        &lt;ul class=&quot;pagination&quot;&gt;
            &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
                &lt;span class=&quot;page-link&quot;&gt;1&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;

    &lt;!-- pagination: sm --&gt;
    &lt;nav aria-label=&quot;...&quot;&gt;
        &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
            &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
                &lt;span class=&quot;page-link&quot;&gt;1&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code>
    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h5 id="alignment">Alignment</h5>
                <p>Change the alignment of pagination components with <a
                        href="https://v5.getbootstrap.com/docs/5.0/utilities/flex/">flexbox utilities</a>.</p>
                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview5"
                            role="tab">Preview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML5" role="tab">HTML</a>
                    </li>
                </ul>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-Preview5" role="tabpanel">
                                <!-- pagination: left -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <!-- pagination: center -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <!-- pagination: right -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
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
                            <div class="tab-pane fade" id="nav-HTML5" role="tabpanel">
                                <pre class="language-html m-0" data-lang="html">
    <code>&lt;!-- pagination: left --&gt;
    &lt;nav aria-label=&quot;Page navigation&quot;&gt;
        &lt;ul class=&quot;pagination justify-content-start&quot;&gt;
            &lt;li class=&quot;page-item disabled&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;

    &lt;!-- pagination: center --&gt;
    &lt;nav aria-label=&quot;Page navigation&quot;&gt;
        &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
            &lt;li class=&quot;page-item disabled&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;

    &lt;!-- pagination: right --&gt;
    &lt;nav aria-label=&quot;Page navigation&quot;&gt;
        &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
            &lt;li class=&quot;page-item disabled&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;page-item&quot;&gt;
                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;</code>
    </pre>
                            </div>
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