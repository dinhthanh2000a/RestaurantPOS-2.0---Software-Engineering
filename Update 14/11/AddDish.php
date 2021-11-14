<link type="text/css" rel="stylesheet" href="./public/css/register.css">

<section class="menuss">
  <form class="formaddemp" action="index.php?controller=dish&action=addDish" method="POST" enctype="multipart/form-data">
    <p style="font-size:30px;margin:10px;padding:20px;">Thêm món mới</p>

    <div class="mb-3">
      <label class="form-label">Tên món</label>
      <input type="text" name="dishname" id="dishname" class="form-control" placeholder="Nhập tên món">
    </div>

    <div class="mb-3">
      <label class="form-label">Giá</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="Nhập giá">
    </div>

    <div class="mb-3">
      <label class="form-label">Mô tả</label>
      <input type="text" name="description" class="form-control" placeholder="Nhập mô tả">
    </div>

    <div class="mb-3">
      <label class="form-label">Loại</label>
      <select name="type" class="selectt">
        <option value="food">Food</option>
        <option value="drink">Drink</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Ảnh</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="clear"></div>
    <button type="submit" name="btnnewdish">Thêm</button>
    <br><br>

    <?php if (isset($data["result"])){ ?>
      <div class="notiregister"><?php 
      if($data["result"]=="true"){
      ?> <h4><?= "Thêm thành công"?> </h4><?php
      } else{
      ?><h4 class="error"><?= "Có gì đó không đúng, vui lòng nhập lại. Nếu không có gì bất thường, hãy thử đổi tên tệp";?></h4> <?php 
      }
      ?></div>
    <?php } ?>

</form>
</section>