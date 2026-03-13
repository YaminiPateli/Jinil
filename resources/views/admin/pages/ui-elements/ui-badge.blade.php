@extends(backendView('layouts.app'))

@section('title', 'Ui Badge')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="bd-content">

            <h2 id="example">Example</h2>
            <p>Badges scale to match the size of the immediate parent element by using relative font sizing and
                <code>em</code> units. As of v5, badges no longer have focus or hover styles for links.
            </p>
            <div class="bd-example mb-5">
                <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                <h5>Example heading <span class="badge bg-secondary">New</span></h5>
                <h6>Example heading <span class="badge bg-secondary">New</span></h6>
                <pre>
    <code class="language-html" data-lang="html">&lt;h1&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
    &lt;h2&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
    &lt;h3&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
    &lt;h4&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
    &lt;h5&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
    &lt;h6&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;</code>
    </pre>
            </div> <!-- example end  -->

            <p>Badges can be used as part of links or buttons to provide a counter.</p>
            <div class="bd-example mb-5">
                <button type="button" class="btn btn-primary">
                    Notifications <span class="badge bg-secondary">4</span>
                </button>
                <pre>
    <code class="language-html" data-lang="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
        Notifications &lt;span class=&quot;badge bg-secondary&quot;&gt;4&lt;/span&gt;
    &lt;/button&gt;</code>
    </pre>
            </div> <!-- example end  -->

            <p>Note that depending on how they are used, badges may be confusing for users of screen readers and similar
                assistive technologies. While the styling of badges provides a visual cue as to their purpose, these
                users will simply be presented with the content of the badge. Depending on the specific situation, these
                badges may seem like random additional words or numbers at the end of a sentence, link, or button.</p>
            <p>Unless the context is clear (as with the “Notifications” example, where it is understood that the “4” is
                the number of notifications), consider including additional context with a visually hidden piece of
                additional text.</p>
            <div class="bd-example mb-5">
                <button type="button" class="btn btn-primary">
                    Profile <span class="badge bg-secondary">9</span>
                    <span class="visually-hidden">unread messages</span>
                </button>
                <pre>
    <code class="language-html" data-lang="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
        Profile &lt;span class=&quot;badge bg-secondary&quot;&gt;9&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;
    &lt;/button&gt;</code>
    </pre>
            </div> <!-- example end  -->

            <h2 id="background-colors">Background colors</h2>
            <p>Use our background utility classes to quickly change the appearance of a badge. Please note that when
                using Bootstrap’s default <code>.bg-light</code>, you’ll likely need a text color utility like
                <code>.</code> for proper styling. This is because background utilities do not set anything but
                <code>background-color</code>.
            </p>
            <div class="bd-example mb-5">
                <span class="badge bg-primary">Primary</span>
                <span class="badge bg-secondary">Secondary</span>
                <span class="badge bg-success">Success</span>
                <span class="badge bg-danger">Danger</span>
                <span class="badge bg-warning ">Warning</span>
                <span class="badge bg-info">Info</span>
                <span class="badge bg-light ">Light</span>
                <span class="badge bg-dark">Dark</span>
                <pre>
    <code class="language-html" data-lang="html">&lt;span class=&quot;badge bg-primary&quot;&gt;Primary&lt;/span&gt;
    &lt;span class=&quot;badge bg-secondary&quot;&gt;Secondary&lt;/span&gt;
    &lt;span class=&quot;badge bg-success&quot;&gt;Success&lt;/span&gt;
    &lt;span class=&quot;badge bg-danger&quot;&gt;Danger&lt;/span&gt;
    &lt;span class=&quot;badge bg-warning &quot;&gt;Warning&lt;/span&gt;
    &lt;span class=&quot;badge bg-info&quot;&gt;Info&lt;/span&gt;
    &lt;span class=&quot;badge bg-light &quot;&gt;Light&lt;/span&gt;
    &lt;span class=&quot;badge bg-dark&quot;&gt;Dark&lt;/span&gt;</code>
    </pre>
            </div> <!-- example end  -->

            <div class="bd-callout bd-callout-info">
                <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of
                    assistive technologies – such as screen readers. Ensure that information denoted by the color is
                    either obvious from the content itself (e.g. the visible text), or is included through alternative
                    means, such as additional text hidden with the <code>.visually-hidden</code> class.</p>
            </div>

            <h2 id="pill-badges">Pill badges</h2>
            <p>Use the <code>.rounded-pill</code> utility class to make badges more rounded with a larger
                <code>border-radius</code>.
            </p>
            <div class="bd-example mb-5">
                <span class="badge rounded-pill bg-primary">Primary</span>
                <span class="badge rounded-pill bg-secondary">Secondary</span>
                <span class="badge rounded-pill bg-success">Success</span>
                <span class="badge rounded-pill bg-danger">Danger</span>
                <span class="badge rounded-pill bg-warning ">Warning</span>
                <span class="badge rounded-pill bg-info">Info</span>
                <span class="badge rounded-pill bg-light ">Light</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
                <pre>
    <code class="language-html" data-lang="html">&lt;span class=&quot;badge rounded-pill bg-primary&quot;&gt;Primary&lt;/span&gt;
    &lt;span class=&quot;badge rounded-pill bg-secondary&quot;&gt;Secondary&lt;/span&gt;
    &lt;span class=&quot;badge rounded-pill bg-success&quot;&gt;Success&lt;/span&gt;
    &lt;span class=&quot;badge rounded-pill bg-danger&quot;&gt;Danger&lt;/span&gt;
    &lt;span class=&quot;badge rounded-pill bg-warning &quot;&gt;Warning&lt;/span&gt;
    &lt;span class=&quot;badge rounded-pill bg-info&quot;&gt;Info&lt;/span&gt;
    &lt;span class=&quot;badge rounded-pill bg-light &quot;&gt;Light&lt;/span&gt;
    &lt;span class=&quot;badge rounded-pill bg-dark&quot;&gt;Dark&lt;/span&gt;</code>
    </pre>
            </div> <!-- example end  -->

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