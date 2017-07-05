<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 20:03
 */
namespace Notadd\Mall\Handlers\Seller\Product\Specification;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ProductSpecification;

/**
 * Class ListHandler.
 */
class ListHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->validate($this->request, [
            'order'    => 'in:asc,desc',
            'page'     => 'numeric',
            'paginate' => 'numeric',
        ], [
            'order.in'         => '排序规则错误',
            'page.numeric'     => '当前页面必须为数值',
            'paginate.numeric' => '分页数必须为数值',
        ]);
        $builder = ProductSpecification::query();
        $builder->orderBy('created_at', $this->request->input('order', 'desc'));
        $builder = $builder->paginate($this->request->input('paginate', 20));
        $this->withCode(200)
            ->withData($builder->items())
            ->withMessage('获取产品规格列表成功！')
            ->withExtra([
                'pagination' => [
                    'total'         => $builder->total(),
                    'per_page'      => $builder->perPage(),
                    'current_page'  => $builder->currentPage(),
                    'last_page'     => $builder->lastPage(),
                    'next_page_url' => $builder->nextPageUrl(),
                    'prev_page_url' => $builder->previousPageUrl(),
                    'from'          => $builder->firstItem(),
                    'to'            => $builder->lastItem(),
                ],
            ]);
    }
}
