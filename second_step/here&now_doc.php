<?php
//==========Heredoc section==============
//heredoc not skip
    $name = "sajodi";
    echo <<< "Here"
    sajjad salam
    \\\\\\\\
    $$$$$$
    my name is 
    $name
    Here;
echo '<br>';
//==========Nowdoc section==============
// nowdoc just skip
    echo <<< 'now'
    sajjad salam
    \\\\\\\\
    $$$$$$
    my name is 
    $name

    now;