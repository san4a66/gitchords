@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Добавление Поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление поста</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" class="w-25">
                                <input type="text" class="form-control" name="author" placeholder="Название исполнителя"
                                       value="{{old('author')}}">
                            </div>

                            <div class="form-group" class="w-25">
                                <input type="text" class="form-control" name="title" placeholder="Название песни"
                                       value="{{old('title')}}">
                            </div>
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{old('content')}}</textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$category->id == old('category_id') ? ' selected' : ''}}
                                        >{{$category->title}}</option>
                                    @endforeach
                                        @error('category_id')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
