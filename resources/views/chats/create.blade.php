@extends('Components.layout')

@section('content')

            <div class="col-lg-12 col-m-15 p-6">
                <div class="pull-left content is-small has-background-primary-light p-3">
                    <h1>You want to contact with the admin of the portal? Start chat by typing in a question or a message. </h1>
                </div>

                <form method="POST" action="/admin/chats">
                    @csrf

                    <div class="mb-15">
                        <label class="block mb-2 is-uppercase text-grey-700" for="title">
                            Message
                        </label>

                        <input class="input p-2 w-full"
                               type="text"
                               name="title"
                               id="title"
                               required >

                        @error('title')
                        <p class="is-danger text-xs mt-2">{{ $message }} </p>
                        @enderror

                        <div class="p-4">
                            <button type="submit" class="button is-warning">Submit</button>
                        </div>

                    </div>
                </form>
            </div>


@endsection
