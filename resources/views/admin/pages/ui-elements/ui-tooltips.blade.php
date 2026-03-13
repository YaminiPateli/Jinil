@extends(backendView('layouts.app'))

@section('title', 'Ui Tooltips')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="bd-content">

            <h2 id="overview">Overview</h2>
            <p>Things to know when using the tooltip plugin:</p>
            <div class="alert alert-danger" role="alert">
                <strong>Tooltips</strong> for more bootstrao components <a
                    href="https://v5.getbootstrap.com/docs/5.0/components/tooltips/" target="_blank">Bootstrap Tooltips
                    documentation <i class="fa fa-external-link"></i></a>
            </div>
            <ul class="ps-3">
                <li>Tooltips rely on the 3rd party library <a href="https://popper.js.org/">Popper.js</a> for
                    positioning. You must include <a
                        href="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">popper.min.js</a>
                    before bootstrap.js or use <code>bootstrap.bundle.min.js</code> / <code>bootstrap.bundle.js</code>
                    which contains Popper.js in order for tooltips to work!</li>
                <li>Tooltips are opt-in for performance reasons, so <strong>you must initialize them yourself</strong>.
                </li>
                <li>Tooltips with zero-length titles are never displayed.</li>
                <li>Specify <code>container: 'body'</code> to avoid rendering problems in more complex components (like
                    our input groups, button groups, etc).</li>
                <li>Triggering tooltips on hidden elements will not work.</li>
                <li>Tooltips for <code>.disabled</code> or <code>disabled</code> elements must be triggered on a wrapper
                    element.</li>
                <li>When triggered from hyperlinks that span multiple lines, tooltips will be centered. Use
                    <code>white-space: nowrap;</code> on your <code>&lt;a&gt;</code>s to avoid this behavior.
                </li>
                <li>Tooltips must be hidden before their corresponding elements have been removed from the DOM.</li>
                <li>Tooltips can be triggered thanks to an element inside a shadow DOM.</li>
            </ul>
            <div class="card card-callout p-3">
                <span>The animation effect of this component is dependent on the <code>prefers-reduced-motion</code>
                    media query. See the <a
                        href="https://v5.getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced
                        motion section of our accessibility documentation</a>.</span>
            </div>

            <div class="border-top mt-5 pt-3">
                <h4 id="example-enable-tooltips-everywhere">Example: Enable tooltips everywhere</h4>
                <p>One way to initialize all tooltips on a page would be to select them by their
                    <code>data-bs-toggle</code> attribute:
                </p>
                <div class="highlight">
                    <pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">tooltipTriggerList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'[data-bs-toggle="tooltip"]'</span><span class="p">))</span>
    <span class="kd">var</span> <span class="nx">tooltipList</span> <span class="o">=</span> <span class="nx">tooltipTriggerList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">tooltipTriggerEl</span><span class="p">)</span> <span class="p">{</span>
        <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Tooltip</span><span class="p">(</span><span class="nx">tooltipTriggerEl</span><span class="p">)</span>
    <span class="p">})</span>
    </code></pre>
                </div>
            </div>

            <div class="border-top mt-5 pt-3">
                <h2 id="examples">Examples<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#"
                        href="#examples" style="padding-left: 0.375em;"></a></h2>
                <p>Hover over the links below to see tooltips:</p>
                <div class="card p-4 mb-3 shadow">
                    <p class="mb-0 text-muted">Tight pants next level keffiyeh <a href="#" data-bs-toggle="tooltip"
                            title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim
                        letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable
                        quinoa 8-bit american apparel <a href="#" data-bs-toggle="tooltip" title="Another tooltip">have
                            a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.
                        Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic
                        artisan <a href="#" data-bs-toggle="tooltip" title="Another one here too">whatever keytar</a>,
                        scenester farm-to-table banksy Austin <a href="#" data-bs-toggle="tooltip"
                            title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
                    </p>
                </div>
                <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.</p>
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
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Tooltip on right">Tooltip on right</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Tooltip on left">Tooltip on left</button>
                            </div>
                            <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
                                <pre class="language-html m-0" data-lang="html">
    <code>&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;Tooltip on top&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;Tooltip on right&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;Tooltip on bottom&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;Tooltip on left&lt;/button&gt;</code>
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
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
@endpush

@push('modals')
@endpush