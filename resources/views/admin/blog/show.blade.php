    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('blog::blog.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#blog-blog-entry' data-href='{{guard_url('blog/blog/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($blog->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#blog-blog-entry' data-href='{{ guard_url('blog/blog') }}/{{$blog->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#blog-blog-entry' data-datatable='#blog-blog-list' data-href='{{ guard_url('blog/blog') }}/{{$blog->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-blog-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('blog/blog'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('blog::blog.name') !!}  [{!! $blog->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('blog::admin.blog.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>