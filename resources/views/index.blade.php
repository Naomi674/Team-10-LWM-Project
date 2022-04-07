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
            <div class="column is-one"><div class="card">
                    <ul>
                        <li class="title is-5 p-2" style="background: #e35205">Legend</li>
                        <li>
                            <span class="icon">
                      <i class="fas fa-email"></i>
                    </span>
                            No issues
                        </li>
                        <li>
                            <span class="icon">
                      <i class="fas fa-email"></i>
                    </span>
                            Planned maintenance
                        </li>
                        <li><span class="icon">
                      <i class="fas fa-email"></i>
                    </span>
                            Service degradation
                        </li>
                        <li><span class="icon">
                      <i class="fas fa-email"></i>
                    </span>
                            Outage
                        </li>
                        <li>
                            <span class="icon">
                      <i class="fas fa-email"></i>
                    </span>
                            Multiple issues
                        </li>
                    </ul>
            </div></div>
            <div class="column is-four-fifths">
                <table class="table is-narrow ml-auto mr-auto ">
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
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Digital Workplace</th>
                        <th>
                            <span class="icon">
                              <i class="fas fa-email"></i>
                            </span>
                        </th>
                        <th>
                            <span class="icon">
                              <i class="fas fa-email"></i>
                            </span>
                        </th>
                        <th>
                            <span class="icon">
                              <i class="fas fa-email"></i>
                            </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>Operational</th>
                    </tr>
                    <th>E-Commerce</th>
                    <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                    </th>
                    <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                    </th>
                    <th>Operational</th>
                    </tr>

                    <tr>
                        <th>Files & Folders</th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>
                <span class="icon">
                  <i class="fas fa-email"></i>
                </span>
                        </th>
                        <th>Operational</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection