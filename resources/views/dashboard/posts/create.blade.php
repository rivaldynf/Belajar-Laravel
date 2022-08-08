@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    {{-- Fungsi enctype="multipart/form-data" || 
    mengizinkan pengguna untuk mengunggah file melalui 
    formulir --}}
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf

        {{-- Title --}}
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title')
              is-invalid
          @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          {{-- Pesan Eror --}}
          @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
          {{-- Pesan Eror --}}
        </div>
        {{-- Title --}}
        
        {{-- Slug --}}
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')
                is-invalid
            @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        </div>
        {{-- Slug --}}
        

        <div class="mb-3">
          <label for="slug" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                {{--  --}}
                @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
                {{--  --}}
            </select>        
        </div>

        {{-- IMG --}} {{-- https://laravel.com/docs/8.x/filesystem --}}
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image')
                is-invalid
            @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        {{-- IMG --}}
        
        {{-- CKeditor --}}
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <textarea 
                name="body" class="editor form-control" 
                id="editor" cols="30" rows="10" value="{{ old('body') }}">
            </textarea>   
        </div>

        {{-- <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="hidden" id="body" name="body">
            <trix-editor input="body"></trix-editor>
        </div> --}}


        
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

{{-- Slug --}}
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function()
    {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)

    });
</script>
{{-- Slug --}}

{{-- Preview Image --}}
<script>
    function previewImage()
    {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent)
        {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
{{-- Preview Image --}}

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>

@endsection