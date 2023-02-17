<h1>
    <?php echo $name;?>
</h1>

<h1>
    <?php echo $age;?>
</h1>

<form action="/store" method="post">
    @csrf
    Username:
    <input type="text" name="username" id="">

    <br>

    Password:
    <input type="password" name="password" id="">

    <br>
    <input type="submit" value="Dang nhap">

</form>