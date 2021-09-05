<div class="col-12 col-lg-3">
    <div class="search-block">
        <form class="data-filter">
            <div class="position-relative">
                <input type="text" class="form-control category-filter" name="search[title]"
                    placeholder="Enter your keywords...">

            </div>
        </form>
    </div>
    <div class="widget">
        <h4>Categories</h4>
        <ul class="list-style">
            @foreach($categories as $category)
            <li><a href="#">{{$category['name']}}</a><span>{{@$category->blogs->count()}}</span></li>
            @endforeach
        </ul>
    </div>
    <div class="widget">
        <h4>Recently Added</h4>
        <ul class="latest-post position-relative">
            @foreach($blogs as $recentblog)
            <li class="media">
                <figure>
                    @foreach($recentblog['images'] as $image)
                    <a href="{{trans_url('blog')}}/{{@$recentblog['slug']}}"><img
                            src="{{url('image/original/'.@$image['path'])}}" class="img-fluid" alt=""></a>
                    @endforeach 
                </figure>
                <div class="media-body">
                    <h5><a href="{{trans_url('blog')}}/{{@$recentblog['slug']}}"
                            class="text-extra-dark-gray">{{@$recentblog['title']}}</a></h5>
                    <span class="d-block">{{date('M d,Y', strtotime(@$recentblog['published_at']))}}</span>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="widget">
        <h4>Tags Cloud</h4>
        <div class="tag-cloud">
            @foreach($tags as $tag)
            <a href="#">{{$tag['name']}}</a>
            @endforeach
        </div>
    </div>
</div>