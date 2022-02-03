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
                                    @if ($mes->href <> '0')
                                    <button type="submit" value='{{ $mes->href }}' id="href" 
                                    name="href" class="btn btn-primary">Скачать</button>
                                    @else 
                                    
                                    @endif
                                    </div>
                                    </div>
                                    @else 
                                    <div class="row justify-content-start ">
                                    <div class="alert alert-dark w-25" role="alert">
                                    <p>{{ $mes->text }}</p>
                                    <p>{{$mes->created_at}}</p>
                                    @if ($mes->href <> '0')
                                    <button type="submit" value='{{ $mes->href }}' id="href" 
                                    name="href" class="btn btn-primary">Скачать</button>
                                    @else 
                                    
                                    @endif
                                    </div>
                                    </div>
                                    @endif
                                    </form>
                                @endforeach


                            </div>

                            
                            
                                
                            <div class="card-header">Ответить</div>
                            <div class="card-body">
                                
                                <form action="{{ route('UpLoad', auth()->id()) }}" method="post" enctype="multipart/form-data">
                                    
                                    @CSRF
                                    

                                            
                                            
                                    <input type="text" hidden value='{{ $name }}' class="form-control" id="idtouser" name="idtouser" required="">
                                    <input type="text" hidden value='{{ $name2 }}' class="form-control" id="idtoquest" name="idtoquest" required="">
                                    

                                    <div class="custom-file">
                                        <textarea name="text" id="text" cols="30" rows="5" placeholder="Введите текст сообщения" required="" class="form-control"></textarea>
                                        
                                    </div>
    

                                    <div class="custom-file">
                                        <input type="file" name="files" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">ВЫберите файл</label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn mt-2 btn-success">Добавить новое</button>
                                    </div>
                                    
                                </form>
                                
                               
                                    
             
                                
                                
                                

                                
                                    
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
