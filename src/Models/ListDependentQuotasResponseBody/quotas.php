<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasResponseBody\quotas\dimensions;
use AlibabaCloud\Tea\Model;

class quotas extends Model
{
    /**
     * @description The dimensions of a quota on which the specified quota depends.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The abbreviation of the cloud service name.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_elastic-network-interfaces
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The relationship percentage between the specified quota and the quotas on which the specified quota depends.
     *
     * @example 50
     *
     * @var float
     */
    public $scale;
    protected $_name = [
        'dimensions'      => 'Dimensions',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'scale'           => 'Scale',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->scale) {
            $res['Scale'] = $this->scale;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['Scale'])) {
            $model->scale = $map['Scale'];
        }

        return $model;
    }
}
