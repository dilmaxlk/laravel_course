{{-- @php
    $students = ['Dilshan', 'Kamal', 'Nimal', 'Sunil', 'Ama', 'Nithish'];    
@endphp

@foreach ($students as $student)

@continue($student == 'Ama')
@break($student == 'Ama')


    {{$student}} <br>
@endforeach --}}




{{-- //----------------------------------------------------------------- --}}


{{-- @php
    $students = ['Dilshan', 'Kamal', 'Nimal', 'Sunil', 'Ama', 'Nithish'];    
@endphp

@foreach ($students as $student)

@if($student == 'Ama')
@break
@endif

    {{$student}} <br>
@endforeach --}}


{{-- //----------------------------------------------------------------- --}}


{{-- @php
    $students = ['Dilshan', 'Kamal', 'Nimal', 'Sunil'];    
@endphp

@foreach ($students as $student)

@if($student == 'Kamal')
@continue
@endif

    {{$student}} <br>
@endforeach --}}

{{-- //----------------------------------------------------------------- --}}
{{-- @php
    $students = ['Dilshan', 'Kamal', 'Nimal', 'Sunil'];    
@endphp


@forelse ($students as $student)
    {{$student}} <br>
@empty
    No Students Found
@endforelse --}}

{{-- //----------------------------------------------------------------- --}}

{{-- @php
    $students = ['Dilshan', 'Kamal', 'Nimal', 'Sunil'];    
@endphp

@foreach ($students as $student)
    {{$student}} <br>
@endforeach --}}

{{-- //----------------------------------------------------------------- --}}

{{-- @for ($i = 0; $i < 10; $i++)
    <p>Dilshan</p>
@endfor --}}