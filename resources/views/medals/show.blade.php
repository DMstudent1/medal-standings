<x-layout>
    <x-slot:title>
       Список медалей
    </x-slot>
    <div class="container my-4">
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
                    @foreach ($medalsGrouped as $medal)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td> 
                            <td>{{ $medal->country->name }}</td>
                            <td>{{ $medal->total_gold }}</td> 
                            <td>{{ $medal->total_silver }}</td> 
                            <td>{{ $medal->total_bronze }}</td> 
                            <td>{{ $medal->total_medals }}</td>   
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <script>

    </script>
</x-layout>
