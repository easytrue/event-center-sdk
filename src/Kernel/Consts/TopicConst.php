<?php

declare(strict_types=1);

namespace Cblink\Service\EventCenter\Kernel\Consts;

class TopicConst
{
    public const ORDER = 'order';
    public const USER = 'user';
    public const PRODUCT = 'product';
    public const PARTY = 'party';
    public const LOW_CODE = 'low_code';
    public const SHOP_DELIVERY = 'shop_delivery';
    public const SALESMAN = 'salesman';

    public const TOPIC = [
        self::ORDER => '订单',
        self::PRODUCT => '商品',
        self::USER => '用户',
        self::PARTY => '组织架构',
        self::LOW_CODE => '低代码',
        self::SHOP_DELIVERY => '门店配送',
        self::SALESMAN => '分销',
    ];

    public const TYPE = [
        self::ORDER => [
            'name' => '订单',
            'topic' => self::ORDER,
            'types' => EventTypeConst::ORDER,
        ],
        self::USER => [
            'name' => '用户',
            'topic' => self::USER,
            'types' => EventTypeConst::USER,
        ],
        self::PARTY => [
            'name' => '组织架构',
            'topic' => self::PARTY,
            'types' => EventTypeConst::PARTY,
        ],
        self::LOW_CODE => [
            'name' => '低代码',
            'topic' => self::LOW_CODE,
            'types' => EventTypeConst::LOW_CODE,
        ],
        self::SHOP_DELIVERY => [
            'name' => '门店配送',
            'topic' => self::SHOP_DELIVERY,
            'types' => EventTypeConst::SHOP_DELIVERY,
        ],
        self::SALESMAN => [
            'name' => '分销',
            'topic' => self::SALESMAN,
            'types' => EventTypeConst::SALESMAN,
        ],
        self::PRODUCT => [
            'name' => '商品',
            'topic' => self::PRODUCT,
            'types' => EventTypeConst::PRODUCT,
        ]
    ];
}
