<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('model.store')}}">
    @csrf

    <input name="category_id" type="hidden" value="{{$category_id}}">
    <div class="form-group">
        <label for="title" class="form-control-label">العنوان</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
    </div>
</form>
