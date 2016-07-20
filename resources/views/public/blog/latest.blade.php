<div class="blog-detail-side-popular-posts-wraper">
    <h3>
        Recent Blogs
    </h3>
    @foreach($blog as $latests)
    <?php
        $timestamp = strtotime($latests['posted_on']);
        $dayy = date('D', $timestamp);
    ?>
    <div class="popular-post-block">
        <div class="row">
            <div class="col-xs-4">
                @if(!empty(@$latests['images']))
               <a  href="{{trans_url('blogs')}}/{{@$latests['slug']}}"> <div class="popular-post-img" style="background-image: url({!!trans_url('/image/lb/'.$latests->default_image)!!});"></div></a>
                @else
                <div class="popular-post-img" style="background-image: url(img/blog1.jpg);"></div>
                @endif
            </div>
            <div class="col-xs-8 popular-post-inner">
                <div class="popular-post-desc">
                    <a href="{{trans_url('blogs')}}/{{@$latests['slug']}}">
                        <h4>
                            {{$latests->title}}
                        </h4>
                    </a>
                    <p>
                        {{$dayy}} ,{{$latests->posted_on}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>