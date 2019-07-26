            @include('blog::public.tag.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('blog::public.tag.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($tag->defaultImage('images' , 'xl'))!!}" alt="{{$tag->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('blog::tag.label.id') !!}
                </label><br />
                    {!! $tag['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('blog::tag.label.name') !!}
                </label><br />
                    {!! $tag['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="frequency">
                    {!! trans('blog::tag.label.frequency') !!}
                </label><br />
                    {!! $tag['frequency'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('blog::tag.label.slug') !!}
                </label><br />
                    {!! $tag['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="published">
                    {!! trans('blog::tag.label.published') !!}
                </label><br />
                    {!! $tag['published'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('blog::tag.label.created_at') !!}
                </label><br />
                    {!! $tag['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('blog::tag.label.updated_at') !!}
                </label><br />
                    {!! $tag['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('blog::tag.label.deleted_at') !!}
                </label><br />
                    {!! $tag['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('blog::tag.label.name'))
                       -> placeholder(trans('blog::tag.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('frequency')
                       -> label(trans('blog::tag.label.frequency'))
                       -> placeholder(trans('blog::tag.placeholder.frequency'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('published')
                   -> radios(trans('blog::tag.options.published'))
                   -> label(trans('blog::tag.label.published'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



