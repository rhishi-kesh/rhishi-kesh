<?php

    $profile = [
        'Self' => [
            'Name' => 'Rhishi Kesh Bhowmik',
            'Description' => '',
            'Position' => 'Junior Full Stack Web Developer'
        ],
        'Social' => [
            'Facebook' => 'https://www.facebook.com/rhishi.kesh.bhowmik',
            'Linkedin' => 'https://www.linkedin.com/in/rhishi-kesh/',
            'Gmail' => 'reshikash300@gmail.com'
        ],
        'Skill' => [
            'Comfortable' => ['Laravel', 'PHP', 'Mysql', 'Bootstrap', 'Jquery', 'Ajax', 'Livewire', 'CSS', 'HTML'],
            'Comprehensive' => ['JS', 'Tailwind CSS'],
            'Familiar' => ['VueJS'],
            'Tools' => ['Git', 'Github', 'VSCode', 'Clickup']
        ],
    ];
    
    //OutPut

    echo "<pre>";
        print_r($profile);
    echo "</pre>";

    foreach($profile as $key => $data){
        if(is_array($data)){
            echo "$key" . ": ";
            foreach($data as $child1Key => $child1){
                echo "$child1Key" . ": ";
                if(is_array($child1)){
                    foreach($child1 as $child2Key => $child2){
                        echo "$child2" . ": ";
                    }
                }else{
                    echo $child1 . "<br>";
                }
            }
        }else{
            echo "$key" . ": ";
            echo $data . "<br>";
        }
    }

