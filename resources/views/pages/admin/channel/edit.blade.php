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
    <section class="p-top-100 p-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="question-form">
                        <form action="{{ route('admin.channel.update', $channel->id) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" placeholder="Enter title here" value="{{ old('title', $channel->title) }}" required>
                                @if ($errors->has('title'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn--md btn-primary">Submit</button>
                            </div>
                        </form>
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
