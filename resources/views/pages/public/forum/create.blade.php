@extends('layouts.app')

@section('content')
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">Ask Question</h2>
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
    <section class="support_threads_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="question-form">
                        <form action="#">
                            <div class="form-group">
                                <label>Question Title</label>
                                <input type="text" placeholder="Enter title here" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div id="trumbowyg-demo"></div>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <div class="select-wrap select-wrap2">
                                    <select name="months" id="name">
                                        <option value="">Select Category</option>
                                        <option value="jan">Wordpress</option>
                                        <option value="feb">HTML</option>
                                        <option value="mar">Javascript</option>
                                        <option value="apr">Plugins</option>
                                        <option value="may">Support</option>
                                    </select>
                                    <span class="icon-arrow-down"></span>
                                </div>
                                <!-- end /.select-wrap -->
                            </div>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" placeholder="Enter Your Email" required>
                            </div>
                            <div class="form-group">
                                <label>Website URL</label>
                                <input type="text" placeholder="http://">
                            </div>
                            <div class="form-group">
                                <div class="attachments">
                                    <label>Attachments</label>
                                    <label>
                                        <span class="icon-paper-clip"></span> Add File
                                        <span>or Drop Files Here</span>
                                        <input type="file" style="display:none;">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn--md btn-primary">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end .col-md-8 -->

                <div class="col-lg-3">
                    @include('layouts.partials._sidebar')
                    <!-- end .sidebar -->
                </div>
                <!-- end .col-md-4 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END FORUM FORM AREA
    =================================-->
@endsection
