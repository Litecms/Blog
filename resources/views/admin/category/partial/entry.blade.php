            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('blog::category.label.name'))
                       -> placeholder(trans('blog::category.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                  {!! Form::select('status')
                  -> options(trans('blog::category.options.status'))
                  -> label(trans('blog::category.label.status'))
                  -> placeholder(trans('blog::category.placeholder.status'))!!}
                </div>
            </div>