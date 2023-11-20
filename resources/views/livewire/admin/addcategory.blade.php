<div class="adminlayouts">

    <div class="adminproducts">
       <table class="table">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Update </th>
               <th scope="col">Delete </th>
             </tr>
           </thead>
           <tbody>
            @forelse ($data as $data)
            <tr>
                <th scope="row">1</th>
                <td>{{ $data->name }}</td>
                <td><button  wire:click="updatecat({{ $data->id }})">Update</button></td>
                <td><button type="button" wire:click="deletecat({{ $data->id }})">Delete</button></td>
              </tr>
            @empty

            @endforelse

           </tbody>
         </table>
    </div>
   <div class="add-product">

       @if ($update)
       <form action="" wire:submit.prevent="edit({{ $catid }})">
           @else
           <form action="" wire:submit.prevent="addcatename">
       @endif
           <h1>Add Category</h1>
           <input type="text" wire:model='name' placeholder="Item Name">
           <button type="submit">Save</button>
       </form>

   </div>
</div>
