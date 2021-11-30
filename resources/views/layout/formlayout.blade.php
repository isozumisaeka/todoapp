{{-- これはformレイアウトページです --}}

{{-- これはヘッダーのコンポーネント --}}
@component('components.header')
@endcomponent
{{-- ヘッダーのコンポーネント終わり --}}
<main>
    <h1>@yield('title')</h1>
    {{-- セクション始まり --}}
    <div class="form">
        @yield('form')
    </div>
</main>
{{-- セクション終わり --}}
{{-- これはフッターのコンポーネント --}}
@component('components.footer')
@endcomponent
{{-- フッターのコンポーネント終わり --}}
