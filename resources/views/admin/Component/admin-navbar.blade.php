
<nav class="navbar navbar-expand-lg admin-navbar bg-success" style="width:100%;">
    <a class="navbar-brand" href="#">Admin Profile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link " href="{{route('web-home')}}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('student-home')}}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('faculty-home')}}">Faculty</a>
            </li>
            <li class="nav-item">
                <form class="form-inline">
                    <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="button">Search</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
<script>
    document.getElementById('searchButton').addEventListener('click', function () {
        // Get the search input value
        const searchTerm = document.getElementById('searchInput').value;

        // Perform your search logic here
        // You can use JavaScript, AJAX, or fetch to send the search term to a server
        // and receive and display search results

        // For demonstration purposes, let's simply alert the search term
        alert(`You searched for: ${searchTerm}`);
    });
</script>
