<div>
    <h1>Enter User Details</h1>
    <form action="/userdetails" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter name"><br>
        <input type="number" name="age" placeholder="Enter age"><br>
        <button type="submit">Submit</button>
    </form>
</div>
