    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li role="presentation" class="active"><a href="#details" area-controls="details" role="tab" data-toggle="tab">Blog</a></li>
            <li role="presentation"><a href="#image" area-controls="image" role="tab" data-toggle="tab">Image & Meta</a></li>
            
            <div class="box-tools pull-right">
               
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#blog-blog-edit'  data-load-to='#blog-blog-entry' data-datatable='#blog-blog-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#blog-blog-entry' data-href='{{guard_url('blog/blog')}}/{{$blog->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-blog-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('blog/blog/'. $blog->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="blog">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('blog::blog.name') !!} [{!!$blog->title!!}] 
                @if($blog['published'] == 'yes') Published at {{format_date($blog['published_at'])}} @endif</div>
                @include('blog::admin.blog.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>