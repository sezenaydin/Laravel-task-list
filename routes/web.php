<?php
use \App\Http\Requests\TaskRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use \App\Models\Task;
use Illuminate\Support\Facades\Request;

Route::get('/', function(){
    return redirect()-> route('tasks.index');
});

Route::get('/tasks', function () {
     return view('index', [
         'tasks' => \App\Models\Task::latest()->paginate(10) 
     ]);
})->name('tasks.index');


Route::view('/tasks/create', 'create')->name('tasks.create');


//CREATE

Route::post('/tasks' , function (TaskRequest $request){

    $task = Task::create($request ->validated());

    return redirect()->route('tasks.show' , ['task' => $task->id])
        ->with('success', 'Cretated succesfully!');

})-> name('tasks.store');

//EDİT

Route::put('/tasks/{task}' , function (Task $task,TaskRequest $request){

    $task -> update($request -> validated());


    return redirect()->route('tasks.show' , ['task' => $task->id])
        ->with('success', 'Editing succesfully!');

})-> name('tasks.update');

//DELETE

Route::delete('/tasks/{task}' , function (Task $task) {
    $task -> delete();

    return redirect() -> route ('tasks.index')
        ->with('success', 'Deleted successfully!');

})-> name('tasks.destroy');


Route::put('tasks/{task}/toggle-complete', function (Task $task) {

    $task->toggleComplete();

    return redirect()-> back()->with ('success','Task updated successfully!!');

})->name('tasks.toggle-complete');



Route::get('/tasks/{task}/edit', function (Task $task) {

    return view('edit',[

        'task'=>  $task
    ]);

})->name('tasks.edit');






Route::get('/tasks/{task}', function (Task $task) {

    return view('show',[

        'task'=>  $task
    ]);

})->name('tasks.show');
