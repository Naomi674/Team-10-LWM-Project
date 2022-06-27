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
                                                <form action="{{ route('catalog.store') }}" method="POST">
                                                    @csrf
                                                    <strong>Title</strong><br/><input type="text"
                                                                                      name="title"
                                                                                      value="{{old('title')}}"
                                                                                      placeholder="title"
                                                                                      class="input"
                                                                                      id="title"><br/>
                                                    @error('title')
                                                    <p class="is-danger">{{ $message }}</p>
                                                    @enderror

                                                    <strong>Description</strong><br/><input type="text"
                                                                                            name="description"
                                                                                            value="{{old('description')}}"
                                                                                            placeholder="description"
                                                                                            class="input"
                                                                                            id="description"><br/>
                                                    @error('description')
                                                    <p class="is-danger">{{ $message }}</p>
                                                    @enderror

                                                    <strong>Location</strong><br/><input type="text"
                                                                                         name="location"
                                                                                         value="{{old('location')}}"
                                                                                         placeholder="location"
                                                                                         class="input"
                                                                                         id="location"><br/>
                                                    @error('location')
                                                    <p class="is-danger">{{ $message }}</p>
                                                    @enderror


                                                    <strong>Author</strong><br/><input type="text"
                                                                                       name="author"
                                                                                       value="{{old('author')}}"
                                                                                       placeholder="author"
                                                                                       id="author"><br/>
                                                    @error('author')
                                                    <p class="is-danger">{{ $message }}</p>
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
