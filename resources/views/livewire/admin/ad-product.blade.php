<div class="adminlayouts">

    <div class="adminproducts">
       <table class="table">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Image</th>
               <th scope="col">price</th>
               <th scope="col">discount</th>
             </tr>
           </thead>
           <tbody>
            @forelse ($getpro as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{ $item->name }}</td>
                <td> <img class="adminimg-table" src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"></td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->discount }}</td>

              </tr>
            @empty

            @endforelse

           </tbody>
         </table>
    </div>
   <div class="add-product">
       <form wire:submit.prevent="addproduct" class="addpro">
           <h1>Add product</h1>
           <input type="text" placeholder="Item Name"wire:model="name" >
           <select wire:model="cat_id">
               <option>Chose Category</option>
               @forelse ($getcat as $data)
                   <option value="{{ $data->id }}">{{ $data->name }}</option>
               @empty

               @endforelse
           </select>
           <textarea placeholder="description" wire:model="description" cols="30" rows="5"></textarea>
           <input type="number" placeholder="Qty" wire:model="qty">
           <input type="text" placeholder="price" wire:model="price">
           <input type="text" placeholder="discount" wire:model="discount">
           <input type="file" wire:model='image'>
           <button>Save</button>
       </form>


   </div>
</div>
