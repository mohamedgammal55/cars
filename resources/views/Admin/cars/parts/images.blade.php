<style>
    html * {
        box-sizing: border-box;
    }
    p {
        margin: 0;
    }
    .upload__box {
        padding: 40px;
    }
    .upload__inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .upload__btn {
        display: inline-block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 116px;
        padding: 5px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color: #4045ba;
        border-color: #4045ba;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
    }
    .upload__btn:hover {
        background-color: unset;
        color: #4045ba;
        transition: all 0.3s ease;
    }
    .upload__btn-box {
        margin-bottom: 10px;
    }
    .upload__img-wrap {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }
    .upload__img-box {
        width: 200px;
        padding: 0 10px;
        margin-bottom: 12px;
    }
    .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
    }
    .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
    }
    .deleteFromOld {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
    }
    .deleteFromOld:after {
        content: '\2716';
        font-size: 14px;
        color: white;
    }
    .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
    }

</style>

<div class="upload__box">
    <div class="upload__btn-box">
        <label class="upload__btn">
            <p>Upload images</p>
            <input type="file" multiple="" data-max_length="20"  accept="image/png, image/jpeg,image/jpg" class="upload__inputfile">
        </label>
    </div>
    <div class="upload__img-wrap">
        @foreach($images as $image)
        <div class="upload__img-box"><div style="background-image: url('{{getFile($image->image)}}')"  class="img-bg"><div class="deleteFromOld" data-id="{{$image->id}}"></div></div></div>
        @endforeach
    </div>
</div>
<form id="imagesForm" class="imagesForm" method="POST" enctype="multipart/form-data" action="{{route('cars.store.images',$id)}}">
    @csrf

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
    <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
</div>
</form>
<script src="{{url('admin/assets/js/uploadBox.js')}}"></script>
