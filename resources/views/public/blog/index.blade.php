<section class="page-banner">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="banner-content">
                    <h2 class="title">Blog list</h2>
                    <p>Create custom landing pages with Lavalite that converts <br class="d-none d-md-block"> more
                        visitors than any website. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="listing-page-wrap">
    <div class="container">
        <div class="row">
            @include('blog::public.blog.partial.aside')

            <div class="col-12 col-lg-9 left-sidebar" id="listing_data">
                @forelse($data as $blog)
                <div class="listing-single-item d-flex align-items-center flex-wrap">
                    <div class="col-12 col-lg-5 p-0 listing-image">
                        <a href="{{trans_url('blog')}}/{{$blog['slug']}}">
                        <img src="{{url($blog['image'])}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 p-0 listing-text">
                        <div class="listing-content">
                            <h3><a href="{{trans_url('blog')}}/{{$blog['slug']}}">{{$blog['title']}}</a></h3>
                            <div class="listing-metas">
                                <span>By <a
                                        href="{{trans_url('blog')}}/{{$blog['slug']}}">{{$blog['user']}}</a></span>
                                <span><a
                                        href="{{trans_url('blog')}}/{{$blog['slug']}}">{{$blog['category']}}</a></span>
                            </div>
                            <p>{!! Str::limit($blog['description'],300 )!!}</p>
                        </div>
                        <a href="{{trans_url('blog')}}/{{$blog['slug']}}" class="btn btn-theme">Continue Reading</a>
                    </div>
                </div>
                @empty
                @endif
                <nav class="pagination-wrap mb-50" aria-label="Page navigation example">
                    <ul class="pagination">
                        {!!view('paginator', compact('meta'))!!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
