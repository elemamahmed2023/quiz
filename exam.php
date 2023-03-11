<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'exam');
if (!$conn) {
    echo "Error:" . mysqli_connect_error();
}


        $sqls = 'SELECT * FROM quiz ;';
                $results = mysqli_query($conn, $sqls);
                $ques = mysqli_fetch_all($results, MYSQLI_ASSOC);
                echo "<pre>";
                print_r($ques);
                echo "</pre>";
                
               

                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                   
                    <link rel="stylesheet" href="main.css" />
                  
                </head>
                <body>

                <?php foreach ($ques as $que) : ?>
                    <tbody id="tbl" class="border border-light">

                        <tr class="tblrow">
                            <div class="bg-info">
                                <td class="idrec"><?php echo htmlspecialchars($que['id']) ?></td>
                                <td class="fnrec"><?php echo htmlspecialchars($que['title']) ?></td>
                                <td class="larec"><?php echo htmlspecialchars($que['answer1']) ?></td>
                                <td class="emrec"><?php echo htmlspecialchars($que['rightanswer']) ?></td>
                            </div>
                        </tr>


                    </tbody>


                <?php endforeach; ?>


                <div class="quiz-app">
        <div class="quiz-info">
          <div class="category">Category: <span>HTML</span></div>
          <div class="count">Questions Count: <span></span></div>
        </div>
        <div class="quiz-area">
          <h2 class="quizTitle">

          </h2>
          
        </div>
        <div class="answers-area">
          <div class="answer">
           
     

          </div>

        </div>

        <button class="submit-button">Submit Answer</button>

        <div class="bullets">
          <div class="spans">
           
          </div>
          <div class="countdown"></div>
        </div>

        <div class="results">

        </div>
    </div>
    
                    <script src="main.js"></script>
                </body>
                </html>

               

