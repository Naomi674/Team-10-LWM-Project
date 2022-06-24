@extends('Components.layout')

@section('content')
    <div class="container-md">
        <div class="row">
            <div class="col-lg-12 col-m-15 p-6">
                <div class="pull-left content is-small has-background-primary-light p-3">
                    <h1>You want to contact with the admin of the portal? Start chat by typing in a question or a message. </h1>
                </div>
            </div>
        </div>

       <form id="message" action="{{ route('chats.store') }}" >
    @csrf

           <div class="row">
               <div class="col-xs-12 col-sm-12 col-m-15 p-6">
                   <div class="form-group">
                       <strong>Send your message:</strong>
                       <label>
                           <input class="input"
                                  type="text"
                                  name="name"
                                  placeholder="Add the text here">
                       </label>
                   </div>
               </div>

               <div class="pl-6">
               <button type="submit" class="button is-warning">Submit</button>
               </div>
@endsection
