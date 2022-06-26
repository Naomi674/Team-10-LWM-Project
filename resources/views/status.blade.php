@extends('Components.layout')

@section('content')

    <div class="field has-addons is-justify-content-right mt-6 mr-6 has-icons-right">

    <div class="container mt-5 p-6">
            <div class="columns">
            <div class="column is-one"><div class="card">
                    <ul>
                        <li class="title is-5 p-2" style="background: #e35205">Legend</li>
                        <li>
                            <span class="icon">
                      <i class="fa-solid fa-circle-check"></i>
                    </span>
                            No issues
                        </li>
                        <li>
                            <span class="icon">
                      <i class="fa-solid fa-circle-info"></i>
                    </span>
                            Planned maintenance
                        </li>
                        <li><span class="icon">
                      <i class="fa-solid fa-circle-minus"></i>
                    </span>
                            Service degradation
                        </li>
                        <li><span class="icon">
                     <i class="fa-solid fa-circle-exclamation"></i>
                    </span>
                            Outage
                        </li>
                        <li>
                            <span class="icon">
                     <i class="fa-solid fa-circle-plus"></i>
                    </span>
                            Multiple issues
                        </li>
                    </ul>
            </div></div>
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
                            <span class="icon">
                              <i class="fa-solid fa-envelope"></i>
                            </span>
                        </th>
                        <th>
                            <span class="icon">
                              <i class="fa-solid fa-circle-check"></i>
                            </span>
                        </th>
                        <th>
                            <span class="icon">
                              <i class="fa-solid fa-circle-check"></i>
                            </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>Operational</th>
                    </tr>
                    <th>E-Commerce</th>
                    <th>
                <span class="icon">
                  <i class="fa-solid fa-envelope"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                 <i class="fa-solid fa-circle-check"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                 <i class="fa-solid fa-circle-check"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                    </th>
                    <th>Operational</th>
                    </tr>

                    <tr>
                        <th>Files & Folders</th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-envelope"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                 <i class="fa-solid fa-circle-check"></i>
                </span>
                        </th>
                        <th>Operational</th>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <button class="buttons has-background-warning button is-link">
            <a href="{{ route('chats.create') }}">Send message</a>
        </button>

        <button class="buttons has-background-black button is-link">
            Check for new message
        </button>


    </div>

@endsection