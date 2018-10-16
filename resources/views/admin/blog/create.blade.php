
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
               <ul class="nav nav-tabs primary">
            <li role="presentation" class="active"><a href="#details" area-controls="details" role="tab" data-toggle="tab">Blog</a></li>
            <li role="presentation"><a href="#image" area-controls="image" role="tab" data-toggle="tab">Image & Meta</a></li>
            
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#blog-blog-create'  data-load-to='#blog-blog-entry' data-datatable='#blog-blog-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#blog-blog-entry' data-href='{{guard_url('blog/blog/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('blog-blog-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('blog/blog'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('blog::blog.name') !!}] </div>
                @include('blog::admin.blog.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>