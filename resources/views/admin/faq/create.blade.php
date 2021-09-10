@extends('layouts.admin')
@section('content')
<head>
    <style>
        
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">Adding New Frequently Asked Question (FAQ)</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'admin.faq_store', 'method'=> 'POST'])}}
                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Question</span>
                    <input type="text" name="question" class="form-control" placeholder="Enter the Question">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Select Side</span>
                    <select name="side" class="form-control">
                        <option value="null">Choose where to display this FAQ</option>
                        <option value="1">Left Side</option>
                        <option value="2">Right Side</option>
                    </select>
                </div><br>
                
                <div class="form-group">
                    <textarea name="ans" id="ckview" class="form-control" placeholder="Enter the Answer"></textarea>
                </div><br>
                <button class="btn btn-primary" type="submit" style="width: 100%;">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
    
</body>
@endsection