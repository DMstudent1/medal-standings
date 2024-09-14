<x-layout>
    <x-slot:title>
       Список медалей
    </x-slot>
    <div class="container my-4">
        <div>
            <h1>Добавить новую медаль</h1>
            <form action="" method="POST">
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="">Выберите тип медали</label>
                    <select class="form-select" name="" id="" required>
                        <option value="">Золотая медаль</option>
                        <option value="">Серебряная медаль</option>
                        <option value="">Бронзовая медаль</option>
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    
                    <label for="">Выберите Страну</label>
                    <select class="form-select" name="" id="" required>
                        @foreach ($countries as $country)
                             <option value="">{{ $country->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="">Выберите тип спорта</label>
                    <select class="form-select" name="" id="" required>
                        @foreach ($sports as $sport)
                             <option value="">{{ $sport->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="">Выберите фамилию спортсмена</label>
                    <select class="form-select" name="" id="" required>
                        @foreach ($athletes as $athlete)
                             <option value="">{{ $athlete->sur_name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="">Выберите имя спортсмена</label>
                    <select class="form-select" name="" id="" required>
                        @foreach ($athletes as $athlete)
                             <option value="">{{ $athlete->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="">Выберите отчество спортсмена</label>
                    <select class="form-select" name="" id="">
                        @foreach ($athletes as $athlete)
                             <option value="">{{ $athlete->patronymic }}</option> 
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Создать</button>
            </form>
        </div>
        <h1 class="mb-2">Список медалей</h1>


            <table class='table'>
                <thead>
                    <tr class="text-center">
                        <th scope='col'>Место</th>
                        <th scope='col'>Страна</th>
                        <th scope='col'>Золотые медали</th>
                        <th scope='col'>Серебряные медали</th>
                        <th scope='col'>Бронзовые медали</th>
                        <th scope='col'>Сумма медалей</th>
                    </tr>
             
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($medals as $medal)

                        <tr class="text-center">
                            <td>{{ $i++ }}</td> 
                              
                            <td>{{ $medal->country->name }}</td>
                            <td>{{ $medal->total_gold }}</td> 
                            <td>{{ $medal->total_silver }}</td> 
                            <td>{{ $medal->total_bronze }}</td> 
                            <td>{{ $medal->total_medal }}</td> 
                            
                              
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
    </div>
</x-layout>
