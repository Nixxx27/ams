@foreach($survey as $surveys)

<table>
	<thead>
  <tr>
     <th>Date</th>
     <th></th>
  </tr>
  </thead>

   <tbody>
  <tr>
     <td>{{ $surveys->date->format('M d Y') }}</td>
     <td></td>
  </tr>
  </tbody>


</table>


@endforeach