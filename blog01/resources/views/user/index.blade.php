<h2>Danh sách tài khoản</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Fullname</th>
    </tr>
    @foreach($listU as $k =>$objU)
        <tr>
            <td>{{$k + 1}}</td>
            <td>{{$objU->id}}</td>
            <td>{{$objU->username}}</td>
            <td>{{$objU->email}}</td>
            <td>{{$objU->fullname}}</td>
        </tr>
    @endforeach



</table>
