<table>
    <tbody>
    @php $i=0; $len=count($vendor_arr); @endphp
    @foreach($vendor_arr as $v)
        <tr>
            <td class="cart-title-td cart-td">
                <label class="cart-type">{{$v['category_name']}}</label><br>
                <label class="cart-name">{{$v['vendor_name']}}</label><br>
                <label class="cart-type">{{$v['event_date']}}</label>
            </td>
            <td class="cart-td">
                <div class="input-group">
                    <span class="input-group-addon cart-addon">BDT</span>
                    <input type="number" onkeyup="addTotal('{{$len}}')" class="form-control-sm cart-form-control" id="{{$i}}" name="in{{$v['query_id']}}" value="{{$v['advance_payment']}}" min="{{$v['advance_payment']}}" max="{{$v['total_payment']}}">
                    <button class="cart-delete-btn"><img src="{{asset('img/cart/Delete.png')}}"/></button>
                </div>
            </td>
        </tr>
        @php $i++; @endphp
    @endforeach
    {{--<tr>
        <td class="cart-title-td cart-td" width="50%">
            <label class="cart-type">Venue</label><br>
            <label class="cart-name">Pubali Resort Club</label><br>
            <label class="cart-type">Date : Jun 21,22,23</label>
        </td>
        <td class="cart-td" width="40%">
            <div class="input-group">
                <span class="input-group-addon cart-addon">BDT</span>
                <input id="msg" type="text" class="form-control-sm cart-form-control" name="msg">
            </div>
        </td>
    </tr>--}}
    </tbody>
</table>

{{--
@php print_r($vendor_arr); @endphp--}}
