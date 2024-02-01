<div class=" container bg-dark pl-4 custom-height" style="height:100%;">
        <ul class="list-group">
            <li class="list-group-item mt-2"><a href="{{route('web-home')}}">Admin Dashboard</a></li>
            <li class="list-group-item mt-5"><a href="{{route('user-index')}}">Users</a></li>
            <li class="list-group-item mt-1"><a href="{{route('student-home')}}">Students</a></li>
            <li class="list-group-item mt-1"><a href="{{route('faculty-home')}}">Faculty</a></li>
            <li class="list-group-item mt-1"><a href="{{route('home-services')}}">Posts</a></li>
            <li class="list-group-item mt-5 "><a href="/logout">Logout</a></li>
        </ul>
</div>
<style>
    .list-group li:hover{
       background-color: rgb(65, 159, 76);
       color: wheat;
       font-size: 20px;
    }
</style>
