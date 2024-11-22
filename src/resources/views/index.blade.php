<!DOCTYPE html>
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
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text--name">
                            <div class="form__input--text--first_name">
                                <input type="text" name="first_name" placeholder="山田" value="{{ old('first_name') }}" />
                            </div>
                            <div class="form__error">
                                @error('first_name')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form__input--text--last_name">
                                <input type="text" name="last_name" placeholder="太郎" value="{{ old('last_name') }}" />
                            </div>
                            <div class="form__error">
                                @error('last_name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content-gender">
                        <div class="form__input--radio">
                            <input type="radio" id="genderChoice1" name="gender" value="{{ old('men') }}"checked="checked" />
                                <label for="genderChoice1">男性</label>
                            <input type="radio" id="genderChoice2" name="gender" value="{{ old('women') }}" />
                                <label for="genderChoice2">女性</label>
                            <input type="radio" id="genderChoice3" name="gender" value="{{ old('others') }}" />
                                <label for="genderChoice3">その他</label>
                        </div>
                    </div>
                    <div class="form__error">
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
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}"/>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text-telephone">
                            <div class="form__input--text-tel">
                                <input type="tel" name="tel-1" placeholder="090" value="{{ old('tel-1') }}" />
                            </div>
                    <div class="form__error">
                        @error('tel-1')
                        {{ $message }}
                        @enderror
                    </div>
                            <span class="form__label--item">-</span>
                            <div class="form__input--text-tel">
                                <input type="tel" name="tel-2" placeholder="1234" value="{{ old('tel-2') }}"/>
                            </div>
                    <div class="form__error">
                        @error('tel-2')
                        {{ $message }}
                        @enderror
                    </div>
                            <span class="form__label--item">-</span>
                            <div class="form__input--text-tel">
                                <input type="tel" name="tel-3" placeholder="5678" value="{{ old('tel-3') }}"/>
                            </div>
                        </div>
                    <div class="form__error">
                        @error('tel-3')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="千駄ヶ谷マンション101" value="{{ old('building') }}"/>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="content">
                                <option value="">選択してください</option>
                                <option value="1.商品のお届けについて">1.商品のお届けについて</option>
                                <option value="2.商品の交換について">2.商品の交換について</option>
                                <option value="3.商品トラブル">3.商品トラブル</option>
                                <option value="4.ショップへの問い合わせ">4.ショップへの問い合わせ</option>
                                <option value="5.その他">5.その他</option>
                            </select>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('content')
                        {{ $message }}
                        @enderror
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
                    </div>
                    <div class="form__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
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
