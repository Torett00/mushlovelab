<x-app-layout>
    <x-slot name="header">
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('productss.index') }}">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('CartController.create') }}">Commands</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('userproducts.create') }}">users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('VariationController.index') }}">variation</a>
  </li>
  
</ul>
    </x-slot>
<head>
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("List product Base") }}
                    
                </div>
                
                
                
                
                
                    
                    
            </div>
        </div>
    </div>
</x-app-layout>
