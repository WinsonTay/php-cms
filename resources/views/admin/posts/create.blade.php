<x-admin-master>
    @section('content')
        <h3>Share Post..</h3>

        <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
           @csrf
           @method('POST')
           <div class="form-group">
               <label for="Title">Title</label>
               <input type="text" name="title" id="title" placeholder="Enter Title.." class="form-control">
            </div> 
            <div class="form-group">
                <label for="File">Upload Image File..</label>
                <input type="file" 
                        name="post_image" 
                        id="file"  
                        class="form-control-file">
             </div>
            <div class="form-group">
                <label for="Body">Body</label>
                <textarea name="body" class='form-control' id="body" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-admin-master>