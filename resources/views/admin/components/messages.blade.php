@if(session()->has('success'))
    <div class="callout callout-success alert-message">
        <p>{{ session()->get('success') }}</p>
    </div>
@endif
@if(session()->has('error'))
    <div class="callout callout-danger alert-message">
        <p>{{ session()->get('error') }}</p>
    </div>
@endif