@extends('Layout/mainLayout')

@section('content')
<h1 class="PageName_Departments">Departments</h1>

<div id="table">

<!-- Filling column names from database -->
<table>
<tr class = "table_row">
    @foreach($departments_columns as $department_column)
    <td class="column_names"> {{ $department_column->COLUMN_NAME }} </td>
    @endforeach()
</tr>

    @foreach($departments as $department)
<tr class="table_row">
    <td class="table_cell_id"> {{ $department->id }} </td>
    <td class="table_cell_name"> {{ $department->name }} </td>
    <td class="table_cell_phone_number"> {{ $department->phone_number }} </td>
    <td class="table_cell_work_time_from"> {{ $department->work_time_from }} </td>
    <td class="table_cell_work_time_to"> {{ $department->work_time_to }} </td>
    
</tr>
@endforeach()

</table>








@endsection