<x-layout>
    <x-slot name="title">    
        Add New Item
    </x-slot>
        <h1>Item:</h1> 

        <form action="{{ route('characters.items.store', ['character' => $character->id]) }}" method="POST">
            @csrf 
            <label for="item">Item</label>
            <div class="select">
                <select class="outline-black" id="item" name="item_id">
                    @foreach ($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Submit">
        </form>

        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <x-text-input slug="item" label="Add Item"/>
            <input type="submit" value="submit">
        </form>
        
</x-layout>
