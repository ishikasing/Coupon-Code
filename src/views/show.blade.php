<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All coupons</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

</body>
</html>


<div class="album py-5">
    <div class="row justify-content-center">
     <div class="card border-secondory " style="max-width: 90rem; padding:20px ;">
      <h1 class="text-center">All Coupons</h1>
    <div class="card-body">
<a href="add" class="btn btn-success">Add New Coupon</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Coupon Code</th>
            <th>Coupon Name</th>
            <th>Discount Amount</th>
            <th>Coupon Type</th>
            <th>Exprie Date </th>
            <th>Discription </th>
            <th>Action</th>
        </tr>
    </thead>
    @if(count($data)>0)
@foreach ($data as $value)
<tr>
      <td>{{$value['id']}}</td>
      <td>{{$value['coupon_code']}}</td>
      <td>{{$value['coupon_name']}}</td>
      <td>{{$value['discount_amount']}}</td>
      <td>{{$value['coupon_type']}}</td>
      <td>{{$value['exprie_date']}}</td>
      <td>{{$value['discription']}}</td>
    <td>


        <a class="btn btn-danger" href={{"delete/".$value['id']}}>Delete</a>
    </td>
</tr>

@endforeach
@else
<tr>
    <td colspan="3">data not found</td>
</tr>
@endif

</table>



