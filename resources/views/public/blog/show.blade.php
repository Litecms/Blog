       @include('blog::blog.partial.header')


<section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                               
                                
                                <div class="widget category">
                                   
                                    <ul class="mt-20">
                                        @include('blog::blog.partial.aside')
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{{url($blog->defaultImage('images','original'))}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{$blog->title}}</h4>
                                        <div class="metas mt-20 clearfix">
                                            <div class="tag pull-left">
                                                
                                                <a href="{{trans_url('blogs/category')}}/{{@$blog->category->slug}}" class="btn btn-primary btn-round">{{@$blog->category->name}}</a> 
                                               
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><img class="img-circle" src="img/blogs/author-01.jpg" alt=""></span>
                                                <span><a href="" class="text-black">by <span class="text-primary">{{$blog->user->name}}</span></a></span>
                                                <span><i class="fa fa-comments"></i>{{ $blog->comments->count()}}</span>
                                                <span><i class="fa fa-calendar"></i>{{format_date($blog->created_at)}}</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <p>{!! $blog->description !!}</p>
                                        <ul class="list-inline tags mt-40">
                                            @if (!empty($blog->tags))
                                                @foreach ($blog->tags as $tag)
                                                    <li><a href="{{trans_url('blogs/tag')}}/{{@$tag}}">{{@$tag}}</a></li>
                                                
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="comments-area">
                                <div class="title">
                                    <h3>Comments ( {{ $blog->comments->count()}} )</h3>
                                    <div class="separator"><span></span><span></span><span></span></div>
                                </div>

                                <ul class="media-list">
                                     @forelse($blog->comments as $comment)
                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object img-circle" src="img/blogs/author-01.jpg">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{@$comment->author}} <span>September 16, 2017</span></h4>
                                            <p>{!! @$comment->comment !!}</p>
                                            <a href="#" class="post-reply"><i class="ion-ios-undo"></i></a>
                                        </div>
                                    </li>
                                    @empty
                                    @endif
                                </ul>
                            </div>
                            <div class="post-form-area">
                                <div class="post-form-title">
                                    <h3>Post Your Comments</h3>
                                    <div class="separator"><span></span><span></span><span></span></div>
                                </div>
                                {!!Form::vertical_open()
                                -> class('form_comment')
                                -> method('POST') 
                                -> action('comment/post/'.$blog->slug)!!}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!!Form::text('author')
                                                 ->placeholder('Name')
                                                 ->forceValue('')
                                                 ->required()
                                                 ->raw()!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {!!Form::email('email')
                                                 ->placeholder('Email')
                                                 ->forceValue('')
                                                 ->required()
                                                 ->raw()!!}
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {!!Form::int('mobile')
                                                 ->placeholder('Phone number')
                                                 ->forceValue('')
                                                 ->required()
                                                 ->raw()!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               {!!Form::textarea('comment')
                                               ->placeholder('Your comment')
                                               ->forceValue('')
                                               ->rows(4)
                                               ->raw()!!}
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                {!!Form::close()!!}  
                            </div>
                        </div>
                    </div>
                </div>
            </section>