<select class="form-control" name="highlight[{{$id}}]" value="{!! $highlight !!}">
    <option value="0" @if($highlight == 0) selected @endif>Non-Highlight</option>
    
    @for ($i = 1; $i < 5; $i++)
      <option value="{{$i}}" @if($highlight == $i) selected @endif>Urut ke-{{$i}}</option>
    @endfor
    
</select>