<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <main>
    <section class="container">
       <div class="card mt-5">
           <div class="card-header">
           <h1>Edit Produk</h1>
           </div>
           <div class="card-text p-3">
               <form action="{{route('produk.update',$products->product_id)}}" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="">
                       <label class="form-label" for="nama_produk">Nama Produk</label>
                       <input class="form-control" type="text" id="nama_produk" name="name" value="{{ $products->name }}">
                   </div>
                   <div class="">
                       <label class="form-label" for="deskripsi">Deskripsi</label>
                       <input class="form-control" type="text" id="deskripsi" name="description" value="{{ $products->description}}">
                   </div>
                   <div class="">
                       <label class="form-label" for="status">Status</label>
                       <input class="form-control" type="text" id="status" name="status" value="{{ $products->status}}">
                   </div>
                   <div class="">
                       <label class="form-label" for="kategori">Kategori</label>
                       <input class="form-control" type="text" id="kategori" name="kategori" value="{{ $products->category_id}}">
                   </div>
                   <div class="">
                       <label class="form-label" for="price">Harga</label>
                       <input class="form-control" type="text" id="price" name="price" value="{{ $products->price}}">
                   </div>
                   <div class="">
                       <label class="form-label" for="weight">Berat</label>
                       <input class="form-control" type="text" id="weight" name="weight" value="{{ $products->weight}}">
                   </div>
                   <div class="">
                       <label class="form-label" for="img_url">Foto Produk</label>
                       <input class="form-control" type="text" id="img_url" name="img_url" value="{{ $products->img_url}}">
                   </div>
                   <input type="submit" class="btn btn-primary mt-3" value="Update Kategori">
               </form>
           </div>
       </div>
   </section>
</main>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

