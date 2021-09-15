<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('プロフィール') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{Auth::user()['name']}}さんこんにちは
                    <h2>プロフィール情報</h2>
                    <table class="table">
                        <?php 
                        $showlist = [
                            ["id", "会員番号"],
                            ["name", "ID"],
                            ["displayname","ユーザー名"],
                            ["email","登録メールアドレス"]
                        ];
                        ?>
                        @foreach ($showlist as $showitem)
                        <tr>
                            <td>{{$showitem[1]}}</td>
                            <td>{{Auth::user()[$showitem[0]]}}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="{{url("profile/edit")}}">編集</a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
