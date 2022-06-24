@extends('Components.layout')

@section('head')
<style>
    li { /* styles all li elements*/
        list-style-type: none;
    }
</style>

@section('content')
    {{-- <h2>My Phonebook</h2> --}}

    {{-- <input type="text" id="myInput" onkeyup="search_animal()" placeholder="Search for names.." title="Type in a name"
        class="input"> --}}

    {{-- <input id="searchbar" onkeyup="search_animal()" type="text" name="search" class="input" placeholder="Animals">

    <ul id="list-holder">

    </ul> --}}
    {{-- <ul id="myUL">
        <li><a href="knowledge">Adele</a></li>
        <li><a href="#">Agnes</a></li>

        <li><a href="#">Billy</a></li>
        <li><a href="#">Bob</a></li>

        <li><a href="#">Calvin</a></li>
        <li><a href="#">Christina</a></li>
        <li><a href="#">Cindy</a></li>
    </ul> --}}

    {{-- <a href="{{ route('catalog.index') }}" class="btn btn-primary">Test me!</a> --}}

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

        // let jsonData = `[
    //     {"Name": "My Tickets"},
    //     {"Name": "Admin"},
    //     {"Name": "Catalog"},
    //     {"Name": "Knowledge"}
    // ]`

        // let data = JSON.parse(jsonData)

        // function search_animal() {
        //     let input = document.getElementById('searchbar').value
        //     input = input.toLowerCase();
        //     let x = document.querySelector('#list-holder');
        //     x.innerHTML = ""

        //     for (i = 0; i < data.length; i++) {
        //         let obj = data[i];

        //         if (obj.Name.toLowerCase().includes(input)) {
        //             const elem = document.createElement("li")
        //             elem.innerHTML = `<a href="${obj.Name}">${obj.Name}</a>`
        //             x.appendChild(elem)
        //             console.log(elem)
        //         }
        //     }
        // }
        // var a = document.querySelectorAll('.list-item');
        // console.log(a)
        // a.href = "http://www.google.com";
    </script>

    {{-- <div class="dropdown"> --}}
        {{-- <button onclick="myFunction()" class="dropbtn">Dropdown</button> --}}
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            <li><a href="{{ route('catalog.index') }}">Catalog</a></li>
            <li><a href="{{ route('knowledge.index') }}">Knowledge</a></li>
            <li><a href="{{ route('ticket.index') }}">My Tickets</a></li>
            <li><a href="{{ route('status.index') }}">System Status</a></li>
            <li><a href="{{ route('admin.userManagement.index') }}">User Management</a></li>
            <li><a href="{{ route('hr.index') }}">HR Catalog</a></li>
            <li><a href="{{ route('it.index') }}">IT Catalog</a></li>
            <li><a href="{{ route('facilities.index') }}">Facilities Catalog</a></li>
            <li><a href="{{ route('finance.index') }}">Finance Catalog</a></li>
            <li><a href="{{ route('masterdata.index') }}">Masterdata Catalog</a></li>
            <li><a href="{{ route('businesssupport.index') }}">Business Support Catalog</a></li>
        </div>
    {{-- </div> --}}

    <script>
        /* When the user clicks on the button,
                    toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
