<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Emoji Calculator</title>
        <!-- Linked the app.css file -->
        <link rel="stylesheet" href="css/app.css">   
    </head>
    <body>
        <!-- Main app div -->
        <div class="app">
            <!-- container div -->
            <div class='container'>
                <!-- HEADING -->
                <h1>Welcome to Emoji Calculator🧮</h1>

                <!-- POST method FORM for sending user input request -->
                <form class="form-horizontal" method="POST" action='/calculate'>
                    <!-- Token for PHP -->
                    {{ csrf_field() }}

                    <!-- Input field for number -->
                    <input type="number" name="firstNum" class="textBox" placeholder="Enter a number"/><br></br>
                    <input type="number" name="secondNum" class="textBox" placeholder="Enter another number"/>
                    
                    <!-- Input field for operator -->
                    <p>Select Operator-->&nbsp;
                    <select class='op' name="ops" required>
                        <option value="" selected=""></option>
                        <option value="plus">👽</option>
                        <option value="min">💀</option>
                        <option value="mult">👻</option>
                        <option value="div">😱</option>
                    </select></p>
            
                    <!-- Button for calculation -->
                    <button type="submit" class='btn'>Calculate</button>
                    
                    <!-- div section for displaying the result -->
                    <div class="row text-center">
                        <div class="col-md-2"> 

                        </div>
                        <br>
                        <div class="col-md-6"> 
                            <!-- if result is in session then display -->
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
