<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daraja Mpesa</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                         Obtain Access Token
                    </div>
                    
                    <div class="card-body">
                        <h4 id="access-token"></h4>
                        <button id="getAccessToken" class="btn btn-primary">Request Access Token</button>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">Register URLS</div>
                    <div class="card-body">
                        <button id="registerURLS" class="btn btn-primary">Request Access Token</button>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">Simulate Transactions</div>
                    <div class="card-body">
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="number" class="form-control" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="account">Account</label>
                                <input type="text" name="account" class="form-control" id="account"> 
                            </div>
                            <button class="btn btn-primary">Simulate Payment</button> 
                             
                            
                        </form>
                        
                    </div>
                </div>
         
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
     document.getElementById('getAccessToken').addEventListener('click', (event) => {
     event.preventDefault()
     axios.post('get-token', {})
     .then((response) => {
         console.log(response.data);
         document.getElementById('access-token').innerHTML = response.data;
     })
     .catch((error) => {
         console.log(error);
     })
 });


 document.getElementById('registerURLS').addEventListener('click', (event) => {
     event.preventDefault()
     axios.post('register-urls', {})
     .then((response) => {
         console.log(response.data);
         
     })
     .catch((error) => {
         console.log(error);
     })
 });
 
    </script>

    
    
</body>
</html>