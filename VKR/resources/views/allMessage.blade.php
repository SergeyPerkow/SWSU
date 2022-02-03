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

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                        <div class="card-header">Сообщения</div>
                            <div class="card-body">

                            
                            @foreach($messagefrom as $mes)
                            
                                <form action="{{route('Download')}}" method="post">
                                    {{ csrf_field() }}
                                    @if ($mes->id_from == Auth()->id())
                                    <div class="row justify-content-end">
                                    <div class="alert alert-info w-25" role="alert">
                                    <p>{{ $mes->text }}</p>
                                    <p>{{$mes->created_at}}</p>
                                    <button type="submit" value='{{ $mes->href }}' id="href" name="href" class="btn btn-primary">Скачать</button>
                                    </div>

                                    </div>
                                    
                                   

                                    @else 
                                    <div class="row justify-content-start ">
                                    <div class="alert alert-dark w-25" role="alert">
                                    <p>{{ $mes->text }}</p>
                                    <p>{{$mes->created_at}}</p>
                                    <button type="submit" value='{{ $mes->href }}' id="href" name="href" class="btn btn-primary">Скачать</button>
                                    </div>

                                    </div>
                                

                                    @endif
                                    </form>
                                @endforeach


                            </div>

                            
                            
                            


                            </div>
                            
                                
                            
                                
                                
                                
                                
                                

                                
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    
        </div>
        
    </div>

            </div>
        </div>
    </div>
    
</x-app-layout>