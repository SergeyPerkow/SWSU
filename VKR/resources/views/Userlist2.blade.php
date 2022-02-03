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

            <div class="card-header">Пользователи, которые не прошли проверку данных</div>
            
            @foreach($data as $el)
            <div class='alert alert-secondary'>
            <h3>{{ $el->FIO }}</h3>
            <h3>{{ $el->name }}</h3>
            <h3>{{ $el->email }}</h3>
            <p>{{ $el->DOLZ }}</p>
            <p>{{ $el->id2 }}</p>
            <p>{{ $el->id3 }}</p>
            

            <a href=" {{ route('ConfirmData', $el->id) }} "> 
            <button class="btn btn-warning">
            Потвердить данные
            </button>

            </a>

            <a href=" {{ route('UnConfirmData', $el->id) }} "> 
            <button class="btn btn-warning">
            Отклонить
            </button>

            </a>

            </div>

            @endforeach

           

            <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        
                    
        </div>
        
    </div>

            </div>
        </div>
        
    </div>
    
</x-app-layout>