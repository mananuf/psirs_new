<div class="position-absolute top-0 end-0" style="z-index: 1000;">
    <div class="d-flex flex-column">
        @if ($message = Session::get('success'))
        <div class="p-3">
            <div class="toast fade show  shadow-lg" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-toggle="toast">
                <div class="toast-header bg-success text-white">
                    <img src="{{asset('images/psirs-logo.png')}}" alt="brand-logo" height="12" class="me-1" />
                    <strong class="me-auto">{{config('app.name')}}</strong>
                    <button type="button" class="btn-close ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{$message}}
                </div>
            </div>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="p-3">
            <div class="toast fade show shadow-lg" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-toggle="toast">
                <div class="toast-header bg-danger text-white">
                    <img src="{{asset('images/psirs-logo.png')}}" alt="brand-logo" height="12" class="me-1" />
                    <strong class="me-auto">{{config('app.name')}}</strong>
                    <button type="button" class="btn-close ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{$message}}
                </div>
            </div>
        </div>
        @endif
        @if ($message = Session::get('warning'))
        <div class="p-3">
            <div class="toast fade show  shadow-lg" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-toggle="toast">
                <div class="toast-header bg-warning text-white">
                    <img src="{{asset('images/psirs-logo.png')}}" alt="brand-logo" height="12" class="me-1" />
                    <strong class="me-auto">{{config('app.name')}}</strong>
                    <button type="button" class="btn-close ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{$message}}
                </div>
            </div>
        </div>
        @endif
        @if ($message = Session::get('info'))
        <div class="p-3">
            <div class="toast fade show  shadow-lg" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-toggle="toast">
                <div class="toast-header bg-info text-white">
                    <img src="{{asset('images/psirs-logo.png')}}" alt="brand-logo" height="12" class="me-1" />
                    <strong class="me-auto">{{config('app.name')}}</strong>
                    <button type="button" class="btn-close ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{$message}}
                </div>
            </div>
        </div>
        @endif
        @if ($errors->any())
        <div class="p-3">
            <div class="toast fade show  shadow-lg" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-toggle="toast">
                <div class="toast-header bg-error text-white">
                    <img src="{{asset('images/psirs-logo.png')}}" alt="brand-logo" height="12" class="me-1" />
                    <strong class="me-auto">{{config('app.name')}}</strong>
                    <button type="button" class="btn-close ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>