<table>
<tbody>
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
            <input type="text" class="form-control-sm cart-form-control" name="in{{$v['query_id']}}" value="{{$v['advance_payment']}}">
            <button class="cart-delete-btn"><img src="{{asset('img/cart/Delete.png')}}"/></button>
        </div>
    </td>
</tr>
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
