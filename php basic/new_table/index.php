<!DOCTYPE html>
<html>
<style>
table {
  border:1px solid black;
}
th {
    border:1px solid greenyellow;
}
td{
    border:2px solid yellow;
}

</style>
<td><h3>Employees Table</h3>
<body>
<table style="width:100%">

<td><a href="edit.php">Add</a></td>
  
<tr>
    <th>id</th>
    <th>name</th>
    <th>phone</th>
    <th>e-mail</th>
    <th>address</th>
    <th>is-working</th>
    <th>dob</th>
    <th>dynamic</th>


  </tr>
  <tr>
    <td>1</td>
    <td>laxu</td>
    <td>9856341354</td>
    <td>laxu23@gamil.com</td>
    <td>pkr</td>
    <td>yes</td>
    <td>2002/5/9</td>
    <td><button>edit</button>
    <button>delete</button></td>
  </tr>
  <td>2</td>
    <td>laxman</td>
    <td>9856548254</td>
    <td>laxman22@gamil.com</td>
    <td>pokhara</td>
    <td>no</td>
    <td>2003/6/7 </td>
    <td><button><a href="edit.php">edit</a> </button> <button>delete</button></td>

</table>

</body>
</html>