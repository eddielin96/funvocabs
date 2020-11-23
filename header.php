<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    body{
        background:#33bbff;
    }
    form > div > p > input{
        background:#f2f2f2;
        border: 0px;
        border-bottom: 1px solid #eeeeee;
        color:#000000;
        font-family:"Comic Sans MS", "Arial";
    }
    ::placeholder{
        color:#eeeeee;
    }
   .text-3d{
    margin:10px;
    color:#fff;
    font-size:60px;
    transform: skewY(-6deg);
    transform-origin:bottom left;
    text-shadow:
    1px -1px 10px rgba(255,255,255,0.4),
    0px -1px 10px rgba(255,255,255,0.4),
    -1px 1px 10px rgba(255,255,255,0.4),

    0px -2px 3px #fff,
    -1px -2px 3px #fff,
    -2px -2px 3px #fff,

    -1px -3px 3px #ddd,
    -2px -3px 3px #ddd,
    -3px -3px 3px #ddd,

    -2px -4px 2px #fff,
    -3px -4px 2px #fff,
    -4px -4px 2px #fff,

    -3px -5px 1px #fff,
    -4px -5px 1px #fff,
    -5px -5px 1px #fff;
    }  

    .text-3d::before{
       content:"FunVocabs";
       position:absolute;
       left:0;
       top:0;
       transform: skewX(30deg);
       z-index:-1;
       transform-origin:bottom left;
       color:transparent;
       text-shadow:
       15px 0px 20px rgba(0, 0, 102,0.25),
       15px 0px 25px rgba(0, 0, 102,0.2),
       15px 0px 35px rgba(0, 0, 102,1.5),
       15px 0px 45px rgba(0, 0, 102,1);
    } 
/*
    form > div > p > input:invalid{
        background-color:red;
        border:none;
    }
    form > div > p > input:valid{
        background-color:#80ffaa;
        border:none;
    }
*/

    .register_container > div >form{
        background:white;
        font-family:"Comic Sans MS", "Arial";
    }
    .register_container > div >h5{
        font-size:40px;
        font-family:fantasy;
        background:linear-gradient(to bottom, skyblue,lightblue, lemonchiffon,yellow, pink,red);
        -webkit-background-clip:text;
        color:transparent;
        animation:textfilter 3s linear infinite;
        }
        @keyframes textfilter{
        0%{
          filter:hue-rotate(0deg);
        }
        100%{
          filter:hue-rotate(720deg);

        }
}
    }
    </style>
</head>