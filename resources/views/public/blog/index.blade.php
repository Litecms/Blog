 
                   @include('blog::blog.partial.header')

            
              <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                                
                                <div class="widget search">
                                    <form action="">
                                        <input type="text" class="form-control" placeholder="Keywords.." name="search[tags]" required="">
                                        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                                
                                <div class="widget category">
                                    
                                    <ul class="mt-20">
                                         @include('blog::blog.partial.aside')
                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="main-area parent-border">
                                
                                <div class="row mb30">
                                    @foreach($blogs as $blog)
                                    <div class="col-sm-6">
                                        <div class="newest-item border">
                                            <div class="feature">
                                                
                                                <a href="{{trans_url('blog')}}/{{@$blog['slug']}}">
                                                    <img src="{{url($blog->defaultImage('images','sm'))}}" class="img-responsive center-block" alt="" >
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="{{trans_url('blog')}}/{{$blog['slug']}}">{{@$blog->title}}</a></h4>
                                                <div class="metas mt20">
 
                                                    <div class="tag pull-left">
                                                        <a href="{{trans_url('blogs/category')}}/{{@$blog->category->slug}}" class="">{{@$blog->category->name}}</a>
                                                    </div>

                                                    <div class="date-time pull-right">
                                                        <span><i class="fa fa-comments"></i>{{ $blog->comments->count()}}</span>
                                                        <span><i class="fa fa-calendar"></i>{{format_date($blog['created_at'])}}</span>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="author">
                                                    <div class="avatar pull-left">
                                                        <img class="img-circle" src="img/blogs/author-04.jpg" alt="">
                                                    </div>
                                                    <p>by <span class="text-primary">
                                                        <a href="" class="">
                                                            {{(@$blog->user->name)}}</a></span></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     @endforeach
                                </div>

                            </div>
                             <div class="pagination text-center">
                            {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section>