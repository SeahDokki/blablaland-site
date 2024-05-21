<x-app-layout>
    <div class="container-header-quaternary">Créer une news</div>
    <div class="container-content-quaternary">
        <h2>Editer une news</h2>
        <hr>
        <form method="POST" enctype="multipart/form-data"  action="{{ route('dashboard.news.update', $news) }}">
            @csrf
            <div class="form-group">
                <label>Image : </label></br>
                <input type="file" value="{{ $news->picture }}" name="picture" />
                @error('picture')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Petite image : </label></br>
                <input type="file" value="{{ $news->picture_min }}" name="picture_min" />
                @error('picture_min')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Nom : </label>
                <input type="text" class="form-control" value="{{ $news->name }}" name="name" />
                @error('name')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Description : </label>
                <textarea class="form-control" name="description">{{ $news->description }}</textarea>
                @error('description')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>TopicId : </label>
                <input type="number" name="topic_id" value="{{ $news->topic_id }}" class="form-control" />
                @error('topic_id')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-quaternary mt-2">Enregistrer</button>
        </form>
    </div>
</x-app-layout>
