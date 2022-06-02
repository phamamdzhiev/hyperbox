<header id="__main_header">
    <div class="container-xxl">
        <div class="d-flex align-items-center justify-content-between inner-wrapper">
            <div id="__nav-wrapper" class="d-flex align-items-center">
                <div id="__logo" class="me-5">
                    <h4>{{env('APP_NAME')}}</h4>
                </div>
                <nav>
                    <ul>
                        <li class="{{ \Illuminate\Support\Facades\Route::currentRouteName() === 'default' ? 'active' : ''}}">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0H16V3H0V0Z" fill="currentColor"></path>
                                <path d="M5 5H1V13H15V5H11V7H5V5Z" fill="currentColor"></path>
                            </svg>
                            <a href="/">Mystery Box</a>
                        </li>
                        <li  class="{{ \Illuminate\Support\Facades\Route::currentRouteName() === 'affiliates' ? 'active' : ''}}">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 2.5C8 3.88071 6.88071 5 5.5 5C4.11929 5 3 3.88071 3 2.5C3 1.11929 4.11929 0 5.5 0C6.88071 0 8 1.11929 8 2.5Z"
                                    fill="currentColor"></path>
                                <path d="M2 7L0 9V12H8V7H2Z" fill="currentColor"></path>
                                <path d="M16 9L14 7H10V12H16V9Z" fill="currentColor"></path>
                                <path
                                    d="M12 5C13.1046 5 14 4.10457 14 3C14 1.89543 13.1046 1 12 1C10.8954 1 10 1.89543 10 3C10 4.10457 10.8954 5 12 5Z"
                                    fill="currentColor"></path>
                            </svg>
                            <a href="{{route('affiliates')}}">Афилиейти</a>
                        </li>
                        <li  class="{{ \Illuminate\Support\Facades\Route::currentRouteName() === 'how.to.play' ? 'active' : ''}}">
                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM7 5V3H9V5H7ZM9 10H11V12H5V10H7V8H5V6H9V10Z"
                                    fill="currentColor"></path>
                            </svg>
                            <a href="{{route('how.to.play')}}">Как работи</a>
                        </li>
                    </ul>
                </nav>
                {{--                hamburger button--}}
                <div id="hamburger">
                    <div class="bar" id="bar-1"></div>
                    <div class="bar" id="bar-2"></div>
                    <div class="bar" id="bar-3"></div>
                </div>
            </div>
        </div>
    </div>
</header>
