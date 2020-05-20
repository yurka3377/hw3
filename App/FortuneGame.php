<?php declare(strict_types=1);

namespace App;


class FortuneGame
{
    protected  $fortuneApp;
    
    public function __construct(string $fortuneApp = null)
    {
        $this->fortuneApp = ($fortuneApp === null) ? "/usr/games/fortune" : $fortuneApp;
    }
    
    public function message(): string 
    {
        $res = '';
        exec($this->fortuneApp, $out, $rc);
        if ($rc === 0 && count($out) > 0) {
            $res = $out[0];
        }
        return $res;
    }
}
