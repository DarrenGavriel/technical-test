@php
    $total = count($todos);
    $totalTimeTracked = 0;
@endphp
<table>
    <thead>
    <tr>
        <th style="font-weight: bold; text-align: center">Title</th>
        <th style="font-weight: bold; text-align: center">Assignee</th>
        <th style="font-weight: bold; text-align: center">Due Date</th>
        <th style="font-weight: bold; text-align: center">Time Tracked</th>
        <th style="font-weight: bold; text-align: center">Status</th>
        <th style="font-weight: bold; text-align: center">Priority</th>
    </tr>
    </thead>
    <tbody>
    @foreach($todos as $todo)
    @php
        $totalTimeTracked += $todo->time_tracked;
    @endphp
        <tr>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->assignee }}</td>
            <td>{{ $todo->due_date }}</td>
            <td>{{ $todo->time_tracked }}</td>
            <td>{{ $todo->status }}</td>
            <td>{{ $todo->priority }}</td>
        </tr>
    @endforeach
    <tr>
        <td style="font-weight: bold; text-align: right">TOTAL</td>
        <td></td>
        <td></td>
        <td style="font-weight: bold">{{ $totalTimeTracked }}</td>
        <td></td>
        <td></td>
        <td style="font-weight: bold">{{$total}}</td>
        <td></td>
    </tr>
    </tbody>
</table>