            <div class='row'>
                
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
                   {!! Form::select('published')
                  -> options(trans('blog::blog.options.published'))
                   -> label(trans('blog::blog.label.published'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('blog_id')
                       -> label(trans('blog::comment.label.blog_id'))
                       -> placeholder(trans('blog::comment.placeholder.blog_id'))!!}
                </div>
                <div class='col-md-12'>
                    {!! Form::textarea('comment')
                    -> label(trans('blog::comment.label.comment'))
                    -> dataUpload(trans_url($comment->getUploadURL('comment')))
                    -> addClass('html-editor')
                    -> placeholder(trans('blog::comment.placeholder.comment'))!!}
                </div>
            </div>