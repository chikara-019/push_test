<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;//storeメソッドで受け取った値をデータベースに保存するため
use Illuminate\Support\Facades\Validator;//「追加する」を押した際にタスクに他にも入力していないとエラーになってしまう為、バリデーションチェックを行うため必要

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = Task::all();tasksテーブルの全部のデータを$tasksに入れる->
        // return view('tasks.index', compact('tasks'));$tasksをviewにたtasksという変数名で渡してる
        // return view('tasks.index', ['tasks' => $tasks]);こっちの記載でもok

        $tasks = Task::where('status', false)->get();//未完成のもだけ取得

        return view('tasks.index', compact('tasks'));

        // $変数 = モデルクラス::where(カラム名, 値)->get(); 複数のレコードを取得
        // $変数 = モデルクラス::where(カラム名, 値)->first(); 最初のレコードだけ取得
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//データベースに保存する際に使用
    {

        $rules = ['task_name' => 'required|max:100',];

        $messages = ['required' => '必須項目です', 'max' => '100文字以下で入力してください。'];

        validator::make($request->all(), $rules, $messages) -> validate();

        

        $task = new task;

        $task->name = $request->input('task_name');

        $task -> save();//データベースに保存

        return redirect('/tasks');//tasksが呼び出されるようにredirectメソッドを使用してリダイレクトを行う
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//editメソッドが呼ばれるのは/tasks/タスクのid/editにアクセスがあった時
    {
        $task = Task::find($id);//タスクidがeditメソッドの変数$idとして渡ってくる
        //findはテーブルのidカラムの指定の番号の物を検索
        //テーブルのプライマリーキーが「id」という名前が前提なので、プライマリーキーのカラム名が「id」でない場合、上手く動かない
        //もし違う場合はModelで$primarykeyの絡む名を指定すればok
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
     
       //「編集する」ボタンをおしたとき
       if ($request->status === null) {
         $rules = [
           'task_name' => 'required|max:100',
         ];
     
         $messages = ['required' => '必須項目です', 'max' => '100文字以下にしてください。'];
     
         Validator::make($request->all(), $rules, $messages)->validate();
     
     
         //該当のタスクを検索
         $task = Task::find($id);
     
         //モデル->カラム名 = 値 で、データを割り当てる
         $task->name = $request->input('task_name');
     
         //データベースに保存
         $task->save();
       } else {
         //「完了」ボタンを押したとき
     
         //該当のタスクを検索
         $task = Task::find($id);
     
         //モデル->カラム名 = 値 で、データを割り当てる
         $task->status = true; //true:完了、false:未完了
     
         //データベースに保存
         $task->save();
       }
     
     
       //リダイレクト
       return redirect('/tasks');
    }
   


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//データベースのレコードを削除するためのアクション、タスクを特定して削除するために使用、「削除」ボタンをクリックすると、controllerに送信
    {
        Task::find($id)->delete();

        return redirect('/tasks');
    }
}
