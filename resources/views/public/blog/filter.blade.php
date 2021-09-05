@forelse($data as $blog)
<div class="listing-single-item d-flex align-items-center flex-wrap">
    <div class="col-12 col-lg-5 p-0 listing-image">
        <a href="{{trans_url('blog')}}/{{@$blog['slug']}}">
            @if($blog['images']!='[]')
            @foreach($blog['images'] as $image)
            <img src="{{url('image/original/'.@$image['path'])}}" class="img-fluid" alt="">
            @endforeach
            @endif
        </a>
    </div>
    <div class="col-12 col-lg-6 p-0 listing-text">
        <div class="listing-content">
            <h3><a href="{{trans_url('blog')}}/{{@$blog['slug']}}">{{@$blog['title']}}</a></h3>
            <div class="listing-metas">
                <span>By <a href="{{trans_url('blog')}}/{{@$blog['slug']}}">{{@$blog->users->name}}</a></span>
                <span>{{date('M d,Y', strtotime(@$blog['published_at']))}}</span>
                <span><a href="{{trans_url('blog')}}/{{@$blog['slug']}}">{{@$blog->category->name}}</a></span>
            </div>
            <p>{!! str_limit(@$blog['description'],300 )!!}</p>
        </div>
        <a href="{{trans_url('blog')}}/{{@$blog['slug']}}" class="btn btn-theme">Continue Reading</a>
    </div>
</div>
@empty
@endif