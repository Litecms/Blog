            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('blog::tag.label.name'))
                       -> placeholder(trans('blog::tag.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('frequency')
                       -> label(trans('blog::tag.label.frequency'))
                       -> placeholder(trans('blog::tag.placeholder.frequency'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::select('published')
                  -> options(trans('blog::blog.options.published'))
                   -> label(trans('blog::blog.label.published'))!!}
                </div>
            </div>