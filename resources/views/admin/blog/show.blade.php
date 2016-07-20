<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.view') }}   {!! trans('blog::blog.name') !!}  [{!! $blog->title !!}]  </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-default btn-sm" data-action='NEW' data-load-to='#blog-blog-entry' data-href='{{trans_url('admin/blog/blog/create')}}'><i class="fa fa-times-circle"></i> New</button>
        @if($blog->id )

           @if($blog->published == 'Yes')
            <button type="button" class="btn btn-warning btn-sm" data-action="PUBLISHED" data-load-to='#blog-blog-entry' data-href="{{trans_url('admin/blog/blog/status/'. $blog->getRouteKey())}}" data-value="No" data-datatable='#blog-blog-list'><i class="fa fa-times-circle"></i> Suspend</button>
        @else
            <button type="button" class="btn btn-success btn-sm" data-action="PUBLISHED" data-load-to='#blog-blog-entry' data-href="{{trans_url('admin/blog/blog/status/'. $blog->getRouteKey())}}" data-value="Yes" data-datatable='#blog-blog-list'><i class="fa fa-check"></i> Published</button>
        @endif

        <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#blog-blog-entry' data-href='{{ trans_url('/admin/blog/blog') }}/{{$blog->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> Edit</button>
        <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#blog-blog-entry' data-datatable='#blog-blog-list' data-href='{{ trans_url('/admin/blog/blog') }}/{{$blog->getRouteKey()}}' >
        <i class="fa fa-times-circle"></i> Delete
        </button>
        @endif
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('blog::blog.name') !!}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('blog-blog-show')
        ->method('POST')
        ->files('true')
        ->action(URL::to('admin/blog/blog'))!!}
            <div class="tab-content">
                <div class="tab-pane active" id="details">
                    @include('blog::admin.blog.partial.entry')

                    <div class='col-md-6 col-sm-6'>
                    @if(!empty($blog['images']))
                     <label>Images</label><br>
                          @foreach($blog['images'] as $value)
                            <img src="{!!trans_url('image/sm/'.@$value['efolder'])!!}/{!!@$value['file']!!}">
                          @endforeach
                     @endif
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>