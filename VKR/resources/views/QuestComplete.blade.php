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

<div class="container mb-3 mt-3">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">Отправленные задания</div>

                            @foreach($from as $el)
                            <div class='alert alert-secondary'>
                            <h3>{{ $el->subject }}</h3>
                            <a href=" {{ route('MessagesForQuestComplete', [$el->id_to, $el->id]) }} "> 
                            <button class="btn btn-warning">
                            Сообщения
                            </button>
                            </a>
                            
                            </div>
                            @endforeach
            
            
            

                             <div class="card-header">Полученные задания</div>
                                @foreach($from2 as $el)
                                <div class='alert alert-secondary'>
                                 <h3>{{ $el->subject }}</h3>
            
                                    <a href=" {{ route('MessagesForQuestComplete', [$el->id_from, $el->id]) }} "> 
                                  <button class="btn btn-warning">
                                  Сообщения
                                     </button>
                                     </a>
                                      </div>

                                      @endforeach

                        

                        
                            
                            

                                
                               
                        
                            <div class="card-body">
       
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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