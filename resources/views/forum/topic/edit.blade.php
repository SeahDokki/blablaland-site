<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            @isset ($contentPreview)
                <div class="container-header-secondary">
                    <i class="fas fa-message"></i>
                    Prévisualisation du message
                </div>
                <div class="container-content-secondary">
                    <div style="overflow: hidden; overflow-wrap: break-word; margin: 0 auto;">
                        {!! nl2br($contentPreview) !!}
                    </div>
                </div>
            @endisset
            <div class="container-header-secondary">
                <i class="fas fa-comment"></i>
                Edition de votre post
            </div>
            <div class="container-content-secondary">
                <form method="POST">
                    @csrf
                    @if ($isFirst)
                        <div class="form-group">
                            <label>Sujet</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $name ?? $post->topic->name }}"/>
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    @endif
                    <div class="form-group mt-2 mb-2">
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="editor">{{ $content ?? $post->content }}</textarea>
                        @error('content')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @else
                            <small class="form-text text-muted"></small>
                            @enderror
                    </div>
                    <button class="btn btn-secondary" name="update" type="submit">Enregistrer</button>
                    <button class="btn btn-secondary" name="preview" type="submit">Prévisualisation</button>
                </form>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_forum.css') }}">
@endsection
@section('javascript')
        <script src="{{ asset('js/wysibb.js') }}" defer></script>
        <script src="{{ asset('js/forum.js') }}" defer></script>
@endsection
</x-app-layout>
