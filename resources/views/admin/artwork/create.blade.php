<x-app-layout>
    <div class="container-header-quaternary">Créer une oeuvre</div>
    <div class="container-content-quaternary">
        <h2>Créer une oeuvre</h2>
        <hr>
        <form method="POST" enctype="multipart/form-data"  action="{{ route('dashboard.artwork.store') }}">
            @csrf
            <div class="form-group">
                <label>Image : </label></br>
                <input type="file" name="picture" />
                @error('picture')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Petite image : </label></br>
                <input type="file" name="picture_min" />
                @error('picture_min')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Nom : </label>
                <input type="text" class="form-control" name="name" />
                @error('name')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Description : </label>
                <textarea class="form-control" name="description"></textarea>
                @error('description')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>TopicId : </label>
                <input type="number" name="topic_id" class="form-control" />
                @error('topic_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>UserId : </label>
                <input type="number" name="user_id" class="form-control" />
                @error('user_id')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-quaternary mt-2">Créer</button>
        </form>
    </div>
</x-app-layout>
