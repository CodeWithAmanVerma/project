<?php

use App\Models\Task;

class MainController extends Controller
{
    function index()
    {
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"])) {
            $task = new Task();

            if ($task->create($_POST["title"], $_POST["description"])) {
                header("Location: " . WEB_PATH . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $task = new Task();

        $d["task"] = $task->showTask($id);

        if (isset($_POST["title"])) {
            if ($task->edit($id, $_POST["title"], $_POST["description"])) {
                header("Location: " . WEB_PATH . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $task = new Task();
        if ($task->delete($id)) {
            header("Location: " . WEB_PATH . "tasks/index");
        }
    }
}
