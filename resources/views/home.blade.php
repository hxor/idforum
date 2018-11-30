@extends('layouts.app')

@section('content')
    <!--================================
    START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">IDStack Forum</h2>
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
            START CONTENT AREA
    =================================-->
    <section class="support_threads_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="dwqa-container">
                        <div class="dwqa-questions-archive">
                            <form id="dwqa-search" class="dwqa-search">
                                <input data-nonce="8c3dbe4be6" type="text" placeholder="What do you want to know?" name="qs"
                                        value="" class="ui-autocomplete-input"
                                        autocomplete="off">
                            </form>
                            <!-- Ends: .dwqa-search -->
                            <div class="dwqa-question-filter">
                                <span>Filter:</span>
                                <a href="#" class="active">All</a>
                                <a href="#" class="">Open</a>
                                <a href="#" class="">Solved</a>
                                <select id="dwqa-sort-by" class="dwqa-sort-by">
                                    <option selected="" disabled="">Sort by</option>
                                    <option value="">Latest</option>
                                    <option value="">Answers</option>
                                    <option value="">Likes</option>
                                </select>
                            </div>
                            <!-- Ends: .dwqa-question-filter -->
                            <div class="dwqa-questions-list">
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="{{ route('forum.show') }}">Responsive website footer menu</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-open">Open</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat1.png"
                                                            class="avatar avatar-48 photo avatar-default">Achindemo</a> asked 2 years ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">Item discussion</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>739</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>2</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="#">How can I delete more than one post at a time?</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-resolved">Resolved</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat2.png"
                                                            class="avatar avatar-48 photo">Josh Johnston</a> answered 1 month ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">Technical</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>443</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>1</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="#">I’m not receiving email notifications.</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-answered">Answered</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat3.png"
                                                            class="avatar avatar-48 photo">Bon Doe</a> answered 1 month ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">Question</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>443</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>1</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="#">What are the guidelines for ratings and reviews?</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-closed">Closed</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat4.png"
                                                            class="avatar avatar-48 photo">Josh Johnston</a> answered 1 month ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">WooCommerce</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>443</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>1</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="#">Responsive website footer menu</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-open">Open</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat1.png"
                                                            class="avatar avatar-48 photo avatar-default">Achindemo</a> asked 2 years ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">Item discussion</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>739</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>2</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="#">How can I delete more than one post at a time?</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-resolved">Resolved</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat2.png"
                                                            class="avatar avatar-48 photo">Josh Johnston</a> answered 1 month ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">Technical</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>443</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>1</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="#">I’m not receiving email notifications.</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-answered">Answered</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat3.png"
                                                            class="avatar avatar-48 photo">Bon Doe</a> answered 1 month ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">Question</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>443</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>1</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                                <div class="dwqa-question-item">
                                    <div class="dwqa-question-title">
                                        <a href="#">What are the guidelines for ratings and reviews?</a>
                                    </div>
                                    <div class="dwqa-question-meta">
                                        <span title="Open" class="dwqa-status dwqa-status-closed">Closed</span>
                                        <span>
                                                <a href="#">
                                                    <img alt="" src="/assets/images/support_avat4.png"
                                                            class="avatar avatar-48 photo">Josh Johnston</a> answered 1 month ago</span>
                                        <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                <a href="#" rel="tag">WooCommerce</a>
                                            </span>
                                    </div>
                                    <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count">
                                                <strong>443</strong> views</span>
                                        <span class="dwqa-answers-count">
                                                <strong>1</strong> replies</span>
                                        <span class="dwqa-votes-count">
                                                <strong>0</strong> votes</span>
                                    </div>
                                </div>
                                <!-- Ends: .dwqa-question-item -->
                            </div>
                            <!-- Ends: .dwqa-questions-list -->
                            <div class="dwqa-questions-footer">
                                <div class="dwqa-pagination">
                                    <span class="dwqa-page-numbers dwqa-current">1</span>
                                    <a class="dwqa-page-numbers" href="#">2</a>
                                    <a class="dwqa-page-numbers" href="#">3</a>
                                    <span class="dwqa-page-numbers dwqa-dots">…</span>
                                    <a class="dwqa-page-numbers" href="#">5</a>
                                    <a class="dwqa-next dwqa-page-numbers" href="#">Next »</a>
                                </div>
                            </div>
                            <!-- Ends: .dwqa-questions-footer -->
                        </div>
                        <!-- Ends: .dwqa-questions-archive -->
                    </div>
                    <!-- Ends: .dwqa-container -->
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
            END CONTENT AREA
    =================================-->
@endsection
