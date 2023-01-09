@extends('layouts.app')

@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Blog</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('blog.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <input type="text" class="form-control" name="category" id="category">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Content</label>
                                <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
