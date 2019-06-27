<table>
    <tbody class="extra">

    <?php
        $cart_query_ids = array();
    ?>
    @php $i=0; $len=count($vendor_arr);  @endphp
    @foreach($vendor_arr as $v)
        <tr>
            <td class="cart-title-td cart-td">
                <label class="cart-type">{{$v['category_name']}}</label><br>
                <label class="cart-name">{{$v['vendor_name']}}</label><br>
                <label class="cart-type">Date: {{$v['event_date']}}</label>
            </td>
            <td class="cart-td">
                <div class="input-group">
                    <span class="input-group-addon cart-addon">BDT</span>
                    <input type="number" onkeyup="addTotal('{{$len}}')" class="form-control-sm cart-form-control" id="{{$i}}" name="{{$v['query_id']}}" value="{{$v['amount']}}" min="{{$v['min']}}" max="{{$v['max']}}">
                    <button onclick="removeFromCart({{$v['query_id']}})" class="cart-delete-btn"><img src="{{asset('img/cart/Delete.png')}}"/></button>
                </div>
            </td>
        </tr>
        <?php
        $cart_query_ids[$i] = $v['query_id'];
        ?>
        @php $i++;  @endphp
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

<input type="hidden" value="{{json_encode($cart_query_ids)}}" id="cart_query_ids">
<input type="hidden" value="" id="cart_current_amounts">
<script>
    $(document).ready(function(){
       addTotal('{{$len}}');
    });
</script>

{{--
@php print_r($vendor_arr); @endphp--}}
