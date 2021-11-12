<H1> List </H1>
<div class="container">
            <form action="/search" method="GET" >
                <div class="input-group">
                    <input type="search" class="form-control" name="search"
                        placeholder="Search"></input>
                        <button type="submit">🔍
                        </button>&nbsp;
                        <a href="/list" class="btn btn-secondary">View all</a></br>
                </div>
            </form>
</div>

<table border=1>
<thead>
    <tr>
        <td> Date </td>
        <td> Time </td>
        <td> GMT </td>
    </tr>
</thead>
<tbody>
    @foreach ($data as $d)
    <tr>
        <td>{{ $d->date }}</td>
        <td>{{ $d->time }}</td>
        <td>{{ $d->location }}</td>
    </tr>
    @endforeach
</tbody>
</table>
