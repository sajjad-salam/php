    <?php 

    $emails=["sajodi@gmail.com","sajjjadsalam@gmail.com","salam@email.com","dddjffhfh"];
    function che_email($em)
        {
            foreach ($em as $key => $value) {
                if (filter_var($value,FILTER_VALIDATE_EMAIL)) {
                    echo "$value this is a email <br>";
                    
                }else {
                    echo "$value this is not email <br>";
                }

            }
        }

        che_email(...$emails);










?>