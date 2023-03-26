@include('partials.__header', ['title'=>'Student'])
    <ul>
        @foreach ($data as $student)
            <li>{{$student['first_name']}} {{$student['last_name']}} </li>
        @endforeach
    </ul>
@include('partials.__footer')