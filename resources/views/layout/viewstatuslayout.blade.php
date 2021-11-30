{{-- これはviewtasksレイアウトページです --}}
{{-- これはヘッダーのコンポーネント --}}
@component('components.header')
@endcomponent
{{-- ヘッダーのコンポーネント終わり --}}
<main>
    <h1>@yield('title')</h1>

    {{-- セクション始まり --}}
    <div class="view-content">

        <div class="left-content btn-group">
            <div class="left-top">
                @yield('lefttop')
            </div>
            <div class="left-bottom">
                @yield('leftbottom')
            </div>
        </div>

        <div class="right-contents">
            <div class="left">
                <div class="title">@yield('left-title')</div>
                <div class="i">@yield('left')</div>
            </div>
            <div class="middle">
                <div class="title">@yield('middle-title')</div>
                <div class="i">@yield('middle')</div>
            </div>
            <div class="right">
                <div class="title">@yield('right-title')</div>
                <div class="i">@yield('right')</div>
            </div>
        </div>
    </div>
</main>
{{-- セクション終わり --}}
{{-- これはフッターのコンポーネント --}}
@component('components.footer')
@endcomponent
{{-- フッターのコンポーネント終わり --}}
