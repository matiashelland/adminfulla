<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "article";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "select * from category";
$res = $conn->query($query);
$categories = [];
while ($rdata = $res->fetch_assoc()) {
  array_push($categories, $rdata);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
  <script src="https://kit.fontawesome.com/eb0dae64d9.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <title>Document</title>

  <style>
    input {
      outline: 0;
      border-width: 0 0 2px;
      border-color: blue
    }

    input:focus {
      border-color: green
    }
    header, footer {
      width: 100%;
      background-color: #e5e5e5;
    }
    main{
      height: 80vh;
      
    }
    .leftside{
      background-color: #e5e5e5;
      height: 80vh;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      margin-right: 100px;

    }
    .rightside {
      background-color: #e5e5e5;
      height: 80vh;
     border-radius: 20px;
 
     padding:100px;
    
    }
    .ck {
      height: 30vh;
    }
    #post {
      background-color: #3fa59d;
      padding: 15px;
      color: white;
      border: none;
      border-radius: 10px;
    }


    .btn-category {
      background-color: #3fa59d;
      padding: 15px;
      color: white;
      border: none;
      border-radius: 10px;
    }
  </style>
</head>


<body>
  <div class="app">
    <header class="p-4">
      <h1 class="text-center">header</h1>
    </header>
    <main class="my-4">
      <div class="row content">
        <div class="col-2 leftside p-5">
          <button class="btn btn-light px-5 mx-auto"><span>Add article</span></button>
        </div>
        <div class="col-9 rightside">
          <div class="row d-flex justify-content-center bg-white pt-5">
            <div class="col-6">
                <div class="title">
                  <input type="text" class="" placeholder="Article Title..." required id="title">
                </div>
                <div class="articlebody mt-4">
                  <div id="editor"></div>
                </div>
                <div class="categories mt-4">
                  <h4>Select categories</h4>
                  <select name="categories" class="form-select" required placeholder="select categores" id="categories">
                    <?php
                    foreach ($categories as $category) {
                      echo "<option value=".$category["category"].">".$category["category"]."</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="post mt-4 mb-4">
                  <button  id="post">POST ARTICLE</button>
                </div>
            </div>
            <div class="col-4">
              <div class="title">
                <h3>Add a new category</h3>
              </div>
              <div class="content">
                <div class="card p-5">
                  <div class="row">
                    <form action="addCategory.php" method="post">
                      <div class="row">
                      <div class="col-2">
                        <i class="fa-solid fa-copy"></i>
                      </div>
                      <div class="col-10">
                        <input type="text" required placeholder="Enter Category" name="category">

                      </div>
                      </div>
                  </div>
                  <div class="d-flex justify-content-end mt-2" >
                    <button class="btn-category" type="submit">
                      ADD CATEGORY
                    </button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="p-4">
      <h3 class="text-center">footer</h3>
    </footer>
  </div>
  <script>
    var editor;
      $("#post").on("click",function(){
        let title = $("#title").val();
        if(title===""){
          alert("Need to type article title")
          return;
        }
        let category = $("#categories").val();
        let data = editor.getData();
        if(data===""){
          alert("type article body")
          return;
        }
        $.ajax({
          url:'ajax.php',
          method:"post",
          data:{
            title:title,
            body:data,
            category:category
          },
          success:function(res){
            if(res==="1"){
              alert("successfully added")
              title = $("#title").val("");
              editor.setData("")
            }

            else {
              alert("Error ")
            }
          }
        })

      })
  </script>
</body>
<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .then(newEditor=>{
      editor = newEditor;
    })
    .catch(error => {
      console.error(error);
    });
</script>

</html>

<?php
?>