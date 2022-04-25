    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('team.store')}}">
        @csrf
        <div class="form-group">
            <label for="photo" class="form-control-label">الصورة</label>
            <input type="file" class="dropify" name="photo" accept="image/png, image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">مسموح بالصيغ الاتية png, gif, jpeg, jpg</span>
        </div>
        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">الاسم</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="job" class="form-control-label">الوظيفة</label>
                    <input type="text" class="form-control" name="job">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="facebook" class="form-control-label">رابط فيسبوك <i class="fab fa-facebook"></i> </label>
                    <input type="text" class="form-control" name="facebook">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="gmail" class="form-control-label">ايميل جيميل <i class="fab fa-google"></i></label>
                    <input type="email" class="form-control" name="gmail">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="twitter" class="form-control-label">رابط تويتر <i class="fab fa-twitter"></i></label>
                    <input type="text" class="form-control" name="twitter">
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
<script>
    $('.dropify').dropify()
</script>
