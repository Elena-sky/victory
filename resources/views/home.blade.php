@extends('layouts.app')

@section('content')

<section class="login-section">
    <div class="container col-md-10">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

            <!-- login form -->
            <div class="row login-row">
                <div class="col-md-6 offset-md-3 login-row__form text-center ">
                    <form method="POST" action="{{route('subscribersSearch')}}">
                        {{ csrf_field() }}

                        <div class="col-md-12 form-group">
                            <input data-date-format="yyyy-mm-dd" id="datepicker_from" class="login-form__input" name="from" placeholder="From" required>

                            <input data-date-format="yyyy-mm-dd" id="datepicker_to" class="login-form__input" name="to" placeholder="To" required>

                            <textarea name="text_message" rows="10" cols="70" id="comment"
                                      class="login-form__input login-form__textarea" placeholder="Comment..."></textarea>
                        </div>

                        <input class="col-md-12 login-form__submit btn" type="submit" value="SEND"/>
                    </form>

                </div>
            </div>
            <!-- End login form -->

            <div class="col-md-6">
                <h2>List of subscribers</h2>

                <b>Period:</b>
                <div class="col-sm-6 offset-md-1">
                    <span>from: {{$data['from']}} </span>
                </div>
                <div class="col-sm-6 offset-md-1">
                    <span>to: {{$data['to']}}</span>
                </div>
            </div>


            <!-- table -->
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subscribers as $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->created_at}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <!-- End table -->

    </div>
</section>
@endsection
