<?php namespace App\Http\Controllers\profile;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    /**
     *
     */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $tasks = Auth::user()->getUserTasks;
        $completedTasks = 0;

        foreach($tasks as $task){
            if($task->done){
                $completedTasks++;
            }
        }

		return view('profile/home', array(
            'completedTasks' => $completedTasks,
            'rank' => $this->getUserRank($completedTasks)
        ));
	}

    public function getTaskList(){
        $tasks = Auth::user()->getUserTasks;
        $undoneTasks = array();

        foreach($tasks as $task){
            if($task->done == false){
                $undoneTasks[] = $task;
            }
        }

        return view('profile/taskList', array(
            'tasks' => $undoneTasks
        ));
    }



    private function getUserRank($completedTasks){
        if($completedTasks < 10){
            return 'Latmask';
        } else if($completedTasks < 25){
            return 'Vardagssysslare';
        } else{
            return 'Något annat';
        }
    }

}
