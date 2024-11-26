<!DOCTYPE html>
<html>
<head>
    <title>Favorite Movies</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="favorite.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="index.php" class="home-active"><i class='bx bxs-home'></i> Home</a></li>
        </ul>
    </div>

    <div class="content">
        <h2>Favorite Movies</h2>
        <div id="movie-list" class="movie-list"></div>
    </div>

    <script>
        $(document).ready(function() {
            // Movie title to HTML page mapping
            var moviePageMapping = {
                "How To Make Millions Before Grandma Dies": "introduction1.php",
                "Inside Out 2": "introduction2.php",
                "The Garfield Movie: Trailer 2": "introduction3.php",
                "I Not Stupid 3": "introduction4.php",
                "Bad Boys: Ride Or Die": "introduction5.php",
                "Twilight Of The Warriors: Walled In": "introduction6.php",
                "Haikyu!!: The Dumpster Battle": "introduction7.php",
                "The Experts": "introduction8.php",
                "The Watchers": "introduction9.php",
                "Zim Zim Ala Kazim": "introduction10.php",
                "The Taste of Things": "introduction11.php",
                "Junkyard Dog": "introduction12.php",
                "Epic Tails": "introduction13.php",
                "The Animal Kingdom": "introduction14.php",
                "Houria": "introduction15.php",
                "A Chance To Win": "introduction16.php",
                "Sheriff: Narko Integriti": "introduction17.php",
                "Kingdom Of The Planet Of The Apes": "introduction18.php",
                "Detective Conan Vs. Kid The Phantom Thief": "introduction19.php",
                "Sinakagon": "introduction20.php"
            };

            function fetchMovies() {
                $.ajax({
                    url: 'favorite_fetch.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var movies = response;
                        var movieList = $('#movie-list');
                        movieList.empty(); // Clear the list before appending new items
                        if (movies.length > 0) {
                            movies.forEach(function(movie) {
                                var movieDiv = $('<div class="movie"></div>');
                                movieDiv.append('<img src="' + movie.poster + '" alt="' + movie.title + '" class="movie-poster">');
                                movieDiv.append('<h3>' + movie.title + '</h3>');
                                movieDiv.append('<button class="btn view-btn" data-title="' + movie.title + '">View</button>');
                                movieDiv.append('<button class="btn delete-btn" data-movieid="' + movie.movieID + '">Delete</button>');
                                movieList.append(movieDiv);
                            });

                            // Add event listener for view buttons
                            $('.view-btn').on('click', function() {
                                var title = $(this).data('title');
                                var page = moviePageMapping[title];
                                if (page) {
                                    window.location.href = page;
                                } else {
                                    alert('Page not found for this movie.');
                                }
                            });

                            // Add event listener for delete buttons
                            $('.delete-btn').on('click', function() {
                                var movieID = $(this).data('movieid');
                                deleteMovie(movieID);
                            });
                        } else {
                            movieList.append('<p>No favorite movies found.</p>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            function deleteMovie(movieID) {
                $.ajax({
                    url: 'favorite_delete.php',
                    type: 'POST',
                    data: { movieID: movieID },
                    success: function(response) {
                        alert(response);
                        fetchMovies(); // Refresh the list after deletion
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Fetch movies on page load
            fetchMovies();
        });
    </script>
</body>
    </html>
