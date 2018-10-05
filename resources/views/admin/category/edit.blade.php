    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#category" data-toggle="tab">{!! trans('blog::category.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#blog-category-edit'  data-load-to='#blog-category-entry' data-datatable='#blog-category-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#blog-category-entry' data-href='{{guard_url('blog/category')}}/{{$category->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-category-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('blog/category/'. $category->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="category">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('blog::category.name') !!} [{!!$category->name!!}] </div>
                @include('blog::admin.category.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>