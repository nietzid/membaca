<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\CeritaModel;
use App\Models\TestModel;

class BacaController extends BaseController
{
    public function materi()
    {
        $current_lv = session()->get('current_level') ? session()->get('current_level') : 'A';
        session()->set('current_level',$current_lv);

        if($current_lv >= 'G'){
            session()->set('current_level', 'A');
            return redirect()->to(base_url('lvl-result'));
        }
        
        $cerita = new CeritaModel();
        $ceritaData = $cerita->where('level', $current_lv)->get()->getResultArray();
        $randIndex = rand(0, (count($ceritaData) - 1));
        $data = [
            'cerita' => $ceritaData[$randIndex]
        ];
        session()->set('cerita', $ceritaData[$randIndex]['id']);
        return view('materi', $data);
    }

    public function test()
    {
        $current_cerita = session()->get('cerita');
        $test = new TestModel();
        $testData = $test->where('bacaan_id', $current_cerita)->get()->getResultArray();
        $randData = [];
        for ($i = 0; $i < 6; $i += 2) {
            $randIndex = rand($i, $i + 1);
            array_push($randData, $testData[$randIndex]);
        }
        $data = [
            'tests' => $randData
        ];
        session()->set('testData', $randData);
        return view('test', $data);
    }

    public function submitTest()
    {
        $user = new AuthModel();
        $testData = session()->get('testData');
        $jawaban = $this->request->getVar('jawaban');
        $score = session()->get('score');
        for ($i = 0; $i < 3; $i++) {
            if ($testData[$i]['jawaban'] == $jawaban[$i]) {
                $score += 1;
            }
        }
        session()->set('score', $score);
        $user->update(session()->get('id'), ['score' => $score]);
        $data = [
            'score' => $score,
            'answers' => array_column($testData, 'jawaban')
        ];
        session()->set('current_level', chr(ord(session()->get('current_level')) + 1));
        return redirect()->to(base_url('test_result'))->with('test_result', $data);
    }

    public function testResult()
    {
        return view('test_result');
    }

    public function lvlResult()
    {
        $user = new AuthModel();
        $level = (int)(((session()->get('score'))-1)/3);
        $level = chr(ord('A')+ $level);
        session()->set('level',$level);
        $user->update(session()->get('id'), ['level' => $level]);
        session()->set('score',0);
        return view('lvl_result');
    }
}
