    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('team.update',$team->id)}}" >
    @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$team->id}}">
        <div class="form-group">
            <label for="photo" class="form-control-label">الصورة</label>
            <input type="file" class="dropify" name="photo" accept="image/png, image/gif, image/jpeg,image/jpg"
                   data-default-file="{{getFile($team->photo)}}"/>
            <span class="form-text text-danger text-center">مسموح بالصيغ الاتية  png, gif, jpeg, jpg</span>
        </div>

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">الاسم</label>
                    <input type="text" class="form-control" name="name" value="{{$team->name}}">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="job" class="form-control-label">الوظيفة</label>
                    <input type="text" class="form-control" name="job" value="{{$team->job}}">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="facebook" class="form-control-label">رابط فيسبوك <i class="fab fa-facebook"></i> </label>
                    <input type="text" class="form-control" name="facebook" value="{{$team->facebook}}">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="gmail" class="form-control-label">ايميل جيميل <i class="fab fa-google"></i></label>
                    <input type="email" class="form-control" name="gmail" value="{{$team->gmail}}">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="twitter" class="form-control-label">رابط تويتر <i class="fab fa-twitter"></i></label>
                    <input type="text" class="form-control" name="twitter" value="{{$team->twitter}}">
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
        </div>
    </form>
<script>
    $('.dropify').dropify()
</script>
