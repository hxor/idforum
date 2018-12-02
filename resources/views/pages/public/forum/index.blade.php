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
                                @if (count($discussions) > 0)
                                    @foreach ($discussions as $discus)
                                        <div class="dwqa-question-item">
                                            <div class="dwqa-question-title">
                                                <a href="{{ route('forum.show') }}">{{ $discus->title }}</a>
                                            </div>
                                            <div class="dwqa-question-meta">
                                                <span title="Open" class="dwqa-status {{ $discus->is_solved ? 'dwqa-status-resolved' : 'dwqa-status-open' }}">
                                                    {{ $discus->is_solved ? 'Resolved' : 'Open' }}
                                                </span>
                                                <span>
                                                        <a href="#">
                                                            <img alt="" src="{{ asset('assets/images/user-avatar.png') }}" height="25" class="avatar avatar-48 photo avatar-default">
                                                            {{ $discus->user->name }}
                                                        </a>
                                                        asked {{ $discus->created_at->diffForHumans() }}
                                                </span>
                                                <span class="dwqa-question-category">&nbsp;•&nbsp;
                                                    <a href="#" rel="tag">{{ $discus->channel->title }}</a>
                                                </span>
                                            </div>
                                            <div class="dwqa-question-stats">
                                                <span class="dwqa-answers-count">
                                                    <strong>{{ $discus->replies->count() }}</strong> replies
                                                </span>
                                                <span class="dwqa-votes-count">
                                                    <strong>{{ $discus->votes->count() }}</strong> votes
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Ends: .dwqa-question-item -->
                                    @endforeach
                                @endif
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
