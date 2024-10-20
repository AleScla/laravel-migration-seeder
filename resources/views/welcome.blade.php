@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container p-5">
    <h2>All trains</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Company</th>
            <th scope="col">Starting Station</th>
            <th scope="col">Arrival station</th>
            <th scope="col">Train number</th>
            <th scope="col">Departure</th>
            <th scope="col">Arrival</th>
            <th scope="col">On Time</th>
            <th scope="col">Cancelled</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $train)
            <tr>
                <th scope="row">{{$train->id}}</th>
                <td>{{$train->company}}</td>
                <td>{{$train->starting_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->train_number}}</td>
                <td>{{$train->departure}}</td>
                <td>{{$train->arrival}}</td>
                @if ($train->on_time == 0)
                    <td>
                        Yes
                    </td>
                @else
                    <td>
                        No
                    </td>
                @endif
                @if ($train->cancelled == 0)
                    <td>
                        Yes
                    </td>
                @else
                    <td>
                        No
                    </td>
                @endif
            </tr>
          @endforeach
        </tbody>
      </table>
      <h2>Departing today</h2>
      <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Company</th>
              <th scope="col">Starting Station</th>
              <th scope="col">Arrival station</th>
              <th scope="col">Train number</th>
              <th scope="col">Departure</th>
              <th scope="col">Arrival</th>
              <th scope="col">On Time</th>
              <th scope="col">Cancelled</th>
            </tr>
          </thead>

            <tbody>
                @foreach ($trains as $train)
                    @if (str_contains($train->departure,'2024-10-20'))
                        <tr>
                            <th scope="row">{{$train->id}}</th>
                            <td>{{$train->company}}</td>
                            <td>{{$train->starting_station}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->train_number}}</td>
                            <td>{{$train->departure}}</td>
                            <td>{{$train->arrival}}</td>
                            @if ($train->on_time == 0)
                                <td>
                                    Yes
                                </td>
                            @else
                                <td>
                                    No
                                </td>
                            @endif
                            @if ($train->cancelled == 0)
                                <td>
                                    Yes
                                </td>
                            @else
                                <td>
                                    No
                                </td>
                            @endif
                        </tr>
                    @endif
                @endforeach
            </tbody>

      </table>
</div>
@endsection
