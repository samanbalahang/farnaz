@extends('bulding/layout')
<body id="log-body">
    <main id="main-login">
        <div class="login-box">
            <div class="log-first log-size">
            <form action="{{route('login.store')}}" method="post">
                @csrf
                <label for="text">username</label>
                <input type="text" class="form-control" placeholder="username" name="email">
                <label for="text">password</label>
                <input type="password" class="form-control" placeholder="password" name="password"> 
                <input type="submit" value="login">
            </form>
            </div>
            <div class="log-icon">
                <div class="title-text">
                    <p>login</p>
                </div>
            </div>
            <div class="log-second log-size" >
                <p>
                    Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. 
                    Nemo cupiditate esse eius, 
                    repudiandae tempore suscipit facere voluptatibus sed
                    inventore recusandae nulla fuga maiores molestias
                    velit maxime tenetur iste porro? Labore?
                </p>
            </div>
        </div>

    </main>
    
</body>
</html>