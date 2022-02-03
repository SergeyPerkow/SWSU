@section('aside')
<div class="col-sm-4">
<div class="card-header mt-3">
                            @if (Auth()->user()->DOLZ == 'Декан')               
                            @CSRF       
                            <div class="card-header mt-3 mb-3">Новости факультета</div>
                                    @foreach($news as $el)
                            <div class='alert alert-secondary'>
                            <p>{{ $el->text }}</p>
                            <div class="form-row">
                            @if ($el->hreffornews <> '0')
                            
                            <form action="{{route('downloadnews')}}"  method="post">
                                @csrf
                            <button type="submit" value='{{ $el->hreffornews }}' id="href" 
                                    name="href" class="btn btn-warning">Скачать</button>
                            </form>
                            @else
                            @endif                     
                            <a href="{{ route('deletenews', $el->id) }}">  
                            <button class="btn ml-2 btn-warning">
                            Удалить 
                            </button>
                            </a>
                            </div>
                            </div>
                            @endforeach
                            <form action="{{ route('addnews') }}" method="post" enctype="multipart/form-data">
                             @CSRF
                             <div class="custom-file">
                            <input type="text" hidden value={{Auth()->user()->faculty}} class="form-control"
                            id="id_faculty" name="id_faculty" required="">
                            <input type="text" name="text" id="text" required=''  placeholder="Введите текст объявления" 
                            class="form-control"></input> 
                            </div>
                            <div class="custom-file mt-3">
                                        <input type="file" name="files" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">ВЫберите файл</label>
                                    </div>
                            <div class="form-group">
                            <button type="submit" class="btn mt-3 btn-success">Отправить</button>
                            </div>
                            </form>

                                @elseif (Auth()->user()->DOLZ == 'Заведующий кафедрой')               
                @CSRF       
                <div class="card-header mt-3 mb-3">Новости факультета</div>
                                    @foreach($news as $el)                                    
                            <div class='alert alert-secondary'>
                            <p>{{ $el->text }}</p>    
                            @if ($el->hreffornews <> '0')
                            
                            <form action="{{route('downloadnews')}}"  method="post">
                                @csrf
                            <button type="submit" value='{{ $el->hreffornews }}' id="href" 
                                    name="href" class="btn btn-warning">Скачать</button>
                            </form>

                            
                            @else
                            @endif                         
                            </div>
                            
                            @endforeach
                            <div class="card-header mt-3 mb-3">Новости кафедры</div>
                            @foreach($news2 as $el)                                   
                            <div class='alert alert-secondary'>
                            <p>{{ $el->text }}</p>   
                            <div class="form-row">  
                            @if ($el->hreffornews <> '0')
                            
                            <form action="{{route('downloadnews')}}"  method="post">
                                @csrf
                            <button type="submit" value='{{ $el->hreffornews }}' id="href" 
                                    name="href" class="btn btn-warning">Скачать</button>
                            </form>

                            
                            @else
                            @endif                     
                            <a href="{{ route('deletenews', $el->id) }}">  
                            <button class="btn ml-2 btn-warning">
                            Удалить 
                            </button>
                            </a>
                            </div>
                            </div>
                            @endforeach
                            <form action="{{ route('addnewsdepartment') }}" method="post" enctype="multipart/form-data">                                   
                                    @CSRF
                                    <div class="custom-file">
                                    <input type="text" hidden value={{Auth()->user()->department}} class="form-control" id="id_for_department" name="id_for_department" required="">
                                        <input type="text" name="text" id="text"  placeholder="Введите текст объявления" class="form-control"></input>                                        
                                    </div>   
                                    <div class="custom-file mt-3">
                                        <input type="file" name="files" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">ВЫберите файл</label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn mt-3 btn-success">Отправить</button>
                                    </div>                                    
                              </form>
                 @else 
                 <div class="card-header mt-3 mb-3">Новости факультета</div>
                             @foreach($news as $el)
                                    
                            <div class='alert alert-dark'>
                            <p>{{ $el->text }}</p>
                            
                            @if ($el->hreffornews <> '0')
                            
                            <form action="{{route('downloadnews')}}"  method="post">
                                @csrf
                            <button type="submit" value='{{ $el->hreffornews }}' id="href" 
                                    name="href" class="btn btn-warning">Скачать</button>
                            </form>

                            
                            @else
                            @endif 
                            </div>
                            @endforeach

                            <div class="card-header mt-3 mb-3">Новости кафедры</div>

                            @foreach($news2 as $el)
                           
                            <div class='alert alert-dark'>
                            <p>{{ $el->text }}</p>
                        
                            @if ($el->hreffornews <> '0')
                            
                            <form action="{{route('downloadnews')}}"  method="post">
                                @csrf
                            <button type="submit" value='{{ $el->hreffornews }}' id="href" 
                                    name="href" class="btn btn-warning">Скачать</button>
                            </form>
                            
                           

                            
                            @else
                            @endif
                            </div>
                            @endforeach
                 @endif
                 </div>
        
            <div class="card-body p-3">
            <h5 id="instance-84766-header" class="card-title d-inline">Ссылки</h5>
             <div class="card-text content mt-3">
             <div class="no-overflow"><div><a href="https://www.swsu.ru/rzs/" target="_blank">Расписание занятий студентов</a></div>
             <div><a href="http://lib.swsu.ru/" target="_blank">Научная библиотека</a></div>
             <div><a href="http://elib.swsu.ru:8087/jirbis2/" target="_blank">Электронный каталог Научной библиотеки ЮЗГУ</a></div>
             </div>
       
                 

        
    
        @show
        
</div>


