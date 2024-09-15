<x-layout>
    <x-slot:title>
        Список медалей
    </x-slot>
    <div class="container my-4">
        <div>
            <h1>Добавить новую медаль</h1>
            <form method="POST">
                @csrf
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="medal-type">Выберите тип медали</label>
                    <select class="form-select" name="medal-type" id="medal-type">
                        <option value="gold-medal">Золотая медаль</option>
                        <option value="silver-medal">Серебряная медаль</option>
                        <option value="bronze-medal">Бронзовая медаль</option>
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="country">Выберите Страну</label>
                    <select class="form-select" name="country_id" id="country">
                        @foreach ($countries as $country)
                             <option value="{{ $country->id }}">{{ $country->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="sport_id">Выберите тип спорта</label>
                    <select class="form-select" name="sport_id" id="sport_id">
                        @foreach ($sports as $sport)
                             <option value="{{ $sport->id }}">{{ $sport->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="sur_name">Выберите фамилию спортсмена</label>
                    <select class="form-select" name="sur_name" id="sur_name">
                        @foreach ($athletes as $athlete)
                             <option value="{{ $athlete->sur_name }}">{{ $athlete->sur_name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="name">Выберите имя спортсмена</label>
                    <select class="form-select" name="name" id="name">
                        @foreach ($athletes as $athlete)
                             <option value="{{ $athlete->name }}">{{ $athlete->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column w-25 mb-2">
                    <label for="patronymic">Выберите отчество спортсмена</label>
                    <select class="form-select" name="patronymic" id="patronymic">
                        <option>-</option>
                        @foreach ($athletes as $athlete)
                             <option value="{{ $athlete->patronymic }}">{{ $athlete->patronymic }}</option> 
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Создать</button>
            </form>
        </div>
        <h1 class="mb-2">Список медалей</h1>

        <table class='table' id="medal-table">
            <thead>
                <tr class="text-center">
                    <th scope='col' data-type='number'>Место</th>
                    <th scope='col' data-type='string'>Страна</th>
                    <th scope='col' data-type='number'>Золотые медали</th>
                    <th scope='col' data-type='number'>Серебряные медали</th>
                    <th scope='col' data-type='number'>Бронзовые медали</th>
                    <th scope='col' data-type='number'>Сумма медалей</th>
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

    <script>
        let table = document.querySelector('#medal-table');
        let sortDirections = {}; 

        table.onclick = function (e) {
            if (e.target.tagName !== 'TH') return;

            let th = e.target;
            let colIndex = th.cellIndex;
            let type = th.dataset.type;

            if (!sortDirections[colIndex]) {
                sortDirections[colIndex] = 'desc'; 
            }

            let currentDirection = sortDirections[colIndex];
            sortTable(colIndex, type, currentDirection);

            sortDirections[colIndex] = currentDirection === 'asc' ? 'desc' : 'asc';
        };

        function sortTable(colNum, type, direction) {
            let tbody = table.querySelector('tbody');
            let rowsArray = Array.from(tbody.rows);

            let compare;
            switch (type) {
                case 'number':
                    compare = function (rowA, rowB) {
                        let a = parseFloat(rowA.cells[colNum].innerHTML);
                        let b = parseFloat(rowB.cells[colNum].innerHTML);
                        return direction === 'asc' ? a - b : b - a;
                    };
                    break;
                case 'string':
                    compare = function (rowA, rowB) {
                        let a = rowA.cells[colNum].innerHTML;
                        let b = rowB.cells[colNum].innerHTML;
                        return direction === 'asc' ? a.localeCompare(b) : b.localeCompare(a);
                    };
                    break;
            }

            rowsArray.sort(compare);
            tbody.append(...rowsArray);
        }
    </script>
</x-layout>
