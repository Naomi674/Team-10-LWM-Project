@extends('Components.layout')

@section('content')
    <h2>My Phonebook</h2>

    {{-- <input type="text" id="myInput" onkeyup="search_animal()" placeholder="Search for names.." title="Type in a name"
        class="input"> --}}

    <input id="searchbar" onkeyup="search_animal()" type="text" name="search" class="input" placeholder="Animals">

    <ul id="list-holder">

    </ul>
    {{-- <ul id="myUL">
        <li><a href="knowledge">Adele</a></li>
        <li><a href="#">Agnes</a></li>

        <li><a href="#">Billy</a></li>
        <li><a href="#">Bob</a></li>

        <li><a href="#">Calvin</a></li>
        <li><a href="#">Christina</a></li>
        <li><a href="#">Cindy</a></li>
    </ul> --}}

    <a href="{{ route('catalog.index') }}" class="btn btn-primary">Test me!</a>

    <script>
        // function myFunction() {
        //     var input, filter, ul, li, a, i, txtValue;
        //     input = document.getElementById("myInput");
        //     filter = input.value.toUpperCase();
        //     ul = document.getElementById("myUL");
        //     li = ul.getElementsByTagName("li");
        //     for (i = 0; i < li.length; i++) {
        //         a = li[i].getElementsByTagName("a")[0];
        //         txtValue = a.textContent || a.innerText;
        //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //             li[i].style.display = "";
        //         } else {
        //             li[i].style.display = "none";
        //         }
        //     }
        // }

        let jsonData = `[
            {"Name": "My Tickets"},
            {"Name": "Admin"},
            {"Name": "Catalog"},
            {"Name": "Knowledge"}
        ]`

        let data = JSON.parse(jsonData)

        function search_animal() {
            let input = document.getElementById('searchbar').value
            input = input.toLowerCase();
            let x = document.querySelector('#list-holder');
            x.innerHTML = ""

            for (i = 0; i < data.length; i++) {
                let obj = data[i];

                if (obj.Name.toLowerCase().includes(input)) {
                    const elem = document.createElement("li")
                    elem.innerHTML = `<a href="${obj.Name}">${obj.Name}</a>`
                    x.appendChild(elem)
                    console.log(elem)
                }
            }
        }
        // var a = document.querySelectorAll('.list-item');
        // console.log(a)
        // a.href = "http://www.google.com";

    </script>
@endsection
