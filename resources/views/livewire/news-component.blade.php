@section('title')
Новини
@endsection
<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
    @foreach ($articles as $news)
        <div class="card" style="margin-top: 20px">
            <a href="\news\details\{{ $news->id }}" style="text-decoration: none; outline: none; color: black">
                <div class="row">
                    <div class="col-md-4" style="display: flex; justify-content: center;">
                        <img src="{{asset('assets/images/news')}}/{{$news->image}}" alt="{{ $news->short_title }}" style="max-width: 200px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" style="color: red">{{ $news->short_title }}</h5>
                            <p class="card-text">{{ $news->short_description }}</p>
                            <div class="d-flex align-items-center">
                                <span class="bi bi-chat-fill me-2"></span>
                                <span>{{ $news->comments_count }} коментарів</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    <div style="margin: 20px; margin-left: 100px">
        {{ $articles->links('custom-pagination') }}
    </div>
</div>
