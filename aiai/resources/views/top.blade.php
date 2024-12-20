@extends('layout')

{{-- タイトル --}}
@section('title') (ホーム)@endsection

{{--　メインコンテンツ　--}}
@section('contets')
        <h1>相積みアイアイ ホーム</h1>
            <form action="./top.html" method="post">
                <button>ユーザー登録情報</button>

            <p class="card-text">現在のポイント<strong>"{{ $user->valid_points }}"ポイント</strong></p>


            <form action="./top.html" method="post">
                <button>新規配送予定登録</button>
                <button>集荷情報一覧</button>
            </form>
        <br>

        <h3>登録した配送・集荷一覧</h3>
        <table border="1">
        <tr>
            <th>登録内容
            <th>配送先
            <th>日程
            <th>車種
            <th>ポイント
            <th>メッセージ一覧
        <tr>
            <td>配送
            <td>神奈川県横浜市戸塚区名瀬町〜神奈川県横浜市泉区
            <td>2024/04/01
            <td>準中型車両
            <td>200
            <td><a href="./message.html">メッセージ履歴</a>
        <tr>

        <tr>
            <td>集荷
            <td>神奈川県横浜市戸塚区名瀬町〜神奈川県横浜市泉区
            <td>2024/04/21
            <td>バイク
            <td>50
            <td><a href="./message.html">メッセージ履歴</a>
        <tr>

        </table>
        <!-- ページネーション -->
        <hr>
        <menu label="リンク">
        <a href="./index.html">ログアウト</a><br>
        </menu>
@endsection