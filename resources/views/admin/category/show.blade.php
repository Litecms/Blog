    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('blog::category.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#blog-category-entry' data-href='{{guard_url('blog/category/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($category->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#blog-category-entry' data-href='{{ guard_url('blog/category') }}/{{$category->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#blog-category-entry' data-datatable='#blog-category-list' data-href='{{ guard_url('blog/category') }}/{{$category->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-category-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('blog/category'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('blog::category.name') !!}  [{!! $category->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('blog::admin.category.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>