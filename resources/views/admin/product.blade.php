@extends('admin/layout')

@section('product')


<div class="form-product">
   <a href="{{route('product.index')}}" class="pro-a inja">تمام محصولات</a>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
 @csrf
 <label for="text" l-ml>آدرس محصول</label>
 <a href="#" id="delkhah">تعیین آدرس دلخواه</a>
 <br>
 <input type="hidden" id="url" name="url"><br>
<label for="text" l-ml>نام</label>
<input type="text" name="name" class="form-control form-w">
<label for="text" l-ml>قیمت</label>

<input type="text" name="price" class="form-control form-w">
<br>
<textarea id="summernote" name="content">Hello Summernote</textarea>
<label for="file">ارسال عکس</label>
<input type="file" name="propic" class="form-control form-w">
<br>
<input class="sub" type="submit" value="ارسال" >
</form>
</div>
<script>
   var theName = document.querySelector("[name='name']");
   var url = document.querySelector("[name='url']");
   var delkhah = document.getElementById("delkhah");
   delkhah.onclick = function(e){
      url.setAttribute("type","text");
      url.classList= "form-control";
      url.classList= "form-w";
      e.preventDefault();    
   }
   theName.onfocusout = function(){
      if(url.value == ""){
         url.value = theName.value.replaceAll(" ","-");
      }
   }
</script>
@endsection
