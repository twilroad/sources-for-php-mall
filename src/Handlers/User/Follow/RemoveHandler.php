<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 16:52
 */
namespace Notadd\Mall\Handlers\User\Follow;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\UserFollow;

/**
 * Class RemoveHandler.
 */
class RemoveHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $this->validate($this->request, [
            'id' => 'required|numeric',
        ], [
            'id.numeric'  => '足迹 ID 必须为数值',
            'id.required' => '足迹 ID 必须填写',
        ]);
        $this->beginTransaction();
        $follow = UserFollow::query()->find($this->request->input('id'));
        if ($follow instanceof UserFollow && $follow->delete()) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('删除用户收藏信息成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('没有对应的用户收藏信息！');
        }
    }
}
