            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('blog::tag.label.name'))
                       -> placeholder(trans('blog::tag.placeholder.name'))!!}
                </div>

               

                <div class='col-md-4 col-sm-6'>
                   {!! Form::select('status')
                  -> options(trans('blog::tag.options.status'))
                   -> label(trans('blog::tag.label.status'))!!}
                </div>
            </div>