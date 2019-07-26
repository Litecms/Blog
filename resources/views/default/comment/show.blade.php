            @include('blog::public.comment.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('blog::public.comment.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($comment->defaultImage('images' , 'xl'))!!}" alt="{{$comment->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('blog::comment.label.id') !!}
                </label><br />
                    {!! $comment['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="comment">
                    {!! trans('blog::comment.label.comment') !!}
                </label><br />
                    {!! $comment['comment'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="author">
                    {!! trans('blog::comment.label.author') !!}
                </label><br />
                    {!! $comment['author'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="email">
                    {!! trans('blog::comment.label.email') !!}
                </label><br />
                    {!! $comment['email'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="published">
                    {!! trans('blog::comment.label.published') !!}
                </label><br />
                    {!! $comment['published'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('blog::comment.label.user_id') !!}
                </label><br />
                    {!! $comment['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('blog::comment.label.user_type') !!}
                </label><br />
                    {!! $comment['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="blog_id">
                    {!! trans('blog::comment.label.blog_id') !!}
                </label><br />
                    {!! $comment['blog_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('blog::comment.label.created_at') !!}
                </label><br />
                    {!! $comment['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('blog::comment.label.updated_at') !!}
                </label><br />
                    {!! $comment['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('blog::comment.label.deleted_at') !!}
                </label><br />
                    {!! $comment['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-12'>
                    {!! Form::textarea('comment')
                    -> label(trans('blog::comment.label.comment'))
                    -> dataUpload(trans_url($comment->getUploadURL('comment')))
                    -> addClass('html-editor')
                    -> placeholder(trans('blog::comment.placeholder.comment'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('author')
                       -> label(trans('blog::comment.label.author'))
                       -> placeholder(trans('blog::comment.placeholder.author'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('email')
                       -> label(trans('blog::comment.label.email'))
                       -> placeholder(trans('blog::comment.placeholder.email'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('published')
                   -> radios(trans('blog::comment.options.published'))
                   -> label(trans('blog::comment.label.published'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('blog_id')
                       -> label(trans('blog::comment.label.blog_id'))
                       -> placeholder(trans('blog::comment.placeholder.blog_id'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



