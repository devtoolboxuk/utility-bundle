<?php

namespace devtoolboxuk\utilitybundle\handlers;

use Symfony\Component\Console\Helper\ProgressIndicator as Indicator;

class ProgressIndicator extends Handler
{
    private $progressIndicator;


    /**
     * @param $output
     */
    public function initProgressIndicator($output)
    {
        $this->progressIndicator = new Indicator($output);
    }

    /**
     * @param string $message
     */
    public function setMessage($message = '')
    {
        $this->progressIndicator->setMessage($message);
    }

    /**
     * @param string $message
     */
    public function advance($message = '')
    {
        $this->progressIndicator->advance($message);
    }

    /**
     * @param string $message
     */
    public function start($message = '')
    {
        $this->progressIndicator->start($message);
    }

    /**
     * @param string $message
     */
    public function finish($message = '')
    {
        $this->progressIndicator->finish($message);
    }
}