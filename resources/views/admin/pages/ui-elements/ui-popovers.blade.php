@extends(backendView('layouts.app'))

@section('title', 'Ui Popovers')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="bd-content">

            <h2 id="overview">Overview</h2>
            <p>Things to know when using the popover plugin:</p>
            <div class="alert alert-danger" role="alert">
                <strong>Popovers</strong> for more bootstrao components <a
                    href="https://v5.getbootstrap.com/docs/5.0/components/popovers/" target="_blank">Bootstrap Popovers
                    documentation <i class="fa fa-external-link"></i></a>
            </div>
            <ul class="ps-3">
                <li>Popovers rely on the 3rd party library <a href="https://popper.js.org/">Popper.js</a> for
                    positioning. You must include <a
                        href="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">popper.min.js</a>
                    before bootstrap.js or use <code>bootstrap.bundle.min.js</code> / <code>bootstrap.bundle.js</code>
                    which contains Popper.js in order for popovers to work!</li>
                <li>Popovers require the <a href="https://v5.getbootstrap.com/docs/5.0/components/tooltips/">tooltip
                        plugin</a> as a dependency.</li>
                <li>Popovers are opt-in for performance reasons, so <strong>you must initialize them yourself</strong>.
                </li>
                <li>Zero-length <code>title</code> and <code>content</code> values will never show a popover.</li>
                <li>Specify <code>container: 'body'</code> to avoid rendering problems in more complex components (like
                    our input groups, button groups, etc).</li>
                <li>Triggering popovers on hidden elements will not work.</li>
                <li>Popovers for <code>.disabled</code> or <code>disabled</code> elements must be triggered on a wrapper
                    element.</li>
                <li>When triggered from anchors that wrap across multiple lines, popovers will be centered between the
                    anchors' overall width. Use <code>.text-nowrap</code> on your <code>&lt;a&gt;</code>s to avoid this
                    behavior.</li>
                <li>Popovers must be hidden before their corresponding elements have been removed from the DOM.</li>
                <li>Popovers can be triggered thanks to an element inside a shadow DOM.</li>
            </ul>
            <div class="card card-callout p-3">
                <span>The animation effect of this component is dependent on the <code>prefers-reduced-motion</code>
                    media query. See the <a
                        href="https://v5.getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced
                        motion section of our accessibility documentation</a>.</span>
            </div>

            <h4 id="example-enable-popovers-everywhere" class="mt-5">Example: Enable popovers everywhere</h4>
            <p>One way to initialize all popovers on a page would be to select them by their <code>data-bs-toggle</code>
                attribute:</p>
            <div class="highlight">
                <pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">popoverTriggerList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'[data-bs-toggle="popover"]'</span><span class="p">))</span>
    <span class="kd">var</span> <span class="nx">popoverList</span> <span class="o">=</span> <span class="nx">popoverTriggerList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">popoverTriggerEl</span><span class="p">)</span> <span class="p">{</span>
        <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nx">popoverTriggerEl</span><span class="p">)</span>
    <span class="p">})</span>
    </code></pre>
            </div>

            <h4 class="mt-5">Example: Using the <code>container</code> option</h4>
            <p>When you have some styles on a parent element that interfere with a popover, you’ll want to specify a
                custom <code>container</code> so that the popover’s HTML appears within that element instead.</p>
            <div class="highlight">
                <pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">popover</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'.example-popover'</span><span class="p">),</span> <span class="p">{</span>
    <span class="nx">container</span><span class="o">:</span> <span class="s1">'body'</span>
    <span class="p">})</span>
    </code></pre>
            </div>

            <h4 class="mt-5">Example</h4>
            <div class="card mb-3">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title"
                        data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle
                        popover</button>
                    <pre class="language-html" data-lang="html">
    <code>&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-danger&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Popover title&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;Click to toggle popover&lt;/button&gt;</code>
    </pre>
                </div>
            </div>

            <h5>Four directions</h5>
            <div class="card mb-3">
                <div class="card-body">
                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top"
                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on top
                    </button>

                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="right"
                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on right
                    </button>

                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="bottom"
                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on bottom
                    </button>

                    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="left"
                        data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on left
                    </button>

                    <pre class="language-html" data-lang="html">
    <code>&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on top
    &lt;/button&gt;

    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on right
    &lt;/button&gt;

    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on bottom
    &lt;/button&gt;

    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on left
    &lt;/button&gt;</code>
    </pre>
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
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})
</script>
@endpush

@push('modals')
@endpush