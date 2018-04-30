@extends('layouts.app')

@section('content')

<section class="login-section">
    <div class="container col-md-10">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!


        <!-- login form -->
        <div class="row login-row">
            <div class="col-md-6 offset-md-3 login-row__form">
                <form  class="login-form" method="POST" action="{{route('subscribersSearch')}}">
                    {{ csrf_field() }}

                    <div class="offset-md-1 form-group">
                        <div class="col-md-6">
                            <input data-date-format="yyyy-mm-dd" id="datepicker_from" class="login-form__input" name="from" placeholder="From" required>
                        </div>
                    </div>

                    <div class="offset-md-1 form-group">
                        <div class="col-md-6">
                            <input data-date-format="yyyy-mm-dd" id="datepicker_to" class="login-form__input" name="to" placeholder="To" required>
                        </div>
                    </div>

                    <div class="offset-md-1 form-group">
                        <div class="col-md-6">
                            <textarea name="text_message" rows="10" cols="70" id="comment"
                                      class="login-form__input login-form__textarea" placeholder="Comment..."></textarea>
                        </div>
                    </div>

                    <input class="offset-md-5 login-form__submit btn" type="submit" value="SEND"/>
                </form>

            </div>
        </div>
        <!-- End login form -->


            <h2>List of subscribers</h2>
            <p ><b>Period</b>:<span>from: {{$data['from']}} </span>  <span>to: {{$data['to']}}</span> </p>



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
