Lista de especialidades
<style type='text/css'>
table {
width: 50%;
border: 2px solid black;
margin-top: 15px;
margin-bottom: 25px;
position: relative;
left: 42%;

}
td {
border: 1px solid;
padding: 5px;
}
th {
font-family: "Trebuchet MS", Arial, Verdana;
font-size: 17px;
padding: 5px;
border: 1px solid;
border-width: 1px;
border-style: 2px solid black;
border-color: black;
background-color: #30a9dd;
color: black;
}
</style>
<table>
  <tr>
    <th>Id</th>
    <th>Descrição</th> 
  </tr>
 
        <?php foreach(  $lista_especialidades     as  $e ) {  ?>
        <tr>
            <?php echo '<td>'.$e['id'].'</td>'; echo '<td>'.$e['descricao'].'</td>'; ?>
         </tr>
        <?php 
            }
        ?>
</table>