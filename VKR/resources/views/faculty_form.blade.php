<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>

<div class="card-header col-md-8 mx-auto mt-3">
<div class="container">
    <h1 class="text-center">Заполните данные для продолжения работы</h1>
    <form action="{{ route('aboutsubmit') }}" method="post">
    <form>
        @csrf

        <div class="mb-3">
    <label for="FIO" class="form-label">Фамилия имя отчество</label>
    <input type="text" class="form-control" id="FIO" name="FIO" required="">
    
  </div>

        <div class="form-group">
        <label for="DOLZ">Выберите вашу должность</label>
<select class="form-control" name="DOLZ" id="DOLZ" required="">
<option value="">Выберите вашу должность</option>
<option>Декан</option>
<option>Заведующий кафедрой</option>
<option>профессорско-преподавательский состав</option>

</select>
        </div>
        
        <div class="form-group">
            <label for="faculties">Факультет</label>
            <select class="form-control" name="faculties" id="faculties" required="">
                <option>Выберите ваш факультет</option>
                @foreach($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="department">Кафедры</label>
            <select class="form-control" name="department" id="department" required="">
                <option>Выберите вашу кафедру</option>
            </select>
        </div>
        <x-jet-button type="submit" class="btn btn-dark">Сохранить</x-jet-button>
    </form>
    

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

<script type="text/javascript">
    $("#faculties").change(function(){
        var id_faculty = $(this).val();
        var token = $("input[name='_token']").val();
        console.log(id_faculty);

        $.ajax({
            url: "{{ route('selectdepartment') }}",
            method: 'POST',
            data: {id_faculty:id_faculty, _token:token},
            success: function(data) {
                $("#department").html('');
                $("#department").html(data.options);
            }
        });
    });
</script>

</body>
</html>
