<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $students = [
            [
                'name' =>'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' =>'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' =>'Raju',
                'program' => 'BIT',
                'age' => 22
            ],
        ];

    ?>

    <table border="1" cellpadding="1" >    
        <tr>
            <td>Name: </td>
            <td>Program: </td>
            <td>Age: </td>
        </tr>
        
        <?php
            foreach ($students as $x):
        ?>
            <tr>
                <td><?php echo $x['name']; ?></td>
                <td><?php echo $x['program']; ?></td>
                <td><?php echo $x['age']; ?></td>
            </tr>
            <?php endforeach; ?>
    
    </table>
    
</body>
</html>
