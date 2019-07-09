<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/8/2019
 * Time: 4:03 PM
 */
?>

@if(isset($categories))
    @foreach ($categories as $category)
        <option value="{{$category->id}}" style="text-transform:capitalize;">{{$category->name}}</option>
    @endforeach
@endif

@if(isset($items))
    @foreach ($items as $item)
        <option value="{{$item->id}}" style="text-transform:capitalize;">{{$item->title}}  </option>
    @endforeach
@endif

