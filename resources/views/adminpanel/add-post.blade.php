@extends('adminpanel.layout.main')
@section('main-section')
    <!-- Header Section -->
    <section class="header bg-body-tertiary align-items-center justify-content-center shadow-lg" style="min-height: 85vh;">
        <div class="main bg-body" style="width: 70%; padding: 20px;">
            <div class="table-contents d-flex justify-content-center">
                <h4 style="color: #1D2158; font-size: 24px; font-weight: 700;">ADD POST</h4>
                <!-- <a id="logout" href="add-post.html">Add Post</a> -->
            </div>
            <!-- Form -->
            <form action="{{route('addPost')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="post_title">Title</label>
                    <input type="text" name="title" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> Description</label>
                    <textarea style="resize: none;" name="description" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category" class="form-control">
                        <option value="" selected> Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->cid}}" selected>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="post_title">Author</label>
                    <input type="text" name="author" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group my-3">
                    <label for="exampleInputPassword1">Post image</label>
                    <input type="file" name="image" required>
                </div>
                <input id="logout" type="submit" name="submit" class="btn" value="Save" required />
            </form>
            <!--/Form -->
        </div>
    </section>
@endsection