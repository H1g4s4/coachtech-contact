<!DOCTYPE html>
<!--入力フォームページ-->
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact__content">
            <div class="contact__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content--inline">
                        <div class="form__input--text">
                            <input type="text" name="first-name" placeholder="例:山田" value="{{ old('first-name') }} />
                        </div>
                        <div class="contact-form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form__input--text">
                            <input type="text" name="later-name" placeholder="例:太郎" value="{{ old('later-name') }} />
                        </div>
                        <div class="contact-form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--label">
                        <label>
                            <input type="radio" name="gender" value="male" {{ old('gender', 'male') == 'male' ? 'checked' : '' }}>
                            男性
                        </label>
                    </div>
                    <div class="form__group--label">
                        <label>
                            <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                            女性
                        </label>
                    </div>
                    <div class="form__group--label">
                        <label>
                            <input type="radio" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }}>
                            その他
                        </label>
                    </div>
                    <div class="contact-form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="contact-form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content--inline">
                        <div class="form__input--text--small">
                            <input type="text" name="phone_part1" maxlength="3" pattern="\d{3}" placeholder="080" value="{{ old('phone_part1') }}" />
                        </div>
                        <span class="separator">-</span>
                        <div class="form__input--text--small">
                            <input type="text" name="phone_part2" maxlength="4" pattern="\d{4}" placeholder="1234" value="{{ old('phone_part2') }}" />
                        </div>
                        <span class="separator">-</span>
                        <div class="form__input--text--small">
                            <input type="text" name="phone_part3" maxlength="4" pattern="\d{4}" placeholder="5678" value="{{ old('phone_part3') }}" />
                        </div>
                        <div class="contact-form__error">
                            @error('tel')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                        </div>
                        <div class="contact-form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <select id="inquiry-type" name="inquiry_type" required>
                            <option value="" disabled selected>選択してください</option>
                            <option value="deliver">商品のお届けについて</option>
                            <option value="exchange">商品の交換について</option>
                            <option value="trouble">商品トラブル</option>
                            <option value="contact">ショップへの問い合わせ</option>
                            <option value="others">その他</option>
                        </select>
                        <div class="contact-form__error">
                            @error('category_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                        </div>
                        <div class="contact-form__error">
                            @error('detail')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
