<!doctype html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>List Tasks</title>
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
           integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
     <!-- CSS -->
     <style type="text/css">
                 @import url('https://fonts.googleapis.com/css?family=Nunito');

@import 'variables';
@import '~bootstrap/scss/bootstrap';
.navbar-laravel {
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
}
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
     </style>
 </head>
 <body>
 <div class="flex-center position-ref full-height">
     <div class="content">
         <div class="title m-b-md">
             Add new Task
         </div>
         <form class="text-left" method="post" action="{{route('tasks.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
             <div class="form-group">
                 <label for="inputTitle">Task title</label>
                 <input type="text"
                        class="form-control"
                        id="inputTitle"
                        name="inputTitle"
                        required>
             </div>
             <div class="form-group">
                 <label for="inputContent">Task content</label>
                 <textarea class="form-control"
                           id="inputContent"
                           name="inputContent"
                           rows="3"
                           required></textarea>
             </div>
             <div class="form-group">
                 <label for="inputDueDate">Due Date</label>
                 <input type="date"
                        class="form-control"
                        id="inputDueDate"
                        name="inputDueDate"
                        required>
             </div>
             <div class="form-group">
                 <label for="inputFileName">File Name</label>
                 <input type="text"
                        class="form-control"
                        id="inputFileName"
                        name="inputFileName">
                 <input type="file"
                        class="form-control-file"
                        id="inputFile"
                        name="inputFile">
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         <hr>
         <!--  -->
     </div>
 </div>
 <!-- Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
         crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
         integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
         integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
         crossorigin="anonymous"></script>
 </body>
 </html>