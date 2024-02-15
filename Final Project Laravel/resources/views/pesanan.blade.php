<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
                <p class="text-subtitle text-muted">This is the main page.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>
    <section class="section2">
          <table class="table table-bordered">
           <thead>
               <tr>
                   <th>Gambar</th>
                   <th>Produk</th>
                   <th>Harga</th>
                   <th> Created at </th>
                   <th> Status </th>
                   <th> Aksi </th>
               </tr>
           </thead>
           <tbody>
                   <!-- <tr>
                   <td>1</td>
                   <td>Joshua</td>
                   <td>20</td>
                   <td>Jakarta</td>
               </tr>  -->
               @foreach ($categoriesList as $categories)
                   <tr>
                       <td>{{ $categories-> category_id }}</td>
                       <td>{{ $categories->name }}</td>
                       <td>{{ $categories->parent_id }}</td>
                       <td>
                       <a href="{{ route('kategori.show', $categories->category_id) }}" class="btn btn-warning">Edit</a>
                       <form action="{{route('kategori.destroy',$categories->category_id)}}" method="POST">
                               @csrf
                               @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                       </td>

               </tr>
               @endforeach 
            </tbody>
       </table>
       <!-- <form action="" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="">
                       <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                       <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" value="">
                   </div>
                   <div class="">
                       <label class="form-label" for="nik">NIK</label>
                       <input class="form-control" type="text" id="nik" name="nik" value="">
                   </div>
                   <div class="">
                       <label class="form-label" for="umur">Umur</label>
                       <input class="form-control" type="number" min="0" id="umur" name="umur" value="" >
                   </div>
                   <div class="">
                       <label class="form-label" for="alamat">Alamat</label>
                       <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                   </div>
                   <input type="submit" class="btn btn-primary mt-3" value="Update Biodata">
               </form> -->

    </section> 
</x-app-layout>
