@extends('Components.layout')

@section('content')

    <div class="field has-addons is-justify-content-right mt-6 mr-6 has-icons-right">
        <div class="control">
            <input class="input" type="text" placeholder="Search">
        </div>
        <div class="control">
            <a class="button is-info">
            <span class="icon is-small is-left">
             <i class="fas fa-search"></i>
            </span>
            </a>
        </div>
    </div>
    <div class="container mt-5 p-6">
        <div class="columns">
            <div class="column is-one">
                <div class="card">
                    <ul>
                        <li class="has-text-white is-5 p-2" style="background: #e35205">Legend</li>
                        <li class="p-1">
                            <i class="fa-solid fa-circle-check"></i>
                            No issues
                        </li>
                        <li class="p-1">
                            <i class="fa-solid fa-circle-info"></i>
                            Planned maintenance
                        </li>
                        <li class="p-1">
                            <i class="fa-solid fa-circle-minus"></i>
                            Service degradation
                        </li>
                        <li class="p-1">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            Outage
                        </li>
                        <li class="p-1">
                            <i class="fa-solid fa-circle-plus"></i>
                            Multiple issues
                        </li>
                    </ul>
                </div>
            </div>
            <div class="column is-four-fifths">
                <table class="table is-hoverable is-fullwidth ml-auto mr-auto ">
                    <thead>
                    <tr>
                        <th>Status history</th>
                        <th>Subscribe</th>
                        <th>date</th>
                        <th>date</th>
                        <th>date</th>
                        <th>date</th>
                        <th>date</th>
                        <th>Now</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Business Service</th>
                        <th>
                            <i class="fa-solid fa-envelope"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            Operational
                        </th>
                    </tr>
                    <tr>
                        <th>Digital Workplace</th>
                        <th>
                            <i class="fa-solid fa-envelope"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>Operational</th>
                    </tr>
                    <th>E-Commerce</th>
                    <th>
                        <i class="fa-solid fa-envelope"></i>
                    </th>
                    <th>
                        <i class="fa-solid fa-circle-check"></i>
                    </th>
                    <th>
                        <i class="fa-solid fa-circle-check"></i>
                    </th>
                    <th>
                        <i class="fa-solid fa-circle-check"></i>
                    </th>
                    <th>
                        <i class="fa-solid fa-circle-check"></i>
                    </th>
                    <th>
                        <i class="fa-solid fa-circle-check"></i>
                    </th>
                    <th>Operational</th>
                    </tr>
                    <tr>
                        <th>Files & Folders</th>
                        <th>
                            <i class="fa-solid fa-envelope"></i>
                        </th>
                        <th>

                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>
                            <i class="fa-solid fa-circle-check"></i>
                        </th>
                        <th>Operational</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection