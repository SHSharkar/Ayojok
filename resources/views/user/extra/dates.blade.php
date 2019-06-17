<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 5/29/2019
 * Time: 12:37 PM
 */
?>

<div id="dates">
    <h4>{{$same_details['vendor_name']}}</h4>
    <p>{{$same_details['category']}} </p>
    <p>Selected Date: </p>

    <div class="row date_row">

        @foreach($queries as $query)



            @if($query->status == "Available" || $query->status == "Booked")
        <div class="col-sm-4 {{($query->in_cart > 0)? 'selected_date_box' : 'available_date_box'}}" onclick="select_dates('{{$query->id}}',this)" id="selected_date">
            <p> {{$query->event_date}} ( {{ $query->shift }} )</p>
            <p>BDT: {{$query->total}}</p>
        </div>
                @else
                <div class="col-sm-4 noAvailable_date_box">
                    <p> {{$query->event_date}} ( {{ "Night" }} )</p>
                    <p>BDT: {{$query->total}}</p>
                </div>
            @endif
       @endforeach
        </div>
    </div>

</div>



