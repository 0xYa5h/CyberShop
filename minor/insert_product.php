<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Product</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/
bootstrap.min.css"
    />

    <script
      src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"
      referrerpolicy="origin"
    ></script>
    <script>
      tinymce.init({ selector: "textarea" });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
"
      rel="stylesheet"
      integrity="
sha384-wvfXpqpZzVQGK6TAH5PVIGO FQNHSOD2xbE+QkPXCAFINEEVOEH31esibVCOQVnN"
      crossorigin="
anonymous"
    />
  </head>
  <body>
    <div class="row">
      <!-- breadcrumb row start -->
      <div class="col-lg-12">
        <div class="breadcrumb">
          <li class="active">
            <img
              src="https://img.icons8.com/ios-glyphs/30/000000/dashboard.png"
            />
            Dashboard / Insert Product
          </li>
        </div>
      </div>
    </div>
    <!-- breadcrumb row end-->

    <!-- pannel row start -->
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="pannel pannel-default">
          <div class="pannel-heading">
            <!-- pannel heading start -->
            <h3 class="pannel-title"><i> </i> Insert Product</h3>
          </div>
          <!-- pannel heading end-->
          <div class="pannel-body">
            <form
              class="form-horizontal"
              method="post"
              action=""
              ,
              enctype="multipart/form-data"
            >
              <div class="form-group">
                <label class="col md-3 control-label"> Product Title </label>
                <input
                  type="text"
                  name="product_title"
                  class="form-control"
                  required=""
                />
              </div>
              <div class="form-group">
                <label class="col md-3 control-label"> Product Category </label>
                <select name="product_cat" class="form-control">
                  <option>Select a product category</option>
                  <!--Data Base code to be written here  -->
                </select>
              </div>
              <div class="form-group">
                <label class="col md-3 control-label"> Categories</label>
                <select name="cat" class="form-control">
                  <option>Select Categories</option>
                </select>
              </div>
              <div class="form-group">
                <label class="col md-3 control-label"> Product Image 1 </label>
                <input
                  type="file"
                  name="product_img1"
                  class="form-control"
                  required=""
                />
              </div>
              <div class="form-group">
                <label class="col md-3 control-label"> Product Image 2 </label>
                <input
                  type="file"
                  name="product_img2"
                  class="form-control"
                  required=""
                />
              </div>
              <div class="form-group">
                <label class="col md-3 control-label"> Product Image 3 </label>
                <input
                  type="file"
                  name="product_img3"
                  class="form-control"
                  required=""
                />
              </div>
              <div class="form-group">
                <label class="col md-3 control-label"> Product Price </label>
                <input
                  type="text"
                  name="product_price"
                  class="form-control"
                  required=""
                />
              </div>
              <div class="form-group">
                <label class="col md-3 control-label"> Product Keyword </label>
                <input
                  type="text"
                  name="product_keyword"
                  class="form-control"
                  required=""
                />
              </div>
              <div class="form-group">
                <label class="col md-3 control-label">
                  Product Description
                </label>
                <textarea
                  name="product_desc"
                  class="form-control"
                  rows="6"
                  cols="19"
                ></textarea>
                <button>Insert Product</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>

    <!-- breadcrumb row end-->
  </body>
</html>
