<div id="debug" class="debug-bar">

    <span class="debug-item debug-title">
        DebugBar
    </span>

    <button id="HTML" class="debug-item debug-button tooltip-container">
        HTML (5)
        <span class="tooltip-content">
            HTML : 2 Warnings and 3 Errors
        </span>
    </button>

    <button id="CSS" class="debug-item debug-button tooltip-container" disabled>
        CSS (2)
        <span class="tooltip-content">
            CSS : 1 Warning and 1 Error
        </span>
    </button>

    <button id="ARIA" class="debug-item debug-button tooltip-container">
        ARIA (1)
        <span class="tooltip-content">
            Accessibility : 1 Warning and 0 Error
        </span>
    </button>

</div>

<div id="debug" class="debug-bar">

    <span class="debug-item debug-title">
        DebugBar
    </span>

    <a href="#popup_HTML">
        <button id="HTML" class="debug-item debug-button tooltip-container">

            <span class="name">HTML</span>
            <span class="counter warning">2</span>
            <span class="counter error">3</span>

            <span class="tooltip-content">
                HTML
                <br/>2 Warnings
                <br/>3 Errors
            </span>

        </button>
    </a>

    <a href="#popup_CSS">
        <button id="CSS" class="debug-item debug-button tooltip-container" disabled>
            CSS : 1 Warning and 1 Error
            <span class="tooltip-content">
                CSS
                <br/>1 Warning
                <br/>1 Error
            </span>
        </button>
    </a>

    <a href="#popup_ARIA">
        <button id="ARIA" class="debug-item debug-button tooltip-container">
            Accessibility : 1 Warning and 0 Error
            <span class="tooltip-content">
                Accessibility
                <br/>1 Warning
                <br/>0 Error
            </span>
        </button>
    </a>

</div>

<!-- -->

<div id="popup_HTML" class="overlay light">
    <a class="cancel" href="#"></a>
    <div class="popup">
        <h2>HTML Validation</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <p>Click outside the popup to close.</p>
            <p>Click outside the popup to close.</p>
            <p>Click outside the popup to close.</p>
        </div>
    </div>
</div>

<div id="popup_CSS" class="overlay light">
    <a class="cancel" href="#"></a>
    <div class="popup">
        <h2>CSS Validation</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <p>Click outside the popup to close.</p>
            <p>Click outside the popup to close.</p>
            <p>Click outside the popup to close.</p>
        </div>
    </div>
</div>

<div id="popup_ARIA" class="overlay light">
    <a class="cancel" href="#"></a>
    <div class="popup">
        <a class="close" href="#">&times;</a>
        <h2>ARIA Validation</h2>
        <div class="content">
            <p>Click outside the popup to close.</p>
            <p>Click outside the popup to close.</p>
            <p>Click outside the popup to close.</p>
        </div>
    </div>
</div>

<!-- -->

<div id="debug">

    <div id="HTML">
        <p>{{html_content}}</p>
    </div>

    <div id="CSS">
        <p>{{css_content}}</p>
    </div>

    <div id="ARIA">
        <p>{{aria_content}}</p>
    </div>

</div>