    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#tag" data-toggle="tab">{!! trans('blog::tag.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#blog-tag-edit'  data-load-to='#blog-tag-entry' data-datatable='#blog-tag-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#blog-tag-entry' data-href='{{guard_url('blog/tag')}}/{{$tag->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-tag-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('blog/tag/'. $tag->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="tag">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('blog::tag.name') !!} [{!!$tag->name!!}] </div>
                @include('blog::admin.tag.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>