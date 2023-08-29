<div class="contact__content">
    <form wire:submit.prevent="confirm" class="form h-adr" action="/contacts/confirm" method="post">
        @csrf
        <span class="p-country-name" style="display:none;">Japan</span>
        <div class="form__item">
            <div class="form__label-wrapper">
                <label for="id_name" class="form__label">お名前<span class='form-required'>※</span></label>
            </div>
            <div class="form__item-input--flex">
                <div class="form__item-first-name">
                    <input type="text" id="id_name" name="firstname" wire:model="posts.firstname" value="{{ old('post.firstname') }}">
                    <p class="form__item-p">　例）山田</p>
                    <div class="form__error">
                        @error('posts.firstname') {{ $message }} @enderror
                    </div>
                </div>
                <div class="form__item-last-name">
                    <input type="text" id="id_name" name="lastname" wire:model="posts.lastname" value="{{ old('lastname') }}">
                    <p class="form__item-p">　例）太郎</p>
                    <div class="form__error">
                        @error('posts.lastname') {{ $message }} @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__item">
            <div class="form__label-wrapper">
                <label for="id_gender" class="form__label">性別<span class="form-required">※</span></label>
            </div>
            <div class="form__item-input-wrapper">
                <input id="id_male" class="gender-input" type="radio" name="gender" wire:model="posts.gender" value="1" checked>
                <label for="id_male" class="gender-label">男性</label>
                <input id="id_female" class="gender-input" type="radio" name="gender" wire:model="posts.gender" value="2">
                <label for="id_female" class="gender-label">女性</label>
            </div>
        </div>
        <div class="form__item">
            <div class="form__label-wrapper">
                <label for="id_email" class="form__label">メールアドレス<span class="form-required">※</span></label>
            </div>
            <div class="form__item-input">
                <input type="text" id="id_email" name="email" wire:model="posts.email">
                <p class="form__item-p">　例）test@example.com</p>
                <div class="form__error">
                        @error('posts.email') {{ $message }} @enderror
                </div>
            </div>
        </div>
        <div class="form__item">
            <div class="form__label-wrapper">
                <label for="id_postcode" class="form__label" >郵便番号<span class="form-required">※</span></label>
            </div>
            <div class="form__item-input--flex">
                <p class="form__item-post-mark">〒</p>
                <div class="form__item-input-set">
                    <script>new YubinBango.MicroformatDom();</script>
                    <input type="text" id="id_postcode" class="p-postal-code" size="8" maxlength="8" name="postcode" wire:model.lazy="posts.postcode">
                    <p class="form__item-p">　例）123-4567</p>
                    <div class="form__error">
                        @error('posts.postcode') {{ $message }} @enderror
                </div>
                </div>
            </div>
        </div>
        <div class="form__item">
            <div class="form__label-wrapper">
                <label for="id_address" class="form__label">住所<span class="form-required">※</span></label>
            </div>
            <div class="form__item-input">
                <input type="text" id="id_address" class="p-region p-locality p-street-address p-extended-address" name="address" wire:model="posts.address">
                <p class="form__item-p">　例）東京都渋谷区千駄ヶ谷1-2-3</p>
                <div class="form__error">
                        @error('posts.address') {{ $message }} @enderror
                </div>
            </div>
        </div>
        <div class="form__item">
            <div class="form__label-wrapper">
                <label for="id_building" class="form__label">建物名</label>
            </div>
            <div class="form__item-input">
                <input type="text" id="id_building" name="building_name" wire:model="posts.building_name">
                <p class="form__item-p">　例）千駄ヶ谷マンション101</p>
                <div class="form__error">
                        @error('posts.building_name') {{ $message }} @enderror
                </div>
            </div>
        </div>
        <div class="form__item">
            <div class="form__label-wrapper">
                <label for="id_opinion" class="form__label">ご意見<span class="form-required">※</span></label>
            </div>
            <div class="form__item-textarea">
                <textarea id="" cols="30" rows="5" maxlength="120" class="form__item-textarea" name="opinion" wire:model="posts.opinion"></textarea>
                <div class="form__error">
                        @error('posts.opinion') {{ $message }} @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__confirm-button transition-button" type='submit'>確認</button>
        </div>
    </form>
</div>