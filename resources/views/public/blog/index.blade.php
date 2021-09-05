@include('blog::public.blog.partial.header')
<section class="listing-page-wrap">
    <div class="container">
        <div class="row">
            @include('blog::public.blog.partial.aside',['categories' => $categories,'tags' => $tags,'blogs' => $blogs])

            <div class="col-12 col-lg-9 left-sidebar" id="listing_data">
            @include('blog::public.blog.filter',['data' => $data])
                <nav class="pagination-wrap mb-50" aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$data->links()}}

                    </ul>
                </nav>
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