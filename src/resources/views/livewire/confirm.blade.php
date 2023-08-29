<div class="confirm__content">
    <form action="/thanks" class="form" method="post">
        @csrf
        <div class="confirm-table-wrapper">
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input class="hidden-input" type="hidden" name="firstname" value="{{ @$posts['firstname'] }}">
                        <input class="hidden-input" type="hidden" name="lastname" value="{{ @$posts['lastname'] }}">
                        <p>{{ @$posts['firstname'] }}  {{ @$posts['lastname'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        @if($posts['gender'] === 1)
                        <input class="hidden-input" type="hidden" name="gender" value="1"><p>男性</p>
                        @else
                        <input class="hidden-input" type="hidden" name="gender" value="2"><p>女性</p>
                        @endif
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input class="hidden-input" type="hidden" name="email" value="{{ @$posts['email'] }}"><p>{{ @$posts['email'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">郵便番号</th>
                    <td class="confirm-table__text">
                        <input class="hidden-input" type="hidden" name="postcode" value="{{ @$posts['postcode'] }}"><p>{{ @$posts['postcode'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input class="hidden-input" type="hidden" name="address" value="{{ @$posts['address'] }}"><p>{{ @$posts['address'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input class="hidden-input" type="hidden" name="building_name" value="{{ @$posts['building_name'] }}"><p>{{ @$posts['building_name'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">ご意見</th>
                    <td class="confirm-table__text">
                        <input class="hidden-input" type="hidden" name="opinion" value="{{ @$posts['opinion'] }}"><p>{{ @$posts['opinion'] }}</p>
                    </td>
                </tr>
            </table>
            <div class="form__button">
                <button type="submit" name='submit' class="form__button-submit transition-button">送信</button>
                <button type="submit" name='back' class="form__fix-button reset-button" value="back">修正する</button>
            </div>
        </div>
    </form>
</div>
