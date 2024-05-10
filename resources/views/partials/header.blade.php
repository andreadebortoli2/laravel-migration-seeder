<header>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs pt-3" id="myTab" role="tablist">
        <li class="logo text-primary">Lara<span class="text-info">TRAIN</span></li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('guests.index') }}">
                <button class="nav-link text-black {{ Route::currentRouteName() === 'guests.index' ? 'active' : '' }}"
                    id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                    aria-controls="home" aria-selected="true">
                    Home
                </button>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('guests.show') }}">
                <button class="nav-link text-black {{ Route::currentRouteName() === 'guests.show' ? 'active' : '' }}"
                    id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                    aria-controls="profile" aria-selected="false">
                    Today's trains
                </button>
            </a>
        </li>
    </ul>

</header>
