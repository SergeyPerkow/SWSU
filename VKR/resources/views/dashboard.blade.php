

<x-app-layout>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="container">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <body>
   

         <div id="sliderBigImages" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
           <img src="/img/the3.jpg" class="d-block w-100" >
           
           <div class="carousel-fade bg-dark text-white d-none d-md-block">
     <h5 class="text-center">ЮЗГУ попал в один из трех ведущих мировых рейтингов</h5>
     <p class="text-center">
        Британское издание Times Higher Education (THE) опубликовало результаты мирового рейтинга университетов (World University Rankings). Впервые в него вошел Юго-Западный государственный университет. </p>
         </div>
       </div>
       <div class="carousel-item">
            <img src="/img/1.jpg" class="d-block w-100" >
            <div class="carousel-fade bg-dark text-white d-none d-md-block">
     <h5 class="text-center">Коронавирус: меры профилактики и предупреждения</h5>
     <p class="text-center">
     С 30 октября по 07 ноября 2021 г. включительно нерабочие дни с сохранением за работниками университета заработной платы </p>
        </div>
       </div>
       <div class="carousel-item">
           <img src="/img/3.jpg" class="d-block w-100" >
           <div class="carousel-fade bg-dark text-white d-none d-md-block">
         <h5 class="text-center">ВУЦ ЮЗГУ выпускает офицеров и сержантов</h5>
         <p class="text-center">
         С 1 марта по 30 апреля военный учебный центр ЮЗГУ будет осуществлять прием заявлений на обучение по программам военной подготовки
офицеров по специальности «эксплуатация и ремонт артиллерийского вооружения» со сроком обучения 3 года. </p>
         </div>
       </div>
         </div>
         <a class="carousel-control-prev" href="#sliderBigImages" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#sliderBigImages" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
          </a>
        </div>

            <!-- подключение JavaScript -->
             <!-- Сначала jQuery, затем Bootstrap JS, а Popper.js подключать необязательно -->
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
             integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                    </body>
            </div>
        </div>
    </div>
</x-app-layout>




