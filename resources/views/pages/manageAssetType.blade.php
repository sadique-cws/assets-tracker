@extends('include/base')

@section('content')
    <div class=" flex">
        <div class="w-1/4 p-5 h-screen">
           @include("include/side")
        </div>
        <div class="w-3/4 ">
          <div class="flex mt-5 px-10 gap-5">
             <div class="w-3/4">
                <table class="table w-full">
                    <thead class="table-header-group">
                        <tr class="bg-gray-200">
                            <th>id</th>
                            <th>Asset Type Name</th>
                            <th>Asset Type Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($assetsType as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->assets_type_name}}</td>
                                <td>{{$item->assets_type_description}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </thead>
               </table>
             </div>
             <div class="w-1/4">
                <div class="bg-blue-200 p-3 rounded">
                    <form action="{{route('assetsType.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Assets type Name</label>
                            <input type="text" name="assets_type_name" class="rounded w-full">
                        </div>
                        <div class="mb-3">
                            <label for="">Assets type Description</label>
                            <textarea name="assets_type_description" class="rounded w-full"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="bg-green-700 text-white px-3 py-4 rounded w-full">
                        </div>
                    </form>
                </div>
             </div>
          </div>
        </div>
    </div>

  
@endsection