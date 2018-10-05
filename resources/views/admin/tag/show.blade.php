    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('blog::tag.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#blog-tag-entry' data-href='{{guard_url('blog/tag/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($tag->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#blog-tag-entry' data-href='{{ guard_url('blog/tag') }}/{{$tag->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#blog-tag-entry' data-datatable='#blog-tag-list' data-href='{{ guard_url('blog/tag') }}/{{$tag->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-tag-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('blog/tag'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('blog::tag.name') !!}  [{!! $tag->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('blog::admin.tag.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>