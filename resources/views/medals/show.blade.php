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
                
                  {{--  @foreach ($statements as $statement)
                  <tr>        
                              <td>{{$statement->car_number}}</td>
                              <td>{{$statement->description}}</td> 
                              @if ($statement->status == 'not_considered') 
                                  <td style="color: rgb(255, 153, 0)">
                                        Не рассмотренно
                                  </td>
                              @elseif ($statement->status == 'confirmed') 
                                  <td style="color: rgb(14, 151, 37)">
                                       Подтверждено
                                  </td>
                              @else 
                                  <td style="color: red">
                                       Отклонено
                                  </td>
                              @endif
                          </tr>
                  @endforeach
  
                        </tbody>
                      </table>
                      <a class='btn btn-success' href='../NewStatements/index.php'>Подать новое заявление</a>
              </div>--}}
    </div>
  </x-layout>
  