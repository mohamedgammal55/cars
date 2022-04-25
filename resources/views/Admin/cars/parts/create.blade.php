<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('cars.store')}}">
    @csrf


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="photo" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image" accept="image/png, image/gif, image/jpeg,image/jpg"/>
                <span class="form-text text-danger text-center">مسموح بالصيغ الاتية png, gif, jpeg, jpg</span>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="photo" class="form-control-label">التفاصيل</label>
                <textarea id="ckTextarea" name="description"></textarea>

            </div>
        </div>
    </div>

    <hr style="width:100%;text-align:left;margin-left:0;color: black;background: black">

    <div class="row">
       <div class="col-sm-4">
           <div class="form-group">
               <label for="photo" class="form-control-label">السعر</label>
               <input type="text" class="form-control numbersOnly" name="price" placeholder="السعر">

           </div>
       </div>
       <div class="col-sm-4">
           <div class="form-group">
               <label for="photo" class="form-control-label">الماركة</label>
               <select class="form-control" name="category_id" id="choices-category">
                   <option value="">أختر الماركة</option>
                   @foreach($categories as $category)
                       <option value="{{$category->id}}">{{$category->title}}</option>
                   @endforeach
               </select>
           </div>
       </div>
       <div class="col-sm-4">
           <div class="form-group">
               <label for="photo" class="form-control-label">الموديل</label>
               <select class="form-control" name="sub_category_id" id="choices-subCategory">
                   <option value="">أختر الماركة أولا</option>

               </select>
           </div>
       </div>
    </div>
    <hr style="width:100%;text-align:left;margin-left:0;color: black;background: black">
    <div class="table-responsive-md col-sm-12">
        <table class="table table-striped-table-bordered table-hover table-checkable table-" id="tbl_posts">
            <thead>
            <tr>

                <th>#</th>
                <th ></th>
                <th ></th>
                <th>
                    <a class="btn btn-info add-record click" data-added="0"><i class="fa fa-plus"></i></a>
                </th>
            </tr>
            </thead>
            <tbody id="tbl_posts_body">
            <tr >
                <td><span class="sn">1</span>.</td>
                <td>
                    <input type="text" name="key[]" readonly  class="form-control" value="سنة الصنع"  placeholder="" >
                </td>
                <td>
                    <select name="value[]"  class="form-control">
                        @foreach(range(date('Y'), 1950) as $year)
                            <option value="{{$year}}">{{$year}}</option>
                        @endforeach
                    </select>
                </td>

                <td></td>
            </tr>
            <tr >
                <td><span class="sn">2</span>.</td>
                <td>
                    <input type="text" name="key[]" readonly  class="form-control" value="الحالة"  placeholder="" >
                </td>
                <td>
                    <select class="form-control" name="value[]">
                        <option value="جديدة">جديدة</option>
                        <option value="مستعملة">مستعملة</option>
                    </select>
                </td>

                <td></td>
            </tr>
            <tr >
                <td><span class="sn">3</span>.</td>
                <td>
                    <input type="text" name="key[]" readonly  class="form-control" value="ناقل الحركة"  placeholder="" >
                </td>
                <td>
                    <select class="form-control" name="value[]">
                        <option value="أتوماتيك">أتوماتيك</option>
                        <option value="مانيوال">مانيوال</option>
                    </select>
                </td>

                <td></td>
            </tr>
            </tbody>
        </table>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
    </div>
</form>
<script>
    $('.dropify').dropify()
    CKEDITOR.replace( 'ckTextarea' );


    // Show sub categories
    var categories = JSON.parse('<?php echo json_encode($categories) ?>');
    $(document).on('change', '#choices-category', function () {
        var id = $(this).val();
        var category = categories.filter(oneObject => oneObject.id == id)
        if (category.length > 0) {
            var subsCategory = category[0].sub_category
            $('#choices-subCategory').html('<option value="">إختر الموديل</option>')
            $.each(subsCategory, function (index) {
                console.log(subsCategory[index].title)

                $('#choices-subCategory').append('<option value="' + subsCategory[index].id + '">' + subsCategory[index].title + '</option>')
            })
        }
    })
</script>
