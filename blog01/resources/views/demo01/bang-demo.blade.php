<h2>Bảng demo</h2>
@foreach($ds as $objRow)
    ID: {{ $objRow->id }} <br>
    Name: {{ $objRow->name }} <br>
    Des: {{ $objRow->des }}
    <hr>
@endforeach
