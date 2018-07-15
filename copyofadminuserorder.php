include 'db_config.php';

      $query = "SELECT * FROM checkout_counter asl JOIN users abc ON (asl.order_id = abc.user_id) ORDER BY asl.reference_number DESC";

      $result = sqlQuery($query);

      while($users = sqlFetch($result)){
        extract($users);

      echo "<tr>
      <td>$reference_number</td>
      <td>$name</td>
      <td>$transaction_date</td>";
      }
      echo "<a href='admin_userorder.php' class='btn btn-success btn-md' role='button'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;view</a></td>";

        echo "</tr>";
    
?>











    

    

  </div>
