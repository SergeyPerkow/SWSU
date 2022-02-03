<x-app-layout>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Рабочая страница') }}
        </h2>
    </x-slot>
    
   
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
<div class="row">
<div class="col-sm-8">

<div class="card-header mt-3 ml-2 mb-3">Пользователи</div>
            
            @foreach($data as $el)
            <div class="alert ml-3 alert-dark" role="alert">
            <h3>{{ $el->FIO }}</h3>
            <p>{{ $el->DOLZ }}</p>
            <p>{{ $el->id2 }}</p>
            <p>{{ $el->id3}}</p>
            <a href=" {{ route('ShowQuest', $el->id) }} "> 
            <button class="btn btn-warning">
            Невыполненные задания
            </button>
            </a>
            <a href=" {{ route('ShowQuest2', $el->id) }} "> 
            <button class="btn btn-warning">
            Выполненные задания
            </button>
            </a>
            </div>
            @endforeach

          
                                                    
                 

</div>

@include('inc.aside')

@section('aside')
@endsection('aside')
</div>
            
            
            

           

            <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            
                    
                </div>
        
              </div>

            </div>
        </div>
        
    </div>
    
</x-app-layout>