<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/21/2019
 * Time: 3:02 PM
 */


?>

<div id="events">
    @foreach($events as $event)
        <label class="radio_container">{{$event->title}}
            <input type="radio" id="{{$event->id}}" name="radio" value="{{$event->id}}" onclick="add_event_to_query({{$event->id}})" {{($event->id == $tag_id)? "checked":""}}>
            <span class="checkmark"></span>
            <a href="javascript:void(0)" style="float: right" onclick="remove_event_from_query('{{$event->id}}')">&times;</a>
        </label>
    @endforeach
</div>

