
<div >
    <a href="#" class="link" data_id="{{$result->id}}"><img src="{{asset('image/'.$result->picture)}}" alt=" " width=200px></a>
    <ficaption class="">{{$result->name}} </ficaption>
</div>
<form class= forma method="get" class = "form2" action="/basket">
    <input type="number" name="count" value="1" steep="1" min="0">
    <input type ="hidden" value = "{{$result->id}}"  id="id">
    <button type="submit" class="btn btn-default button">Добавить</button>
</form>