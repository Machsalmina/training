@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="row justify-content-center">
            
                <div class="col-md-8">
                    <div class="card-header">Edit Data</div>

                    <div class="card-body">

                            <form action="{{ route('post.update', $post) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="">Title
                                        <h1></h1>
                                    </label>
                                    <input type="text" class="form-control" name="title" placeholder="Post title" value="{{$post->title}}">
                                </div>
                    
                                <div class="form-group">
                                    <label for="">content</label>
                                    <textarea name="content" rows="5" class="form-control"  placeholder="Post content"> {{ $post->content }}</textarea>
                                </div>
                    
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="save">
                                </div>
                            </form>
                    </div>
                </div>
            
             
        </div>
    </div>   
@endsection