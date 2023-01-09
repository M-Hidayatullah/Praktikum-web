@extends('layouts.app', ['title' => ('Blog')])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog</h4>
                    <a href="{{ route('blog.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah Data Blog
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Content</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($blog as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td class="text-center">
                                        <div class="d-flex d-inline justify-content-center">
                                            <a href="{{ route('blog.edit', $item->id) }}"
                                               class="btn btn-sm btn-success ml-1">
                                                <h4>edit</h4>
                                            </a>
                                            <form action="{{ route('blog.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm ml-1"
                                                        onclick="return confirm('Apa Anda yakin ?');">
                                                    <h4>hapus</h4>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
