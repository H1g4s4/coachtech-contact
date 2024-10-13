<!DOCTYPE html>
<!--管理画面ページ-->
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
            FashionablyLate
            </a>
            <a class="header__logout-button" href="/logout">logout</a>
        </div>
    </header>

    <main>
        <div class="admin__content">
            <div class="admin__heading">
                <h2>Admin</h2>
            </div>
            <form method="GET" action="{{ route('admin.inquiries') }}">
                <input type="text" name="name" placeholder="名前やメールアドレスを入力してください" value="{{ request('name') }}">
                <select name="gender">
                    <option value="">性別</option>
                    <option value="male" {{ request('gender') == 'male' ? 'selected' : '' }}>男性</option>
                    <option value="female" {{ request('gender') == 'female' ? 'selected' : '' }}>女性</option>
                </select>
                <select name="type">
                    <option value="">お問い合わせの種類</option>
                    <option value="交換" {{ request('type') == '交換' ? 'selected' : '' }}>商品の交換について</option>
                    <!-- 他の種類も追加 -->
                </select>
                <input type="date" name="date" value="{{ request('date') }}">
                <button type="submit">検索</button>
                <button type="reset" onclick="window.location.href='{{ route('admin.inquiries') }}'">リセット</button>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->name }}</td>
                        <td>{{ $inquiry->gender }}</td>
                        <td>{{ $inquiry->email }}</td>
                        <td>{{ $inquiry->type }}</td>
                        <td><a href="#">詳細</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $inquiries->links() }}
    </main>
</body>
</html>