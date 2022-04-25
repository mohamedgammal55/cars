    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="photo" class="form-control-label">الصورة</label>
            <input type="file" class="dropify" name="photo" accept="image/png, image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">مسموح بالصيغ الاتية png, gif, jpeg, jpg</span>
        </div>

        <div class="form-group">
            <label for="title" class="form-control-label">العنوان</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="desc" class="form-control-label">التفاصيل</label>
            <textarea rows="4" type="text" class="form-control" name="desc"></textarea>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
<script>
    $('.dropify').dropify()
</script>
