@extends('layouts.app')

@section('import-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Url</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->git_url }}</td>
                    <td>{{ $project->description }}</td>


                    <td>
                        <div class="d-flex gap-2 my-1  justify-content-center align-items-center">
                            <a href="{{ route('admin.projects.edit', $project) }}">
                                <i class="fa-solid fa-file-pen"></i>
                            </a>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </td>

                </tr>
            </tbody>

        </table>
    </div>
@endsection
