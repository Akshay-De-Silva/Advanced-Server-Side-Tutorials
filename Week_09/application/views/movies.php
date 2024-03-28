<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style type="text/css">
	</style>
</head>
<body>

    <div class="container">
        <h2 class="mt-5">Movie Search</h2>
        <form id="movieSearchForm" class="form-inline mt-3 mb-3">
            <input type="text" id="searchQuery" class="form-control mr-2" placeholder="Enter movie title">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div id="results" class="row"></div>
    </div>

<script>
    document.getElementById('movieSearchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting in the traditional way
        const query = document.getElementById('searchQuery').value;
        searchMovies(query);
    });

    function searchMovies(query) {
        const apiKey = '922a2db4'; 
        const url = `http://www.omdbapi.com/?s=${encodeURIComponent(query)}&apikey=${apiKey}`;

        fetch(url)
        .then(response => response.json())
        .then(data => {
            displayResults(data);
        })
        .catch(error => console.error('Error:', error));
    }

    function displayResults(data) {
        const resultsDiv = document.getElementById('results');
        resultsDiv.innerHTML = ''; 

        if (data.Response === "True") {
            data.Search.forEach(movie => {
                const col = document.createElement('div');
                col.className = 'col-md-3 movie';
                col.innerHTML = `
                    <div class="card">
                        <img src="${movie.Poster}" class="card-img-top" alt="Poster" onError="this.onerror=null;this.src='https://via.placeholder.com/200x300?text=No+Image';">
                        <div class="card-body">
                            <h5 class="card-title">${movie.Title}</h5>
                        </div>
                    </div>
                `;
                resultsDiv.appendChild(col);
            });
        } else {
            resultsDiv.innerHTML = `<p class="text-warning">No results found</p>`;
        }
    }
    </script>

</body>
</html>
