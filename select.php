<?php
include('connect.php');
    $_output = '';

    //Make sql
    $sql = "SELECT * FROM products";
       
    // GEt query result
    $result = mysqli_query($conn,$sql);
    
    // In output put a table with al the headings and make it responsive
    $output .='
        <div class="table-responsive">
            <table class = "table table-bordered mx-0">
            <thead>
                <tr>
                    <th width="10%">id</th>
                    <th width="10%">Name</th>
                    <th width="10%" >Price</th>
                    <th width="50%">Description</th>
                    <th width="20%">Image File Name</th>
                    <th> Del/Add </th>
                </tr>
            </thead>
        <tbody>';
    
    if ($result){
        while($row = mysqli_fetch_assoc($result)){ 
            // Add data to output
            //Missing data ID!
            $output .= 
            '<tr>
                <td>'.$row['id'].'</td>
                <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row['name'].'</td>
                <td class="price" data-id2="'.$row["id"].'" contenteditable>'.$row['price'].'</td>
                <td class="description" data-id3="'.$row["id"].'"  contenteditable>'.$row['description'].'</td>
                <td class="image_file_name" data-id4="'.$row["id"].'" contenteditable>'.$row['image_file_name'].'</td>
                <td><button type="button" name="delete" data-id5="'.$row["id"].'" class="delete btn text-danger"> X </button></td> 
            </tr>';
        }
        // Add fillable row, Have IDS
        $output .= '<tr>
                        <td></td>
                        <td id="name" contenteditable > '.''.'</td>
                        <td id="price" contenteditable>'.''.'</td>
                        <td id="description" contenteditable>'.''.'</td>
                        <td id="image_file_name" contenteditable> '.''.' </td>
                        <td> <button type="button" name="add" id="add" class="btn btn-success" > + </button> </td>
                    </tr>';
            

        mysqli_free_result($result);
        mysqli_close($conn); 
    } else{
        $output .= '<tr>
                        <td colspan="5"> Data not Found </td>
                    </tr>';
    }

    $output .= ' </tbody>
                </table>
                </div>'
    ;
           
    echo $output; 
?>