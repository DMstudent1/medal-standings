<x-layout>
    <x-slot:title>
       Список медалей
    </x-slot>
    <div class="container my-4">
        <h1 class="mb-4">Список медалей</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Место</th>
                        <th scope='col'>Страна</th>
                        <th scope='col'>Золотые медали</th>
                        <th scope='col'>Серебряные медали</th>
                        <th scope='col'>Бронзовые медали</th>
                        <th scope='col'>Сумма медалей</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medals as $medal)
                        <tr>
                            <td>{{ $medal->countries_id }}</td>
                            <td>{{ $medal->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</x-layout>
  