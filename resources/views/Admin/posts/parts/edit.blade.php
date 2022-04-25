    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('posts.update',$post->id)}}" >
    @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$post->id}}">
        <div class="form-group">
            <label for="photo" class="form-control-label">الصورة</label>
            <input type="file" class="dropify" name="photo" accept="image/png, image/gif, image/jpeg,image/jpg" data-default-file="{{getFile($post->photo)}}"/>
            <span class="form-text text-danger text-center">مسموح بالصيغ الاتية  png, gif, jpeg, jpg</span>
        </div>

        <div class="form-group">
            <label for="title" class="form-control-label">العنوان</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="desc" class="form-control-label">التفاصيل</label>
            <textarea rows="4" type="text" class="form-control" name="desc">{{$post->desc}}"</textarea>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
        </div>
    </form>
<script>
    $('.dropify').dropify()
</script>
