@include('Chatify::layouts.headLinks')
<link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicon.png"> 
<div class="messenger">
    {{-- ----------------------Users/Groups lists side---------------------- --}}
    <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
        {{-- Header and search bar --}}
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">PESAN</span> </a>
                
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>

                    {{-- 🔥 LOGOUT BUTTON --}}
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" title="Logout"
                            style="background:none;border:none;color:#fff;margin-left:10px;margin-top:15px;cursor:pointer;">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                </nav>
            </nav>

            {{-- Search input --}}
            <input type="text" class="messenger-search" placeholder="Search" />
        </div>

        {{-- tabs and lists --}}
        <div class="m-body contacts-container">
           <div class="show messenger-tab users-tab app-scroll" data-view="users">
               <div class="favorites-section">
                <p class="messenger-title"><span>Favorite</span></p>
                <div class="messenger-favorites app-scroll-hidden"></div>
               </div>

               <p class="messenger-title"><span></span></p>
               {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}

               <p class="messenger-title"><span>Semua Pesan</span></p>
               <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;"></div>
           </div>

           <div class="messenger-tab search-tab app-scroll" data-view="search">
                <p class="messenger-title"><span>Cari</span></p>
                <div class="search-records">
                    <p class="message-hint center-el"><span>Ketik Untuk Cari</span></p>
                </div>
            </div>
        </div>
    </div>

    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView">
        {{-- header title [conversation name] and buttons --}}
        <div class="m-header m-header-messaging">
            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                
                {{-- left header --}}
                <div class="chatify-d-flex chatify-align-items-center">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    <div class="avatar av-s header-avatar" style="margin:0 10px;"></div>
                    <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                </div>

                {{-- right header --}}
                <nav class="m-header-right">
                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>

                    {{-- 🔥 LOGOUT BUTTON 2
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" title="Logout"
                            style="background:none;border:none;color:#fff;margin-left:10px;cursor:pointer;">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form> --}}
                </nav>
            </nav>

            <div class="internet-connection">
                <span class="ic-connected">Terhubung</span>
                <span class="ic-connecting">Menghubungkan...</span>
                <span class="ic-noInternet">Tidak ada akses internet</span>
            </div>
        </div>

        {{-- Messaging area --}}
        <div class="m-body messages-container app-scroll">
            <div class="messages">
                <p class="message-hint center-el"><span>Silakan pilih obrolan untuk mulai berkirim pesan.</span></p>
            </div>

            <div class="typing-indicator">
                <div class="message-card typing">
                    <div class="message">
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        @include('Chatify::layouts.sendForm')
    </div>

    {{-- Info side --}}
    <div class="messenger-infoView app-scroll">
        <nav>
            <p>Detail Pengguna</p>
            <a href="#"><i class="fas fa-times"></i></a>
        </nav>
        {!! view('Chatify::layouts.info')->render() !!}
    </div>
</div>

@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
