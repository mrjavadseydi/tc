<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            {{ session('account')->firstname . ' ' . session('account')->lastname }} خوش آمدید
        </div>
    </div>
    <style>
        .nav-item {
            font-size: 10px !important;
        }

    </style>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            {{-- @if (false) --}}
            @if (\App\Models\Payment::where([['status', 0], ['account_id', session('account')['id']]])->count() == 0)
                <li class="nav-item">
                    <a href="{{ route('account.payments') }}" class="nav-link"><span>پرداخت وجه</span></a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('account.payments') }}" class="nav-link"><span>پرداخت وجه</span></a>
                </li>
                @if (\App\Models\Account::whereId(session('account')['id'])->first()->done == 0)
                <li class="nav-item">
                    <a href="{{ route('account.basic') }}" class="nav-link"><span>ثبت اطلاعات اولیه</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.document') }}" class="nav-link"><span class="d-inline">ثبت مدارک
                            تحصیلی</span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Document::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.conference') }}" class="nav-link"><span class="d-inline">ثبت مقالات
                            کنفرانسی</span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Conference::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.Magazinece') }}" class="nav-link"><span class="d-inline"> ثبت مقالات
                            نشریه</span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Magazinece::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.book') }}" class="nav-link"><span class="d-inline"> ثبت کتب (ترجمه /
                            تالیفی)</span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Book::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.advice') }}" class="nav-link"><span class="d-inline">توصیه نامه های
                            علمی</span>

                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Advice::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.invention') }}" class="nav-link"><span class="d-inline">گواهی ثبت
                            اختراع</span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Invention::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.language') }}" class="nav-link"><span class="d-inline">مدرک
                            زبان</span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Language::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.hokm') }}" class="nav-link"><span class="d-inline"> حکم کارگزینی
                        </span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Hokm::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.festival') }}" class="nav-link"><span class="d-inline"
                            style="font-size: 12px !important;">گواهی برگزیدگی
                            جشنواره های علمی</span>
                        <div class="text-left d-inline" style="float: left">
                            <span>
                                (
                                {{ App\Models\Festival::where('account_id', session('account')->id)->count() }}
                                )
                            </span>
                        </div>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('account.check') }}" class="nav-link"><span class="d-inline">
                            تایید نهایی وارسال</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
