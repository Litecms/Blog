            @include('blog::comment.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('blog::comment.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="main-area parent-border list-item">
                                @foreach($comments as $comment)
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('comments')}}/{{@$comment['slug']}}">
                                            <img src="{{url($comment->defaultImage('images'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('comment')}}/{{$comment['slug']}}">{{str_limit($comment['title'], 300)}}</a> 
                                        </h4>
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                <a href="#" class="">Seo Tips</a>
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><i class="fa fa-comments"></i>{{@$comment->viewcount}}</span>
                                                <span><i class="fa fa-calendar"></i>{{format_date($comment['posted_on'])}}</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="author">
                                            <div class="avatar pull-left">
                                                {{@$comment->user->badge}}
                                            </div>
                                            <div class="actions">
                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                            </div>
                            <div class="pagination text-center">
                            {{ $comments->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section> 