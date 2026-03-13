@extends(backendView('layouts.app'))

@section('title', 'Ui Collapse')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-sm-12">

                <h2 id="how-it-works">How it works</h2>
                <p>The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as
                    triggers that are mapped to specific elements you toggle. Collapsing an element will animate the
                    <code>height</code> from its current value to <code>0</code>. Given how CSS handles animations, you
                    cannot use <code>padding</code> on a <code>.collapse</code> element. Instead, use the class as an
                    independent wrapping element.
                </p>
                <div class="card card-callout mb-3">
                    <div class="card-body">
                        The animation effect of this component is dependent on the <code>prefers-reduced-motion</code>
                        media query. See the <a
                            href="https://v5.getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced
                            motion section of our accessibility documentation</a>.
                    </div>
                </div>

                <h2 id="example">Example</h2>
                <p>Click the buttons below to show and hide another element via class changes:</p>
                <ul class="ps-3">
                    <li><code>.collapse</code> hides content</li>
                    <li><code>.collapsing</code> is applied during transitions</li>
                    <li><code>.collapse.show</code> shows content</li>
                </ul>
                <p>You can use a link with the <code>href</code> attribute, or a button with the
                    <code>data-bs-target</code> attribute. In both cases, the <code>data-bs-toggle="collapse"</code> is
                    required.
                </p>
                <div class="bd-example mb-5">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                        </a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                            ea proident.
                        </div>
                    </div>
                    <pre>
    <code class="language-html" data-lang="html">&lt;p&gt;
        &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
            Link with href
        &lt;/a&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
            Button with data-bs-target
        &lt;/button&gt;
    &lt;/p&gt;
    &lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
        &lt;div class=&quot;card card-body&quot;&gt;
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                </div>

                <h2 id="multiple-targets">Multiple targets</h2>
                <p>A <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide multiple elements by
                    referencing them with a selector in its <code>href</code> or <code>data-bs-target</code> attribute.
                    Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide an element if they
                    each reference it with their <code>href</code> or <code>data-bs-target</code> attribute</p>
                <div class="bd-example mb-5">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                            aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#multiCollapseExample2" aria-expanded="false"
                            aria-controls="multiCollapseExample2">Toggle second element</button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                    </div>
                    <pre>
    <code class="language-html" data-lang="html">&lt;p&gt;
        &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
    &lt;/p&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col&quot;&gt;
            &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
                &lt;div class=&quot;card card-body&quot;&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col&quot;&gt;
            &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
                &lt;div class=&quot;card card-body&quot;&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                </div>

                <h2 id="accordion-example">Accordion example</h2>
                <p>Using the <a href="https://v5.getbootstrap.com/docs/5.0/components/card/">card</a> component, you can
                    extend the default collapse behavior to create an accordion. To properly achieve the accordion
                    style, be sure to use <code>.accordion</code> as a wrapper.</p>
                <div class="bd-example mb-5">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion"</span> <span class="na">id</span><span class="o">=</span><span class="s">"accordionExample"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-item"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h2</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-header"</span> <span class="na">id</span><span class="o">=</span><span class="s">"headingOne"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-button"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"collapse"</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">"#collapseOne"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"true"</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">"collapseOne"</span><span class="p">&gt;</span>
            Accordion Item #1
        <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"collapseOne"</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-collapse collapse show"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"headingOne"</span> <span class="na">data-bs-parent</span><span class="o">=</span><span class="s">"#accordionExample"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-body"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>This is the first item's accordion body.<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>.accordion-body<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span>, though the transition does limit overflow.
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-item"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h2</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-header"</span> <span class="na">id</span><span class="o">=</span><span class="s">"headingTwo"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-button collapsed"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"collapse"</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">"#collapseTwo"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"false"</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">"collapseTwo"</span><span class="p">&gt;</span>
            Accordion Item #2
        <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"collapseTwo"</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-collapse collapse"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"headingTwo"</span> <span class="na">data-bs-parent</span><span class="o">=</span><span class="s">"#accordionExample"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-body"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>This is the second item's accordion body.<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>.accordion-body<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span>, though the transition does limit overflow.
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-item"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h2</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-header"</span> <span class="na">id</span><span class="o">=</span><span class="s">"headingThree"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-button collapsed"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"collapse"</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">"#collapseThree"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"false"</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">"collapseThree"</span><span class="p">&gt;</span>
            Accordion Item #3
        <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"collapseThree"</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-collapse collapse"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"headingThree"</span> <span class="na">data-bs-parent</span><span class="o">=</span><span class="s">"#accordionExample"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-body"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>This is the third item's accordion body.<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>.accordion-body<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span>, though the transition does limit overflow.
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                </div>

                <h2 id="accessibility">Accessibility</h2>
                <p>Be sure to add <code>aria-expanded</code> to the control element. This attribute explicitly conveys
                    the current state of the collapsible element tied to the control to screen readers and similar
                    assistive technologies. If the collapsible element is closed by default, the attribute on the
                    control element should have a value of <code>aria-expanded="false"</code>. If you’ve set the
                    collapsible element to be open by default using the <code>show</code> class, set
                    <code>aria-expanded="true"</code> on the control instead. The plugin will automatically toggle this
                    attribute on the control based on whether or not the collapsible element has been opened or closed
                    (via JavaScript, or because the user triggered another control element also tied to the same
                    collapsible element). If the control element’s HTML element is not a button (e.g., an
                    <code>&lt;a&gt;</code> or <code>&lt;div&gt;</code>), the attribute <code>role="button"</code> should
                    be added to the element.
                </p>
                <p>If your control element is targeting a single collapsible element – i.e. the
                    <code>data-bs-target</code> attribute is pointing to an <code>id</code> selector – you should add
                    the <code>aria-controls</code> attribute to the control element, containing the <code>id</code> of
                    the collapsible element. Modern screen readers and similar assistive technologies make use of this
                    attribute to provide users with additional shortcuts to navigate directly to the collapsible element
                    itself.
                </p>
                <p>Note that Bootstrap’s current implementation does not cover the various <em>optional</em> keyboard
                    interactions described in the <a
                        href="https://www.w3.org/TR/wai-aria-practices-1.1/#accordion">WAI-ARIA Authoring Practices 1.1
                        accordion pattern</a> - you will need to include these yourself with custom JavaScript.</p>
                <h2 id="usage">Usage</h2>
                <p>The collapse plugin utilizes a few classes to handle the heavy lifting:</p>
                <ul class="ps-3">
                    <li><code>.collapse</code> hides the content</li>
                    <li><code>.collapse.show</code> shows the content</li>
                    <li><code>.collapsing</code> is added when the transition starts, and removed when it finishes</li>
                </ul>
                <p>These classes can be found in <code>_transitions.scss</code>.</p>
                <h3 id="via-data-attributes">Via data attributes</h3>
                <p>Just add <code>data-bs-toggle="collapse"</code> and a <code>data-bs-target</code> to the element to
                    automatically assign control of one or more collapsible elements. The <code>data-bs-target</code>
                    attribute accepts a CSS selector to apply the collapse to. Be sure to add the class
                    <code>collapse</code> to the collapsible element. If you’d like it to default open, add the
                    additional class <code>show</code>.
                </p>
                <p>To add accordion-like group management to a collapsible area, add the data attribute
                    <code>data-parent="#selector"</code>. Refer to the demo to see this in action.
                </p>

                <h3 id="via-javascript">Via JavaScript</h3>
                <p>Enable manually with:</p>
                <div class="bd-example mb-5">
                    <pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">collapseElementList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'.collapse'</span><span class="p">))</span>
    <span class="kd">var</span> <span class="nx">collapseList</span> <span class="o">=</span> <span class="nx">collapseElementList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">collapseEl</span><span class="p">)</span> <span class="p">{</span>
        <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Collapse</span><span class="p">(</span><span class="nx">collapseEl</span><span class="p">)</span>
    <span class="p">})</span>
    </code></pre>
                </div>

                <h3 id="options">Options</h3>
                <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name
                    to <code>data-</code>, as in <code>data-parent=""</code>.</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Name</th>
                            <th style="width: 50px;">Type</th>
                            <th style="width: 50px;">Default</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>parent</code></td>
                            <td>selector | jQuery object | DOM element </td>
                            <td><code>false</code></td>
                            <td>If parent is provided, then all collapsible elements under the specified parent will be
                                closed when this collapsible item is shown. (similar to traditional accordion behavior -
                                this is dependent on the <code>card</code> class). The attribute has to be set on the
                                target collapsible area.</td>
                        </tr>
                        <tr>
                            <td><code>toggle</code></td>
                            <td>boolean</td>
                            <td><code>true</code></td>
                            <td>Toggles the collapsible element on invocation</td>
                        </tr>
                    </tbody>
                </table>

                <h3 id="methods">Methods</h3>
                <div class="card card-callout mb-3">
                    <div class="card-body">
                        <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                        <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>.
                            They return to the caller as soon as the transition is started but <strong>before it
                                ends</strong>. In addition, a method call on a <strong>transitioning component will be
                                ignored</strong>.</p>
                        <p><a href="/docs/5.0/getting-started/javascript/#asynchronous-functions-and-transitions">See
                                our JavaScript documentation for more information</a>.</p>
                    </div>
                </div>

                <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.</p>
                <p>You can create a collapse instance with the constructor, for example:</p>
                <div class="bd-example mb-5">
                    <pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCollapse</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myCollapse'</span><span class="p">)</span>
    <span class="kd">var</span> <span class="nx">bsCollapse</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Collapse</span><span class="p">(</span><span class="nx">myCollapse</span><span class="p">,</span> <span class="p">{</span>
        <span class="nx">toggle</span><span class="o">:</span> <span class="kc">false</span>
    <span class="p">})</span>
    </code></pre>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>toggle</code></td>
                            <td>Toggles a collapsible element to shown or hidden. <strong>Returns to the caller before
                                    the collapsible element has actually been shown or hidden</strong> (i.e. before the
                                <code>shown.bs.collapse</code> or <code>hidden.bs.collapse</code> event occurs).
                            </td>
                        </tr>
                        <tr>
                            <td><code>show</code></td>
                            <td>Shows a collapsible element. <strong>Returns to the caller before the collapsible
                                    element has actually been shown</strong> (e.g., before the
                                <code>shown.bs.collapse</code> event occurs).
                            </td>
                        </tr>
                        <tr>
                            <td><code>hide</code></td>
                            <td>Hides a collapsible element. <strong>Returns to the caller before the collapsible
                                    element has actually been hidden</strong> (e.g., before the
                                <code>hidden.bs.collapse</code> event occurs).
                            </td>
                        </tr>
                        <tr>
                            <td><code>dispose</code></td>
                            <td>Destroys an element's collapse.</td>
                        </tr>
                        <tr>
                            <td><code>getInstance</code></td>
                            <td>Static method which allows you to get the collapse instance associated with a DOM
                                element.</td>
                        </tr>
                    </tbody>
                </table>

                <h3 id="events">Events</h3>
                <p>Bootstrap’s collapse class exposes a few events for hooking into collapse functionality.</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 150px;">Event type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>show.bs.collapse</code></td>
                            <td>This event fires immediately when the <code>show</code> instance method is called.</td>
                        </tr>
                        <tr>
                            <td><code>shown.bs.collapse</code></td>
                            <td>This event is fired when a collapse element has been made visible to the user (will wait
                                for CSS transitions to complete).</td>
                        </tr>
                        <tr>
                            <td><code>hide.bs.collapse</code></td>
                            <td>This event is fired immediately when the <code>hide</code> method has been called.</td>
                        </tr>
                        <tr>
                            <td><code>hidden.bs.collapse</code></td>
                            <td>This event is fired when a collapse element has been hidden from the user (will wait for
                                CSS transitions to complete).</td>
                        </tr>
                    </tbody>
                </table>

                <div class="bd-example mb-5">
                    <pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCollapsible</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myCollapsible'</span><span class="p">)</span>
    <span class="nx">myCollapsible</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'hidden.bs.collapse'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
        <span class="c1">// do something...
    </span><span class="c1"></span><span class="p">})</span>
    </code></pre>
                </div>

            </div>
            <div class="col-lg-3 col-sm-12 d-none d-sm-block">
                <div class="sticky-lg-top">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav class="color-bg-200 py-3">
                        <ul class="side-navbar">
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#example">Example</a></li>
                            <li><a href="#multiple-targets">Multiple targets</a></li>
                            <li><a href="#accordion-example">Accordion example</a></li>
                            <li><a href="#accessibility">Accessibility</a></li>
                            <li><a href="#usage">Usage</a>
                                <ul>
                                    <li><a href="#via-data-attributes">Via data attributes</a></li>
                                    <li><a href="#via-javascript">Via JavaScript</a></li>
                                    <li><a href="#options">Options</a></li>
                                    <li><a href="#methods">Methods</a></li>
                                    <li><a href="#events">Events</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> <!-- Row end  -->
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