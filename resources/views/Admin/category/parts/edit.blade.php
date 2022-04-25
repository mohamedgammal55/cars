<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('categories.update',$category->id)}}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$category->id}}">

    <div class="form-group">
        <label for="title" class="form-control-label">العنوان</label>
        <input type="text" class="form-control" name="title" value="{{$category->title}}">
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>

