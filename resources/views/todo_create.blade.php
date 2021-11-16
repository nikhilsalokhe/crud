
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
 <button><a href="todo_show">Back</a></button> <br><br>  
    
  <form method="POST" action="todo_submit">
    @csrf
  <table id="customers">
    <tr>
      <td>name</td>
      <td><input type="textname" name="name" required></td>
      
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit"></td>
    </tr>
  </table>
</form>
 </body>
