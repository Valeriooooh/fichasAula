<?php
$con = mysqli_connect("localhost", "root", "", "BD_Valerio");
if (!$con) {
    echo "erro";
}
$query = mysqli_query($con, "select * from Utilizador");
echo "<table>
  <tr>
    <th>num</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Pass</th>
  </tr><tr>";
while ($value = mysqli_fetch_array($query)) {
    echo "<td>" . $value['Nprocesso'] . "</td><td>" . $value['Nome'] . "</td><td>" . $value['Email'] . "</td><td>" . $value['Senha'] . "</td></tr> ";
}
echo "</table>";
