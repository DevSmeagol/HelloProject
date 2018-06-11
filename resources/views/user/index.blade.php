@extends('layout.mainState') @section('page_title', 'Customers')

<body>
	<tbody>
		<tr>
			<th>ชื่อ</th>
			<th>นามสกุล</th>
			<th>เลขประจำตัวประชาชน</th>
    		<th>เบอร์โทรศัพท์</th>
			<th>LINE</th>
			<th>ที่อยู่</th>
		</tr>
    
    	<?php foreach ($users as $user ): ?>
    	<tr>
      		<td>{{$user->firstName}}</td>
        	<td>{{$user->lastName}}</td>
        	<td>{{$user->idCard}}</td>
        	<td>{{$user->tel}}</td>
        	<td>{{$user->idLine}}</td>
        	<td>{{$user->address}}</td>
        </tr>
    	<?php endforeach; ?>	
	</tbody>
</body>
</html>