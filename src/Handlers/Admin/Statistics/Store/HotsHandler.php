<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-22 18:11
 */
namespace Notadd\Mall\Handlers\Admin\Statistics\Store;

use Illuminate\Support\Collection;
use Notadd\Foundation\Routing\Abstracts\Handler;

/**
 * Class HotsHandler.
 */
class HotsHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $data = new Collection();
        $this->withCode(200)->withData($data)->withMessage('');
    }
}
