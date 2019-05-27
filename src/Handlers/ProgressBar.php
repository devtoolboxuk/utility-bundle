<?php

namespace devtoolboxuk\utilitybundle\handlers;

use Symfony\Component\Console\Helper\ProgressBar as Bar;

class ProgressBar extends Handler
{
    private $progressBar;
    
    /**
     * @param $output
     * @param $count
     */
    protected function initProgressBar($output, $count)
    {
        $this->progressBar = new Bar($output, $count);
        $this->setFormat();
    }

    /**
     * @param string $format
     */
    public function setFormat($format = ' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s% ')
    {
        $this->progressBar->setFormat($format);
    }

    public function advance()
    {
        $this->progressBar->advance();
    }

    public function finish()
    {
        $this->progressBar->finish();
    }
}