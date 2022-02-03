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
                            <a href=" {{ route('MessagesForQuest', [$el->id_to, $el->id]) }} "> 
                            <button class="btn btn-warning">
                            Сообщения
                            </button>
                            </a>
                            <a href=" {{ route('delquest', $el->id) }} "> 
                            <button class="btn btn-warning">
                            Отметить как выполненное 
                            </button>
                            </a>
                            </div>
                            @endforeach
            
            
            

                             <div class="card-header">Полученные задания</div>
                                @foreach($from2 as $el)
                                <div class='alert alert-secondary'>
                                 <h3>{{ $el->subject }}</h3>
            
                                    <a href=" {{ route('MessagesForQuest', [$el->id_from, $el->id]) }} "> 
                                  <button class="btn btn-warning">
                                  Сообщения
                                     </button>
                                     </a>
                                      </div>

                                      @endforeach

                        

                        
                            
                            

                                
                               
                        <div class="card-header">Ответить</div>
                            <div class="card-body">


                                
                                <form action="{{ route('addquest')}}" method="post" enctype="multipart/form-data">
                                    
                                    @CSRF
                                    

                                            
                                            
                                    <input type="text"  value={{$name}} hidden class="form-control" id="idto" name="idto" required="">
                                    <div class="custom-file">
                                        <textarea name="subject" id="subject" cols="12" rows="1" placeholder="Введите тему" class="form-control"></textarea>
                                        
                                    </div>
                                    

    
    

                                    

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Добавить задание</button>
                                    </div>
                                    
                                </form>
                                    

                                 
                                
                                
                                
                                

                                
                                    
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