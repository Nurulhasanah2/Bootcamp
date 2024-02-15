<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Produk</h3>
                <p class="text-subtitle text-muted">Ini menu Produk</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>
    <section class="section2">
          <table class="table table-bordered">
          
           <thead>
               <tr>
                   <th> No </th>
                   <th>Gambar</th>
                   <th>Produk</th>
                   <th>Harga</th>
                   <th> Created at </th>
                   <th> Status </th>
                   <th> Aksi </th>
               </tr>
           </thead>
           <p>
           @foreach ($productList as $products)
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Mass Upload
  </a>
  <button class="btn btn-primary" href="{{ route('produk.show', $products->product_id) }}" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Tambah
  </button>
  @endforeach 
</p>
           <tbody>
                   <!-- <tr>
                   <td>1</td>
                   <td>Joshua</td>
                   <td>20</td>
                   <td>Jakarta</td>
               </tr>  -->
               @foreach ($productList as $products)
                   <tr>
                       <td> {{$products->product_id}} </td>
                       <td>{{ $products-> img_url }}</td>
                       <td>Produk: {{ $products->name }} <br>
                       Kategori: {{$products->category_id}} <br>
                       Berat : {{$products->weight}}
                       </td>
                       <td>{{ $products->price }}</td>
                       <td> {{$products->created_at}}</td>
                       <td>{{ $products->status }}</td>
                       <td>
                       <a href="{{ route('produk.show', $products->product_id) }}" class="btn btn-warning">Edit</a>
                       <form action="{{route('produk.destroy',$products->product_id)}}" method="POST">
                               @csrf
                               @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                       </td>

               </tr>
               @endforeach 
            </tbody>
       </table>

    </section> 
</x-app-layout>
