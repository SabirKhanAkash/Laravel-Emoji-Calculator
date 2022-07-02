<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Emoji Calculator</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="app">
            <div class='container'>
            <h1>Welcome to Emoji Calculator🧮</h1>

            <form class="form-horizontal" method="POST" action='/calculate'>
                {{ csrf_field() }}
    
                <input type="number" name="firstNum" class="textBox" placeholder="Enter a number"/><br></br>
                <input type="number" name="secondNum" class="textBox" placeholder="Enter another number"/>
                
                <p>Select Operator-->&nbsp;
                <select class='op' name="ops" required>
                    <option value="" selected=""></option>
                    <option value="plus">👽</option>
                    <option value="min">💀</option>
                    <option value="mult">👻</option>
                    <option value="div">😱</option>
                </select></p>
        
                <button type="submit" class='btn'>Calculate</button>
                
                <div class="row text-center">
                <div class="col-md-2"> 

                </div>
                <br>
                <div class="col-md-6"> 
                    @if(session('info'))
                        <div style="color: rgb(255, 255, 255); font-size: 35px">
                            {{ session('info')}}
                        </div>
                    @endif
                </div>
                <div class="col-md-2">
                
                <div>
            </div>
                </div>
            </form>

            

            
            
        
        </div>
        

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
