<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-secondary">
                <i class="fas fa-comment"></i>
                Forum
            </div>
            <div class="container-content-secondary" id="forum">
                <div>
                    @foreach($categories as $category)
                        <div class="separator-secondary">
                            {{ $category->name }}
                            <div class="stars"></div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th width="50%">Forum</th>
                                <th>Discussions</th>
                                <th>Messages</th>
                                <th>Dernier message</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category->sections->whereNull('section_id') as $section)
                                <tr>
                                    <td>
                                        <a class="section-name" href="{{ route('section.index', $section) }}">
                                            @if(session()->has('section_viewed_' . $section['id']))
                                                <div class="smile-default"></div>
                                            @else
                                                <div class="smile-happy"></div>
                                            @endif
                                            {{ $section->name }}
                                        </a>
                                        <p class="section-description">{!! $section->description !!}</p>
                                        @if($category->sections->where('section_id', $section->id)->count() > 0)
                                            <p class="section-children">
                                                Sous-forums :
                                                @foreach($category->sections->where('section_id', $section->id) as $key => $subSection)
                                                    <a href="{{ route('section.index', $subSection) }}">{{ $subSection->name }}</a>
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </p>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">{{ $section->topicsCount ?? 0 }}</td>
                                    <td class="align-middle text-center">{{ $section->postsCount ?? 0 }}</td>
                                    <td class="align-middle text-center">
                                        @isset($section->lastPost)
                                            le <a href="{{ route('topic.show', [$section->lastPost->topic, 'page' => $section->lastPost->topic->getPageForPost($section->lastPost)]).'#'.$section->lastPost->id }}">
                                                {{ $section->lastPost->created_at->translatedFormat('d/m/Y à H:i') }}
                                            </a> <br>
                                            par <a href="{{ route('user.show', $section->lastPost->user) }}" style="text-decoration: none">
                                                {!! $section->lastPost->user->usernameColor !!}
                                            </a>
                                        @else
                                            Aucun message...
                                        @endisset
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endforeach
                </div>
                <div id="statistics">
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_forum.css') }}">
@endsection
</x-app-layout>
