@extends('layouts.app')

@section('content')
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">Admin: Channels</h2>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START FORUM FORM AREA
    =================================-->
    <section class="p-top-100 p-bottom-70 bgcolor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="modules__content">
                            <div class="withdraw_module withdraw_history bg-white">
                                <div class="withdraw_table_header">
                                    <h4>Channels
                                            <a href="{{ route('admin.channel.create') }}" class="btn btn-sm btn-primary float-right">Create</a>
                                    </h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table withdraw__table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Slug</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($channels as $channel)
                                                <tr>
                                                    <td>{{ $channel->id }}</td>
                                                    <td>{{ $channel->slug }}</td>
                                                    <td>{{ $channel->title }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.channel.destroy', $channel->id) }}" method="POST">
                                                            @csrf @method('DELETE')
                                                            <a href="{{ route('admin.channel.edit', $channel->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                            <button onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {!! $channels->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END FORUM FORM AREA
    =================================-->
@endsection
