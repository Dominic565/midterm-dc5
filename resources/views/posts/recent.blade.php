@extends('base')
@section('content')



<div class="">
    <div class="children">
        <h1 id="top" class="text-center">Recent Posts</h1>
        <div class="d-flex justify-content-center">
            @foreach ($recentPost as $post)
                <div id="post-box" class="align-self-stretch m-1" style="width: 51%" >
                    <div class="card-body">
                        <div class="card-title">
                            <h4 id="post-title">{{ $post->title }}</h4>
                            <p class="timestamp"><b>by: </b> {{ $post->user->lname }}, {{ $post->user->fname }} <br>
                        <b>created: </b>{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if($post->isEditable())
                            <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                            @else 
                            <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
                            <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                            <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>            
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<style>
    
    #top{     
        font-weight: bold;
        font-size: 50px;
        color: #ffa31a;
    }


    #post-title{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
  
    
    p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    .timestamp{
        font-size: 12px;
    }

    .buttons-for-non-user{
        color: white;
    }

    #post-box{
        height: 200px;
        width: 900px;
        color: white;
        background-color: gray;
    }
    .card-body{
        width: 900px;
        color: white;
        background-color: ##1b1b1b;
    }

    .card-footer{
        background-color:  	gray;
        color: white;
    }
    a{
        color: #ffa31a;
        margin-right: 8px;
    }


    ::-webkit-scrollbar {
        display: none;
    }
</style>
@endsection
