<section class="page-banner">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="banner-content">
                    <h2 class="title">Blog Single</h2>
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
            @include('blog::public.blog.partial.aside',['categories' => $categories,'tags' => $tags])
            <div class="col-12 col-lg-9 left-sidebar" id="listing_data">
                <div class="listing-single-wrap">
                    <h1 class="single-title">{{$data['title']}}</h1>
                    <div class="single-metas">
                        <span>By <a href="#">{{@$data['user_id']}}</a></span>
                        <span>{{date('M d, Y', strtotime(@$data['published_at']))}}</span>
                        <span><a href="#">Design</a></span>
                    </div>
                    @foreach($data['images'] as $image)
                    <img src="{{url('image/original/'.@$image['path'])}}" class="img-fluid mb-30" alt="">
                    @endforeach

                    <div class="single-content">
                        <p>{!! @$data['description'] !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(document).ready(function() {
    $(".category-filter").on('change', function() {
        $(".data-filter").submit();
    })
    $(".data-filter").submit(function(e) {
        e.preventDefault();
        formData = $(this).serializeArray();
        console.log(formData);
        $.ajax({
            url: "{{trans_url('blogs')}}",
            type: 'GET',
            data: formData,
            processData: true,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                $('#listing_data').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('jqXHR');
            }
        });
    });

});
</script>