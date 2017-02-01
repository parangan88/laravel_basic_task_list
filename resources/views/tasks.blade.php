@extends('layouts.app')

 @section('content')

   <!-- Bootstrap Boilerplate... -->

   @if (count($tasks) > 0)
       @foreach ($tasks as $task)
           <tr>
                <!-- Task Name -->
                <td class="table-text">
                    <div>{{ $task->name }}</div>
                    </td>

               <td>
                    <!-- TODO: Delete Button -->

               <form action="{{ url('task/'.$task->id) }}" method="post">

                   {!! csrf_field() !!}
                   {!! method_field('DELETE') !!}
                   <button>Delete Task</button>

                   </form>
               </td>
           </tr>
       @endforeach
   @endif

<div class="panel-body">
       <!-- Display Validation Errors -->
       @include('common.errors')

       <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
             {!! csrf_field() !!}

             <!-- Task Name -->
           <div class="form-group">
                 <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                 </div>

            <!-- Add Task Button -->
             <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-6">
                     <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                         </button>
                     </div>
                 </div>
             </form>
         </div>

    <!-- TODO: Current Tasks -->
    @endsection