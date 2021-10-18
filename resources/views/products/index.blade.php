


<x-app-layout :header="'hamza'">
  <x-slot name="header">
      Product List
  </x-slot>
   @error("quantity")
      <p>{{$message}}</p>
    @enderror
    <div class="w-2/3 mt-8 mx-auto shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-72">
                    Label
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-36">
                     Category
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Root Category
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th> <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Delete</span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($products as $product)
                    <tr class="py-4">
                        <td class="px-6 py-4  whitespace-nowrap w-72">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                </div>
                                <div class="ml-4 text-sm font-medium text-gray-900">
                                    <p class="">{{$product->label}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{$product->price}} <span>$</span></div>
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap text-sm text-gray-500 w-36">
                            {{$product->subcategory->label}}
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap text-sm text-gray-500">
                            {{$product->subcategory->category->label}}
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap text-right text-sm font-medium">
                            <form action="/cart/add/" method="POST" class="w-min">
                                @csrf
                                <x-input name="quantity" type="number" min="1"  class="w-12 p-1 rounded-b-none focus:ring-0 shadow-none border-gray-200 border-l-0 border-r-0 border-t-0 border-b-2  mr-4 "/>
                                <x-input type="hidden" name="product_id" value="{{$product->id}}"/>
                                <x-button>Add</x-button>
                            </form>
                        </td>
                        <td class="px-6 py-4  whitespace-nowrap  ">
                            <form action="/" method="Delete" class="w-min">
                                @csrf
                                <button type="submit" class="text-red-600 text-sm font-medium hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</x-app-layout>
