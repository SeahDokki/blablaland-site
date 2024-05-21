<x-account-layout>
    <div class="container-header-secondary">
        <i class="fa-solid fa-image"></i>
        Changer d'avatar
    </div>
    <div class="container-content-secondary">
        <form method="POST" enctype="multipart/form-data" action="{{ route('account.avatar.update') }}">
            @csrf
            <div class="form-group">
                <label>90x90 pixels - Format JPG, GIF, PNG - Max 300ko</label>
                <input name="avatar" class="form-text" ref="input"  type="file" />
                @error('avatar')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-secondary" type="submit">Enregistrer</button>
        </form>
    </div>
</x-account-layout>
