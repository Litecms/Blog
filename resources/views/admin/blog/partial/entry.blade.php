            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::select('category_id')
                        ->options(Blog::selectadminCategories())
                       -> label(trans('blog::blog.label.category_id'))
                       -> placeholder(trans('blog::blog.placeholder.category_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('blog::blog.label.title'))
                       -> placeholder(trans('blog::blog.placeholder.title'))!!}
                </div>

                
                

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('tags')
                       -> label(trans('blog::blog.label.tags'))
                       -> placeholder(trans('blog::blog.placeholder.tags'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('viewcount')
                       -> label(trans('blog::blog.label.viewcount'))
                       -> placeholder(trans('blog::blog.placeholder.viewcount'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::select('published')
                  -> options(trans('blog::blog.options.published'))
                   -> label(trans('blog::blog.label.published'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::date('published_at')
                       -> label(trans('blog::blog.label.published_at'))
                       -> placeholder(trans('blog::blog.placeholder.published_at'))!!}
                </div>
                <div class='col-md-12'>
                    {!! Form::textarea('description')
                    -> label(trans('blog::blog.label.description'))
                    -> dataUpload(trans_url($blog->getUploadURL('description')))
                    -> addClass('html-editor')
                    -> placeholder(trans('blog::blog.placeholder.description'))!!}
                </div>
                    <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('blog::blog.label.images') }}
                         </label>
                        <div class='col-lg-12 col-sm-12'>
                            {!! $blog->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($blog->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $blog->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $( document ).ready(function() {
    $('#tags').selectize({
        delimiter: ',',
        persist: false,
        valueField: 'tag',
        labelField: 'tag',
        searchField: 'tag',
        options: tags,
        create: function(input) {
            return {
                tag: input
            }
        }
    });
});
</script>
<script>
var tags = [
@forelse(Blog::selectTags() as $key => $tag)

    {tag: "{{$tag}}" },
    @empty
    @endif 
];
</script>