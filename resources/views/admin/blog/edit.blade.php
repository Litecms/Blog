<div class="box-header with-border">
    <h3 class="box-title"> Edit  {!! trans('blog::blog.name') !!} [{!!$blog->title!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#blog-blog-edit'  data-load-to='#blog-blog-entry' data-datatable='#blog-blog-list'><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#blog-blog-entry' data-href='{{Trans::to('admin/blog/blog')}}/{{$blog->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('cms.cancel') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#blog" data-toggle="tab">{!! trans('blog::blog.tab.name') !!}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-blog-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/blog/blog/'. $blog->getRouteKey()))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="blog">
                @include('blog::admin.blog.partial.entry')
                <div class='col-md-6 col-sm-6'>
                    <label>Images</label>
                    {!!$blog->fileUpload('images')!!}
                </div>
                <div class='col-md-6 col-sm-6'>
                    <label>Uploaded Images</label>
                     {!!$blog->fileEdit('images') !!}
                </div>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>