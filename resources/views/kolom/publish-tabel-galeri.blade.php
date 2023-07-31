<div class="form-check form-check-inline text-center">
  <input class="form-check-input" onclick="publishChange(this)" type="checkbox" id="publish-{{$id}}" value="1" @if($publish) checked @endif data-id="{{$id}}">
  <label class="form-check-label" for="publish-{{$id}}"></label>
</div>