<?php 
    $sql_category_list = "select * from category";
    $categoryList = executeResult($sql_category_list);
?>

<style>
</style>

<h2>Quản lý phân loại sản phẩm</h2>

<div class="container mt-3">
  <form action="">
    <table class="table">
        <tr>
          <th>Thêm danh mục sản phẩm</th>
        </tr>
        <tr>
          <td>Tên danh mục</td>
          <td>
              <input type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" class="btn btn-success">Thêm</button>
          </td>
        </tr>
    </table>
  </form>
</div>

<h2>Liệt kê danh mục sản phẩm</h2>           
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>No</th>
        <th>Tên danh mục</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $index = 0;
      foreach($categoryList as $item)
        echo "<tr>
        <td>".++$index."</td>
        <td>".$item['name']."</td>
        <td>
        <a href='?action=productCategory&query=edit&id=".$item["id"]." '>
            <button class='btn btn-danger'>Sửa</button>
          </a>
        </td>
        <td>
          <a href='modules/product category/delete.php?id=".$item["id"]." '>
            <button class='btn btn-danger'>Xóa</button>
          </a>
        </td>
        ";?>
    </tbody>
  </table>