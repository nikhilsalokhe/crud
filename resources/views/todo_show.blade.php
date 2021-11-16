
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 50%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
    
<body>
  
 <button><a href="todo_create">Add Record</a></button> <br><br> 

   {{session('msg')}} 

           <table id="customers">
               <tr>
                   <td>Id</td>
                   <td>Name</td>
                   <td>Created At</td>
                   <td>Action </td>

               </tr>
         @foreach ($todoArr as $todo)
               <tr>
                <td>{{$todo->id}}</td>
                <td>{{$todo->name}}</td>
                <td>{{$todo->created_at}}</td>
                <td>
                    <a href="todo_delete/{{$todo->id}}">Delete</a>
                    <a href="todo_edit/{{$todo->id}}">Edit</a>
                </td>

            </tr>
            @endforeach
           </table>
           <br><br>
           
 </body>
