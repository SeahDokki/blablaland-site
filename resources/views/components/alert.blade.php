@if (session('status'))
    @if (session('type'))
        @php ($type = 'alert-' . session('type'))
    @else
        @php ($type = 'alert-danger')
    @endif
    @if (is_array(session('status')))
        <div class="alert {{ $type }}">
            <ul>
                @foreach (session('status') as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @else
        <div class="alert {{ $type }}">
            {{ session('status') }}
        </div>
    @endif
@endif
