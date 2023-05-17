@extends('welcome')

@section('content')
<div id="pelise">
<h1>Search Series</h1>

    <form id="search-form" action="" method="GET" name="pelis">
        <div class="form-group">
            <label for="query">Query:</label>
            <input type="text" name="query" id="query" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<div class="info">
      
    </div>

@endsection

@section('scripts')
<script>
    const searchForm = document.getElementById('search-form');
    const infoDiv = document.querySelector('.info');

    searchForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        const query = searchForm.elements.query.value;
        fetch(`/api/omdb/bySearchSeries?query=${query}`, {
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            }
        }).then(response => response.json()).then(dat => {
            const data = dat.Search;
            pelis.reset();
            infoDiv.innerHTML = '';
            if (data && data.length > 0) {
                data.forEach(item => {
                    infoDiv.innerHTML += `<div class='movie'> 
                    <h1>${item.Title}</h1> 
                    <img src='${item.Poster}'> 
                    <p> ${item.Year} <p>
                    </div>`
                });
            } else {
                infoDiv.textContent = 'No hay resultados';
            }

            console.log(data);
        }).catch(error => console.error(error));
    });
</script>

@endsection