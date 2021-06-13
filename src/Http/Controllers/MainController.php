<?php

namespace wolf\lpmanager\Http\Controllers;
use Illuminate\Routing\Controller;
use wolf\lpmanager\Http\Traits\ComposerReader;

class MainController extends Controller
{
    use ComposerReader;


    public function __invoke()
    {

        $depends = self::getRequirements();
        $dev_depends = self::getDevRequirements();
        $counts = [
            'depends' => count($depends),
            'dev_depends' => count($dev_depends),
            'libraries'=> $this->countFromType('library'),
            'projects' => $this->countFromType('project'),
            'metapackages' => $this->countFromType('meta-package'),
            'composer_plugins' => $this->countFromType('composer-plugin')
        ];

        return view('lpmanager::index', compact('depends', 'dev_depends','counts'));
    }

    private function countFromType(string $type) : int
    {
        $returned = [];
        foreach(self::getAllRequirements() as $depend)
        {
            if($depend['type'] == $type)
            {
                array_push($returned ,$depend);
            }
        }
        return count($returned);
    }
}
