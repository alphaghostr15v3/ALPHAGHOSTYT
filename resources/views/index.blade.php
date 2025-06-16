<style>
    nav{
        background-color: black;
        height: 50px;
        margin: 10px;
        padding: 10px;
    }
    a{
        font-size: 40px;
        text-decoration: none;
        margin: 10px;
        padding: 10px;
        color: white;
    }
    h1{
        text-align: center;
        font-size: 50px;
        margin: 10px;
        padding: 10px;
    }
</style>
<header>
    <h1>Index Page</h1>
</header>
<div>
    <nav>
        <a href="{{url('/Home')}}">Home</a>
        <a href="{{url('/contact')}}">Contact US</a>
        <a href="{{url('/about')}}">About</a>
        <a href="{{url('/registration')}}">Registration</a>
        <a href="{{url('user-form')}}">Student Form</a>
    </nav>
</div>