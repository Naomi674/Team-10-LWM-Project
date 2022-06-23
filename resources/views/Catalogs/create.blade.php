@extends('Components.layout')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">
                        <div class="column is-12">
                            <div class="panel">
                                <a class="panel-block">
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                <form action="{{ route('facilities.store') }}" method="POST">
                                                    @csrf
                                                    <strong>Title</strong><br/><input type="text" name="title" value="example"
                                                                                     id="title"><br/>
                                                    @error('title')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                    <strong>Description</strong><br/><input type="text" name="description" value="example"
                                                                                       id="description"><br/>
                                                    @error('description')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                    <strong>Time</strong><br/><input type="number" name="thud" value="12"
                                                                                     id="number"><br/>
                                                    @error('time')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                    <strong>Location</strong><br/><input type="text" name="location" value="example"
                                                                                            id="location"><br/>
                                                    @error('location')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                    <button type="submit">Submit</button>
                                                </form>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
