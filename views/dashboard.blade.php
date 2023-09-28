<x-app-layout>
    <div class="container px-12 py-8 mx-auto">
        <form action="/search" class="navbar-form navbar-left">
            <div class="form-group">
                <h4 class="text-l font-bold text-gray-900"> ค้นหาสินค้า   
        <input type="text" name="query" class="form-control search-box" placeholder="Search">
            <button class="px-4 py-1.5 text-white text-sm bg-pink-700 rounded" type="submit" class="btn btn-default">Search</button> </div>
        </form><br>
        <h3 class="text-2xl font-bold text-gray-900">Recommend Products</h3>
        <div class="h-1 bg-gray-800 w-64"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
 
            

            @foreach ($product as $item)  
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="/images/{{ $item->image }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>

                <div class="px-5 py-3">
                    
                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-gray-900 uppercase">ชื่อสินค้า : {{ $item->name }}</h3></div>
                        <h3 class="text-gray-900 uppercase">รายละเอียดสินค้า :{{ $item->description }}</h3> <br>
                        <h3 class="text-gray-900 uppercase"> ยี่ห้อ : {{ $item->brand->brand_name}}</h3> <br> 
                        <span class="mt-2 text-red-600 font-semibold">ราคา : {{ $item->price }} บาท </span> <br> <br>
                    
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <input type="hidden" value="{{ $item->name }}" name="name">
                        <input type="hidden" value="{{ $item->description  }}" name="description ">
                        <input type="hidden" value="{{ $item->price }}" name="price">
                        <input type="hidden" value="{{ $item->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-pink-700 rounded">Add To Cart</button>
                    </form>
                </div>
                
            </div>
            @endforeach 
        </div>
    </div>
</x-app-layout>