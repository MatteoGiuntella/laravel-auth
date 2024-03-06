@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        My Project
                    </h1>

                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $project->id }}</th>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->slug }}</td>
                                        <td>{{ $project->date }}</td>
                                        <td>
                                            {{-- <a href="{{ route('admin.project.show', ['projects' => $project->slug]) }}"
                                                class="btn btn-xs btn-primary">
                                                Show
                                            </a> --}}
                                            {{-- <a href="{{ route('admin.project.update', ['projects' => $project->id]) }}"
                                                class="btn btn-xs btn-primary">
                                                Update
                                            </a> --}}
                                            {{-- <form onsubmit="return confirm('Do you want delete this project?');"
                                                class="d-inline-block"
                                                action="{{ route('admin.project.delete', ['projects' => $project->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form> --}}
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
