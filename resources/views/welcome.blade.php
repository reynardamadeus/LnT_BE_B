
 {{-- ! + TAB --}}
<!DOCTYPE html>
<html lang="en">
{{-- mengatur informasi dari page kita --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    {{-- <style>
        .font{
            color: blue;
        }
    </style> --}}
    <link rel="stylesheet" href="{{asset('stylesheet.css')}}">
    {{-- link:css --}}
</head>
<body>
    <h1 class="font">This is Heading 1</h1>
    <h2 >This is Heading 2</h2>
    <h3>This is Heading 3</h3>
    <h4>This is Heading 4</h4>
    <h5>This is Heading 5</h5>
    <h6>This is Heading 6</h6>

    <p style="font-weight: 900">This is Hello World</p>

    <p>Lorem ipsum dolor sit amet, <span style="font-style: italic">consectetur</span> adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <a href="https://bncc.net/">This is link</a>
    <a href="">This is link</a>

    <br>
    <a href="https://binus.ac.id/">
    <img src="{{asset('binus.jpg')}}" alt="This is image">

    <hr>
    </a>

    <form action="">
        <label for="">Username</label>
        <input type="text" placeholder="Please type your username" name="username">
        <br>
        <label for="">Date of Birth</label>
        <input type="date">
        <br>
        <label for="">Age</label>
        <input type="number">
        <br>
        <label for="">Foto diri</label>
        <input type="file">
        <br>
        <label for="">I have read the terms</label>
        <input type="checkbox">
        <br>
        <label for="">Password</label>
        <input type="password">

        <button type="submit">This is button</button>
    </form>

    <br>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Joshua</td>
            <td>18</td>
            <td>Joshua@gmail.com</td>
        </tr>
    </table>

    <select name="" id="">
        <option value="">Computer Science</option>
        <option value="">Computer Business</option>
    </select>

    <div class="layout">
        <div class="box">
        <p>This is Div Heading</p>
        <p>This is Div Body</p>
        </div>

        <div class="box">
            <p>This is Div Heading</p>
            <p>This is Div Body</p>
            </div>

        <div class="box">
            <p>This is Div Heading</p>
            <p>This is Div Body</p>
            </div>
        </div>

        <div class="box">
            <p>This is Div Heading</p>
            <p>This is Div Body</p>
            </div>
        </div>
        </div>
</body>
</html>


