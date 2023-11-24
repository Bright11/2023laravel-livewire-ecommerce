<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($mycartitem as $item)
            <tr>
                <th scope="row">{{ $item->Product->name }}</th>
                <td><img class="adminimg-table" src="{{ Storage::url($item->Product->image) }}" alt=""></td>
                <td>{{ $item->Product->price }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->total }}</td>
                <td><button class="deletebtn" type="button" wire:click="deletecat({{ $item->id }})"><i class="fa-solid fa-trash"></i></button></td>
              </tr>
            @empty

            @endforelse

             @if(count($mycartitem)>0)
             <tr>
                <td >Total ${{ $sum }}</td>
                <td class="shopmore"><a href="/" wire:navigate>Contnue shopping</a></td>
                <td class="shopmore"><a href="#" wire:navigate>Checkout</a></td>
              </tr>
             @endif
        </tbody>
      </table>

</div>
