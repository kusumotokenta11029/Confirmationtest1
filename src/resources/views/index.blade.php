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
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text--name">
                            <div class="form__input--text--sei">
                                <input type="text" name="sei" placeholder="山田" />
                            </div>
                            <div class="form__input--text--mei">
                                <input type="text" name="mei" placeholder="太郎" />
                            </div>
                        </div>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content-gender">
                        <div class="form__input--radio">
                            <input type="radio" id="genderChoice1" name="gender" value="men" checked="checked" />
                                <label for="genderChoice1">男性</label>
                            <input type="radio" id="genderChoice2" name="gender" value="women" />
                                <label for="genderChoice2">女性</label>
                            <input type="radio" id="genderChoice3" name="gender" value="others" />
                                <label for="genderChoice3">その他</label>
                        </div>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com" />
                        </div>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
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
                                <input type="tel" name="tel-1" placeholder="090" />
                            </div>
                            <span class="form__label--item">-</span>
                            <div class="form__input--text-tel">
                                <input type="tel" name="tel-2" placeholder="1234" />
                            </div>
                            <span class="form__label--item">-</span>
                            <div class="form__input--text-tel">
                                <input type="tel" name="tel-3" placeholder="5678" />
                            </div>
                        </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="千駄ヶ谷マンション101" />
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
                            <select name="inquiry">
                                <option value="">選択してください</option>
                                <option value="1.商品のお届けについて">1.商品のお届けについて</option>
                                <option value="2.商品の交換について">2.商品の交換について</option>
                                <option value="3.商品トラブル">3.商品トラブル</option>
                                <option value="4.ショップへの問い合わせ">4.ショップへの問い合わせ</option>
                                <option value="5.その他">5.その他</option>
                            </select>
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
                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
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
