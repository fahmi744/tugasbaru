<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .section {
            background-color: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        th, td {
            width: 40px;
            height: 40px;
            text-align: left;
            font-weight: bold;
            border: 1px solid black;
            font-size: 20px;
            color: black;
            padding-left: 5px;
            font-family:'calibri', Times, serif;
        }

  
        thead th {
            background-color: limegreen;
            color: black;
        }

    
        tbody th {
            background-color: limegreen;
            color: black; 
        }

        
        .ganjil {
            background-color: gold;
        }

      
        .genap {
            background-color: deepskyblue;
        }
    </style>
</head>
<body>

<div class="section">
    <h2>Latihan 2</h2>
    <table>
        <thead>
        <tr>
             <th style="background-color: white; color: black;">Bilangan</th> 
             <?php
              for ($i = 1; $i <= 10; $i++) {
              echo "<th style='background-color: limegreen; color: black;'>$i</th>"; 
              }
             ?>
        </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>"; 
                for ($j = 1; $j <= 10; $j++) {
                    $hasil = $i * $j;
                    $kelas = ($hasil % 2 == 0) ? "genap" : "ganjil";
                    echo "<td class='$kelas'>$hasil</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
