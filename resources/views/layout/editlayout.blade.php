{{-- これはedittasksレイアウトページです --}}
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
        <div class="right-content">
            @yield('form')
        </div>
    </div>
</main>
{{-- セクション終わり --}}
{{-- これはフッターのコンポーネント --}}
@component('components.footer')
@endcomponent
{{-- フッターのコンポーネント終わり --}}
