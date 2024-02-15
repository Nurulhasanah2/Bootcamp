<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kategori</h3>
                <p class="text-subtitle text-muted">Ini menu kategori</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">categories</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <section class="section1">
    <form>
  <div class="form-group">
    <label for="nama_kategori">Nama Kategori</label>
    <input type="text" class="form-control" id="nama_kategori"  placeholder="Masukkan Nama Kategori">
  </div>
  <div class="form-group">
    <label for="kategori">Kategori</label>
    <select class="form-control" id="kategori">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </section> <br> <br>

    
    <section class="section2">
          <table class="table table-bordered">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Kategori</th>
                   <th>Parent</th>
                   <th> Action </th>
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

    </section> 
</x-app-layout>
