<x-account-layout>
    <div class="container-header-secondary">
        <i class="fa-solid fa-file-signature"></i>
        Changer de Signature
    </div>
    <div class="container-content-secondary">
        <form method="POST" action="{{ route('account.signature.update') }}">
            @csrf
            <div class="form-group">
                <textarea name="signature" id="editor" style="height:150px" >{{ $user->signature }}</textarea>
                <small class="form-text text-muted">Clique sur "BBCode" pour voir le BBCode, comme à l'époque !</small>
            </div>
            <button class="btn btn-secondary" type="submit">Enregistrer</button>
        </form>
    </div>
@section('javascript')
    <script src="{{ asset('js/wysibb.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            var wbbOpt = {
                buttons: "bold,italic,underline,strike,|,justifyleft,justifycenter,justifyright,|,fontsize,fontcolor,|,smilebox,img,link,video,citer",
                lang: "fr"
            }
            $("#editor").wysibb(wbbOpt);
        });
    </script>
@endsection
</x-account-layout>
