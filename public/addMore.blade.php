<!DOCTYPE html>

<html>

<head>

    <title>Add/remove multiple input fields dynamically with Jquery Laravel 5.8</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>

    <style type="text/css">
        .table { background-color:#eee;border-collapse:collapse; }
        .table th { background-color:purple;color:white;width:50%; }
        .table td, .myTable th { padding:5px;border:1px solid #000; }
    </style>




<div class="container">

    <h2 align="center">Add/Remove Your Premium Domains</h2>



    <form action="{{ route('addmorePost') }}" method="POST">




        <table class="table table-bordered" id="dynamicTable">

            <tr>

                <th>ID</th>

                <th>Company Name</th>

                <th>Domain Name</th>

                <th>Price</th>

                <th>Action</th></th>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

            <tr>

                <td><input type="int" name="addmore[0][id]" placeholder="Enter your ID" class="form-control" /></td>

                <td><input type="text" name="addmore[0][name]" placeholder="Enter your Name" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][price]" placeholder="Enter your Price" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>

            </tr>

        </table>



        <button type="submit" class="btn btn-primary">Save</button>

    </form>

</div>



<script type="text/javascript">



    var i = 0;



    $("#add").click(function(){



        ++i;



        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][id]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][company_name]" placeholder="Enter your Company Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][domain_name]" placeholder="Enter your Domain Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][price]" placeholder="Enter your Price" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');

    });



    $(document).on('click', '.remove-tr', function(){

         $(this).parents('tr').remove();

    });



</script>



</body>

</html>
